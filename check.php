<?php
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$s_name = filter_var(trim($_POST['s_name']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
if (mb_strlen($login)<3 || mb_strlen($login)>22)
  {
  echo "Недопустимая длина логина";
  exit();
  }
else if (mb_strlen($name)<3 || mb_strlen($name)>22)
  {
  echo "Недопустимая длина имени";
  exit();
  }
  else if (mb_strlen($s_name)<3 || mb_strlen($s_name)>22)
    {
    echo "Недопустимая длина фамилии";
    exit();
    }
    else if (mb_strlen($pass)<3 || mb_strlen($pass)>8)
    {
    echo "Недопустимая длина пароля(от 2 до 6 символов)";
    exit();
    }
$mysql = new mysqli('localhost','root','root','user');
$mysql->query("INSERT INTO `users` ( `name`, `s_name`, `login`, `pass`) VALUES ('$name', ('$s_name'), '$login', '$pass')") ;

$mysql->close();

 ?>