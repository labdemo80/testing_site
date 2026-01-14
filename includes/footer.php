<style>
:root{
    --clinic-dark:#0f766e;
    --clinic-main:#10b981;
    --clinic-soft:#ecfdf5;
    --clinic-border:#a7f3d0;
    --clinic-muted:#4b5563;
}

/* ================= CLINIC FOOTER ================= */
.site-footer{
    background: linear-gradient(180deg, #f7fdfb, #ffffff);
    border-top: 2px solid var(--clinic-border);
    padding: 60px 0 40px;
    color: var(--clinic-muted);
}

/* Headings */
.site-footer h4,
.site-footer h5{
    color: var(--clinic-dark);
    letter-spacing: .2px;
}

/* Accent text */
.text-gold{
    color: var(--clinic-main) !important;
    font-weight: 600;
}
.text-divine{
    color: var(--clinic-dark) !important;
}

/* Description */
.footer-desc{
    color:#374151;
    line-height:1.75;
    font-size:1.02rem;
    max-width:500px;
}

/* Contact */
.contact-info a{
    color: var(--clinic-main);
    font-weight: 600;
    transition: color .25s ease;
}
.contact-info a:hover{
    color: var(--clinic-dark);
}

/* Trust list */
.footer-list li{
    font-size:1.02rem;
    color:#374151;
}

/* ================= MAP CARD ================= */
.map-wrapper{
    border-radius:20px;
    overflow:hidden;
    border:1px solid var(--clinic-border);
    background:#fff;
    box-shadow:0 14px 30px rgba(0,0,0,.08);
    transition:.3s ease;
}

.map-wrapper:hover{
    transform:translateY(-3px);
    box-shadow:0 22px 45px rgba(0,0,0,.10);
}

.map-wrapper iframe{
    width:100%;
    height:230px;
    border:0;
}

/* Copyright */
.site-footer .small{
    color:#6b7280;
}

/* ================= MOBILE ================= */
@media(max-width:992px){
    .site-footer{text-align:center}
    .footer-desc,
    .footer-list,
    .contact-info{margin:auto}
}

@media(max-width:576px){
    .map-wrapper iframe{height:210px}
}
</style>
<footer class="site-footer mt-auto">
    <div class="container">
        <div class="row gy-5 align-items-start">

            <!-- BRAND & CONTACT -->
            <div class="col-lg-5">
                <h4 class="fw-bold mb-3 text-divine">
                    Feeling Good<br>
                    <span class="text-gold">Therapy & Well-Being Center</span>
                </h4>

                <p class="footer-desc mb-4">
                    Empowering emotional balance, healing, and personal growth
                    through compassionate, ethical, and transformative therapy.
                </p>

                <div class="contact-info">
                    <p class="mb-3">
                        <i class="bi bi-envelope-fill text-gold me-2"></i>
                        <strong>Email</strong><br>
                        <a href="mailto:info@feelinggood.co.in" class="text-decoration-none">
                            info@feelinggood.co.in
                        </a>
                    </p>

                    <p class="mb-4">
                        <i class="bi bi-telephone-fill text-gold me-2"></i>
                        <strong>Phone</strong><br>
                        <a href="tel:917304698108" class="text-decoration-none">
                            +91 7304698108
                        </a>
                    </p>
                </div>

                <p class="small text-muted mb-0 mt-4">
                    © <?php echo date('Y'); ?> Feeling Good. All rights reserved.
                </p>
            </div>

            <!-- TRUST POINTS -->
            <div class="col-lg-3">
                <h5 class="fw-bold text-divine mb-4">Why Choose Us</h5>
                <ul class="footer-list list-unstyled">
                    <li class="mb-3 d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-gold me-2 fs-5"></i>
                        Over 1000+ Transformative Sessions
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-gold me-2 fs-5"></i>
                        International Certified Therapist
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-gold me-2 fs-5"></i>
                        100% Confidential & Safe Space
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-gold me-2 fs-5"></i>
                        Judgment-Free Environment
                    </li>
                </ul>
            </div>

            <!-- MAP -->
            <div class="col-lg-4">
                <h5 class="fw-bold text-divine mb-4">Visit Our Center</h5>

                <div class="map-wrapper">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.7916867847343!2d72.83395809999999!3d19.2042988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b6cc1fa38cc5%3A0xe811539c971eafcc!2sDr.%20Kiran's%20Mind%20Center!5e0!3m2!1sen!2sin!4v1766217185180!5m2!1sen!2sin"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        allowfullscreen>
                    </iframe>
                </div>

                <p class="small text-muted mt-3 text-center">
                    Feeling Good Therapy & Well-Being Center<br>
                    Near Dhankurvadi Metro Station, Kandivali West, Mumbai
                </p>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</footer>
</body>
</html>
