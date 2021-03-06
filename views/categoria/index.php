<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategoriaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categorias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categoria-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Categoria', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cat_id',
            'cat_nombre',
            //'cat_imagen',
            'cat_descripcion',
					[
                     'attribute' => 'cat_imagen',
                     'format' => 'raw',
                     'value' => function ($model) {   
                        if ($model->cat_imagen!='')
                          return '<img src="'.Yii::getAlias('@categoriaImgUrl')."/".$model->cat_imagen.'" width="100px" height="100px">'; else return 'no image';
						},
                   ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
