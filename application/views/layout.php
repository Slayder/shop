<!doctype html>
<html lang="en" ng-app="Azaliya">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Торговая сеть Азалия</title>
    <link rel="stylesheet" href="<?php echo base_url('vendors/bootstrap/css/bootstrap.css')?>">
    <!--[if lt IE 9]>
      <script src="<?php echo base_url('vendors/bootstrap/html5shiv.js')?>"></script>
      <script src="<?php echo base_url('vendors/bootstrap/respond.min.js')?>"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php echo base_url('vendors/bootstrap/css/bootstrap-theme.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('vendors/fontawesome/css/font-awesome.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('vendors/autocomplete/autocomplete.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css')?>">
</head>
<body>
    <header id="header" role="banner">
        <div class="modal fade" id="modal-cart" tabindex="-1" role="dialog" aria-labelledby="modalCartLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 id="modalCartLabel" class="modal-title"><i class="icon-shopping-cart"></i> Ваша корзина</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="width: 100%">Товар</th>
                                    <th>Цена</th>
                                    <th>Количество</th>
                                    <th>Сумма</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="v-middle">1</td>
                                    <td class="v-middle">Наименование товара №1</td>
                                    <td class="v-middle nobr text-right">100 руб.</td>
                                    <td><input type="number" class="form-control text-center" placeholder="1"></td>
                                    <td class="v-middle nobr text-right">100 руб.</td>
                                </tr>
                                <tr>
                                    <td class="v-middle">2</td>
                                    <td class="v-middle">Наименование товара №2</td>
                                    <td class="v-middle nobr text-right">1 000 руб.</td>
                                    <td><input type="number" class="form-control text-center" placeholder="1"></td>
                                    <td class="v-middle nobr text-right">1 000 руб.</td>
                                </tr>
                                <tr>
                                    <td class="v-middle">3</td>
                                    <td class="v-middle">Наименование товара №3</td>
                                    <td class="v-middle nobr text-right">10 000 руб.</td>
                                    <td><input type="number" class="form-control text-center" placeholder="1"></td>
                                    <td class="v-middle nobr text-right">10 000 руб.</td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="3">Итого:</td>
                                    <td class="nobr text-center">1000</td>
                                    <td class="nobr text-right">1 000 000 руб.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer clearfix">
                        <div class="pull-left">
                            <button type="button" class="btn btn-danger" title="Очистить корзину"><i class="icon-trash"></i></button>
                        </div>
                        <div class="pull-right">
                            <button type="button" class="btn btn-primary"><i class="icon-ok"></i> Оформить заказ</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-2 no-padding">
                    <img src="http://placehold.it/210x140" class="img-responsive" alt="Third slide image">
                </div>
                <div class="col-md-7 search">
                    <p class="text-right">Здравствуйте, Гость! <a href="#">Войти</a></p>
                    <form id="form-search" role="search">
                        <div class="input-group">
                            <input id="quick-search" type="text" class="form-control" placeholder="Начните поиск здесь...">
                            <span class="input-group-btn">
                                <button class="btn btn-info" type="button"><i class="icon-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <div class="text-center">
                        <a href="#"><i class="icon-money"></i> Оплата</a> |
                        <a href="#"><i class="icon-truck"></i> Доставка</a> |
                        <a href="#"><i class="icon-time"></i> Как работает магазин</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="cart-widget">
                        <p class="text-center"><i class="icon-shopping-cart"></i> Ваша корзина</p>
                        <p>Товаров: <strong>1000</strong> <small>(сумма: <strong>1 000 000</strong> руб.)</small></p>
                        <p class="text-right no-margin">
                            <a data-toggle="modal" href="#modal-cart" class="btn btn-success"><i class="icon-eye-open"></i></a>
                            <a href="#" class="btn btn-primary"><i class="icon-ok"></i> Оформить заказ</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="catalog" role="catalog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="#">Раздел каталога 1</a></li>
                                <li><a href="#">Раздел каталога 2</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Раздел каталога 3 <i class="icon-caret-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Подкаталог 3-1</a></li>
                                        <li><a href="#">Подкаталог 3-2</a></li>
                                        <li><a href="#">Подкаталог 3-3</a></li>
                                        <li><a href="#">Подкаталог 3-4</a></li>
                                        <li><a href="#">Подкаталог 3-5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Раздел каталога 4</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Раздел каталога 5 <i class="icon-caret-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Подкаталог 5-1</a></li>
                                        <li><a href="#">Подкаталог 5-2</a></li>
                                        <li><a href="#">Подкаталог 5-3</a></li>
                                        <li><a href="#">Подкаталог 5-4</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Раздел каталога 6 <i class="icon-caret-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Подкаталог 6-1</a></li>
                                        <li><a href="#">Подкаталог 6-2</a></li>
                                        <li><a href="#">Подкаталог 6-3</a></li>
                                        <li><a href="#">Подкаталог 6-4</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Раздел каталога 7 <i class="icon-caret-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Подкаталог 7-1</a></li>
                                        <li><a href="#">Подкаталог 7-2</a></li>
                                        <li><a href="#">Подкаталог 7-3</a></li>
                                        <li><a href="#">Подкаталог 7-4</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Раздел каталога 8 <i class="icon-caret-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Подкаталог 8-1</a></li>
                                        <li><a href="#">Подкаталог 8-2</a></li>
                                        <li><a href="#">Подкаталог 8-3</a></li>
                                        <li><a href="#">Подкаталог 8-4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section id="breadcrumbs" role="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Главная страница</a></li>
                        <li class="active">Каталог</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section id="main" role="main">
         <div class="container">
            <div class="row">
                <div class="col-md-3 m-typo">
                    <div class="panel-group" id="news">
                        <h4 class="page-header">Новости</h4>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#news" href="#news-1">
                                        Заголовок новости №1
                                    </a>
                                </h4>
                            </div>
                            <div id="news-1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    Текст новости.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#news" href="#news-2">
                                        Заголовок новости №2
                                    </a>
                                </h4>
                            </div>
                            <div id="news-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Текст новости
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#news" href="#news-3">
                                        Заголовок новости №3
                                    </a>
                                </h4>
                            </div>
                            <div id="news-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Текст новости
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-group" id="vacancies">
                        <h4 class="page-header">Требуются</h4>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#vacancies" href="#vacancy-1">
                                        Вакансия №1
                                    </a>
                                </h4>
                            </div>
                            <div id="vacancy-1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Текст вакансии.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#vacancies" href="#vacancy-2">
                                        Вакансия №2
                                    </a>
                                </h4>
                            </div>
                            <div id="vacancy-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Текст вакансии
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#vacancies" href="#vacancy-3">
                                        Вакансия №3
                                    </a>
                                </h4>
                            </div>
                            <div id="vacancy-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Текст вакансии
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div id="carousel-example-generic" class="carousel slide m-typo">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="http://placehold.it/850x250" alt="First slide image">
                                <div class="carousel-caption">
                                    <h3>First slide label</h3>
                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/850x250" alt="Second slide image">
                                <div class="carousel-caption">
                                    <h3>Second slide label</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/850x250" alt="Third slide image">
                                <div class="carousel-caption">
                                    <h3>Third slide label</h3>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <div id="coods">
                        <!-- base template -->
                        <div class="shopfront">
                            <div class="panel">
                                <div class="panel-heading">Наименование товара</div>
                                <div class="panel-body">
                                    <div class="shopfront-img"><img src="http://placehold.it/160x160"></div>
                                    <div class="shopfront-description text-muted">Краткое описание</div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="shopfront-price">1 234 р.</span>
                                        </div>
                                        <div class="pull-right">
                                            <button class="btn btn-success"><i class="icon-shopping-cart"></i></button>
                                            <button class="btn btn-primary"><i class="icon-ok"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end base template -->
                        <div class="shopfront">
                            <div class="panel">
                                <div class="panel-heading">Наименование товара</div>
                                <div class="panel-body">
                                    <div class="shopfront-img"><img src="http://placehold.it/160x160"></div>
                                    <div class="shopfront-description text-muted">Краткое описание</div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="shopfront-price">1 234 р.</span>
                                        </div>
                                        <div class="pull-right">
                                            <button class="btn btn-success"><i class="icon-shopping-cart"></i></button>
                                            <button class="btn btn-primary"><i class="icon-ok"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shopfront">
                            <div class="panel">
                                <div class="panel-heading">Наименование товара</div>
                                <div class="panel-body">
                                    <div class="shopfront-img"><img src="http://placehold.it/160x160"></div>
                                    <div class="shopfront-description text-muted">Краткое описание</div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="shopfront-price">1 234 р.</span>
                                        </div>
                                        <div class="pull-right">
                                            <button class="btn btn-success"><i class="icon-shopping-cart"></i></button>
                                            <button class="btn btn-primary"><i class="icon-ok"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shopfront">
                            <div class="panel">
                                <div class="panel-heading">Наименование товара</div>
                                <div class="panel-body">
                                    <div class="shopfront-img"><img src="http://placehold.it/160x160"></div>
                                    <div class="shopfront-description text-muted">Краткое описание</div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="shopfront-price">1 234 р.</span>
                                        </div>
                                        <div class="pull-right">
                                            <button class="btn btn-success"><i class="icon-shopping-cart"></i></button>
                                            <button class="btn btn-primary"><i class="icon-ok"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shopfront">
                            <div class="panel">
                                <div class="panel-heading">Наименование товара</div>
                                <div class="panel-body">
                                    <div class="shopfront-img"><img src="http://placehold.it/160x160"></div>
                                    <div class="shopfront-description text-muted">Краткое описание</div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="shopfront-price">1 234 р.</span>
                                        </div>
                                        <div class="pull-right">
                                            <button class="btn btn-success"><i class="icon-shopping-cart"></i></button>
                                            <button class="btn btn-primary"><i class="icon-ok"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Здесь можно расположить различные <a href="#">ссылки</a></p>
                    <p>Или добавить адресс компании</p>
                    <p>Различные <a href="#">копирайты</a> и тому <a href="#">продобные хрени</a></p>
                </div>
                <div class="col-md-5">
                    <p>Полезные ссылки</p>
                    <p><a href="#">Условия работы</a></p>
                    <p><a href="#">Договор</a></p>
                    <p><a href="#">Поставщикам</a></p>
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-default"><i class="icon-chevron-sign-up"></i> Вверх</button>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?php echo base_url('vendors/jquery/jquery.js')?>"></script>
    <script src="<?php echo base_url('vendors/bootstrap/js/bootstrap.js')?>"></script>
    <script src="<?php echo base_url('vendors/angular/angular.js')?>"></script>
    <script src="<?php echo base_url('vendors/angular/angular-resource.js')?>"></script>
    <script src="<?php echo base_url('vendors/angular/angular-locale.js')?>"></script>
    <script src="<?php echo base_url('vendors/autocomplete/autocomplete.js')?>"></script>
    <script src="<?php echo base_url('js/application.js')?>"></script>
</body>
</html>