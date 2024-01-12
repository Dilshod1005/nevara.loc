<?php
namespace app\models;
use Yii;
use yii\base\Model;


class Signup extends  Model{
    public $fullname;
    public $address;
    public $phone;
    public $email;
    public $password;
    public $status;
    public $date;
    public function rules()
    {
        return [
            [['fullname', 'address', 'phone', 'email', 'password', 'status', 'date'], 'required'],
            [['status'], 'string'],
            [['date'], 'safe'],
            [['fullname', 'address', 'email', 'password'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 50],
            [['email'], 'unique','targetClass'=>'app\models\Users'],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fullname' => Yii::t('app', 'FISH'),
            'address' => Yii::t('app', 'Address'),
            'phone' => Yii::t('app', 'Telefon'),
            'email' => Yii::t('app', 'Email'),
            'password' => Yii::t('app', 'Password'),
            'status' => Yii::t('app', 'Status'),
            'date' => Yii::t('app', 'Vaqt'),
        ];
    }

    protected function save(){
        if ($this->validate()){
         $users =new Users();
         $users->attributes=$this->attributes;
         return  $users->create();
        }
    }

    public  function  signup(){
        return $this->save();
    }
}