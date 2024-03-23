<?php
include("getInclude/includes.php");
?>

<div id="userList">
<?php partial("user/_user-list.php"); ?>
</div>

<div id="addUserModel">
<?php partial("user/_add-user-modal.php") ?>
</div>

<div id="editUserModel">
    <?php partial("user/_edit-user-modal.php") ?>
</div>