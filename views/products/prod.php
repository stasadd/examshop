<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Products */

//$this->title = $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
//\yii\web\YiiAsset::register($this);
?>
<div class="products-view">

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <h2>Apple iPhone 6 32GB Space Gray</h2>
                <p><span class="label label-danger">Код товару: 361993</span></p>
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#characteristics" data-toggle="tab">Характеристики</a></li>
                    <li><a href="#reviews" data-toggle="tab">Відгуки</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active fade in" id="characteristics">
                        <div class="container-fluid marginv-10px padding-5px">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <img src="../images/product/product1.jpg" alt="">
                                            </div>
                                            <div class="item">
                                                <img src="../images/product/product2.jpg" alt="">
                                            </div>
                                            <div class="item">
                                                <img src="../images/product/product3.jpg" alt="">
                                            </div>
                                            <div class="item">
                                                <img src="../images/product/product4.jpg" alt="">
                                            </div>
                                        </div>
                                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left red" aria-hidden="true"</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right red" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <span class="prod-pr">ціна:</span><br>
                                                    <span class="prod-mn">9 499  грн.</span>
                                                </div>
                                                <div class="col-xs-6">
                                                    <button class="btn btn-default btn-lg img-center btn-100px"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                                                    <button class="btn btn-danger btn-lg img-center btn-100px">Купити</button>
                                                </div>
                                                <div class="col-xs-12">
                                                    <span class="pan-inf">Діагональ екрану: <i>4.7"</i>;</span>
                                                    <span class="pan-inf">Роздільна здатність дисплея: <i>1334x750</i>;</span>
                                                    <span class="pan-inf">Камера: <i>8 Мп</i>;</span>
                                                    <span class="pan-inf">Кількість ядер: <i>2</i>;</span>
                                                    <span class="pan-inf">Оперативна пам'ять: <i>1 Гб</i>;</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-0">
                                </div>
                            </div>
                        </div>
                        <h3>Технічні характеристики</h3>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <td>Стандарти зв'язку:</td>
                                    <td>GSM, 3G, 4G (LTE)</td>
                                </tr>
                                <tr>
                                    <td>Кількість sim-карт:</td>
                                    <td>1 SIM</td>
                                </tr>
                                <tr>
                                    <td>Формат SIM-карти:</td>
                                    <td>Nano-SIM</td>
                                </tr>
                                <tr>
                                    <td>Діагональ екрану:</td>
                                    <td>4.7"</td>
                                </tr>
                                <tr>
                                    <td>Роздільна здатність дисплея:</td>
                                    <td>1334x750</td>
                                </tr>
                                <tr>
                                    <td>...</td>
                                    <td>...</td>
                                </tr>
                                <tr>
                                    <td>...</td>
                                    <td>...</td>
                                </tr>
                                <tr>
                                    <td>...</td>
                                    <td>...</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div  class="tab-pane fade" id="reviews">
                        <div class="container-fluid marginv-10px padding-5px">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <img src="../images/product/product1.jpg" alt="">
                                            </div>
                                            <div class="item">
                                                <img src="../images/product/product2.jpg" alt="">
                                            </div>
                                            <div class="item">
                                                <img src="../images/product/product3.jpg" alt="">
                                            </div>
                                            <div class="item">
                                                <img src="../images/product/product4.jpg" alt="">
                                            </div>
                                        </div>
                                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left red" aria-hidden="true"</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right red" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <span class="prod-pr">ціна:</span><br>
                                                    <span class="prod-mn">9 499  грн.</span>
                                                </div>
                                                <div class="col-xs-6">
                                                    <button class="btn btn-default btn-lg img-center btn-100px"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                                                    <button class="btn btn-danger btn-lg img-center btn-100px">Купити</button>
                                                </div>
                                                <div class="col-xs-12">
                                                    <span class="pan-inf">Діагональ екрану: <i>4.7"</i>;</span>
                                                    <span class="pan-inf">Роздільна здатність дисплея: <i>1334x750</i>;</span>
                                                    <span class="pan-inf">Камера: <i>8 Мп</i>;</span>
                                                    <span class="pan-inf">Кількість ядер: <i>2</i>;</span>
                                                    <span class="pan-inf">Оперативна пам'ять: <i>1 Гб</i>;</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-0">
                                </div>
                            </div>
                            <h3 class="center">Відгуки</h3>
                            <div class="container">
                                <div class="row">
                                    <div class="panel panel-danger rewiev">
                                        <div class="panel-heading">
                                            Вася
                                        </div>
                                        <div class="panel-body">
                                            <p>Телефон отличный,и смысла переплачивать и брать новый нет,они не отличаются.Темболее брать простую 6 если есть 6s который в 2 раза лучше.Берите,я не жалею о покупке.Запомните главное не обновляйте прошивку с 10.3 до 11.(10 стабильная и плавная а 11 как старый глючный андроид,и назад откатится не как)</p>
                                        </div>
                                    </div>
                                    <div class="panel panel-danger rewiev">
                                        <div class="panel-heading">
                                            Вася
                                        </div>
                                        <div class="panel-body">
                                            <p>Телефон отличный,и смысла переплачивать и брать новый нет,они не отличаются.Темболее брать простую 6 если есть 6s который в 2 раза лучше.Берите,я не жалею о покупке.Запомните главное не обновляйте прошивку с 10.3 до 11.(10 стабильная и плавная а 11 как старый глючный андроид,и назад откатится не как)</p>
                                        </div>
                                    </div>
                                    <div class="panel panel-danger rewiev">
                                        <div class="panel-heading">
                                            Вася
                                        </div>
                                        <div class="panel-body">
                                            <p>Телефон отличный,и смысла переплачивать и брать новый нет,они не отличаются.Темболее брать простую 6 если есть 6s который в 2 раза лучше.Берите,я не жалею о покупке.Запомните главное не обновляйте прошивку с 10.3 до 11.(10 стабильная и плавная а 11 как старый глючный андроид,и назад откатится не как)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
