<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int $users_id
 * @property int $products_id
 * @property string $name
 * @property float $sum
 * @property int $son
 * @property string $images
 * @property string $status
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['users_id', 'products_id', 'name', 'sum', 'son', 'images', 'status'], 'required'],
            [['users_id', 'products_id', 'son'], 'integer'],
            [['sum'], 'number'],
            [['status'], 'string'],
            [['name', 'images'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'users_id' => Yii::t('app', 'Users ID'),
            'products_id' => Yii::t('app', 'Products ID'),
            'name' => Yii::t('app', 'Name'),
            'sum' => Yii::t('app', 'Sum'),
            'son' => Yii::t('app', 'Son'),
            'images' => Yii::t('app', 'Images'),
            'status' => Yii::t('app', 'Status'),
        ];
    }


}
