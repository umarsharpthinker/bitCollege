<!-- Modal -->
    <div class="modal fade" id="pfaModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-body" style="padding: 0px 15px 0px 15px">

                        <h2 style="color: #374F7F">Add Product</h2>
                        <form action="/action_page.php">
                            <div class="form-group">
                                <label for="pName">Product Name:</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="vName">Version Name:</label>
                                <input type="text" class="form-control" id="vname" placeholder="Enter password" name="pwd">
                            </div>

                            <span class="btn-group">
                            <label class="webCheckBox"> <span style="color:#000059; padding-left: 30px">Remember Me</span>
                                <input  type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="checkmark"></span>
                            </label></span>
                        </form>
                    </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" data-dismiss="modal" >Submit</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color: darkgray">Close</button>
                </div>
            </div>

        </div>
    </div>