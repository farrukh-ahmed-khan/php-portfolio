<?php
    session_start();

    $errors         = [];
    $successMessage = '';
    $name           = '';
    $email          = '';
    $subject        = '';
    $message        = '';

    if (empty($_SESSION['contact_csrf'])) {
    $_SESSION['contact_csrf'] = bin2hex(random_bytes(16));
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['csrf_token'] ?? '';
    if (! hash_equals($_SESSION['contact_csrf'], $token)) {
        $errors[] = 'Invalid form token. Please refresh and try again.';
    }

    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '' || strlen($name) < 2) {
        $errors[] = 'Please enter a valid name.';
    }
    if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address.';
    }
    if ($message === '' || strlen($message) < 10) {
        $errors[] = 'Message should be at least 10 characters.';
    }

    if (! $errors) {
        $to          = 'khanfarrukh200@gmail.com';
        $safeSubject = $subject !== '' ? $subject : 'New Portfolio Contact Message';
        $body        = "Name: {$name}\nEmail: {$email}\nSubject: {$safeSubject}\n\nMessage:\n{$message}";
        $headers     = "From: {$email}\r\nReply-To: {$email}\r\nX-Mailer: PHP/" . phpversion();

        if (@mail($to, $safeSubject, $body, $headers)) {
            $successMessage           = 'Thanks, your message was sent successfully.';
            $name                     = '';
            $email                    = '';
            $subject                  = '';
            $message                  = '';
            $_SESSION['contact_csrf'] = bin2hex(random_bytes(16));
        } else {
            $errors[] = 'Message could not be sent from this server. Please email directly at khanfarrukh200@gmail.com.';
        }
    }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $pageTitle       = 'Farrukh Ahmed Khan | Contact';
        $pageDescription = 'Contact Farrukh Ahmed Khan for Full Stack and React Native development projects.';
        $pagePath        = 'contact.php';
        include "includes/compatibility.php";
        include "includes/seo.php";
    ?>
    <link rel="shortcut icon" href="assets/images/vector1.png" />
    <?php include "includes/style.php"; ?>
</head>

<body>
    <?php include "includes/header.php"; ?>
    <div class="circle-cursor"></div>
     <section class="firstSec">
      <!-- id="particle-canvas" -->
      <canvas></canvas>
      <div class="overlay">

      </div>
      <div class="container-fluid" style="z-index:10 !important">
         <div class="row">
            <div class="col-md-12">
               <div class="banner-content">
                   <h1 class="wow bounceIn" style="animation-delay: 0.3s; visibility: visible; animation-name: bounceIn;">
                     Contact Me
                  </h1>
                  <div class="Iam">
                     <p>
                        Grow with Us Make Your business world wide
                     </p>
                  </div>
                  <div class="p2 mt-35 widthCus">
                     <p>Ready to hand over your new project to our masterminds?</p>
                  </div>

               </div>
            </div>
         </div>

      </div>
   </section>
    <section class="softnox-contact-form-wrapper r1 get_in_touch">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="get-in-touch-head">
                        <h1>Let&apos;s get in <span>touch</span>.</h1>
                    </div>
                    <div class="get-in-touch-para">
                        <p>
                            Available for Full Stack and React Native app development projects.
                        </p>
                    </div>
                    <div class="address-call-email">
                        <div class="con-wrapper wow flipInY" style="animation-delay: 0.2s; visibility: visible; animation-name: flipInY;">
                            <div class="con-icon">
                                <img src="assets/images/location.png" alt="Location icon">
                            </div>
                            <div class="con-text">
                                <h2>Address</h2>
                                <p>Karachi, Pakistan</p>
                            </div>
                        </div>

                        <div class="con-wrapper wow flipInY" style="animation-delay: 0.6s; visibility: visible; animation-name: flipInY;">
                            <div class="con-icon">
                                <img src="assets/images/phone-icon.png" alt="Phone icon">
                            </div>
                            <div class="con-text">
                                <h2>Call Us</h2>
                                <p>+92 348 1339849</p>
                            </div>
                        </div>
                        <div class="con-wrapper wow flipInY" style="animation-delay: 0.9s; visibility: visible; animation-name: flipInY;">
                            <div class="con-icon">
                                <img src="assets/images/gmail.png" alt="Email icon">
                            </div>
                            <div class="con-text">
                                <h2>Mail Us</h2>
                                <p>khanfarrukh200@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 valign">
                    <div class="full-width">
                        <?php if ($successMessage !== ''): ?>
                            <div class="form-alert success" role="status" aria-live="polite"><?php echo htmlspecialchars($successMessage, ENT_QUOTES, 'UTF-8'); ?></div>
                        <?php endif; ?>
                        <?php if ($errors): ?>
                            <div class="form-alert error" role="alert" aria-live="assertive">
                                <?php foreach ($errors as $error): ?>
                                    <div><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <form id="contact-form" method="post" action="contact.php" novalidate>
                            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['contact_csrf'], ENT_QUOTES, 'UTF-8'); ?>">
                            <div class="controls row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <label for="form_name" class="sr-only">Name</label>
                                        <input id="form_name" type="text" name="name" placeholder="Name" required value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>" aria-label="Your name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <label for="form_email" class="sr-only">Email</label>
                                        <input id="form_email" type="email" name="email" placeholder="Email" required value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>" aria-label="Your email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-30">
                                        <label for="form_subject" class="sr-only">Subject</label>
                                        <input id="form_subject" type="text" name="subject" placeholder="Subject" value="<?php echo htmlspecialchars($subject, ENT_QUOTES, 'UTF-8'); ?>" aria-label="Message subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="form_message" class="sr-only">Message</label>
                                        <textarea id="form_message" name="message" placeholder="Message" rows="4" required aria-label="Your message"><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></textarea>
                                    </div>
                                    <div class="mt-30">
                                        <button type="submit" class="butn butn-md butn-bord radius-30" data-track-click="contact-submit">
                                            <span class="text">Send Message</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="layer " id="moving-image">
                        <img src="assets/images/banner_layer.png" alt="Background shape" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "includes/footer.php"; ?>
    <?php include "includes/scripts.php"; ?>
    <script>
        
    </script>
</body>

</html>
