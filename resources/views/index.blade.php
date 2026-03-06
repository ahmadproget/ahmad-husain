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
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
     @vite(['resources/css/app.css'])
    <title>Ahmad Husain</title>
</head>
<body class="bg-body">
    <div class="gradient-wrapper">
        <div class="gradient-header" style="background-image: url('{{ asset('images/gradient-bg.png') }}');"></div>
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
        <div class="gradient-footer" style="background-image: url('{{ asset('images/gradient-bg.png') }}');"></div>
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

    setTimeout(function() {
        let alert = document.querySelector('.alert');
        if (alert) {
            alert.style.display = 'none';
        }
    }, 5000);

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