<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use common\widgets\Alert;

$this->title = 'Login';
?>
<div class="row mt-3">
    <div class="col-lg-6 offset-lg-3">
        <?= Alert::widget() ?>
    </div>
</div>
<div class="d-flex align-items-center justify-content-center ht-80v">

<div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
    <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> bracket <span class="tx-normal">]</span></div>
    <div class="tx-center mg-b-60">The Admin Template For Perfectionist</div>

    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

    <div class="form-group">
        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
    </div>    
    <div class="form-group">
        <?= $form->field($model, 'password')->passwordInput() ?>
    </div>    
    <?= Html::submitButton('Sign In', ['class' => 'btn btn-info btn-block', 'name' => 'login-button']) ?>
    <?php ActiveForm::end(); ?>

    </div><!-- login-wrapper -->
</div><!-- d-flex -->