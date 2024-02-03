<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders_items".
 *
 * @property int $id
 * @property int $users_id
 * @property int $products_id
 * @property string $fullname
 * @property string $email
 * @property string $phone
 * @property string $adress
 * @property string $products_name
 * @property float $sum
 * @property int $son
 * @property string $images
 * @property string $status
 */
class OrdersItems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['users_id', 'products_id', 'fullname', 'email', 'phone', 'adress', 'products_name', 'sum', 'son', 'images', 'status'], 'required'],
            [['users_id', 'products_id', 'son'], 'integer'],
            [['sum'], 'number'],
            [['status'], 'string'],
            [['fullname', 'adress', 'products_name'], 'string', 'max' => 100],
            [['email', 'images'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 20],
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
            'fullname' => Yii::t('app', 'Fullname'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'adress' => Yii::t('app', 'Adress'),
            'products_name' => Yii::t('app', 'Products Name'),
            'sum' => Yii::t('app', 'Sum'),
            'son' => Yii::t('app', 'Son'),
            'images' => Yii::t('app', 'Images'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
