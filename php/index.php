<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>multi store</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <h1>Multi store</h1>
</header>

<?php
$projects = [
  [
    "title" => "Caroline City",
    "desc" => "GTA-style Unity game with open-world mechanics.",
    "img" => "images/gta-game.png",
    "link" => "#"
  ],
  [
    "title" => "AI Chatbot",
    "desc" => "Smart assistant chatbot made with PHP and JavaScript.",
    "img" => "images/ai-bot.png",
    "link" => "#"
  ],
  [
    "title" => "Anime Task App",
    "desc" => "Level-up style task manager inspired by Solo Leveling.",
    "img" => "images/app-showcase.png",
    "link" => "#"
  ],
  // Add more apps here
];

$videos = [
  [
    "title" => "Game Trailer",
    "embed" => "https://www.youtube.com/embed/dQw4w9WgXcQ"
  ],
  [
    "title" => "Task App Demo",
    "embed" => "https://www.youtube.com/embed/YOUR_VIDEO_ID"
  ],
  // Add more videos here
];
?>

<section class="projects">
  <h2>Featured Projects</h2>
  <?php foreach ($projects as $proj): ?>
    <div class="project">
      <img src="<?= $proj['img'] ?>" alt="<?= $proj['title'] ?>">
      <div>
        <h3><?= $proj['title'] ?></h3>
        <p><?= $proj['desc'] ?></p>
        <a href="<?= $proj['link'] ?>" target="_blank">Explore</a>
      </div>
    </div>
  <?php endforeach; ?>
</section>

<section class="videos">
  <h2>Video Demos</h2>
  <?php foreach ($videos as $vid): ?>
    <div class="video-box">
      <h3><?= $vid['title'] ?></h3>
      <iframe width="560" height="315" src="<?= $vid['embed'] ?>" frameborder="0" allowfullscreen></iframe>
    </div>
  <?php endforeach; ?>
</section>

<footer>
  <p>&copy; 2025 Charan Inc. All rights reserved.</p>
</footer>

</body>
</html>