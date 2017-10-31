<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nilai".
 *
 * @property integer $id
 * @property string $keterangan
 * @property double $jumlah
 */
class Nilai extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nilai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'keterangan', 'jumlah'], 'required'],
            [['id'], 'integer'],
            [['jumlah'], 'number'],
            [['keterangan'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'keterangan' => 'Keterangan',
            'jumlah' => 'Jumlah',
        ];
    }
}
