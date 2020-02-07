<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Update Deck: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Decks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div>

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin() ?>
    <?= $form->field($model, 'name') ?>
    <?= Html::submitButton('Update', ['class' => 'btn btn-primary']) ?>
    <?php $form = ActiveForm::end() ?>

</div>