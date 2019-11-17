<?php
    session_start();

    if($_POST)
    {
        if(empty($_POST['loginname']))
        {
            header('Location: index.php');
        } else
            {
            $_SESSION['loginname'] = $_POST['loginname'];
            header('Location: indexConnected.php');
        }
    }
?>

