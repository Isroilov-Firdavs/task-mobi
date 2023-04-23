<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels"> 
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">



    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>


<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href="/admin"><span>[</span>bracket<span>]</span></a></div>
<div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
    <div class="br-sideleft-menu">
    <a href="/admin" class="br-menu-link active">
        <div class="br-menu-item">
        <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
        <span class="menu-item-label">Dashboard</span>
        </div><!-- menu-item -->
    </a><!-- br-menu-link -->
    <a href="mailbox.html" class="br-menu-link">
        <div class="br-menu-item">
        <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
        <span class="menu-item-label">Mailbox</span>
        </div><!-- menu-item -->
    </a><!-- br-menu-link -->
    <a href="card-dashboard.html" class="br-menu-link">
        <div class="br-menu-item">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Cards &amp; Widgets</span>
        </div><!-- menu-item -->
    </a><!-- br-menu-link -->
    <a href="#" class="br-menu-link">
        <div class="br-menu-item">
        <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
        <span class="menu-item-label">UI Elements</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
    </a><!-- br-menu-link -->
    <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="accordion.html" class="nav-link">Accordion</a></li>
        <li class="nav-item"><a href="alerts.html" class="nav-link">Alerts</a></li>
        <li class="nav-item"><a href="buttons.html" class="nav-link">Buttons</a></li>
        <li class="nav-item"><a href="cards.html" class="nav-link">Cards</a></li>
        <li class="nav-item"><a href="icons.html" class="nav-link">Icons</a></li>
        <li class="nav-item"><a href="modal.html" class="nav-link">Modal</a></li>
        <li class="nav-item"><a href="pagination.html" class="nav-link">Pagination</a></li>
        <li class="nav-item"><a href="popups.html" class="nav-link">Tooltip &amp; Popover</a></li>
        <li class="nav-item"><a href="progress.html" class="nav-link">Progress</a></li>
        <li class="nav-item"><a href="spinners.html" class="nav-link">Spinners</a></li>
        <li class="nav-item"><a href="typography.html" class="nav-link">Typography</a></li>
    </ul>
    <a href="#" class="br-menu-link">
        <div class="br-menu-item">
        <i class="menu-item-icon ion-ios-redo-outline tx-24"></i>
        <span class="menu-item-label">Navigation</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
    </a><!-- br-menu-link -->
    </div><!-- br-sideleft-menu -->


    <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
<div class="br-header">
    <div class="br-header-left">
    <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
    <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
    <div class="input-group hidden-xs-down wd-170 transition">
    </div><!-- input-group -->
    </div><!-- br-header-left -->
    <div class="br-header-right">
    <nav class="nav">
        <div class="dropdown">
        <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
            <i class="icon ion-ios-email-outline tx-24"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
            <!-- end: if statement -->
        </a>
        <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
            <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
            <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Messages</label>
            <a href="" class="tx-11">+ Add New Message</a>
            </div><!-- d-flex -->

            <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link">
                <div class="media pd-x-20 pd-y-15">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                    <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Donna Seay</p>
                    <span class="tx-11 tx-gray-500">2 minutes ago</span>
                    </div><!-- d-flex -->
                    <p class="tx-12 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
                </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                    <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Samantha Francis</p>
                    <span class="tx-11 tx-gray-500">3 hours ago</span>
                    </div><!-- d-flex -->
                    <p class="tx-12 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                </div>
                </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                    <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Robert Walker</p>
                    <span class="tx-11 tx-gray-500">5 hours ago</span>
                    </div><!-- d-flex -->
                    <p class="tx-12 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
                </div>
                </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                    <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Larry Smith</p>
                    <span class="tx-11 tx-gray-500">Yesterday</span>
                    </div><!-- d-flex -->
                    <p class="tx-12 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                </div>
                </div><!-- media -->
            </a>
            <div class="pd-y-10 tx-center bd-t">
                <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Messages</a>
            </div>
            </div><!-- media-list -->
        </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        <div class="dropdown">
        <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
            <i class="icon ion-ios-bell-outline tx-24"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
            <!-- end: if statement -->
        </a>
        <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
            <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
            <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Notifications</label>
            <a href="" class="tx-11">Mark All as Read</a>
            </div><!-- d-flex -->

            <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                    <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                    <span class="tx-12">October 03, 2017 8:45am</span>
                </div>
                </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                    <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                    <span class="tx-12">October 02, 2017 12:44am</span>
                </div>
                </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                    <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                    <span class="tx-12">October 01, 2017 10:20pm</span>
                </div>
                </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                    <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                    <span class="tx-12">October 01, 2017 6:08pm</span>
                </div>
                </div><!-- media -->
            </a>
            <div class="pd-y-10 tx-center bd-t">
                <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
            </div>
            </div><!-- media-list -->
        </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        <div class="dropdown">
        <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
            <span class="logged-name hidden-md-down"><?=Yii::$app->user->identity->username?></span>
            <img src="http://via.placeholder.com/64x64" class="wd-32 rounded-circle" alt="">
            <span class="square-10 bg-success"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-header wd-200">
            <ul class="list-unstyled user-profile-nav">
            <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
            <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
            <li><a href=""><i class="icon ion-ios-download"></i> Downloads</a></li>
            <li><a href=""><i class="icon ion-ios-star"></i> Favorites</a></li>
            <li><a href=""><i class="icon ion-ios-folder"></i> Collections</a></li>
            <!-- <li><a href=""><i class="icon ion-power"></i> Sign Out</a> </li> -->
                <?php
                    echo Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        '<i class="icon ion-power"></i> Sign Out',
                        ['class' => 'btn btn-link logout text-decoration-none']
                    )
                    . Html::endForm();

                ?>
            </ul>
        </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
    </nav>
    <div class="navicon-right">
        <a id="btnRightMenu" href="" class="pos-relative">
        <i class="icon ion-ios-chatboxes-outline"></i>
        <!-- start: if statement -->
        <span class="square-8 bg-danger pos-absolute t-10 r--5 rounded-circle"></span>
        <!-- end: if statement -->
        </a>
    </div><!-- navicon-right -->
    </div><!-- br-header-right -->
</div><!-- br-header -->
<!-- ########## END: HEAD PANEL ########## -->

<!-- ########## START: RIGHT PANEL ########## -->
<div class="br-sideright">
    <ul class="nav nav-tabs sidebar-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" role="tab" href="#contacts"><i class="icon ion-ios-contact-outline tx-24"></i></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" role="tab" href="#attachments"><i class="icon ion-ios-folder-outline tx-22"></i></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" role="tab" href="#calendar"><i class="icon ion-ios-calendar-outline tx-24"></i></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" role="tab" href="#settings"><i class="icon ion-ios-gear-outline tx-24"></i></a>
    </li>
    </ul><!-- sidebar-tabs -->

    <!-- Tab panes -->
    <div class="tab-content">
    <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto active" id="contacts" role="tabpanel">
        <label class="sidebar-label pd-x-25 mg-t-25">Online Contacts</label>
        <div class="contact-list pd-x-10">
        <a href="" class="contact-list-link new">
            <div class="d-flex">
            <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-success"></div>
            </div>
            <div class="contact-person">
                <p class="mg-b-0">Marilyn Tarter</p>
                <span class="tx-12 op-5 d-inline-block">Clemson, CA</span>
            </div>
            <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 1 new</span>
            </div><!-- d-flex -->
        </a><!-- contact-list-link -->
        <a href="" class="contact-list-link">
            <div class="d-flex">
            <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-success"></div>
            </div>
            <div class="contact-person">
                <p class="mg-b-0 ">Belinda Connor</p>
                <span class="tx-12 op-5 d-inline-block">Fort Kent, ME</span>
            </div>
            </div><!-- d-flex -->
        </a><!-- contact-list-link -->
        <a href="" class="contact-list-link new">
            <div class="d-flex">
            <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-success"></div>
            </div>
            <div class="contact-person">
                <p class="mg-b-0">Britanny Cevallos</p>
                <span class="tx-12 op-5 d-inline-block">Shiboygan Falls, WI</span>
            </div>
            <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 3 new</span>
            </div><!-- d-flex -->
        </a><!-- contact-list-link -->
        <a href="" class="contact-list-link new">
            <div class="d-flex">
            <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-success"></div>
            </div>
            <div class="contact-person">
                <p class="mg-b-0">Brandon Lawrence</p>
                <span class="tx-12 op-5 d-inline-block">Snohomish, WA</span>
            </div>
            <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 1 new</span>
            </div><!-- d-flex -->
        </a><!-- contact-list-link -->
        <a href="" class="contact-list-link">
            <div class="d-flex">
            <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-success"></div>
            </div>
            <div class="contact-person">
                <p class="mg-b-0">Andrew Wiggins</p>
                <span class="tx-12 op-5 d-inline-block">Springfield, MA</span>
            </div>
            </div><!-- d-flex -->
        </a><!-- contact-list-link -->
        <a href="" class="contact-list-link">
            <div class="d-flex">
            <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-success"></div>
            </div>
            <div class="contact-person">
                <p class="mg-b-0">Theodore Gristen</p>
                <span class="tx-12 op-5 d-inline-block">Nashville, TN</span>
            </div>
            </div><!-- d-flex -->
        </a><!-- contact-list-link -->
        <a href="" class="contact-list-link">
            <div class="d-flex">
            <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-success"></div>
            </div>
            <div class="contact-person">
                <p class="mg-b-0">Deborah Miner</p>
                <span class="tx-12 op-5 d-inline-block">North Shore, CA</span>
            </div>
            </div><!-- d-flex -->
        </a><!-- contact-list-link -->
        </div><!-- contact-list -->


        <label class="sidebar-label pd-x-25 mg-t-25">Offline Contacts</label>
        <div class="contact-list pd-x-10">
        <a href="" class="contact-list-link">
            <div class="d-flex">
            <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-gray-500"></div>
            </div>
            <div class="contact-person">
                <p class="mg-b-0">Marilyn Tarter</p>
                <span class="tx-12 op-5 d-inline-block">Clemson, CA</span>
            </div>
            </div><!-- d-flex -->
        </a><!-- contact-list-link -->
        <a href="" class="contact-list-link">
            <div class="d-flex">
            <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-gray-500"></div>
            </div>
            <div class="mg-l-10">
                <p class="mg-b-0">Belinda Connor</p>
                <span class="tx-12 op-5 d-inline-block">Fort Kent, ME</span>
            </div>
            </div><!-- d-flex -->
        </a><!-- contact-list-link -->
        <a href="" class="contact-list-link">
            <div class="d-flex">
            <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-gray-500"></div>
            </div>
            <div class="contact-person">
                <p class="mg-b-0">Britanny Cevallos</p>
                <span class="tx-12 op-5 d-inline-block">Shiboygan Falls, WI</span>
            </div>
            </div><!-- d-flex -->
        </a><!-- contact-list-link -->
        <a href="" class="contact-list-link">
            <div class="d-flex">
            <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-gray-500"></div>
            </div>
            <div class="contact-person">
                <p class="mg-b-0">Brandon Lawrence</p>
                <span class="tx-12 op-5 d-inline-block">Snohomish, WA</span>
            </div>
            </div><!-- d-flex -->
        </a><!-- contact-list-link -->
        <a href="" class="contact-list-link">
            <div class="d-flex">
            <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-gray-500"></div>
            </div>
            <div class="contact-person">
                <p class="mg-b-0">Andrew Wiggins</p>
                <span class="tx-12 op-5 d-inline-block">Springfield, MA</span>
            </div>
            </div><!-- d-flex -->
        </a><!-- contact-list-link -->
        <a href="" class="contact-list-link">
            <div class="d-flex">
            <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-gray-500"></div>
            </div>
            <div class="contact-person">
                <p class="mg-b-0">Theodore Gristen</p>
                <span class="tx-12 op-5 d-inline-block">Nashville, TN</span>
            </div>
            </div><!-- d-flex -->
        </a><!-- contact-list-link -->
        <a href="" class="contact-list-link">
            <div class="d-flex">
            <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-gray-500"></div>
            </div>
            <div class="contact-person">
                <p class="mg-b-0">Deborah Miner</p>
                <span class="tx-12 op-5 d-inline-block">North Shore, CA</span>
            </div>
            </div><!-- d-flex -->
        </a><!-- contact-list-link -->
        </div><!-- contact-list -->

    </div><!-- #contacts -->


    
    </div><!-- tab-content -->
</div><!-- br-sideright -->
<!-- ########## END: RIGHT PANEL ########## --->




<div class="br-mainpanel">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>


    <footer class="br-footer">
        <div class="footer-left">
            <div class="mg-b-2">Copyright &copy; 2017. Bracket. All Rights Reserved.</div>
            <div>Attentively and carefully made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
            <span class="tx-uppercase mg-r-10">Share:</span>
            <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracket/intro"><i class="fa fa-facebook tx-20"></i></a>
            <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracket/intro"><i class="fa fa-twitter tx-20"></i></a>
        </div>
    </footer>
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
