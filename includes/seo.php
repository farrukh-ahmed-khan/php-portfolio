<?php
$defaultTitle = 'Farrukh Ahmed Khan | Full Stack Developer';
$defaultDescription = 'Full Stack Developer specializing in React.js, Node.js, TypeScript, REST APIs, MongoDB, MySQL, and React Native.';

$title = $pageTitle ?? $defaultTitle;
$description = $pageDescription ?? $defaultDescription;
$type = $pageType ?? 'website';
$path = $pagePath ?? '';

$isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');
$scheme = $isHttps ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$url = $scheme . '://' . $host . '/' . ltrim($path, '/');
$image = $scheme . '://' . $host . '/assets/images/vector1.png';
?>
<meta name="description" content="<?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?>">
<title><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></title>
<meta property="og:type" content="<?php echo htmlspecialchars($type, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($url, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:image" content="<?php echo htmlspecialchars($image, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="twitter:image" content="<?php echo htmlspecialchars($image, ENT_QUOTES, 'UTF-8'); ?>">
<link rel="canonical" href="<?php echo htmlspecialchars($url, ENT_QUOTES, 'UTF-8'); ?>">

<script type="application/ld+json">
<?php
$websiteSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebSite',
    'name' => 'Farrukh Ahmed Khan Portfolio',
    'url' => $scheme . '://' . $host . '/'
];
echo json_encode($websiteSchema, JSON_UNESCAPED_SLASHES);
?>
</script>
<script type="application/ld+json">
<?php
$personSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Person',
    'name' => 'Farrukh Ahmed Khan',
    'jobTitle' => 'Full Stack Developer',
    'url' => $scheme . '://' . $host . '/',
    'sameAs' => [
        'https://github.com/farrukh-ahmed-khan',
        'https://www.linkedin.com/in/farrukh-ahmed-khan/',
        'https://farrukh-ahmed-khan.vercel.app/'
    ],
    'email' => 'mailto:khanfarrukh200@gmail.com',
    'telephone' => '+923481339849'
];
echo json_encode($personSchema, JSON_UNESCAPED_SLASHES);
?>
</script>
<?php if (isset($projectSchema) && is_array($projectSchema)): ?>
<script type="application/ld+json"><?php echo json_encode($projectSchema, JSON_UNESCAPED_SLASHES); ?></script>
<?php endif; ?>

