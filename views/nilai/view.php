<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Nilai */

$this->title = "Detail Nilai";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Nilai'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nilai-view box box-primary">

    <div class="box-header">
        <h3 class="box-title">Detail Nilai</h3>
    </div>

    <div class="box-body">

    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            [
                'attribute' => 'id',
                'format' => 'raw',
                'value' => $model->id,
            ],
            [
                'attribute' => 'keterangan',
                'format' => 'raw',
                'value' => $model->keterangan,
            ],
            [
                'attribute' => 'jumlah',
                'format' => 'raw',
                'value' => $model->jumlah,
            ],
        ],
    ]) ?>

    </div>

    <div class="box-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Nilai', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Daftar Nilai', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
    </div>

</div>
