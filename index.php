<!DOCTYPE html>
<html lang="en">

<head>
   <?php
       $pageTitle       = 'Farrukh Ahmed Khan | Portfolio';
       $pageDescription = 'Full Stack Developer portfolio featuring React.js, Node.js, TypeScript, REST APIs, MongoDB, MySQL, and React Native projects.';
       $pagePath        = 'index.php';
       include "includes/compatibility.php";
       include "includes/seo.php";
   ?>
   <link rel="shortcut icon" href="assets/images/vector1.png" />
   <?php include "includes/style.php"; ?>

</head>

<body>
   <?php include "includes/header.php"; ?>
   <div class="circle-cursor"></div>

   <section class="banner-color r1">
      <div class="container-fluid">
         <div class="row pad-top pad-btm-70 d-flex align-items-center ">
            <div class="col-lg-8 col-md-12">
               <div class="banner-content">
                  <h1 class="wow flipInY" style="animation-delay: 0.2s; visibility: visible; animation-name: flipInY;">BUILDING&nbsp;
                  </h1>
                  <h1 class="wow bounceIn" style="animation-delay: 0.3s; visibility: visible; animation-name: bounceIn;">
                     FARRUKH AHMED KHAN
                  </h1>
               </div>
               <div class="banner-contents">
                  <h1 class="wow flipInY" style="animation-delay: 0.4s; visibility: visible; animation-name: flipInY;">
                     FULL STACK
                  </h1>
               </div>
               <div class="banner-content">

                  <h1 class="wow bounceIn" style="animation-delay: 0.8s; visibility: visible; animation-name: bounceIn;">
                     WEB AND MOBILE
                  </h1>
               </div>

               <div class="banner-contents">
                  <h1 class="wow flipInY" style="animation-delay: 0.6s; visibility: visible; animation-name: flipInY;">
                     SOLUTIONS
                  </h1>
               </div>
               <div class="about_us_btn mt-3">
                  <a href="download-cv.php" class="cv-btn" data-track-click="cv-hero">Download CV</a>
               </div>

            </div>
            <div class="col-lg-4 col-md-12">
               <div class=" banner_vector_icons ml-5 wow bounceInRight" style="animation-delay: 1s;">
                  <img src="assets/images/vector1.png" alt="" srcset="" class="float-up first">
                  <img src="assets/images/vector2.png" alt="" srcset="" class="float-down">
               </div>
               <div class="layer " id="moving-image">
                  <img src="assets/images/banner_layer.png" alt="" srcset="">
               </div>

            </div>

         </div>

      </div>
   </section>

   <section class="about-us about_after">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6 col-md-12 pb-4">
               <div class="row">
                  <div class="col-md-12 ">
                     <div class="about_us_head">
                        <h4 class="wow slideInLeft">ABOUT ME</h4>
                     </div>
                     <div class="about_subhead">
                        <h3 class="wow flipInY" style="animation-delay: 0.2s; visibility: visible; animation-name: flipInY;">I Build</h3>
                        <h3 class="wow bounceIn" style="animation-delay: 0.3s; visibility: visible; animation-name: bounceIn;">
                           SCALABLE
                        </h3>
                        <h3 class="wow flipInY" style="animation-delay: 0.4s; visibility: visible; animation-name: flipInY;">
                           scalable products.
                        </h3>
                     </div>
                     <div class="bdr_btm wow slideInLeft" style="animation-delay: 0.2s;">
                     </div>
                     <div class="about_us_para_head mb-3 wow slideInLeft" style="animation-delay: 0.6s;">
                        <span>Full Stack + React Native Developer</span>
                     </div>
                     <div class="about_us_para wow slideInLeft" style="animation-delay: 1s;">
                        <p>
                           A skilled and motivated Full Stack Developer with hands-on experience in React.js, Node.js, TypeScript, REST APIs, MongoDB, and MySQL. I develop responsive, user-friendly, and visually appealing applications for web and mobile platforms.
                        </p>
                        <p class="mt-3">
                           I also build mobile applications with React Native and collaborate closely with teams to deliver maintainable, high-performance products.
                        </p>
                     </div>
                     <div class="about_us_btn">
                        <a href="./about.php" class="btn">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-12">
               <div class="cards-wrapper">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-6 col-md-12 mb-3">
                           <div class="card crd1 wow bounceIn" style="animation-delay: 0.2s; width: 100%; height: 100%;">
                              <div class="wow flip" style="animation-delay: 1s; visibility: visible; animation-name: flip;">
                                 <img src="assets/images/video_icon.png" class="card-img-top" alt="...">
                              </div>

                              <div class="card-body">
                                 <h5 class="card-title">Frontend Engineering</h5>
                                 <p class="card-text">React.js, Next.js, Redux, Tailwind CSS, MUI</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mb-3">
                           <div class="card crd2 wow bounceIn" style="animation-delay: 0.6s; width: 100%; height: 100%;">
                              <div class="wow flip" style="animation-delay: 1.5s; visibility: visible; animation-name: flip;">
                                 <img src="assets/images/ux.png" class="card-img-top" alt="...">
                              </div>
                              <div class="card-body">
                                 <h5 class="card-title">Backend & APIs</h5>
                                 <p class="card-text">Node.js, Express.js, NestJS, REST API Integration</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mb-3">
                           <div class="card crd3 wow bounceIn" style="animation-delay: 0.9s; width: 100%; height: 100%;">
                              <div class="wow flip" style="animation-delay: 2s; visibility: visible; animation-name: flip;">
                                 <img src="assets/images/Web_icon.png" class="card-img-top" alt="...">
                              </div>
                              <div class="card-body">
                                 <h5 class="card-title">Databases & Cloud</h5>
                                 <p class="card-text">MongoDB, MySQL, Firebase Database, AWS</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mb-3">
                           <div class="card crd4 wow bounceIn" style="animation-delay: 1.2s; width: 100%; height: 100%;">
                              <div class="wow flip" style="animation-delay: 2.5s; visibility: visible; animation-name: flip;">
                                 <img src="assets/images/graphic_icon.png" class="card-img-top" alt="...">
                              </div>
                              <div class="card-body">
                                 <h5 class="card-title">Mobile Apps</h5>
                                 <p class="card-text">React Native, API Integration, Cross-platform Apps</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="latest-product">
      <div class="container-fluid">
         <div class="row d-flex align-items-center">
            <div class="col-md-9">
               <div class="latest-product-head">
                  <h4 class="wow slideInLeft" style="animation-delay: 0.2s; visibility: visible; animation-name: slideInLeft;">FEATURED PROJECTS</h4>
               </div>
            </div>
            <div class="col-md-3">
               <div class="latest-product-btn">
                  <a href="./about.php" class="wow slideInRight" style="animation-delay: 0.6s; visibility: visible; animation-name: slideInRight;">
                     <p>VIEW PROJECTS</p>
                     <img src="assets/images/more-icon.png" alt="">
                  </a>
               </div>
            </div>
         </div>
      </div>

   </section>
   <section class="prcards">
      <div class="container-fluid p-0">
         <div class="row pt-5 pb-5 pro-card-wrapper">
            <div class="col-md-3">
               <div class="card-container">
                  <div class="pr-card-overlay"><div class="designation"><h5>Web App</h5></div></div>
                  <div class="img-wrap"><img src="assets/images/kepkahouse.png" alt=""></div>
                  <div class="btm-card"><div><img src="assets/images/pr-card-btm.png" alt=""></div><div class="pr-name"><h5>Kepka House</h5><p>Next.js, MongoDb, Redux Toolkit</p><p>
                     <a href="https://kepkahouse.com/" target="_blank" rel="noreferrer" style="color:#fff;text-decoration:underline;">Visit Project</a>
                  </p></div></div>
               </div>
            </div>
            <div class="col-md-3">
   <div class="card-container">
      <div class="pr-card-overlay">
         <div class="designation">
            <h5>Home Services Marketplace</h5>
         </div>
      </div>
      <div class="img-wrap">
         <img src="assets/images/goferassistants.png" alt="Gofer Assistants">
      </div>
      <div class="btm-card">
         <div>
            <img src="assets/images/pr-card-btm.png" alt="">
         </div>
         <div class="pr-name">
            <h5>Gofer Assistants</h5>
            <p>React.js, Node.js, MongoDB, Stripe, REST API</p>

            <p>
               <a href="https://goferassistants.com/" target="_blank" rel="noreferrer" style="color:#fff;text-decoration:underline;">
               Visit Project</a>
            </p>
         </div>
      </div>
   </div>
</div>


            <div class="col-md-3">
               <div class="card-container">
                  <div class="pr-card-overlay"><div class="designation"><h5>Sports Platform</h5></div></div>
                  <div class="img-wrap"><img src="assets/images/pr-card.png" alt=""></div>
                  <div class="btm-card"><div><img src="assets/images/pr-card-btm.png" alt=""></div><div class="pr-name"><h5>Four Coaches</h5><p>React.js, Node.js, MongoDB, Context API</p>
                  <p><a href="https://stage1001.devdesignbuild.com/" target="_blank" rel="noreferrer" style="color:#fff;text-decoration:underline;">Visit Project</a></p></div></div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="card-container">
                  <div class="pr-card-overlay"><div class="designation"><h5>E-Commerce</h5></div></div>
                  <div class="img-wrap"><img src="assets/images/amaun.png" alt=""></div>
                  <div class="btm-card"><div><img src="assets/images/pr-card-btm.png" alt=""></div><div class="pr-name"><h5>Amaun</h5><p>Next.js, MongoDb, Redux Toolkit</p>
                  <p><a href="https://amaun-next.vercel.app/" target="_blank" rel="noreferrer" style="color:#fff;text-decoration:underline;">Visit Project</a></p></div></div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="card-container">
                  <div class="pr-card-overlay"><div class="designation"><h5>Corporate Platform</h5></div></div>
                  <div class="img-wrap"><img src="assets/images/tuxedo.png" alt=""></div>
                  <div class="btm-card"><div><img src="assets/images/pr-card-btm.png" alt=""></div><div class="pr-name"><h5>Tuxedo Air Platform</h5>
                  <p>Laravel, SQL, Blade, JavaScript</p><p><a href="https://tuxedo.infinityfreeapp.com/" target="_blank" rel="noreferrer" style="color:#fff;text-decoration:underline;">Visit Project</a></p></div></div>
               </div>
            </div>
            <div class="col-md-3">
   <div class="card-container">
      <div class="pr-card-overlay">
         <div class="designation">
            <h5>E-commerce Product Showcase</h5>
         </div>
      </div>
      <div class="img-wrap">
         <img src="assets/images/brandon-rosy.png" alt="Peptide Store">
      </div>
      <div class="btm-card">
         <div>
            <img src="assets/images/pr-card-btm.png" alt="">
         </div>
         <div class="pr-name">
            <h5>Peptide Product Website</h5>
            <p>Next.js, React.js, Tailwind CSS, Vercel</p>

            <p>
               <a href="https://brandon-rosy.vercel.app/" target="_blank" rel="noreferrer" style="color:#fff;text-decoration:underline;">
               Visit Project</a>
            </p>
         </div>
      </div>
   </div>
</div>

         </div>
      </div>
   </section>

   <section class="counter-softnox">
      <div class="row">
         <div class="col-lg-3 col-md-6 col-sm-12 pb-3">
            <div class="number-content text-center wow bounceIn" style="animation-delay: 0.2s; visibility: visible; animation-name: bounceIn;">
               <div class="counter-img-wrap">
                  <img src="assets/images/counter1.png" alt="">
               </div>
               <div class="number-increament-wrapper">
                  <span id="number_up1" class="number-increament">4</span><span>+</span>
               </div>
               <p>
                  Years Experience
               </p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12 pb-3">
            <div class="number-content text-center wow bounceIn" style="animation-delay: 0.4s; visibility: visible; animation-name: bounceIn;">
               <div class="counter-img-wrap">
                  <img src="assets/images/counter2.png" alt="">
               </div>
               <div class="number-increament-wrapper">
                  <span id="number_up2" class="number-increament">35</span><span>+</span>
               </div>
               <p class="para">
                  Projects Delivered
               </p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12 pb-3">
            <div class="number-content text-center wow bounceIn" style="animation-delay: 0.6s; visibility: visible; animation-name: bounceIn;">
               <div class="counter-img-wrap">
                  <img src="assets/images/counter3.png" alt="">
               </div>
               <div class="number-increament-wrapper">
                  <span id="number_up3" class="number-increament">20</span><span>+</span>
               </div>
               <p>
                  Core Technologies
               </p>
            </div>
         </div>

         <div class="col-lg-3 col-md-6 col-sm-12 pb-3">
            <div class="number-content text-center  wow bounceIn" style="animation-delay: 0.8s; visibility: visible; animation-name: bounceIn;">
               <div class="counter-img-wrap">
                  <img src="assets/images/counter4.png" alt="">
               </div>
               <div class="number-increament-wrapper">
                  <span id="number_up4" class="number-increament">8</span><span>+</span>
               </div>
               <p>
                  Mobile Apps Built
               </p>
            </div>
         </div>
      </div>
   </section>

   <section class="vertical-gallery">
      <div class="container-fluid p-0 ">
         <div class="row d-flex align-items-center p-100" style="border-bottom: solid 1px #ffffffc2;">
            <div class="col-md-9">
               <div class="wht-we-do-head">
                  <h4>What I Build</h4>
               </div>
            </div>
            <div class="col-md-3">
               <div class="service-btn-wrapper">
                  <a href="./services.php">
                     <p>Skills</p>
                     <img src="assets/images/more-icon.png" alt="">
                  </a>
               </div>
            </div>
         </div>
         <!-- <div class="indicator"></div> -->
         <div class="gallery">
            <div class="gallery-item">
               <div class="gallery-overlay"></div>
               <img src="assets/images/verslider1.jpg" alt="">
               <div class="gallery-slider-content-wrapper">
                  <h4>APPLICATION</h4>
                  <p>
                     I design and build production-grade applications with React.js, Node.js, TypeScript, MongoDB, and MySQL, focusing on performance and maintainability.
                     </br>
                     <span style="    position: relative;
    top: 15px;
    color: #fff;
    ">
                        <a href="" style="color: #fff">
                           Know More
                        </a>
                     </span>


                  </p>


               </div>

            </div>
            <div class="gallery-item">
               <div class="gallery-overlay2"></div>
               <img src="assets/images/verslider2.jpg" alt="">
               <div class="gallery-slider-content-wrapper">
                  <h4>WEBSITE</h4>
                  <p>
                     I design and build production-grade applications with React.js, Node.js, TypeScript, MongoDB, and MySQL, focusing on performance and maintainability.
                  </p>
               </div>
            </div>

            <div class="gallery-item">
               <div class="gallery-overlay3"></div>
               <img src="assets/images/verslider3.jpg" alt="">
               <div class="gallery-slider-content-wrapper">
                  <h4>SOLUTIONSING</h4>
                  <p>
                        I design and build production-grade applications with React.js, Node.js, TypeScript, MongoDB, and MySQL, focusing on performance and maintainability.
                  </p>
               </div>
            </div>
            <div class="gallery-item">
               <div class="gallery-overlay4"></div>
               <img src="assets/images/verslider4.jpg" alt="">
               <div class="gallery-slider-content-wrapper">
                     <h4>DIGITAL</h4>
                     <p>
                        I design and build production-grade applications with React.js, Node.js, TypeScript, MongoDB, and MySQL, focusing on performance and maintainability.
                     </p>
               </div>

            </div>
            <div class="gallery-item">
               <div class="gallery-overlay5"></div>
               <img src="assets/images/verslider5.jpg" alt="">
               <div class="gallery-slider-content-wrapper">
                  <h4>STRATEGY</h4>
                  <p>
                     I design and build production-grade applications with React.js, Node.js, TypeScript, MongoDB, and MySQL, focusing on performance and maintainability.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </section>
<section class="latest-product">
      <div class="container-fluid">
         <div class="row d-flex align-items-center">
            <div class="col-md-9">
               <div class="latest-product-head">
                  <h4 class="wow slideInLeft" style="animation-delay: 0.2s; visibility: visible; animation-name: slideInLeft;">WHY US?</h4>
               </div>
            </div>
            <div class="col-md-3">
               <div class="latest-product-btn">
                  <a href="./about.php" class="wow slideInRight" style="animation-delay: 0.6s; visibility: visible; animation-name: slideInRight;">
                     <p>VIEW PROJECTS</p>
                     <img src="assets/images/more-icon.png" alt="Portfolio image" loading="lazy" decoding="async">
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="why_us">
      <div class="container-fluid">

         <div class="row" style="align-items:center">
            <div class="col-lg-6 col-md-12">
               <div class="experience_year_container">
                  <!-- <div class="why_us_small">
                     <h4>WHY US?</h4>
                     <div class="bdr-btm"></div>
                  </div> -->
                  <div class="year_wrapper">
                     <p>
                        4\+ years of <span>experience</span> building web and mobile products
                     </p>
                  </div>
                   <div class="para wow slideInRight" style="animation-delay: 0.8s; visibility: visible; animation-name: slideInRight;">
                     <p style="margin-bottom: 4rem;">
                        Available for Full Stack and React Native app development projects. Reach out for web platforms, APIs, dashboards, and mobile applications.
                     </p>
                  </div>
                  <div class="why_us_btn">
                     <a href="./about.php" class="btn">Read More</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-12">
               <div class="points-container">

                  <div class="points-wrapper wow bounceIn" style="animation-delay: 0.2s; visibility: visible; animation-name: bounceIn;">
                     <img src="assets/images/points-icon.png" alt="" srcset="">
                     <p>Agile Collaboration</p>
                  </div>
                  <div class="points-wrapper wow bounceIn" style="animation-delay: 0.4s; visibility: visible; animation-name: bounceIn;">
                     <img src="assets/images/points-icon.png" alt="" srcset="">
                     <p>Reliable Delivery</p>
                  </div>
                  <div class="points-wrapper wow bounceIn" style="animation-delay: 0.6s; visibility: visible; animation-name: bounceIn;">
                     <img src="assets/images/points-icon.png" alt="" srcset="">
                     <p>Modern Tech Stack</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>



   <section class="testimonial-sec">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               <div class="testimonial-head">
                  <h4 class="wow flipInY" style="animation-delay: 0.2s; visibility: visible; animation-name: flipInY;">PROFESSIONAL <span>CAREER</span> HIGHLIGHTS</h4>
                  <div class="test-bdr-btm wow bounceIn" style="animation-delay: 0.6s; visibility: visible; animation-name: bounceIn;">
                     <div></div>
                  </div>
                  <p class="wow bounceIn" style="animation-delay: 1s; visibility: visible; animation-name: bounceIn;">EXPERIENCE SNAPSHOT</p>
               </div>
            </div>

         </div>
      </div>

      <div class="reviews-wrapper">
         <div class="container-fluid">
            <div class="row reviews-wrapper-container">
               <div class="col-md-4 wow bounceIn" style="animation-delay: .3s; visibility: visible; animation-name: bounceIn;">
                  <div class="row review ">
                     <div class="col-md-12 mb-4 pb-5">
                        <div class="text">
                           <p>Senior Full Stack Engineer at SOFTNOX TECHNOLOGIES (June 2025 - Present).</p>
                        </div>
                     </div>
                     <div class="col-md-10">
                        <div class="reviewer-name-wrapper">
                           <div class="img-review-wrap">
                              <img src="assets/images/reviewer1.png" alt="">
                           </div>
                           <div class="name-review-wrap">
                              <h5>SOFTNOX TECHNOLOGIES</h5>
                              <p>Karachi, Pakistan</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-2 d-flex align-items-center ">
                        <img src="assets/images/testimonails-comma.png" alt="" srcset="">
                     </div>
                  </div>
               </div>
               <div class="col-md-4 wow bounceIn" style="animation-delay: .6s; visibility: visible; animation-name: bounceIn;">
                  <div class="row review ">
                     <div class="col-md-12 mb-4 pb-5">
                        <div class="text">
                           <p>Senior Full Stack Engineer at SOFTNOX TECHNOLOGIES (June 2025 - Present).</p>
                        </div>
                     </div>
                     <div class="col-md-10">
                        <div class="reviewer-name-wrapper">
                           <div class="img-review-wrap">
                              <img src="assets/images/reviewer1.png" alt="">
                           </div>
                           <div class="name-review-wrap">
                              <h5>SOFTNOX TECHNOLOGIES</h5>
                              <p>Karachi, Pakistan</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-2 d-flex align-items-center ">
                        <img src="assets/images/testimonails-comma.png" alt="" srcset="">
                     </div>
                  </div>
               </div>
               <div class="col-md-4 wow bounceIn" style="animation-delay: 1.2s; visibility: visible; animation-name: bounceIn;">
                  <div class="row review ">
                     <div class="col-md-12  mb-4 pb-5">
                        <div class="text">
                           <p>Senior Full Stack Engineer at SOFTNOX TECHNOLOGIES (June 2025 - Present).</p>
                        </div>
                     </div>
                     <div class="col-md-10">
                        <div class="reviewer-name-wrapper">
                           <div class="img-review-wrap">
                              <img src="assets/images/reviewer1.png" alt="">
                           </div>
                           <div class="name-review-wrap">
                              <h5>SOFTNOX TECHNOLOGIES</h5>
                              <p>Karachi, Pakistan</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-2 d-flex align-items-center ">
                        <img src="assets/images/testimonails-comma.png" alt="" srcset="">
                     </div>
                  </div>
               </div>
               <div class="col-md-4 wow bounceIn" style="animation-delay: 1.5s; visibility: visible; animation-name: bounceIn;">
                  <div class="row review ">
                     <div class="col-md-12 mb-4 pb-5">
                        <div class="text">
                           <p>Senior Full Stack Engineer at SOFTNOX TECHNOLOGIES (June 2025 - Present).</p>
                        </div>
                     </div>
                     <div class="col-md-10">
                        <div class="reviewer-name-wrapper">
                           <div class="img-review-wrap">
                              <img src="assets/images/reviewer1.png" alt="">
                           </div>
                           <div class="name-review-wrap">
                              <h5>SOFTNOX TECHNOLOGIES</h5>
                              <p>Karachi, Pakistan</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-2 d-flex align-items-center ">
                        <img src="assets/images/testimonails-comma.png" alt="" srcset="">
                     </div>
                  </div>
               </div>
               <div class="col-md-4 wow bounceIn" style="animation-delay: 1.7s; visibility: visible; animation-name: bounceIn;">
                  <div class="row review ">
                     <div class="col-md-12 mb-4 pb-5">
                        <div class="text">
                           <p>Senior Full Stack Engineer at SOFTNOX TECHNOLOGIES (June 2025 - Present).</p>
                        </div>
                     </div>
                     <div class="col-md-10">
                        <div class="reviewer-name-wrapper">
                           <div class="img-review-wrap">
                              <img src="assets/images/reviewer1.png" alt="">
                           </div>
                           <div class="name-review-wrap">
                              <h5>SOFTNOX TECHNOLOGIES</h5>
                              <p>Karachi, Pakistan</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-2 d-flex align-items-center ">
                        <img src="assets/images/testimonails-comma.png" alt="" srcset="">
                     </div>
                  </div>
               </div>
            </div>
            <div class="softnox-btn">
               <a href="">
                  <button>VIEW ALL EXPERIENCE SNAPSHOT</button>
               </a>
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
                        <img src="assets/images/location.png" alt="" srcset="">
                     </div>
                     <div class="con-text">
                        <h3>Address</h3>
                        <p>Karachi, Pakistan</p>
                     </div>
                  </div>

                  <div class="con-wrapper wow flipInY" style="animation-delay: 0.6s; visibility: visible; animation-name: flipInY;">
                     <div class="con-icon">
                        <img src="assets/images/phone-icon.png" alt="">
                     </div>
                     <div class="con-text ">
                        <h3>Call Us</h3>
                        <p>+92 348 1339849</p>
                     </div>
                  </div>
                  <div class="con-wrapper wow flipInY" style="animation-delay: 0.9s; visibility: visible; animation-name: flipInY;">
                     <div class="con-icon">
                        <img src="assets/images/gmail.png" alt="" srcset="">
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
                  <form action="">
                     <div class="lable-input-wrap">
                        <label for="name">YOUR NAME</label>
                        <input type="text" name="" id="name">
                     </div>
                     <div class="lable-input-wrap">
                        <label for="email">YOUR EMAIL</label>
                        <input type="email" name="" id="email">
                     </div>
                     <div class="lable-input-wrap">
                        <label for="message">YOUR MESSAGE</label>
                        <textarea>

                        </textarea>
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











   <script>
      function updateValue(elementId, start, final, incrementTime, incrementStep) {
         var currentValue = start;
         var time = incrementTime;
         var x = incrementStep;
         var numString = '';
         var valueLength = final.toString().length;

         for (var i = 10; i < valueLength; i++) {
            numString += '1';
         }
         x = Number(numString);

         function upValue() {
            if (currentValue <= final) {
               setTimeout(function() {
                  document.getElementById(elementId).innerText = currentValue;
                  if (x > 0) {
                     currentValue = currentValue + x;
                     time = 10;
                  } else {
                     currentValue = currentValue + 1;
                     time = 50;
                  }
                  upValue();
               }, time);
            } else {
               setTimeout(function() {
                  document.getElementById(elementId).innerText = final;
               }, time);
            }
         }
         upValue();
      }

      // Call the function for each set of values
      updateValue('number_up1', 0, 4, 10, 10); // Example values
      updateValue('number_up2', 0, 35, 100, 1000); // Example values
      updateValue('number_up3', 0, 20, 100, 10); // Example values
      updateValue('number_up4', 0, 8, 15, 10); // Example values



      // vertical slider
      const gallery = document.querySelector('.gallery');
const indicator = document.querySelector('.indicator');
const galleryItems = document.querySelectorAll('.gallery-item');

const defaultItemFlex = "0 1 250px";
const hoverItemFlex = "1 1 400px";

// Initialize isHovered property for all gallery items
galleryItems.forEach(item => {
  item.isHovered = false;
});

const updateGalleryItem = () => {
  galleryItems.forEach(item => {
    let flex = defaultItemFlex;

    if (item.isHovered) {
      flex = hoverItemFlex;
      item.querySelector('.gallery-slider-content-wrapper p').style.display = 'block'; // Show the <p> element
    } else {
      item.querySelector('.gallery-slider-content-wrapper p').style.display = 'none'; // Hide the <p> element
    }

    item.style.flex = flex;
  });
};

galleryItems[0].isHovered = true;
updateGalleryItem();

galleryItems.forEach(item => {
  item.addEventListener('mouseenter', () => {
    galleryItems.forEach(otheritem => {
      otheritem.isHovered = otheritem === item;
    });
    updateGalleryItem();
  });
});

gallery.addEventListener("mousemove", (e) => {
  indicator.style.left = `${e.clientX - gallery.getBoundingClientRect().left}px`;
});

      // Add this script at the end of your HTML body or load it after your HTML content.
      // const imageContainers = document.querySelectorAll('.image-container');

      // imageContainers.forEach(container => {
      //    const image = container.querySelector('img');

      //    container.addEventListener('mousemove', e => {
      //       const xAxis = (window.innerWidth / 2 - e.pageX) / 10;
      //       const yAxis = (window.innerHeight / 2 - e.pageY) / 10;
      //       image.style.transform = `translate(${xAxis}px, ${yAxis}px)`;
      //    });

      //    container.addEventListener('mouseleave', () => {
      //       image.style.transform = 'translate(0, 0)';
      //    });
      // });


      // Call activateSlideIn() on page load or based on some event.

      // pause or run marquee

const marqueeContent = document.querySelector('.marquee-content');

marqueeContent.addEventListener('mouseenter', () => {
  marqueeContent.classList.add('paused');
});

marqueeContent.addEventListener('mouseleave', () => {
  marqueeContent.classList.remove('paused');
});

const marqueeContent2 = document.querySelector('.marquee-content-left');

marqueeContent2.addEventListener('mouseenter', () => {
  marqueeContent2.classList.add('paused');
});

marqueeContent2.addEventListener('mouseleave', () => {
  marqueeContent2.classList.remove('paused');
});











      const movingImage = document.getElementById('moving-image');


      function moveImageSlowly() {
         const newX = Math.random() * (document.querySelector('.parent-div').offsetWidth - movingImage.width);
         const newY = Math.random() * (document.querySelector('.parent-div').offsetHeight - movingImage.height);


         movingImage.style.transform = `translate(${newX}px, ${newY}px)`;
      }


      moveImageSlowly();
   </script>
   <?php include "includes/footer.php"; ?>
   <?php include "includes/scripts.php"; ?>
</body>

</html>


