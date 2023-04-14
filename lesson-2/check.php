<?php

    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 5 || mb_strlen($login) > 50) {
        echo "Недопустимая длинна логина";
        exit();
    } elseif(mb_strlen($name) < 2 || mb_strlen($name) > 50) {
        echo "Недопустимая длинна имени";
        exit();
    } elseif(mb_strlen($pass) < 5 || mb_strlen($pass) > 32) {
        echo "Недопустимая длинна пароля (от 5 до 32 символов)";
        exit();
    }

?>