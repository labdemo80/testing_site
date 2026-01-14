<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/navbar.php'; ?>

<style>
:root{
    --primary:#0f766e;
    --secondary:#10b981;
    --soft:#ecfdf5;
    --accent:#047857;
    --text:#1f2933;
    --muted:#6b7280;
}

body{
    font-family:'Inter',sans-serif;
    background:#f8fffd;
    color:var(--text);
}

/* ================= HERO ================= */
.hero-home{
    min-height:92vh;
    background:linear-gradient(135deg,var(--primary),var(--secondary));
    color:#fff;
    display:flex;
    align-items:center;
    text-align:center;
}
.hero-title{
    font-size:clamp(2.6rem,5vw,3.4rem);
    font-weight:800;
    line-height:1.2;
}
.hero-sub{
    font-size:1.15rem;
    max-width:720px;
    margin:18px auto 0;
    opacity:.95;
}
.hero-actions .btn{
    padding:14px 42px;
    border-radius:50px;
    font-weight:600;
}

/* ================= SECTION HEADERS ================= */
.section-title{
    color:#065f46;
    font-weight:700;
}
.section-subtitle{
    max-width:760px;
    margin:auto;
    color:var(--muted);
    font-size:1.05rem;
}

/* ================= GIFT ================= */
.gift-section{
    background:linear-gradient(180deg,#faf7f2,#eef3ee);
    padding:55px 0;
}
.gift-card{
    background:#fff;
    border-radius:22px;
    padding:42px;
    max-width:840px;
    margin:auto;
    text-align:center;
    box-shadow:0 18px 45px rgba(0,0,0,.08);
}
.gift-card h3{color:#065f46;font-weight:700}

/* ================= PROGRAMS ================= */
.program-card{perspective:1200px}
.program-front,.program-back{
    background:#fff;
    border-radius:16px;
    padding:2.2rem;
    height:100%;
    box-shadow:0 12px 38px rgba(0,0,0,.08);
    transition:.8s ease;
    backface-visibility:hidden;
}
.program-back{
    position:absolute;
    inset:0;
    transform:rotateY(180deg);
}
.program-card:hover .program-front{transform:rotateY(180deg)}
.program-card:hover .program-back{transform:rotateY(0)}

.program-tag{
    background:#d1fae5;
    color:#065f46;
    font-size:.7rem;
    padding:6px 14px;
    border-radius:20px;
    font-weight:700;
}
.price{font-size:1.35rem;color:#047857;font-weight:800}

/* ================= FAQ ================= */
.faq-section{background:#ecfdf5}
.faq-accordion .accordion-item{
    border-radius:16px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    margin-bottom:1rem;
    opacity:0;
    transform:translateY(20px);
    transition:.6s;
}
.faq-accordion .accordion-item.show{
    opacity:1;
    transform:none;
}

/* ================= QUIET CTA ================= */
.quiet-cta{
  background:linear-gradient(180deg,#ffffff,#ecfdf5);
}
.quiet-cta-card{
  max-width:820px;
  margin:auto;
  background:#ffffff;
  border-radius:24px;
  padding:50px 40px;
  text-align:center;
  box-shadow:0 20px 55px rgba(0,0,0,.08);
}
.quiet-cta-card h3{
  color:#065f46;
  font-weight:700;
}
.quiet-cta-card p{
  color:var(--muted);
  max-width:620px;
  margin:14px auto 28px;
  font-size:1.05rem;
  line-height:1.7;
}
.quiet-cta-link{
  display:inline-flex;
  align-items:center;
  gap:10px;
  font-weight:600;
  color:#047857;
  text-decoration:none;
  transition:.3s;
}
.quiet-cta-link:hover{
  color:#065f46;
  transform:translateX(4px);
}

/* ================= CONTACT ================= */
.contact-section{
  background:linear-gradient(180deg,#ecfdf5,#ffffff);
}
.contact-card{
  background:#fff;
  border-radius:22px;
  padding:40px;
  box-shadow:0 18px 45px rgba(0,0,0,.08);
}
.contact-item{
  display:flex;
  align-items:center;
  gap:18px;
  margin-bottom:30px;
}
.icon{
  width:52px;
  height:52px;
  display:grid;
  place-items:center;
  border-radius:50%;
  background:#d1fae5;
  color:#047857;
  font-size:1.3rem;
}
.pulse{animation:pulse 2.8s infinite}
@keyframes pulse{50%{transform:scale(1.08)}}
.float{animation:float 3s infinite}
@keyframes float{50%{transform:translateY(-6px)}}

/* WhatsApp Icon Badge */
.whatsapp-badge{
  width:64px;
  height:64px;
  margin:0 auto 18px;
  display:grid;
  place-items:center;
  border-radius:50%;
  background:#dcfce7;
  color:#16a34a;
  font-size:1.8rem;
  box-shadow:0 12px 30px rgba(22,163,74,.25);
  animation:whatsappPulse 2.6s ease-in-out infinite;
}

@keyframes whatsappPulse{
  0%,100%{transform:scale(1)}
  50%{transform:scale(1.08)}
}

</style>

<main>

<!-- HERO -->
<section class="hero-home">
<div class="container">
<h1 class="hero-title">Compassionate Therapy<br>For a Healthier Mind</h1>
<p class="hero-sub">
Confidential, evidence-based mental health care supporting healing and personal growth.
</p>
<div class="hero-actions mt-4">
<a href="booksession.php" class="btn btn-light me-3">Book a Session</a>
<a href="#contact" class="btn btn-outline-light">Talk to Us</a>
</div>
</div>
</section>

<!-- GIFT -->
<section class="gift-section">
<div class="container">
<div class="gift-card">
<h3>Gift a Therapy Session</h3>
<p>
A thoughtful way to support someone’s emotional well-being — with care, consent, and compassion.
</p>
<a href="giftsession.php" class="btn btn-primary mt-4">Gift a Session</a>
</div>
</div>
</section>

<!-- PROGRAMS -->
<section class="py-5">
<div class="container">
<div class="text-center mb-5">
<h2 class="section-title">Our Clinical Programs</h2>
<p class="section-subtitle">Professionally guided therapy programs.</p>
</div>

<div class="row g-4">
<?php
$programs=[
["Assertive Communication Therapy","₹12,000"],
["Weight Management Psychology","₹15,000"],
["Procrastination CBT Program","₹12,000"],
["Soulful Healing Circle","Free"]
];
foreach($programs as $p): ?>
<div class="col-lg-6">
<div class="program-card position-relative">
<div class="program-front">
<span class="program-tag">THERAPY</span>
<h4 class="mt-3"><?= $p[0] ?></h4>
<p class="price"><?= $p[1] ?></p>
</div>
<div class="program-back">
<h5>Includes</h5>
<ul>
<li>Licensed Therapist</li>
<li>Confidential Sessions</li>
<li>Structured Approach</li>
</ul>
<a href="booksession.php" class="btn btn-primary">Enquire</a>
</div>
</div>
</div>
<?php endforeach; ?>
</div>
</div>
</section>

<!-- FAQ -->
<section class="faq-section py-5">
<div class="container">
<h2 class="section-title text-center mb-4">FAQs</h2>
<div class="accordion faq-accordion" id="faqAccordion">
<?php
$faqs=[
["Is therapy confidential?","Yes, completely confidential."],
["Do you offer online sessions?","Yes, secure online sessions available."],
["Can I gift therapy?","Yes, with consent."]
];
foreach($faqs as $i=>$f): ?>
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button <?= $i?'collapsed':'' ?>"
data-bs-toggle="collapse"
data-bs-target="#faq<?= $i ?>">
<?= $f[0] ?>
</button>
</h2>
<div id="faq<?= $i ?>" class="accordion-collapse collapse <?= !$i?'show':'' ?>">
<div class="accordion-body"><?= $f[1] ?></div>
</div>
</div>
<?php endforeach; ?>
</div>
</div>
</section>

<!-- QUIET CTA -->
<div class="quiet-cta-card mt-5 mb-5">

  <div class="whatsapp-badge">
    <i class="bi bi-whatsapp"></i>
  </div>

  <h3>Not sure where to begin?</h3>

  <p>
    A gentle conversation can help you understand what kind of support
    might feel right for you — with no pressure or commitment.
  </p>

  <a
    href="https://wa.me/917304698108?text=Hello%20I%20came%20across%20Feeling%20Good%20Therapy.%20I%E2%80%99m%20looking%20for%20some%20guidance."
    target="_blank"
    class="quiet-cta-link">
    Start a conversation <i class="bi bi-arrow-right"></i>
  </a>

</div>


</div>
</div>
</section>

</main>

<script>
document.querySelectorAll(".accordion-item").forEach(el=>{
new IntersectionObserver(e=>{
if(e[0].isIntersecting) el.classList.add("show");
},{threshold:.2}).observe(el);
});
</script>

<?php require_once 'includes/footer.php'; ?>
