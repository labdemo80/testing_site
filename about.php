<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/navbar.php'; ?>

<style>
:root{
  --clinic-dark:#0f766e;
  --clinic-main:#10b981;
  --clinic-soft:#ecfdf5;
  --clinic-text:#1f2933;
  --clinic-muted:#6b7280;
}

/* GLOBAL */
body{
  background:#ffffff;
  color:var(--clinic-text);
}
.section-title{
  font-weight:700;
  color:var(--clinic-dark);
}
.section-subtitle{
  max-width:720px;
  margin:auto;
  color:var(--clinic-muted);
  font-size:1rem;
  line-height:1.7;
}

/* HERO */
.about-hero{
  padding:80px 0 60px;
  background:#f8fffd;
  text-align:center;
}
.about-hero h1{
  font-weight:800;
  color:var(--clinic-dark);
}
.about-hero p{
  max-width:760px;
  margin:16px auto 0;
  font-size:1.1rem;
  color:var(--clinic-muted);
}

/* PROFILE */
.profile-wrap{
  max-width:1000px;
  margin:auto;
}
.profile-card{
  background:#ffffff;
  border-radius:20px;
  padding:2.5rem;
  border:1px solid #e6f4f1;
}
.profile-card img{
  border-radius:18px;
}
.profile-text p{
  font-size:1.02rem;
  line-height:1.75;
  color:#374151;
}

/* VALUES */
.flower-grid{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  grid-template-rows:repeat(3,auto);
  gap:18px;
  max-width:520px;
  margin:0 auto;
  align-items:center;
}
.flower-center{
  grid-column:2;
  grid-row:2;
  width:140px;
  height:140px;
  border-radius:50%;
  background:#ecfdf5;
  display:grid;
  place-items:center;
  font-weight:700;
  color:#0f766e;
  box-shadow:0 12px 30px rgba(0,0,0,.08);
}
.petal{
  background:#ffffff;
  border-radius:50px;
  padding:16px 14px;
  width:170px;
  text-align:center;
  box-shadow:0 8px 22px rgba(0,0,0,.08);
}
.petal h5{
  margin-bottom:6px;
  color:#0f766e;
  font-weight:700;
}
.petal p{
  margin:0;
  font-size:.85rem;
  color:#6b7280;
  line-height:1.5;
}
.petal-top{grid-column:2;grid-row:1}
.petal-left{grid-column:1;grid-row:2}
.petal-right{grid-column:3;grid-row:2}
.petal-bottom{grid-column:2;grid-row:3}

/* JOURNEY */
.journey-section{
  background:#f8fffd;
}
.leaf-timeline{
  position:relative;
  max-width:720px;
  margin:0 auto;
  padding-left:36px;
}
.leaf-timeline::before{
  content:"";
  position:absolute;
  left:16px;
  top:0;
  bottom:0;
  width:3px;
  background:linear-gradient(to bottom,#0f766e,#34d399);
  border-radius:3px;
  z-index:1;
}
.timeline-item{
  display:flex;
  gap:20px;
  margin-bottom:32px;
}

/* FONT AWESOME ICON */
.timeline-icon{
  width:36px;
  height:36px;
  border-radius:50%;
  background:linear-gradient(135deg,#10b981,#0f766e);
  display:flex;
  align-items:center;
  justify-content:center;
  flex-shrink:0;
  box-shadow:0 8px 18px rgba(15,118,110,.35);
  position:relative;
  z-index:2;
}
.timeline-icon i{
  color:#ffffff;
  font-size:16px;
}

.timeline-card{
  background:#ffffff;
  padding:18px 22px;
  border-radius:16px;
  box-shadow:0 12px 30px rgba(0,0,0,.08);
}
.timeline-card h5{
  margin-bottom:4px;
  font-weight:700;
  color:#0f766e;
}
.timeline-card p{
  margin:0;
  color:#6b7280;
  font-size:.9rem;
}

/* CTA */
.about-cta{
  background:var(--clinic-soft);
  border-radius:20px;
  padding:2.5rem 1.5rem;
  text-align:center;
}
.about-cta h3{
  font-weight:700;
  color:var(--clinic-dark);
  font-size:1.4rem;
}
.about-cta p{
  max-width:520px;
  margin:10px auto 0;
  color:var(--clinic-muted);
  font-size:.95rem;
}
.about-cta a{
  margin-top:18px;
}
</style>

<!-- HERO -->
<section class="about-hero mt-5">
  <div class="container">
    <h1>About Feeling Good</h1>
    <p>
      A calm, confidential space where emotional healing,
      self-understanding, and growth unfold gently.
    </p>
  </div>
</section>

<!-- PROFILE -->
<section class="py-5">
  <div class="container profile-wrap">
    <div class="profile-card">
      <div class="row g-4 align-items-center">
        <div class="col-lg-4 text-center">
          <img src="assets/images/self/self_new.jpeg" class="img-fluid shadow-sm" alt="Shreya Vyas">
        </div>
        <div class="col-lg-8 profile-text">
          <h2 class="section-title mb-3">Meet Shreya Vyas</h2>
          <p>
            I’m Shreya Vyas, a Psychological Counselor, Certified Hypnotherapist,
            and Life Coach with over 8 years of experience.
          </p>
          <p>
            My work is deeply compassionate, evidence-based, and non-judgmental,
            creating a space where clients feel safe and understood.
          </p>
          <p>
            I integrate CBT, REBT, DBT, Hypnotherapy, Yoga, and Mindfulness
            to support long-term emotional well-being.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- VALUES -->
<section class="py-5">
  <div class="container text-center">
    <h2 class="section-title">Therapy, Grounded in Balance</h2>
    <p class="section-subtitle mt-2">
      A holistic approach connecting thoughts, habits, nourishment,
      and daily actions.
    </p>

    <div class="flower-grid mt-4">
      <div class="petal petal-top">
        <h5>Ahar</h5>
        <p>Mindful nourishment through food, rest, and daily intake.</p>
      </div>
      <div class="petal petal-left">
        <h5>Vichar</h5>
        <p>Understanding and reshaping unhelpful thought patterns.</p>
      </div>
      <div class="flower-center">
        Balanced<br>Mind
      </div>
      <div class="petal petal-right">
        <h5>Vihar</h5>
        <p>Healthy routines that support emotional stability.</p>
      </div>
      <div class="petal petal-bottom">
        <h5>Achar</h5>
        <p>Aligning actions with values and awareness.</p>
      </div>
    </div>
  </div>
</section>

<!-- JOURNEY -->
<section class="journey-section py-5">
  <div class="container">
    <h2 class="section-title text-center">Professional Journey</h2>

    <div class="leaf-timeline mt-4">
      <div class="timeline-item">
        <span class="timeline-icon"><i class="fas fa-seedling"></i></span>
        <div class="timeline-card">
          <h5>Founder</h5>
          <p>Feeling Good Therapy & Well-Being Center</p>
        </div>
      </div>

      <div class="timeline-item">
        <span class="timeline-icon"><i class="fas fa-leaf"></i></span>
        <div class="timeline-card">
          <h5>Specialized Training</h5>
          <p>CBT, REBT, DBT & Clinical Hypnotherapy</p>
        </div>
      </div>

      <div class="timeline-item">
        <span class="timeline-icon"><i class="fas fa-spa"></i></span>
        <div class="timeline-card">
          <h5>Ethical Practice</h5>
          <p>Client-first, confidential, and compassionate care</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="py-4">
  <div class="container">
    <div class="about-cta">
      <h3>You Don’t Have to Go Through This Alone</h3>
      <p>
        Support is available in a safe, respectful, and confidential space —
        at your pace.
      </p>
      <a href="booksession.php" class="btn btn-success btn-sm rounded-pill">
        Book a Session
      </a>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
