<?php

session_start();
if (isset($_SESSION['logadomp']['user_id']) ? ($_SESSION['logadomp']['user_id']) : ('')) {
    session_destroy();
    header("Location: ./login.php");
}
