<?php

/** @var yii\web\View $this */



use yii\helpers\Url;

$this->title = 'Izohlar';
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="">
<div class="pd-30">
<h4 class="tx-gray-800 mg-b-5">Izohlar</h4>
</div><!-- d-flex -->


<div class="row mx-3">
    <div class="col-lg-10">
        <div class="card bd-0 shadow-base pd-30">
          <div class="d-flex align-items-center justify-content-between mg-b-30">
            <div>
              <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Izohlar</h6>
            </div>
            <!-- <a href="" class="btn btn-outline-info btn-oblong tx-11 tx-uppercase tx-mont tx-medium tx-spacing-1 pd-x-30 bd-2">See more</a> -->
          </div><!-- d-flex -->

          <table class="table table-valign-middle mg-b-0">
            <tbody>
              <?php 
                foreach ($commit as $com):
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
                  <td class="pd-r-0-force tx-center"><a href="<?=Url::to(['/site/one-commit', 'id' => $com->id])?>" class="btn btn-outline-info btn-oblong tx-11 tx-uppercase tx-mont tx-medium tx-spacing-1 pd-x-30 bd-2">See more</a></td>
                </tr>


              <?php
                endforeach;
              ?>
             
              
            </tbody>
          </table>
          <div class="row mt-5">
            <div class="col-lg-3">
            <a href="<?=Url::to(['/site/commit'])?>" class="btn btn-outline-info btn-oblong tx-11 tx-uppercase tx-mont tx-medium tx-spacing-1 pd-x-30 bd-2">Введите комментарий</a>
            </div>
          </div>
        </div><!-- card -->
    </div>
</div>

</div><!-- br-pagebody --> 
