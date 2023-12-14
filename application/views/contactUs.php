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

    <style>
        .contact-text {
            line-height: 0.7619047619;
            color: #000000;
            font-weight: 500;
            font-size: 20px;
            font-family: Inter, 'Source Sans Pro';
            font-weight: 600;
        }

        .normal-text {
            color: #000000;
            font-family: Inter, 'Source Sans Pro';
            white-space: nowrap;
            flex-shrink: 0;
        }

        .textfield {
            border: solid 0.1rem #aeaeae;
            background-color: #ffffff;
            border-radius: 3rem;
            padding: 30px;
        }

        .form-button {
            align-items: center;
            justify-content: center;
            border-radius: 30px;
            flex-shrink: 0;
            width: 300px;
            height: 70px;
        }
    </style>
</head>

<body>
    <!-- Navibar -->
    <?php $this->load->view("header"); ?>


    <!-- main background-->
    <div class="position-relative" style="height: 400px; background-image: url('application/views/assets/img_about/rectangle-3.png'); background-size: cover;">
        <!-- <img src="assets/img_about/rectangle-3.png" class="d-block w-100 img-fluid" alt="..."> -->
        <div class="carousel-caption mt-n3 position-absolute top-50 start-50 translate-middle">
            <p style="font-family: 'Oswald', Helvetica;
            font-weight: 700;
            color: #ffffff;
            font-size: 60px;
            letter-spacing: 0;
            line-height: normal;
            white-space: nowrap;">CONTACT US</p>
        </div>
    </div>
    <br />

    <!-- Alert -->
    <?php $this->load->view("alert"); ?>

    <!-- Contact section starts -->
    <section class="services section-padding" id="services" style="background-color: #ffffff;">
        <div class="container">
            <div class="row text-center align-items-center justify-content-center" style="border: solid 0.1rem #cdcdcd; border-radius: 8.75rem; padding: 30px;">
                <div class="col-md-2">
                    <div class="about-img">
                        <img src="application/views/assets/img_contact/image 3.png" class="img-fluid img-area10" />
                    </div>
                </div>

                <div class="col-md-2">
                    <font class="contact-text">
                        contact@gmail.com</font>
                </div>

                <div class="col-md-2">
                    <div class="about-img">
                        <img src="application/views/assets/img_contact/image 4.png" class="img-fluid img-area10" />
                    </div>
                </div>

                <div class="col-md-2">
                    <font class="contact-text">
                        010 1234 5678</font>
                </div>

                <div class="col-md-2">
                    <div class="about-img">
                        <img src="application/views/assets/img_contact/image 5.png" class="img-fluid img-area10" />
                    </div>
                </div>

                <div class="col-md-2">
                    <font class="contact-text">
                        Zendigital</font>
                </div>
            </div>
            <br /><br /><br /><br /><br />
            <div class="row text-center align-items-center justify-content-center">
                <font class="normal-text" style="font-size: 30px; font-weight: 700;">CONTACT INFORMATION</font>
                <font class="normal-text" style="font-size: 15px;">please leave us a message. our team will contact you
                    as soon as possible. <br /><br /><br /><br /></font>

                <form action="<?= base_url() ?>contactUs/submit" enctype="multipart/form-data" method="post" id="contact_form" name="contact_form">
                    <div class="mb-5 row">
                        <div class="col">
                            <input type="text" required maxlength="50" class="form-control textfield" id="first_name" name="name" placeholder="name*" style="border: solid 0.1rem #cdcdcd; border-radius: 8.75rem; padding: 30px;">
                        </div>
                        <div class="col">
                            <input type="email" required maxlength="50" class="form-control textfield" id="email_addr" name="email" placeholder="email*" style="border: solid 0.1rem #cdcdcd; border-radius: 8.75rem; padding: 30px;">
                        </div>
                    </div>
                    <div class="mb-5 row">
                        <div class="col">
                            <input type="tel" required maxlength="50" class="form-control textfield" id="phone_input" name="phone" placeholder="phone*" style="border: solid 0.1rem #cdcdcd; border-radius: 8.75rem; padding: 30px;">
                        </div>
                        <div class="col">
                            <input type="text" required maxlength="150" class="form-control textfield" id="link_souce" name="link" placeholder="link to source*" style="border: solid 0.1rem #cdcdcd; border-radius: 8.75rem; padding: 30px;">
                        </div>
                    </div>
                    <div class="mb-5">
                        <textarea class="form-control textfield" id="message" name="message" rows="5" placeholder="message*" style="border: solid 0.1rem #cdcdcd; border-radius: 3rem; padding: 30px;"></textarea>
                    </div>
                    <!-- <button type="file" class="btn form-button px-4 btn-lg" style="background-color: #ecf1f9;">Attach
                        File</button> -->
                    <input type="file" id="real-file" name="attachment" hidden="hidden" />
                    <button type="button" class="btn form-button px-4 btn-lg" id="custom-button" style="background-color: #ECF1F9; border: solid 0.1rem #cdcdcd; border-radius: 8.75rem; ">Attach
                        File</button>
                    &nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn form-button px-4 btn-lg" style="background: radial-gradient(100% 100% at 51.35% 0%, #93e7ff 0%, #418bff 37.71%, #5392ff 67.61%, #5fa8ff 100%); color: #ffffff; border: solid 0.1rem #cdcdcd; border-radius: 8.75rem; ">Submit</button>
                    <br /><br /><span id="custom-text"></span>
                </form>

            </div>



            <br /><br />
        </div>


        <br /><br />
        </div>
    </section>
    <!-- Contact section Ends -->

    <!-- footer section starts -->
    <?php $this->load->view("footer"); ?>
    <!-- footer section Ends -->

    <!-- All Js -->
    <script src="application/views/js/bootstrap.bundle.min.js"></script>
    <script src="application/views/js/script.js"></script>
    <script>
        const realFileBtn = document.getElementById("real-file");
        const customBtn = document.getElementById("custom-button");
        const customTxt = document.getElementById("custom-text");

        customBtn.addEventListener("click", function() {
            realFileBtn.click();
        });

        realFileBtn.addEventListener("change", function() {
            if (realFileBtn.value) {
                customTxt.innerHTML = realFileBtn.value.match(
                    /[\/\\]([\w\d\s\.\-\(\)]+)$/
                )[1];
            } else {
                customTxt.innerHTML = "No file chosen, yet.";
            }
        });
    </script>
</body>

</html>

<!--for getting the form download the code from download button-->