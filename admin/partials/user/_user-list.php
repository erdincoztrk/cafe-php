<?php
include("getInclude/db-include.php");
$users = $db->getRows("SELECT * FROM tbusers");
$counter = 0;
?>
<h3>Users</h3>


<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header" style="display:flex;justify-content: space-between;align-items: center;">
                <div class="m-l-20"><h2>User List</h2></div>
                <div>
                    <button type="button" class="btn btn-success waves-effect m-r-20" data-toggle="modal"
                            data-target="#defaultModal">
                        <i class="material-icons">add</i>
                    </button>
                </div>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable"
                           style="table-layout: auto;">
                        <thead>
                        <tr>
                            <th style="width: 20px;">*</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Authority</th>
                            <th style="width: 30px;">Transactions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user): $counter++; ?>
                            <tr>
                                <td><?= $counter ?></td>
                                <td><?= $user['user_username'] ?></td>
                                <td><?= $user['user_name'] ?></td>
                                <td><?= $user['user_surname'] ?></td>
                                <td><?php
                                    $authorities = $db->getRow("SELECT * FROM tbusertype WHERE utype_id = {$user['user_authority']}");
                                    echo $authorities['utype_name']
                                    ?></td>
                                <td>
                                    <div style="display:flex;">
                                        <button class="btn waves-effect waves-blue" data-toggle="modal"
                                                data-target="#editUserModal" onclick="editUser(<?=$user['user_id']?>)" style="margin-right:.5rem;"><i class="material-icons">edit</i></button>
                                        <button class="btn waves-effect waves-red" type="button" onclick="deleteUser(<?=$user['user_id']?>)"><i class="material-icons">delete</i></button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



