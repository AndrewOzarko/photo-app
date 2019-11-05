<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/core/core.php';


if ($_POST) {

    /** @var string $email */
    $email = $_POST['email'];
    /** @var string $password */
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        redirect('/modules/authentication');
    }

    /** @var array | bool $user */
    $user = $database->query("select * from users where email = '$email'")->fetch();

    if (!$user) {
        redirect('/modules/authentication');
    }

}
else {

    redirect('/modules/authentication');

}
