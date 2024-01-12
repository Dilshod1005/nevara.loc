<?php
namespace  app\controllers;
use app\models\Category;
use app\models\Orders;
use app\models\Products;
use app\models\Signup;
use Yii;
use yii\data\Pagination;
use yii\widgets\ActiveForm;
use app\models\LoginForm;


class MainController extends  AppController
{


public  function  actionIndex(){
    $model=Products::find()
        ->asArray()
        ->all();
    $this->setMeta('nevara');
    return $this->render('index',compact('model'));
}

public  function actionCategory(){
    $id=Yii::$app->request->get('id');
    $model=Category::findOne(['id'=>$id]);
    $product=Products::find()
    ->asArray()
    ->where(['category_id'=>$model->id]);
    $page=new Pagination([
       'totalCount'=>$product->count(),
        'pageSize'=>1,
        'forcePageParam'=>false,
        'pageSizeParam'=>false
    ]);
    $product=$product
        ->offset($page->offset)
        ->limit($page->limit)
        ->all();
    $this->setMeta($model->name,$model->keywords,$model->description);
    return $this->render('category',compact('model','product','page'));
}

public  function  actionProduct(){
    $id=Yii::$app->request->get('id');
    $model=Products::findOne(['id' => $id]);
    $this->setMeta($model->name,$model->keywords,$model->description);
    return $this->render('product',compact('model'));
}

// ajax
public  function  actionDataOne(){
    $id=Yii::$app->request->get('id');
    $model=Products::findOne(['id'=>$id]);
    if(Yii::$app->request->isAjax){
        $this->layout=false;
        return $this->renderAjax('data_one',compact('model'));
    }
    return $this->render('data_one',compact('model'));
}

public  function  actionSignup(){
    $model=new Signup();
    if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())){
        Yii::$app->response->format='json';
        return ActiveForm::validate($model);
    }
    if ($model->load(Yii::$app->request->post())){
        $model->status='active';
        if ($model->signup()){
             return  $this->redirect(['main/login']);
        }
        else{
            Yii::$app->session->setFlash('error','Malumotlar saqlanmadi');
            return $this->refresh();
        }
    }
    return $this->render('signup',compact('model'));
}

public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->redirect(['main/index']);
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['main/index']);
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect(['main/index']);
    }
}