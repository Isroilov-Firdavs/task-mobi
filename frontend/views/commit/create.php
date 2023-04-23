<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Commit $model */

$this->title = 'Create Commit';
$this->params['breadcrumbs'][] = ['label' => 'Commits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="commit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
