<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>Rafeeq | Details of confirmed bookings</title>
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
            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">

                                        <h3 class="m-portlet__head-text">
                                            Details of confirmed bookings
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <div class="d-flex align-items-center">
                                        <a href="#m_modal_4" data-toggle="modal" data-target="#m_modal_4"
                                           class="btn btn-brand  m-btn m-btn--custom m-btn--icon d-block text-center ">
                                    <span class="m-auto">
                                        <i class="flaticon-multimedia-2"></i>
                                        <span>Sending Message </span>
                                    </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <form class="m-form m-form--fit m-form--label-align-right">
                                    <div class="m-portlet__body">
                                        <div class="row ">
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group mb-4">
                                                    <label>Trip code:</label>
                                                    <input disabled="" type="text"
                                                           class="form-control m-input m-input--square"
                                                           value="Trip code">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group mb-4">
                                                    <label>Passenger name:</label>
                                                    <input disabled="" type="text"
                                                           class="form-control m-input m-input--square"
                                                           value="Passenger name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group mb-4">
                                                    <label>City Start trip:</label>
                                                    <input disabled="" type="text"
                                                           class="form-control m-input m-input--square"
                                                           value="City Start trip">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group mb-4">
                                                    <label>City End trip:</label>
                                                    <input disabled="" type="email"
                                                           class="form-control m-input m-input--square"
                                                           value="City End trip">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group mb-4">
                                                    <label>Number of seats reserved:</label>
                                                    <input disabled="" type="text"
                                                           class="form-control m-input m-input--square"
                                                           value="4">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group mb-4">
                                                    <label>Trip date:</label>
                                                    <input disabled="" type="text"
                                                           class="form-control m-input m-input--square"
                                                           value="Trip date">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group mb-4">
                                                    <label>Trip timing:</label>
                                                    <input disabled="" type="text" dir="ltr"
                                                           class="form-control m-input m-input--square text-left"
                                                           value="4:50 PM - 5:00 AM">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group mb-4">
                                                    <label>Vehicle:</label>
                                                    <input disabled="" type="text"
                                                           class="form-control m-input m-input--square"
                                                           value="Vehicle">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group mb-4">
                                                    <label>Number of ordinary seats:</label>
                                                    <input disabled="" type="text"
                                                           class="form-control m-input m-input--square"
                                                           value="Number of ordinary seats">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group mb-4">
                                                    <label>Standard seat price:</label>
                                                    <input disabled="" type="text"
                                                           class="form-control m-input m-input--square"
                                                           value="Standard seat price">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group mb-4">
                                                    <label>Number of distinctive seats:</label>
                                                    <input disabled="" type="text"
                                                           class="form-control m-input m-input--square"
                                                           value="Number of distinctive seats">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group mb-4">
                                                    <label>Distinctive seats price:</label>
                                                    <input disabled="" type="text"
                                                           class="form-control m-input m-input--square"
                                                           value="Distinctive seats price">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group mb-4">
                                                    <label>Total amount of payment:</label>
                                                    <input disabled="" type="text"
                                                           class="form-control m-input m-input--square"
                                                           value="Total amount of payment">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group mb-4">
                                                    <label>Payment method:</label>
                                                    <input disabled="" type="text"
                                                           class="form-control m-input m-input--square"
                                                           value="Payment method">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group mb-4">
                                                    <label>Payment amount:</label>
                                                    <input disabled="" type="text"
                                                           class="form-control m-input m-input--square"
                                                           value="Payment amount">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group mb-4">
                                                    <label class="d-block text-left">Passenger names:</label>
                                                    <a href="#m_modal_3" data-toggle="modal" data-target="#m_modal_3"
                                                       class="btn btn-info m-btn  w-100 m-btn--custom m-btn--icon">
                                                        <span>
                                                            <i class="fa fa-users"></i>
                                                            <span>Passenger names</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group m-form__group mb-4">
                                                    <label>Notes:</label>
                                                    <textarea disabled="" type="text" rows="3"
                                                              class="form-control m-input m-input--square">Notes</textarea>
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
<div class="modal fade" id="m_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
     aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <form action="#">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Sending a Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group m-form__group">
                        <textarea class="form-control m-input" placeholder="Enter the text of the message" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="m_modal_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Passenger names</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="m-widget2">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class=" m-widget2__item m-widget2__item--primary mb-3">
                                <div class="m-widget2__checkbox"></div>
                                <div class="m-widget2__desc">
                            <span class="m-widget2__text">
                                Hamza abo aitah
                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class=" m-widget2__item m-widget2__item--primary mb-3">
                                <div class="m-widget2__checkbox"></div>
                                <div class="m-widget2__desc">
                            <span class="m-widget2__text">
                                Hamza abo aitah
                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class=" m-widget2__item m-widget2__item--primary mb-3">
                                <div class="m-widget2__checkbox"></div>
                                <div class="m-widget2__desc">
                            <span class="m-widget2__text">
                                Hamza abo aitah
                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class=" m-widget2__item m-widget2__item--primary mb-3">
                                <div class="m-widget2__checkbox"></div>
                                <div class="m-widget2__desc">
                            <span class="m-widget2__text">
                                Hamza abo aitah
                            </span>
                                </div>
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

<!--end::Modal-->
<!--begin::Global Theme Bundle -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->


<!--begin::Page Scripts -->

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>