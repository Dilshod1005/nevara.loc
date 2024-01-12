<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $fullname
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $password
 * @property string $status
 * @property string $date
 */
class Users extends \yii\db\ActiveRecord implements IdentityInterface
{
    public static function tableName()
    {
        return 'users';
    }


    public function rules()
    {
        return [
            [['fullname', 'address', 'phone', 'email', 'password', 'status', 'date'], 'required'],
            [['status'], 'string'],
            [['date'], 'safe'],
            [['fullname', 'address', 'email', 'password'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 50],
            [['email'], 'unique'],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fullname' => Yii::t('app', 'Fullname'),
            'address' => Yii::t('app', 'Address'),
            'phone' => Yii::t('app', 'Phone'),
            'email' => Yii::t('app', 'Email'),
            'password' => Yii::t('app', 'Password'),
            'status' => Yii::t('app', 'Status'),
            'date' => Yii::t('app', 'Date'),
        ];
    }

    public  function create(){
        return $this->save();
    }


    public static function findIdentity($id)
    {
      return self::findOne([$id]);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {

    }

    public static function findByUsername($username)
    {
       return  self::findOne(['email'=>$username]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
//        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
//        return $this->authKey === $authKey;
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
