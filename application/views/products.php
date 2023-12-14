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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" />

</head>

<body>
    <!-- Navibar -->
    <?php $this->load->view("header"); ?>


    <!-- main background-->
    <div class="position-relative" style="height: 400px; background-image: url('application/views/assets/img_about/rectangle-3.png'); background-size: cover;">
        <!-- <img src="assets/img_about/rectangle-3.png" class="d-block w-100 img-fluid" alt="..."> -->
        <div class="carousel-caption mt-n3 position-absolute top-50  translate-middle-y">
            <p style="font-family: 'Oswald', Helvetica;
            font-weight: 700;
            color: #ffffff;
            font-size: 60px;
            letter-spacing: 0;
            line-height: normal;
            white-space: nowrap;">OUR PRODUCTS & SERVICES</p>
        </div>
    </div>

    <!-- Solutions section starts -->
    <section class="services section-padding" id="services" style="background-color: #ffffff;">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-md-12 col-lg-4 text-center">
                    <div class="card text-center border-0 bg-transparent">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="about-img d-flex align-items-center justify-content-center">
                                    <img src="application/views/assets/img_products/rectangle-2-TVo.png" style="border-radius: 20px;" class="img-fluid img-area8" />
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
                                line-height: normal; "><strong>Web Hosting</strong></font><br /><br />
                                <font style="font: inherit; font-size: 13px; font-weight: 400;
                                color: #000000;" class="text-start">

                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters</font>
                                <div class="d-grid gap-2 d-md-block">
                                    <br /><br />
                                    <a href="products/learnBtn1" class="btn btn-primary border-0" style="border-radius: 40px;
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
                                <div class="about-img d-flex align-items-center justify-content-center">
                                    <img src="application/views/assets/img_products/rectangle-3-oNd.png" style="border-radius: 20px;" class="img-fluid img-area8" />
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
                                line-height: normal; "><strong>License acquisition</strong></font><br /><br />
                                <font style="font: inherit; font-size: 13px; font-weight: 400;
                                color: #000000;" class="text-start">

                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters</font>
                                <div class="d-grid gap-2 d-md-block">
                                    <br /><br />
                                    <a href="solutionBtn/solution_learnBtn1.html" class="btn btn-primary border-0" style="border-radius: 40px;
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
                                <div class="about-img d-flex align-items-center justify-content-center">
                                    <img src="application/views/assets/img_products/rectangle-4.png" style="border-radius: 20px;" class="img-fluid img-area8" />
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
                                line-height: normal; "><strong>Telegram Marketing</strong></font><br /><br />
                                <font style="font: inherit; font-size: 13px; font-weight: 400;
                                color: #000000;" class="text-start">

                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters</font>
                                <div class="d-grid gap-2 d-md-block">
                                    <br /><br />
                                    <a href="solutionBtn/solution_learnBtn1.html" class="btn btn-primary border-0" style="border-radius: 40px;
          background: radial-gradient(50% 50% at 50% 50%, rgb(65, 139, 255) 37.71%, rgb(83, 146, 255) 67.61%, rgb(95, 168, 255) 100%);
          width: 200px; text-decoration: none; display: inline-block;">
                                        Learn More
                                    </a>

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
                                <div class="about-img d-flex align-items-center justify-content-center">
                                    <img src="application/views/assets/img_products/rectangle-32.png" style="border-radius: 20px;" class="img-fluid img-area8" />
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
                                line-height: normal; "><strong>API online integration</strong></font><br /><br />
                                <font style="font: inherit; font-size: 13px; font-weight: 400;
                                color: #000000;" class="text-start">

                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters</font>
                                <div class="d-grid gap-2 d-md-block">
                                    <br /><br />
                                    <a href="solutionBtn/solution_learnBtn1.html" class="btn btn-primary border-0" style="border-radius: 40px;
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
                                <div class="about-img d-flex align-items-center justify-content-center">
                                    <img src="application/views/assets/img_products/rectangle-33.png" style="border-radius: 20px;" class="img-fluid img-area8" />
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
                                line-height: normal; "><strong>Payment Solutions</strong></font><br /><br />
                                <font style="font: inherit; font-size: 13px; font-weight: 400;
                                color: #000000;" class="text-start">

                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters</font>
                                <div class="d-grid gap-2 d-md-block">
                                    <br /><br />
                                    <a href="solutionBtn/solution_learnBtn1.html" class="btn btn-primary border-0" style="border-radius: 40px;
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
                                <div class="about-img d-flex align-items-center justify-content-center">
                                    <img src="application/views/assets/img_products/rectangle-34.png" style="border-radius: 20px; " class="img-fluid img-area8" />
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
                                line-height: normal; "><strong>Online marketing and promotion</strong></font>
                                <br /><br />
                                <font style="font: inherit; font-size: 13px; font-weight: 400;
                                color: #000000;" class="text-start">

                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters</font>
                                <div class="d-grid gap-2 d-md-block">
                                    <br /><br />
                                    <a href="solutionBtn/solution_learnBtn1.html" class="btn btn-primary border-0" style="border-radius: 40px;
          background: radial-gradient(50% 50% at 50% 50%, rgb(65, 139, 255) 37.71%, rgb(83, 146, 255) 67.61%, rgb(95, 168, 255) 100%);
          width: 200px; text-decoration: none; display: inline-block;">
                                        Learn More
                                    </a>

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
                                <div class="about-img d-flex align-items-center justify-content-center">
                                    <img src="application/views/assets/img_products/rectangle-46.png" style="border-radius: 20px;" class="img-fluid img-area8" />
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
                                line-height: normal; "><strong>Online Game Development</strong></font><br /><br />
                                <font style="font: inherit; font-size: 13px; font-weight: 400;
                                color: #000000;" class="text-start">

                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters</font>
                                <div class="d-grid gap-2 d-md-block">
                                    <br /><br />
                                    <a href="solutionBtn/solution_learnBtn1.html" class="btn btn-primary border-0" style="border-radius: 40px;
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
                                <div class="about-img d-flex align-items-center justify-content-center">
                                    <img src="application/views/assets/img_products/rectangle-48.png" style="border-radius: 20px;" class="img-fluid img-area8" />
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
                                line-height: normal; "><strong>Virtual Sports Software</strong></font><br /><br />
                                <font style="font: inherit; font-size: 13px; font-weight: 400;
                                color: #000000;" class="text-start">

                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters</font>
                                <div class="d-grid gap-2 d-md-block">
                                    <br /><br />
                                    <a href="solutionBtn/solution_learnBtn1.html" class="btn btn-primary border-0" style="border-radius: 40px;
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
                                <div class="about-img d-flex align-items-center justify-content-center">
                                    <img src="application/views/assets/img_products/rectangle-50.png" style="border-radius: 20px;" class="img-fluid img-area8" />
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
                                line-height: normal; "><strong>WhatsApp Marketing</strong></font><br /><br />
                                <font style="font: inherit; font-size: 13px; font-weight: 400;
                                color: #000000;" class="text-start">

                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters</font>
                                <div class="d-grid gap-2 d-md-block">
                                    <br /><br />
                                    <a href="solutionBtn/solution_learnBtn1.html" class="btn btn-primary border-0" style="border-radius: 40px;
          background: radial-gradient(50% 50% at 50% 50%, rgb(65, 139, 255) 37.71%, rgb(83, 146, 255) 67.61%, rgb(95, 168, 255) 100%);
          width: 200px; text-decoration: none; display: inline-block;">
                                        Learn More
                                    </a>

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
                                <div class="about-img d-flex align-items-center justify-content-center">
                                    <img src="application/views/assets/img_products/rectangle-47.png" style="border-radius: 20px;" class="img-fluid img-area8" />
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
                                line-height: normal; "><strong>Sportsbook Software</strong></font><br /><br />
                                <font style="font: inherit; font-size: 13px; font-weight: 400;
                                color: #000000;" class="text-start">

                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters</font>
                                <div class="d-grid gap-2 d-md-block">
                                    <br /><br />
                                    <a href="solutionBtn/solution_learnBtn1.html" class="btn btn-primary border-0" style="border-radius: 40px;
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
                                <div class="about-img d-flex align-items-center justify-content-center">
                                    <img src="application/views/assets/img_products/rectangle-49.png" style="border-radius: 20px;" class="img-fluid img-area8" />
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
                                line-height: normal; "><strong>Partner</strong></font><br /><br />
                                <font style="font: inherit; font-size: 13px; font-weight: 400;
                                color: #000000;" class="text-start">

                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters</font>
                                <div class="d-grid gap-2 d-md-block">
                                    <br /><br />
                                    <a href="solutionBtn/solution_learnBtn1.html" class="btn btn-primary border-0" style="border-radius: 40px;
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
                                <div class="about-img d-flex align-items-center justify-content-center">
                                    <img src="application/views/assets/img_products/rectangle-51.png" style="border-radius: 20px;" class="img-fluid img-area8" />
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
                                line-height: normal; "><strong>Software Development</strong></font><br /><br />
                                <font style="font: inherit; font-size: 13px; font-weight: 400;
                                color: #000000;" class="text-start">

                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters</font>
                                <div class="d-grid gap-2 d-md-block">
                                    <br /><br />
                                    <a href="solutionBtn/solution_learnBtn1.html" class="btn btn-primary border-0" style="border-radius: 40px;
          background: radial-gradient(50% 50% at 50% 50%, rgb(65, 139, 255) 37.71%, rgb(83, 146, 255) 67.61%, rgb(95, 168, 255) 100%);
          width: 200px; text-decoration: none; display: inline-block;">
                                        Learn More
                                    </a>

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