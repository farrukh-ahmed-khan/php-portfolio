<?php
include("includes/project-data.php");
$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$project = get_project_by_slug($slug);
if (!$project) {
    http_response_code(404);
    include("404.php");
    exit;
}

$pageTitle = $project['title'] . ' | Project Case Study';
$pageDescription = $project['summary'];
$pagePath = 'project.php?slug=' . urlencode($project['slug']);
$pageType = 'article';
$projectSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'SoftwareSourceCode',
    'name' => $project['title'],
    'description' => $project['summary'],
    'url' => $project['live_url'],
    'author' => [
        '@type' => 'Person',
        'name' => 'Farrukh Ahmed Khan'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/compatibility.php"); ?>
    <?php include("includes/seo.php"); ?>
    <link rel="shortcut icon" href="assets/images/vector1.png" />
    <?php include("includes/style.php"); ?>
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
<?php include("includes/header.php"); ?>
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

<?php include("includes/footer.php"); ?>
<?php include("includes/scripts.php"); ?>

<script>
    
</script>
</body>
</html>
