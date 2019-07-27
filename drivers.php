<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>Rafeeq | Drivers</title>
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
                            <a href="index.php" class="m-brand__logo-wrapper">
                                <img alt="" src="assets/images/inline-logo.png"/>
                            </a>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools">

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
        <div class="m-grid__item m-grid__item--fluid m-wrapper">

            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">Drivers</h3>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Drivers Management
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <!--begin: Datatable -->
                        <div class="table-responsive-xl">
                            <table class="table table-striped- table-bordered table-hover table-checkable"
                                   id="m_table_1">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>driver's name</th>
                                    <th>age</th>
                                    <th>nationality</th>
                                    <th>driver type</th>
                                    <th>city</th>
                                    <th>operations</th>
                                    <th>details</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>driver's name</td>
                                    <td>age</td>
                                    <td>nationality</td>
                                    <td>driver type</td>
                                    <td>city</td>
                                    <td>
                                     <span class="dropdown user-option">
                                        <a href="#"
                                           class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                           data-toggle="dropdown"
                                           aria-expanded="true"><i class="la la-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left user-option">
                                            <a class="dropdown-item" href="#m_modal_5" data-toggle="modal"
                                               data-target="#m_modal_5"><i
                                                        class="la la-check"></i> Activation  </a>
                                              <a class="dropdown-item" href="user-services.php">
                                                   <i class="fab fa-fly"></i> Trips</a>
                                             <a class="dropdown-item" href="driver-tours.php">
                                                   <i class="fas fa-plane"></i> Driver Tours</a>
                                             <a class="dropdown-item" href="driver-cars.php">
                                                   <i class="fa fa-car"></i> Vehicles</a>
                                            <a class="dropdown-item" href="payments.php">
                                                   <i class="flaticon-statistics"></i> Payments</a>
                                              <a class="dropdown-item" href="user-message.php">
                                                   <i class="la la-comment-o"></i> Driver messages</a>
                                            <a class="dropdown-item" href="#m_modal_4" data-toggle="modal"
                                               data-target="#m_modal_4">
                                                   <i class="flaticon-multimedia-2"></i> Send Message</a>
                                        </div>
                                    </span>
                                    </td>
                                    <td>
                                        <a href="driver-profile.php"
                                           class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>driver's name</td>
                                    <td>age</td>
                                    <td>nationality</td>
                                    <td>Driver type</td>
                                    <td>city</td>
                                    <td>
                                     <span class="dropdown user-option">
                                        <a href="#"
                                           class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                           data-toggle="dropdown"
                                           aria-expanded="true"><i class="la la-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left user-option">
                                            <a class="dropdown-item" href="#m_modal_3" data-toggle="modal"
                                               data-target="#m_modal_3"><i
                                                        class="la la-power-off"></i> Disable  </a>
                                           <a class="dropdown-item" href="user-services.php">
                                                   <i class="fab fa-fly"></i> Trips</a>
                                             <a class="dropdown-item" href="driver-tours.php">
                                                   <i class="fas fa-plane"></i> Driver Tours</a>
                                             <a class="dropdown-item" href="driver-cars.php">
                                                   <i class="fa fa-car"></i> Vehicles</a>
                                            <a class="dropdown-item" href="payments.php">
                                                   <i class="flaticon-statistics"></i> Payments</a>
                                              <a class="dropdown-item" href="user-message.php">
                                                   <i class="la la-comment-o"></i> Driver messages</a>
                                            <a class="dropdown-item" href="#m_modal_4" data-toggle="modal"
                                               data-target="#m_modal_4">
                                                   <i class="flaticon-multimedia-2"></i> Send Message</a>


                                        </div>
                                    </span>
                                    </td>
                                    <td>
                                        <a href="driver-profile.php"
                                           class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>driver's name</td>
                                    <td>age</td>
                                    <td>nationality</td>
                                    <td>driver type	</td>
                                    <td>
                                        city
                                    </td>
                                    <td>
                                     <span class="dropdown user-option">
                                        <a href="#"
                                           class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                           data-toggle="dropdown"
                                           aria-expanded="true"><i class="la la-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left user-option">
                                            <a class="dropdown-item" href="#m_modal_3" data-toggle="modal"
                                               data-target="#m_modal_3"><i
                                                        class="la la-power-off"></i> Disable  </a>
                                             <a class="dropdown-item" href="user-services.php">
                                                   <i class="fab fa-fly"></i> Trips</a>
                                             <a class="dropdown-item" href="driver-tours.php">
                                                   <i class="fas fa-plane"></i> Driver Tours</a>
                                             <a class="dropdown-item" href="driver-cars.php">
                                                   <i class="fa fa-car"></i> Vehicles</a>
                                            <a class="dropdown-item" href="payments.php">
                                                   <i class="flaticon-statistics"></i> Payments</a>
                                              <a class="dropdown-item" href="user-message.php">
                                                   <i class="la la-comment-o"></i> Driver messages</a>
                                            <a class="dropdown-item" href="#m_modal_4" data-toggle="modal"
                                               data-target="#m_modal_4">
                                                   <i class="flaticon-multimedia-2"></i> Send Message</a>
                                        </div>
                                    </span>
                                    </td>
                                    <td>
                                        <a href="driver-profile.php"
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

                <!-- END EXAMPLE TABLE PORTLET-->
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
                <h5 class="modal-title" id="exampleModalLabel">Account activate</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Are you sure you want to activate this account?
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Confirmation</button>
            </div>
        </div>
    </div>
</div>
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
<div class="modal fade" id="m_modal_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Disable account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Are you sure you want to disable this account?
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Confirmation</button>
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
<script src="assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<script src="assets/demo/default/custom/crud/datatables/basic/headers.js" type="text/javascript"></script>

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>