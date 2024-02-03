<?php

namespace app\controllers;

use app\models\Orders;
use app\models\OrdersItems;
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
        $son=Yii::$app->request->get('son');
        $products=new Products();
         $model=Products::findOne(['id'=>$id]);
         if (!empty($son)){
             $products->saveDb($model,$son);
             $products->addToCart($model,$son);
         }
         else{
             $products->saveDb($model);
             $products->addToCart($model);
         }
         $orders=new Orders();
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

    public  function actionDelItems(){
        $id=Yii::$app->request->get('id');
        $order=Orders::findOne(['id'=>$id]);
        $product=new Products;
        if(!empty($_SESSION['cart'])){
            $order->delete();
            Yii::$app->session->setFlash('success',"Ma'lumot o'chirildi");
            return $this->redirect(['cart/wash-list']);
        }
        else{
            $product->DelItems($order->products_id);
            if ($order->delete()){
                Yii::$app->session->setFlash('success',"Ma'lumot o'chirildi");
                return $this->redirect(['cart/wash-list']);
            }
            else{
                Yii::$app->session->setFlash('success',"Ma'lumot o'chirilmadi");
                return $this->redirect(['cart/wash-list']);
            }
        }

    }

    public function actionRemove(){
        $products=new Products();
        $products_id=Yii::$app->request->get('id');
        $order=Orders::findOne([
            'users_id'=>Yii::$app->user->identity->id,
            'products_id'=>$products_id
        ]);
        $products->DelItems($products_id);
        $this->layout=false;
        $model=Orders::find()->all();
        if ($order->delete()){
            Yii::$app->session->setFlash('sonn',$_SESSION['cart.son']);
            return $this->render('cart',compact('model'));
        }
        else{
            return false;
        }
    }

    public function actionAddSave(){
        $id=Yii::$app->request->get('id');
        $order=Orders::findOne([$id]);
        $product=new Products();
        $model=new OrdersItems();
        if($model->load(Yii::$app->request->post())){
            $model->users_id=Yii::$app->user->identity->id;
            $model->products_id=$order->products_id;
            $model->status='active';
            $model->date=date('Y-m-d');
            if ($model->save()){
                $product->DelItems($order->products_id);
                $order->delete();
                Yii::$app->session->setFlash('success',"Buyrutmangiz yuborildi");
                return $this->redirect(['cart/oformit']);
            }
            else{
                Yii::$app->session->setFlash('error',"Buyrutmangiz yuborilmadi");
                return $this->refresh();
            }

        }
        return $this->render('card-save',compact('order','model'));
    }


    public function actionOformit(){
        $order_item=OrdersItems::findOne()
            ->asArray()
            ->where([
                'users_id'=>Yii::$app->user->identity->id
            ])
            ->orderBy(['id'=>SORT_DESC])
            ->all();
        debug($order_item);
    }
}