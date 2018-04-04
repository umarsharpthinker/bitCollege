var SESSION_STATUS = Flashphoner.constants.SESSION_STATUS;
var STREAM_STATUS = Flashphoner.constants.STREAM_STATUS;
var ROOM_EVENT = Flashphoner.roomApi.events;
var connection;




$( document ).ready(function() {
    // function init_page() {
        //init api
        try {
            Flashphoner.init({flashMediaProviderSwfLocation: '../../../../media-provider.swf'});
        } catch(e) {
            $("#notifyFlash").text("Your browser doesn't support Flash or WebRTC technology necessary for work of an example");
            return;
        }
        $("#webRtcUrl").val(setURL());
        onLeft();
    // }
});

//initialize interface


function onJoined(room) {
    $(".webChatMessage").keypress(function(e) {
        if(e.which == 13) {
            var check = $('.webChatMessage').parent().children('.joinBtn').click();
            var df = $('.webChatMessage').parent().children('.sendMessageBtn').click();
        }
    });
    $(".joinBtn").off('click').click(function(){
        var thisConnectionFlag =  $(this).parent().children('.connectionCheckFlag').hasClass('true');

        //when cross chat room connection will Close here

        if(thisConnectionFlag == "false") {
            $(this).prop('disabled', true);
            room.leave().then(onLeft, onLeft);
        }
    }).prop('disabled', false);

    $('.sendMessageBtn').off('click').click(function(){
        // var message = field('webChatMessage');
        //Constom Chat Handler For Multiple User Allow Texting
            var chatClassName = 'sendMessageBtn';
            var message =  $('.'+chatClassName).parent().children('.webChatMessage').val();
            addMessage(connection.username(), message );
            $('.'+chatClassName).val("");

            var participants = room.getParticipants();
            for (var i = 0; i < participants.length; i++) {
                participants[i].sendMessage(message);
            }

        //Ends Costom here

    }).prop('disabled',false);
    $('#failedInfo').text("");
}


//Overloading Funtion for specific Requirement
// function addCostomMessage(login, message,obj) {
//     var date = new Date();
//     var time = date.getHours() + ":" + (date.getMinutes()<10?'0':'') + date.getMinutes();
//     var newMessage = time + " " + login + " - " + message.split('\n').join('<br/>') + '<br/>';
//     var chat = $( obj ).parent().parent().children('.chat');
//     chat.html(chat.html() + newMessage);
//     chat.scrollTop(chat.prop('scrollHeight'));
// }
//Costom function ends here

function onLeft() {
    $("[id$=Name]").not(":contains('NONE')").each(function(index,value) {
        $(value).text('NONE');
    });
    $(".joinBtn").off('click').click(function(){
        var thisConnectionFlag =  $(this).parent().children('.connectionCheckFlag').hasClass('true');
        if(thisConnectionFlag == "true") {
            if (validateForm()) {
                $(this).prop('disabled', true);
                muteConnectInputs();
                start();
            }
        }

    }).prop('disabled', false);
    $('.sendMessageBtn').prop('disabled', true);
    $("#localStopBtn").prop('disabled', true);
    $("#localAudioToggle").prop("disabled", true);
    $("#localVideoToggle").prop("disabled", true);
    unmuteConnectInputs();
}

function start() {
    // var url = $('#webRtcUrl').val();
    var url = "ws://89.40.127.98:8080";
    var username = $('#webRtcLogin').val();
    if (connection && connection.status() == SESSION_STATUS.ESTABLISHED) {
        //check url and username
        if (connection.getServerUrl() != url || connection.username() != username) {
            connection.on(SESSION_STATUS.DISCONNECTED, function(){});
            connection.on(SESSION_STATUS.FAILED, function(){});
            connection.disconnect();
        } else {
            joinRoom();
            return;
        }
    }
    connection = Flashphoner.roomApi.connect({urlServer: url, username: username}).on(SESSION_STATUS.FAILED, function(session){
        setStatus('#status', session.status());
        onLeft();
    }).on(SESSION_STATUS.DISCONNECTED, function(session) {
        setStatus('#status', session.status());
        onLeft();
    }).on(SESSION_STATUS.ESTABLISHED, function(session) {
        setStatus('#status', session.status());
        joinRoom();
    });
}


function joinRoom() {
    connection.join({name: getRoomName()}).on(ROOM_EVENT.STATE, function(room){
        var participants = room.getParticipants();
        console.log("Current number of participants in the room: " + participants.length);
        if (participants.length >= _participants) {
            console.warn("Current room is full");
            $("#failedInfo").text("Current room is full.");
            room.leave().then(onLeft, onLeft);
            return false;
        }
        setInviteAddress(room.name());
        if (participants.length > 0) {
            var chatState = "participants: ";
            for (var i = 0; i < participants.length; i++) {
                installParticipant(participants[i]);
                chatState += participants[i].name();
                if (i != participants.length - 1) {
                    chatState += ",";
                }
            }
            addMessage("chat", chatState);
        } else {
            addMessage("chat", " room is empty");
        }
        publishLocalMedia(room);
        onJoined(room);
    }).on(ROOM_EVENT.JOINED, function(participant){
        installParticipant(participant);
        addMessage(participant.name(), "joined");
    }).on(ROOM_EVENT.LEFT, function(participant){
        //remove participant
        removeParticipant(participant);
        addMessage(participant.name(), "left");
    }).on(ROOM_EVENT.PUBLISHED, function(participant){
        playParticipantsStream(participant);
    }).on(ROOM_EVENT.FAILED, function(room, info){
        connection.disconnect();
        $('#failedInfo').text(info);
    }).on(ROOM_EVENT.MESSAGE, function(message){
        addMessage(message.from.name(), message.text);
    });
}

function addMessage(login, message) {
    var date = new Date();
    var time = date.getHours() + ":" + (date.getMinutes()<10?'0':'') + date.getMinutes();
    var newMessage = time + " " + login + " - " + message.split('\n').join('<br/>') + '<br/>';
    var chat = $(".webChatArea");
    chat.html(chat.html() + newMessage);
    chat.scrollTop(chat.prop('scrollHeight'));
}

function installParticipant(participant) {
    if (($("[id$=Name]").not(":contains('NONE')").length + 1) == _participants) {
        console.warn("More than " + _participants + " participants, ignore participant " + participant.name());
    } else {
        var p = $("[id$=Name]:contains('NONE')")[0].id.replace('Name','');
        var pName = '#' + p + 'Name';
        var pDisplay = p + 'Display';
        $(pName).text(participant.name());
        playParticipantsStream(participant);
    }
}

function removeParticipant(participant) {
    $("[id$=Name]").each(function(index,value) {
       if ($(value).text() == participant.name()) {
           $(value).text('NONE');
       }
    });
}

function playParticipantsStream(participant) {
    if (participant.getStreams().length > 0) {
        $("[id$=Name]").each(function (index, value) {
            if ($(value).text() == participant.name()) {
                var p = value.id.replace('Name', '');
                var pDisplay = p + 'Display';
                participant.getStreams()[0].play(document.getElementById(pDisplay)).on(STREAM_STATUS.PLAYING, function (playingStream) {
                    document.getElementById(playingStream.id()).addEventListener('resize', function (event) {
                        resizeVideo(event.target);
                    });
                });
            }
        });
    }
}

function getRoomName() {
    var name = getUrlParam("roomName");
    if (name && name !== '') {
        return name;
    }
    return "room-"+createUUID(6);
}

function setInviteAddress(name) {
    $('#inviteAddress').text(window.location.href.split("?")[0] + "?roomName="+name);
}

function onMediaPublished(stream) {
    $("#localStopBtn").text("Stop").off('click').click(function(){
        $(this).prop('disabled', true);
        stream.stop();
    }).prop('disabled', false);
    $("#localAudioToggle").text("Mute A").off('click').click(function(){
        if (stream.isAudioMuted()) {
            $(this).text("Mute A");
            stream.unmuteAudio();
        } else {
            $(this).text("Unmute A");
            stream.muteAudio();
        }
    }).prop('disabled', false);
    $("#localVideoToggle").text("Mute V").off('click').click(function() {
        if (stream.isVideoMuted()) {
            $(this).text("Mute V");
            stream.unmuteVideo();
        } else {
            $(this).text("Unmute V");
            stream.muteVideo();
        }
    }).prop('disabled',false);
}

function onMediaStopped(room) {
    $("#localStopBtn").text("Publish").off('click').click(function(){
        $(this).prop('disabled', true);
        publishLocalMedia(room);
    }).prop('disabled', (connection.getRooms().length == 0));
    $("#localAudioToggle").prop("disabled", true);
    $("#localVideoToggle").prop("disabled", true);
}

//publish local video
function publishLocalMedia(room) {
    var constraints = {
        audio: true,
        video: true
    };
    room.publish({
        display: document.getElementById("localDisplay"),
        constraints: constraints,
        record: false,
        receiveVideo: false,
        receiveAudio: false
    }).on(STREAM_STATUS.FAILED, function (stream) {
        console.warn("Local stream failed!");
        setStatus("#localStatus", stream.status());
        onMediaStopped(room);
    }).on(STREAM_STATUS.PUBLISHING, function (stream) {
        setStatus("#localStatus", stream.status());
        onMediaPublished(stream);
    }).on(STREAM_STATUS.UNPUBLISHED, function(stream) {
        setStatus("#localStatus", stream.status());
        onMediaStopped(room);
    });
}

function muteConnectInputs() {
    $(':text').each(function(){
        $(this).prop('disabled', true);
    });
}

function unmuteConnectInputs() {
    $(':text').each(function(){
        $(this).prop('disabled', false);
    });
}

function validateForm() {
    var valid = true;
    $(':text').each(function(){
        if (!$(this).val()) {
            highlightInput($(this));
            valid = false;
        } else {
            removeHighlight($(this));
        }
    });
    return valid;

    function highlightInput(input) {
        input.closest('.form-group').addClass("has-error");
    }
    function removeHighlight(input) {
        input.closest('.form-group').removeClass("has-error");
    }
}

function setStatus(selector, status) {
    var statusField = $(selector);
    statusField.text(status).removeClass();
    if (status == "PUBLISHING" || status == "ESTABLISHED") {
        statusField.attr("class","text-success");
    } else if (status == "DISCONNECTED" || status == "UNPUBLISHED") {
        statusField.attr("class","text-muted");
    } else if (status == "FAILED") {
        statusField.attr("class","text-danger");
    }
}
