<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>Rafeeq | Details of the passenger</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Tajawal:300,400,500,700,900"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->

    <!--begin::Global Theme Styles -->
    <link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />

<!--    <link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css"/>-->
    <link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

<!--    <link href="assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css"/>-->

    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->

    <!--end::Page Vendors Styles -->
    <link rel="shortcut icon" href="assets/images/icon.png"/>
    <link rel="stylesheet" href="assets/css/lightgallery.css">
    <link rel="stylesheet" href="assets/css/lightslider.css">
    <link rel="stylesheet" href="assets/custome.css">
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- BEGIN: Header -->
    <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
        <div class="m-container m-container--fluid m-container--full-height">
            <div class="m-stack m-stack--ver m-stack--desktop">

                <!-- BEGIN: Brand -->
                <div class="m-stack__item m-brand  m-brand--skin-dark ">
                    <div class="m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-stack__item--middle m-brand__logo">
                            <a href="index.html" class="m-brand__logo-wrapper">
                                <img alt="" src="assets/images/inline-logo-wight.png"/>
                            </a>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools justify-content">

                            <!-- BEGIN: Left Aside Minimize Toggle -->
                            <a href="javascript:;" id="m_aside_left_minimize_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
                                <span></span>
                            </a>

                            <!-- END -->

                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>

                            <!-- END -->


                            <!-- BEGIN: Topbar Toggler -->
                            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;"
                               class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                <i class="flaticon-more"></i>
                            </a>

                            <!-- BEGIN: Topbar Toggler -->
                        </div>
                    </div>
                </div>

                <!-- END: Brand -->
                <?php include 'top_bar.php' ?>
            </div>
        </div>
    </header>

    <!-- END: Header -->

    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <?php include 'menu.php' ?>

        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper my-profile">

            <div class="m-subheader ">
                <div class="row align-items-center">
                    <div class="col-sm-4">
                        <h3 class="m-subheader__title ">Details of the passenger</h3>
                    </div>
                    <div class="col-sm-8 text-sm-right">
                        <ul class="list-inline state-list mb-0 mt-3 mt-sm-0">
                            <li class="list-inline-item ">
                                <span class="shadow-sm ">
                                    Insurance
                                </span>
                            </li>
                            <li class="list-inline-item active">
                                <span class="shadow-sm">
                                    Driving license
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="m-portlet m-portlet--full-height  ">
                            <div class="m-portlet__body">
                                <div class="profile-btn-option">
                                    <a href="#" data-toggle="modal" data-target="#m_modal_5"
                                       class="btn btn-success m-btn m-btn--custom m-btn--icon d-block text-center ">
                                    <span class="m-auto">
                                        <i class="la la-check"></i>
                                        <span>active </span>
                                    </span>
                                    </a>
                                    <a href="#m_modal_3" data-toggle="modal" data-target="#m_modal_3"
                                       class="btn btn-warning  m-btn m-btn--custom m-btn--icon d-block text-center mt-3">
                                    <span class="m-auto">
                                        <i class="la la-power-off"></i>
                                        <span>Disable </span>
                                    </span>
                                    </a>
                                </div>

                                <div class="m-portlet__body-separator"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                            <div class="tab-content">
                                <div class="tab-pane active" id="m_user_profile_tab_1">
                                    <form class="m-form m-form--fit m-form--label-align-right">
                                        <div class="m-portlet__body">
                                            <div class="row ">
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>vehicle type:</label>
                                                        <input disabled="" type="text"
                                                               class="form-control m-input m-input--square"
                                                               value="vehicle type ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>vehicle model:</label>
                                                        <input disabled="" type="text"
                                                               class="form-control m-input m-input--square"
                                                               value="vehicle model">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>Vehicle panel number:</label>
                                                        <input disabled="" type="text"
                                                               class="form-control m-input m-input--square"
                                                               value="Vehicle panel number">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>Manufacturing year:</label>
                                                        <input disabled="" type="text"
                                                               class="form-control m-input m-input--square"
                                                               value="manufacturing year">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>Number of seats:</label>
                                                        <input disabled="" type="text"
                                                               class="form-control m-input m-input--square"
                                                               value="Number of seats">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>vehicle color:</label>
                                                        <input disabled="" type="text"
                                                               class="form-control m-input m-input--square"
                                                               value="vehicle color">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>Insurance type:</label>
                                                        <input disabled="" type="text"
                                                               class="form-control m-input m-input--square"
                                                               value="Insurance type">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>state:</label>
                                                        <input disabled="" type="text"
                                                               class="form-control m-input m-input--square"
                                                               value="state">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label class="d-block text-left">Vehicle valuation:</label>
                                                        <a href="#" data-toggle="modal" data-target="#m_modal_2" class="d-inline-block text-center no-hover">
                                                            <div class="product-reviews-summary in-comment">
                                                                <div class="rating-summary">
                                                                    <div class="rating-result" title="70%">
                                                                        <span style="width:70%"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <div class="m-widget4 ">
                                                        <div class="m-widget4__item pl-5 pr-5 bg-light">
                                                            <div class="m-widget4__img m-widget4__img--icon">
                                                                <img src="assets/app/media/img/files/pdf.svg" alt="">
                                                            </div>
                                                            <div class="m-widget4__info">
                                                                        <span class="m-widget4__text">
                                                                            Insurance type
                                                                        </span>
                                                            </div>
                                                            <div class="m-widget4__ext">
                                                                <a href="#" class="m-widget4__icon">
                                                                    <i class="la la-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="m-widget4 ">
                                                        <div class="m-widget4__item pl-5 pr-5 bg-light">
                                                            <div class="m-widget4__img m-widget4__img--icon">
                                                                <img src="assets/app/media/img/files/pdf.svg" alt="">
                                                            </div>
                                                            <div class="m-widget4__info">
                                                                        <span class="m-widget4__text">
                                                                            Vehicle License
                                                                        </span>
                                                            </div>
                                                            <div class="m-widget4__ext">
                                                                <a href="#" class="m-widget4__icon">
                                                                    <i class="la la-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group ">
                                                <ul id="imageGallery">
                                                    <li data-thumb="assets/images/cars/1.jpg" data-src="assets/images/cars/1.jpg">
                                                        <img src="assets/images/cars/1.jpg" />
                                                    </li>
                                                    <li data-thumb="assets/images/cars/2.jpg" data-src="assets/images/cars/2.jpg">
                                                        <img src="assets/images/cars/2.jpg" />
                                                    </li>
                                                    <li data-thumb="assets/images/cars/3.jpg" data-src="assets/images/cars/3.jpg">
                                                        <img src="assets/images/cars/3.jpg" />
                                                    </li>
                                                    <li data-thumb="assets/images/cars/4.jpg" data-src="assets/images/cars/4.jpg">
                                                        <img src="assets/images/cars/4.jpg" />
                                                    </li>
                                                    <li data-thumb="assets/images/cars/5.jpg" data-src="assets/images/cars/5.jpg">
                                                        <img src="assets/images/cars/5.jpg" />
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Body -->

    <?php include 'footer.php' ?>
</div>

<!-- end:: Page -->


<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->

<!--begin::Modal-->
<div class="modal fade" id="m_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Car activate</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Are you sure you want to activate this Car?
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">activate</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="m_modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
     aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Evaluation Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row mb-3">
                    <div class="col-lg-2">
                        <p class="m-0">Wonderful:</p>
                    </div>
                    <div class="col-lg-10">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 60%"
                                 aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                150
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-2">
                        <p class="m-0">Excellent:</p>
                    </div>
                    <div class="col-lg-10">
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 40%"
                                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                120
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-2">
                        <p class="m-0">good:</p>
                    </div>
                    <div class="col-lg-10">
                        <div class="progress">
                            <div class="progress-bar bg-brand" role="progressbar" style="width: 30%"
                                 aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                90
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-2">
                        <p class="m-0">Acceptable:</p>
                    </div>
                    <div class="col-lg-10">
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 20%"
                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                70
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-2">
                        <p class="m-0">Weak:</p>
                    </div>
                    <div class="col-lg-10">
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 10%"
                                 aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                20
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="m_modal_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Car disable </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Are you sure you want to disable this Car?
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">disable</button>
            </div>
        </div>
    </div>
</div>

<!--end::Modal-->
<!--begin::Global Theme Bundle -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->


<!--begin::Page Scripts -->

<script src="assets/js/lightgallery-all.min.js"></script>
<script src="assets/js/lightslider.min.js"></script>

<script>
    $(document).ready(function() {
        $('#imageGallery').lightSlider({
            gallery:true,
            item:1,
            loop:true,
            rtl:true,
            thumbItem:9,
            slideMargin:0,
            enableDrag: false,
            currentPagerPosition:'left',
            onSliderLoad: function(el) {
                el.lightGallery({
                    selector: '#imageGallery .lslide',
                    rtl:true
                });
            }
        });
    });
</script>
<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
