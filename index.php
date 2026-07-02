<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech After 35 - Aledoy Academy</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
       /* --- Global & Typography Base --- */
body {
    font-family: 'Inter', sans-serif;
    color: #1a1a1a;
    background-color: #ffffff;
    overflow-x: hidden; /* guards against any residual horizontal scroll on mobile */
}
h1, h2, h3, h4, h5, h6, .hero-heading {
    font-family: 'Sora', sans-serif !important;
}

html {
    scroll-behavior: smooth;
}

/* Custom class matching the theme red button hover transition */
.btn-theme-red {
    background-color: #C8202F;
    color: #ffffff;
    border-radius: 8px;
    padding-top: 12px;
    padding-right: 24px;
    padding-bottom: 12px;
    padding-left: 24px;
    transition: background-color 0.2s ease, color 0.2s ease, border-color 0.2s ease;
}

/* Hover inversion effect to perfectly match image_73cddb.png */
.btn-theme-red:hover {
    background-color: transparent !important;
    color: #C8202F !important;
    border-color: #C8202F !important;
}
.badge-theme-cyan {
    background-color: #86F2E4;
    color: #006F66;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 0.75rem;
    letter-spacing: 1px;
    padding: 0.5rem 1rem;
}
.text-theme-red {
    color: #C8202F;
}
.text-theme-green {
    color: #008000 !important;
}

/* --- Site Header --- */
.site-header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 1rem;
    flex-wrap: wrap;
}
.site-header .logo-wrap img {
    max-height: 36px;
    width: auto;
}

/* --- Section 1: Hero Section --- */
.hero-section {
    background: radial-gradient(circle at top right, rgba(255, 235, 235, 0.6), transparent 50%),
                radial-gradient(circle at top left, rgba(240, 253, 250, 0.5), transparent 50%);
    padding: 80px 0;
}

/* --- Section 2: Reality Check Cards --- */
.card-custom {
    border: 1px solid #f0f0f0;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
    background: #ffffff;
    height: 100%;
}

/* --- Section 3: Myth Box Styling (Updated for three.png style) --- */
.myth-box {
    background-color: #f1f1f1 !important; /* Exact grey tint from three.png */
    border: none !important;
    border-left: 4px solid #C8202F !important; /* Prominent accent left edge border */
    border-radius: 0 4px 4px 0;
    padding: 24px;
    height: 100%;
}

/* --- Section 4: Path Table Section (Updated for four.png deep dark slate theme) --- */
.path-section {
    background-color: #131B2E; /* Outer deep background */
    color: #ffffff;
    padding: 80px 0;
}

/* Fixes default Bootstrap table cell background overlays */
.path-section .table {
    background-color: #131B2E !important; /* Inner structural box tone */
    border: 1px solid #1e293b !important;
    color: #ffffff !important;
    border-radius: 8px;
    overflow: hidden;
    min-width: 560px; /* keeps columns legible inside the scroll wrapper on small screens */
}

.path-section .table th {
    background-color: #131B2E !important; /* Distinct column header tier row */
    color: #ffffff !important;
    font-weight: 600;
    border-bottom: 1px solid #1e293b !important;
    padding: 1rem;
    white-space: nowrap;
}

.path-section .table td {
    background-color: transparent !important;
    border-bottom: 1px solid #1e293b !important;
    padding: 1.2rem 1rem;
    color: #94a3b8; /* Muted text look for values */
}

/* Clean slate line setup for last elements inside your table wrapper */
.path-section .table tbody tr:last-child td {
    border-bottom: none !important;
}

/* --- Components & Miscellany --- */
.roadmap-circle {
    width: 36px;
    height: 36px;
    background-color: #C8202F;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    margin: 0 auto 15px auto;
    flex-shrink: 0;
}
.trainer-card {
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    padding: 30px;
}
.trainer-img-wrapper {
    background-color: #f59e0b;
    border-radius: 12px;
    overflow: hidden;
    width: 100%;
    aspect-ratio: 1 / 1;
}

/* --- Form Interfaces & Footers --- */
.form-container {
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.06);
    padding: 40px;
    border: 1px solid #f0f0f0;
}
.form-control, .form-select {
    background-color: #f8fafc;
    border: 1px solid #e2e8f0;
    padding: 0.6rem 0.75rem;
    font-size: 0.95rem;
}
.form-control:focus, .form-select:focus {
    background-color: #ffffff;
    border-color: #cbd5e1;
    box-shadow: none;
}
label {
    font-size: 0.85rem;
    font-weight: 500;
    color: #64748b;
    margin-bottom: 4px;
}
footer {
    background-color: #f8fafc;
    border-top: 1px solid #e2e8f0;
    font-size: 0.85rem;
    color: #64748b;
}

/* --- Roadmap Timeline (desktop: alternating two-column layout) --- */
.roadmap-wrap {
    max-width: 900px;
}
.roadmap-line {
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 2px;
    background-color: #e2e8f0;
    transform: translateX(-50%);
}
.roadmap-item {
    position: relative;
}
.roadmap-badge {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
}
.roadmap-text-left {
    text-align: right;
    padding-right: 2.5rem;
    margin-left: auto;
}
.roadmap-text-right {
    text-align: left;
    padding-left: 2.5rem;
}



@media (max-width: 767.98px) {
    /* Tighter section breathing room on phones */
    .hero-section {
        padding: 48px 0;
    }
    .path-section {
        padding: 48px 0;
    }
    section.py-5 {
        padding-top: 2.5rem !important;
        padding-bottom: 2.5rem !important;
    }

    /* Header logo/button stays readable, wraps cleanly if needed */
    .site-header .container {
        gap: 0.75rem;
    }
    .site-header .btn-theme-red {
        padding: 10px 16px;
        font-size: 0.9rem;
    }

    /* Hero type scale */
    .hero-section h1 {
        font-size: 1.85rem;
        line-height: 1.3;
    }
    .hero-section p {
        font-size: 0.95rem;
    }

    /* Cards & myth boxes get a little less internal padding */
    .card-custom {
        padding: 1.25rem !important;
    }
    .myth-box {
        padding: 18px;
    }

    /* --- Roadmap timeline: switch to a single left-aligned column --- */
    .roadmap-line {
        left: 17px;
        transform: none;
    }
    .roadmap-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 2rem !important;
    }
    .roadmap-badge {
        position: static;
        transform: none;
        margin: 0;
    }
    .roadmap-text-left,
    .roadmap-text-right {
        text-align: left;
        padding: 0;
        margin: 0;
        max-width: none !important;
    }

    /* Mentor section image sizing */
    .trainer-img-wrapper-outer {
        max-width: 220px !important;
    }

    /* Form container padding on small screens */
    .form-container {
        padding: 24px !important;
    }
}

@media (max-width: 420px) {
    .hero-section h1 {
        font-size: 1.6rem;
    }
}
    </style>
</head>
<body>

    <header class="py-3 bg-white border-bottom site-header">
        <div class="container">
            <div class="logo-wrap" style="min-width: 120px;">
                <span class="text-muted fw-bold fs-4"><img src="dist/images/logo.png" alt="Aledoy Academy"/></span>
            </div>

            <a href="#signup-form" class="btn btn-theme-red px-4 py-2">Reserve My Seat</a>
        </div>
    </header>

   <section class="hero-section text-center" id="roadmap-section">
    <div class="container">
        <span class="badge badge-theme-cyan mb-4" style='width: 217;'>Expert-Led Webinar</span>

        <h1 class="display-5 mb-3 text-dark mx-auto" style="max-width: 800px; font-weight: 800;">
            Tech After 35: It's Not Too Late to Build a <span class="text-theme-red">High-Income Career</span> in Technology
        </h1>

        <p class="text-muted mb-4 mx-auto" style="max-width: 650px; font-size: 1.05rem; line-height: 1.6;">
            Transform your career security, income, and future. A practical blueprint for seasoned professionals looking to dominate the digital economy.
        </p>

        <a href="#signup-form" class="btn btn-theme-red px-4 py-2">Reserve My Seat</a>
    </div>
</section>

    <section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="fw-bold text-dark mb-3">Reality Check: The Career Landscape is Shifting</h2>
        <p class="text-muted mb-5 fs-6">Is your role safe from the wave of AI and Automation?</p>

        <div class="row g-4 text-start justify-content-center">
            <div class="col-12 col-md-4">
                <div class="card card-custom p-4 border-0 shadow-sm rounded-4 h-100">
                    <div class="text-theme-red mb-3">
                        <svg width="28" height="28" fill="#C8202F" viewBox="0 0 24 24">
                            <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-1 16H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c0 .55.45 1 1 1v12c0 .55-.45 1-1 1zm-7-4H9v2h2v-2zm4-4h-2v6h2v-6zm2-3h-2v9h2V8z"/>
                        </svg>
                    </div>
                    <h4 class="fw-bold text-dark mb-3">AI Transformation</h4>
                    <p class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.6;">
                        Over 40% of standard professional tasks will be automated by 2030. Are you adapting or waiting?
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card card-custom p-4 border-0 shadow-sm rounded-4 h-100">
                    <div class="text-theme-red mb-3">
                        <svg width="28" height="28" fill="#C8202F" viewBox="0 0 24 24">
                            <path d="M21 15h2v2h-2zm0-4h2v2h-2zm0 8h2c0 1.1-.9 2-2 2zM3 5h2V3c-1.1 0-2 .9-2 2zm0 14H1v-2h2zm0-4H1v-2h2zm0-8H1V5h2zm0 16c-1.1 0-2-.9-2-2h2zm16-4H5V7h14v8zm2-12h-2v2h2zm-4-2h-2v2h2zm-4 0H9v2h2zm-4 0H5v2h2zM9 11c0 1.66 1.34 3 3 3s3-1.34 3-3-1.34-3-3-3-3 1.34-3 3z"/>
                        </svg>
                    </div>
                    <h4 class="fw-bold text-dark mb-3">The Income Ceiling</h4>
                    <p class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.6;">
                        Traditional roles are stagnating, while tech-enabled careers see 25%+ faster wage growth.
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card card-custom p-4 border-0 shadow-sm rounded-4 h-100">
                    <div class="text-theme-red mb-3">
                        <svg width="28" height="28" fill="#C8202F" viewBox="0 0 24 24">
                            <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/>
                        </svg>
                    </div>
                    <h4 class="fw-bold text-dark mb-3">Job Security</h4>
                    <p class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.6;">
                        The "stable" corporate ladder is broken. True security lies in having high-demand technical skills.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="py-5 bg-white">
    <div class="container">
        <h2 class="fw-bold text-center mb-5 text-dark">Debunking the Mid-Career Tech Myths</h2>

        <div class="row g-4">
            <div class="col-12 col-md-6">
                <div class="myth-box h-100 d-flex align-items-start">
                    <span class="text-danger fw-bold me-2" style="font-size: 1.1rem; line-height: 1.2;">✕</span>
                    <div>
                        <p class="mb-2 text-dark" style="font-family: Sora;
font-weight: 700;
font-style: Regular;
font-size: 16px;
leading-trim: NONE;
line-height: 24px;
letter-spacing: 0px;
vertical-align: middle;
">
                            <strong class="text-theme-red">Myth:</strong> I'm too old to start in tech.
                        </p>
                        <p class="mb-0 text-muted" style="font-size: 0.95rem; line-height: 1.5;">
                            <strong class="" style='color: #008000; font-family: Sora;
font-weight: 400;
font-style: Regular;
font-size: 16px;
leading-trim: NONE;
line-height: 25.6px;
letter-spacing: 0px;
vertical-align: middle;
'>Truth:</strong> Experience + Tech is a superpower. Startups value the maturity and soft skills of seasoned pros.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="myth-box h-100 d-flex align-items-start">
                    <span class="text-danger fw-bold me-2" style="font-size: 1.1rem; line-height: 1.2;">✕</span>
                    <div>
                        <p class="mb-2 text-dark" style="font-family: Sora;
font-weight: 700;
font-style: Regular;
font-size: 16px;
leading-trim: NONE;
line-height: 24px;
letter-spacing: 0px;
vertical-align: middle;
">
                            <strong class="text-theme-red">Myth:</strong> I need to be a math genius.
                        </p>
                        <p class="mb-0 text-muted" style="font-size: 0.95rem; line-height: 1.5;">
                            <strong class="" style='color: #008000; font-family: Sora;
font-weight: 400;
font-style: Regular;
font-size: 16px;
leading-trim: NONE;
line-height: 25.6px;
letter-spacing: 0px;
vertical-align: middle;
'>Truth:</strong> Most tech roles require logic and empathy, not advanced calculus. Many are creative or managerial.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="myth-box h-100 d-flex align-items-start">
                    <span class="text-danger fw-bold me-2" style="font-size: 1.1rem; line-height: 1.2;">✕</span>
                    <div>
                        <p class="mb-2 text-dark" style="font-family: Sora;
font-weight: 700;
font-style: Regular;
font-size: 16px;
leading-trim: NONE;
line-height: 24px;
letter-spacing: 0px;
vertical-align: middle;
">
                            <strong class="text-theme-red">Myth:</strong> I need a CS degree.
                        </p>
                        <p class="mb-0 text-muted" style="font-size: 0.95rem; line-height: 1.5;">
                            <strong class="" style='color: #008000; font-family: Sora;
font-weight: 400;
font-style: Regular;
font-size: 16px;
leading-trim: NONE;
line-height: 25.6px;
letter-spacing: 0px;
vertical-align: middle;
'>Truth:</strong> Portfolio and practical skills outweigh degrees. Google, Apple, and IBM don't require degrees for many tech roles.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="myth-box h-100 d-flex align-items-start">
                    <span class="text-danger fw-bold me-2" style="font-size: 1.1rem; line-height: 1.2;">✕</span>
                    <div>
                        <p class="mb-2 text-dark" style="font-family: Sora;
font-weight: 700;
font-style: Regular;
font-size: 16px;
leading-trim: NONE;
line-height: 24px;
letter-spacing: 0px;
vertical-align: middle;
">
                            <strong class="text-theme-red">Myth:</strong> I'll have to start as an intern.
                        </p>
                        <p class="mb-0 text-muted" style="font-size: 0.95rem; line-height: 1.5;">
                            <strong class="" style='color: #008000; font-family: Sora;
font-weight: 400;
font-style: Regular;
font-size: 16px;
leading-trim: NONE;
line-height: 25.6px;
letter-spacing: 0px;
vertical-align: middle;
'>Truth:</strong> You can pivot into mid-level "Tech-Adjacent" roles using your existing domain expertise.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

     <section class="path-section">
    <div class="container">
        <h2 class="fw-bold text-center text-white mb-2">Choose Your High-Income Path</h2>
        <p class="text-center mb-5" style="color: #94a3b8;">Explore high-demand tracks tailored for different strengths.</p>

        <div class="table-responsive" style="border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px;  background-color: #111a2e;">
    <table class="table table-borderless align-middle mb-0" style="background-color: transparent;">
        <thead>
            <tr>
                <!-- Added background-color: #000000 !important; directly to the header cells -->
                <th scope="col" class="text-white" style="background-color: #000000 !important; font-size: 0.85rem; font-weight: 700; letter-spacing: 0.5px; padding: 1.25rem 1.5rem; border-bottom: 1px solid rgba(255, 255, 255, 0.08);">Career Path</th>
                <th scope="col" class="text-white" style="background-color: #000000 !important; font-size: 0.85rem; font-weight: 700; letter-spacing: 0.5px; padding: 1.25rem 1.5rem; border-bottom: 1px solid rgba(255, 255, 255, 0.08);">Coding Level</th>
                <th scope="col" class="text-white" style="background-color: #000000 !important; font-size: 0.85rem; font-weight: 700; letter-spacing: 0.5px; padding: 1.25rem 1.5rem; border-bottom: 1px solid rgba(255, 255, 255, 0.08);">Learning Time</th>
                <th scope="col" class="text-white" style="background-color: #000000 !important; font-size: 0.85rem; font-weight: 700; letter-spacing: 0.5px; padding: 1.25rem 1.5rem; border-bottom: 1px solid rgba(255, 255, 255, 0.08);">Salary Potential</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background-color: #111a2e;">
                <td class="fw-semibold text-white" style="padding: 1.4rem 1.5rem; border-bottom: 1px solid rgba(255, 255, 255, 0.05); font-size: 0.95rem;">Cloud Solutions Architect</td>
                <td style="padding: 1.4rem 1.5rem; color: #94a3b8; border-bottom: 1px solid rgba(255, 255, 255, 0.05); font-size: 0.95rem;">Low (Scripting)</td>
                <td style="padding: 1.4rem 1.5rem; color: #94a3b8; border-bottom: 1px solid rgba(255, 255, 255, 0.05); font-size: 0.95rem;">6-9 Months</td>
                <td class="fw-bold" style="padding: 1.4rem 1.5rem; color: #008000; border-bottom: 1px solid rgba(255, 255, 255, 0.05); font-size: 0.95rem;">$120k - $180k</td>
            </tr>
            <tr style="background-color: #111a2e;">
                <td class="fw-semibold text-white" style="padding: 1.4rem 1.5rem; border-bottom: 1px solid rgba(255, 255, 255, 0.05); font-size: 0.95rem;">Cybersecurity Analyst</td>
                <td style="padding: 1.4rem 1.5rem; color: #94a3b8; border-bottom: 1px solid rgba(255, 255, 255, 0.05); font-size: 0.95rem;">Moderate</td>
                <td style="padding: 1.4rem 1.5rem; color: #94a3b8; border-bottom: 1px solid rgba(255, 255, 255, 0.05); font-size: 0.95rem;">8-12 Months</td>
                <td class="fw-bold" style="padding: 1.4rem 1.5rem; color: #008000; border-bottom: 1px solid rgba(255, 255, 255, 0.05); font-size: 0.95rem;">$95k - $150k</td>
            </tr>
            <tr style="background-color: #111a2e;">
                <td class="fw-semibold text-white" style="padding: 1.4rem 1.5rem; border-bottom: 1px solid rgba(255, 255, 255, 0.05); font-size: 0.95rem;">UI/UX Designer</td>
                <td style="padding: 1.4rem 1.5rem; color: #94a3b8; border-bottom: 1px solid rgba(255, 255, 255, 0.05); font-size: 0.95rem;">None</td>
                <td style="padding: 1.4rem 1.5rem; color: #94a3b8; border-bottom: 1px solid rgba(255, 255, 255, 0.05); font-size: 0.95rem;">4-6 Months</td>
                <td class="fw-bold" style="padding: 1.4rem 1.5rem; color: #008000; border-bottom: 1px solid rgba(255, 255, 255, 0.05); font-size: 0.95rem;">$80k - $140k</td>
            </tr>
            <tr style="background-color: #111a2e;">
                <td class="fw-semibold text-white" style="padding: 1.4rem 1.5rem; border-bottom: none; font-size: 0.95rem;">Product Manager</td>
                <td style="padding: 1.4rem 1.5rem; color: #94a3b8; border-bottom: none; font-size: 0.95rem;">None (Tech Literate)</td>
                <td style="padding: 1.4rem 1.5rem; color: #94a3b8; border-bottom: none; font-size: 0.95rem;">3-5 Months</td>
                <td class="fw-bold" style="padding: 1.4rem 1.5rem; color:#008000; border-bottom: none; font-size: 0.95rem;">$110k - $190k</td>
            </tr>
        </tbody>
    </table>
</div>
    </div>
</section>

   <section class="py-5 bg-white">
    <div class="container py-4">
        <h2 class="fw-bold text-center mb-5 text-dark">Your 12-Month Roadmap to Mastery</h2>

        <section class="py-5" style="background-color: #ffffff; position: relative; overflow: hidden;">
    <div class="container py-4" style="max-width: 960px;">
        <div class="position-relative">
            
            <!-- Center Vertical Timeline Line -->
            <div class="d-none d-md-block" style="position: absolute; left: 50%; top: 20px; bottom: 20px; width: 2px; background-color: #e2e8f0; transform: translateX(-50%); z-index: 1;"></div>

            <!-- Mobile Left Timeline Line -->
            <div class="d-block d-md-none" style="position: absolute; left: 20px; top: 20px; bottom: 20px; width: 2px; background-color: #e2e8f0; z-index: 1;"></div>

            <!-- --- Step 1: Left Aligned --- -->
            <div class="row align-items-center mb-5 position-relative" style="z-index: 2;">
                <!-- Content Column (Left on Desktop, Right on Mobile) -->
                <div class="col-12 col-md-6 text-start text-md-end order-2 order-md-1 pe-3 pe-md-5 ps-5 ps-md-3">
                    <h3 style="font-family: 'Sora', sans-serif; font-size: 1.5rem; font-weight: 700; color: #000000; margin-bottom: 8px;">Months 1–3: Foundation</h3>
                    <p style="font-family: 'Sora', sans-serif; font-size: 0.95rem; line-height: 1.6; color: #4a5568; margin-bottom: 0;">Assess skills, choose your niche, and master core fundamentals through immersive learning.</p>
                </div>
                
                <!-- Badge Badge Circle Column -->
                <div class="col-12 col-md-1 d-flex justify-content-start justify-content-md-center order-1 order-md-2 mb-3 mb-md-0" style="padding: 0;">
                    <div style="width: 40px; height: 40px; background-color: #C8202F; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-family: 'Sora', sans-serif; font-weight: 700; font-size: 1rem; box-shadow: 0 0 0 6px #ffffff; margin-left: 0px;">1</div>
                </div>
                
                <!-- Empty Spacer Column for Desktop Alignment -->
                <div class="col-md-5 d-none d-md-block order-3"></div>
            </div>

            <!-- --- Step 2: Right Aligned --- -->
            <div class="row align-items-center mb-5 position-relative" style="z-index: 2;">
                <!-- Empty Spacer Column for Desktop Alignment -->
                <div class="col-md-5 d-none d-md-block" style="padding: 0;"></div>
                
                <!-- Badge Badge Circle Column -->
                <div class="col-12 col-md-1 d-flex justify-content-start justify-content-md-center mb-3 mb-md-0" style="padding: 0;">
                    <div style="width: 40px; height: 40px; background-color: #C8202F; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-family: 'Sora', sans-serif; font-weight: 700; font-size: 1rem; box-shadow: 0 0 0 6px #ffffff; margin-left: 0px;">2</div>
                </div>

                <!-- Content Column (Always Right Side) -->
                <div class="col-12 col-md-6 text-start ps-5 pe-3">
                    <h3 style="font-family: 'Sora', sans-serif; font-size: 1.5rem; font-weight: 700; color: #000000; margin-bottom: 8px;">Months 4–7: Deep Dive</h3>
                    <p style="font-family: 'Sora', sans-serif; font-size: 0.95rem; line-height: 1.6; color: #4a5568; margin-bottom: 0;">Hands-on project building, certification preparation, and portfolio development.</p>
                </div>
            </div>

            <!-- --- Step 3: Left Aligned --- -->
            <div class="row align-items-center position-relative" style="z-index: 2;">
                <!-- Content Column (Left on Desktop, Right on Mobile) -->
                <div class="col-12 col-md-6 text-start text-md-end order-2 order-md-1 pe-3 pe-md-5 ps-5 ps-md-3">
                    <h3 style="font-family: 'Sora', sans-serif; font-size: 1.5rem; font-weight: 700; color: #000000; margin-bottom: 8px;">Months 8–12: Job Ready</h3>
                    <p style="font-family: 'Sora', sans-serif; font-size: 0.95rem; line-height: 1.6; color: #4a5568; margin-bottom: 0;">Networking, interview prep, personal branding, and securing your first high-income role.</p>
                </div>
                
                <!-- Badge Badge Circle Column -->
                <div class="col-12 col-md-1 d-flex justify-content-start justify-content-md-center order-1 order-md-2 mb-3 mb-md-0" style="padding: 0;">
                    <div style="width: 40px; height: 40px; background-color: #C8202F; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-family: 'Sora', sans-serif; font-weight: 700; font-size: 1rem; box-shadow: 0 0 0 6px #ffffff; margin-left: 0px;">3</div>
                </div>
                
                <!-- Empty Spacer Column for Desktop Alignment -->
                <div class="col-md-5 d-none d-md-block order-3"></div>
            </div>

        </div>
    </div>
</section>
    </div>
</section>
 
     <section class="py-5 overflow-hidden" style="background-color: #ededed;">
    <div class="container py-4">
        <div class="mx-auto" style="max-width: 950px;">
            <div class="row align-items-center g-5">

                <div class="col-12 col-md-4 text-center">
                    <div class="trainer-img-wrapper-outer position-relative d-inline-block rounded-4 shadow-lg overflow-hidden mx-auto" style="width: 100%; max-width: 280px; aspect-ratio: 1/1; border: 0px solid #ffc107; background: linear-gradient(to bottom, #ffc107, #bfa15f);">
                        <img src="dist/images/passport.jpg" alt="Lu Abikoye" class="w-100 h-100 object-fit-cover d-block">

                        <div class="position-absolute bottom-0 start-0 w-100 text-start p-3" style="background: linear-gradient(transparent, rgba(0,0,0,0.75));">
                            <h5 class="text-white fw-bold mb-0">Lu Abikoye</h5>
                            <p class="text-white-50 small mb-0" style="font-size: 0.75rem;">Principal Consultant &amp; Mentor</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8">
                    <span class="text-danger fw-semibold text-uppercase" style="font-size: 0.8rem; letter-spacing: 1.5px;">Meet Your Mentor</span>

                    <h3 class="fw-bold text-dark mt-1 mb-3">Expertise Forged in Real-World Success</h3>

                    <p class="text-muted mb-4" style="font-size: 0.95rem; line-height: 1.6;">
                        Lu Abikoye has spent over two decades helping professionals navigate the complexities of the tech industry. Having transitioned himself and mentored hundreds, Lu provides the "no-fluff" strategies you need to bypass the noise and focus on what actually gets you hired.
                    </p>

                    <div class="bg-white p-4 rounded-3 shadow-sm border-0">
                        <p class="text-dark mb-3" style="font-size: 0.9rem; line-height: 1.6;">
                            "Lu's roadmap didn't just give me skills; it gave me the confidence to negotiate a 40% salary increase in a field I knew nothing about six months prior."
                        </p>
                        <p class="fw-bold text-dark mb-0" style="font-size: 0.85rem;">
                            — Sarah J., <span class="text-muted fw-normal">Senior Project Manager turned Cloud Architect</span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section> 

   <section class="py-5" id="signup-form">
    <div class="container py-4">
        <div class="form-container mx-auto bg-white p-4 p-md-5 rounded-4 shadow-lg" style="max-width: 850px; border: none;">

            <h3 class="fw-bold text-center text-dark mb-1" style="font-size: 1.85rem;">Claim Your Free Seat</h3>
            <p class="text-muted text-center small mb-4" style="font-size: 0.9rem;">Limited spots available to ensure quality Q&amp;A.</p>

            <?php if (!empty($error)): ?>
                <div class="alert alert-danger py-2 text-center small border-0 rounded-3 mb-4" role="alert">
                    <strong>Error:</strong> <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($success)): ?>
                <div class="alert alert-success py-2 text-center small border-0 rounded-3 mb-4" role="alert">
                    <strong>Success:</strong> <?php echo htmlspecialchars($success); ?>
                </div>
            <?php endif; ?>
<form action="proc-contact.php" method="POST">
    <div class="row g-4">

        <!-- Full Name -->
        <div class="col-12 col-md-6">
            <label for="fullName" class="form-label fw-semibold text-dark mb-1" style="font-size: 0.85rem;">
                Full Name
            </label>
            <input
                type="text"
                class="form-control bg-white py-2 px-3"
                id="fullName"
                name="full_name"
                placeholder="John Doe"
                style="border:1px solid #cbd5e1; border-radius:6px;"
                required>
        </div>

        <!-- Email -->
        <div class="col-12 col-md-6">
            <label for="email" class="form-label fw-semibold text-dark mb-1" style="font-size: 0.85rem;">
                Work Email Address
            </label>
            <input
                type="email"
                class="form-control bg-white py-2 px-3"
                id="email"
                name="email"
                placeholder="john.doe@company.com"
                style="border:1px solid #cbd5e1; border-radius:6px;"
                required>
        </div>

        <!-- Phone -->
        <div class="col-12 col-md-6">
            <label for="phone" class="form-label fw-semibold text-dark mb-1" style="font-size: 0.85rem;">
                Phone Number
            </label>
            <input
                type="tel"
                class="form-control bg-white py-2 px-3"
                id="phone"
                name="phone"
                placeholder="08031234567"
                style="border:1px solid #cbd5e1; border-radius:6px;"
                required>
        </div>

        <!-- Age Range -->
        <div class="col-12 col-md-6">
            <label for="ageRange" class="form-label fw-semibold text-dark mb-1" style="font-size: 0.85rem;">
                Age Range
            </label>
            <select
                class="form-select bg-white py-2 px-3"
                id="ageRange"
                name="age_range"
                style="border:1px solid #cbd5e1; border-radius:6px;"
                required>
                <option value="">Select Age Range</option>
                <option value="35-40">35-40</option>
                <option value="41-50">41-50</option>
                <option value="50+">50+</option>
            </select>
        </div>

        <!-- Country -->
        <div class="col-12 col-md-6">
            <label for="country" class="form-label fw-semibold text-dark mb-1" style="font-size: 0.85rem;">
                Country
            </label>
            <input
                type="text"
                class="form-control bg-white py-2 px-3"
                id="country"
                name="country"
                placeholder="Nigeria"
                style="border:1px solid #cbd5e1; border-radius:6px;"
                required>
        </div>

        <!-- City -->
        <div class="col-12 col-md-6">
            <label for="city" class="form-label fw-semibold text-dark mb-1" style="font-size: 0.85rem;">
                City
            </label>
            <input
                type="text"
                class="form-control bg-white py-2 px-3"
                id="city"
                name="city"
                placeholder="Lagos"
                style="border:1px solid #cbd5e1; border-radius:6px;"
                required>
        </div>

        <!-- Career Goal -->
        <div class="col-12">
            <label for="careerGoal" class="form-label fw-semibold text-dark mb-1" style="font-size: 0.85rem;">
                Primary Career Goal
            </label>
            <select
                class="form-select bg-white py-2 px-3"
                id="careerGoal"
                name="career_goal"
                style="border:1px solid #cbd5e1; border-radius:6px;"
                required>
                <option value="">Select Your Goal</option>
                <option value="increase_income">Increase Income</option>
                <option value="change_industry">Change Industry</option>
                <option value="learn_skills">Learn New Skills</option>
            </select>
        </div>

        <!-- Submit -->
        <div class="col-12 text-center mt-2">
            <button type="submit" class="btn btn-theme-red py-2 fw-semibold shadow-sm w-100 w-md-auto">
                Sign me up
            </button>

            <p class="text-center text-muted mt-3 mb-0 d-flex align-items-center justify-content-center gap-1" style="font-size:0.8rem;color:#64748b !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                </svg>
                Your data is safe. We never sell your information.
            </p>
        </div>

    </div>
</form>
        </div>
    </div>
</section>

    <footer class="py-5">
    <div class="container">
        <div class="row align-items-center g-4">

            <div class="col-12 col-md-6 text-center text-md-start">
                <h4 class="fw-bold mb-2" style="color: #C8202F; font-size: 1.4rem;">Aledoy Academy</h4>
                <p class="text-muted mb-0 small mx-auto mx-md-0" style="max-width: 320px; line-height: 1.5; font-size: 0.9rem;">
                    Empowering professionals over 35 to dominate the digital economy.
                </p>
            </div>

            <div class="col-12 col-md-6 text-center text-md-end">
                <div class="d-flex flex-wrap justify-content-center justify-content-md-end gap-4 mb-2">
                    <a href="#" class="text-decoration-none text-dark fw-semibold small" style="font-size: 0.85rem;">Contact Info</a>
                    <a href="#" class="text-decoration-none text-dark fw-semibold small" style="font-size: 0.85rem;">Privacy Policy</a>
                    <a href="#" class="text-decoration-none text-dark fw-semibold small" style="font-size: 0.85rem;">Terms of Service</a>
                </div>

                <p class="text-muted mb-0" style="font-size: 0.85rem;">
                    &copy; 2026 Aledoy Academy. All rights reserved.
                </p>
            </div>

        </div>
    </div>
</footer>

    <script src="dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
