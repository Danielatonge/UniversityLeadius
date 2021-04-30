<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use yii\helpers\Url;
?>
<!-- Classic Breadcrumbs-->
<section class="section breadcrumb-classic context-dark">
    <div class="container">
        <h1> <?= $viewName ?></h1>
        <div class="offset-top-10 offset-md-top-35">
            <ul class="list-inline list-inline-lg list-inline-dashed p">
                <li><a href="<?= Url::to(['site/index']) ?>">Home</a></li>
                <li>Academics</li>
                <li><?= $viewName ?>
                </li>
            </ul>
        </div>
    </div>
</section>