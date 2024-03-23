<?php


?>
<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Add User</h4>
            </div>
            <div id="modal-body" class="modal-body">



            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect"
                        onclick="addUser($('#addUserForm'), 'addUserForm');">ADD USER
                </button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal" id="modalClose">CLOSE
                </button>
            </div>
        </div>
    </div>
</div>