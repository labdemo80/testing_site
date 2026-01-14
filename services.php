<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/navbar.php'; ?>

<style>
:root{
    --primary:#0f766e;
    --secondary:#10b981;
    --accent:#047857;
    --text:#1f2933;
    --muted:#6b7280;
}

/* ================= GLOBAL ================= */
body{
    font-family:'Inter',sans-serif;
    background:#f8fffd;
    color:var(--text);
}

/* ================= HERO ================= */
.services-hero{
    position:relative;
    min-height:70vh;
    padding-top:140px; /* FIX navbar overlap */
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
    overflow:hidden;
    color:#fff;
    background:linear-gradient(270deg,var(--primary),var(--secondary),var(--accent));
    background-size:600% 600%;
    animation:gradientShift 20s ease infinite;
}

@keyframes gradientShift{
    0%{background-position:0% 50%;}
    50%{background-position:100% 50%;}
    100%{background-position:0% 50%;}
}

/* Floating shapes */
.hero-shape{
    position:absolute;
    border-radius:50%;
    opacity:0.25;
    filter:blur(60px);
    animation:float 20s ease-in-out infinite alternate;
}
.shape1{width:260px;height:260px;background:var(--secondary);top:10%;left:15%;}
.shape2{width:340px;height:340px;background:var(--accent);top:50%;left:65%;}
.shape3{width:220px;height:220px;background:var(--primary);top:70%;left:35%;}

@keyframes float{
    50%{transform:translateY(-25px) rotate(45deg);}
}

/* Hero content */
.hero-content h1{
    font-size:clamp(2.4rem,5vw,3rem);
    font-weight:800;
}
.hero-content p{
    font-size:1.1rem;
    max-width:720px;
    margin:18px auto 26px;
    opacity:.95;
}
.hero-content .btn{
    padding:14px 42px;
    border-radius:50px;
    font-weight:600;
    background:#fff;
    color:var(--primary);
    border:none;
}
.hero-content .btn:hover{
    background:#f0fdfa;
    transform:translateY(-3px);
}
.microcopy{
    margin-top:10px;
    font-size:.9rem;
    opacity:.85;
}

/* Waves */
.hero-wave{
    position:absolute;
    bottom:0;
    left:0;
    width:100%;
    height:100px;
}
.hero-wave path{
    filter:drop-shadow(0 6px 14px rgba(0,0,0,.08));
}

/* ================= SERVICES ================= */
.services-section{
    padding:80px 0;
}
.section-title{
    font-size:2.4rem;
    font-weight:800;
    color:var(--accent);
}
.section-subtitle{
    max-width:780px;
    margin:16px auto 50px;
    color:var(--muted);
    font-size:1.1rem;
}

.service-cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
    gap:28px;
}
.service-card{
    background:linear-gradient(135deg,#fff,#f0fdfa);
    padding:32px 28px;
    border-radius:24px;
    text-align:center;
    box-shadow:0 16px 45px rgba(0,0,0,.08);
    transition:.35s;
}
.service-card:hover{
    transform:translateY(-8px);
    box-shadow:0 30px 70px rgba(0,0,0,.12);
}
.service-icon{
    font-size:2rem;
    margin-bottom:16px;
}
.service-card h3{
    font-size:1.2rem;
    font-weight:700;
    color:var(--primary);
    margin-bottom:12px;
}

/* ================= TIMELINE ================= */
.healing-journey{
    padding:90px 20px;
    background:#fff;
}

.timeline{
    position:relative;
    max-width:1000px;
    margin:60px auto 0;
}
.timeline::before{
    content:'';
    position:absolute;
    left:50%;
    top:0;
    width:3px;
    height:100%;
    background:linear-gradient(var(--primary),var(--secondary));
    transform:translateX(-50%);
}

.timeline-item{
    position:relative;
    width:50%;
    padding:20px 40px;
}
.timeline-item.left{left:0;text-align:right;}
.timeline-item.right{left:50%;text-align:left;}

.timeline-card{
    background:linear-gradient(135deg,#fff,#f0fdfa);
    padding:22px 26px;
    border-radius:18px;
    box-shadow:0 18px 45px rgba(0,0,0,.08);
    display:inline-block;
    max-width:380px;
}
.timeline-card h4{
    font-weight:700;
    color:var(--primary);
    margin-bottom:8px;
}

.timeline-item::after{
    content:'';
    position:absolute;
    top:35px;
    width:18px;
    height:18px;
    background:var(--secondary);
    border-radius:50%;
    border:4px solid #fff;
    box-shadow:0 0 0 4px rgba(16,185,129,.2);
}
.timeline-item.left::after{right:-9px;}
.timeline-item.right::after{left:-9px;}

/* Mobile */
@media(max-width:768px){
    .timeline::before{left:20px;}
    .timeline-item{
        width:100%;
        left:0;
        padding-left:60px;
        text-align:left;
    }
    .timeline-item::after{left:11px;}
}
</style>

<main>

<!-- HERO -->
<section class="services-hero">
    <span class="hero-shape shape1"></span>
    <span class="hero-shape shape2"></span>
    <span class="hero-shape shape3"></span>

    <div class="container hero-content">
        <h3>Compassionate Therapy for a Healthier Mind</h3>
        <p>Confidential, evidence-based support to help you feel grounded, confident, and emotionally balanced.</p>
        <a href="booksession.php" class="btn">Book a Session</a>
        <p class="mt-4"></p>
    </div>

    <svg class="hero-wave" viewBox="0 0 1440 120" preserveAspectRatio="none">
        <path d="M0,40 C360,90 1080,0 1440,60 L1440,120 L0,120 Z" fill="rgba(255,255,255,0.95)"/>
        <path d="M0,60 C360,10 1080,110 1440,50 L1440,120 L0,120 Z" fill="rgba(255,255,255,0.75)"/>
    </svg>
</section>

<!-- SERVICES -->
<section class="services-section">
    <div class="container text-center">
        <h2 class="section-title">My Services</h2>
        <p class="section-subtitle">
            Online therapy, counseling, and growth-oriented programs supporting healing and long-term wellbeing.
        </p>

        <div class="service-cards">
            <div class="service-card">
                <div class="service-icon">🧠</div>
                <h3>Anxiety, Depression & OCD</h3>
                <p>CBT, REBT & mindfulness-based therapy.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">❤️</div>
                <h3>Relationship & Family Counseling</h3>
                <p>Support for communication and emotional conflicts.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🎓</div>
                <h3>Academic & Performance Stress</h3>
                <p>Managing exam pressure and focus issues.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🌊</div>
                <h3>Grief & Trauma Healing</h3>
                <p>Processing loss and emotional recovery.</p>
            </div>
        </div>
    </div>
</section>

<!-- TIMELINE -->
<section class="healing-journey">
    <h2 class="section-title text-center">Your Healing Journey</h2>
    <p class="section-subtitle text-center">A gentle, structured therapeutic process.</p>

    <div class="timeline">
        <div class="timeline-item left">
            <div class="timeline-card">
                <h4>🌱 Awareness</h4>
                <p>Understanding emotional patterns.</p>
            </div>
        </div>

        <div class="timeline-item right">
            <div class="timeline-card">
                <h4>🌿 Healing</h4>
                <p>Processing unresolved emotions.</p>
            </div>
        </div>

        <div class="timeline-item left">
            <div class="timeline-card">
                <h4>🌼 Growth</h4>
                <p>Building resilience and strength.</p>
            </div>
        </div>

        <div class="timeline-item right">
            <div class="timeline-card">
                <h4>🌳 Transformation</h4>
                <p>Living with clarity and balance.</p>
            </div>
        </div>
    </div>
</section>

</main>

<?php require_once 'includes/footer.php'; ?>
