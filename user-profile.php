<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>Rafeeq | User Profile </title>
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

    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->

    <link href="assets/vendors/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css"/>
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
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">Passenger Details</h3>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="m-portlet m-portlet--full-height  ">
                            <div class="m-portlet__body">
                                <div class="m-card-profile">
                                    <div class="m-card-profile__pic">
                                        <div class="m-card-profile__pic-wrapper mt-0">
                                            <img src="assets/images/user.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-btn-option">
                                    <a href="#" data-toggle="modal" data-target="#m_modal_5"
                                       class="btn btn-success m-btn m-btn--custom m-btn--icon d-block text-center ">
                                    <span class="m-auto">
                                        <i class="la la-check"></i>
                                        <span>Activation </span>
                                    </span>
                                    </a>
                                    <a href="#m_modal_3" data-toggle="modal" data-target="#m_modal_3"
                                       class="btn btn-warning  m-btn m-btn--custom m-btn--icon d-block text-center mt-3">
                                    <span class="m-auto">
                                        <i class="la la-power-off"></i>
                                        <span>Disable </span>
                                    </span>
                                    </a>
                                    <a href="user-services.php"
                                       class="btn btn-accent m-btn m-btn--custom m-btn--icon d-block text-center mt-3">
                                    <span class="m-auto">
                                        <i class="la la-calendar-plus-o"></i>
                                        <span>Reservations</span>
                                    </span>
                                    </a>
                                    <a href="payments.php"
                                       class="btn btn-primary m-btn m-btn--custom m-btn--icon d-block text-center mt-3">
                                    <span class="m-auto">
                                        <i class="flaticon-statistics"></i>
                                        <span>Payments</span>
                                    </span>
                                    </a>
                                    <a href="user-message.php"
                                       class="btn btn-info  m-btn m-btn--custom m-btn--icon d-block text-center mt-3">
                                    <span class="m-auto">
                                        <i class="la la-comment-o"></i>
                                        <span>User messages</span>
                                    </span>
                                    </a>
                                    <a href="#m_modal_4" data-toggle="modal" data-target="#m_modal_4"
                                       class="btn btn-brand  m-btn m-btn--custom m-btn--icon d-block text-center mt-3">
                                    <span class="m-auto">
                                        <i class="flaticon-multimedia-2"></i>
                                        <span>Send Message </span>
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
                                                        <label>passenger Name:</label>
                                                        <input disabled="" type="text"
                                                               class="form-control m-input m-input--square"
                                                               value="passenger Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>City:</label>
                                                        <input disabled="" type="text"
                                                               class="form-control m-input m-input--square"
                                                               value="City">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>Email:</label>
                                                        <input disabled="" type="email"
                                                               class="form-control m-input m-input--square"
                                                               value="Email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>Nationality:</label>
                                                        <input disabled="" type="text"
                                                               class="form-control m-input m-input--square"
                                                               value="Nationality">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>Gender:</label>
                                                        <input disabled="" type="text"
                                                               class="form-control m-input m-input--square"
                                                               value="Gender">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>Age:</label>
                                                        <input disabled="" type="text"
                                                               class="form-control m-input m-input--square"
                                                               value="Age">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>Career:</label>
                                                        <input disabled="" type="text"
                                                               class="form-control m-input m-input--square"
                                                               value="Career">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label>Passenger Type:</label>
                                                        <input disabled="" type="text"
                                                               class="form-control m-input m-input--square"
                                                               value="Passenger Type">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group m-form__group mb-4">
                                                        <label class="d-block text-left">Passenger evaluation :</label>
                                                        <a href="#" data-toggle="modal" data-target="#m_modal_2"
                                                           class="d-inline-block text-center no-hover">
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
                                                                            Passport
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
                                                <div id="map" style="width:100%; height: 350px"></div>
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
                        <textarea class="form-control m-input" placeholder="Enter the text of the message"
                                  rows="3"></textarea>
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
<div class="modal fade" id="m_modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Evaluation Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="evaluation-card">
                    <div class="media align-items-center">
                        <img class="mr-3" src="assets/images/user.png" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0">Hamza abo aitah</h5>
                            <p class="m-0">
                                رحلة مكة - الطائف 15.08.2018
                            </p>
                        </div>
                    </div>
                    <div class="border-bottom pt-3"></div>
                    <div class="row align-items-center mt-3">
                        <div class="col">
                            <div class="product-reviews-summary in-comment m-0">
                                <div class="rating-summary">
                                    <div class="rating-result" title="70%">
                                        <span style="width:70%"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <p class="mb-0">
                                17.08.2019
                            </p>
                        </div>
                    </div>
                    <div class="border-bottom pt-3"></div>
                    <p class="mt-3 text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto, at beatae
                        consectetur fuga ipsum maiores obcaecati optio praesentium, qui repellat saepe soluta voluptas?
                        Dolorum exercitationem itaque necessitatibus nisi sequi.
                    </p>
                </div>
                <div class="evaluation-card">
                    <div class="media align-items-center">
                        <img class="mr-3" src="assets/images/user.png" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0">Hamza abo aitah</h5>
                            <p class="m-0">
                                رحلة مكة - الطائف 15.08.2018
                            </p>
                        </div>
                    </div>
                    <div class="border-bottom pt-3"></div>
                    <div class="row align-items-center mt-3">
                        <div class="col">
                            <div class="product-reviews-summary in-comment m-0">
                                <div class="rating-summary">
                                    <div class="rating-result" title="70%">
                                        <span style="width:70%"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <p class="mb-0">
                                17.08.2019
                            </p>
                        </div>
                    </div>
                    <div class="border-bottom pt-3"></div>
                    <p class="mt-3 text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto, at beatae
                        consectetur fuga ipsum maiores obcaecati optio praesentium, qui repellat saepe soluta voluptas?
                        Dolorum exercitationem itaque necessitatibus nisi sequi.
                    </p>
                </div>
                <div class="evaluation-card">
                    <div class="media align-items-center">
                        <img class="mr-3" src="assets/images/user.png" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0">Hamza abo aitah</h5>
                            <p class="m-0">
                                رحلة مكة - الطائف 15.08.2018
                            </p>
                        </div>
                    </div>
                    <div class="border-bottom pt-3"></div>
                    <div class="row align-items-center mt-3">
                        <div class="col">
                            <div class="product-reviews-summary in-comment m-0">
                                <div class="rating-summary">
                                    <div class="rating-result" title="70%">
                                        <span style="width:70%"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <p class="mb-0">
                                17.08.2019
                            </p>
                        </div>
                    </div>
                    <div class="border-bottom pt-3"></div>
                    <p class="mt-3 text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto, at beatae
                        consectetur fuga ipsum maiores obcaecati optio praesentium, qui repellat saepe soluta voluptas?
                        Dolorum exercitationem itaque necessitatibus nisi sequi.
                    </p>
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
<script>

    function initMap() {
        var myLatLng = {lat: -25.363, lng: 131.044};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwQWgqTGypi82vAyP97l2O5Zi_RBiVA5E&callback=initMap">
</script>

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
