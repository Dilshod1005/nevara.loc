<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name
 * @property string $content
 * @property string $images
 * @property float $sum
 * @property string $rasprodaj
 * @property string $new
 * @property string $status
 * @property string $keywords
 * @property string $description
 * @property string $date
 * @property int $category_id
 *
 * @property Category $category
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'content', 'images', 'sum', 'rasprodaj', 'new', 'status', 'keywords', 'description', 'date', 'category_id'], 'required'],
            [['content', 'rasprodaj', 'new', 'status', 'description'], 'string'],
            [['sum'], 'number'],
            [['date'], 'safe'],
            [['category_id'], 'integer'],
            [['name', 'images', 'keywords'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'content' => Yii::t('app', 'Content'),
            'images' => Yii::t('app', 'Images'),
            'sum' => Yii::t('app', 'Sum'),
            'rasprodaj' => Yii::t('app', 'Rasprodaj'),
            'new' => Yii::t('app', 'New'),
            'status' => Yii::t('app', 'Status'),
            'keywords' => Yii::t('app', 'Keywords'),
            'description' => Yii::t('app', 'Description'),
            'date' => Yii::t('app', 'Date'),
            'category_id' => Yii::t('app', 'Category ID'),
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    public  function addToCart($model,$son=1)
    {
        if (isset($_SESSION['cart'])){
            if(isset($_SESSION['cart'][$model->id])){
                $_SESSION['cart'][$model->id]['son']+=$son;
            }
            else{
                $_SESSION['cart'][$model->id]=[
                    'name'=>$model->name,
                    'images'=>$model->images,
                    'sum'=>$model->sum,
                    'son'=>$son
                ];
            }
            $_SESSION['cart.sum']=isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum']+ $model->sum*$son :$model->sum*$son;
            $_SESSION['cart.son']=isset($_SESSION['cart.son']) ? $_SESSION['cart.son']+ $son :$son;
        }
        else{
            $orders=Orders::find()
                ->asArray()
                ->where(['users_id'=>Yii::$app->user->identity->id])
                ->all();
            if (!empty($orders)){
                $count=0;
                $sum=0;
                foreach ($orders as $r) {
                    $_SESSION['cart'][$r['products_id']]=[
                        'name'=>$r['name'],
                        'sum'=>$r['sum'],
                        'son'=>$r['son'],
                        'images'=>$r['images']
                    ];
                    $count+=$r['son'];
                    $sum+=$r['sum'];
                }
                $_SESSION['cart.sum']=$sum;
                $_SESSION['cart,son']=$count;
            }
            else{
                if(isset($_SESSION['cart'][$model->id])){
                    $_SESSION['cart'][$model->id]['son']+=$son;
                }
                else{
                    $_SESSION['cart'][$model->id]=[
                        'name'=>$model->name,
                        'images'=>$model->images,
                        'sum'=>$model->sum,
                        'son'=>$son
                    ];
                }
                $_SESSION['cart.sum']=isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum']+ $model->sum*$son :$model->sum*$son;
                $_SESSION['cart.son']=isset($_SESSION['cart.son']) ? $_SESSION['cart.son']+ $son :$son;
            }
        }
    }


    public  function saveDb($model,$son=1)
    {
        $orders=Orders::findOne(['products_id'=>$model->id,
            'users_id'=>Yii::$app->user->identity->id
            ]);
        if (!empty($orders)){
            $orders->son+=$son;
            $orders->save(false);
        }
        else{
            $orders=new Orders();
            $orders->users_id=Yii::$app->user->identity->id;
            $orders->products_id=$model->id;
            $orders->name=$model->name;
            $orders->sum=$model->sum;
            $orders->son=$son;
            $orders->images=$model->images;
            $orders->status='0';
            $orders->save(false);
        }
    }

    public function DelItems($id)
    {
        if(!isset($_SESSION['cart'][$id])) return false;
        $son_minus=$_SESSION['cart'][$id]['son'];
        $sum_minus=$_SESSION['cart'][$id]['sum']*$_SESSION['cart'][$id]['son'];
        $_SESSION['cart.son']-=$son_minus;
        $_SESSION['cart.sum']-=$sum_minus;
        unset($_SESSION['cart'][$id]);
    }
}
