<?php 
	$currentPage = 'register'; // current page name....
	$title = 'Register';    
	include 'header.php'; ?>


<?php include 'navbar.php'; ?>


<section class="register-account">
    <div class="overlay py-5">
        <div class="container py-3 py-lg-5">
            <h1 class="text-center">
                Register Account
            </h1>
            <p class="text-center warning">
                All Fields are Required
            </p>
            <div class="row justify-content-center mt-4 mt-lg-5">
                <div class="col-md-8 col-lg-6">
                    <form class="site-form" method="post">
                        <div class="form-group row">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="fname">First Name</label>
                                <input type="text" name="f_name" class="form-control">
                                <div class="text-danger fname-error"></div>
                            </div>
                            <div class="col-md-6">
                                <label for="lname">Last Name</label>
                                <input type="text" name="lname" class="form-control">
                                <div class="text-danger lname-error"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control">
                            <div class="text-danger email-error"></div>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" name="phone" class="form-control">
                            <div class="text-danger phone-error"></div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-12 mb-3">
                                <div class="g-recaptcha" data-sitekey="6Lf1j6cfAAAAAADI-9p5n1y7vPr8NMQJeFdG6W8a"></div>
                                <div class="text-danger captcha-error"> </div>
                            </div>
                        </div>
                        <div class="form-group mt-5">
                            <p>
                                By registering you confirm that you’re 18 years of age or older and agree to the <a
                                    href="#">Terms Conditions </a> and <a href="#"> Privacy Statement.</a>
                            </p>
                        </div>
                        <div class="form-group mt-4">
                            <button type="button" id="register-form" class="form-control btn-submit btn">
                                Register Account <i id="ic_icon" class="bi bi-arrow-right ml-4"></i>
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
</section>


<?php include 'footer.php'; ?>