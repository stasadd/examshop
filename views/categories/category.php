<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Categories */

$this->title = $model->category;
//$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
//\yii\web\YiiAsset::register($this);
?>
<div class="categories-view">
    <div class="container">
        <h2 class="center"><?= Html::encode($this->title) ?></h2>
        <div class="row">
<!--            --><?php
//            foreach ($model->products as $product) {
//                echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 center marginv-10px">';
//                echo '<a href=""><img class="img-responsive cat-img" src="../images/tabs/phones1.jpg" alt=""></a>';
//                echo '';
//
//
//
//
//            }
//            ?>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 center marginv-10px">
                <a href="/products/prod?id=1"><img class="img-responsive cat-img" src="../images/tabs/phones1.jpg" alt=""></a>
                <div class="rating">
                    <a href="/products/prod?id=1"><span class="tab-name">Xiaomi Mi 8 Lite 4/64GB Aurora Blue</span></a>
                    <span class="glyphicon glyphicon-star red"></span>
                    <span class="glyphicon glyphicon-star red"></span>
                    <span class="glyphicon glyphicon-star red"></span>
                    <span class="glyphicon glyphicon-star red"></span>
                    <span class="glyphicon glyphicon-star red"></span>
                    <span class="badge">59 відгуків</span>
                    <br>
                    <button class="btn btn-default btn-xs cat-cart"><span
                                class="glyphicon glyphicon-shopping-cart"></span></button>
                </div>
                <div>
                    <span>7 499 грн.</span>
                    <button class="btn btn-danger">Купити</button>
                </div>
            </div>



        </div>

        <nav aria-label="Page navigation" class="center">
            <ul class="pagination">
                <li>
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>

    </div>

</div>
