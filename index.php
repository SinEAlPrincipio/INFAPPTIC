<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta name="description" content="">
    <title>Formato</title>

    <!-- STYLESHEETS -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--- -->

    <!-- Fonts [ OPTIONAL ] -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS [ REQUIRED ] <link rel="stylesheet" href="./assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

    <!-- Nifty CSS [ REQUIRED ] -->
    <link rel="stylesheet" href="./assets/css/nifty.min.css">

    <!-- Nifty Demo Icons [ OPTIONAL ] -->
    <link rel="stylesheet" href="./assets/css/demo-purpose/demo-icons.min.css">

    <!-- Demo purpose CSS [ DEMO ] -->
    <link rel="stylesheet" href="./assets/css/demo-purpose/demo-settings.min.css">

   
</head>

<body class="">

    <!-- PAGE CONTAINER -->
    
    <div id="root" class="root front-container">

        <!-- CONTENTS -->
         
        <section id="content" class="content">
            <div class="content__boxed w-100 min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <div class="content__wrap">

                    <!-- Login card -->
                    <div class="card shadow-lg">
                        <div class="card-body">

                            <div class="text-center">
                                <h1 class="h3">Control de Acceso</h1>
                                <p>Ingrese su login</p>
                            </div>

                            <form class="mt-4" action="v4cc3ss2022.php">

                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Username" name="fusuario" id="fusuario" autofocus required>
                                </div>

                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Password"  name="fclave" id="fclave" required>
                                </div>

                                <div class="d-grid mt-5">
                                    <button class="btn btn-primary btn-lg" type="submit">Acceder</button>
                                </div>
                            </form>

                            <div class=" mt-4" align="center">
                                 <h6 class="m-0">Desarrollado por</h6>
                            </div>

                            <div class="  border-top pt-3 mt-3" align="center">
                                <h5 class="m-0">..............</h5>

                                 
                            </div>

                        </div>
                    </div>
                    <!-- END : Login card -->

                    <!-- Show the background images container -->
                    <div class="d-flex align-items-center justify-content-center gap-3 mt-4">
                        <button class="btn btn-danger hstack gap-2" data-bs-toggle="offcanvas" data-bs-target="#_dm-boxedBgContent">
                            <i class=" demo-psi-photos fs-4"></i>
                            <span class="vr"></span>
                            Background image
                        </button>
                        <button class="btn btn-light" onclick="window.history.back()">Back</button>
                    </div>
                    <!-- END : Show the background images container -->

                </div>
            </div>
        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - CONTENTS -->
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - PAGE CONTAINER -->

    <!-- BOXED LAYOUT : BACKGROUND IMAGES CONTENT [ DEMO ] -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div id="_dm-boxedBgContent" class="_dm-boxbg offcanvas offcanvas-bottom" data-bs-backdrop="false" data-bs-scroll="true" tabindex="-1">
        <div class="offcanvas-body p-4">

            <!-- Content Header -->
            <div class="offcanvas-header border-bottom p-0 pb-3">
                <div>
                    <h4 class="offcanvas-title">Background Images</h4>
                    <span class="text-muted">Add an image to replace the solid background color</span>
                </div>
                <button type="button" class="btn-close btn-lg text-reset shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <!-- End - Content header -->

            <!-- Collection Of Images -->
            <div id="_dm-boxedBgContainer" class="row mt-3">

                <!-- Blurred Background Images -->
                <div class="col-lg-4">
                    <h5 class="mb-4">Blurred</h5>
                    <div class="_dm-boxbg__img-container d-flex flex-wrap">
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/1.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/2.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/3.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/4.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/5.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/6.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/7.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/8.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/9.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/10.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/11.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/12.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/13.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/14.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/15.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/16.jpg" alt="Background Image" loading="lazy">
                        </a>
                    </div>
                </div>
                <!-- End - Blurred Background Images -->

                <!-- Polygon Background Images -->
                <div class="col-lg-4">
                    <h5 class="mb-4">Polygon &amp; Geometric</h5>
                    <div class="_dm-boxbg__img-container d-flex flex-wrap">
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/1.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/2.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/3.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/4.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/5.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/6.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/7.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/8.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/9.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/10.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/11.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/12.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/13.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/14.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/15.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/16.jpg" alt="Background Image" loading="lazy">
                        </a>
                    </div>
                </div>
                <!-- End - Polygon Background Images -->

                <!-- Abstract Background Images -->
                <div class="col-lg-4">
                    <h5 class="mb-4">Abstract</h5>
                    <div class="_dm-boxbg__img-container d-flex flex-wrap">
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/1.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/2.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/3.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/4.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/5.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/6.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/7.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/8.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/9.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/10.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/11.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/12.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/13.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/14.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/15.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/16.jpg" alt="Background Image" loading="lazy">
                        </a>
                    </div>
                </div>
                <!-- End - Abstract Background Images -->

            </div>
            <!-- End - Collection Of Images -->

        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - BOXED LAYOUT : BACKGROUND IMAGES CONTENT [ DEMO ] -->
    <!-- JAVASCRIPTS -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <!-- Popper JS [ OPTIONAL ] -->
    <script src="./assets/vendors/popperjs/popper.min.js" defer></script>

    <!-- Bootstrap JS [ OPTIONAL ] -->
    <script src="./assets/vendors/bootstrap/bootstrap.min.js" defer></script>

    <!-- Nifty JS [ OPTIONAL ] -->
    <script src="./assets/js/nifty.js" defer></script>

    <!-- Nifty Settings [ DEMO ] -->
    <script src="./assets/js/demo-purpose-only.js" defer></script>

</body>

</html>
