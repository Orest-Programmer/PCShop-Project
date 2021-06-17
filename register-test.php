<?php
require "db.php";
$data = $_POST;
$showError = False;
if(isset($data['signup'])){
    $errors = array();
    $showError = True;
    if(trim($data['name']) == ''){
        $errors[] = 'Вкажіть імя';
    }
    if(trim($data['s_name']) == ''){
        $errors[] = 'Вкажіть прізвище';
    }
    if(trim($data['login']) == ''){
        $errors[] = 'Вкажіть логін';
    }
    if(trim($data['pass']) == ''){
        $errors[] = 'Вкажіть пароль';
    }
    if(R::count('users','login = ?', array($data['login'])) > 0){
        $errors[] = 'Акаунт з таким логіном вже існує';
    }
    if(empty($errors)){
        $user=R::dispense('users');
        $user->name=$data['name'];
        $user->s_name=$data['s_name'];
        $user->login=$data['login'];
        $user->pass=password_hash($data['pass'], PASSWORD_DEFAULT);
        R::store($user);
    }
	header('Location: /login-test.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
    <title>PCShop</title>
</head>
<body>
<header>
   <div class="header_nav">
       <div class="container">
           <div class="header_body row justify-content-between">
               <div class="col-2">
                   <a href="index.php"><img src="img/logo_project.png" alt="logo" class="logo_img"></a>
               </div>
                   <div class="col-1"></div>
               <a href="index.php" class="col-3 text-center"><div class="logo_text"><h2>PCShop</h2></div></a>
                <div class="col-2"></div>
                <div class="col-1">
                    <a href="#"><img src="img/heart.png" alt="like" class="heart_img"></a>
                    <a href="#"><img src="img/basket.png" alt="basket" class="basket_img"></a>
                </div>

           </div>

       </div>
   </div>

    <div class="navigation">
        <div class="container">
            <div class="nav_items row justify-content-between">
                <a href="pcbuilds.html" class="col-1">Зборки</a>
                <a href="periphery.html" class="col-2 text-center">Комп’ютерна переферія</a>
                <a href="complementary.html" class="col-1">Комплектуючі</a>

            </div>
        </div>
    </div>
</header>

<section>
    <div class="container">
        <h1>Форма реєстрації</h1>
        <form action="register-test.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Введіть логін"><br>
            <input type="text" class="form-control" name="name" id="name" placeholder="Введіть ім`я"><br>
            <input type="text" class="form-control" name="s_name" id="s_name" placeholder="Введіть прізвище"><br>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Введіть пароль"><br>
            <button class="btn btn-success" type="submit" name="signup">Зареєструвати</button>
            <a href="login-test.php">Авторизуватися</a>
        </form>
        <p><?php if($showError){echo showError($errors);}?></p>
    </div>

</section>

<footer>
    <div class="container">
        <div class="footer">
            <div class="sots row justify-content-center">
                <div class="col-1"><a href="#"><img src="img/instagram.png" alt="instagram" width="35px"></a></div>
                <div class="col-1"><a href="#"><img src="img/google.png" alt="google" width="35px"></a></div>
                <div class="col-1"><a href="#"><img src="img/facebook.png" alt="facebook" width="35px"></a></div>

            </div>

                <div class="copyright row justify-content-center">
                    <div class="col-2">
                        <a href="#">©Copyright PCShop</a>
                    </div>
                </div>

        </div>
    </div>
</footer>
</body>
</html>

