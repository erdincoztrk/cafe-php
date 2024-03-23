<?php
require_once("../../../Classes/dbConnection.php");
$db = new DataBase();
$users = $db->getRow("SELECT * FROM tbusers WHERE user_id = {$_GET['user_id']}");
$usertypes = $db->getRows("SELECT * FROM tbusertype");
?>
<div class="row clearfix">
    <form id="addUserForm">
        <div class="col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <div class="form-line">
                    <label for="user_name">Name</label>
                    <input type="text" class="form-control" placeholder="Name" id="user_name"
                          value="<?=$users['user_name']?>" name="user_name">
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <div class="form-line">
                    <label for="user_surname">Surname</label>
                    <input type="text" class="form-control" placeholder="Surname" id="user_surname"
                           value="<?=$users['user_surname']?>"   name="user_surname">
                </div>
            </div>
        </div>

        <div class="col-sm-5 col-md-5 col-xs-6">
            <div class="form-group">
                <div class="form-line">
                    <label for="user_mail">Mail</label>
                    <input type="text" class="form-control" placeholder="Mail" id="user_mail"
                           value="<?=$users['user_mail']?>"   name="user_mail">
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-md-4 col-xs-6">
            <div class="form-group">
                <div class="form-line">
                    <label for="user_gsm">GSM</label>
                    <input type="tel" class="form-control" placeholder="GSM" id="user_gsm"
                           value="<?=$users['user_gsm']?>"   name="user_gsm">
                </div>
            </div>
        </div>

        <div class="col-sm-3 col-md-3 col-xs-6">
            <div class="form-group">
                <div class="form-line">
                    <label for="user_authority">Authority</label>
                    <select id="user_authority" name="user_authority" name="user_authority"
                            class="form-control">
                        <?php foreach ($usertypes as $utype): ?>
                            <option <?= $utype['utype_id'] == $users['user_authority'] ? 'selected' : '' ?> value="<?= $utype['utype_id'] ?>"><?= $utype['utype_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <div class="form-line">
                    <label for="user_username">Username</label>
                    <input type="text" class="form-control" placeholder="Username" id="user_username"
                           value="<?=$users['user_username']?>"   name="user_username">
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <div class="form-line">
                    <label for="user_password">Password</label>
                    <input type="password" class="form-control" placeholder="Password"
                           value="<?=$users['user_password']?>"  id="user_password" name="user_password"/>
                </div>
            </div>
        </div>

    </form>
</div>
