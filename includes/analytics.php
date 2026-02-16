<?php
$gaMeasurementId = getenv('GA_MEASUREMENT_ID') ?: '';
$plausibleDomain = getenv('PLAUSIBLE_DOMAIN') ?: '';
?>
<?php if ($plausibleDomain !== ''): ?>
<script defer data-domain="<?php echo htmlspecialchars($plausibleDomain, ENT_QUOTES, 'UTF-8'); ?>" src="https://plausible.io/js/script.js"></script>
<?php endif; ?>

<?php if ($gaMeasurementId !== ''): ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($gaMeasurementId, ENT_QUOTES, 'UTF-8'); ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '<?php echo htmlspecialchars($gaMeasurementId, ENT_QUOTES, 'UTF-8'); ?>');
</script>
<?php endif; ?>

