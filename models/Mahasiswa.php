<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property integer $id
 * @property integer $nim
 * @property string $nama
 * @property string $judul
 *
 * @property Dosen $dosen
 * @property Dosen $id0
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nim', 'nama', 'judul'], 'required'],
            [['id', 'nim'], 'integer'],
            [['nama'], 'string', 'max' => 100],
            [['judul'], 'string', 'max' => 225],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Dosen::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'judul' => 'Judul',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDosen()
    {
        return $this->hasOne(Dosen::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
   
}
