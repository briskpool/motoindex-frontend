<?php 
	$currentPage = 'home'; // current page name....
	$title = 'Moto Index';    
	include 'header.php'; ?>
<link rel="stylesheet" href="css/standings.css">

<?php include 'navbar.php'; ?>

<section class="home-banner py-3 py-lg-5">
    <div class="overlay py-3 py-md-5">
        <div class="bg-side"></div>
        <div class="container mb-4 mb-lg-0">
            <div class="row align-items-center">
                <div class="col-md-6 mb-5 mb-md-0">
                    <h1>
                        We Have The Formula!
                    </h1>
                    <p>
                        Detailed statistical analysis trading across motorsport events around the globe that gives you
                        monthly dividend payments.
                    </p>
                    <a href="register.php" class="btn btn-secondary mt-4 mt-md-5 px-3">
                        REGISTER TODAY <i class="bi bi-arrow-right ml-3"></i>
                    </a>
                </div>
                <div class="col-md-6">
                    <!-- <img class = "w-100" src="images/slider-img.png" alt="slider-img"> -->
                    <div id="moto-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="images/slider-img.png" alt="slider-img">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/img2.png" alt="slider-img">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/slider-img.png" alt="slider-img">
                            </div>
                        </div>
                        <a href="#moto-carousel" class="carousel-control-prev" role="button" data-slide="prev">
                            <i class="bi bi-chevron-left"></i>
                        </a>
                        <a href="#moto-carousel" class="carousel-control-next" role="button" data-slide="next">
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="social-fixed d-none d-md-block d-lg-block">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link px-0" title="Linkedin">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link px-0" title="twitter">
                        <i class="bi bi-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link px-0" title="instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>


<section class="race-sec race-header py-4">
    <div class="overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-md-8">
                    <h1 class="text-light">
                        F1 Rankings
                    </h1>
                </div>
                <div class="col-6 col-md-4 text-right">
                    <a href="#" class="btn btn-light">
                        OPEN ACCOUNT <i class="bi bi-arrow-right ml-1 ml-md-2 ml-lg-4"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="race-sec race-body py-4">
    <div class="overlay py-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--Standings-->
                    <h4 class="mb-3">Australia Grand Prix</h4>
                    <table class="tbl-standings">
                        <tbody>
                            <tr>
                                <th>
                                    Pos
                                </th>
                                <th>
                                    Driver
                                </th>
                                <th>
                                    Gap
                                </th>
                            </tr>
                        </tbody>
                        <tr class="driver">
                            <td class="position">1</td>
                            <td class="driver" style="border-left: 4px solid rgb(0, 210, 190);">Lewis
                                <strong>Hamilton</strong> <span>mercedes</span>
                            </td>
                            <td class="gap"><span>Leader</span></td>
                        </tr>
                        <tr class="driver">
                            <td class="position">2</td>
                            <td class="driver" style="border-left: 4px solid rgb(0, 210, 190);">Valteri
                                <strong>Bottas</strong> <span>mercedes</span>
                            </td>
                            <td class="gap"><span>+6.552s</span></td>
                        </tr>
                        <tr class="driver">
                            <td class="position">3</td>
                            <td class="driver" style="border-left: 4px solid rgb(220, 0, 0);">Sebastian
                                <strong>Vettel</strong> <span>ferrari</span>
                            </td>
                            <td class="gap"><span>+13.744s</span></td>
                        </tr>
                        <tr class="driver">
                            <td class="position">4</td>
                            <td class="driver" style="border-left: 4px solid rgb(30, 65, 255);">Max
                                <strong>Verstappen</strong> <span>red bull</span>
                            </td>
                            <td class="gap"><span>+27.627s</span></td>
                        </tr>
                        <tr class="driver">
                            <td class="position">5</td>
                            <td class="driver" style="border-left: 4px solid rgb(220, 0, 0);">Charles
                                <strong>Leclerc</strong> <span>ferrari</span>
                            </td>
                            <td class="gap"><span>+31.627s</span></td>
                        </tr>
                        <tr class="driver">
                            <td class="position">6</td>
                            <td class="driver" style="border-left: 4px solid rgb(30, 65, 255);">Pierre
                                <strong>Gasly</strong> <span>red bull</span>
                            </td>
                            <td class="gap"><span>+89.307s</span></td>
                        </tr>
                        <tr class="driver">
                            <td class="position">7</td>
                            <td class="driver" style="border-left: 4px solid rgb(255, 245, 0);">Daniel
                                <strong>Ricciardo</strong> <span>renault</span>
                            </td>
                            <td class="gap"><span>+1 lap</span></td>
                        </tr>
                        <tr class="driver">
                            <td class="position">8</td>
                            <td class="driver" style="border-left: 4px solid rgb(245, 150, 200);">Sergio
                                <strong>Perez</strong> <span>racing point</span>
                            </td>
                            <td class="gap"><span>+1 lap</span></td>
                        </tr>
                        <tr class="driver">
                            <td class="position">9</td>
                            <td class="driver" style="border-left: 4px solid rgb(155, 0, 0);">Kimi
                                <strong>Räikkönen</strong> <span>alfa romeo</span>
                            </td>
                            <td class="gap"><span>+1 lap</span></td>
                        </tr>
                        <tr class="driver">
                            <td class="position">10</td>
                            <td class="driver" style="border-left: 4px solid rgb(70, 155, 255);">Alexander
                                <strong>Albon</strong> <span>toro rosso</span>
                            </td>
                            <td class="gap"><span>+1 lap</span></td>
                        </tr>
                        <tr class="driver">
                            <td class="position">11</td>
                            <td class="driver" style="border-left: 4px solid rgb(189, 158, 87);">Romain
                                <strong>Grosjean</strong> <span>haas</span>
                            </td>
                            <td class="gap"><span>+1 lap</span></td>
                        </tr>
                        <tr class="driver">
                            <td class="position">12</td>
                            <td class="driver" style="border-left: 4px solid rgb(245, 150, 200);">Lance
                                <strong>Stroll</strong> <span>racing point</span>
                            </td>
                            <td class="gap"><span>+1 lap</span></td>
                        </tr>
                        <tr class="driver">
                            <td class="position">13</td>
                            <td class="driver" style="border-left: 4px solid rgb(189, 158, 87);">Kevin
                                <strong>Magnussen</strong> <span>haas</span>
                            </td>
                            <td class="gap"><span>+1 lap</span></td>
                        </tr>
                        <tr class="driver">
                            <td class="position">14</td>
                            <td class="driver" style="border-left: 4px solid rgb(255, 135, 0);">Carlos
                                <strong>Sainz</strong> <span>mclaren</span>
                            </td>
                            <td class="gap"><span>+1 lap</span></td>
                        </tr>
                        <tr class="driver">
                            <td class="position">15</td>
                            <td class="driver" style="border-left: 4px solid rgb(155, 0, 0);">Antonio
                                <strong>Giovinazzi</strong> <span>alfa romeo</span>
                            </td>
                            <td class="gap"><span>+1 lap</span></td>
                        </tr>
                        <tr class="driver">
                            <td class="position">16</td>
                            <td class="driver" style="border-left: 4px solid rgb(255, 255, 255);">George
                                <strong>Russell</strong> <span>williams</span>
                            </td>
                            <td class="gap"><span>+2 laps</span></td>
                        </tr>
                        <tr class="driver">
                            <td class="position">17</td>
                            <td class="driver" style="border-left: 4px solid rgb(255, 255, 255);">Robert
                                <strong>Kubica</strong> <span>williams</span>
                            </td>
                            <td class="gap"><span>+2 laps</span></td>
                        </tr>
                        <tr class="driver">
                            <td class="position">18</td>
                            <td class="driver" style="border-left: 4px solid rgb(255, 135, 0);">Lando
                                <strong>Norris</strong> <span>mclaren</span>
                            </td>
                            <td class="gap"><span>DNF</span></td>
                        </tr>
                        <tr class="driver">
                            <td class="position">19</td>
                            <td class="driver" style="border-left: 4px solid rgb(70, 155, 255);">Daniil
                                <strong>Kvyat</strong> <span>toro rosso</span>
                            </td>
                            <td class="gap"><span>DNF</span></td>
                        </tr>
                        <tr class="driver">
                            <td class="position">20</td>
                            <td class="driver" style="border-left: 4px solid rgb(255, 245, 0);">Nico
                                <strong>Hulkenberg</strong> <span>renault</span>
                            </td>
                            <td class="gap"><span>DNF</span></td>
                        </tr>
                    </table>
                    <!-- Standings end -->
                </div>
            </div>
        </div>
    </div>
</section>


<section class="how-work py-3 py-md-5">
    <div class="overlay py-3 py-md-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 mb-3 mb-md-0">
                    <img src="images/img1@2x.png" class="w-100" alt="about-content-img">
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="body-inner text-center">
                        <h1>
                            How it works
                        </h1>
                        <ul class="nav justify-content-center mt-4 mt-lg-5">
                            <li class="nav-item">
                                <div class="sr-num">
                                    1
                                </div>
                                <p>
                                    Open an account with as little as £1,500
                                </p>
                            </li>
                            <li class="nav-item">
                                <div class="sr-num">
                                    2
                                </div>
                                <p>
                                    We manage your trading account using our state of the art statistical analysis A.I.
                                </p>
                            </li>
                            <li class="nav-item">
                                <div class="sr-num">
                                    3
                                </div>
                                <p>
                                    Get monthly dividends paid into your account every month.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="moto-index">
    <div class="overlay">
        <div class="container-fluid px-0">

            <div class="row align-item-center mx-0">
                <div class="col-md-6 col-lg-5 px-0">
                    <img src="images/img2.png" class="w-100 h-100 index-img" alt="moto-img">
                </div>
                <div class="col-md-6 col-lg-7 px-0">
                    <div class="moto-index-content text-center h-100 d-flex align-items-center justify-content-center">

                        <div class="inner">
                            <h1>
                                To Meet Todays challenges
                            </h1>
                            <p>
                                We have created a state of the art Statistical Analysis A.I. that deciphers racing data
                                from various motorsports to place trades on trading exchanges that allow us to always be
                                in pole position.
                            </p>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-6 col-lg-4 px-1">
                                    <div class="card">
                                        Efficiency
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4 px-1">
                                    <div class="card">
                                        Security
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4 px-1">
                                    <div class="card">
                                        Experience
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4 px-1">
                                    <div class="card">
                                        Transparency
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4 px-1">
                                    <div class="card">
                                        Reliable
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4 px-1">
                                    <div class="card">
                                        Compliance
                                    </div>
                                </div>
                            </div>

                            <a href="register.php" class="btn btn-primary mt-5 px-4">
                                OPEN ACCOUNT <i class="bi bi-arrow-right ml-4"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="features">
    <div class="overlay">
        <div class="container">
            <div class="row justify-content-center py-4">
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card h-100">
                        <h1>Trading</h1>
                        <p>
                            Our trading department is a carefully selected team of computer scientists, professional
                            traders, data analysts and expert arithmeticians who alongside our Statistical Analysis A.I.
                            interpret race data, track data, weather and engineering data to help us place the most
                            accurate trades in Formula 1, MotoGP and many more.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card h-100">
                        <h1>Technology</h1>
                        <p>
                            Moto Index have developed our own Statistical Analysis Artificial Intelligence that computes
                            over 500 different data streams to predict outcomes in motorsport events across the globe.
                            This technology alongside our team of experts allows us to ensure that we are placing trades
                            that keep us at the top of the grid.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card h-100">
                        <h1>Trust</h1>
                        <p>
                            Our company brings together experts in analysis, finance, motosports, A.I. and technology to
                            ensure that our clients have total peace of mind that every aspect of the company is managed
                            and controlled by experienced experts. We also have an in-house compliance team that ensures
                            that you can have total trust in how we trade and manage your account.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row py-4 align-items-center">
                <div class="col-md-6 col-lg-7">
                    <div class="body-inner text-center">
                        <h1>
                            An alternative trading experience based on facts, analysis and expert data tracking.
                        </h1>
                        <ul class="nav justify-content-center mt-4 mt-lg-5">
                            <li class="nav-item">
                                <h2>
                                    119,000
                                </h2>
                                <p>
                                    REGISTERED USERS
                                </p>
                            </li>
                            <li class="nav-item">
                                <h2>
                                    3
                                </h2>
                                <p>
                                    COUNTRIES
                                </p>
                            </li>
                            <li class="nav-item">
                                <h2>
                                    £ 1.1M
                                </h2>
                                <p>
                                    WITHDRAWN EACH <br> MONTH
                                </p>
                            </li>
                        </ul>


                        <a href="register.php" class="btn btn-primary mt-5 px-4">
                            PLAY NOW <i class="bi bi-arrow-right ml-4"></i>
                        </a>

                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <img src="images/img4.png" class="w-100" alt="about-content-img">
                </div>
                </row>
            </div>
        </div>
</section>


<section class="about-moto-index">
    <div class="overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6">
                    <div class="about-inner position-relative text-center">
                        <h1>
                            About Moto index
                        </h1>

                        <p>
                            Moto Index have designed, developed and integrated a Statistical Analysis A.I. that
                            constantly monitors parameters in motorsport events such as vehicle analysis, tyre wear,
                            track conditions, driver traits and engine diagnostics. This data then is then interpreted
                            into trades that our highly skilled team can place on trading exchanges using an approach
                            that has been tried and tested to proven success over the past 4 years.
                        </p>

                        <a href="register.php" class="btn btn-light px-4" id="contact-t">
                            REGISTER NOW <i class="bi bi-arrow-right ml-4"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-us" id="contact">
    <div class="overlay">
        <div class="container">
            <div class="contact-us-area bg-white">
                <div class="row">

                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div
                            class="section-right d-flex align-items-center justify-content-center h-100 position-relative">
                            <img class="img-1" src="images/circle3.svg" alt="circle-img">
                            <img class="img-2" src="images/circles2.svg" alt="circle-img">
                            <div class="inner-content">
                                <div>
                                    <ul class="nav">
                                        <li class="nav-item px-1">
                                            <i class="bi bi-envelope-open-fill mr-3"></i>
                                        </li>
                                        <li class="nav-item px-1">
                                            info@motoindex.com
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="nav">
                                        <li class="nav-item px-1">
                                            <i class="bi bi-telephone-fill mr-3"></i>
                                        </li>
                                        <li class="nav-item px-1">
                                            0800 915 3215
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="nav">
                                        <li class="nav-item px-1">
                                            <i class="bi bi-geo-alt-fill mr-3"></i>
                                        </li>
                                        <li class="nav-item px-1">
                                            World Trade Center 6 Bayside Road Gibraltar GX11 1AA
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-form">
                            <h1>
                                Contact Us
                            </h1>
                            <p>
                                We would love to hear from you at Moto Index
                            </p>

                            <form class="site-form" action="">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" name="fname" class="form-control">
                                    <div class="text-danger fname-error"></div>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control">
                                    <div class="text-danger email-error"></div>
                                </div>

                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" name="subject" class="form-control">
                                    <div class="text-danger subject-error"></div>
                                </div>

                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea rows="" name="msg" class="form-control"></textarea>
                                    <div class="text-danger message-error"></div>
                                </div>
                                <div class="row g-4">
                                    <div class="col-md-12 mb-3">
                                        <div class="g-recaptcha"
                                            data-sitekey="6Lf1j6cfAAAAAADI-9p5n1y7vPr8NMQJeFdG6W8a"></div>
                                        <div class="text-danger captcha-error"> </div>
                                    </div>
                                </div>

                                <div class="form-group mt-4">
                                    <button type="button" id="submit-form" class="form-control btn-submit btn">
                                        Send Message <i id="ic_icon" class="bi bi-arrow-right ml-4"></i>
                                        <span class="spinner-border spinner-border-sm mt-2 ms-2"></span>
                                    </button>
                                </div>

                                <div class="form-submit-msg" id="success-msg">
                                    <div class="message-content text-center">
                                        <p>
                                            <img class="mb-3" src="images/ic_success.svg" alt="success-icon">
                                        </p>
                                        <h4>
                                            Thank You!
                                        </h4>
                                        <p>
                                            We have received your submission.
                                        </p>
                                        <p>
                                            Our Team will get back to you very soon
                                        </p>
                                    </div>
                                </div>
                                <div class="form-submit-msg" id="fail-msg">
                                    <div class="message-content text-center">
                                        <p>
                                            <img class="mb-3" src="images/ic_failed.svg" alt="success-icon">
                                        </p>
                                        <h4>
                                            Sorry!
                                        </h4>
                                        <p>
                                            Something went wrong.
                                        </p>
                                        <p>
                                            Please try again
                                        </p>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>