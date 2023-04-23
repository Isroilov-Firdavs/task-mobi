<?php
use common\widgets\Alert;

/** @var yii\web\View $this */



use yii\helpers\Url;

$this->title = 'Admin Izohlar';
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="">
<div class="pd-30">
<h4 class="tx-gray-800 mg-b-5">Admin Izohlar</h4>
</div><!-- d-flex -->


<div class="row mx-3">
    <div class="col-lg-10">
        <div class="card bd-0 shadow-base pd-30">
            <?= Alert::widget() ?>
          <div class="d-flex align-items-center justify-content-between mg-b-30">
            <div>
              <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Admin Izohlar</h6>
            </div>
            <!-- <a href="" class="btn btn-outline-info btn-oblong tx-11 tx-uppercase tx-mont tx-medium tx-spacing-1 pd-x-30 bd-2">See more</a> -->
          </div><!-- d-flex -->

          <table class="table table-valign-middle mg-b-0">
            <tbody>
              <?php 
                foreach ($comment as $com):
              ?>

               <tr>
                  <td class="pd-l-0-force">
                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  </td>
                  <td>
                    <h6 class="tx-inverse tx-14 mg-b-0"><?=$com->name?></h6>
                    <span class="tx-12"><?=$com->email?></span>
                  </td>
                  <td><?=$com->created_at?></td>
                  <td><?=$com->topic?></td>
                  <td class="pd-r-0-force">
                      <a href="<?=Url::to(['/site/rejection-comment', 'id' => $com->id])?>" class="btn btn-outline-danger btn-oblong tx-11 tx-uppercase tx-mont tx-medium tx-spacing-1 pd-x-30 bd-2">Rad etish</a>
                  </td>
                  <td class="pd-r-0-force">
                      <a href="<?=Url::to(['/site/success-comment', 'id' => $com->id])?>" class="btn btn-outline-success btn-oblong tx-11 tx-uppercase tx-mont tx-medium tx-spacing-1 pd-x-30 bd-2">Chop etish</a>
                  </td>
                </tr>


              <?php
                endforeach;
              ?>
             
              
            </tbody>
          </table>
        </div><!-- card -->
    </div>
</div>

</div><!-- br-pagebody --> 
