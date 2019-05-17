<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = "Contries";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <ul>
      <?php foreach ($countries as $country): ?>
      <li>
      <?= Html::encode("{$country->name} ({$country->code})") ?>:
      <?= $country->population ?>
      </li>
     <?php endforeach; ?>
    </ul>
    <?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>
