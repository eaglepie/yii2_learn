<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Entry';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>



        <p>
        You have entered the following information:
        </p>

        <div class="row">
            <div class="col-lg-5">

            <ul>
              <li><label>Name</label>:<?=Html::encode($model->name)?></li>
              <li><label>Email</label>:<?=Html::encode($model->email)?></li>
            </ul>

            </div>
        </div>


</div>
