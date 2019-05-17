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
<?php $form=ActiveForm::begin();?>

<?=$form->field($model,'name')->label('用户名')?>
<?=$form->field($model,'email')->label('邮&nbsp;&nbsp;&nbsp;箱')?>
<div class="form-group">
<?=Html::submitButton('Submit',['class'=>'btn btn-primary'])?>
</div>
<?php ActiveForm::end();?>

</div>
