<?php
include __DIR__ . '/includes/project-data.php';
header('Content-Type: application/xml; charset=UTF-8');

$isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');
$scheme = $isHttps ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$base = $scheme . '://' . $host;

$urls = [
    '/index.php',
    '/about.php',
    '/services.php',
    '/work.php',
    '/contact.php'
];

foreach (get_projects() as $project) {
    $urls[] = '/project.php?slug=' . urlencode($project['slug']);
}

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";
foreach ($urls as $path) {
    echo "  <url><loc>" . htmlspecialchars($base . $path, ENT_QUOTES, 'UTF-8') . "</loc></url>\n";
}
echo "</urlset>";
