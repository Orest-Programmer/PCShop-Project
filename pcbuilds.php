<?php
	require "db.php";
	$user = R::findOne('users', 'id = ?', array($_SESSION['user']->id));

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css?<?echo time();?>">
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

                <div class="col-1">
                    <a href="#"><img src="img/heart.png" alt="like" class="heart_img"></a>
                    <a href="#"><img src="img/basket.png" alt="basket" class="basket_img"></a>
                </div>

						<?php if($user) : ?>
							
								<a href="#" class="col-1 user"><?php echo $user->name;?></a>
								<div class="btns col-1">
									<a href="logout.php" class="button_logout">
										Вийти
									</a>
								</div>
							

						<?php else :?>
								<div class="btns col-2">
                            <a href="login-test.php" class="col-1 button_login">
                                Логін
                            </a>
                            <a href="register-test.php" class="col-1 button_register">
                                Реєстрація
                            </a>
                        </div>
						<?php endif; ?>


                        
           </div>

       </div>
   </div>

    <div class="navigation">
        <div class="container">
            <div class="nav_items row justify-content-between">
                <a href="pcbuilds.php" class="col-1">Зборки</a>
                <a href="periphery.php" class="col-2 text-center">Комп’ютерна переферія</a>
                <a href="complementary.php" class="col-1">Комплектуючі</a>

            </div>
        </div>
    </div>
</header>
    <section>
    <div class="container main_section">
        <row class="row justify-content-between">
            <div class="filter col-2">
                <p> saodosadoasooda </p>
                <p> saodosadoasooda </p>
                <p> saodosadoasooda </p>
                <p> saodosadoasooda </p>
                <p> saodosadoasooda </p>
                <p> saodosadoasooda </p>
                <p> saodosadoasooda </p>
                <p> saodosadoasooda </p>
            </div>

            <div class="staff col-10">
                <row class="row justify-content-between">
                <div class="tovar col-5">
                    <img src="img/materynka.jpg" height="160" width="160">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, minima quam. Animi asperiores dicta earum error, illo laboriosam libero magni natus nulla officiis perspiciatis qui rerum sed sint veniam voluptatem!</p>
                    <button>Open</button>
                </div>
                 <div class="tovar col-5">
                    <img src="img/materynka.jpg" height="160" width="160">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, minima quam. Animi asperiores dicta earum error, illo laboriosam libero magni natus nulla officiis perspiciatis qui rerum sed sint veniam voluptatem!</p>
                    <button>Open</button>
                </div>
                    </row>
            </div>
        </row>
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

