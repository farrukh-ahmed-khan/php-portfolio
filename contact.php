<?php
session_start();

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$errors = [];
$successMessage = '';
$name = '';
$email = '';
$subject = '';
$message = '';

if (empty($_SESSION['contact_csrf'])) {
    $_SESSION['contact_csrf'] = bin2hex(random_bytes(16));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $token = $_POST['csrf_token'] ?? '';

    if (!hash_equals($_SESSION['contact_csrf'], $token)) {
        $errors[] = 'Invalid form token.';
    }

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '') {
        $errors[] = 'Name required';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Valid email required';
    }

    if ($message === '') {
        $errors[] = 'Message required';
    }

    if (!$errors) {

        $mail = new PHPMailer(true);

        try {

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'khanfarrukh200@gmail.com';
            $mail->Password = 'tail yssx huuu mhdr';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('khanfarrukh200@gmail.com', 'Portfolio');

            $mail->addAddress('khanfarrukh200@gmail.com');

            $mail->addReplyTo($email, $name);

            $mail->Subject = $subject ?: 'Portfolio Contact';

            $mail->Body = "

Name: $name

Email: $email

Subject: $subject

Message:

$message

";

            $mail->send();

            $successMessage = "Message sent successfully";

            $_SESSION['contact_csrf'] = bin2hex(random_bytes(16));

        } catch (Exception $e) {

            $errors[] = $mail->ErrorInfo;

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
    <section class="get_in_touch">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-5 col-md-12 mb-4">
               <div class="get-in-touch-head">
                  <h4>
                     Get in <span>Touch</span>
                  </h4>
               </div>
               <div class="get-in-touch-para">
                  <p>
                     Available for Full Stack and React Native app development projects. Reach out for web platforms, APIs, dashboards, and mobile applications.
                  </p>
               </div>
               <div class="address-call-email">
                  <div class="con-wrapper wow flipInY" style="animation-delay: 0.2s; visibility: visible; animation-name: flipInY;">
                     <div class="con-icon">
                        <img src="assets/images/location.png" alt="Portfolio image" srcset="" loading="lazy" decoding="async">
                     </div>
                     <div class="con-text">
                        <h3>Address</h3>
                        <p>Karachi, Pakistan</p>
                     </div>
                  </div>

                  <div class="con-wrapper wow flipInY" style="animation-delay: 0.6s; visibility: visible; animation-name: flipInY;">
                     <div class="con-icon">
                        <img src="assets/images/phone-icon.png" alt="Portfolio image" loading="lazy" decoding="async">
                     </div>
                     <div class="con-text ">
                        <h3>Call Us</h3>
                        <p>+92 348 1339849</p>
                     </div>
                  </div>
                  <div class="con-wrapper wow flipInY" style="animation-delay: 0.9s; visibility: visible; animation-name: flipInY;">
                     <div class="con-icon">
                        <img src="assets/images/gmail.png" alt="Portfolio image" srcset="" loading="lazy" decoding="async">
                     </div>
                     <div class="con-text">
                        <h3>Mail Us</h3>
                        <p>khanfarrukh200@gmail.com</p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- <div class="col-md-1"></div> -->
             <div class="col-lg-1"></div>
            <div class="col-lg-5 col-md-12">
               <div class="form-wrapper">
                  <?php


if ($successMessage) {

echo "<p style='color:green'>$successMessage</p>";

}


foreach ($errors as $error) {

echo "<p style='color:red'>$error</p>";

}


?>
                  <form method="POST" action="">

<input type="hidden" name="csrf_token" value="<?php echo $_SESSION['contact_csrf']; ?>">

<div class="lable-input-wrap">

<label>YOUR NAME</label>

<input type="text" name="name" required>

</div>


<div class="lable-input-wrap">

<label>YOUR EMAIL</label>

<input type="email" name="email" required>

</div>


<div class="lable-input-wrap">

<label>SUBJECT</label>

<input type="text" name="subject">

</div>


<div class="lable-input-wrap">

<label>YOUR MESSAGE</label>

<textarea name="message" required></textarea>

</div>


<div class="sendbtn-wrap">

<button type="submit">SEND MESSAGE</button>

</div>

</form>

               </div>
            </div>
            <div class="col-lg-1 col-md-0"></div>
         </div>
      </div>
   </section>
    <?php include "includes/footer.php"; ?>
    <?php include "includes/scripts.php"; ?>
    <script>
        var ww = window.innerWidth,
         wh = window.innerHeight;
      var torusRadius = 200;
      var torusDiameter = 25;
      var rings = 180;
      var detail = 30;

      var renderer = new THREE.WebGLRenderer({
         canvas: document.querySelector("canvas"),
         antialias: true
      });
      renderer.setSize(ww, wh);

      var scene = new THREE.Scene();
      scene.fog = new THREE.Fog(0x000000, torusRadius * 0.8, torusRadius * 1.1);

      var camera = new THREE.PerspectiveCamera(60, ww / wh, 1, torusRadius * 1.1);
      camera.position.set(Math.cos(0) * torusRadius, 0, Math.sin(0) * torusRadius);

      var light = new THREE.PointLight(0xffffff, 2, 150);
      light.position.set(Math.cos(-Math.PI * 0.3) * torusRadius, 0, Math.sin(-Math.PI * 0.3) * torusRadius);
      scene.add(light);

      TweenMax.to(light.position, 6, {
         x: Math.cos(Math.PI * 0.3) * torusRadius,
         z: Math.sin(Math.PI * 0.3) * torusRadius,
         ease: Power2.easeInOut,
         repeat: -1,
         yoyo: true
      });

      window.addEventListener("resize", function () {
         ww = window.innerWidth;
         wh = window.innerHeight;

         camera.aspect = ww / wh;
         camera.updateProjectionMatrix();

         renderer.setSize(ww, wh);
      });
      var mouse = new THREE.Vector2(0, 0);

      var torus = new THREE.Object3D();
      TweenMax.to(torus.rotation, 90, {
         y: Math.PI * 2,
         ease: Linear.easeNone,
         repeat: -1
      });
      scene.add(torus);

      function createTorus() {
         var geometry = new THREE.BoxBufferGeometry(2, 2, 2);
         for (var i = 0; i < rings; i++) {
            var u = i / rings * Math.PI * 2;
            var ring = new THREE.Object3D();
            ring.position.x = torusRadius * Math.cos(u);
            ring.position.z = torusRadius * Math.sin(u);
            var colorIndex = Math.round(Math.abs(noise.simplex2(Math.cos(u) * 0.5, Math.sin(u) * 0.5)) * 180);
            var color = new THREE.Color("hsl(" + colorIndex + ",50%,50%)");
            var material = new THREE.MeshLambertMaterial({
               color: color
            });
            for (var j = 0; j < detail; j++) {
               var v = j / detail * Math.PI * 2;
               var x = torusDiameter * Math.cos(v) * Math.cos(u);
               var y = torusDiameter * Math.sin(v);
               var z = torusDiameter * Math.cos(v) * Math.sin(u);
               var size = (Math.random() * 5) + 0.1;
               var cube = new THREE.Mesh(geometry, material);
               cube.scale.set(size, size, size);
               cube.position.set(x, y, z);
               var rotation = (Math.random() - 0.5) * Math.PI * 4;
               cube.rotation.set(rotation, rotation, rotation);
               ring.add(cube);
            }
            torus.add(ring);
         }
      }

      function render() {
         requestAnimationFrame(render);
         camera.lookAt(light.position);
         renderer.render(scene, camera);
      }

      createTorus();
      requestAnimationFrame(render);
      gsap.registerPlugin(ScrollTrigger);

      if (window.innerWidth > 768) {
         let sections = gsap.utils.toArray(".slide");

         gsap.to(sections, {
            xPercent: -100 * (sections.length - 1),
            ease: "none",
            scrollTrigger: {
               trigger: ".horizontal-sliders",
               pin: ".main",
               pinSpacing: true,
               scrub: 1,
               end: "+=3000",
            }
         });

         gsap.to('.next-block', {
            backgroundColor: 'tomato',
            scrollTrigger: {
               trigger: '.next-block',
               pinnedContainer: ".main",
               start: 'top 50%',
               toggleActions: 'play none reset none',
            }
         });
      }
    </script>
</body>

</html>
