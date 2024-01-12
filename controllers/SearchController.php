<?php

namespace app\controllers;

use app\models\Products;
use yii\data\Pagination;
use yii\web\Controller;
use Yii;

class SearchController extends AppController
{
public  function actionSearch(){
    $search=Yii::$app->request->get('search');
    $model=Products::find()
        ->asArray()
        ->where(['like','name',$search])
        ->orWhere(['like','keywords',$search]);
    $page=new Pagination([
        'totalCount'=>$model->count(),
        'pageSize'=>8,
        'forcePageParam'=>false,
        'pageSizeParam'=>false
    ]);
    $model=$model
        ->offset($page->offset)
        ->limit($model->limit)
        ->all();
    return $this->render('search',compact('model','search','page'));
}
}