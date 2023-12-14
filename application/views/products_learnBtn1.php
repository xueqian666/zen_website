<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 Responsive Landing Page Design</title>

    <!-- All CSS -->
    <link href="../application/views/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../application/views/css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" />
    <style>
        .card-container {
            max-height: 350px;
            /* Set your desired height */
            overflow-x: auto;
            /* Hide horizontal scrollbar */
            overflow-y: hidden;
            /* Enable vertical scrolling */
        }

        .card-slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .card-flex {
            flex: 0 0 350px;
            margin-right: 15px;
        }

        .scroll-btn {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- Navibar -->
    <?php $this->load->view("header_inside"); ?>

    <!-- main background-->
    <section class="services section-padding" id="services" style="background-color:#D7C3FF;">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-md-6">
                    <div class="about-img d-flex align-items-center justify-content-center" ">
                        <img src=" ../application/views/assets/img_product_learnBtn1/image 43.png" class="img-fluid" />
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
                <div class="section-header pb-5">
                    <br /><br />
                    <div class="text-md-start">
                        <font style="font-family: 'Oswald', Helvetica;
                                        font-weight: 700;
                                        color: #000000;
                                        font-size: 40px;
                                        letter-spacing: 0;
                                        line-height: normal;">
                            <b>Web Hosting</b>
                        </font>
                        <br />
                        <img src="../application/views/assets/img_solution_learnBtn1/line-5.svg" class="img-fluid" />
                        <br /><br />
                        <p style="font-family: 'Inter', Helvetica;
                                        font-weight: 400;
                                        color: #000000;
                                        font-size: 16px;
                                        text-align: justify;
                                        letter-spacing: 0;
                                        line-height: normal; line-height: 2;">
                            Orem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has
                            Been The Industry's Standard Dummy Text Ever Since The 1500s, When An Unknown
                        </p>
                        <br />
                        <div class="d-grid gap-2 d-md-block">
                            <br /><br />
                            <button class="btn btn-primary btn-block border-0" type="button" style="border-radius: 35px;
                                            background: linear-gradient(180deg, rgb(138, 35, 135) 0%, rgb(233, 64, 87) 49.46%, rgb(242, 113, 33) 100%);">GET A QUOTE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Solutions section starts -->
    <section class="services section-padding" id="services" style="background-color: #ffffff;">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-md-12">
                    <div class="section-header pb-5">
                        <font style="font-family: 'Inter', Helvetica;
                        font-weight: 700;
                        color: #000000;
                        font-size: 40px;">ADVANTAGES OF HOSTING</font> <br />
                        <font style="font-family: 'Inter', Helvetica;
                        font-weight: 400;
                        color: #000000;
                        font-size: 16px;">Our Provides Reliable Web Hosting For Projects</font>
                    </div>
                    <br />
                </div>
            </div>
            <div class="row ">
                <div class="col-12 col-md-12 col-lg-3 text-center">
                    <div class="card text-center border-0 bg-transparent">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="about-img d-flex align-items-center justify-content-center">
                                    <img src="../application/views/assets/img_product_learnBtn1/logo1.png" class="img-fluid img-area1" />
                                </div>
                            </div>
                            <br />
                            <div class="row justify-content-center">
                                <font style="font-family: 'Inter', Helvetica;
                                font-weight: 600;
                                color: #000000;
                                font-size: 17px;
                                text-align: center;
                                letter-spacing: 0;
                                line-height: normal; "><strong>Round-The-Clock Service</strong></font><br /><br />
                                <font style="font: inherit; font-size: 12px; font-weight: 400;
                                color: #000000;" class="text-start">There Are Many Variations Of Passages Of Lorem
                                    Ipsum Available, But
                                    The Majority Have Suffered Alteration In Some Form, By Injected Humour, Or
                                    Randomised Words Which Don't Look Even Slightly Believable</font>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3 text-center">
                    <div class="card text-center border-0 bg-transparent">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="about-img d-flex align-items-center justify-content-center">
                                    <img src="../application/views/assets/img_product_learnBtn1/logo2.png" class="img-fluid img-area1" />
                                </div>
                            </div>
                            <br />
                            <div class="row justify-content-center">
                                <font style="font-family: 'Inter', Helvetica;
                                font-weight: 600;
                                color: #000000;
                                font-size: 17px;
                                text-align: center;
                                letter-spacing: 0;
                                line-height: normal; "><strong>Operation Speed</strong></font><br /><br />
                                <font style="font: inherit; font-size: 12px; font-weight: 400;
                                color: #000000;" class="text-start">
                                    There Are Many Variations Of Passages Of Lorem Ipsum Available, But The Majority
                                    Have Suffered Alteration In Some Form, By Injected Humour, Or Randomised Words Which
                                    Don't Look Even Slightly Believable</font>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3 text-center">
                    <div class="card text-center border-0 bg-transparent">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="about-img d-flex align-items-center justify-content-center">
                                    <img src="../application/views/assets/img_product_learnBtn1/logo3.png" class="img-fluid img-area1" />
                                </div>
                            </div>
                            <br />
                            <div class="row justify-content-center">
                                <font style="font-family: 'Inter', Helvetica;
                                font-weight: 600;
                                color: #000000;
                                font-size: 17px;
                                text-align: center;
                                letter-spacing: 0;
                                line-height: normal; "><strong>Stability</strong></font><br /><br />
                                <font style="font: inherit; font-size: 12px; font-weight: 400;
                                color: #000000;" class="text-start">


                                    There Are Many Variations Of Passages Of Lorem Ipsum Available, But The Majority
                                    Have Suffered Alteration In Some Form, By Injected Humour, Or Randomised Words Which
                                    Don't Look Even Slightly Believable</font>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3 text-center">
                    <div class="card text-center border-0 bg-transparent">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="about-img d-flex align-items-center justify-content-center">
                                    <img src="../application/views/assets/img_product_learnBtn1/logo4.png" class="img-fluid img-area1" />
                                </div>
                            </div>
                            <br />
                            <div class="row justify-content-center">
                                <font style="font-family: 'Inter', Helvetica;
                                font-weight: 600;
                                color: #000000;
                                font-size: 17px;
                                text-align: center;
                                letter-spacing: 0;
                                line-height: normal; "><strong>Bulk Traffic</strong></font><br /><br />
                                <font style="font: inherit; font-size: 12px; font-weight: 400;
                                color: #000000;" class="text-start">
                                    There Are Many Variations Of Passages Of Lorem Ipsum Available, But The Majority
                                    Have Suffered Alteration In Some Form, By Injected Humour, Or Randomised Words Which
                                    Don't Look Even Slightly Believable</font>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br /><br />
            <div class="row ">
                <div class="col-12 col-md-12 col-lg-3 text-center">
                    <div class="card text-center border-0 bg-transparent">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="about-img d-flex align-items-center justify-content-center">
                                    <img src="../application/views/assets/img_product_learnBtn1/logo5.png" class="img-fluid img-area1" />
                                </div>
                            </div>
                            <br />
                            <div class="row justify-content-center">
                                <font style="font-family: 'Inter', Helvetica;
                                font-weight: 600;
                                color: #000000;
                                font-size: 17px;
                                text-align: center;
                                letter-spacing: 0;
                                line-height: normal; "><strong>Security</strong></font><br /><br />
                                <font style="font: inherit; font-size: 12px; font-weight: 400;
                                color: #000000;" class="text-start">
                                    There Are Many Variations Of Passages Of Lorem Ipsum Available, But The Majority
                                    Have Suffered Alteration In Some Form, By Injected Humour, Or Randomised Words Which
                                    Don't Look Even Slightly Believable</font>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br /><br />
            <div class="row align-items-start">
                <div class="col-md-7">
                    <div class="section-header pb-5">
                        <div class="text-md-start">
                            <font style="font-size: 40px;
                        font-weight: 700;
                        line-height: 1.8976;
                        text-transform: capitalize;
                        color: #000000;
                        font-family: Oswald, 'Source Sans Pro';
                        white-space: nowrap;">Buy Secure Hosting For Your Company</font> <br />
                            <font style="font-family: 'Inter', Source Sans Pro;
                        font-weight: 400;
                        color: #000000;
                        font-size: 18px;">Contact Managers To Get A Commercial Offer According To Your Business Needs.
                            </font>
                        </div>
                        <br /><br /><br /><br /><br /><br />
                        <div class="text-md-start">
                            <font style="font-size: 25px;
                            font-weight: 700;
                            line-height: 1.8976;
                            text-transform: capitalize;
                            color: #000000;
                            font-family: Oswald, 'Source Sans Pro';
                            white-space: nowrap;">LOREM ISPUM LOREM ISPUM</font> <br /><br />
                            <p style="text-align: justify;
                            line-height: 23.2px;
                            font-family: 'Inter', Helvetica;
                            line-height: 3;
                            font-weight: 400;
                            color: #000000;
                            font-size: 13px;">
                                It Is A Long Established Fact That A Reader Will Be Distracted By The Readable Content
                                Of A Page When Looking At Its Layout. The Point Of Using Lorem Ipsum Is That It Has A
                                More-Or-Less Normal Distribution Of Letters, As Opposed To Using 'Content Here, Content
                                Here', Making It Look Like Readable English. Many Desktop Publishing Packages And Web
                                Page Editors Now Use Lorem Ipsum
                            </p>
                            <br />
                        </div>
                    </div>
                    <br />
                </div>
                <div class="col-md-5">
                    <div class="about-img d-flex align-items-center justify-content-center">
                        <img src=" ../application/views/assets/img_product_learnBtn1/image 44.png" style="height: 650px;" class="img-fluid img-area3" />
                    </div>
                </div>
                <br />
            </div>
            <br /><br />

            <!-- Slider section -->
            <div class="row">
                <div class="border-0 bg-dark" style="
                        border-radius: 30px;">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-1 d-flex align-items-center justify-content-center">
                            <button class="btn btn-light btn-rounded" style="border-radius: 50%;" onclick="prevCard()">
                                <i class="bi bi-arrow-left"></i>
                            </button>
                        </div>

                        <div class="col-12 col-md-12 col-lg-10 card text-center border-0 bg-dark" style="
                        border-radius: 30px;">
                            <br />
                            <div class="row text-start">
                                <font style="font-family: 'Oswald', Helvetica;
                                        font-weight: 600;
                                        color: #ffffff;
                                        font-size: 25px;
                                        letter-spacing: 0;
                                        line-height: normal;"><strong>MORE ABOUT SOLUTION</strong></font><br /><br />
                            </div>
                            <div class="card-container" id="cardContainer">
                                <div class="card-slider">
                                    <!-- Add your cards here -->
                                    <!-- <div class="row ">
                                        <div class="col-12 col-md-12 col-lg-4 text-center">
                                            <div class="text-center border-0 bg-white" style="border-radius: 20px;">
                                                <div class="card-body">
                                                    <div class="row justify-content-center">
                                                        <div class="about-img d-flex align-items-center justify-content-center">
                                                            <img src="../assets/img_solution_learnBtn1/mask-group-7.png"
                                                                class="img-fluid img-area1" />
                                                        </div>
                                                    </div>
                                                    <br />
                                                    <div class="row justify-content-center">
                                                        <font style="font-family: 'Inter', Helvetica;
                                                    font-weight: 600;
                                                    color: #000000;
                                                    font-size: 17px;
                                                    text-align: center;
                                                    letter-spacing: 0;
                                                    line-height: normal; "><strong>Test 1</strong></font><br /><br />
                                                        <font style="font: inherit; font-size: 12px; font-weight: 400;
                                                    color: #000000;">It Is A Long Established Fact That A Reader Will Be Distracted
                                                            By The
                                                            Readable Content Of A Page When Looking At Its Layout. The Point Of
                                                            Using Lorem
                                                            Ipsum Is That It Has A More-or-less Normal Distribution</font>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-4 text-center">
                                            <div class="text-center border-0 bg-white" style="border-radius: 20px;">
                                                <div class="card-body">
                                                    <div class="row justify-content-center">
                                                        <div class="about-img d-flex align-items-center justify-content-center">
                                                            <img src="../assets/img_solution_learnBtn1/mask-group-7.png"
                                                                class="img-fluid img-area1" />
                                                        </div>
                                                    </div>
                                                    <br />
                                                    <div class="row justify-content-center">
                                                        <font style="font-family: 'Inter', Helvetica;
                                                    font-weight: 600;
                                                    color: #000000;
                                                    font-size: 17px;
                                                    text-align: center;
                                                    letter-spacing: 0;
                                                    line-height: normal; "><strong>Test 2</strong></font><br /><br />
                                                        <font style="font: inherit; font-size: 12px; font-weight: 400;
                                                    color: #000000;">It Is A Long Established Fact That A Reader Will Be Distracted
                                                            By The
                                                            Readable Content Of A Page When Looking At Its Layout. The Point Of
                                                            Using
                                                            Lorem
                                                            Ipsum Is That It Has A More-or-less Normal Distribution</font>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-4 text-center">
                                            <div class="text-center border-0 bg-white" style="border-radius: 20px;">
                                                <div class="card-body">
                                                    <div class="row justify-content-center">
                                                        <div class="about-img d-flex align-items-center justify-content-center">
                                                            <img src="../assets/img_solution_learnBtn1/mask-group-7.png"
                                                                class="img-fluid img-area1" />
                                                        </div>
                                                    </div>
                                                    <br />
                                                    <div class="row justify-content-center">
                                                        <font style="font-family: 'Inter', Helvetica;
                                                    font-weight: 600;
                                                    color: #000000;
                                                    font-size: 17px;
                                                    text-align: center;
                                                    letter-spacing: 0;
                                                    line-height: normal; "><strong>Test 3</strong></font><br /><br />
                                                        <font style="font: inherit; font-size: 12px; font-weight: 400;
                                                    color: #000000;">It Is A Long Established Fact That A Reader Will Be Distracted
                                                            By The
                                                            Readable Content Of A Page When Looking At Its Layout. The Point Of
                                                            Using
                                                            Lorem
                                                            Ipsum Is That It Has A More-or-less Normal Distribution</font>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-4 text-center">
                                            <div class="text-center border-0 bg-white" style="border-radius: 20px;">
                                                <div class="card-body">
                                                    <div class="row justify-content-center">
                                                        <div class="about-img d-flex align-items-center justify-content-center">
                                                            <img src="../assets/img_solution_learnBtn1/mask-group-7.png"
                                                                class="img-fluid img-area1" />
                                                        </div>
                                                    </div>
                                                    <br />
                                                    <div class="row justify-content-center">
                                                        <font style="font-family: 'Inter', Helvetica;
                                                    font-weight: 600;
                                                    color: #000000;
                                                    font-size: 17px;
                                                    text-align: center;
                                                    letter-spacing: 0;
                                                    line-height: normal; "><strong>Test 4</strong></font><br /><br />
                                                        <font style="font: inherit; font-size: 12px; font-weight: 400;
                                                    color: #000000;">It Is A Long Established Fact That A Reader Will Be Distracted
                                                            By The
                                                            Readable Content Of A Page When Looking At Its Layout. The Point Of
                                                            Using
                                                            Lorem
                                                            Ipsum Is That It Has A More-or-less Normal Distribution</font>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->


                                    <!-- Add your cards here -->
                                    <div class="card-flex text-center border-0 bg-white" style="border-radius: 20px;">
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="about-img d-flex align-items-center justify-content-center">
                                                    <img src="../application/views/assets/img_solution_learnBtn1/image-31.png" class="img-fluid img-area1" />
                                                </div>
                                            </div>
                                            <br />
                                            <div class="row justify-content-center align-items-center">
                                                <font style="font-family: 'Inter', Helvetica;
                                                    font-weight: 600;
                                                    color: #000000;
                                                    font-size: 20px;
                                                    text-align: center;
                                                    letter-spacing: 0;
                                                    line-height: normal; "><strong>Lorem Ispum</strong></font>
                                                <br /><br />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-flex text-center border-0 bg-white" style="border-radius: 20px;">
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="about-img d-flex align-items-center justify-content-center">
                                                    <img src="../application/views/assets/img_solution_learnBtn1/image-28.png" class="img-fluid img-area1" />
                                                </div>
                                            </div>
                                            <br />
                                            <div class="row justify-content-center align-items-center">
                                                <font style="font-family: 'Inter', Helvetica;
                                                    font-weight: 600;
                                                    color: #000000;
                                                    font-size: 20px;
                                                    text-align: center;
                                                    letter-spacing: 0;
                                                    line-height: normal; "><strong>Lorem Ispum</strong></font>
                                                <br /><br />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-flex text-center border-0 bg-white" style="border-radius: 20px;">
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="about-img d-flex align-items-center justify-content-center">
                                                    <img src="../application/views/assets/img_solution_learnBtn1/image-29.png" class="img-fluid img-area1" />
                                                </div>
                                            </div>
                                            <br />
                                            <div class="row justify-content-center align-items-center">
                                                <font style="font-family: 'Inter', Helvetica;
                                                    font-weight: 600;
                                                    color: #000000;
                                                    font-size: 20px;
                                                    text-align: center;
                                                    letter-spacing: 0;
                                                    line-height: normal; "><strong>Lorem Ispum</strong></font>
                                                <br /><br />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-flex text-center border-0 bg-white" style="border-radius: 20px;">
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="about-img d-flex align-items-center justify-content-center">
                                                    <img src="../application/views/assets/img_solution_learnBtn1/image-26.png" class="img-fluid img-area5" />
                                                </div>
                                            </div>
                                            <br />
                                            <div class="row justify-content-center align-items-center">
                                                <font style="font-family: 'Inter', Helvetica;
                                                    font-weight: 600;
                                                    color: #000000;
                                                    font-size: 20px;
                                                    text-align: center;
                                                    letter-spacing: 0;
                                                    line-height: normal; "><strong>Lorem Ispum</strong></font>
                                                <br /><br />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-flex text-center border-0 bg-white" style="border-radius: 20px;">
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="about-img d-flex align-items-center justify-content-center">
                                                    <img src="../application/views/assets/img_solution_learnBtn1/image-27.png" class="img-fluid img-area5" />
                                                </div>
                                            </div>
                                            <br />
                                            <div class="row justify-content-center align-items-center">
                                                <font style="font-family: 'Inter', Helvetica;
                                                    font-weight: 600;
                                                    color: #000000;
                                                    font-size: 20px;
                                                    text-align: center;
                                                    letter-spacing: 0;
                                                    line-height: normal; "><strong>Lorem Ispum</strong></font>
                                                <br /><br />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-flex text-center border-0 bg-white" style="border-radius: 20px;">
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="about-img d-flex align-items-center justify-content-center">
                                                    <img src="../application/views/assets/img_solution_learnBtn1/image-30.png" class="img-fluid img-area5" />
                                                </div>
                                            </div>
                                            <br />
                                            <div class="row justify-content-center align-items-center">
                                                <font style="font-family: 'Inter', Helvetica;
                                                    font-weight: 600;
                                                    color: #000000;
                                                    font-size: 20px;
                                                    text-align: center;
                                                    letter-spacing: 0;
                                                    line-height: normal; "><strong>Lorem Ispum</strong></font>
                                                <br /><br />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="mt-3">
                                <button class="btn btn-primary" onclick="prevCard()">Previous</button>
                                <button class="btn btn-primary" onclick="nextCard()">Next</button>
                            </div> -->
                            <br /><br />
                        </div>
                        <div class="col-12 col-md-12 col-lg-1  d-flex align-items-center justify-content-center">
                            <button class="btn btn-light btn-rounded" style="border-radius: 50%;" onclick="nextCard()"><i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <br /><br />

        </div>
    </section>
    <!-- Solutions section Ends -->

    <!-- Banner section starts -->
    <?php $this->load->view("banner"); ?>
    <!-- Banner section Ends -->

    <!-- footer section starts -->
    <?php $this->load->view("footer_inside"); ?>
    <!-- footer section Ends -->


    <!-- All Js -->
    <script src="../application/views/js/bootstrap.bundle.min.js"></script>
    <script src="../application/views/js/script.js"></script>
    <script>
        const cardContainer = document.querySelector('.card-container');
        const cardSlider = document.querySelector('.card-slider');
        const cards = document.querySelectorAll('.card');
        let currentIndex = 0;

        function updateSlider() {
            const cardWidth = cards[0].offsetWidth + 60; // Adjust for margin
            cardSlider.style.transform = `translateX(${-currentIndex * cardWidth}px)`;
        }

        function prevCard() {
            if (currentIndex > 0) {
                currentIndex--;
                updateSlider();
            }
        }

        function nextCard() {
            if (currentIndex < cards.length - 1) {
                currentIndex++;
                updateSlider();
            }
        }
    </script>
</body>

</html>

<!--for getting the form download the code from download button-->