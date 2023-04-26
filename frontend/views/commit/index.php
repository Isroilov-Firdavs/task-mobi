<?php

use frontend\models\Commit;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\CommitSerch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

?>
<div class="">
  <div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="index.html">Bracket</a>
      <a class="breadcrumb-item" href="#">Izodlar</a>
      <span class="breadcrumb-item active">Index</span>
    </nav>
  </div><!-- br-pageheader -->
  <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
    <h4 class="tx-gray-800 mg-b-5">Izohlar</h4>
  </div><!-- d-flex -->


  <div class="br-pagebody">
        <div class="br-section-wrapper">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        // 'id',
                        'name',
                        'topic',
                        'email:email',
                        'phone',
                        //'message:ntext',
                        // 'status',
                        [
                            'attribute' => 'status',
                            'format' => 'raw',
                            'value' => function ($data) {
                                if($data->status == 1 )
                                {
                                    return "<p class='text-success'>Tasdiqlangan</p>";

                                }
                                elseif ($data->status == 2)
                                {
                                    return "<p class='text-danger'>Rad etildi</p>";
                                }
                                elseif ($data->status == 0)
                                {
                                    return "<p class='text-warning'>Kutishda</p>";
                                }
                            }
                        ],
                        //'created_at',
                        //'updated_at',
                    ],
                ]); ?>
        </div><!-- br-pagebody -->
    </div>



</div><!-- br-mainpanel -->