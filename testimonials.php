<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/navbar.php'; ?>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

<style>
:root{
    --primary:#2a9d8f;
    --accent:#1f6f63;
    --bg-soft:#f7fbfa;
    --text:#2f3e3b;
    --muted:#6b7f7b;
    --gold:#f3c96b;
}

/* GLOBAL */
body{
    font-family:'Inter',sans-serif;
    color:var(--text);
    background:#fff;
}
h1,h2,h3,h4{
    font-family:'Playfair Display',serif;
}

/* REVEAL */
.reveal{opacity:0;transform:translateY(30px);transition:.9s ease;}
.reveal.active{opacity:1;transform:none;}

/* ================= HERO ================= */
.testimonial-hero{
    position:relative;
    padding:120px 20px 150px;
    background:linear-gradient(180deg,var(--primary),var(--accent));
    color:#fff;
    text-align:center;
}
.testimonial-hero::after{
    content:'';
    position:absolute;
    inset:0;
    background:
        radial-gradient(circle at 30% 20%, rgba(255,255,255,.12), transparent 40%),
        radial-gradient(circle at 70% 60%, rgba(255,255,255,.08), transparent 45%);
}
.testimonial-hero h1{
    font-size:clamp(2.5rem,5vw,3.2rem);
    font-weight:600;
}
.testimonial-hero p{
    max-width:720px;
    margin:22px auto 0;
    font-size:1.15rem;
    opacity:.95;
}
.hero-wave{
    position:absolute;
    bottom:0;left:0;
    width:100%;height:200px;
}

/* ================= TRUST ================= */
.trust-section{
    background:var(--bg-soft);
    padding:90px 20px;
}
.trust-grid{
    max-width:920px;
    margin:auto;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
    gap:36px;
    text-align:center;
}
.trust-item{
    padding:36px 26px;
    transition:.6s ease;
}
.trust-item:hover{transform:translateY(-8px);}
.trust-icon{font-size:2.2rem;margin-bottom:16px;}
.trust-item h4{color:var(--accent);}
.trust-item p{color:var(--muted);font-size:.95rem;line-height:1.7;}

/* ================= VIDEO ================= */
.video-section{padding:95px 20px;text-align:center;}
.video-grid{
    margin-top:55px;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:34px;
}
.video-card{
    background:#fff;
    border-radius:26px;
    padding:18px;
    box-shadow:0 20px 45px rgba(0,0,0,.08);
    position:relative;
}
.video-card::after{
    content:'';
    position:absolute;
    inset:10px;
    border-radius:18px;
    border:1px solid rgba(42,157,143,.15);
}
.video-card h6{margin-top:16px;color:var(--accent);}

/* ================= WRITTEN TIMELINE ================= */
.written-section{background:var(--bg-soft);padding:95px 20px;}
.reflection-timeline{
    max-width:900px;
    margin:auto;
    position:relative;
}
.reflection-timeline::before{
    content:'';
    position:absolute;
    left:50%;top:0;bottom:0;
    width:2px;
    background:linear-gradient(to bottom, transparent, #cfeae5, transparent);
    transform:translateX(-50%);
}
.reflection-item{display:flex;margin-bottom:60px;}
.reflection-item.left{justify-content:flex-start;}
.reflection-item.right{justify-content:flex-end;}

.reflection-card{
    width:420px;
    background:#fff;
    padding:36px;
    border-radius:30px;
    box-shadow:0 20px 45px rgba(0,0,0,.08);
    position:relative;
}
.reflection-card::before{
    content:'';
    position:absolute;
    top:30px;
    width:14px;height:14px;
    background:var(--primary);
    border-radius:50%;
}
.reflection-item.left .reflection-card::before{right:-44px;}
.reflection-item.right .reflection-card::before{left:-44px;}

.reflection-text{line-height:1.9;font-style:italic;}
.reflection-author{margin-top:22px;font-weight:600;color:var(--accent);}
.reflection-role{font-size:.85rem;color:var(--muted);}

/* mobile timeline */
@media(max-width:768px){
    .reflection-timeline::before{left:12px;}
    .reflection-item{justify-content:flex-start!important;}
    .reflection-card{width:100%;margin-left:28px;}
    .reflection-card::before{left:-28px!important;}
}

/* ================= REFLECTION ================= */
.reflection{
    padding:95px 20px;
    text-align:center;
    color:var(--muted);
    font-size:1.18rem;
    line-height:1.9;
    position:relative;
    overflow:hidden;
}

.chat-bubble{
    position:absolute;
    bottom:-50px;
    font-size:var(--size);
    left:var(--left);
    opacity:0.15;
    animation:float-bubble var(--duration) ease-in-out infinite;
    user-select:none;
    pointer-events:none;
}

@keyframes float-bubble{
    0%{
        transform:translateY(0) scale(1);
        opacity:0.15;
    }
    50%{
        transform:translateY(-60px) scale(1.1);
        opacity:0.25;
    }
    100%{
        transform:translateY(0) scale(1);
        opacity:0.15;
    }
}
/* ================= CTA ================= */
.final-cta{
    background:linear-gradient(180deg,#fff,var(--bg-soft));
    padding:100px 20px;
}
.cta-card{
    max-width:800px;
    margin:auto;
    background:#fff;
    padding:58px 44px;
    border-radius:34px;
    box-shadow:0 28px 60px rgba(0,0,0,.1);
    text-align:center;
    position:relative;
}
.cta-card::after{
    content:'';
    position:absolute;
    inset:-1px;
    border-radius:36px;
    background:linear-gradient(135deg, rgba(42,157,143,.25), transparent);
    z-index:-1;
}
.cta-card h3{color:var(--accent);}
.cta-card p{color:var(--muted);margin:18px auto 30px;}
</style>

<main>

<!-- HERO -->
<section class="testimonial-hero reveal">
    <h1>You’re Not Alone</h1>
    <p>Every story here began with uncertainty — and moved toward clarity and self-trust.</p>
    <svg class="hero-wave" viewBox="0 0 1440 180" preserveAspectRatio="none">
        <path d="M0,60 C360,140 1080,0 1440,90 L1440,180 L0,180 Z" fill="#fff"/>
    </svg>
</section>

<!-- TRUST -->
<section class="trust-section reveal">
    <div class="trust-grid">
        <div class="trust-item"><div class="trust-icon">🌿</div><h4>Safe & Confidential</h4><p>Your story is respected and protected.</p></div>
        <div class="trust-item"><div class="trust-icon">🎓</div><h4>Professional Care</h4><p>Ethical, evidence-based support.</p></div>
        <div class="trust-item"><div class="trust-icon">🤍</div><h4>At Your Pace</h4><p>Healing unfolds gently.</p></div>
    </div>
</section>

<!-- VIDEO -->
<section class="video-section reveal">
    <h2>Hearing It From Them</h2>
    <div class="video-grid">
        <?php foreach(['client1.mp4','client2.mp4','client3.mp4'] as $v): ?>
        <div class="video-card">
            <div class="ratio ratio-16x9 rounded overflow-hidden">
                <video controls preload="metadata">
                    <source src="assets/video/<?= $v ?>" type="video/mp4">
                </video>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- WRITTEN -->
<section class="written-section reveal">
    <div class="reflection-timeline">
        <div class="reflection-item left">
            <div class="reflection-card">
                <p class="reflection-text">My experience has been wonderful. I always feel understood.</p>
                <span class="reflection-author">— T. K.</span>
                <span class="reflection-role">Therapy Client</span>
            </div>
        </div>
        <div class="reflection-item right">
            <div class="reflection-card">
                <p class="reflection-text">I am more sorted and stress-free now. ❤️</p>
                <span class="reflection-author">— Drasti</span>
                <span class="reflection-role">Long-term Client</span>
            </div>
        </div>
        <div class="reflection-item left">
            <div class="reflection-card">
                <p class="reflection-text">This workshop taught me how to stay calm while communicating clearly. It was a powerful first step.</p>
                <span class="reflection-author">— Rahul Gupta</span>
                <span class="reflection-role">Therapy Client</span>
            </div>
        </div>
        <div class="reflection-item right">
            <div class="reflection-card">
                <p class="reflection-text">
The Assertive Communication workshop helped me express myself confidently and step out of my comfort zone.❤️</p>
                <span class="reflection-author">— Neha Gupta</span>
                <span class="reflection-role">Long-term Client</span>
            </div>
        </div>
    </div>
</section>

<!-- REFLECTION WITH FLOATING ICON -->
<section class="reflection reveal" style="position:relative;overflow:hidden;">
    <p>
        Reaching out doesn’t mean you’re broken. It means you’re listening to yourself.
    </p>

    <!-- Floating chat bubbles -->
    <div class="chat-bubble" style="--size:32px;--left:10%;--duration:6s;">💬</div>
    <div class="chat-bubble" style="--size:24px;--left:70%;--duration:5s;">🗨️</div>
    <div class="chat-bubble" style="--size:28px;--left:40%;--duration:7s;">💬</div>
    <div class="chat-bubble" style="--size:20px;--left:25%;--duration:6.5s;">🗨️</div>
    <div class="chat-bubble" style="--size:36px;--left:80%;--duration:8s;">💬</div>
</section>

<!-- CTA -->
<section class="final-cta reveal">
    <div class="cta-card">
        <h3>When you’re ready, support is here</h3>
        <p>A calm conversation can be the beginning of clarity.</p>
        <a href="index.php#contact" class="btn btn-primary btn-lg px-5">Begin Gently</a>
    </div>
</section>

</main>

<script>
document.querySelectorAll('.reveal').forEach(el=>{
    if(el.getBoundingClientRect().top < window.innerHeight-80){
        el.classList.add('active');
    }
});
window.addEventListener('scroll',()=>document.querySelectorAll('.reveal').forEach(el=>{
    if(el.getBoundingClientRect().top < window.innerHeight-80){
        el.classList.add('active');
    }
}));
</script>

<?php require_once 'includes/footer.php'; ?>
