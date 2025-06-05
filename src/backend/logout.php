<?php
    session_start();
    session_destroy();

    header('Refresh: o; URL=http://localhost/schoolar2/src/login.html')
?>    