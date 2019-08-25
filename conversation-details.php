<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>Rafeeq | Conversation Details</title>
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
                        <h3 class="m-subheader__title ">Conversation Details</h3>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                            <div class="tab-content">
                                <div class="tab-pane active" id="m_user_profile_tab_1">
                                    <form class="m-form m-form--fit m-form--label-align-right">
                                        <div class="m-portlet__body px-4">
                                            <div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
                                                <div class="m-messenger__messages m-scrollable m-scroller ps ps--active-y">
                                                    <div class="m-messenger__wrapper">
                                                        <div class="m-messenger__message m-messenger__message--in">
                                                            <div class="m-messenger__message-pic px-0">
                                                                <img src="assets/app/media/img/users/user4.jpg" alt="">
                                                            </div>
                                                            <div class="m-messenger__message-body">
                                                                <div class="m-messenger__message-arrow"></div>
                                                                <div class="m-messenger__message-content">
                                                                    <div class="m-messenger__message-username">
                                                                        Hamza Abo aitah
                                                                    </div>
                                                                    <div class="m-messenger__message-text">
                                                                        Hi Bob. What time will be the meeting ?
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-messenger__wrapper">
                                                        <div class="m-messenger__message m-messenger__message--out">
                                                            <div class="m-messenger__message-body">
                                                                <div class="m-messenger__message-arrow"></div>
                                                                <div class="m-messenger__message-content">
                                                                    <div class="m-messenger__message-username">
                                                                        Nour Ziada
                                                                    </div>
                                                                    <div class="m-messenger__message-text">
                                                                        Hi Hamza. It's at 2.30PM
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-messenger__message-pic px-0">
                                                                <img src="assets/app/media/img/users/user2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-messenger__wrapper">
                                                        <div class="m-messenger__message m-messenger__message--in">
                                                            <div class="m-messenger__message-pic px-0">
                                                                <img src="assets/app/media/img/users/user4.jpg" alt="">
                                                            </div>
                                                            <div class="m-messenger__message-body">
                                                                <div class="m-messenger__message-arrow"></div>
                                                                <div class="m-messenger__message-content">
                                                                    <div class="m-messenger__message-username">
                                                                        Hamza Abo aitah
                                                                    </div>
                                                                    <div class="m-messenger__message-text">
                                                                        Will the development team be joining ?
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-messenger__wrapper">
                                                        <div class="m-messenger__message m-messenger__message--out">
                                                            <div class="m-messenger__message-body">
                                                                <div class="m-messenger__message-arrow"></div>
                                                                <div class="m-messenger__message-content">
                                                                    <div class="m-messenger__message-text">
                                                                        Yes sure. I invited them as well
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-messenger__message-pic px-0">
                                                                <img src="assets/app/media/img/users/user2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-messenger__datetime">2:30PM</div>
                                                    <div class="m-messenger__wrapper">
                                                        <div class="m-messenger__message m-messenger__message--in">
                                                            <div class="m-messenger__message-pic px-0">
                                                                <img src="assets/app/media/img/users/user4.jpg" alt="">
                                                            </div>
                                                            <div class="m-messenger__message-body">
                                                                <div class="m-messenger__message-arrow"></div>
                                                                <div class="m-messenger__message-content">
                                                                    <div class="m-messenger__message-username">
                                                                        Hamza Abo aitah
                                                                    </div>
                                                                    <div class="m-messenger__message-text">
                                                                        Noted. For the Coca-Cola Mobile App project as
                                                                        well ?
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-messenger__wrapper">
                                                        <div class="m-messenger__message m-messenger__message--out">
                                                            <div class="m-messenger__message-body">
                                                                <div class="m-messenger__message-arrow"></div>
                                                                <div class="m-messenger__message-content">
                                                                    <div class="m-messenger__message-text">
                                                                        Yes, sure.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-messenger__message-pic px-0">
                                                                <img src="assets/app/media/img/users/user2.jpg" alt="">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="m-messenger__wrapper">
                                                        <div class="m-messenger__message m-messenger__message--out">
                                                            <div class="m-messenger__message-body">
                                                                <div class="m-messenger__message-arrow"></div>
                                                                <div class="m-messenger__message-content">
                                                                    <div class="m-messenger__message-text">
                                                                        Please also prepare the quotation for the Loop
                                                                        CRM project as well.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-messenger__message-pic px-0">
                                                                <img src="assets/app/media/img/users/user2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-messenger__datetime">3:15PM</div>
                                                    <div class="m-messenger__wrapper">
                                                        <div class="m-messenger__message m-messenger__message--in">
                                                            <div class="m-messenger__message-pic px-0">
                                                                <img src="assets/app/media/img/users/user4.jpg" alt="">
                                                            </div>
                                                            <div class="m-messenger__message-body">
                                                                <div class="m-messenger__message-arrow"></div>
                                                                <div class="m-messenger__message-content">
                                                                    <div class="m-messenger__message-username">
                                                                        Hamza Abo aitah
                                                                    </div>
                                                                    <div class="m-messenger__message-text">
                                                                        Noted. I will prepare it.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-messenger__wrapper">
                                                        <div class="m-messenger__message m-messenger__message--out">
                                                            <div class="m-messenger__message-body">
                                                                <div class="m-messenger__message-arrow"></div>
                                                                <div class="m-messenger__message-content">
                                                                    <div class="m-messenger__message-text">
                                                                        Thanks Megan. I will see you later.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-messenger__message-pic px-0">
                                                                <img src="assets/app/media/img/users/user2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-messenger__wrapper">
                                                        <div class="m-messenger__message m-messenger__message--in">
                                                            <div class="m-messenger__message-pic px-0">
                                                                <img src="assets/app/media/img//users/user4.jpg" alt="">
                                                            </div>
                                                            <div class="m-messenger__message-body">
                                                                <div class="m-messenger__message-arrow"></div>
                                                                <div class="m-messenger__message-content">
                                                                    <div class="m-messenger__message-username">
                                                                        Hamza Abo aitah
                                                                    </div>
                                                                    <div class="m-messenger__message-text">
                                                                        Sure. See you in the meeting soon.
                                                                    </div>
                                                                </div>
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


<!--begin::Global Theme Bundle -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->


</body>

<!-- end::Body -->
</html>
