<?php 
	$currentPage = 'about'; // current page name....
	$title = 'About Us';    
	include 'header.php'; ?>
	

<?php include 'navbar.php'; ?>


<secton class="about-banner">
    <div class="overlay py-5">
        <div class="container py-3 py-md-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>
                        MOTO INDEX
                    </h1>
                    <p>
                        <span class="banner-title">
                            About Us
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</secton>


<section class="about-content">
    <div class="overlay py-5">
        <div class="container py-3 py-lg-4">
            <div class="row mb-3 mb-lg-5">
                <div class="col-md-5 col-lg-4 mb-3 mb-md-0">
                    <h1>
                        WHO WE<br> ARE
                    </h1>
                </div>
                <div class="col-md-7 col-lg-8">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 col-lg-7 mb-3 mb-md-0">
                    <h1>
                        OUR <br> VALUES
                    </h1>

                    <ul class="nav about-nav mt-4 mt-md-5">
                        <li class="nav-item px-1 px-sm-2 px-md-3">
                            PASSION
                        </li>
                        <li class="nav-item px-1 px-sm-2 px-md-3">
                            CREATIVITY
                        </li>
                        <li class="nav-item px-1 px-sm-2 px-md-3">
                            OWNERSHIP
                        </li>
                        <li class="nav-item px-1 px-sm-2 px-md-3">
                            FUN
                        </li>
                    </ul>

                </div>
                <div class="col-md-6 col-lg-5">
                    <img src="images/img4.png" class = "w-100" alt="about-content-img">
                </div>
            </div>

        </div>
    </div>
</section>


<?php include 'footer.php'; ?>