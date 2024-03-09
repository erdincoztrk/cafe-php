
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Add User</h4>
            </div>
            <div class="modal-body">

                <div class="row clearfix">
                    <form id="addUserForm">
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="user_name">Name</label>
                                    <input type="text" class="form-control" placeholder="Name" id="user_name"
                                           name="user_name">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="user_surname">Surname</label>
                                    <input type="text" class="form-control" placeholder="Surname" id="user_surname"
                                           name="user_surname">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-xs-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="user_mail">Mail</label>
                                    <input type="text" class="form-control" placeholder="Mail" id="user_mail"
                                           name="user_mail">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-xs-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="user_gsm">GSM</label>
                                    <input type="tel" class="form-control" placeholder="GSM" id="user_gsm"
                                           name="user_gsm">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="user_username">Username</label>
                                    <input type="text" class="form-control" placeholder="Username" id="user_username"
                                           name="user_username">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="user_password">Password</label>
                                    <input type="password" class="form-control" placeholder="Password"
                                           id="user_password" name="user_password"/>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" onclick="addUser($('#addUserForm'))">Add User</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>