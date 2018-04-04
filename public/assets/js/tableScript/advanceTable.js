<script type="text/javascript">
    $('#datetimepicker1').datetimepicker({
        language: 'pt-BR'
    });
$('#dp1').datepicker()
$('#dpYears').datepicker();
$('#timepicker1').timepicker();
$('#t1').clockface();
$('#t2').clockface({
    format: 'HH:mm',
    trigger: 'manual'
});

$('#toggle-btn').click(function(e) {
    e.stopPropagation();
    $('#t2').clockface('toggle');
});
</script>
<script>
$(document).ready(function() {
    //Validation
    $('#contact-form').validate({
        rules: {
            name: {
                minlength: 2,
                required: true
            },
            email: {
                required: true,
                email: true
            },
            subject: {
                minlength: 2,
                required: true
            },
            message: {
                minlength: 2,
                required: true
            }
        },
        highlight: function(element) {
            $(element).closest('.control-group').removeClass('success').addClass('error');
        },
        success: function(element) {
            element
                .text('OK!').addClass('valid')
                .closest('.control-group').removeClass('error').addClass('success');
        }
    });

    // MASKED INPUT

    $("#date").mask("99/99/9999", {
        completed: function() {
            alert("Your birthday was: " + this.val());
        }
    });
    $("#phone").mask("(999) 999-9999");

    $("#money").mask("99.999.9999", {
        placeholder: "*"
    });
    $("#ssn").mask("99--AAA--9999", {
        placeholder: "*"
    });


    //COLOR PICKER
    window.prettyPrint && prettyPrint();

    // Code for those demos
    var _createColorpickers = function() {
        $('#cp1').colorpicker({
            format: 'hex'
        });
        $('#cp2').colorpicker();
        $('#cp3').colorpicker();
        var bodyStyle = $('body')[0].style;
        $('#cp4').colorpicker().on('changeColor', function(ev) {
            bodyStyle.backgroundColor = ev.color.toHex();
        });
    }

    _createColorpickers();

    $('.bscp-destroy').click(function(e) {
        e.preventDefault();
        $('.bscp').colorpicker('destroy');
    });

    $('.bscp-create').click(function(e) {
        e.preventDefault();
        _createColorpickers();
    });


});
</script>

<script type="text/javascript">
    function onAddTag(tag) {
        alert("Added a tag: " + tag);
    }

function onRemoveTag(tag) {
    alert("Removed a tag: " + tag);
}

function onChangeTag(input, tag) {
    alert("Changed a tag: " + tag);
}

$(function() {

    $('#tags_1').tagsInput({
        width: 'auto'
    });
    $('#tags_2').tagsInput({
        width: 'auto',
        onChange: function(elem, elem_tags) {
            var languages = ['php', 'ruby', 'javascript'];
            $('.tag', elem_tags).each(function() {
                if ($(this).text().search(new RegExp('\\b(' + languages.join('|') + ')\\b')) >= 0)
                    $(this).css('background-color', '#FBB44C');
            });
        }
    });
    $('#tags_3').tagsInput({
        width: 'auto',

        //autocomplete_url:'test/fake_plaintext_endpoint.html' //jquery.autocomplete (not jquery ui)
        autocomplete_url: 'test/fake_json_endpoint.html' // jquery ui autocomplete requires a json endpoint
    });


    // Uncomment this line to see the callback functions in action
    //          $('input.tags').tagsInput({onAddTag:onAddTag,onRemoveTag:onRemoveTag,onChange: onChangeTag});

    // Uncomment this line to see an input with no interface for adding new tags.
    //          $('input.tags').tagsInput({interactive:false});
});
</script>