<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/navbar.php'; ?>

<!-- ================= HERO ================= -->
<section class="gallery-hero text-white text-center d-flex align-items-center">
    <div class="container">
        <span class="hero-tag mb-3 d-inline-block">A Safe Space</span>
        <h1 class="display-4 fw-bold mb-3">Gallery</h1>
        <p class="lead fs-4 opacity-90">
            A gentle glimpse into healing, growth & connection
        </p>
    </div>
</section>

<!-- ================= HEALING JOURNEY ================= -->
<section class="container py-5">
    <div class="text-center mb-5">
        <h2 class="section-title">A Gentle Healing Journey</h2>
        <p class="lead text-muted mt-3">
            Healing unfolds naturally — at your pace, in your own way.
        </p>
    </div>

    <div class="row g-4">
        <?php
        $journey = [
            ["🌱","Awareness","Understanding emotions, patterns, and inner experiences."],
            ["🌸","Healing","Releasing emotional blocks with compassionate support."],
            ["☀️","Clarity","Gaining confidence, balance, and emotional strength."],
            ["💫","Growth","Living with calm, purpose, and emotional resilience."]
        ];
        foreach($journey as $step){ ?>
            <div class="col-md-6 col-lg-3">
                <div class="metaphor-card">
                    <div class="icon"><?= $step[0] ?></div>
                    <h5><?= $step[1] ?></h5>
                    <p><?= $step[2] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<!-- ================= EXPERIENCE GALLERY ================= -->
<section class="container py-5">
    <div class="text-center mb-5">
        <h2 class="section-title">How It Feels</h2>
        <p class="lead text-muted mt-3">
            More than a space — an experience of safety, care, and trust.
        </p>
    </div>

    <div class="row g-4">

        <!-- Clinic -->
        <div class="col-md-6 col-lg-4">
            <div class="experience-card">
                <img src="assets/images/clinic/clinic1.jpg" alt="">
                <div class="experience-overlay">
                    <h5>🏡 Safety & Comfort</h5>
                    <p>A calm space where you can simply be yourself.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="experience-card">
                <img src="assets/images/clinic/clinic2.jpeg" alt="">
                <div class="experience-overlay">
                    <h5>🤍 Feeling Heard</h5>
                    <p>Sessions built on empathy and non-judgment.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="experience-card">
                <img src="assets/images/clinic/clinic3.jpeg" alt="">
                <div class="experience-overlay">
                    <h5>🌿 Calm & Stillness</h5>
                    <p>An environment designed for emotional grounding.</p>
                </div>
            </div>
        </div>

        <!-- Workshops -->
        <div class="col-12 mt-4">
            <h4 class="gallery-subtitle">🤝 Workshops & Group Healing</h4>
        </div>

        <div class="col-md-6">
            <div class="experience-card workshop-card">
                <img src="assets/images/workshop/workshop1.jpeg" alt="">
                <div class="experience-overlay">
                    <h5>Shared Healing</h5>
                    <p>Group spaces that foster connection and learning.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="experience-card workshop-card">
                <img src="assets/images/workshop/workshop2.jpeg" alt="">
                <div class="experience-overlay">
                    <h5>Growth Together</h5>
                    <p>Workshops focused on awareness and empowerment.</p>
                </div>
            </div>
        </div>

        <!-- Online -->
        <div class="col-12 mt-4">
            <h4 class="gallery-subtitle">💻 Online Therapy</h4>
        </div>

        <div class="col-md-4">
            <div class="experience-card short">
                <img src="assets/images/workshop/workshop3.jpeg" alt="">
                <div class="experience-overlay">
                    <h5>Online Therapy</h5>
                    <p>Healing without distance — safe & confidential.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="experience-card short">
                <img src="assets/images/workshop/online_session.jpeg" alt="">
                <div class="experience-overlay">
                    <h5>Virtual Sessions</h5>
                    <p>Support from the comfort of your home.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="experience-card short">
                <img src="assets/images/workshop/online_session2.jpeg" alt="">
                <div class="experience-overlay">
                    <h5>Guided Online Care</h5>
                    <p>Secure, calm, and compassionate therapy.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ================= REFLECTION ================= -->
<section class="container py-5">
    <div class="reflection-box text-center mx-auto">
        <p class="reflection-text">
            “Healing does not mean the pain never existed.  
            It means the pain no longer controls your life.”
        </p>
        <span class="reflection-author">— A gentle reminder</span>
    </div>
</section>

<!-- ================= CTA ================= -->
<section class="container py-5">
    <div class="cta-box text-center">
        <h2 class="fw-bold mb-3">Ready to Begin Your Journey?</h2>
        <p class="lead text-muted mb-4">
            A safe, supportive space awaits you.
        </p>
        <a href="index.php#contact" class="btn btn-success btn-lg px-5">
            Book a Session
        </a>
    </div>
</section>

<!-- ================= STYLES ================= -->
<style>
:root{
    --primary:#2a9d8f;
    --soft:#f3faf7;
}

/* HERO */
.gallery-hero{
    min-height:70vh;
    background:
        linear-gradient(rgba(34,115,107,0.85), rgba(34,115,107,0.85)),
        url('assets/img/gallery-hero.jpg');
    background-size:cover;
    background-position:center;
}
.hero-tag{
    background:rgba(255,255,255,0.18);
    padding:8px 18px;
    border-radius:30px;
    backdrop-filter: blur(6px);
}

/* TITLES */
.section-title{
    color:var(--primary);
    position:relative;
}
.section-title::after{
    content:'';
    width:90px;
    height:4px;
    background:linear-gradient(to right,var(--primary),#8fd9c8);
    display:block;
    margin:14px auto 0;
    border-radius:4px;
}
.gallery-subtitle{
    color:#1f6f63;
    font-weight:600;
}

/* METAPHOR */
.metaphor-card{
    background:linear-gradient(135deg,#fff,var(--soft));
    border-radius:24px;
    padding:2.5rem;
    box-shadow:0 20px 45px rgba(0,0,0,.08);
    transition:.4s;
}
.metaphor-card:hover{ transform:translateY(-10px); }

/* EXPERIENCE */
.experience-card{
    position:relative;
    height:320px;
    overflow:hidden;
    border-radius:24px;
    box-shadow:0 20px 45px rgba(0,0,0,.12);
}
.experience-card img{
    width:100%;
    height:100%;
    object-fit:cover;
    animation: calmFloat 6s ease-in-out infinite;
}
.experience-overlay{
    position:absolute;
    inset:0;
    background:linear-gradient(to top,rgba(34,115,107,.95),rgba(34,115,107,.15));
    color:#fff;
    padding:1.8rem;
    display:flex;
    flex-direction:column;
    justify-content:flex-end;
    opacity:0;
    transition:.4s;
}
.experience-card:hover .experience-overlay{ opacity:1; }

/* WORKSHOP SAME HEIGHT */
.workshop-card{ height:360px; }

/* SHORT */
.short{ height:300px; }

/* REFLECTION */
.reflection-box{
    max-width:820px;
    background:#fff;
    padding:3.5rem;
    border-radius:28px;
    box-shadow:0 25px 60px rgba(0,0,0,.08);
}
.reflection-text{ font-size:1.35rem; }

/* CTA */
.cta-box{
    background:#fff;
    padding:4.5rem;
    border-radius:32px;
    box-shadow:0 30px 70px rgba(0,0,0,.12);
}
.btn-success{ background:var(--primary); border:none; }

/* ANIMATION */
@keyframes calmFloat{
    0%,100%{ transform:scale(1); }
    50%{ transform:scale(1.04); }
}

/* GRAIN */
body{
    background-image:radial-gradient(rgba(42,157,143,.035) 1px, transparent 1px);
    background-size:26px 26px;
}
</style>

<?php require_once 'includes/footer.php'; ?>
