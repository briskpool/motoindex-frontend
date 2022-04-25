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
                    <form class = "site-form" action="">
                        <div class="form-group row">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label>First Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label>First Name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group mt-5">
                            <p>
                                By registering you confirm that you’re 18 years of age or older and agree to the <a href = "#">Terms Conditions </a> and <a href = "#"> Privacy Statement.</a>
                            </p>
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class = "form-control btn-submit btn">
                                Register Account <i class="bi bi-arrow-right ml-4"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>