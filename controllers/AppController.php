<?php
namespace  app\controllers;

use app\models\Orders;
use yii\web\Controller;
use  Yii;

class AppController extends  Controller
{
    public $sonn;
    public $sum;
    public $model=[];
    public  function __construct($id,$module,$config=[])
    {
        parent::__construct($id,$module,$config);
        if(!Yii::$app->user->isGuest){
            $order=Orders::find()->where(['users_id'=>Yii::$app->user->identity->id])->all();
            if(!empty($order)){
                foreach ($order as $r){
                    $this->sonn+=$r['son'];
                    $this->sum=$this->sonn*$r['sum'];
                }
                $this->model=$order;

            }
            else{
                $this->sonn=0;
                $this->sum=0;
            }
        }
    }
protected  function  setMeta($title=null,$keywords=null,$description=null){
$this->view->title=$title;
$this->view->registerMetaTag([
    'name'=>'keywords',
    'content'=>"$keywords"
]);
$this->view->registerMetaTag([
    'name'=>'description',
    'content'=>"$description"
]);
}
}