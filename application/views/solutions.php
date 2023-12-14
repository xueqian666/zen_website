<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 Responsive Landing Page Design</title>

    <!-- All CSS -->
    <link href="application/views/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="application/views/css/style.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" />

</head>

<body>
    <!-- Navibar -->
    <?php $this->load->view("header"); ?>


    <!-- main background-->
    <div class="position-relative"
        style="height: 400px; background-image: url('application/views/assets/img_about/rectangle-3.png'); background-size: cover;">
        <!-- <img src="assets/img_about/rectangle-3.png" class="d-block w-100 img-fluid" alt="..."> -->
        <div class="carousel-caption mt-n3 position-absolute top-50 start-50 translate-middle">
            <p style="font-family: 'Oswald', Helvetica;
            font-weight: 700;
            color: #ffffff;
            font-size: 60px;
            letter-spacing: 0;
            line-height: normal;
            white-space: nowrap;">SOLUTIONS</p>
        </div>
    </div>

    <!-- Solutions section starts -->
    <section class="services section-padding" id="services" style="background-color: #ffffff;">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-md-12">
                    <div class="section-header pb-5">
                        <font style="font-family: 'Oswald', Helvetica;
                        font-weight: 600;
                        color: #000000;
                        font-size: 30px;
                        letter-spacing: 0;
                        line-height: normal;">Soft Platform Solutions Compared</font> <br /><br />
                        <font style="font-family: 'Inter', Helvetica;
                        font-weight: 400;
                        color: #000000;
                        font-size: 15px;
                        letter-spacing: 0;">Gaming offers four types of platforms. Also, you can order a
                            Bonus Loyalty System, as an additional feature to your company</font>
                    </div>
                    <br />

                </div>
            </div>
            <br /><br />
            <div class="row ">
                <div class="col-12 col-md-12 col-lg-4 text-center">
                    <div class="card text-center border-0 bg-transparent">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="about-img d-flex align-items-center justify-content-center"
                                    style="background-image: url(application/views/assets/img_solutions/rectangle-2.png);border-radius: 20px; height:200px">
                                    <img src="application/views/assets/img_solutions/image-26.png"
                                        class="img-fluid img-area5" />
                                </div>
                            </div>
                            <br /><br />
                            <div class="row justify-content-center">
                                <font style="font-family: 'Inter', Helvetica;
                                font-weight: 600;
                                color: #000000;
                                font-size: 17px;
                                text-align: center;
                                letter-spacing: 0;
                                line-height: normal; "><strong>Lorem Ispum</strong></font><br /><br />
                                <font style="font: inherit; font-size: 13px; font-weight: 400;
                                color: #000000;">It is a long established fact that a reader will be distracted by the
                                    content of a page when looking at its layout. The point of using Lorem
                                    is that it has a more-or-less normal distribution of letters, as opposed to</font>
                                <div class="d-grid gap-2 d-md-block">
                                    <br /><br />
                                    <a href="solutions/learnBtn1" class="btn btn-primary border-0" style="border-radius: 40px;
          background: radial-gradient(50% 50% at 50% 50%, rgb(65, 139, 255) 37.71%, rgb(83, 146, 255) 67.61%, rgb(95, 168, 255) 100%);
          width: 200px; text-decoration: none; display: inline-block;">
                                        Learn More
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 text-center">
                    <div class="card text-center border-0 bg-transparent">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="about-img d-flex align-items-center justify-content-center"
                                    style="background-image: url(application/views/assets/img_solutions/rectangle-2.png);border-radius: 20px; height:200px">
                                    <img src="application/views/assets/img_solutions/image-27.png"
                                        class="img-fluid img-area5" />
                                </div>
                            </div>
                            <br /><br />
                            <div class="row justify-content-center">
                                <font style="font-family: 'Inter', Helvetica;
                                font-weight: 600;
                                color: #000000;
                                font-size: 17px;
                                text-align: center;
                                letter-spacing: 0;
                                line-height: normal; "><strong>Lorem Ispum</strong></font><br /><br />
                                <font style="font: inherit; font-size: 13px; font-weight: 400;
                                color: #000000;">It is a long established fact that a reader will be distracted by the
                                    content of a page when looking at its layout. The point of using Lorem
                                    is that it has a more-or-less normal distribution of letters, as opposed to</font>
                                <div class="d-grid gap-2 d-md-block">
                                    <br /><br />
                                    <button class="btn btn-primary border-0" type="button" style="border-radius: 40px;
                                    background: radial-gradient( 50% 50% at 50% 50%, rgb(65, 139, 255) 37.71%, rgb(83, 146, 255) 67.61%, rgb(95, 168, 255) 100% );
                                    width: 200px;">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 text-center">
                    <div class="card text-center border-0 bg-transparent">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="about-img d-flex align-items-center justify-content-center"
                                    style="background-image: url(application/views/assets/img_solutions/rectangle-2.png);border-radius: 20px; height:200px">
                                    <img src="application/views/assets/img_solutions/image-30.png"
                                        class="img-fluid img-area5" />
                                </div>
                            </div>
                            <br /><br />
                            <div class="row justify-content-center">
                                <font style="font-family: 'Inter', Helvetica;
                                font-weight: 600;
                                color: #000000;
                                font-size: 17px;
                                text-align: center;
                                letter-spacing: 0;
                                line-height: normal; "><strong>Lorem Ispum</strong></font><br /><br />
                                <font style="font: inherit; font-size: 13px; font-weight: 400;
                                color: #000000;">It is a long established fact that a reader will be distracted by the
                                    content of a page when looking at its layout. The point of using Lorem
                                    is that it has a more-or-less normal distribution of letters, as opposed to</font>
                                <div class="d-grid gap-2 d-md-block">
                                    <br /><br />
                                    <button class="btn btn-primary border-0" type="button" style="border-radius: 40px;
                                    background: radial-gradient( 50% 50% at 50% 50%, rgb(65, 139, 255) 37.71%, rgb(83, 146, 255) 67.61%, rgb(95, 168, 255) 100% );
                                    width: 200px;">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br /><br />
            <div class="row ">
                <div class="col-12 col-md-12 col-lg-4 text-center">
                    <div class="card text-center border-0 bg-transparent">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="about-img d-flex align-items-center justify-content-center"
                                    style="background-image: url(application/views/assets/img_solutions/rectangle-2.png);border-radius: 20px; height:200px">
                                    <img src="application/views/assets/img_solutions/image-31.png"
                                        class="img-fluid img-area6" />
                                </div>
                            </div>
                            <br /><br />
                            <div class="row justify-content-center">
                                <font style="font-family: 'Inter', Helvetica;
                                font-weight: 600;
                                color: #000000;
                                font-size: 17px;
                                text-align: center;
                                letter-spacing: 0;
                                line-height: normal; "><strong>Lorem Ispum</strong></font><br /><br />
                                <font style="font: inherit; font-size: 13px; font-weight: 400;
                                color: #000000;">It is a long established fact that a reader will be distracted by the
                                    content of a page when looking at its layout. The point of using Lorem
                                    is that it has a more-or-less normal distribution of letters, as opposed to</font>
                                <div class="d-grid gap-2 d-md-block">
                                    <br /><br />
                                    <button class="btn btn-primary border-0" type="button" style="border-radius: 40px;
                                    background: radial-gradient( 50% 50% at 50% 50%, rgb(65, 139, 255) 37.71%, rgb(83, 146, 255) 67.61%, rgb(95, 168, 255) 100% );
                                    width: 200px;">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 text-center">
                    <div class="card text-center border-0 bg-transparent">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="about-img d-flex align-items-center justify-content-center"
                                    style="background-image: url(application/views/assets/img_solutions/rectangle-2.png);border-radius: 20px; height:200px">
                                    <img src="application/views/assets/img_solutions/image-28.png"
                                        class="img-fluid img-area6" />
                                </div>
                            </div>
                            <br /><br />
                            <div class="row justify-content-center">
                                <font style="font-family: 'Inter', Helvetica;
                                font-weight: 600;
                                color: #000000;
                                font-size: 17px;
                                text-align: center;
                                letter-spacing: 0;
                                line-height: normal; "><strong>Lorem Ispum</strong></font><br /><br />
                                <font style="font: inherit; font-size: 13px; font-weight: 400;
                                color: #000000;">It is a long established fact that a reader will be distracted by the
                                    content of a page when looking at its layout. The point of using Lorem
                                    is that it has a more-or-less normal distribution of letters, as opposed to</font>
                                <div class="d-grid gap-2 d-md-block">
                                    <br /><br />
                                    <button class="btn btn-primary border-0" type="button" style="border-radius: 40px;
                                    background: radial-gradient( 50% 50% at 50% 50%, rgb(65, 139, 255) 37.71%, rgb(83, 146, 255) 67.61%, rgb(95, 168, 255) 100% );
                                    width: 200px;">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 text-center">
                    <div class="card text-center border-0 bg-transparent">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="about-img d-flex align-items-center justify-content-center"
                                    style="background-image: url(application/views/assets/img_solutions/rectangle-2.png);border-radius: 20px; height:200px">
                                    <img src="application/views/assets/img_solutions/image-29.png"
                                        class="img-fluid img-area6" />
                                </div>
                            </div>
                            <br /><br />
                            <div class="row justify-content-center">
                                <font style="font-family: 'Inter', Helvetica;
                                font-weight: 600;
                                color: #000000;
                                font-size: 17px;
                                text-align: center;
                                letter-spacing: 0;
                                line-height: normal; "><strong>Lorem Ispum</strong></font><br /><br />
                                <font style="font: inherit; font-size: 13px; font-weight: 400;
                                color: #000000;">It is a long established fact that a reader will be distracted by the
                                    content of a page when looking at its layout. The point of using Lorem
                                    is that it has a more-or-less normal distribution of letters, as opposed to</font>
                                <div class="d-grid gap-2 d-md-block">
                                    <br /><br />
                                    <button class="btn btn-primary border-0" type="button" style="border-radius: 40px;
                                    background: radial-gradient( 50% 50% at 50% 50%, rgb(65, 139, 255) 37.71%, rgb(83, 146, 255) 67.61%, rgb(95, 168, 255) 100% );
                                    width: 200px;">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Solutions section Ends -->


    <!-- Banner section starts -->
    <?php $this->load->view("banner"); ?>
    <!-- Banner section Ends -->

    <!-- footer section starts -->
    <?php $this->load->view("footer"); ?>
    <!-- footer section Ends -->

    <!-- All Js -->
    <script src="application/views/js/bootstrap.bundle.min.js"></script>
    <script src="application/views/js/script.js"></script>
</body>

</html>

<!--for getting the form download the code from download button-->