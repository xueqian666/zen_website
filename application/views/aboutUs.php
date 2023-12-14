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
    <style>
    .text1 {
        font-family: 'Inter', Helvetica;
        font-weight: 600;
        color: #000000;
        font-size: 17px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
    }

    .text2 {
        font-family: 'Inter', Helvetica;
        font-weight: 500;
        color: #000000;
        font-size: 18px;
        text-align: justify;
        letter-spacing: 0;
        line-height: normal;
        white-space: nowrap;
    }

    .text-blue {
        font-family: 'Inter', Helvetica;
        font-weight: 700;
        color: #0067ff;
        font-size: 60px;
        letter-spacing: 0;
        line-height: normal;
    }
    </style>

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
            white-space: nowrap;">ABOUT US</p>
        </div>
    </div>

    <!-- About section starts -->
    <section class="services section-padding" id="services" style="background-color: #ffffff;">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-md-7">

                    <div class="col-12 col-md-6">
                        <img src="application/views/assets/img_about/rectangle-2.png" class="img-fluid img-area9" />
                    </div>

                    <br />

                </div>

                <div class="col-md-5 d-flex justify-content-center">
                    <div class="section-header pb-5">
                        <div class="text-md-start">
                            <font style="font-size: 30px" class="normal_text">ABOUT US</font><br />
                            <br />
                            <p class="small_text text-start" style="font-size: 15px;">
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less
                                normal distribution of letters, as opposed to using 'Content here, content here', making
                                it look like readable
                                English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                their
                                default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                                their infancy. Various
                                versions have evolved over the years, sometimes by accident, sometimes on purpose
                                (injected humour and
                                the like)
                            </p>
                            <br />
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
                                <div class="about-img rounded-circle overflow-hidden d-flex align-items-center justify-content-center"
                                    style="background-color: #ecf1f9; width: 150px; height: 150px;">
                                    <img src="application/views/assets/img_about/image-20.png"
                                        class="img-fluid img-area" />
                                </div>
                            </div>
                            <br /><br />
                            <div class="row justify-content-center">
                                <font class="text-uppercase text1"><strong>OUR MISSION</strong></font>
                                <br /><br />
                                <p class="small_text text-start" style="font-size: 14px;">It is a long-established fact
                                    that a reader will be distracted by the
                                    readable content of a page when looking at its layout.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-4 text-center">
                    <div class="card text-center border-0 bg-transparent">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="about-img rounded-circle overflow-hidden d-flex align-items-center justify-content-center"
                                    style="background-color: #ecf1f9; width: 150px; height: 150px;">
                                    <img src="application/views/assets/img_about/image-21.png"
                                        class="img-fluid img-area" />
                                </div>
                            </div>
                            <br /><br />
                            <div class="row justify-content-center">
                                <font class="text-uppercase text1">Innovation</strong></font><br /><br />
                                <p class="small_text text-start" style="font-size: 14px;">It is a long-established fact
                                    that a reader will be distracted by the
                                    readable content of a page when looking at its layout.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-4 text-center">
                    <div class="card text-center border-0 bg-transparent">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="about-img rounded-circle overflow-hidden d-flex align-items-center justify-content-center"
                                    style="background-color: #ecf1f9; width: 150px; height: 150px;">
                                    <img src="application/views/assets/img_about/image-22.png"
                                        class="img-fluid img-area" />
                                </div>
                            </div>
                            <br /><br />
                            <div class="row justify-content-center">
                                <font class="text-uppercase text1">Customer Focus</strong></font><br /><br />
                                <p class="small_text text-start" style="font-size: 14px;">It is a long-established fact
                                    that a reader will be distracted by the
                                    readable content of a page when looking at its layout.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section Ends -->

    <!-- Context section starts -->
    <section class="services section-padding" id="services"
        style="background-image: url(application/views/assets/img_about/rectangle-38.png); background-size: cover; background-color: #000000;">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="section-header text-md-start pb-5">
                        <font style="font-family: 'Inter', Helvetica;
                        font-weight: 400;
                        color: #ffffff;
                        font-size: 13px;
                        text-align: justify;
                        letter-spacing: 0;
                        line-height: normal;">It is a long established fact that a reader will be distracted by the
                            readable content of a page when looking at its layout. The point of using Lorem Ipsum is
                            that it has a more-or-less normal distribution of letters, as opposed to using 'Content
                            here<br />

                            It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here<br />

                            It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here</font>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="about-img text-md-start">
                        <img src="application/views/assets/img_about/zenlogo1-2.png" alt="" class="img-fluid" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="card text-white text-center bg-light pb-2 h-100 d-flex flex-column justify-content-center"
                        style="border-radius: 20px 0px 20px 0px; box-shadow: 0px 0px 30px #00ff86;">
                        <div class="card-body">
                            <p class="lead">
                            <h1 class="text-blue">
                                10</h1> <br />
                            <font class="text2">years in the industry</font>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-2">
                    <div class="card text-white text-center bg-light pb-2 h-100 d-flex flex-column justify-content-center"
                        style="border-radius: 20px 0px 20px 0px; box-shadow: 0px 0px 30px #00ff86;">
                        <div class="card-body">
                            <p class="lead">
                            <h1 class="text-blue">
                                80</h1> <br />
                            <font class="text2">Strategic partners</font>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-2">
                    <div class="card text-white text-center bg-light pb-2 h-100 d-flex flex-column justify-content-center"
                        style="border-radius: 20px 0px 20px 0px; box-shadow: 0px 0px 30px #00ff86;">
                        <div class="card-body">
                            <p class="lead">
                            <h1 class="text-blue">
                                50+</h1> <br />
                            <font class="text2">Clients worldwide</font>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div class="card text-white text-center bg-light pb-2 h-100 d-flex flex-column justify-content-center"
                        style="border-radius: 20px 0px 20px 0px; box-shadow: 0px 0px 30px #00ff86;">
                        <div class="card-body">
                            <p class="lead">
                            <h1 class="text-blue">
                                200+</h1> <br />
                            <font class="text2">Successfully launched projects</font>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-2">
                    <div class="card text-white text-center bg-light pb-2 h-100 d-flex flex-column justify-content-center"
                        style="border-radius: 20px 0px 20px 0px; box-shadow: 0px 0px 30px #00ff86;">
                        <div class="card-body">
                            <p class="lead">
                            <h1 class="text-blue">
                                50+</h1> <br />
                            <font class="text2">years in the industry</font>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br />
        </div>
    </section>
    <!-- Context section Ends -->



    <!-- software section starts -->
    <section class="services section-padding" id="services" style="background-color: white;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <font style="font-size: 30px" class="normal_text">TOP SOFTWARE PROVIDERS</font><br />
                        <img class="" src="application/views/assets/img/line-2.svg"><br /><br />
                        <p class="small_text text-center">We are proud to provide services for our clients — they are
                            the best
                            proof of the quality of our work.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card text-center pb-2" style="background-color: #ecf1f9; border-radius: 12px;">
                        <div class="card-body">
                            <div class="about-img">
                                <img src="application/views/assets/img/image-14.png" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <div class="card text-center pb-2" style="background-color: #ecf1f9; border-radius: 12px;">
                        <div class="card-body">
                            <div class="about-img">
                                <img src="application/views/assets/img/image-15.png" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <div class="card text-center pb-2" style="background-color: #ecf1f9;border-radius: 12px;">
                        <div class="card-body">
                            <div class="about-img">
                                <img src="application/views/assets/img/image-16.png" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <div class="card text-center pb-2" style="background-color: #ecf1f9; border-radius: 12px;">
                        <div class="card-body">
                            <div class="about-img">
                                <img src="application/views/assets/img/image-17.png" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <div class="card text-center pb-2" style="background-color: #ecf1f9; border-radius: 12px;">
                        <div class="card-body">
                            <div class="about-img">
                                <img src="application/views/assets/img/image-18.png" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <div class="card text-center pb-2" style="background-color: #ecf1f9; border-radius: 12px;">
                        <div class="card-body">
                            <div class="about-img">
                                <img src="application/views/assets/img/image-19.png" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br />
        </div>
    </section>
    <!-- software section Ends -->

    <!-- Banner section starts -->
    <?php $this->load->view("banner"); ?>
    <!-- Banner section Ends -->

    <!-- footer section starts -->
    <?php $this->load->view("footer"); ?>
    <!-- footer section Ends -->

    <!-- All Js -->
    <script src="application/views/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>

<!--for getting the form download the code from download button-->