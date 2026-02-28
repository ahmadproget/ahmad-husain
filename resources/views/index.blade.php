<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
    <title>Ahmad Husain</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body {
        font-family: "Inter", sans-serif;
    }

    [data-bs-theme="dark"] body{
        background-color: #0D0D0D !important;
        color: #ffffff !important;
    }
    [data-bs-theme="light"] body{
        background-color:#FBFBFB;
        color: #0D0D0D;
    }
    [data-bs-theme="light"] .contact-inner-wrapper{
        background-color:#FBFBFB;

    }
    [data-bs-theme="light"] .form-floating.grey .form-control{
        background-color: #ffffff !important;
        border: 1px solid rgba(0, 0, 0, 0.25);

    }
    [data-bs-theme="light"] .footer-section{
        border-top: 1px solid rgba(197, 197, 197, 1)

    }
    [data-bs-theme="light"] .social-link li a, 
    [data-bs-theme="light"] .footer-left a, 
    [data-bs-theme="light"] .footer-left p, 
    [data-bs-theme="light"] .footer-link li a{
        color:rgba(24, 24, 24, 1);
    }

    [data-bs-theme="light"] .form-floating.message-box .form-control{
        background-color: #ffffff !important;
        border: 1px solid rgba(0, 0, 0, 0.25);

    }
    [data-bs-theme="light"] .contact-inner-wrapper{
        border: 1px solid rgba(235, 235, 235, 1);
        box-shadow: 0px 12px 30px 0px rgba(0, 0, 0, 0.06);
    }
    [data-bs-theme="light"] .form-floating.grey .form-control:-webkit-autofill,
    [data-bs-theme="light"] .form-floating.grey .form-control:-webkit-autofill:hover,
    [data-bs-theme="light"] .form-floating.grey .form-control:-webkit-autofill:focus,
    [data-bs-theme="light"] .form-floating.grey .form-control:-webkit-autofill:active {
        -webkit-box-shadow: 0 0 0 1000px #ffffff inset !important;
        -webkit-text-fill-color: #212529 !important;
        caret-color: #212529;
        transition: background-color 9999s ease-in-out 0s;
    }

    [data-bs-theme="light"] nav .container{
        background-color:rgba(255, 255, 255, 0.25);
        border:1px solid rgba(255, 255, 255, 0.25);
        color: rgba(24, 24, 24, 1);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.02);
    }
    [data-bs-theme="light"] .btn.btn-dark{
        background: rgba(243, 243, 243, 1);
        color:rgba(128, 128, 128, 1);
    }
    [data-bs-theme="light"] .btn.btn-dark:hover{
        background: rgba(243, 243, 243, 1);
        color:rgba(51, 51, 51, 1);
    }

    [data-bs-theme="light"] .magic-card::after,
    [data-bs-theme="light"] .project-cards .card-header,
    [data-bs-theme="light"] .project-cards .card-body{
        background-color:#FBFBFB;
        color: #0D0D0D;
    }

    [data-bs-theme="light"] .navbar-brand{
        color:rgba(128, 128, 128, 1);
    }
    .social-icons a {
        font-size: 1.2rem;
        text-decoration: none;
        color: inherit;
        transition: 0.3s;
    }
    .social-icons a:hover { 
        color: #F78522; 
    }
    
    .nav-item .nav-link.active{
        color: #ffffff; 
    }
    .nav-item .nav-link:hover{
        color: #ffffff; 
    }
    .social-icons .btn-link:hover { 
        color: gold; 
    }
    .navbar-wrapper{
        justify-content: space-between;
    }
    .navbar-nav{
        gap:20px;
    }
    .container{
        max-width: 100%;
        padding: 0 80px;
    }
   .gradient-header {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 550px; 
        z-index: -1;
        background-image: url("{{ asset('images/gradient-bg.png') }}");
        background-size: cover; 
        background-position: top center; 
        background-repeat: no-repeat;
    }
    .navbar{
        padding: 1.5rem 6rem;
    }
    .navbar .container{
        background-color: rgba(24, 24, 29, 0.3);
        border-radius: 10px;
        padding-top: 1rem;
        padding-bottom: 1rem;
    }
    .hi-text,
    .name-text{
        font-family: "Inter", sans-serif;
        font-weight: 800;
        font-size:80px;
    }
    .heading-text{
        font-size:48px;
        font-weight: 700;
        text-align: center;

    }
    .text-grey{
        color:rgba(128, 128, 128, 1);
    }
    
    .hero-section-wrapper{
        padding: 100px 0;
    }
    .about-me{
        font-size:24px;
        font-weight: 500;
        max-width: 780px;
    }
    .btn.btn-dark{
        border-radius: 10px;
        background: linear-gradient(to top, rgba(24, 24, 24, 1),rgba(19, 19, 19, 1));
        color:rgba(128, 128, 128, 1);
        font-weight: 500;
        padding: 15px 40px;
        font-size: 18px;
    }
    .btn.btn-dark:hover{
        color:#fff;
    }
    .btn-wrapper{
        display: flex;
        gap:20px;
    }
    .image-wrapper {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: flex-end;
        overflow: visible;
    }

    .men-img {
        max-width: 100%;
        height: auto;
        display: block;
        object-fit: contain;
    }
    .section-padding{
        padding: 0 6rem 4rem 6rem;
    }
    .inner-wrapper{
        margin: 0;
        align-items: center;
    }
    .navbar-brand{
        font-weight: 800;
        font-size:28px;
        margin-right:50px;
    }
    .navbar-toggler{
        padding: 5px 7px;
        display: flex;
        border-radius: 5px;        
    }
    .navbar-toggler-icon{
        width:25px;
        height: 20px;
    }
    .navbar-toggler:focus {
        box-shadow: none !important;
        outline: none !important;
    }
     .magic-card {
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        position: relative;
        z-index: 1;
    }
    .magic-card:hover {
        transform: translateY(-8px);
        border-color: transparent !important;
    }
    .magic-card::before {
        content: "";
        position: absolute;
        top: -2px; 
        left: -2px; 
        right: -2px; 
        bottom: -2px;
        background: linear-gradient(45deg, #ff00cc, #3333ff, #00ffff, #ff00cc);
        background-size: 400%;
        z-index: -1;
        border-radius: inherit; 
        opacity: 1;
        transition: opacity 0.4s ease-in-out;
        animation: glowing 20s linear infinite;
    }
    .magic-card::after {
        content: "";
        position: absolute;
        top: 0; 
        left: 0; 
        right: 0; 
        bottom: 0;
        background: rgba(19, 19, 19, 1);
        color: rgba(128, 128, 128, 1);
        z-index: -1;
        border-radius: inherit;
    }
    @keyframes glowing {
        0% { background-position: 0 0; }
        50% { background-position: 400% 0; }
        100% { background-position: 0 0; }
    }

    .project-cards {
        height: 100%;
        position: relative;
        border-radius: 15px;
        padding: 2px;
        background: linear-gradient(45deg, #ff00cc, #3333ff, #00ffff, #ff00cc);
        background-size: 400%;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        animation: glowing 20s linear infinite;
    }
    .project-cards:hover{
        transform: translateY(-8px);
    }
    @keyframes glowing {
        0% { background-position: 0 0; }
        50% { background-position: 400% 0; }
        100% { background-position: 0 0; }
    }
    .project-cards .card-header{
        background: rgba(19, 19, 19, 1);
    }
    .project-cards .card-header {
        border-top-left-radius: 13px;
        border-top-right-radius: 13px;
        height: 220px;      
        overflow: hidden;    
        padding: 0;
    }

    .project-cards .card-body {
        border-bottom-left-radius: 13px;
        border-bottom-right-radius: 13px;
        padding: 10px 20px;
        background-color: #0D0D0D;
        display: flex;
        flex-direction: column;
    }
    .project-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.6s ease;
    }
    .project-cards:hover .project-img {
        transform: scale(1.15);
    }
    .project-description{
        font-size: 14px;
    }
    .project-code{
        justify-content: center;
    }
    .project-overlay {
        position: absolute;
        inset: 0;
        background: rgba(0,0,0,0.6);
        border-radius: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        opacity: 0;
        transition: opacity 0.4s ease;
    }
    .project-cards:hover .project-overlay {
        opacity: 1;
    }
    .project-overlay a {
        transform: translateY(20px);
        transition: 0.4s ease;
    }
    .project-cards:hover .project-overlay a {
        transform: translateY(0);
    }

    /* cotanct sectio */
    .send-btn{
        text-align: end;
    }
    .contact-inner-wrapper{
        border: 1px solid rgba(56, 55, 55, 1);
        box-shadow: 0px 0px 10px 10px rgba(0, 0, 0, 0.2);
        border-radius: 12px;
        padding: 20px;
        background-color: rgba(22, 22, 22, 1);

    }
    .form-floating.grey .form-control{
        background-color: rgba(22, 22, 22, 1);
    }
    .form-control.custom-height{
        height: 150px;
        background-color: #0D0D0D;
        border: 1px solid rgba(56, 55, 55, 1);
    }
    /* Chrome Autofill Fix */
    .form-floating.grey .form-control:-webkit-autofill,
    .form-floating.grey .form-control:-webkit-autofill:hover,
    .form-floating.grey .form-control:-webkit-autofill:focus,
    .form-floating.grey .form-control:-webkit-autofill:active {
        -webkit-box-shadow: 0 0 0 1000px #0D0D0D inset !important;
        -webkit-text-fill-color: #ffffff !important;
        caret-color: #ffffff;
        transition: background-color 9999s ease-in-out 0s;
    }
    .form-floating.grey .form-control{
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        background-color: #0D0D0D !important;
        font-size: 16px;
    }
    .form-floating.grey .form-control:focus{
        /* border-color: #F78522; */
        background-color: #0D0D0D;
        box-shadow: 0 0 10px 0.01px rgba(247, 133, 34, .35);
    }
    
    .form-floating.message-box .form-control:focus{
        border-color: #F78522;
        box-shadow: 0 0 10px 0.01px rgba(247, 133, 34, .35);
    }
    
    .message-box .msg-label{
        color: rgba(128, 128, 128, 0.5);
        font-size: 16px;
        font-weight: 400;
    }
    .form-floating>.form-control:not(:placeholder-shown)~label::after{
        background-color: transparent;
    }
    .form-floating>.form-control:focus~label::after{
        background-color: transparent;
    }
    .form-header-text{
        text-align: center;
        font-size: 18px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        padding-bottom:20px;
    }
    .contact-form{
        justify-items: center;
    }
    /* footer section */
    .footer-section{
        padding-top:40px !important;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }
    .footer-link-section h4,
    .social-link-section h4{
        font-size: 16px;
        font-weight: 700;
    }
    .social-link,
    .footer-link{
        padding-left:0;
    }
    .social-link li,
    .footer-link li{
        list-style: none;
        
    }
    .social-link li a,
    .footer-link li a{
        color:rgba(197, 197, 197, 1);    
        font-weight: 400;   
        font-size: 16px;
        text-decoration: none;     
    }
    .footer-gradient-wrapper{
        position: relative;
    }
    .gradient-footer{
        position: absolute;
        transform:rotate(180deg);
        top: auto;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 550px; 
        z-index: -1;
        background-image: url("{{ asset('images/gradient-bg.png') }}");
        background-size: cover; 
        background-position: top center; 
        background-repeat: no-repeat;
    }
     .about-section .inner-section {
        background: rgba(255, 255, 255, 0.03);
        border-radius: 15px;
        border: 1px solid transparent;
        background-clip: padding-box;
        position: relative;
        padding:50px;
        height: 600px;
        overflow: hidden;
    }
    .about-section .inner-section::before {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 15px;
        padding: 2px;
        background: linear-gradient(90deg, #00f0ff, #ff00c8);
        -webkit-mask:
        linear-gradient(#fff 0 0) content-box,
        linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        pointer-events: none;
    }
    .inner-section{
        align-items: center;
    }
    .profile-image{
        max-width: 100%;
        border-radius: 8px;
        height: auto;
        display: block;
        object-fit: cover;
    }
    .profile-image-container{
        border:2px solid #fff;
        border-radius: 10px;
        padding: 0;
        overflow: hidden;
        align-content: end;
        height: 340px;
    }
    .padding-left{
        padding-left: 50px;
    }
    .About-wrapper {
        height: 440px;
        display: flex;
        flex-direction: column;
    }
    .scrollable-text {
        flex: 1;              
        overflow-y: auto;     
        padding-right: 10px; 
        scrollbar-width:thin;
    }
    .text-heiglight{
        color: #fff;
        font-weight: 800;
    }
    .scrollable-text .captilize-text{
        text-transform: capitalize;
        color:#fff;
    }
    .text-orange{
        color:#F78522;
    }
    .about-text {
        color:rgb(136, 136, 136);
        font-size: 16px;
        line-height: 1.8;
        max-width: 800px;
        margin: 0 auto 20px;
        text-align: justify;
    
    }
    .personal-list{
        padding-left: 0;
    }
    .personal-list li{
        list-style: none;
    }
    .social-links {
        display: flex;
        gap: 15px;
    }

    .social-icon {
        width: 45px;
        height: 45px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 20px;
        border: 1px solid rgba(255, 102, 0, 0.3);
        transition: 0.3s ease;
    }

    .social-icon:hover {
        background: #ff6600;
        color: #fff;
        box-shadow: 0 0 15px rgba(255, 102, 0, 0.6);
        transform: translateY(-3px);
    }
    .social-links::before{
        background-color: rgba(255, 255, 255, .25);
        content: '';
        height: 2px;
        margin-right: 10px;
        width: 60px;
        margin-top:25px;
    }
    .font-size22{
        font-size:22px;
    }
    .font-size20{
        font-size: 20px;
    }
   
    
    @media(min-width:1200px) and (max-width: 1399.98px){
        .about-me{
            font-size:18px;
        }
        .hi-text,
        .name-text{
            font-size:64px;
        }
        .heading-text{
            font-size: 32px;
        }
    }
    @media(max-width:991.98px){
        .profile-image-container{
            width:140px;
            height:140px;
        }
        .inner-section{
            justify-content: center;
        }
        .About-wrapper {
            height: 300px;
            padding-left: 10px;
        }
        .about-section .inner-section{
            padding: 20px 50px;
        }
    }
    @media(min-width:992px) and (max-width: 1199.98px){
        .btn.btn-dark{
            padding: 15px 25px;    
        }
        .about-me{
            font-size:14px;
        }
        .hi-text,
        .name-text{
            font-size:36px;
        }
        .heading-text{
            font-size: 32px;
        }
        .project-cards .card-body {
            height: 160px;
        }
    }
    @media(min-width:768px) and (max-width: 991.98px){
        .btn.btn-dark{
            padding: 15px 25px;  
            width:185px;  
        }
        .about-me{
            font-size:14px;
        }
        .hi-text,
        .name-text{
            font-size:42px;
        }
        .heading-text{
            font-size: 36px;
        }
        .container{
            padding: 0 40px;
        }
        .navbar-brand{
            font-size: 24px;
            margin-right: 35px;
        }
        .hero-section-wrapper{
            text-align: center;
            justify-items: center;
        }
         .social-icons{
            margin-top:20px;
        }
        .navbar-nav {
            gap: 0;
        }
        .project-cards .card-body {
            height:210px;
        }
    }
    @media(min-width:576px) and (max-width: 767.67px){
        .btn.btn-dark{
            padding: 15px 25px;  
            width:185px;  
        }
        .men-img {
            width:350px;
        }
        .about-me{
            font-size:14px;
            max-width: 390px;
        }
        .hi-text,
        .name-text {
            font-size: 48px;
        }
        .heading-text{
            font-size: 36px;
            text-align: center;
        }
        .container{
            padding: 0 40px;
        }
        .navbar-brand{
            font-size: 24px;
            margin-right: 35px;
        }
        .hero-section-wrapper{
            text-align: center;
            justify-items: center;
        }
        .navbar{
            padding: 1.5rem 2rem;
        }
        .section-padding{
            padding: 0 2rem 2rem 2rem;
        }
         .social-icons{
            margin-top:20px;
        }
        .navbar-nav {
            gap: 0;
        }
        .custom-card-width{
            width: 300px;
        }
        .card-wrapper{
            justify-items: center;
            justify-content: center;
        }
        .project-card-wrapper{
            justify-content: center;
        }
        .project-cards .card-body {
            height: 200px;
        }

    }
    @media(max-width:575.75px){
        .btn.btn-dark{
            padding: 15px 15px;  
            width:150px; 
            font-size: 16px; 
        }
        .men-img {
            width:350px;
        }
        .about-me{
            font-size:14px;
            max-width: 390px;
        }
        .hi-text,
        .name-text {
            font-size: 36px;
        }
        .heading-text{
            font-size: 32px;
            text-align: center;
        }
        .hero-section-wrapper {
            padding: 100px 0 40px 0;
        }
        .section-padding{
            padding: 0 15px 30px 15px;
        }
        .project-card-wrapper{
            justify-content: center;
        }
        .about-section .container,
        .footer-section .container,
        .contact-section .container,
        .Project-section .container,
        .skills-section .container,
        .hero-section .container{
            padding: 0;
        }
        .navbar .container{
            padding: 16px 15px;

        }
        .navbar-brand{
            font-size: 24px;
            margin-right: 35px;
        }
        .hero-section-wrapper {
            text-align: center;
            justify-items: center;
        }
        .navbar {
            padding: 0;
        }
        .navbar .container{
            border-radius: 0;
        }
        .section-padding{
            padding: 0 1rem 5rem 1rem;
        }
        .social-icons{
            margin-top:20px;
        }
        .navbar-nav {
            gap: 0;
        }
        .custom-card-width{
            width: 300px;
        }
        .card-wrapper{
            justify-items: center;
            justify-content: center;
        }
        .project-cards .card-body {
            height: 180px;
        }
        .send-btn{
            text-align: center;
        }
        .align-items-stretch{
            gap:60px;
        }
        .about-section .inner-section{
            margin: 0 10px;
             padding: 20px 15px;
        }
        .font-size22{
            font-size:18px;
        }
        .font-size20{
            font-size: 16px;
        }
        .about-text{
            font-size: 14px;
        }
        .personal-list li .text-white{
            font-size: 14px;
        }
        .personal-list li{
            font-size: 14px;
        }
        .social-icon{
            width: 35px;
            height: 35px;
            font-size: 14px;
        }
        .social-links{
            gap:10px;
        }
        .social-links::before {
            width: 40px;
            margin-top: 17px;
        }
    }
</style>

<body class="bg-body">
    <div class="gradient-wrapper">
        <div class="gradient-header"></div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#hero">[Ahmad]</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
               <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse navbar-wrapper" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#project">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>

                <div class="d-flex align-items-center gap-3 social-icons">
                    <a href="https://www.instagram.com/__ahmad__oo7/" target="_blank" ><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/ahmad-husain-0928743b3/" target="_blank" ><i class="bi bi-linkedin"></i></a>
                    <a href="https://github.com/Ahmad007Designer" target="_blank"><i class="bi bi-github"></i></a>
                    <div class="vr" style="height: 30px;"></div>
                    <button class="btn btn-link nav-link p-0" onclick="toggleTheme()">
                        <i class="bi bi-sun-fill" id="themeIcon"></i>
                    </button>
                </div>
            </div>
                   

        </div>
    </nav>
    <section class="hero-section section-padding" id="hero">
        <div class="container">
            <div class="row inner-wrapper">
                <div class="col-lg-7 col-xl-8 hero-section-wrapper">
                    <h2 class="hi-text text-grey">Hi👋</h2>
                    <h2 class="name-text"><span class="text-grey">I’m </span>Ahmad Husain</h2>
                    <p class="about-me text-grey">Junior Web Developer building responsive, scalable web applications for startups and growing businesses. Passionate about clean code, performance, and continuous improvement.</p>
                    <div class="btn-wrapper">
                        <a  href="resume/Ahmad_Resume.pdf" target="_blank" class="btn btn-dark">See my resume</a>
                        <a href="#contact" class="btn btn-dark">Get in touch</a>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 image-wrapper">
                    <img class="men-img" src="images/men1.png" alt="Ahmad Husain">
                </div>
            </div>
        </div>
    </section>
    
    <section id="about" class="about-section section-padding">
        <div class="container">
            <div class="row inner-section">
                 <h2 class="heading-text mb-2">About Me</h2>
                <div class=" col-12 col-lg-4 profile-image-container">
                    <img class="profile-image" src="images/Ahmad.png" alt="Ahmad Husain">
                </div>
                <div class="col-12 col-lg-8 padding-left About-wrapper">
                    <div class="scrollable-text">
                        <p class="captilize-text font-size20" >who am <span class="text-heiglight text-orange">i ?</span></p>
                        <p class="captilize-text text-heiglight font-size22"> I'm Ahmad Husain, a <span class="text-orange">Junior Web Developer</span> with <span class="text-orange">full-stack expertise</span>
                        </p>

                        <p class="about-text">
                            I have experience developing web applications using PHP (Laravel and CodeIgniter), Node.js, C++, and Machine Learning. 
                            I am open to feedback and continuously strive to improve my skills.
                        </p>
            
                        <p  class="about-text">
                            I focus on writing clean, maintainable code and continuously 
                            improving my problem-solving skills.
                        </p>

                        <p  class="about-text">
                            I have built multiple full-stack applications including food 
                            ordering systems and blogging platforms, and actively practice 
                            DSA on coding platforms.
                        </p>
                        <div class="personal-card">

                            <p class=" text-heiglight captilize-text font-size22">Personal <span class="text-orange">Information</span>
                            </p>

                            <ul class="personal-list">
                                <li class="mt-3 text-grey"><strong class="text-white">Name:</strong> Ahmad Husain</li>
                                <li class="mt-3 text-grey"><strong class="text-white">Degree:</strong> B.Tech CSE</li>
                                <li class="mt-3 text-grey"><strong class="text-white">CGPA:</strong> 8.62</li>
                                <li class="mt-3 text-grey"><strong class="text-white">Age:</strong> 24 years</li>
                                <li class="mt-3 text-grey"><strong class="text-white">Email:</strong> ahmadmohdrock007@gmail.com</li>
                                <li class="mt-3 text-grey"><strong class="text-white">WhatsApp:</strong> +91 9335537142</li>
                                <li class="mt-3 text-grey"><strong class="text-white">Language:</strong> Hindi, English</li>
                                <li class="mt-3 text-grey"><strong class="text-white">Location:</strong> Uttar Pradesh, India</li>
                            </ul>
                        </div>
                        <div class="social-links mb-5">
                            <a href="https://www.instagram.com/__ahmad__oo7/" target="_blank" class="social-icon ">
                                <i class="bi bi-instagram ml-2"></i>
                            </a>
                            <a href="https://github.com/Ahmad007Designer" target="_blank" class="social-icon">
                                <i class="bi bi-github"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/ahmad-husain-0928743b3/" target="_blank" class="social-icon">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            <a href="mailto:ahmadmohdrock007@gmail.com" class="social-icon">
                                <i class="bi bi-envelope-fill"></i>
                            </a>
                        </div>

                        <a  href="resume/Ahmad_Resume.pdf" target="_blank" class="btn btn-dark">See my resume</a>

                    </div>
                </div>
            </div>
            
        </div>
    </section>


    <section id="skills" class="skills-section section-padding">
        <div class="container">
            <h2 class="heading-text mb-5">My Expertise & Skills</h2>
            <div class="row g-4 card-wrapper">
                <div class="col-md-6 col-lg-6 col-xl-3 custom-card-width ">
                    <div class="card bg-dark border border-secondary h-100 p-3 shadow-sm rounded-4 magic-card">
                        <div class="card-body">
                            <h5 class="card-title text-primary fw-bold mb-4">Frontend</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="devicon-html5-plain text-warning me-2"></i> HTML5 & CSS3</li>
                                <li class="mb-2"><i class="devicon-javascript-plain text-warning me-2"></i> JavaScript</li>
                                <li class="mb-2"><i class="devicon-react-original text-info me-2"></i> React</li>
                                <li class="mb-2"><i class="devicon-bootstrap-plain text-purple me-2"></i> Bootstrap</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 custom-card-width">
                    <div class="card bg-dark border border-secondary h-100 p-3 shadow-sm rounded-4 magic-card">
                        <div class="card-body">
                            <h5 class="card-title text-success fw-bold mb-4">Backend & DB</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="devicon-php-plain text-indigo me-2"></i> PHP</li>
                                <li class="mb-2"><i class="devicon-nodejs-plain text-success me-2"></i> Node.js</li>
                                <li class="mb-2"><i class="devicon-mysql-plain text-info me-2"></i> MySQL</li>
                                <li class="mb-2"><i class="devicon-mongodb-plain text-success me-2"></i> MongoDB</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 custom-card-width">
                    <div class="card bg-dark border border-secondary h-100 p-3 shadow-sm rounded-4 magic-card">
                        <div class="card-body">
                            <h5 class="card-title text-warning fw-bold mb-4">Frameworks</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="devicon-codeigniter-plain text-danger me-2"></i> CodeIgniter 3
                                <li class="mb-2"><i class="devicon-laravel-plain text-danger me-2"></i> Laravel</li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 custom-card-width">
                    <div class="card bg-dark border border-secondary h-100 p-3 shadow-sm rounded-4 magic-card">
                        <div class="card-body">
                            <h5 class="card-title text-danger fw-bold mb-4">Design Tools</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="devicon-photoshop-plain text-primary me-2"></i> Photoshop</li>
                                <li class="mb-2"><i class="devicon-illustrator-plain text-warning me-2"></i> Illustrator
                                </li>
                                <li class="mb-2"><i class="devicon-xd-plain text-danger me-2"></i> Adobe XD</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Project-section section-padding" id="project">
        <div class="container">
            <h2 class="heading-text mb-5">My Projects</h2>
            <div class="row g-4 project-card-wrapper">
                <div class="col-md-6 col-lg-6 col-xl-4 ah custom-card-width ">
                    <div class="project-cards">
                        <div class="card-header">
                            <img class="project-img" src="projects-img/projectBlog.png" alt="">
                            <div class="project-overlay">
                                <a href="https://github.com/Ahmad007Designer/Blog_Management_System_PHP" target="_blank" class="btn btn-outline-light btn-sm rounded-pill px-3"><i class="devicon-github-original"></i> Code</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="project-title">Blog management system</h5>
                            <p class="project-description text-grey">A clean blog management system built with CodeIgniter 4, PHP, and MySQL, featuring full CRUD functionality with a modern responsive UI.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 ah custom-card-width ">
                    <div class="project-cards">
                        <div class="card-header">
                            <img class="project-img" src="projects-img/project1.png" alt="">
                            <div class="project-overlay">
                                <a href="https://github.com/Ahmad007Designer/Fast-Food-APP" target="_blank" class="btn btn-outline-light btn-sm rounded-pill px-3"><i class="devicon-github-original"></i> Code</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="project-title">Food Delivery Website</h5>
                            <p class="project-description text-grey">A full-stack food delivery app using MERN with user authentication, real-time order tracking, and admin dashboard.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 ah custom-card-width ">
                    <div class="project-cards">
                        <div class="card-header">
                            <img class="project-img" src="projects-img/project2.png" alt="">
                            <div class="project-overlay">
                                <a href="https://github.com/Ahmad007Designer/Movie_Recommend_System_ML" target="_blank" class="btn btn-outline-light btn-sm rounded-pill px-3"><i class="devicon-github-original"></i> Code</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="project-title">Movie Recommendation System</h5>
                            <p class="project-description text-grey">Personalized movie suggestions using ML algorithms based on content similarity and user preferences.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 ah custom-card-width ">
                    <div class="project-cards">
                        <div class="card-header">
                            <img class="project-img" src="projects-img/project3.png" alt="">
                            <div class="project-overlay">
                                <a href="https://github.com/Ahmad007Designer/data-clean-data-analyze" target="_blank" class="btn btn-outline-light btn-sm rounded-pill px-3"><i class="devicon-github-original"></i> Code</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="project-title">Data Cleaner & Analyzer</h5>
                            <p class="project-description text-grey">Interactive platform to clean, visualize, and analyze datasets with ease. Built using Python & Streamlit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 ah custom-card-width ">
                    <div class="project-cards">
                        <div class="card-header">
                            <img class="project-img" src="projects-img/project6.png" alt="">
                            <div class="project-overlay">
                                <a href="https://github.com/Ahmad007Designer/Crime-Rate-Predicction" target="_blank" class="btn btn-outline-light btn-sm rounded-pill px-3"><i class="devicon-github-original"></i> Code</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="project-title">Crime Rate Prediction</h5>
                            <p class="project-description text-grey">A ML model to forecast crime trends using historical data, featuring visual insights and Flask backend.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 ah custom-card-width ">
                    <div class="project-cards">
                        <div class="card-header">
                            <img class="project-img" src="projects-img/project5.png" alt="">
                            <div class="project-overlay">
                                <a href="https://github.com/Ahmad007Designer/Blogify-APP" target="_blank" class="btn btn-outline-light btn-sm rounded-pill px-3"><i class="devicon-github-original"></i> Code</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="project-title">Blogify App</h5>
                            <p class="project-description text-grey">A blogging platform built with MERN, enabling users to post, edit, and delete blogs with secure login.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="contact-section section-padding" id="contact">
         <div class="container">
            <h2 class="heading-text mb-5">Contact Us</h2>
                <div class="contact-form">
                    <div class="col-sm-8 col-md-8 col-lg-6 contact-inner-wrapper">
                        <h4 class="form-header-text mb-3">New Message</h4>
                        @if(Session::has('message_sent'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('message_sent') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            <div class="form-floating grey mb-3 ">
                                <input type="email" class="form-control" name="email" id="email" placeholder="">
                                <label for="email">Email</label>
                            </div>
                            <div class="form-floating grey mb-3">
                                <input type="text" class="form-control" name="name" id="name" placeholder="">
                                <label for="name">Name</label>
                            </div>
                            <div class="form-floating grey mb-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="">
                                <label for="subject">Subject</label>
                            </div>
                            <div class="form-floating mb-5 message-box">
                                <textarea name="message" class="form-control custom-height" id="message" placeholder=""></textarea>
                                <label class="msg-label" for="message">Write your message here</label>
                            </div>
                            <div class="send-btn">
                                <button type="submit" class="btn btn-dark">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
         </div>
    </section>

    <footer class="section-padding footer-section">
        <div class="container">
            <div class="row align-items-stretch"> 
                <div class="col-sm-6 col-lg-8 d-flex flex-column footer-left">
                    <a class="navbar-brand" href="#">[Ahmad]</a>
                    <p class="text-grey" style="margin: 5px 0 0 0;">Thanks for stopping by ッ</p>
                    
                    <p class="text-grey mt-auto mb-0">
                        &copy; {{ date('Y') }} Ahmad Husain. All rights reserved.
                    </p>
                </div>

                <div class="footer-link-section col-sm-3 col-lg-2">
                    <h5 class="footer-title mb-4">Links</h5>
                    <ul class="footer-link">
                        <li class="mt-3 text-grey"><a href="#about">About</a></li>
                        <li class="mt-3 text-grey"><a href="#skills">Skills</a></li>
                        <li class="mt-3 text-grey"><a href="#project">Projects</a></li>
                        <li class="mt-3 text-grey"><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                
                <div class="social-link-section col-sm-3 col-lg-2">
                    <h5 class="footer-title mb-4">Elsewhere</h5>
                    <ul class="social-link">
                        <li class="mt-3 text-grey"><a href="mailto:ahmadmohdrock007@gmail.com?subject=Inquiry from Portfolio" target="_blank">Email</a></li>
                        <li class="mt-3 text-grey"><a href="https://www.linkedin.com/in/ahmad-husain-0928743b3/" target="_blank">LinkedIn</a></li>
                        <li class="mt-3 text-grey"><a href="https://github.com/Ahmad007Designer" target="_blank">GitHub</a></li>
                        <li class="mt-3 text-grey"><a href="https://www.instagram.com/__ahmad__oo7/" target="_blank">Instagram</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>
    <div class="footer-gradient-wrapper">
        <div class="gradient-footer"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>


<script>
    function toggleTheme(){
        const htmlTag = document.documentElement;
        if(htmlTag.getAttribute("data-bs-theme") === "dark"){
            htmlTag.setAttribute("data-bs-theme", "light");
        }else{
            htmlTag.setAttribute("data-bs-theme", "dark");
        }
    }

    /*setTimeout(function() {
        let alert = document.querySelector('.alert');
        if (alert) {
            alert.style.display = 'none';
        }
    }, 5000);*/

    document.addEventListener("DOMContentLoaded", function () {


        const navItems = document.querySelectorAll('.nav-item');
        navItems.forEach(function(item) {
            item.addEventListener('click', function() {

                document.querySelectorAll('.nav-link')
                    .forEach(link => link.classList.remove('active'));

                const link = this.querySelector('.nav-link');
                if(link){
                    link.classList.add('active');
                }

            });
        });

    });
</script>
</html>