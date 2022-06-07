<?php
$file = file_get_contents('database.json');
$error_message = '';

// if (isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])) {
//     if ($_POST['username'] !== array_search('username', $file)) {
//         $error_message = 'Username does not exist.';
//     } else {
//         $error_message = '';
//     }
//     if ($_POST['password'] !== $file) {
//         $error_message = 'Incorrect passowrd.';
//     } else {
//         $error_message = '';
//     }
// }