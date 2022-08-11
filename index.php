<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">
    <script src="scripts/jquery.min.js"></script>
    <script src="scripts/cart.js"></script>
    <title>Based Suit</title>
</head>
<body>
    <div class="page-container w-75 h-100">
            <!-- Navbar -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light black">
                <div class="container-fluid">
                    <a class="navbar-brand fs-4" href="#" style="color:white;">Based Suit</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav navbar-center mx-auto w-75 fs-5 d-flex justify-content-between">
                        
                            <li class="mr-2 nav-item">
                                <a class="nav-link active" href="pages/catalog.php" style="color:white;">Каталог</a>
                            </li>
                            <li class=" mr-2 nav-item">
                                <a class="nav-link active" href="pages/sales.php" style="color:white;">Акции</a>
                            </li>
                            <li class="mr-2 nav-item">
                                <a class="nav-link active" href="pages/new.php" style="color:white;">Новинки</a>
                            </li>
                            <li class="mr-2 nav-item">
                                <a class="nav-link active" href="pages/about.php" style="color:white;">О магазине</a>
                            </li>
                            <li class="mr-2 nav-item">
                                <a class="nav-link active" href="pages/delivery.php" style="color:white;">Доставка</a>
                            </li>
                        </ul>
                        <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                            <img src="styles/img/cart.png" width="30" height="30" style="border-radius: 0px; margin-right: 20px"/>
                          </a>
                       <form action="pages/search.php" method="post">
							<input class="btn bg-white text-black" type="text" name="searchText">
							<input class="btn bg-black text-white my-1" type="submit" value="Искать">
						</form> 
                    </div>
                    
                </div>
            </nav>
        </header>
        <div class="container">
            <div class="offcanvas offcanvas-start w-25" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h3 class="offcanvas-title bold" id="offcanvasExampleLabel">Корзина</h3>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body w-100">
                    <div>
                        Ваши товары:
                    </div>
                    <div class='container-fluid w-100 h-25 cart-container' id="cart-container">
                        <div class="card mx-auto col-md-3 w-50 col-10 mt-5">
                            <img class='mx-auto img-thumbnail' src="styles/img/1.webp" width="auto" height="auto" />
                            <div class="card-body text-center mx-auto">
                                <h5 class="card-title">Мужской классический деловой костюм</h5>
                                <p class="card-text">6 962,00 ₽</p>
								<p><button>Удалить из корзины</button></p>
                            </div>
                        </div>
                        <div class="card mx-auto col-md-3 w-50 col-10 mt-5">
                            <img class='mx-auto img-thumbnail' src="styles/img/2.webp" width="auto" height="auto" />
                            <div class="card-body text-center mx-auto">
                                <h5 class="card-title">Мужской классический деловой костюм</h5>
                                <p class="card-text">6 136,00 ₽</p>
								<p><button>Удалить из корзины</button></p>
                            </div>
                        </div>
                        <div class="card mx-auto col-md-3 w-50 col-10 mt-5">
                            <img class='mx-auto img-thumbnail' src="styles/img/3.webp" width="auto" height="auto" />
                            <div class="card-body text-center mx-auto">
                                <h5 class="card-title">Мужской классический деловой костюм</h5>
                                <p class="card-text">6 136,00 ₽</p>
								<p><button>Удалить из корзины</button></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--First Section-->
            <div class="container w-100 mt-2">
                <div class="card float-right w-100 border-0  d-flex justify-content-between">
                    <div class="row">
                      <div class="col-sm-6">
                        <img class="d-block w-100" src="styles/img/original.jpeg" alt="">
                      </div>
                      <div class="col-sm-5 align-middle d-flex">
                        <div class="card-block fs-2 d-flex flex-column my-auto justify-content-center align-middle">
                            <span class="first-header fw-bold">Деловой стиль одежды для мужчин.</span>
                            <p class="first-text" style="font-size:20pt;">
                                Всем известно, что успешная карьера делового мужчины зависит от множества разных факторов. И далеко не последнее место в этом списке занимает внешний вид. Деловой стиль одежды для мужчин – это вещи, свидетельствующие об имиджевом статусе и хорошем вкусе их владельца.
                            </p>
                        </div>
                      </div>
               
                    </div>
                  </div>
            </div>
            <!--Second Section-->
            <br>
            <div class="container w-100 d-flex flex-column">
                <div class="text-container">
                    <h2 class="fw-bold">Новая коллекция</h2>
                </div>
                <?php
                            $mysql = new mysqli('localhost','root','','BasedSuitDB');
                            $temp1 = $mysql->query("SELECT * FROM `product` ");
                            $mysql->close();
                ?>
				<?php $i = 1?>
				<?php while($products = $temp1->fetch_assoc()):?>  
					<?php if($i == 4):?>
						</div>
						<?php $i = 1?>
					<?php endif?>
					<?php if($i == 1):?>
						<div class="container d-flex flex-row">
					<?php endif?>
					<?php ++$i?>
					<div class="card  col-md-3 w-25 h-25 col-10 mt-5 mx-auto">
						<div class="d-flex border-0 flex-row-reverse">
						</div> 
						<img class='mx-auto img-thumbnail' src="styles/img/<?php echo $products['image']?>.webp" width="auto" height="auto" />
						<div class="card-body text-center mx-auto">
							<h5 class="card-title"><?php echo $products['name']?></h5>
							<p class="card-text"><?php echo $products['price']?> ₽</p>
							<p><button>Добавить в корзину</button></p>
						</div>
					</div>					
                <?php endwhile?>
				</div>
                
                <div class="container w-100 mt-5 pt-5 pl-1 pr-1 d-flex h-50 text-white flex-row justify-content-between gray">
                    <div class="col-md-3">
                        <span class="fw-bold fs-3">Размеры и скидки</span>
                        <p class="fs-4">В наличие всегда много разных размеров, а так же регулярные скидки и акции для действующих клиентов</p>
                    </div>
                    <div class="col-md-3">
                        <span class="fw-bold fs-3">Доставляем бережно</span>
                        <p class="fs-4">Бережно упаковываем и отправляем заказы курьерской службой по всей России</p>
                    </div>
                    <div class="col-md-3">
                        <img class="img-column" src="styles/img/truck.png" alt="img"  width="275" 
     height="250"/>
                    </div>
                </div>
                <div class="container w-100 mt-5 mb-5 h-50 d-flex flex-column justify-content-center align-content-middle">
                    <div class="form-text d-flex flex-column justify-content-center align-content-middle mx-auto text-center">
                        <span class="form-header fs-1 fw-bold text-black">
                            Нужна помощь?
                        </span>
                        <p class="form-text fs-5 fw-bold text-gray">
                            Просто напишите ваш никнейм в Instagram <br /> и будьте в курсе всех наших акций и специальных предложений
                        </p>
                        
                    </div>
                    <div class="d-flex flex-row justify-content-center align-content-middle mx-auto text-center w-50">
                        <form class="insta-form w-100">
                            <input class="w-75 border-0 h-100 gray mr-5 pt-2 pb-2" type="text" placeholder="Введите свою электронную почту" style="color:white;"/>
                            <button class="btn btn-dark">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!--Footer-->
        <footer>
            <footer class="row row-cols-5 py-5 my-5 border-top gray">
                
            
                <div class="col">
            
                </div>
            
                <div class="col">
                  <h5>Мы в социальных сетях</h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Вконтакте</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Инстаграм</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Телеграм</a></li>
                    
                  </ul>
                  <div class="col">
                    <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                    </a>
					<p class="text-muted">&copy; Липинский Ярослав 2021</p>
                  </div>
                </div>
            
                <div class="col">
                  <h5>Контакты</h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a class="nav-link p-0 text-muted">+7 800 555 35 35</a></li>
                    <li class="nav-item mb-2"><a  class="nav-link p-0 text-muted">info@basedsuit.oiate</a></li>
                    <li class="nav-item mb-2"><a  class="nav-link p-0 text-muted">С 9:00 до 21:00 | Без обеда и выходных</a></li>
                    <li class="nav-item mb-2"><a class="nav-link p-0 text-muted">г.Москва, ул.Петровка, д.2</a></li>
                  </ul>
                </div>
            
                <div class="col">
                    <h5>Информация</h5>
                    <ul class="nav flex-column">
                      <li class="nav-item mb-2"><a href="pages/delivery.php" class="nav-link p-0 text-muted">Доставка и оплата</a></li>
                      <li class="nav-item mb-2"><a href="pages/return.php" class="nav-link p-0 text-muted">Возврат и обмен</a></li>
                      <li class="nav-item mb-2"><a href="pages/about.php" class="nav-link p-0 text-muted">О магазине</a></li>
                      <li class="nav-item mb-2"><a href="pages/sales_chart.php" class="nav-link p-0 text-muted">График продаж</a></li>
                    </ul>
                </div>
              </footer>
        </footer>
    </div>
    <script>
        function updateList(id){
            $parent = $("#"+id).parent().parent().html().trim()
            console.log($parent)
            list.push('<div class="card mx-auto col-md-3 w-50 col-10 mt-5 pt-4"> ' + $parent + '</div>')
            refreshList()
        }
    </script>
</body>
</html>