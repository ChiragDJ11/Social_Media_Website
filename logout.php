<?php
    session_start();
    session_destroy();
    header("location:sign_up_page.php");
?>