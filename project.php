<?php
    include "includes/project-data.php";
    $slug    = isset($_GET['slug']) ? trim($_GET['slug']) : '';
    $project = get_project_by_slug($slug);
    if (! $project) {
    http_response_code(404);
    include "404.php";
    exit;
    }

    $pageTitle       = $project['title'] . ' | Project Case Study';
    $pageDescription = $project['summary'];
    $pagePath        = 'project.php?slug=' . urlencode($project['slug']);
    $pageType        = 'article';
    $projectSchema   = [
    '@context'    => 'https://schema.org',
    '@type'       => 'SoftwareSourceCode',
    'name'        => $project['title'],
    'description' => $project['summary'],
    'url'         => $project['live_url'],
    'author'      => [
        '@type' => 'Person',
        'name'  => 'Farrukh Ahmed Khan',
    ],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "includes/compatibility.php"; ?>
    <?php include "includes/seo.php"; ?>
    <link rel="shortcut icon" href="assets/images/vector1.png" />
    <?php include "includes/style.php"; ?>
    <style>
        .project-template { padding: 110px 90px 80px; }
        .project-hero {
            border: 1px solid rgba(245,234,20,.45);
            border-radius: 16px;
            padding: 26px;
            background: linear-gradient(180deg, rgba(0,21,17,.88), rgba(0,12,10,.96));
            margin-bottom: 24px;
        }
        .project-hero h1 { color: #f5ea14; font-family: "Gravedigger"; margin: 0 0 8px; }
        .project-hero p { color: #d8dfde; margin: 0; text-align: left; }
        .project-meta {
            display: grid;
            grid-template-columns: repeat(3, minmax(0,1fr));
            gap: 14px;
            margin-bottom: 22px;
        }
        .meta-card {
            border: 1px solid rgba(255,255,255,.14);
            border-radius: 12px;
            padding: 14px;
            background: rgba(0,21,17,.65);
        }
        .meta-card h3 { margin: 0 0 6px; color: #fff; font-size: 18px; }
        .meta-card p { margin: 0; text-align: left; color: #d8dfde; font-size: 14px; }
        .project-sections {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-bottom: 20px;
        }
        .section-card {
            border: 1px solid rgba(255,255,255,.14);
            border-radius: 12px;
            padding: 16px;
            background: linear-gradient(180deg, rgba(0,21,17,.9), rgba(0,12,10,.95));
        }
        .section-card h2 { margin: 0 0 8px; color: #fff; font-size: 24px; }
        .section-card p { color: #d8dfde; text-align: left; margin: 0; }
        .section-card ul { margin: 0; padding-left: 18px; color: #d8dfde; }
        .screens {
            display: grid;
            grid-template-columns: repeat(3, minmax(0,1fr));
            gap: 12px;
        }
        .screens img {
            width: 100%;
            border-radius: 12px;
            border: 1px solid rgba(255,255,255,.14);
            height: 220px;
            object-fit: cover;
        }
        .project-links { margin-top: 14px; display: flex; gap: 14px; flex-wrap: wrap; }
        .project-links a { color: #f5ea14; border-bottom: 1px solid rgba(245,234,20,.6); text-decoration: none; }
        .project-links a:hover { color: #fff; border-color: #fff; }
        @media (max-width: 900px) {
            .project-template { padding: 100px 16px 70px; }
            .project-meta, .project-sections, .screens { grid-template-columns: 1fr; }
        }
    </style>
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
                     Projects
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

<section class="project-template">
    <div class="container-fluid">
        <div class="project-hero">
            <h1><?php echo e($project['title']); ?></h1>
            <p><?php echo e($project['summary']); ?></p>
            <div class="project-links">
                <a href="work.php">Back to Projects</a>
                <a href="<?php echo e($project['live_url']); ?>" target="_blank" rel="noreferrer">Visit Live Project</a>
            </div>
        </div>

        <div class="project-meta">
            <div class="meta-card">
                <h3>Domain</h3>
                <p><?php echo e($project['domain']); ?></p>
            </div>
            <div class="meta-card">
                <h3>Tech Stack</h3>
                <p><?php echo e($project['tech']); ?></p>
            </div>
            <div class="meta-card">
                <h3>Role</h3>
                <p><?php echo e($project['role']); ?></p>
            </div>
        </div>

        <div class="project-sections">
            <article class="section-card">
                <h2>Problem</h2>
                <p><?php echo e($project['problem']); ?></p>
            </article>
            <article class="section-card">
                <h2>Outcomes</h2>
                <ul>
                    <?php foreach (($project['outcomes'] ?? []) as $outcome): ?>
                        <li><?php echo e($outcome); ?></li>
                    <?php endforeach; ?>
                </ul>
            </article>
        </div>

        <div class="section-card">
            <h2>Screenshots</h2>
            <div class="screens">
                <?php foreach (($project['screenshots'] ?? []) as $shot): ?>
                    <img src="<?php echo e($shot); ?>" alt="<?php echo e($project['title']); ?> screenshot" loading="lazy" decoding="async">
                <?php endforeach; ?>
            </div>
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
