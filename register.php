<?php
require 'vendor/autoload.php';
require_once('User.php');
use Smarty\Smarty;

$smarty = new Smarty;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Create User object
    $user = new User($username, $email, $password);

    // Validate user input
    if ($user->validate() === true) {
        // Registration successful
        $smarty->assign('success', $user->register());
    } else {
        // Validation failed, display error message
        $smarty->assign('error', $user->validate());
    }

    // Pass User object to template for prefilling form fields in case of validation failure
    $smarty->assign('user', $user);
}

$smarty->display('register.tpl');