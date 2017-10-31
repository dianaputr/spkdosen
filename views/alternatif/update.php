<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Alternatif */

$this->title = "Sunting Alternatif";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Alternatifs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Sunting');
?>
<div class="alternatif-update">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
