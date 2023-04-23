<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception*/

use yii\helpers\Html;

$this->title = $name;
?>
<div class="pd-30">
    <div class="alert alert-danger alert-bordered pd-y-20" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="d-flex align-items-center justify-content-start">
        <i class="icon ion-ios-close alert-icon tx-52 tx-danger mg-r-20"></i>
        <div>
          <h5 class="mg-b-2 tx-danger">Oh snap! Change a few things up and try submitting again.</h5>
          <p class="mg-b-0 tx-gray"><?= nl2br(Html::encode($message)) ?></p>
        </div>
      </div><!-- d-flex -->
    </div><!-- alert -->
</div>




