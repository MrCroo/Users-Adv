<?php

include 'include/autoloader.inc.php';

if(isset($_POST['submit'])) {
    if (empty($_POST["newUser"])) {
        $nameErr = "Name is required";
      }else {
    $newUser = $_POST['newUser'];
    $newObj = new Controller();

    $newObj->createUser($newUser);
    }
}
header("Location: user.page.php?useradded");