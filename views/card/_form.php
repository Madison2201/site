<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Card */
/* @var $imgModel app\models\Card */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card-form">

    <?php $form = ActiveForm::begin() ?>

    <?= $form->field($model, 'deck_id')->dropdownList(\yii\helpers\ArrayHelper::map($deckList, 'id', 'name')); ?>

    <?= $form->field($model, 'front') ?>

    <?= $form->field($model, 'back') ?>

    <p style="color: red">Card image is optional</p>

    <?= $form->field($uploadModel, 'image')->fileInput() ?>

    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>

    <?php $form = ActiveForm::end() ?>

</div>
