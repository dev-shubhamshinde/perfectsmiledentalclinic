<?php $currentPage = 'about'; ?>
<?php include("_header.php") ?>
<title>DentCare - Dental Clinic</title>
<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">About Us</h1>
            <!-- <a href="" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h4 text-white">About</a> -->
        </div>
    </div>
</div>
<!-- Hero End -->


  <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                        <h1 class="display-5 mb-0">The World's Best Dental Clinic That You Can Trust</h1>
                    </div>
                    <h4 class="text-body fst-italic mb-4">Perfect Smile Dental Clinic And Implant Centre</h4>
                    <p class="mb-4">Committed to providing the highest standard of care that you can trust, our team of experienced and compassionate dental professionals offers a comprehensive range of services tailored to your individual needs. Our state-of-the-art facilities and patient-centered approach ensure a comfortable and top-tier dental experience. Your oral health and well-being are our utmost priority, and we are dedicated to delivering excellence in dentistry</p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Positive Patient Reviews</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Convenient Location</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <a href="contact.html" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">Contact Us</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/aboutus.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


<!-- Newsletter Start -->
<div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
    <div class="container">
        <div class="bg-primary p-5">
            <form action="subscribeNewslatter.php" method="POST" class="mx-auto" style="max-width: 600px;">
                <h2 class="mb-2 display-6">Subscribe to our newsletter</h2>
                <p class="mb-3 text-dark">monthly digest of what's new and exciting from us.
                </p>
                <div class="input-group">
                    <input type="email" class="form-control border-white p-3" name="subEmail" placeholder="Your Email Address">
                    <button type="submit" name="subscribeNewslatter" class="btn btn-dark px-4">Subscribe</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Newsletter End -->

<?php include("_footer.php") ?>