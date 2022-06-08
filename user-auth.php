<?php
$json = file_get_contents('database.json');
$file = json_decode($json, true);
$name = $_POST['username'];
$error_message = 'whattup b!!';

if (isset($_POST['submit'])) {
    $error_message = 'submit clicked';
    if (in_array($name, $file['users'])) {
        $error_message = 'We\'re getting somewhere';
    } else {
        $error_message = 'not like that';
    }
}