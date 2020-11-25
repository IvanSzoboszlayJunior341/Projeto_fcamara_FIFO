<?php
    session_start();
    session_destroy();
    echo "aaa";
    header("Location: ../index.php");
?>