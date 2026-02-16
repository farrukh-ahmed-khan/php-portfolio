<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $pageTitle       = 'Farrukh Ahmed Khan | Skills and Services';
        $pageDescription = 'Technical skills and services including React.js, Next.js, Node.js, Express.js, REST APIs, MongoDB, MySQL, AWS, and React Native.';
        $pagePath        = 'services.php';
        include "includes/compatibility.php";
        include "includes/seo.php";
    ?>
    <link rel="shortcut icon" href="assets/images/vector1.png" />
    <?php include "includes/style.php"; ?>

    <style>
        .page-header {
            min-height: 60vh;
            position: relative;
            overflow: hidden;
        }

        .section-padding {
            padding: 120px 0;
        }

        .sub-bg {
            background-color: #000e0b;
        }

        .mt-80 {
            margin-top: 80px !important;
        }

        .page-header .caption .sub-title {
            position: relative;
            padding-left: 20px;
        }

        .sub-title {
            font-size: 14px;
            font-weight: 300;
            text-transform: uppercase;
            Let'spacing: 2px;
            line-height: 20px;
            color: #fff;
            font-family: "Montserrat";
        }

        .page-header .caption .sub-title:after {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: #fff;
        }

        .fz-55 {
            font-size: 40px !important;
            line-height: 50px;
            color: #fff;
            font-family: "Gravedigger";
        }

        p {
            line-height: 1.8;
            font-size: 16px;
            font-weight: 300;
            color: #ddd;
            margin: 0;
            font-family: "Montserrat";
        }

        .page-header .main-marq {
            margin-bottom: -40px;
            text-transform: uppercase;
        }

        .page-header .main-marq .slide-har {
            position: relative;
            display: flex;
        }

        .page-header .main-marq .slide-har.st1 .box {
            -webkit-animation: slide-har 150s linear infinite;
            animation: slide-har 150s linear infinite;
        }

        .main-marq .box:last-of-type .item:nth-of-type(odd) h4 {
            color: transparent;
            -webkit-text-stroke: 1px #fff;
        }

        .main-marq .box {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            animation: slide-har 150s linear infinite;
        }

        .main-marq.xlrg .box .item {
            padding: 0 30px;
        }

        .main-marq.xlrg .box .item h4 {
            font-size: 10vw;
            font-weight: 800;
            white-space: nowrap;
            line-height: 1;
            margin: 0;
            color: #ddd;
            font-family: "Montserrat";
        }

        .mb-80 {
            margin-bottom: 80px !important;
        }

        .position-re {
            position: relative;
        }

        .sec-lg-head .dot-titl-non {
            padding: 7px 30px;
            font-size: 12px;
            text-transform: uppercase;
            Let'spacing: 1px;
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            display: inline-block;
        }

        .fz-60 {
            font-size: 60px !important;
        }

        .serv-box .serv-item {
            padding: 60px 40px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .mb-40 {
            margin-bottom: 40px !important;
        }

        .pb-30 {
            padding-bottom: 30px !important;
        }

        .mb-30 {
            margin-bottom: 30px !important;
        }

        .bord-thin-bottom {
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        h5 {
            font-size: 24px;
            font-weight: 500;
            line-height: 1.5;
            color: #fff;
        }

        .radius-10 {
            border-radius: 10px;
        }

        .icon-img-60 {
            width: 60px;
        }

        .services-tab .serv-tab-cont .item .img {
            width: 70%;
            height: 540px;
        }

        #tabs-fade .tab-content.current,
        #tabs .tab-content.current {
            display: block;
        }

        #tabs-fade .tab-content,
        #tabs .tab-content {
            display: none;
        }

        .services-tab .serv-tab-cont .item {
            position: relative;
        }

        .services-tab .serv-tab-cont .item .cont {
            position: absolute;
            bottom: -80px;
            left: 20%;
            right: 0;
            padding: 80px 40px;
        }

        .icon-img-60 {
            width: 60px;
        }

        .mr-15 {
            margin-right: 15px !important;
        }

        .valign {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .services-tab .serv-tab-link .item-link {
            font-size: 32px;
            font-weight: 500;
            cursor: pointer;
            color: #fff;
            line-height: 42px;
            font-family: "Gravedigger";
        }

        .services-tab .serv-tab-link .item-link span {
            font-size: 20px;
            margin-right: 30px;
        }

        .mb-15 {
            margin-bottom: 15px !important;
        }

        .serv-tab-cont .tab-content .item .cont .text p {
            margin-bottom: 30px;
        }

        .serv-tab-cont .tab-content a {
            color: #fff;
            font-family: "Montserrat";
        }

        .mt-30 {
            margin-top: 30px !important;
        }


        .main-marq .box .item:nth-of-type(even) h4 {
            color: transparent;
            -webkit-text-stroke: 0.5px #fff;
        }

        .main-marq {
            overflow: hidden;
            position: relative;
        }

        .slide-har {
            display: flex;
            animation: marquee 20s linear infinite;
            /* Initialize with a right-to-left transition */
            transform: translateX(100%);
        }

        .box {
            display: flex;
        }

        .item {
            padding: 10px;
            margin: 0 5px;
            min-width: 150px;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translatex(-144vw);
            }
        }



        .call-action-img .sec-bg-img {
            height: 450px;
            width: 130%;
            position: relative;
            margin-bottom: -200px;
        }

        .call-action-img .sec-lg-head {
            position: relative;
        }

        .ontop {
            position: relative;
            z-index: 7;
        }

        .d-rotate.animated .rotate-text {
            -webkit-transform: translate3d(0px, 0px, 0px) rotateX(0deg) scale(1);
            transform: translate3d(0px, 0px, 0px) rotateX(0deg) scale(1);
            opacity: 1;
        }

        .butn-circle {
            width: 160px;
            height: 160px;
            position: relative;
            overflow: hidden;
        }

        .full-width {
            width: 100% !important;
        }

        .butn-circle:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #c9f31d;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            -webkit-transition: all .4s;
            -o-transition: all .4s;
            transition: all .4s;
        }

        .butn-circle:hover:after {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        .butn-circle .circle-star {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .butn-circle span {
            text-transform: uppercase;
            Let'spacing: 1px;
            line-height: 2;
            position: relative;
            z-index: 2;
            color: #fff;
            font-family: "Montserrat";
        }

        .call-action-img .sec-lg-head:after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 400%;
            height: 100%;
            background: #001511;
        }

        .intro-corp .card {
            text-align: left;
            justify-content: left;
            align-items: self-start;
            padding: 0px 0px;
            border-radius: 0px;
            box-shadow: none;
        }

        .intro-corp .card:hover {
            background: transparent !important;
            transition: all 0.5s ease-in-out !important;
            transform: scale(1);
        }

        .intro-corp .card-header {
            width: 100%;

        }

        .intro-corp .btn {
            padding: 1.5rem 1rem;
            background-color: transparent;
            color: #fff;
            border-bottom: 1px solid #fff;
            font-family: "Montserrat";
            font-size: 16px;
        }

        .card-header {
            padding: 0rem 0rem;
        }

        .intro-corp .cont .text {
            margin-bottom: 20px;
        }

        .intro-corp .cont .text h2 {
            font-size: 32px;
            font-weight: 700;
            line-height: 1.4;
            color: #fff;
            font-family: "Gravedigger";
            word-spacing: 14px;
            Let'spacing: 3px;
        }

        .intro-corp .card-body {
            font-size: 14px;
            font-weight: 300;
            line-height: 1.8;
            color: #ddd;
            font-family: "Montserrat";

        }

        .intro-corp .card {
            background: transparent;
        }

        .intro-corp .card-header {
            background: transparent;
        }
        @media (max-width: 700px) {
            .fz-55 {
                font-size: 22px !important;
            }
            .fz-60 {
                font-size: 22px !important;
            }
            .services-tab .serv-tab-link .item-link {
    font-size: 22px;
    line-height: 32px;
            }
            .sec-lg-head h2 {
    font-size: 22px;
            }
            .butn-circle {
    width: 120px;
    height: 120px;
}
            .butn-circle span {
    font-size: 12px;
}
.intro-corp .cont .text h2 {
    font-size: 22px;
}
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
                     Services I Provide For You
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
    <header class="page-header section-padding pb-0" style="transform: translate(0px, 0px);">
        <div class="container mt-80" style="opacity: 1; transform: translate(0px, 0px);">
            <div class="row">
                <div class="col-lg-8">
                    <div class="caption">
                        <h6 class="sub-title">WHAT I OFFER</h6>
                        <h1 class="fz-55">Full Stack, API, Cloud, and Mobile Development Services.</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 offset-lg-4">
                    <div class="text mt-30">
                        <p>I help businesses build scalable web and mobile products with React.js, Node.js, TypeScript, MongoDB, MySQL, and AWS.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-marq xlrg section-padding pb-0">
            <div class="slide-har st1">
                <div class="box">
                    <div class="item">
                        <h4>SKILLS</h4>
                    </div>
                    <div class="item">
                        <h4>SKILLS</h4>
                    </div>
                    <div class="item">
                        <h4>SKILLS</h4>
                    </div>
                    <div class="item">
                        <h4>SKILLS</h4>
                    </div>
                    <div class="item">
                        <h4>SKILLS</h4>
                    </div>
                </div>
                <div class="box">
                    <div class="item">
                        <h4>SKILLS</h4>
                    </div>
                    <div class="item">
                        <h4>SKILLS</h4>
                    </div>
                    <div class="item">
                        <h4>SKILLS</h4>
                    </div>
                    <div class="item">
                        <h4>SKILLS</h4>
                    </div>
                    <div class="item">
                        <h4>SKILLS</h4>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="serv-box section-padding">
        <div class="container">
            <div class="sec-lg-head mb-80">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="position-re">
                            <h6 class="dot-titl-non colorbg-3 mb-10">Featured Services</h6>
                            <h2 class="fz-60 fw-700">My Services</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center">
                        <div class="text">
                            <p>From frontend architecture to backend APIs and React Native apps, I deliver complete product engineering support.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="serv-item md-mb50 radius-10">
                        <div class="icon-img-60 mb-40"><img src="assets/images/icon/0.png" alt=""></div>
                        <h5 class="mb-30 pb-30 bord-thin-bottom"><span style="display:block">Frontend Development <br></span><span style="display:block"> React.js / Next.js</span></h5>
                        <p>Build responsive interfaces with React.js, Next.js, Redux, Bootstrap, Tailwind, MUI, and Ant Design.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="serv-item md-mb50 radius-10">
                        <div class="icon-img-60 mb-40"><img src="assets/images/icon/1.png" alt=""></div>
                        <h5 class="mb-30 pb-30 bord-thin-bottom"><span style="display:block">Backend Engineering <br></span><span style="display:block"> Node.js / Express.js</span></h5>
                        <p>Develop REST APIs, scalable services, and secure integrations using Node.js, Express.js, and NestJS.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="serv-item md-mb50 radius-10">
                        <div class="icon-img-60 mb-40"><img src="assets/images/icon/2.png" alt=""></div>
                        <h5 class="mb-30 pb-30 bord-thin-bottom"><span style="display:block">Databases &amp; Cloud <br></span><span style="display:block"> MongoDB / MySQL / AWS</span></h5>
                        <p>Design and optimize MongoDB/MySQL schemas and deploy cloud-ready applications with AWS best practices.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-tab section-padding">
        <div class="container">
            <div class="row" id="tabs">
                <div class="col-lg-6 order2">
                    <div class="serv-tab-cont mb-80">
                        <div class="tab-content current" id="tabs-1" style="display: block;">
                            <div class="item">
                                <div class="img"><img src="assets/images/1.jpg" alt=""></div>
                                <div class="cont sub-bg">
                                    <div class="icon-img-60 mb-40"><img src="assets/images/icon/0.png" alt=""></div>
                                    <div class="text">
                                        <p>I create modern frontend systems with React.js, Next.js, TypeScript, and state management for fast, maintainable user experiences.</p>
                                    </div><a class="mt-30" href="contact.php"><span class="mr-15 ">Read More</span><i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="tabs-2" style="display: none;">
                            <div class="item">
                                <div class="img"><img src="assets/images/2.jpg" alt=""></div>
                                <div class="cont sub-bg">
                                    <div class="icon-img-60 mb-40"><img src="assets/images/icon/1.png" alt=""></div>
                                    <div class="text">
                                        <p>I build backend services, REST APIs, and integrations using Node.js, Express.js, and NestJS with clean, modular architecture.</p>
                                    </div><a class="mt-30" href="contact.php"><span class="mr-15">Read More</span><i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="tabs-3" style="display: none;">
                            <div class="item">
                                <div class="img"><img src="assets/images/3.jpg" alt=""></div>
                                <div class="cont sub-bg">
                                    <div class="icon-img-60 mb-40"><img src="assets/images/icon/2.png" alt=""></div>
                                    <div class="text">
                                        <p>I implement data-driven platforms with MongoDB, MySQL, and Firebase, focusing on reliability, performance, and scalability.</p>
                                    </div><a class="mt-30" href="contact.php"><span class="mr-15">Read More</span><i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="tabs-4" style="display: none;">
                            <div class="item">
                                <div class="img"><img src="assets/images/1.jpg" alt=""></div>
                                <div class="cont sub-bg">
                                    <div class="icon-img-60 mb-40"><img src="assets/images/icon/0.png" alt=""></div>
                                    <div class="text">
                                        <p>I also develop React Native mobile apps and cross-platform solutions integrated with production APIs.</p>
                                    </div><a class="mt-30" href="contact.php"><span class="mr-15">Read More</span><i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 valign order1">
                    <div class="serv-tab-link tab-links full-width md-mb50">
                        <div class="sec-lg-head mb-80">
                            <h6 class="dot-titl-non mb-15">Technical Skills</h6>
                            <p>React.js, Next.js, Redux, Bootstrap, MUI, NestJS, Tailwind CSS, ShadCN, MongoDB, MySQL, Firebase, AWS, and React Native.</p>
                        </div>
                        <ul class="rest">
                            <li class="item-link current mb-15" data-tab="tabs-1"><span>01</span> Frontend Engineering</li>
                            <li class="item-link mb-15" data-tab="tabs-2"><span>02</span> Backend & APIs</li>
                            <li class="item-link mb-15" data-tab="tabs-3"><span>03</span> Databases & Cloud</li>
                            <li class="item-link" data-tab="tabs-4"><span>04</span> Mobile Apps (React Native)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="intro-corp section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="sec-head mb-40">
                        <h6 class="sub-title">Experience.</h6>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="cont">
                        <div class="text">
                            <h2 class="d-slideup wow animated" style="visibility: visible;">
                                <span class="sideup-text">
                                    <span class="up-text">Career highlights across full stack and mobile development.</span>
                                </span>

                            </h2>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Senior Full Stack Engineer - SOFTNOX TECHNOLOGIES
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        June 2025 - Present: Building custom web applications with React.js, Node.js, TypeScript, MongoDB, and REST APIs in agile workflows.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Senior Frontend Developer - SOFTNOX TECHNOLOGIES
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        June 2023 - June 2025: Led high-performance React.js and Next.js applications, optimized frontend architecture, and implemented accessibility and cross-browser standards.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Full Stack Engineer - AxeCorp Technologies
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        March 2022 - June 2023: Delivered MERN projects, developed REST APIs with Node.js and Express.js, and improved code quality and integration flows.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="call-action-img">
        <div class="container">
            <div class="sec-bg-img bg-img parallaxie" style="background-image: url(assets/images/call-action-banner.jpg); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center 123.031px;"></div>
            <div class="sec-lg-head section-padding">
                <div class="row ontop">
                    <div class="col-11 d-flex align-items-center">
                        <div class="valign">
                            <h2 class="fz-50 d-rotate wow animated" style="visibility: visible;">
                                <span class="rotate-text">Have a product idea in mind?</span>
                                <span class="rotate-text">Let's
                                    <span class="">build it together</span>.
                                </span>
                            </h2>
                        </div>
                        <div class="ml-auto">
                            <a class="butn-circle d-flex align-items-center text-center m-auto" href="contact.php">
                                <div class="full-width">
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <span class="full-width">Get In Touch</span>
                                </div>
                                <img src="assets/images/circle-star.svg" alt="" class="circle-star">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "includes/footer.php"; ?>
    <?php include "includes/scripts.php"; ?>
    <script>
        // function changeImage(event) {
        //     var image = event.target;
        //     var index = parseInt(image.getAttribute("data-index"));
        //     var nextIndex = (index + 1) % images.length; // Cycle through images
        //     var newImage = images[nextIndex];
        //     images.forEach(img => img.classList.remove("active"));
        //     newImage.classList.add("active");
        // }

        // var images = document.querySelectorAll(".card-img-top");
        // for (var i = 0; i < images.length; i++) {
        //     images[i].addEventListener("mouseover", changeImage);
        // }

        // var timer = setInterval(function() {
        //     var activeImage = document.querySelector(".card-img-top.active");
        //     var index = parseInt(activeImage.getAttribute("data-index"));
        //     var nextIndex = (index + 1) % images.length; // Cycle through images
        //     var newImage = images[nextIndex];
        //     images.forEach(img => img.classList.remove("active"));
        //     newImage.classList.add("active");
        // }, 2000);


        $(document).ready(function() {
            $(".filter").click(function() {
                $(".filter").removeClass("active-filter");
                $(this).addClass("active-filter");
                var filterNumber = $(this).attr("data-filter");
                $(".filter-content").hide();
                $(".filter-content" + filterNumber).show();
            });
        });

        $(document).ready(function() {
            // When a tab is clicked
            $('.item-link').on('click', function() {
                var tabId = $(this).data('tab'); // Get the data-tab attribute value

                // Hide all tab content
                $('.tab-content').hide();
                // Show the selected tab content
                $('#' + tabId).show();

                // Remove 'current' class from all tab links
                $('.item-link').removeClass('current');
                // Add 'current' class to the clicked tab link
                $(this).addClass('current');
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


