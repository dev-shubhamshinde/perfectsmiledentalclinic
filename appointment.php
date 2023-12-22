<?php include("_header.php") ?>
<title>DentCare - Dental Clinic</title>

<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Appointment</h1>
            <!-- <a href="" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h4 text-white">Appointment</a> -->
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- Appointment Start -->
<div class="container-fluid bg-primary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s"
    style="margin-top: 90px;">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 py-5">
                <div class="py-5">
                    <h1 class="display-5 text-white mb-4">We Are A Certified and Award Winning Dental Clinic You Can
                        Trust</h1>
                    <p class="text-white mb-0">We take pride in being a certified and award-winning dental clinic that
                        you can trust. Our commitment to excellence sets us apart. Your dental health is our top
                        priority, and we're here to provide you with the highest quality care and expertise.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                    data-wow-delay="0.6s">
                    <h1 class="text-white mb-4">Make Appointment</h1>
                    <form action="BookAppointment.php" method="POST">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <select class="form-select bg-light border-0" name="selectedService"
                                    style="height: 55px;" required>
                                    <option disabled selected>Select A Service</option>
                                    <option value="Teeth Whitening">Teeth Whitening</option>
                                    <option value="Teeth Cleaning">Teeth Cleaning</option>
                                    <option value="Quality Brackets">Quality Brackets</option>
                                    <option value="Modern Anesthetic">Modern Anesthetic</option>
                                    <option value="Dental Calculus">Dental Calculus</option>
                                    <option value="Periodontosis">Periodontosis</option>
                                    <option value="Dental Implants">Dental Implants</option>
                                    <option value="Tooth Braces">Tooth Braces</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select bg-light border-0" name="selectedDoctor"
                                    style="height: 55px;" required>
                                    <option disabled selected>Select Doctor</option>
                                    <option value="Dr. Prashant Dwivedi">Dr. Prashant Dwivedi</option>
                                    <option value="Dr. Vijayashree Dwivedi">Dr. Vijayashree Dwivedi</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" name="applicantName" class="form-control bg-light border-0"
                                    placeholder="Your Name" style="height: 55px;" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" name="applicantEmail" class="form-control bg-light border-0"
                                    placeholder="Your Email" style="height: 55px;" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="date" class="form-control bg-light border-0 datetimepicker-input"
                                        placeholder="Appointment Date" name="appoinmentDate" style="height: 55px;"
                                        required
                                        onfocus="(function(el){ el.min = new Date().toISOString().split('T')[0];})(this);">
                                </div>

                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="time" id="time1" data-target-input="nearest">
                                    <input type="time" class="form-control bg-light border-0 datetimepicker-input"
                                        placeholder="Appointment Time" name="appoinmentTime"  style="height: 55px;" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit" name="BookAppoinment">Make
                                    Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->


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