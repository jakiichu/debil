<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "poduct".
 *
 * @property int $id
 * @property string $name
 * @property string $file
 * @property float $price
 * @property string $text
 * @property int $category_id
 * @property string $date
 * @property int $season_id
 * @property int $material_id
 * @property int $manufacturer_id производитель
 */
class Poduct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'poduct';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'file', 'price', 'text'], 'required'],
            [['price'], 'number'],
            [['text'], 'string'],
            [['category_id', 'season_id', 'material_id', 'manufacturer_id'], 'integer'],
            [['date'], 'safe'],
            [['name', 'file'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'file' => 'File',
            'price' => 'Price',
            'text' => 'Text',
            'category_id' => 'Category ID',
            'date' => 'Date',
            'season_id' => 'Season ID',
            'material_id' => 'Material ID',
            'manufacturer_id' => 'Manufacturer ID',
        ];
    }
}
