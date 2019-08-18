<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>Rafeeq | vehicle details</title>
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
    <link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css"/>
    <!--    <link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css"/>-->
    <link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css"/>
    <!--    <link href="assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css"/>-->
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

            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <h3 class="m-subheader__title ">Payment details</h3>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="m-portlet m-portlet--creative m-portlet--full-height  mt-0  ">
                            <div class="m-portlet__head h-0">
                                <div class="m-portlet__head-caption w-100 shadow-0">
                                    <div class="m-portlet__head-title">
                                        <div class="m-portlet__head-label w-100 shadow-0">
                                            <button class=" d-inline-block  btn btn-primary" data-toggle="modal"
                                                    data-target="#m_modal_6">
                                                <i class="fas fa-dollar-sign"></i>
                                                <span> Transformation</span>
                                            </button>
                                            <a id="Print" href="javascript:void(0);"
                                               class="btn btn-success m-btn ml-2 m-btn--custom m-btn--icon d-inline-block text-center ">
                                                <span class="m-auto">
                                                    <i class="la la-print"></i>
                                                    <span>Print</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form class="m-form m-form--fit m-form--label-align-right print-div">
                                <div class="m-portlet__body ">
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
                                                            Identity
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
                                                            Driving license
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
                                </div>
                            </form>
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

<div class="modal fade" id="m_modal_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <form action="#">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Transformation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-sm-12 pb-1">Payment method</label>
                        <div class="col-sm-12">
                            <select class="form-control m-bootstrap-select m_selectpicker">
                                <option>Paypal</option>
                                <option>Mastercard</option>
                                <option>visa card</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1" class="pb-1 mb-0">Amount</label>
                        <div class="input-group amount-group-btn">
                            <input type="text" class="form-control m-input" disabled value="50" placeholder="Amount"
                                   aria-describedby="basic-addon2">
                            <div class="input-group-append"><span class="input-group-text" id="basic-addon2">SAR</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </div>
    </form>
</div>


<!--end::Modal-->
<!--begin::Global Theme Bundle -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<script src="assets/js/jquery.PrintArea.js" type="text/javascript"></script>
<script src="assets/demo/default/custom/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $("#Print").on('click', function () {
            let mode = 'iframe';
            let close = mode === 'popup';
            let options = {mode : mode , popClose: close};
            $('.print-div').printArea(options)
        } )
    })
</script>
<!--end::Global Theme Bundle -->



<!--begin::Page Scripts -->

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
