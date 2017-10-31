<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kriteria".
 *
 * @property integer $id
 * @property string $nama
 * @property double $bobot
 */
class Kriteria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kriteria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'bobot'], 'required'],
            [['id'], 'safe'],
            [['id'], 'integer'],
            [['bobot'], 'number'],
            [['nama'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'bobot' => 'Bobot',
        ];
    }
}
