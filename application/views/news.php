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
            white-space: nowrap;">NEWS</p>
        </div>
    </div>

    <!-- About section starts -->
    <section class="services section-padding" id="services" style="background-color: #ffffff;">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-md-12 col-lg-4 text-center">
                    <div class="card text-center border-0 bg-transparent">
                        <img src="application/views/assets/img_news/Rectangle 43.png" class="card-img-top" alt="...">
                        <div class="card-body" style="background-color: #f6f6f6;
                        border-radius: 0rem 0rem 2rem 2rem;">
                            <div class="row">
                                <button class="btn-outline-primary" type="button"
                                    style="border-radius: 20px; width: 30%; background-color: #ecf1f9;">
                                    <font
                                        style="color: #000000; font-size: 12px; text-align: center; font-family: Inter, 'Source Sans Pro'; ">
                                        Company News</font>
                                </button>
                            </div>
                            <br /><br />
                            <div class="row">
                                <font style="font-size: 17px;
                                            font-weight: 700;
                                            line-height: 1.2125;
                                            color: #000000;
                                            font-family: Inter, 'Source Sans Pro';" class="text-start">
                                    <strong> Lorem Ipsum is simply dummy text of the printing and
                                        typesettingindustry.</strong>
                                </font><br /><br />
                            </div>
                            <br /><br />
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 text-start">
                                    <font style="font-family: Inter, 'Source Sans Pro';">20 September 2023</font>
                                </div>
                                <div class="col-12 col-md-12 col-lg-6">
                                    <div class="card-read-more" style="background: radial-gradient(100% 100% at 51.35% 0%, #93e7ff 0%, #418bff 37.71%, #5392ff 67.61%, #5fa8ff 100%);
                                    border-radius: 2rem 0 2rem 0;">
                                        <a href="news/readBtn1" class="btn btn-link btn-block text-decoration-none">
                                            <font style="color: #ffffff;">Read More</font>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 text-center">
                    <div class="card text-center border-0 bg-transparent">
                        <img src="application/views/assets/img_news/Group 31.png" class="card-img-top" alt="...">
                        <div class="card-body" style="background-color: #f6f6f6;
                        border-radius: 0rem 0rem 2rem 2rem;">
                            <div class="row">
                                <button class="btn-outline-primary" type="button"
                                    style="border-radius: 20px; width: 30%; background-color: #ecf1f9;">
                                    <font
                                        style="color: #000000; font-size: 12px; text-align: center; font-family: Inter, 'Source Sans Pro'; ">
                                        Company News</font>
                                </button>
                            </div>
                            <br /><br />
                            <div class="row">
                                <font style="font-size: 17px;
                                            font-weight: 700;
                                            line-height: 1.2125;
                                            color: #000000;
                                            font-family: Inter, 'Source Sans Pro';" class="text-start">
                                    <strong> Lorem Ipsum is simply dummy text of the printing and
                                        typesettingindustry.</strong>
                                </font><br /><br />
                            </div>
                            <br /><br />
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 text-start">
                                    <font style="font-family: Inter, 'Source Sans Pro';">20 September 2023</font>
                                </div>
                                <div class="col-12 col-md-12 col-lg-6">
                                    <div class="card-read-more" style="background: radial-gradient(100% 100% at 51.35% 0%, #93e7ff 0%, #418bff 37.71%, #5392ff 67.61%, #5fa8ff 100%);
                                    border-radius: 2rem 0 2rem 0;">
                                        <a href="#" class="btn btn-link btn-block text-decoration-none">
                                            <font style="color: #ffffff;">Read More</font>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 text-center">
                    <div class="card text-center border-0 bg-transparent">
                        <img src="application/views/assets/img_news/Group 32.png" class="card-img-top" alt="...">
                        <div class="card-body" style="background-color: #f6f6f6;
                        border-radius: 0rem 0rem 2rem 2rem;">
                            <div class="row">
                                <button class="btn btn-outline-primary" type="button"
                                    style="border-radius: 20px; width: 30%; background-color: #ecf1f9;">
                                    <font
                                        style="color: #000000; font-size: 12px; text-align: center; font-family: Inter, 'Source Sans Pro'; ">
                                        Company News</font>
                                </button>
                            </div>
                            <br /><br />
                            <div class="row">
                                <font style="font-size: 17px;
                                            font-weight: 700;
                                            line-height: 1.2125;
                                            color: #000000;
                                            font-family: Inter, 'Source Sans Pro';" class="text-start">
                                    <strong> Lorem Ipsum is simply dummy text of the printing and
                                        typesettingindustry.</strong>
                                </font><br /><br />
                            </div>
                            <br /><br />
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 text-start">
                                    <font style="font-family: Inter, 'Source Sans Pro';">20 September 2023</font>
                                </div>
                                <div class="col-12 col-md-12 col-lg-6">
                                    <div class="card-read-more" style="background: radial-gradient(100% 100% at 51.35% 0%, #93e7ff 0%, #418bff 37.71%, #5392ff 67.61%, #5fa8ff 100%);
                                    border-radius: 2rem 0 2rem 0;">
                                        <a href="#" class="btn btn-link btn-block text-decoration-none">
                                            <font style="color: #ffffff;">Read More</font>
                                        </a>
                                    </div>
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
                        <img src="application/views/assets/img_news/Group 33.png" class="card-img-top" alt="...">
                        <div class="card-body" style="background-color: #f6f6f6;
                        border-radius: 0rem 0rem 2rem 2rem;">
                            <div class="row">
                                <button class="btn-outline-primary" type="button"
                                    style="border-radius: 20px; width: 30%; background-color: #ecf1f9;">
                                    <font
                                        style="color: #000000; font-size: 12px; text-align: center; font-family: Inter, 'Source Sans Pro'; ">
                                        Company News</font>
                                </button>
                            </div>
                            <br /><br />
                            <div class="row">
                                <font style="font-size: 17px;
                                            font-weight: 700;
                                            line-height: 1.2125;
                                            color: #000000;
                                            font-family: Inter, 'Source Sans Pro';" class="text-start">
                                    <strong> Lorem Ipsum is simply dummy text of the printing and
                                        typesettingindustry.</strong>
                                </font><br /><br />
                            </div>
                            <br /><br />
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 text-start">
                                    <font style="font-family: Inter, 'Source Sans Pro';">20 September 2023</font>
                                </div>
                                <div class="col-12 col-md-12 col-lg-6">
                                    <div class="card-read-more" style="background: radial-gradient(100% 100% at 51.35% 0%, #93e7ff 0%, #418bff 37.71%, #5392ff 67.61%, #5fa8ff 100%);
                                    border-radius: 2rem 0 2rem 0;">
                                        <a href="#" class="btn btn-link btn-block text-decoration-none">
                                            <font style="color: #ffffff;">Read More</font>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 text-center">
                    <div class="card text-center border-0 bg-transparent">
                        <img src="application/views/assets/img_news/Group 34.png" class="card-img-top" alt="...">
                        <div class="card-body" style="background-color: #f6f6f6;
                        border-radius: 0rem 0rem 2rem 2rem;">
                            <div class="row">
                                <button class="btn-outline-primary" type="button"
                                    style="border-radius: 20px; width: 30%; background-color: #ecf1f9;">
                                    <font
                                        style="color: #000000; font-size: 12px; text-align: center; font-family: Inter, 'Source Sans Pro'; ">
                                        Company News</font>
                                </button>
                            </div>
                            <br /><br />
                            <div class="row">
                                <font style="font-size: 17px;
                                            font-weight: 700;
                                            line-height: 1.2125;
                                            color: #000000;
                                            font-family: Inter, 'Source Sans Pro';" class="text-start">
                                    <strong> Lorem Ipsum is simply dummy text of the printing and
                                        typesettingindustry.</strong>
                                </font><br /><br />
                            </div>
                            <br /><br />
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 text-start">
                                    <font style="font-family: Inter, 'Source Sans Pro';">20 September 2023</font>
                                </div>
                                <div class="col-12 col-md-12 col-lg-6">
                                    <div class="card-read-more" style="background: radial-gradient(100% 100% at 51.35% 0%, #93e7ff 0%, #418bff 37.71%, #5392ff 67.61%, #5fa8ff 100%);
                                    border-radius: 2rem 0 2rem 0;">
                                        <a href="#" class="btn btn-link btn-block text-decoration-none">
                                            <font style="color: #ffffff;">Read More</font>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 text-center">
                    <div class="card text-center border-0 bg-transparent">
                        <img src="application/views/assets/img_news/Group 38.png" class="card-img-top" alt="...">
                        <div class="card-body" style="background-color: #f6f6f6;
                        border-radius: 0rem 0rem 2rem 2rem;">
                            <div class="row">
                                <button class="btn-outline-primary" type="button"
                                    style="border-radius: 20px; width: 30%; background-color: #ecf1f9;">
                                    <font
                                        style="color: #000000; font-size: 12px; text-align: center; font-family: Inter, 'Source Sans Pro'; ">
                                        Company News</font>
                                </button>
                            </div>
                            <br /><br />
                            <div class="row">
                                <font style="font-size: 17px;
                                            font-weight: 700;
                                            line-height: 1.2125;
                                            color: #000000;
                                            font-family: Inter, 'Source Sans Pro';" class="text-start">
                                    <strong> Lorem Ipsum is simply dummy text of the printing and
                                        typesettingindustry.</strong>
                                </font><br /><br />
                            </div>
                            <br /><br />
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 text-start">
                                    <font style="font-family: Inter, 'Source Sans Pro';">20 September 2023</font>
                                </div>
                                <div class="col-12 col-md-12 col-lg-6">
                                    <div class="card-read-more" style="background: radial-gradient(100% 100% at 51.35% 0%, #93e7ff 0%, #418bff 37.71%, #5392ff 67.61%, #5fa8ff 100%);
                                    border-radius: 2rem 0 2rem 0;">
                                        <a href="#" class="btn btn-link btn-block text-decoration-none">
                                            <font style="color: #ffffff;">Read More</font>
                                        </a>
                                    </div>
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
                        <img src="application/views/assets/img_news/Group 35.png" class="card-img-top" alt="...">
                        <div class="card-body" style="background-color: #f6f6f6;
                        border-radius: 0rem 0rem 2rem 2rem;">
                            <div class="row">
                                <button class="btn-outline-primary" type="button"
                                    style="border-radius: 20px; width: 30%; background-color: #ecf1f9;">
                                    <font
                                        style="color: #000000; font-size: 12px; text-align: center; font-family: Inter, 'Source Sans Pro'; ">
                                        Company News</font>
                                </button>
                            </div>
                            <br /><br />
                            <div class="row">
                                <font style="font-size: 17px;
                                            font-weight: 700;
                                            line-height: 1.2125;
                                            color: #000000;
                                            font-family: Inter, 'Source Sans Pro';" class="text-start">
                                    <strong> Lorem Ipsum is simply dummy text of the printing and
                                        typesettingindustry.</strong>
                                </font><br /><br />
                            </div>
                            <br /><br />
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 text-start">
                                    <font style="font-family: Inter, 'Source Sans Pro';">20 September 2023</font>
                                </div>
                                <div class="col-12 col-md-12 col-lg-6">
                                    <div class="card-read-more" style="background: radial-gradient(100% 100% at 51.35% 0%, #93e7ff 0%, #418bff 37.71%, #5392ff 67.61%, #5fa8ff 100%);
                                    border-radius: 2rem 0 2rem 0;">
                                        <a href="#" class="btn btn-link btn-block text-decoration-none">
                                            <font style="color: #ffffff;">Read More</font>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 text-center">
                    <div class="card text-center border-0 bg-transparent">
                        <img src="application/views/assets/img_news/Group 31.png" class="card-img-top" alt="...">
                        <div class="card-body" style="background-color: #f6f6f6;
                        border-radius: 0rem 0rem 2rem 2rem;">
                            <div class="row">
                                <button class="btn-outline-primary" type="button"
                                    style="border-radius: 20px; width: 30%; background-color: #ecf1f9;">
                                    <font
                                        style="color: #000000; font-size: 12px; text-align: center; font-family: Inter, 'Source Sans Pro'; ">
                                        Company News</font>
                                </button>
                            </div>
                            <br /><br />
                            <div class="row">
                                <font style="font-size: 17px;
                                            font-weight: 700;
                                            line-height: 1.2125;
                                            color: #000000;
                                            font-family: Inter, 'Source Sans Pro';" class="text-start">
                                    <strong> Lorem Ipsum is simply dummy text of the printing and
                                        typesettingindustry.</strong>
                                </font><br /><br />
                            </div>
                            <br /><br />
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 text-start">
                                    <font style="font-family: Inter, 'Source Sans Pro';">20 September 2023</font>
                                </div>
                                <div class="col-12 col-md-12 col-lg-6">
                                    <div class="card-read-more" style="background: radial-gradient(100% 100% at 51.35% 0%, #93e7ff 0%, #418bff 37.71%, #5392ff 67.61%, #5fa8ff 100%);
                                    border-radius: 2rem 0 2rem 0;">
                                        <a href="#" class="btn btn-link btn-block text-decoration-none">
                                            <font style="color: #ffffff;">Read More</font>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 text-center">
                    <div class="card text-center border-0 bg-transparent">
                        <img src="application/views/assets/img_news/Group 37.png" class="card-img-top" alt="...">
                        <div class="card-body" style="background-color: #f6f6f6;
                        border-radius: 0rem 0rem 2rem 2rem;">
                            <div class="row">
                                <button class="btn-outline-primary" type="button"
                                    style="border-radius: 20px; width: 30%; background-color: #ecf1f9;">
                                    <font
                                        style="color: #000000; font-size: 12px; text-align: center; font-family: Inter, 'Source Sans Pro'; ">
                                        Company News</font>
                                </button>
                            </div>
                            <br /><br />
                            <div class="row">
                                <font style="font-size: 17px;
                                            font-weight: 700;
                                            line-height: 1.2125;
                                            color: #000000;
                                            font-family: Inter, 'Source Sans Pro';" class="text-start">
                                    <strong> Lorem Ipsum is simply dummy text of the printing and
                                        typesettingindustry.</strong>
                                </font><br /><br />
                            </div>
                            <br /><br />
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 text-start">
                                    <font style="font-family: Inter, 'Source Sans Pro';">20 September 2023</font>
                                </div>
                                <div class="col-12 col-md-12 col-lg-6">
                                    <div class="card-read-more" style="background: radial-gradient(100% 100% at 51.35% 0%, #93e7ff 0%, #418bff 37.71%, #5392ff 67.61%, #5fa8ff 100%);
                                    border-radius: 2rem 0 2rem 0;">
                                        <a href="#" class="btn btn-link btn-block text-decoration-none">
                                            <font style="color: #ffffff;">Read More</font>
                                        </a>
                                    </div>
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
                        <img src="application/views/assets/img_news/Group 39.png" class="card-img-top" alt="...">
                        <div class="card-body" style="background-color: #f6f6f6;
                        border-radius: 0rem 0rem 2rem 2rem;">
                            <div class="row">
                                <button class="btn-outline-primary" type="button"
                                    style="border-radius: 20px; width: 30%; background-color: #ecf1f9;">
                                    <font
                                        style="color: #000000; font-size: 12px; text-align: center; font-family: Inter, 'Source Sans Pro'; ">
                                        Company News</font>
                                </button>
                            </div>
                            <br /><br />
                            <div class="row">
                                <font style="font-size: 17px;
                                            font-weight: 700;
                                            line-height: 1.2125;
                                            color: #000000;
                                            font-family: Inter, 'Source Sans Pro';" class="text-start">
                                    <strong> Lorem Ipsum is simply dummy text of the printing and
                                        typesettingindustry.</strong>
                                </font><br /><br />
                            </div>
                            <br /><br />
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 text-start">
                                    <font style="font-family: Inter, 'Source Sans Pro';">20 September 2023</font>
                                </div>
                                <div class="col-12 col-md-12 col-lg-6">
                                    <div class="card-read-more" style="background: radial-gradient(100% 100% at 51.35% 0%, #93e7ff 0%, #418bff 37.71%, #5392ff 67.61%, #5fa8ff 100%);
                                    border-radius: 2rem 0 2rem 0;">
                                        <a href="#" class="btn btn-link btn-block text-decoration-none">
                                            <font style="color: #ffffff;">Read More</font>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 text-center">
                    <div class="card text-center border-0 bg-transparent">
                        <img src="application/views/assets/img_news/Group 40.png" class="card-img-top" alt="...">
                        <div class="card-body" style="background-color: #f6f6f6;
                        border-radius: 0rem 0rem 2rem 2rem;">
                            <div class="row">
                                <button class="btn-outline-primary" type="button"
                                    style="border-radius: 20px; width: 30%; background-color: #ecf1f9;">
                                    <font
                                        style="color: #000000; font-size: 12px; text-align: center; font-family: Inter, 'Source Sans Pro'; ">
                                        Company News</font>
                                </button>
                            </div>
                            <br /><br />
                            <div class="row">
                                <font style="font-size: 17px;
                                            font-weight: 700;
                                            line-height: 1.2125;
                                            color: #000000;
                                            font-family: Inter, 'Source Sans Pro';" class="text-start">
                                    <strong> Lorem Ipsum is simply dummy text of the printing and
                                        typesettingindustry.</strong>
                                </font><br /><br />
                            </div>
                            <br /><br />
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 text-start">
                                    <font style="font-family: Inter, 'Source Sans Pro';">20 September 2023</font>
                                </div>
                                <div class="col-12 col-md-12 col-lg-6">
                                    <div class="card-read-more" style="background: radial-gradient(100% 100% at 51.35% 0%, #93e7ff 0%, #418bff 37.71%, #5392ff 67.61%, #5fa8ff 100%);
                                    border-radius: 2rem 0 2rem 0;">
                                        <a href="#" class="btn btn-link btn-block text-decoration-none">
                                            <font style="color: #ffffff;">Read More</font>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 text-center">
                    <div class="card text-center border-0 bg-transparent">
                        <img src="application/views/assets/img_news/Group 38.png" class="card-img-top" alt="...">
                        <div class="card-body" style="background-color: #f6f6f6;
                        border-radius: 0rem 0rem 2rem 2rem;">
                            <div class="row">
                                <button class="btn-outline-primary" type="button"
                                    style="border-radius: 20px; width: 30%; background-color: #ecf1f9;">
                                    <font
                                        style="color: #000000; font-size: 12px; text-align: center; font-family: Inter, 'Source Sans Pro'; ">
                                        Company News</font>
                                </button>
                            </div>
                            <br /><br />
                            <div class="row">
                                <font style="font-size: 17px;
                                            font-weight: 700;
                                            line-height: 1.2125;
                                            color: #000000;
                                            font-family: Inter, 'Source Sans Pro';" class="text-start">
                                    <strong> Lorem Ipsum is simply dummy text of the printing and
                                        typesettingindustry.</strong>
                                </font><br /><br />
                            </div>
                            <br /><br />
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 text-start">
                                    <font style="font-family: Inter, 'Source Sans Pro';">20 September 2023</font>
                                </div>
                                <div class="col-12 col-md-12 col-lg-6">
                                    <div class="card-read-more" style="background: radial-gradient(100% 100% at 51.35% 0%, #93e7ff 0%, #418bff 37.71%, #5392ff 67.61%, #5fa8ff 100%);
                                    border-radius: 2rem 0 2rem 0;">
                                        <a href="#" class="btn btn-link btn-block text-decoration-none">
                                            <font style="color: #ffffff;">Read More</font>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section Ends -->

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