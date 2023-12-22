<?php $currentPage = 'contact'; ?>
<?php include("_dbconnect.php") ?>
<?php include("_header.php") ?>
<title>DentCare - Dental Clinic</title>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submitContactDetail'])) {
        $fullName = $_POST['fullName'];
        $EmailID = $_POST['EmailID'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $insertContactData = "INSERT INTO `contactus` (`name`, `emailid`, `subject`, `message`)
         VALUES ('$fullName', '$EmailID', '$subject', '$message')";
        $qeryofinsertContactData = mysqli_query($conn, $insertContactData);

        if ($qeryofinsertContactData) {
            echo '
            <script>
                alert("Thanks for connecting with Perfect Smile Dental Clinic And Implant Centre");
                window.location.href = "contact.php";
            </script>
            ';
        } else {
            echo '
                <script>
                    alert("Something wents wrong! Please try again.");
                    window.location.href = "contact.php";
                </script>
                ';

        }
    }
}
?>

<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Contact Us</h1>
            <!-- <a href="" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h4 text-white">Contact</a> -->
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- Contact Start -->
<!-- <div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
                <div class="bg-light rounded h-100 p-5">
                    <div class="section-title">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Contact Us</h5>
                        <h1 class="display-6 mb-4">Feel Free To Contact Us</h1>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Our Office</h5>
                            <span>Location, City, Country</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Email Us</h5>
                            <span>info@example.com</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Call Us</h5>
                            <span>+012 345 6789</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <form>
                    <div class="row g-3">
                        <div class="col-12">
                            <input type="text" class="form-control border-0 bg-light px-4" placeholder="Your Name"
                                style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control border-0 bg-light px-4" placeholder="Your Email"
                                style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subject"
                                style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control border-0 bg-light px-4 py-3" rows="5"
                                placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-4 col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                <iframe class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                    frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div> -->
<!-- Contact End -->

<div class="container">
    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 text-bg-dark rounded-3">
                <div class="bg-light rounded h-100 p-5">
                    <div class="section-title">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Contact Us</h5>
                        <h1 class="display-6 mb-4">Feel Free To Contact Us</h1>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Our Office</h5>
                            <span>17/88, Picnic Spot Road
                                Sector 17, Indira Nagar, Lucknow,
                                Uttar Pradesh 226016, India. <br>
                            </span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Email Us</h5>
                            <span>info@example.com</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Call Us</h5>
                            <span>094150 61340 | 094558 16145 </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-body-tertiary">
                <form action="" method="POST">
                    <div class="row g-3">
                        <div class="col-12">
                            <input type="text" class="form-control border-0 bg-light px-4" name="fullName"
                                placeholder="Your Name" style="height: 55px;" required>
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control border-0 bg-light px-4" name="EmailID"
                                placeholder="Your Email" style="height: 55px;" required>
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control border-0 bg-light px-4" name="subject"
                                placeholder="Subject" style="height: 55px;" required>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control border-0 bg-light px-4 py-3" name="message" rows="5"
                                placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" name="submitContactDetail" type="submit">Send
                                Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <iframe class="position-relative rounded w-100 h-100"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113867.26758041998!2d80.91239652736041!3d26.89231809688371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399958042ef42c15%3A0x7f279a54af634ed5!2sPerfect%20Smile%20Dental%20Clinic%20And%20Implant%20Centre!5e0!3m2!1sen!2sin!4v1698215580379!5m2!1sen!2sin"
        frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
</div>


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