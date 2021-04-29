<?php

include 'include/autoloader.inc.php';

if(isset($_POST['submit'])) {
    if (empty($_POST["newAdv"])) {
        $nameErr = "Name is required";
      }else {
    $newAdv = $_POST['newAdv'];
    $userId = $_POST['userId'];
    $newObj = new Controller();

    $newObj->createAdv($userId, $newAdv);
    }
}
header("Location: advertisement.page.php?advadded");