<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cli_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cli_apellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cli_direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cli_ciudad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cli_telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cli_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cli_fechaNacimiento')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
