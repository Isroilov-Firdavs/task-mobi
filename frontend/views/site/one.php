<?php 
$this->title = 'One commit';


use yii\helpers\Url;

 ?>


<div class="row">
  <div class="col-lg-3 mx-2">
    <div class="">
      <div class="br-mailbox-list-header">
        <a href="" id="showMailBoxLeft" class="show-mailbox-left hidden-sm-up">
          <i class="fa fa-arrow-right"></i>
        </a>
        <h6 class="tx-inverse mg-b-0 tx-13 tx-uppercase">Inbox <span class="tx-roboto">(2)</span></h6>
        <div class="btn-group" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-light disabled pd-x-25"><i class="fa fa-angle-left"></i></button>
          <button type="button" class="btn btn-light pd-x-25"><i class="fa fa-angle-right"></i></button>
        </div>
      </div><!-- br-mailbox-list-header -->
      <div class="br-mailbox-list-body">
        <?php 
          foreach ($model_com as $allCommit):
        ?>
        <div class="br-mailbox-list-item">
          <div class="d-flex justify-content-between mg-b-5">
            <div>
              <i class="icon ion-ios-star tx-warning"></i>
              <i class="icon ion-android-attach"></i>
            </div>
            <span class="tx-12"><?=$allCommit->created_at?></span>
          </div><!-- d-flex -->
          <h6 class="tx-14 mg-b-10 tx-gray-800"><a href="<?=Url::to(['/site/one-commit', 'id' => $allCommit->id])?>"><?=$allCommit->name?></a></h6>
          <p class="tx-12 tx-gray-600 mg-b-5"><?=$allCommit->topic?></p>
        </div>

        <?php
          endforeach;
        ?>
      </div><!-- br-mailbox-list-body -->
    </div><!-- br-mailbox-list -->
  </div>

  <div class="col-lg-8">
    <?php 
      foreach ($one as $com):
    ?>

    <div class="br-msg-header d-flex ">
      <div class="media align-items-center">
        <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
        <div class="media-body mg-l-10">
          <p class="tx-inverse tx-medium mg-b-0"><?=$com->name?></p>
          <p class="tx-12 mg-b-0">
            <span><?=$com->created_at?></span>
            <a href="" class="mg-l-5 tx-gray-500"><i class="icon ion-star"></i></a>
            <a href="" class="mg-l-5 tx-gray-500"><i class="icon ion-android-attach"></i></a>
          </p>
        </div><!-- media-body -->
      </div><!-- media -->
      <nav class="nav nav-inline tx-size-24 mg-b-0 lh-0">
        <a href="" class="nav-link tx-gray-light hover-inverse pd-x-5"><i class="icon ion-reply"></i></a>
        <a href="" class="nav-link tx-gray-light hover-inverse pd-x-5"><i class="icon ion-reply-all"></i></a>
        <a href="" class="nav-link tx-gray-light hover-inverse pd-x-5"><i class="icon ion-printer"></i></a>
        <a href="" class="nav-link tx-gray-light hover-inverse pd-x-5"><i class="icon ion-android-more-horizontal"></i></a>
        <a id="closeMail" href="" class="nav-link pd-x-5 mg-l-15 hidden-xl-up">
          <i class="icon ion-close"></i>
        </a>
      </nav>
    </div><!-- br-msg-header -->
    <div class="br-msg-body">
      <h6 class="tx-inverse mg-b-25 lh-4">Mavzu: <?=$com->topic?></h6>

      <p><?=$com->message?></p>

    </div><!-- br-msg-body -->
    <?php
      endforeach;
    ?>
    <a href="<?=Url::to(['/site/commit'])?>" class="btn btn-outline-info btn-oblong tx-11 tx-uppercase tx-mont tx-medium tx-spacing-1 pd-x-30 bd-2">Введите комментарий</a>
  </div><!-- br-mailbox-body -->
</div>