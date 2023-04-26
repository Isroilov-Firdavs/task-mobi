<?php
use common\widgets\Alert;

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
// use kartik\form\ActiveForm;


use borales\extensions\phoneInput\PhoneInput;

$this->title = "Add commit"
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="">
  <div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="#">Dashboard</a>
      <a class="breadcrumb-item" href="#">One commit</a>
      <span class="breadcrumb-item active">Add commit</span>
    </nav>
  </div><!-- br-pageheader -->
  <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
    <h4 class="tx-gray-800 mg-b-5">Form Layouts</h4>
    <?= Alert::widget() ?>
  </div>


  <div class="br-pagebody">
    <div class="br-section-wrapper">
      <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Top Label Layout</h6>

      <div class="form-layout form-layout-1">
        <div class="row mg-b-25">
            <div class="site-commit">
                <?php $form = ActiveForm::begin([
                    'id' => 'example-form',
                    'enableAjaxValidation' => true,
                    'validateOnBlur' => false,
                    'validateOnChange' => false,
                ]); ?>
                <div class="row"> 
                    <div class="col-6">
                        <?= $form->field($model, 'topic') ?>
                    </div>
                    <div class="col-6">
                        <?= $form->field($model, 'name') ?>
                    </div>
                    <div class="col-6">
                        <?= $form->field($model, 'phone')->textInput(['type' => 'number'])?>
                    </div>
                    <div class="col-6">
                        <?= $form->field($model, 'email')->textInput(['type'=>'email'])?>
                    </div>
                    <div class="col-12">
                        <?= $form->field($model, 'message')->textarea(array('rows'=>10,'cols'=>5)); ?> 
                    </div>
                    <div class="col-6">
                    </div>
                </div>
                    <div class="form-layout-foote">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-info']) ?>
                    </div>
                <?php ActiveForm::end(); ?>
            </div><!-- site-commit -->          
        </div><!-- row -->

      </div><!-- form-layout -->
    </div><!-- br-section-wrapper -->
  </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->