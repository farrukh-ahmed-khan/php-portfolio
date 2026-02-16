<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $pageTitle       = 'Farrukh Ahmed Khan | Projects';
        $pageDescription = 'Selected web and mobile projects built by Farrukh Ahmed Khan using React.js, Node.js, TypeScript, MongoDB, and MySQL.';
        $pagePath        = 'work.php';
        include "includes/compatibility.php";
        include "includes/seo.php";
        include "includes/project-data.php";
        $content = load_project_content();
    ?>
    <link rel="shortcut icon" href="assets/images/vector1.png" />
    <?php include "includes/style.php"; ?>
    <script type="application/ld+json">
    <?php
        $itemList = [
            '@context'        => 'https://schema.org',
            '@type'           => 'ItemList',
            'itemListElement' => [],
        ];
        $index = 1;
        foreach ($content['projects'] as $p) {
            $itemList['itemListElement'][] = [
                '@type'    => 'ListItem',
                'position' => $index++,
                'name'     => $p['title'],
                'url'      => $p['live_url'],
            ];
        }
        echo json_encode($itemList, JSON_UNESCAPED_SLASHES);
    ?>
    </script>

    <style>
        .service-wrapper { padding: 100px 120px; }
        .head-service-wrapper {
            padding: 24px;
            border: 1px solid rgba(245, 234, 20, 0.45);
            border-radius: 16px;
            background: linear-gradient(180deg, rgba(0, 21, 17, 0.88), rgba(0, 12, 10, 0.96));
            box-shadow: 0 14px 35px rgba(0, 0, 0, 0.25);
            margin-bottom: 38px;
        }
        .head-wrapper h1 {
            font-size: 55px;
            line-height: 60px;
            color: #f5ea14;
            text-transform: uppercase;
            font-family: "Gravedigger";
            margin: 0;
        }
        .filter-wrapper { display: flex; align-items: center; justify-content: center; gap: 14px; flex-wrap: wrap; }
        .filter-wrapper .filter {
            padding: 10px 16px;
            border: 1px solid rgba(255, 255, 255, 0.22);
            border-radius: 999px;
            background: rgba(0, 21, 17, 0.7);
            transition: all 0.25s ease;
            cursor: pointer;
        }
        .filter-wrapper .filter h2 {
            color: #fff;
            font-size: 14px;
            line-height: 1;
            text-transform: uppercase;
            margin: 0;
            letter-spacing: 0.8px;
            font-weight: 600;
        }
        .filter-wrapper .filter:hover, .active-filter {
            border-color: #f5ea14;
            background: rgba(245, 234, 20, 0.16);
        }
        .filter-content2, .filter-content3 { display: none; }
        .project-board { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px; }
        .project-line {
            border: 1px solid rgba(255, 255, 255, 0.14);
            border-radius: 14px;
            background: linear-gradient(180deg, rgba(0, 21, 17, 0.9), rgba(0, 12, 10, 0.94));
            padding: 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
        }
        .project-line h3 { margin: 0; color: #fff; font-size: 22px; line-height: 1.25; }
        .project-line p { margin: 6px 0 0; color: #d8dfde; font-size: 14px; text-align: left; }
        .pill {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 6px 10px;
            border-radius: 999px;
            border: 1px solid rgba(245, 234, 20, 0.5);
            color: #f5ea14;
            font-size: 12px;
            text-transform: uppercase;
            white-space: nowrap;
        }
        .case-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px; }
        .case-item {
            border: 1px solid rgba(255, 255, 255, 0.14);
            border-radius: 14px;
            background: linear-gradient(180deg, rgba(0, 21, 17, 0.92), rgba(0, 12, 10, 0.96));
            padding: 20px;
        }
        .case-item h3 { color: #fff; font-size: 24px; line-height: 1.25; margin: 0 0 8px; }
        .case-item p { color: #d8dfde; font-size: 14px; line-height: 1.6; text-align: left; margin: 0; }
        .case-actions { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 12px; }
        .case-item a {
            display: inline-block;
            color: #f5ea14;
            text-decoration: none;
            border-bottom: 1px solid rgba(245, 234, 20, 0.55);
            padding-bottom: 2px;
        }
        .case-item a:hover { color: #fff; border-color: #fff; }
        @media (max-width: 1030px) {
            .service-wrapper { padding: 100px 40px; }
            .head-wrapper h1 { text-align: center; margin-bottom: 20px; }
        }
        @media (max-width: 800px) {
            .service-wrapper { padding: 100px 16px; }
            .project-board, .case-grid { grid-template-columns: 1fr; }
            .project-line { flex-direction: column; align-items: flex-start; }
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

    <section class="service-wrapper">
        <div class="container-fluid">
            <div class="head-service-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-12">
                        <div class="head-wrapper">
                            <h1>Projects</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="filter-wrapper">
                            <div class="filter filter1 active-filter" data-filter="1"><h2>Project Domain</h2></div>
                            <div class="filter filter2" data-filter="2"><h2>Technology Stack</h2></div>
                            <div class="filter filter3" data-filter="3"><h2>All Case Studies</h2></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-0"></div>
                </div>
            </div>

            <div class="filter-content filter-content1">
                <div class="project-board">
                    <?php foreach ($content['domains'] as $domain): ?>
                        <article class="project-line">
                            <div>
                                <h3><?php echo e($domain['title']); ?></h3>
                                <p><?php echo e($domain['description']); ?></p>
                            </div>
                            <span class="pill">Domain</span>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="filter-content filter-content2">
                <div class="project-board">
                    <?php foreach ($content['stacks'] as $stack): ?>
                        <article class="project-line">
                            <div>
                                <h3><?php echo e($stack['title']); ?></h3>
                                <p><?php echo e($stack['description']); ?></p>
                            </div>
                            <span class="pill">Stack</span>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="filter-content filter-content3">
                <div class="case-grid">
                    <?php foreach ($content['projects'] as $project): ?>
                        <article class="case-item">
                            <h3><?php echo e($project['title']); ?></h3>
                            <p><?php echo e($project['summary']); ?></p>
                            <div class="case-actions">
                                <a href="project.php?slug=<?php echo urlencode($project['slug']); ?>">View Details</a>
                                <a href="<?php echo e($project['live_url']); ?>" target="_blank" rel="noreferrer">Visit Project</a>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <?php include "includes/footer.php"; ?>
    <?php include "includes/scripts.php"; ?>
    <script>
        $(document).ready(function() {
            $(".filter").click(function() {
                $(".filter").removeClass("active-filter");
                $(this).addClass("active-filter");
                var filterNumber = $(this).attr("data-filter");
                $(".filter-content").hide();
                $(".filter-content" + filterNumber).show();
            });
        });

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
