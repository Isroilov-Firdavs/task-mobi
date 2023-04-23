<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Commit $model */

$this->title = 'Update Commit: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Commits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="commit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
