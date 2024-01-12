<?php

namespace app\controllers;

use app\models\Orders;
use app\models\Products;
use yii\filters\AccessControl;
use Yii;
class CartController extends AppController
{


    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public  function actionAddCart()
    {
        $id=Yii::$app->request->get('id');
         $model=Products::findOne(['id'=>$id]);
         $orders=new Orders();
         $products=new Products();
         $products->addToCart($model);
         $products->saveDb($model);
         if (Yii::$app->request->isAjax){
             $this->layout=false;
         }
         return $this->render('cart',compact('model'));
    }


    public  function  actionWashList()
    {
        $model=Orders::find()
            ->asArray()
            ->where(['users_id'=>Yii::$app->user->identity->id])
            ->all();
        return $this->render('wash-list',compact('model'));
    }
}