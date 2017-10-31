<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nilai */

$this->title = "Sunting Nilai";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Nilais'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Sunting');
?>
<div class="nilai-update">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
