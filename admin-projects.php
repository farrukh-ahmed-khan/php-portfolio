<?php
$adminKey = getenv('PROJECT_ADMIN_KEY') ?: 'change-this-key';
$providedKey = $_GET['key'] ?? ($_POST['key'] ?? '');
$authorized = hash_equals($adminKey, (string) $providedKey);
$jsonPath = __DIR__ . '/data/projects.json';
$message = '';
$error = '';

if ($authorized && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $raw = $_POST['json'] ?? '';
    $decoded = json_decode($raw, true);
    if (!is_array($decoded)) {
        $error = 'Invalid JSON format.';
    } else {
        file_put_contents($jsonPath, json_encode($decoded, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        $message = 'Projects JSON saved successfully.';
    }
}

$current = file_exists($jsonPath) ? file_get_contents($jsonPath) : '{}';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/compatibility.php"); ?>
    <title>Projects Admin</title>
    <?php include("includes/style.php"); ?>
    <style>
        .admin-wrap { padding: 110px 20px 60px; max-width: 1100px; margin: 0 auto; }
        textarea { width: 100%; min-height: 520px; background: #0c1311; color: #fff; border: 1px solid #f5ea1450; padding: 14px; border-radius: 8px; font-family: Consolas, monospace; font-size: 13px; }
        .admin-msg { margin: 12px 0; }
        .ok { color: #8dffca; }
        .err { color: #ff9f9f; }
        .admin-form input[type='text'] { width: 260px; margin-bottom: 10px; }
    </style>
</head>
<body>
<?php include("includes/header.php"); ?>
<div class="admin-wrap">
    <h1 style="color:#f5ea14;">Projects JSON Admin</h1>
    <?php if (!$authorized): ?>
        <p style="color:#fff;">Access denied. Provide key in URL, example: <code>?key=your-key</code></p>
    <?php else: ?>
        <?php if ($message): ?><p class="admin-msg ok"><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p><?php endif; ?>
        <?php if ($error): ?><p class="admin-msg err"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p><?php endif; ?>
        <form method="post" class="admin-form">
            <input type="hidden" name="key" value="<?php echo htmlspecialchars($providedKey, ENT_QUOTES, 'UTF-8'); ?>">
            <textarea name="json"><?php echo htmlspecialchars($current, ENT_QUOTES, 'UTF-8'); ?></textarea>
            <p style="margin-top:10px;"><button type="submit">Save JSON</button></p>
        </form>
    <?php endif; ?>
</div>
<?php include("includes/footer.php"); ?>
<?php include("includes/scripts.php"); ?>
</body>
</html>
