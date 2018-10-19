<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "paquetes".
 *
 * @property int $id
 * @property string $nombre
 * @property string $subtitulo
 * @property string $descripcion
 * @property string $img1
 * @property string $img2
 * @property string $img3
 * @property int $estado
 * @property string $created
 * @property string $updated
 */
class Paquetes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'paquetes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descripcion'], 'string'],
            [['estado'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['nombre', 'subtitulo'], 'string', 'max' => 200],
            [['img1', 'img2', 'img3'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'subtitulo' => 'Subtitulo',
            'descripcion' => 'Descripcion',
            'img1' => 'Img1',
            'img2' => 'Img2',
            'img3' => 'Img3',
            'estado' => 'Estado',
            'created' => 'Created',
            'updated' => 'Updated',
        ];
    }
}
