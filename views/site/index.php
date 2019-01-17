<?php

/* @var $this yii\web\View */

$this->title = 'Examshop';
?>
<div class="site-index">
    <div class="body-content">
        <a href="#" class="forAjax">AJAX</a>


        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                <li data-target="#carousel-example-generic" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/slider/1.JPG" alt="" class="img-center">
                </div>
                <div class="item">
                    <img src="images/slider/2.JPG" alt="" class="img-center">
                </div>
                <div class="item">
                    <img src="images/slider/3.JPG" alt="" class="img-center">
                </div>
                <div class="item">
                    <img src="images/slider/4.JPG" alt="" class="img-center">
                </div>
                <div class="item">
                    <img src="images/slider/5.JPG" alt="" class="img-center">
                </div>
                <div class="item">
                    <img src="images/slider/6.JPG" alt="" class="img-center">
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2>Популярні товари</h2>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#phones" data-toggle="tab">Телефони</a></li>
                        <li><a href="#tablets" data-toggle="tab">Планшети</a></li>
                        <li><a href="#laptops" data-toggle="tab">Ноутбуки</a></li>
                        <li><a href="#tvs" data-toggle="tab">Телевізори</a></li>
                        <li><a href="#gadgets" data-toggle="tab">Гаджети</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active fade in" id="phones">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-5 center padding-5px">
                                        <img class="img-responsive img-center" src="images/tabs/phones_big.JPG" alt="">
                                    </div>
                                    <div class="col-md-7 padding-5px">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-12 center clear-padding">
                                                    <img class="img-responsive img-center"
                                                         src="images/tabs/phones_large.JPG" alt="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 padding-5px center">
                                                    <img class="img-responsive tab-img" src="images/tabs/phones1.jpg"
                                                         alt="">
                                                    <div class="rating">
                                                        <span class="tab-name">Xiaomi Mi 8 Lite 4/64GB Aurora Blue</span>
                                                        <span class="glyphicon glyphicon-star red"></span>
                                                        <span class="glyphicon glyphicon-star red"></span>
                                                        <span class="glyphicon glyphicon-star red"></span>
                                                        <span class="glyphicon glyphicon-star red"></span>
                                                        <span class="glyphicon glyphicon-star red"></span>
                                                        <span class="badge">59 відгуків</span>
                                                    </div>
                                                    <div>
                                                        <span>7 499 грн.</span>
                                                        <button class="btn btn-danger">Купити</button>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 padding-5px center">
                                                    <img class="img-responsive tab-img" src="images/tabs/phones2.jpg"
                                                         alt="">
                                                    <div class="rating">
                                                        <span class="tab-name">Honor 8X 4/64 GB Red (червоний)</span>
                                                        <span class="glyphicon glyphicon-star red"></span>
                                                        <span class="glyphicon glyphicon-star red"></span>
                                                        <span class="glyphicon glyphicon-star red"></span>
                                                        <span class="glyphicon glyphicon-star red"></span>
                                                        <span class="glyphicon glyphicon-star red"></span>
                                                        <span class="badge">10 відгуків</span>
                                                    </div>
                                                    <div>
                                                        <span>6 999 грн.</span>
                                                        <button class="btn btn-danger">Купити</button>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 padding-5px center">
                                                    <img class="img-responsive tab-img" src="images/tabs/phones3.jpg"
                                                         alt="">
                                                    <div class="rating">
                                                        <span class="tab-name">Huawei P Smart Plus 4/64 GB Iris Purple(блак.-фіол)</span>
                                                        <span class="glyphicon glyphicon-star red"></span>
                                                        <span class="glyphicon glyphicon-star red"></span>
                                                        <span class="glyphicon glyphicon-star red"></span>
                                                        <span class="glyphicon glyphicon-star red"></span>
                                                        <span class="glyphicon glyphicon-star red"></span>
                                                        <span class="badge">75 відгуків</span>
                                                    </div>
                                                    <div>
                                                        <span>7 999 грн.</span>
                                                        <button class="btn btn-danger">Купити</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tablets">
                            Планшети
                        </div>
                        <div class="tab-pane fade" id="laptops">
                            Ноутбуки
                        </div>
                        <div class="tab-pane fade" id="tvs">
                            Телевізори
                        </div>
                        <div class="tab-pane fade" id="gadgets">
                            Гаджети
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
