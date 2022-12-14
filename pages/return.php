<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/styles.css">
    <script src="../scripts/jquery.min.js"></script>
    <title>Based Suit</title>
</head>
<body>
    <div class="page-container w-75 h-100">
            <!-- Navbar -->
                <header>
            <nav class="navbar navbar-expand-lg navbar-light black">
                <div class="container-fluid">
                    <a class="navbar-brand fs-4" href="../index.php" style="color:white;">Based Suit</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav navbar-center mx-auto w-75 fs-5 d-flex justify-content-between">
                        
                            <li class="mr-2 nav-item">
                                <a class="nav-link active" href="catalog.php" style="color:white;">Каталог</a>
                            </li>
                            <li class=" mr-2 nav-item">
                                <a class="nav-link active" href="sales.php" style="color:white;">Акции</a>
                            </li>
                            <li class="mr-2 nav-item">
                                <a class="nav-link active" href="new.php" style="color:white;">Новинки</a>
                            </li>
                            <li class="mr-2 nav-item">
                                <a class="nav-link active" href="about.php" style="color:white;">О магазине</a>
                            </li>
                            <li class="mr-2 nav-item">
                                <a class="nav-link active" href="delivery.php" style="color:white;">Доставка</a>
                            </li>
                        </ul>
                        <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                            <img src="../styles/img/cart.png" width="30" height="30" style="border-radius: 0px; margin-right: 20px"/>
                          </a>
                        <form action="search.php" method="post">
							<input class="btn bg-white text-black" type="text" name="searchText">
							<input class="btn bg-black text-white my-1" type="submit" value="Искать">
						</form>
                    </div>
                    
                </div>
            </nav>
        </header>
        <div class="container h-75">
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
                            <img class='mx-auto img-thumbnail' src="../styles/img/1.webp" width="auto" height="auto" />
                            <div class="card-body text-center mx-auto">
                                <h5 class="card-title">Мужской классический деловой костюм</h5>
                                <p class="card-text">6 962,00 ₽</p>
								<p><button>Удалить из корзины</button></p>
                            </div>
                        </div>
                        <div class="card mx-auto col-md-3 w-50 col-10 mt-5">
                            <img class='mx-auto img-thumbnail' src="../styles/img/2.webp" width="auto" height="auto" />
                            <div class="card-body text-center mx-auto">
                                <h5 class="card-title">Мужской классический деловой костюм</h5>
                                <p class="card-text">6 136,00 ₽</p>
								<p><button>Удалить из корзины</button></p>
                            </div>
                        </div>
                        <div class="card mx-auto col-md-3 w-50 col-10 mt-5">
                            <img class='mx-auto img-thumbnail' src="../styles/img/3.webp" width="auto" height="auto" />
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
            <div class="container w-100 h-50 mt-5" >
                <div class="d-flex flex-column justify-content-center align-content-middle mx-auto text-center w-50 h-100">
                    <span class="form-header fs-1 fw-bold text-black">
                        Форма возврата
                    </span>
                    <form class="insta-form w-100 justify-content-center">
                        <input class="w-75 mt-2 border-0  gray mr-5 pt-2 pb-2" type="text" placeholder="Введите свою электронную почту" style="color:white;"/>
                        <br>
						<br>
                        <button class="btn btn-dark">Отправить</button>
                    </form>
                </div>
            </div>
            <!--Second Section-->
            <br>
            

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
                    <li class="nav-item mb-2"><a href="delivery.php" class="nav-link p-0 text-muted">Доставка и оплата</a></li>
                    <li class="nav-item mb-2"><a href="return.php" class="nav-link p-0 text-muted">Возврат и обмен</a></li>
                    <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-muted">О магазине</a></li>
                    
                  </ul>
                </div>
              </footer>
        </footer>
    </div>
</body>
</html>