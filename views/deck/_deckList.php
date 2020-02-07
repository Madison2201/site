<?php

use yii\helpers\Html;

?>

<div class="deck-index">
    <?php

    foreach ($model as $deck) {
        echo '<pre>' .
            Html::a(print_r($deck['name'], true), ['view', 'id' => $deck['id']], ['class' => 'btn btn-outline-secondary']) .
            Html::a('Update', ['update', 'id' => $deck['id']], ['class' => 'btn btn-primary']) .
            Html::a('Delete', ['delete', 'id' => $deck['id']], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ])
            . '</pre>';
    }
    ?>
</div>