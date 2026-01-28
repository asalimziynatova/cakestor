<?php
<?php
$fullName   = 'Laila Ahmed';
$jobTitle   = 'PHP Laravel Developer';
$email      = 'laila@example.com';
$phone      = '+20 10 000 0000';
$location   = 'Cairo, Egypt';
$github     = 'https://github.com/lailaahmed';
$linkedin   = 'https://linkedin.com/in/lailaahmed';
$twitter    = 'https://twitter.com/lailaahmed';

$skills = ['Laravel', 'PHP 8', 'Livewire', 'Vue 3', 'Inertia', 'MySQL', 'Redis', 'Docker', 'TDD', 'CI/CD'];

$projects = [
    [
        'title' => 'SheJobs',
        'desc'  => 'Job board built with Laravel & Livewire, helping women land tech roles.',
        'link'  => 'https://github.com/lailaahmed/shejobs',
        'tech'  => ['Laravel', 'Livewire', 'Tailwind', 'Alpine']
    ],
    [
        'title' => 'Bloom CRM',
        'desc'  => 'CRM for flower shops, real-time inventory, Laravel Echo + Vue 3.',
        'link'  => 'https://github.com/lailaahmed/bloom-crm',
        'tech'  => ['Laravel', 'Vue 3', 'Pusher', 'Sanctum']
    ],
    [
        'title' => 'SaaS Queen',
        'desc'  => 'Starter kit for subscription-based Laravel apps.',
        'link'  => 'https://github.com/lailaahmed/saas-queen',
        'tech'  => ['Laravel', 'Cashier', 'Stripe', 'Livewire']
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
/* ---------- VARIABLES ---------- */
:root {
  --bg:#fff0f5;
  --card:#ffffff;
  --primary:#ff4081;
  --text:#330011;
  --muted:#888;
  --radius:16px;
  --font:"Inter", system-ui, -apple-system, Segoe UI, Roboto, sans-serif;
  --gap:2rem;
}
* {box-sizing:border-box;margin:0;padding:0}
body{background:var(--bg);color:var(--text);font-family:var(--font);line-height:1.6;-webkit-font-smoothing:antialiased}
img{max-width:100%;display:block}
a{color:inherit;text-decoration:none}
header,section{padding:var(--gap) calc(var(--gap)*2)}
header{display:flex;flex-wrap:row;justify-content:space-between;align-items:center}
nav a{margin-left:1.2rem;font-weight:600;transition:color .2s}
nav a:hover{color:var(--primary)}
h1,h2,h3{line-height:1.2;font-weight:700}
h1{font-size:clamp(2rem,5vw,3rem)}
h2{font-size:clamp(1.5rem,4vw,2.2rem);margin-bottom:var(--gap)}
.hero{margin-top:4rem;text-align:center}
.hero p{margin:1rem auto 2rem;max-width:600px;color:var(--muted)}
.cta{display:inline-flex;gap:.5rem;background:var(--primary);color:#fff;padding:.75rem 1.5rem;border-radius:var(--radius);font-weight:600;transition:transform .2s}
.cta:hover{transform:translateY(-3px)}
.skills{display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center}
.skills span{background:var(--card);color:var(--primary);padding:.5rem 1rem;border-radius:var(--radius);font-size:.9rem;font-weight:600}
.projects{display:grid;gap:var(--gap);grid-template-columns:repeat(auto-fit,minmax(260px,1fr))}
.card{background:var(--card);border-radius:var(--radius);padding:var(--gap);display:flex;flex-direction:column;box-shadow:0 4px 20px rgba(0,0,0,.05);transition:transform .2s}
.card:hover{transform:translateY(-5px)}
.card h3{margin-bottom:.5rem}
.card p{flex:1;margin-bottom:1rem;color:var(--muted)}
.card .tech{display:flex;flex-wrap:wrap;gap:.5rem;margin-top:auto}
.card .tech span{background:var(--bg);color:var(--primary);padding:.25rem .6rem;border-radius:4px;font-size:.75rem;font-weight:600}
footer{text-align:center;padding:3rem 1rem 2rem;color:var(--muted)}
@media (max-width:600px){
  header{flex-direction:column;text-align:center}
  nav a{margin:.5rem}
}
</style>
</head>
<body>
<header>
  <h1><?= $fullName ?></h1>
  <nav>
    <a href="#about">About</a>
    <a href="#skills">Skills</a>
    <a href="#projects">Projects</a>
    <a href="#contact">Contact</a>
  </nav>
</header>
<section class="hero" id="about">
  <h2><?= $jobTitle ?></h2>
  <p>Empowering women in tech with elegant Laravel applications and clean code.</p>
  <a href="#projects" class="cta">See my work</a>
</section>
<section id="skills">
  <h2>Tech Stack</h2>
  <div class="skills">
    <?php foreach ($skills as $s): ?>
      <span><?= $s ?></span>
    <?php endforeach; ?>
  </div>
</section>
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
        <a href="<?= $p['link'] ?>" target="_blank" rel="noopener" style="margin-top:1rem;color:var(--primary);font-weight:600;">View on GitHub →</a>
      </div>
    <?php endforeach; ?>
  </div>
</section>
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
<footer>
  &copy; <?= date('Y') ?> <?= $fullName ?>. Built with PHP & pink vibes.
</footer>
</body>
</html>