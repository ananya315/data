<?php
error_reporting(0);

    $lamount = $_GET['loanamount'];
    $pvalue = $_GET['propvalue'];
    $lpurpose = $_GET['loanpurpose'];
    $zip = $_GET['zipcode'];

    $to = "ananyasrivastav315@gmail.com";
    $body = "";
    $body .= "From: ".$lamount."\r\n";
    $body .= "From: ".$lpurpose."\r\n";
    $body .= "From: ".$zip."\r\n";

    mail($to, $lpurpose, $body)
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@700&family=Yantramanav&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Yusei+Magic&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand brandname" href="#">
            <h3 class="my-0 mr-md-auto font-weight-large ml-5"><span style="font-family: 'Cabin', sans-serif;">Scrum
                </span> <i class="fas fa-home"></i> <span
                    style="font-family: 'Yantramanav', sans-serif; font-weight: 550;">Mortgage </span> </h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item pr-3">
                    <a class="nav-link item" href="index.html">Home </a>
                </li>
                <li class="nav-item pr-3">
                    <a class="nav-link item" href="about.html">About Us</a>
                </li>
                <li class="nav-item pr-3">
                    <a class="nav-link item" href="rate.html">Today's Rate</a>
                </li>
                <li class="nav-item pr-3">
                    <a class="nav-link item" href="resource.html">Resources</a>
                </li>
                <li class="nav-item pr-3">
                    <a class="nav-link item" href="contact.html">Contact us</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="bg">
        <div class="text">
            <h2>Dream Of</h2>
            <h1>Home Ownership</h1>
        </div>
    </div>

    <div class="contain">
        <div class="contain-box">
            <h3>Buying a home?</h3>
            <p>Shopping for your dram home or already have apurchase contract? We can get you pre-approved or funded
                quickly.</p>
            <button>Get Home Loan</button>
        </div>
        <div class="contain-box">
            <h3>Looking to refinance?</h3>
            <p>Get a rate in seconds and apply in minutes. Refinance quickly and hassle-free</p>
            <button style="margin-top: 11%;">See Your Rates</button>
        </div>
    </div>

    <div class="service-box">
        <div class="service">
            <i class="far fa-clock"></i>
            <h3>Concierge Service</h3>
            <p>Reali loans provides a personalized experience and a dedicated Home Loan Advisor to work with you from
                the initial conversation to the last. We will be with you every step of the way.</p>
        </div>
        <div class="service">
            <i class="far fa-clock"></i>
            <h3>Concierge Service</h3>
            <p>Reali loans provides a personalized experience and a dedicated Home Loan Advisor to work with you from
                the initial conversation to the last. We will be with you every step of the way.</p>
        </div>
        <div class="service">
            <i class="far fa-clock"></i>
            <h3>Concierge Service</h3>
            <p>Reali loans provides a personalized experience and a dedicated Home Loan Advisor to work with you from
                the initial conversation to the last. We will be with you every step of the way.</p>
        </div>
        <div class="service">
            <i class="far fa-clock"></i>
            <h3>Concierge Service</h3>
            <p>Reali loans provides a personalized experience and a dedicated Home Loan Advisor to work with you from
                the initial conversation to the last. We will be with you every step of the way.</p>
        </div>
        <div class="service">
            <i class="far fa-clock"></i>
            <h3>Concierge Service</h3>
            <p>Reali loans provides a personalized experience and a dedicated Home Loan Advisor to work with you from
                the initial conversation to the last. We will be with you every step of the way.</p>
        </div>
        <div class="service">
            <i class="far fa-clock"></i>
            <h3>Concierge Service</h3>
            <p>Reali loans provides a personalized experience and a dedicated Home Loan Advisor to work with you from
                the initial conversation to the last. We will be with you every step of the way.</p>
        </div>
    </div>

    <div class="bg2">
        <div class="form-box">
            <h3>MORTRAGE RATES</h3>
            <hr>
            <form method="POST">
                <div class="form-label">
                    <label for="lamount">Loan Amount</label><br>
                    <input type="text" id="lnum" name="loanamount">
                </div>
                <div class="form-label">
                    <label for="lamount">Property Value</label><br>
                    <input type="text" id="pval" name="propvalue">
                </div>
                <div class="form-label">
                    <label for="lamount">Loan Purpose</label><br>
                    <select id="loanp" name="loanpurpose">
                        <option value="refinance">Refinance-Lower rate/ Payment</option>
                        <option value="personal">Personal</option>
                    </select>
                </div>
                <div class="form-label">
                    <label for="lamount">Zip Code</label><br>
                    <input type="text" id="zip" name="zipcode">
                </div> 
                <button type="submit" name="quote">Get Quote</button>
            </form>
            <h5>We Search Rates Among 40 Lenders</h5>
            <p>Mortgage Disclosures
            <p>
        </div>
    </div>

    <div class="ceo">
        <h1>Meet Our Founder & CEO</h1>
        <h1>Jay P. Mandal</h1>
        <div class="line"></div>
        <p>I am a lorem impsem dolor etc etc description goes here and it will be visible on site as well and it will be
            easy to know more about the CEO and founder of the company we would live to tell you.</p>
        <div class="icon"><i class="fab fa-twitter"></i> <i class="fab fa-linkedin-in"></i> <i
                class="fab fa-instagram"></i> <i class="fab fa-facebook-f"></i></div>
    </div>
    <div class="process">
        <div class="image">
            <img src="house3.jpg" alt="">
        </div>
        <div class="info">
            <h1>A true digital mortgage process</h1>
            <p><i class="fas fa-check-square"></i> Start application/ pre-approval</p>
            <p><i class="fas fa-check-square"></i> Calculate payments easily</p>
            <p><i class="fas fa-check-square"></i> Secure scan and upload documents</p>
            <p><i class="fas fa-check-square"></i> See your process</p>
            <p><i class="fas fa-check-square"></i> Get updates as you go</p>
        </div>
    </div>
    <h1 id="us">Why Us?</h1>

    <div class="process">
        <div class="info1">
            <div class="name">
                Curtis and Xueling L.
            </div>
            <div class="review">
                <p>"Thankyou very much for all your help, guidance and hard work! We couldn't have bought our house
                    without you. We appreciate everything you did for us. Curtid and Xuejuing L"</p>
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                    class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
        </div>
        <div class="info1">
            <div class="name">
                Marjela And Pat F.
            </div>
            <div class="review">
                <p>"Reali is blesses to have a great team, so devoted to the clients and the company. Thankyou for your
                    great work."</p>
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                    class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
        </div>
    </div>

    <h1 id="us">FAQs</h1>
    <div class="process">
        <div class="faq">
            <h3>1 Lorem ipsum dolor sit </h3>
            <div class="option">YES</div>
        </div>
        <div class="faq">
            <h3>2 Lorem ipsum dolor sit </h3>
            <div class="option">YES</div>
        </div>
        <div class="faq">
            <h3>3 Lorem ipsum dolor sit </h3>
            <div class="option">YES</div>
        </div>
        <div class="faq">
            <h3>4 Lorem ipsum dolor sit </h3>
            <div class="option">YES</div>
        </div>
    </div>

    <footer>
        <div class="process">
            <div class="company">
                <span style="font-family: 'Cabin', sans-serif;">Scrum
                </span> <i class="fas fa-home"></i> <span
                    style="font-family: 'Yantramanav', sans-serif; font-weight: 550;">Mortgage </span><br>
                    <i class="fab fa-twitter"></i> <i class="fab fa-linkedin-in"></i> <i
                class="fab fa-instagram"></i> <i class="fab fa-facebook-f"></i>
            </div>
            <div class="links">
                <h3>Quick Links</h3>
                <h4>Home</h4>
                <h4>About Us</h4>
                <h4>Contact Us</h4>
            </div>
            <div class="touch">
                <h3>GET IN TOUCH</h3>
                <div class="email">
                <input type="email" name="" id="emailinput" placeholder="Type your e-mail...">
                <button>Sign Up</button>
            </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>



</body>

</html>