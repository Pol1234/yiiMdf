<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Paquetes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paquetes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subtitulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->widget(alexantr\ckeditor\CKEditor::className()) ?>

    <?= $form->field($model, 'img1')->fileInput() ?>

    <?= $form->field($model, 'img2')->fileInput() ?>

    <?= $form->field($model, 'img3')->fileInput() ?>

    <?= $form->field($model, 'estado')->dropDownList(['0'=>'Inactivo', '1'=>'Activo']); ?> 

   
    <div class="form-group">
        <?= Html::submitButton('Crear', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
