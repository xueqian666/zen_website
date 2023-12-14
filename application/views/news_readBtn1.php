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
    <div class="position-relative" style="height: 400px; background-image: url('../application/views/assets/img_about/rectangle-3.png'); background-size: cover;">
        <div class="carousel-caption position-absolute top-50 start-0 w-100" style="padding-top: 0px;">
            <p class="fs-md-3 fs-lg-2" style="font-family: 'Oswald', Helvetica; font-weight: 700; color: #ffffff; white-space: normal; font-size: 40px;">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>
        </div>
    </div>
    <br /><br />

    <!-- Solutions section starts -->
    <section class="services" id="services" style="background-color: #ffffff;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-start">
                    <div class="about-img">
                        <img src="../application/views/assets/img_new_readBtn1/Rectangle 405.png" class="img-fluid" style="width:1500px" />
                    </div>
                </div>
            </div>
            <br />
            <div class="row">
                <button class="btn-outline-primary" type="button" style="border-radius: 20px; width: 10%; background-color: #ecf1f9;">
                    <font style="color: #000000; font-size: 15px; text-align: center; font-family: Inter, 'Source Sans Pro'; ">
                        Company News</font>
                </button>

            </div>
            <br />
            <div class="row">
                <button class="btn-outline-primary" type="button" style="border-radius: 20px; width: 20%; background-color: #ecf1f9;">
                    <font style="color: #000000; font-size: 20px; text-align: center; font-family: Inter, 'Source Sans Pro'; ">
                        20 September 2023</font>
                </button>
            </div>
            <br />
            <div class="row ">
                <div class="row text-start">
                    <font style="font-weight: 700;
                                line-height: 1.2125;
                                color: #000000;
                                font-family: Inter, 'Source Sans Pro';
                                white-space: nowrap;
                                font-size: 30px;"><strong>Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry.</strong>
                    </font><br /><br />
                    <font style="font: inherit; font-size: 14px; font-weight: 400;
                                color: #000000; font-family: Inter, 'Source Sans Pro';">It is a long established fact
                        that a reader will be distracted by the
                        readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it
                        has a more-or-less normal distribution of letters, as opposed to using 'Content here, content
                        here', making it look like readable English. Many desktop publishing packages and web page
                        editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will
                        uncover many web sites still in their infancy. Various versions have evolved over the years,
                        sometimes by accident, sometimes on purpose (injected humour and the like).It is a long
                        established fact that a reader will be distracted by the readable content of a page when looking
                        at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                        of letters, as opposed to using 'Content here, content here', making it look like readable
                        English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                        default model text, and a search for 'lorem ipsum' will uncover many web sites still in their
                        infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                        purpose (injected humour and the like).<br /><br />

                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                        their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                        their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                        purpose (injected humour and the like).
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                        their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                        their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                        purpose (injected humour and the like).</font>
                </div>
            </div>
            <br /><br />
            <div class="row ">
                <div class="col-12 col-md-12 col-lg-6 text-center">
                    <img src="../application/views/assets/img_new_readBtn1/Rectangle 406.png" class="card-img-top" alt="...">
                </div>
                <div class="col-12 col-md-12 col-lg-6 text-center">
                    <img src="../application/views/assets/img_new_readBtn1/Rectangle 407.png" class="card-img-top" alt="...">
                </div>
            </div>
            <br /><br />
            <div class="row ">
                <div class="row text-start">
                    <font style="font: inherit; font-size: 14px; font-weight: 400;
                                color: #000000; font-family: Inter, 'Source Sans Pro';">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                        their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                        their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                        purpose (injected humour and the like).<br /><br />

                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                        their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                        their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                        purpose (injected humour and the like).<br /><br />

                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                        their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                        their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                        purpose (injected humour and the like).<br /><br />

                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                        their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                        their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                        purpose (injected humour and the like).</font>
                </div>
            </div>
        </div>
    </section>
    <!-- Solutions section Ends -->

    <br /><br /><br /><br /><br />

    <!-- Banner section starts -->
    <section class="services section-padding" id="services" style="background: linear-gradient(180deg, rgb(165, 254, 203) 0%, rgb(32, 189, 255) 53.12%, rgb(84, 51, 255) 100%);">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-md-9">
                    <div class="section-header text-center">
                        <h2 class="text-md-start" style="font-family: 'Oswald', Helvetica;
                        font-weight: 500;
                        color: #ffffff;
                        font-size: 40px;
                        letter-spacing: 0;
                        line-height: normal;">INTERESTED IN OUR PRODUCT OR SOLUTION?</h2>
                        <br />
                        <p class="text-md-start" style="font-family: 'Inter', Helvetica;
                        font-weight: 500;
                        color: #ffffff;
                        font-size: 18px;
                        letter-spacing: 0;
                        line-height: normal;">Marketing, sales, and service software that helps your business grow
                            without compromise.
                            Because "good for the business" should also mean "good for the customer."</p>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="d-grid gap-2 d-md-block">
                        <br /><br />
                        <button class="btn btn-primary btn-block border-0" type="button" style="border-radius: 40px; white-space: nowrap;
                        background: radial-gradient( 50% 50% at 50% 50%, rgb(65, 139, 255) 37.71%, rgb(83, 146, 255) 67.61%, rgb(95, 168, 255) 100% );">INTERESTED? GET IN TOUCH
                            HERE</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
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