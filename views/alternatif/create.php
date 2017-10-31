<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Alternatif */

$this->title = "Tambah Alternatif";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Alternatifs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alternatif-create">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
