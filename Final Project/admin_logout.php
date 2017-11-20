<?php
session_start();
session_unset();
session_destroy();
header("location:cifc_admin_login_form.html");
?>