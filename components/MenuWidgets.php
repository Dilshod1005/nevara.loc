<?php
namespace app\components;
use app\models\Category;
use app\models\Products;
use yii\helpers\Url;
use yii\base\Widget;
class MenuWidgets extends  Widget
{
    public static  $menu=[];
    private  $product;


    public function __construct(){
        $model=Category::find()
            ->asArray()
            ->indexBy('id')
            ->limit(8)
            ->where(['status'=>1])
            ->all();
        foreach ($model as $key=>$r){
            self::$menu[$key]=$r['name'];
        }
    }
    protected  function getShow(){
        $str=' <ul class="ht-dropdown mega-menu-2">';
        foreach (self::$menu as $key=>$val) {
            $model=Products::find()
                ->asArray()
                ->where(['category_id'=>$key])
                ->limit(6)
                ->orderBy(['id'=>SORT_ASC])
                ->all();
             $str.=' <li style="min-height:200px"><a href="'.Url::to(['main/category','id'=>$key]).'"><h3 style="font-size: 12px">'.$val.'</h3></a>';
             if (!empty($model)){
                 $str.='<ul>';
                 foreach ($model as $r) {
                     $str.='<li><a href="'.Url::to(['main/product','id'=>$r['id']]).'">'.$r["name"].'</a></li>';
                 }
                 $str.='</ul></li>';
             }
                else{
                    $str.='</li>';


                }

        }
        $str.='</ul>';
        $this->product=$str;
    }
    public  function show(){
        $this->getShow();
        return $this->product;
    }
}