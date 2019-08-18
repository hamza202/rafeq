<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>Rafeeq | Reservations</title>
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

    <link href="assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
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
            <!-- END: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">Reservations</h3>
                    </div>
                </div>
            </div>
            <div class="m-content pb-0 mb--30">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="m-portlet m-portlet--full-height  ">
                            <div class="m-portlet__body">
                                <ul class="nav nav-tabs  m-tabs-line m-tabs-line--2x m-tabs-line--brouwn"
                                    role="tablist">
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_6_1"
                                           role="tab">Requests reservation </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_2"
                                           role="tab">Confirmed reservations </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_3"
                                           role="tab">Previous reservations</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
                    <div class="m-content pt-0">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="m_user_profile_tab_1">
                                            <div class="m-portlet__body">
                                                <div class="table-responsive-xl">
                                                    <table class="table table-striped- table-bordered table-hover table-checkable"
                                                           id="m_table_1">
                                                        <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Trip code</th>
                                                            <th>From</th>
                                                            <th>To</th>
                                                            <th>Order status</th>
                                                            <th>Send message</th>
                                                            <th>Details</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Trip code</td>
                                                            <td>From</td>
                                                            <td>To</td>
                                                            <td><span class="m-badge  m-badge--success m-badge--wide">Under review</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <a
                                                                   class="btn btn-outline-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air"
                                                                   href="#m_modal_4" data-toggle="modal"
                                                                   data-target="#m_modal_4">
                                                                    <i class="fa fa-envelope"></i>
                                                                </a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="reservation-request-details.php"
                                                                   class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Trip code</td>
                                                            <td>From</td>
                                                            <td>To</td>
                                                            <td><span class="m-badge  m-badge--warning m-badge--wide">Waiting for payment</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <a
                                                                        class="btn btn-outline-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air"
                                                                        href="#m_modal_4" data-toggle="modal"
                                                                        data-target="#m_modal_4">
                                                                    <i class="fa fa-envelope"></i>
                                                                </a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="reservation-request-details.php"
                                                                   class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Trip code</td>
                                                            <td>From</td>
                                                            <td>To</td>
                                                            <td><span class="m-badge  m-badge--danger m-badge--wide">Canceled</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <a
                                                                        class="btn btn-outline-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air"
                                                                        href="#m_modal_4" data-toggle="modal"
                                                                        data-target="#m_modal_4">
                                                                    <i class="fa fa-envelope"></i>
                                                                </a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="reservation-request-details.php"
                                                                   class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="m_tabs_6_2" role="tabpanel">
                    <div class="m-content pt-0">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="m_user_profile_tab_2">
                                            <div class="m-portlet__body">
                                                <div class="table-responsive-xl">
                                                    <table class="table table-striped- table-bordered table-hover table-checkable"
                                                           id="m_table_2">
                                                        <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Trip code</th>
                                                            <th>Date / Time</th>
                                                            <th>From</th>
                                                            <th>To</th>
                                                            <th>Send message</th>
                                                            <th>Details</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Trip code</td>
                                                            <td>Date / Time</td>
                                                            <td>From</td>
                                                            <td>To</td>
                                                            <td class="text-center">
                                                                <a
                                                                        class="btn btn-outline-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air"
                                                                        href="#m_modal_4" data-toggle="modal"
                                                                        data-target="#m_modal_4">
                                                                    <i class="fa fa-envelope"></i>
                                                                </a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="reservations-confirmed-details.php"
                                                                   class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Trip code</td>
                                                            <td>Date / Time</td>
                                                            <td>From</td>
                                                            <td>To</td>
                                                            <td class="text-center">
                                                                <a
                                                                        class="btn btn-outline-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air"
                                                                        href="#m_modal_4" data-toggle="modal"
                                                                        data-target="#m_modal_4">
                                                                    <i class="fa fa-envelope"></i>
                                                                </a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="reservations-confirmed-details.php"
                                                                   class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Trip code</td>
                                                            <td>Date / Time</td>
                                                            <td>From</td>
                                                            <td>To</td>
                                                            <td class="text-center">
                                                                <a
                                                                        class="btn btn-outline-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air"
                                                                        href="#m_modal_4" data-toggle="modal"
                                                                        data-target="#m_modal_4">
                                                                    <i class="fa fa-envelope"></i>
                                                                </a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="reservations-confirmed-details.php"
                                                                   class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="m_tabs_6_3" role="tabpanel">
                    <div class="m-content pt-0">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="m_user_profile_tab_3">
                                            <div class="m-portlet__body">
                                                <div class="table-responsive-xl">
                                                    <table class="table table-striped- table-bordered table-hover table-checkable"
                                                           id="m_table_3">
                                                        <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Trip code</th>
                                                            <th>Date / Time</th>
                                                            <th>Order status</th>
                                                            <th>From</th>
                                                            <th>To</th>
                                                            <th>Send message</th>
                                                            <th>Details</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Trip code</td>
                                                            <td>Date / Time</td>
                                                            <td>
                                                                <span class="m-badge  m-badge--warning m-badge--wide">Finished</span>
                                                            </td>
                                                            <td>From</td>
                                                            <td>To</td>
                                                            <td class="text-center">
                                                                <a
                                                                        class="btn btn-outline-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air"
                                                                        href="#m_modal_4" data-toggle="modal"
                                                                        data-target="#m_modal_4">
                                                                    <i class="fa fa-envelope"></i>
                                                                </a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="previous-reservations-details.php"
                                                                   class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Trip code</td>
                                                            <td>Date / Time</td>
                                                            <td>
                                                                <span class="m-badge  m-badge--danger m-badge--wide">Closed</span>
                                                            </td>
                                                            <td>From</td>
                                                            <td>To</td>
                                                            <td class="text-center">
                                                                <a
                                                                        class="btn btn-outline-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air"
                                                                        href="#m_modal_4" data-toggle="modal"
                                                                        data-target="#m_modal_4">
                                                                    <i class="fa fa-envelope"></i>
                                                                </a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="previous-reservations-details.php"
                                                                   class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Trip code</td>
                                                            <td>Date / Time</td>
                                                            <td>
                                                                <span class="m-badge  m-badge--danger m-badge--wide">Closed</span>
                                                            </td>
                                                            <td>From</td>
                                                            <td>To</td>
                                                            <td class="text-center">
                                                                <a
                                                                        class="btn btn-outline-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air"
                                                                        href="#m_modal_4" data-toggle="modal"
                                                                        data-target="#m_modal_4">
                                                                    <i class="fa fa-envelope"></i>
                                                                </a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="previous-reservations-details.php"
                                                                   class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
<div class="modal fade" id="m_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
     aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <form action="#">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Send message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group m-form__group">
                        <textarea class="form-control m-input" placeholder="ادخل نص الرسالة"  rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-success">ارسال</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--end::Modal-->
<!--begin::Global Theme Bundle -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<script src="assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<script src="assets/demo/default/custom/crud/datatables/basic/headers.js" type="text/javascript"></script>


<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
