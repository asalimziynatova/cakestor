
<?php
/* -------------------------------------------------
 *  CONFIG – change these and you’re done
 * ------------------------------------------------- */
$fullName   = 'Ahmad Jaber';
$jobTitle   = 'Full-Stack Laravel Developer';
$email      = 'ahmad@example.com';
$phone      = '+962 7 0000 0000';
$location   = 'Amman, Jordan';
$github       = 'https://github.com/ahmadjaber';
$linkedin     = 'https://linkedin.com/in/ahmadjaber';
$twitter      = 'https://twitter.com/ahmadjaber';

/* -------------------------------------------------
 *  SKILLS & PROJECTS
 * ------------------------------------------------- */
$skills = [
    'Laravel','PHP 8','Livewire','Vue 3','Inertia','MySQL','Redis','Docker','TDD','CI/CD'
];

$projects = [
    [
        'title' => 'E-Shop API',
        'desc'  => 'Scalable REST API built with Laravel, Sanctum, and Laravel Horizon.',
        'link'  => 'https://github.com/ahmadjaber/eshop-api',
        'tech'  => ['Laravel','Sanctum','Horizon','PHPUnit']
    ],
    [
        'title' => 'TaskFlow',
        'desc'  => 'Real-time task manager using Laravel Echo + Vue 3.',
        'link'  => 'https://github.com/ahmadjaber/taskflow',
        'tech'  => ['Laravel','Vue 3','Pusher','Tailwind']
    ],
    [
        'title' => 'Micro SaaS Boilerplate',
        'desc'  => 'Starter kit for subscription-based Laravel apps.',
        'link'  => 'https://github.com/ahmadjaber/saas-boilerplate',
        'tech'  => ['Laravel','Cashier','Stripe','Livewire']
    ]
];
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $fullName ?> – Portfolio</title>
<meta name="description" content="Portfolio of <?= $fullName ?>, <?= $jobTitle ?>">
<style>
/* ---------- CSS VARIABLES ---------- */
:root{
  --bg:#111;
  --card:#1c1c1c;
  --accent:#00e5ff;
  --text:#eee;
  --muted:#999;
  --radius:12px;
  --font:"Inter",system-ui,-apple-system,Segoe UI,Roboto,sans-serif;
  --gap:1.5rem;
}
/* ---------- RESET ---------- */
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
body{background:var(--bg);color:var(--text);font-family:var(--font);line-height:1.6;-webkit-font-smoothing:antialiased}
img{max-width:100%;display:block}
a{color:inherit;text-decoration:none}
/* ---------- LAYOUT ---------- */
header,section{padding:var(--gap) calc(var(--gap)*2)}
header{display:flex;flex-wrap:wrap;justify-content:space-between;align-items:center}
nav a{margin-left:1.2rem;font-weight:600;transition:color .2s}
nav a:hover{color:var(--accent)}
h1,h2,h3{line-height:1.2;font-weight:700}
h1{font-size:clamp(2rem,5vw,3rem)}
h2{font-size:clamp(1.5rem,4vw,2.2rem);margin-bottom:var(--gap)}
/* ---------- HERO ---------- */
.hero{margin-top:4rem;text-align:center}
.hero p{margin:1rem auto 2rem;max-width:600px;color:var(--muted)}
.cta{display:inline-flex;gap:.5rem;background:var(--accent);color:#000;padding:.75rem 1.5rem;border-radius:var(--radius);font-weight:600;transition:transform .2s}
.cta:hover{transform:translateY(-3px)}
/* ---------- SKILLS ---------- */
.skills{display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center}
.skills span{background:var(--card);padding:.5rem 1rem;border-radius:var(--radius);font-size:.9rem}
/* ---------- PROJECTS ---------- */
.projects{display:grid;gap:var(--gap);grid-template-columns:repeat(auto-fit,minmax(260px,1fr))}
.card{background:var(--card);border-radius:var(--radius);padding:var(--gap);display:flex;flex-direction:column;transition:transform .2s}
.card:hover{transform:translateY(-5px)}
.card h3{margin-bottom:.5rem}
.card p{flex:1;margin-bottom:1rem;color:var(--muted)}
.card .tech{display:flex;flex-wrap:wrap;gap:.5rem;margin-top:auto}
.card .tech span{background:#000;padding:.25rem .6rem;border-radius:4px;font-size:.75rem}
/* ---------- FOOTER ---------- */
footer{text-align:center;padding:3rem 1rem 2rem;color:var(--muted)}
/* ---------- RESPONSIVE ---------- */
@media(max-width:600px){
  header{flex-direction:column;text-align:center}
  nav a{margin:.5rem}
}
</style>
</head>
<body>

<!-- ---------- HEADER ---------- -->
<header>
  <h1><?= $fullName ?></h1>
  <nav>
    <a href="#about">About</a>
    <a href="#skills">Skills</a>
    <a href="#projects">Projects</a>
    <a href="#contact">Contact</a>
  </nav>
</header>

<!-- ---------- HERO ---------- -->
<section class="hero" id="about">
  <h2><?= $jobTitle ?></h2>
  <p>Building robust, test-driven applications with Laravel and modern tooling. From REST APIs to real-time dashboards, I turn ideas into scalable products.</p>
  <a href="#projects" class="cta">See my work</a>
</section>

<!-- ---------- SKILLS ---------- -->
<section id="skills">
  <h2>Tech Stack</h2>
  <div class="skills">
    <?php foreach ($skills as $s): ?>
      <span><?= $s ?></span>
    <?php endforeach; ?>
  </div>
</section>

<!-- ---------- PROJECTS ---------- -->
<section id="projects">
  <h2>Featured Projects</h2>
  <div class="projects">
    <?php foreach ($projects as $p): ?>
      <div class="card">
        <h3><?= $p['title'] ?></h3>
        <p><?= $p['desc'] ?></p>
        <div class="tech">
          <?php foreach ($p['tech'] as $t): ?>
            <span><?= $t ?></span>
          <?php endforeach; ?>
        </div>
        <a href="<?= $p['link'] ?>" target="_blank" rel="noopener" style="margin-top:1rem;color:var(--accent);font-weight:600;">View on GitHub →</a>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ---------- CONTACT ---------- -->
<section id="contact">
  <h2>Let’s Connect</h2>
  <p style="text-align:center;margin-bottom:1.5rem;color:var(--muted)">
    <?= $email ?> | <?= $phone ?> | <?= $location ?>
  </p>
  <div style="display:flex;justify-content:center;gap:1.5rem;font-size:1.5rem">
    <a href="<?= $github ?>" target="_blank" rel="noopener" aria-label="GitHub">GitHub</a>
    <a href="<?= $linkedin ?>" target="_blank" rel="noopener" aria-label="LinkedIn">LinkedIn</a>
    <a href="<?= $twitter ?>" target="_blank" rel="noopener" aria-label="Twitter">Twitter</a>
  </div>
</section>

<!-- ---------- FOOTER ---------- -->
<footer>
  &copy; <?= date('Y') ?> <?= $fullName ?>. Crafted with PHP & pure CSS.
</footer>

</body>
</html>