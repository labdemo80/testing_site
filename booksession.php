<?php 
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<style>
/* ===== Booking Page Styling ===== */
/* ===== Minimal Calm Hero with SVG ===== */
.booking-hero {
    background: linear-gradient(
        180deg,
        #f4fbfa 0%,
        #ffffff 100%
    );
    padding: 120px 0 80px;
}

.hero-badge {
    display: inline-block;
    background: rgba(42,157,143,0.1);
    color: #2a9d8f;
    padding: 6px 16px;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 18px;
}

.booking-hero h1 {
    font-size: 42px;
    font-weight: 700;
    color: #2f3e3d;
}

.booking-hero p {
    font-size: 18px;
    color: #5f7f7c;
    max-width: 520px;
}

/* SVG Styling */
.hero-svg {
    max-width: 360px;
    margin-left: auto;
}

.hero-svg svg {
    width: 100%;
    height: auto;
}

/* Mobile */
@media (max-width: 991px) {
    .booking-hero {
        padding: 100px 0 60px;
    }

    .hero-svg {
        margin: 40px auto 0;
        max-width: 260px;
    }

    .booking-hero h1 {
        font-size: 34px;
    }
}


.form-control,
.form-select {
    border-radius: 12px;
    padding: 12px;
}

.form-control:focus,
.form-select:focus {
    border-color: #2a9d8f;
    box-shadow: 0 0 0 0.15rem rgba(42,157,143,.25);
}

.btn-whatsapp {
    background: #25D366;
    border: none;
    border-radius: 50px;
    padding: 14px;
    font-size: 18px;
    font-weight: 600;
}

.btn-whatsapp:hover {
    background: #1ebe5d;
}

.alert-info {
    border-radius: 12px;
}
</style>

<!-- Hero -->
<section class="booking-hero">
    <div class="container">
        <div class="row align-items-center">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6">
                <span class="hero-badge">
                    Safe • Confidential • Supportive
                </span>

                <h1 class="mb-3">
                    Book a Therapy Session
                </h1>

                <p class="mb-0">
                    Taking the first step can feel difficult — we’re here to
                    support your emotional well-being with care, clarity,
                    and compassion.
                </p>
            </div>

            <!-- RIGHT SVG -->
            <div class="col-lg-6 hero-svg">
                <!-- Inline Mental Health SVG -->
                <svg viewBox="0 0 400 300" xmlns="http://www.w3.org/2000/svg">
                    <!-- Background circles -->
                    <circle cx="300" cy="60" r="40" fill="#e0f2f1"/>
                    <circle cx="80" cy="220" r="50" fill="#f1f8f7"/>

                    <!-- Head -->
                    <circle cx="200" cy="120" r="48" fill="#ffffff" stroke="#5f8f8b" stroke-width="3"/>

                    <!-- Brain / leaves -->
                    <path d="M180 110c-20-25-60-10-55 15
                             5 25 40 30 55 15z"
                          fill="#88c9c1"/>

                    <path d="M220 110c20-25 60-10 55 15
                             -5 25-40 30-55 15z"
                          fill="#a8dadc"/>

                    <!-- Stem -->
                    <line x1="200" y1="168" x2="200" y2="210"
                          stroke="#5f8f8b" stroke-width="3"/>

                    <!-- Leaves -->
                    <path d="M200 185c-20 0-35 15-35 15
                             15 10 35 10 35 10z"
                          fill="#2a9d8f"/>

                    <path d="M200 185c20 0 35 15 35 15
                             -15 10-35 10-35 10z"
                          fill="#2a9d8f"/>
                </svg>
            </div>

        </div>
    </div>
</section>



<!-- Booking Form -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card booking-card shadow-lg border-0">
                <div class="card-body p-5">

                    <h2 class="text-center mb-4">Book a Session / Workshop</h2>

                    <form id="bookingForm">

                        <input type="text" name="name" class="form-control mb-3" placeholder="Full Name" required>
                        <input type="email" name="email" class="form-control mb-3" placeholder="Email Address" required>
                        <input type="tel" name="phone" class="form-control mb-3" placeholder="Phone Number" required>

                        <select name="program" id="program" class="form-select mb-3" required>
                            <option value="">Select Program</option>
                            <option>Individual Therapy Session</option>
                            <option>First Therapy Session</option>
                            <option>Hypnotherapy Session</option>
                            <option>Assertive Communication Workshop</option>
                            <option>Psychology behind Weight Management</option>
                            <option>Dealing with Procrastination</option>
                            <option>Soulful Healing</option>
                        </select>

                        <select name="mode" id="mode" class="form-select mb-3" required>
                            <option value="">Preferred Mode</option>
                            <option>In-Person</option>
                            <option>Online</option>
                        </select>

                        <div id="paymentInfo" class="alert alert-info d-none text-center mb-4"></div>

                        <button type="submit" class="btn btn-whatsapp w-100 text-white">
                            <i class="bi bi-whatsapp"></i> Book via WhatsApp
                        </button>
                    </form>

                    <p class="small text-muted text-center mt-3">
                        Your details are safely saved before WhatsApp opens.
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>

<script>
const form = document.getElementById('bookingForm');
const programSelect = document.getElementById('program');
const modeSelect = document.getElementById('mode');
const paymentInfo = document.getElementById('paymentInfo');

const programFees = {
    "Individual Therapy Session": 1200,
    "First Therapy Session": 1500,
    "Hypnotherapy Session": 3000,
    "Assertive Communication Workshop": 12000,
    "Psychology behind Weight Management": 15000,
    "Dealing with Procrastination": 12000,
    "Soulful Healing": 0
};

function updatePaymentInfo() {
    const program = programSelect.value;
    const mode = modeSelect.value;

    if (!program || !mode) {
        paymentInfo.classList.add('d-none');
        return;
    }

    const fee = programFees[program];
    paymentInfo.innerHTML = fee === 0
        ? "<strong>Free Online Session</strong>"
        : `<strong>Session Fee: ₹${fee}</strong>`;

    paymentInfo.classList.remove('d-none');
}

programSelect.addEventListener('change', updatePaymentInfo);
modeSelect.addEventListener('change', updatePaymentInfo);

form.addEventListener('submit', function(e) {
    e.preventDefault();

    const fee = programFees[programSelect.value] || 0;
    const formData = new FormData(form);
    formData.append('fee', fee);

    fetch('save-booking.php', {
        method: 'POST',
        body: formData
    })
    .then(res => {
        if (!res.ok) throw new Error();
    })
    .then(() => {
        let msg = `Hello Shreya,%0A%0AI would like to book a session:%0A`;
        msg += `Program: ${programSelect.value}%0A`;
        msg += `Mode: ${modeSelect.value}%0A`;
        msg += `Name: ${form.name.value}%0A`;
        msg += `Email: ${form.email.value}%0A`;
        msg += `Phone: ${form.phone.value}%0A`;
        msg += fee === 0 ? `Free Session%0A` : `Fee: ₹${fee}%0A`;
        msg += `%0AThank you`;

        window.open(`https://wa.me/7304698108?text=${msg}`, '_blank');
        form.reset();
        paymentInfo.classList.add('d-none');
    })
    .catch(() => alert("Something went wrong. Please try again."));
});
</script>
