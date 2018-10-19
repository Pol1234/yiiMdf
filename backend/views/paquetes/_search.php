<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PaquetesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paquetes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'subtitulo') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'img1') ?>

    <?php // echo $form->field($model, 'img2') ?>

    <?php // echo $form->field($model, 'img3') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'updated') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
