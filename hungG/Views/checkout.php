<?php
session_start();

unset($_SESSION['cart']);

header("Location: thank_you.php");
exit;
