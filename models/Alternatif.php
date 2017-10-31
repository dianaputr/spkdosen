<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alternatif".
 *
 * @property integer $id
 * @property string $nama
 * @property double $bobot_akhir
 *
 * @property Kriteria[] $kriterias
 */
class Alternatif extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alternatif';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nama', 'bobot_akhir'], 'required'],
            [['id'], 'integer'],
            [['bobot_akhir'], 'number'],
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
            'bobot_akhir' => 'Bobot Akhir',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKriterias()
    {
        return $this->hasMany(Kriteria::className(), ['id_alternatif' => 'id']);
    }
}
