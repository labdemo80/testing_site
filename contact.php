<?php 
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Hero Section for Contact Page -->
<section class="position-relative text-white text-center py-5" style="background: linear-gradient(rgba(42,157,143,0.85), rgba(42,157,143,0.85)), url('assets/img/contact-hero.jpg'); background-size: cover; background-position: center;">
    <div class="container py-5">
        <h1 class="display-4 fw-bold">Get in Touch</h1>
        <p class="lead">Take the first step toward emotional well-being. I'm here to support you.</p>
    </div>
</section>

<div class="container py-5">
    <div class="row g-5 justify-content-center">

        <!-- Contact Information (Left Grid) -->
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 h-100 bg-white">
                <div class="card-body p-5">
                    <h3 class="section-title mb-4">Contact Details</h3>
                    
                    <div class="mb-4">
                        <h5 class="fw-bold text-primary"><i class="bi bi-building me-2"></i> Clinic</h5>
                        <p class="mb-0">
                            <strong>Feeling Good – Therapy & Well-Being Center</strong><br>
                            Vrajbhoomi Complex, B-102,<br>
                            New Link Road, Laljipada,<br>
                            Kandivali West, Mumbai,<br>
                            Maharashtra 400067
                        </p>
                    </div>

                    <div class="mb-4">
                        <h5 class="fw-bold text-primary"><i class="bi bi-telephone-fill me-2"></i> Phone</h5>
                        <p class="mb-0">
                            <a href="tel:7304698108" class="text-decoration-none">7304698108</a>
                        </p>
                    </div>

                    <div class="mb-4">
                        <h5 class="fw-bold text-primary"><i class="bi bi-envelope-fill me-2"></i> Email</h5>
                        <p class="mb-0">
                            <a href="mailto:info@feelinggood.co.in" class="text-decoration-none">info@feelinggood.co.in</a>
                        </p>
                    </div>

                    <div class="mb-4">
                        <h5 class="fw-bold text-primary"><i class="bi bi-globe me-2"></i> Online Sessions</h5>
                        <p class="mb-0">Available via Zoom / Google Meet</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form (Right Grid) -->
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 h-100 bg-white">
                <div class="card-body p-5">
                    <h3 class="section-title mb-4">Send a Message</h3>
                    
                    <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Thank you!</strong> Your message has been sent successfully. I'll get back to you soon.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php elseif (isset($_GET['status']) && $_GET['status'] === 'error'): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Oops!</strong> Something went wrong. Please try again.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>

                    <form action="forms/process-contact.php" method="POST">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="name" class="form-label fw-bold">Full Name *</label>
                                <input type="text" name="name" id="name" class="form-control form-control-lg" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-bold">Email Address *</label>
                                <input type="email" name="email" id="email" class="form-control form-control-lg" required>
                            </div>
                        </div>

                        <div class="row g-4 mt-2">
                            <div class="col-md-6">
                                <label for="phone" class="form-label fw-bold">Phone (Optional)</label>
                                <input type="text" name="phone" id="phone" class="form-control form-control-lg">
                            </div>
                            <div class="col-md-6">
                                <label for="subject" class="form-label fw-bold">Subject</label>
                                <select name="subject" id="subject" class="form-select form-select-lg">
                                    <option value="general">General Inquiry</option>
                                    <option value="booking">Book a Session</option>
                                    <option value="workshop">Workshop Information</option>
                                    <option value="gift">Gift a Session</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-4">
                            <label for="message" class="form-label fw-bold">Your Message *</label>
                            <textarea name="message" id="message" rows="8" class="form-control form-control-lg" placeholder="How can I support you today?" required></textarea>
                        </div>

                        <div class="mt-4 text-center">
                            <button type="submit" class="btn btn-primary btn-lg px-5 shadow">Send Message</button>
                        </div>
                    </form>

                    <div class="mt-4 text-center text-muted small">
                        <p>Your information is confidential and will only be used to respond to your inquiry.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Map & Emergency Box (Full Width Below the Two Grids) -->
    <div class="row justify-content-center mt-5">
        <div class="col-lg-12">
            <div class="card shadow-lg border-0">
                <div class="card-body p-5">
                    <div class="row g-5">

                        <!-- Location Map -->
                        <div class="col-lg-8">
                            <h5 class="fw-bold text-primary mb-3"><i class="bi bi-geo-alt-fill me-2"></i> Location Map</h5>
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.437295467899!2d72.837711!3d19.209147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b6e8f4b0138b%3A0x1234567890abcdef!2sVraj%20Bhoomi%20Complex!5e0!3m2!1sen!2sin!4v1734000000000" 
                                width="100%" 
                                height="400" 
                                style="border:0; border-radius: 16px;" 
                                allowfullscreen="" 
                                loading="lazy">
                            </iframe>
                        </div>

                        <!-- Emergency Helplines -->
                        <div class="col-lg-4">
                            <div class="h-100 d-flex align-items-center">
                                <div class="p-4 bg-light rounded border-start border-danger border-5 w-100">
                                    <h5 class="fw-bold text-danger"><i class="bi bi-exclamation-triangle-fill me-2"></i> In Case of Emergency</h5>
                                    <p class="small text-muted mb-3">
                                        Please note: I may not be available immediately during a crisis. For urgent support, kindly reach out to the following dedicated helplines:
                                    </p>
                                    <ul class="list-unstyled small mb-0">
                                        <li class="mb-2"><strong>AASRA Helpline:</strong> 91-9820466726</li>
                                        <li class="mb-2"><strong>Vandrevala Foundation:</strong> 1860-266-2345 / 999666555</li>
                                        <li class="mb-2"><strong>iCall Helpline:</strong> 9372048501 / 022-25521111</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Elegant Quick Action Buttons (Refined & Professional) -->
    <div class="row mt-5 g-5 justify-content-center text-center">
        <div class="col-md-4">
            <a href="tel:7304698108" class="btn btn-outline-primary btn-lg w-100 shadow-sm d-flex align-items-center justify-content-center" style="height: 80px; font-size: 1.1rem;">
                <i class="bi bi-telephone-fill me-3 fs-4"></i> Call Now
            </a>
        </div>
        <div class="col-md-4">
            <a href="mailto:info@feelinggood.co.in" class="btn btn-outline-primary btn-lg w-100 shadow-sm d-flex align-items-center justify-content-center" style="height: 80px; font-size: 1.1rem;">
                <i class="bi bi-envelope-fill me-3 fs-4"></i> Email Me
            </a>
        </div>
        <div class="col-md-4">
            <a href="https://forms.gle/zEVpjkv8t8a8xk8y9" target="_blank" class="btn btn-outline-success btn-lg w-100 shadow-sm d-flex align-items-center justify-content-center" style="height: 80px; font-size: 1.1rem;">
                <i class="bi bi-gift-fill me-3 fs-4"></i> Gift a Session
            </a>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>