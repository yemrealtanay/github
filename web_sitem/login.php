<?php

include "data.php";

if (isset($_POST['username']) and isset($_POST['psw'])) {
    foreach ($usersJson as $key => $value) {
      // code...
    }

    if ($_POST['username'] and $_POST['psw']) {
        $_SESSION['username'] =;
        header("Location: index.php");
        die();
    } else {
        $warning = "User credentials doesn't match.";
    }
}
