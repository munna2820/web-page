<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <!--bootstrap link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!--main css link-->
  <link rel="stylesheet" href="asstes/css/style.css">
  <!--bootstrap icons link-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

</head>

<body>
  <!--header star-->
  <header>
    <nav class="navbar navbar-expand-lg bg-success">
      <div class="container bg-info py-2">
        <a class="navbar-brand" href="#">DevFolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Work</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Contact</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
     </nav>
   
    <div class="hero">
      <div class="overlay"></div>
        <div class="content">
          <h1 class="fs-1">I am Munna Freeman</h1>
          <span class="fs-2" id="element"></span>
        </div>
    </div>
    </header>
  <!--header end-->

  <!--About star-->
  <section id="about" class="about-mf sect-pt4 route py-5">
    <div class="container py-2">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-5 py-2">
                    <div class="about-img">
                      <img src="profile-1.jpg"
                        class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7 py-2">
                    <div class="about-info">
                      <p><span class="title-s">Name: </span> <span>Munna Freeman</span></p>
                      <p><span class="title-s">Profile: </span> <span>full stack developer</span></p>
                      <p><span class="title-s">Email: </span> <span>contact@example.com</span></p>
                      <p><span class="title-s">Phone: </span> <span>(617) 557-0089</span></p>
                    </div>
                  </div>
                </div>
                <div class="skill-mf">
                  <h2>Skill</h2>
                  <span>HTML</span> <span class="pull-right">80%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>CSS</span> <span class="pull-right">70%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>PHP</span> <span class="pull-right">50%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>JAVASCRIPT</span> <span class="pull-right">45%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      <h2>About me</h2>
                    </h5>
                  </div>
                  <p class="lead">
                    Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id
                    imperdiet et, porttitor
                    at sem. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla
                    porttitor accumsan tincidunt.
                  </p>
                  <p class="lead">
                    Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis
                    porttitor volutpat. Vestibulum
                    ac diam sit amet quam vehicula elementum sed sit amet dui. porttitor at sem.
                  </p>
                  <p class="lead">
                    Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
                    Nulla porttitor accumsan
                    tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--About end-->

  <!--Services star-->
  <section id="Services" class="services-mf pt-5 route">
    <div class="container text-center pt-5">
      <div class="row py-5">
        <h1>Services</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, necessitatibus?</p>
        <div class="col-sm-12  col-md-4">
          <div class="service-box">
            <div class="service-icon">
              <span class="ico-circle"><i class="bi bi-apple"></i></span>
              <h2>WEB DESING</h2>
              <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit, molestiae ut libero officiis
                sapiente excepturi vel nostrum temporibus quod esse?</P>
            </div>
          </div>
        </div>

        <div class="col-sm-12  col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="bi bi-briefcase"></i></span>
              <div class="service-content">
                <h2 class="s-title">Web Design</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-12  col-md-4">
          <div class="service-box">
            <div class="Service-icon">
              <span class="ico-circle"><i class="bi bi-bag-dash"></i></span>
              <h2>WEB DESING</h2>
              <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit, molestiae ut libero officiis
                sapiente excepturi vel nostrum temporibus quod esse?</P>
            </div>
          </div>
        </div>

        <div class="col-sm-12  col-md-4">
          <div class="service-box">
            <div class="Service-icon">
              <span class="ico-circle"><i class="bi bi-brightness-high-fill"></i></span>
              <h2>WEB DESING</h2>
              <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit, molestiae ut libero officiis
                sapiente excepturi vel nostrum temporibus quod esse?</P>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-4">
          <div class="service-box">
            <div class="Service-icon">
              <span class="ico-circle"><i class="bi bi-broadcast-pin"></i></span>
              <h2>WEB DESING</h2>
              <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit, molestiae ut libero officiis
                sapiente excepturi vel nostrum temporibus quod esse?</P>
            </div>
          </div>
        </div>

        <div class="col-sm-12  col-md-4">
          <div class="service-box">
            <div class="Service-icon">
              <span class="ico-circle"><i class="bi bi-calendar-heart"></i></span>
              <h2>WEB DESING</h2>
              <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit, molestiae ut libero officiis
                sapiente excepturi vel nostrum temporibus quod esse?</P>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Services end-->

  <!--facts icon section-->
  <section id="facts" class="facts">
    <div class="overlay py-4">
      <div class="content">
        <div class="container">
          <div class="row py-5 g-5">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card text-center">
                <span><i class="bi bi-alarm"></i></span>
                <h3>500+</h3>
                <p>student</p>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card text-center">
                <span><i class="bi bi-alarm-fill"></i></span>
                <h3>500+</h3>
                <p>student</p>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card text-center">
                <span><i class="bi bi-arrow-clockwise"></i></span>
                <h3>500+</h3>
                <p>student</p>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card text-center">
                <span><i class="bi bi-android2"></i></span>
                <h3>500+</h3>
                <p>student</p>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card text-center">
                <span><i class="bi bi-arrow-clockwise"></i></span>
                <h3>500+</h3>
                <p>student</p>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card text-center">
                <span><i class="bi bi-arrow-down-square"></i></span>
                <h3>500+</h3>
                <p>student</p>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card text-center">
                <span><i class="bi bi-arrow-clockwise"></i></span>
                <h3>500+</h3>
                <p>student</p>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card text-center">
                <span><i class="bi bi-arrow-through-heart-fill"></i></span>
                <h3>500+</h3>
                <p>student</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Work star-->
  <section id="Work" class="services-mf pt-5 route">
    <div class="container">
      <div class="row py-5">
        <div class="work-text text-center">
          <h1>PORTFOLIO</h1>
          <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit</P>
        </div>
        <div class="col-12 col-md-4">
          <div class="work-area">
            <div class="row">
              <div class="img-container">
                <img src="https://bootstrapmade.com/demo/templates/DevFolio/assets/img/work-1.jpg" alt="" width="100%"
                  height="280px">
              </div>
              <h5 style="margin: 5px;">Lorem impsum dolor</h5>
              <div class=" col-12 col-md-8">
                <p style="margin: 5px;"><a href="#">Web Design</a>/ 18 Sep. 2018</p>
              </div>
              <div class="col-sm-4">
                <div class="card-icons">
                  <span><i class="bi bi-plus-circle"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="work-area">
            <div class="row">
              <img src="https://bootstrapmade.com/demo/templates/DevFolio/assets/img/work-2.jpg" alt="" width="360px"
                height="280px">
              <h5 style="margin: 5px;">Loreda Cuno Nere</h5>
              <div class="col-12 col-md-8">
                <p style="margin: 5px;"><a href="#">Web Design </a> / 18 Sep. 2018</p>
              </div>
              <div class="col-12 col-md-4">
                <div class="card-icons">
                  <span><i class="bi bi-plus-circle"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="work-area">
            <div class="row">
              <img src="https://bootstrapmade.com/demo/templates/DevFolio/assets/img/work-3.jpg" alt="" width="360px"
                height="280px">
              <h5 style="margin: 5px;">Mavrito Lana Dere</h5>
              <div class="col-12 col-md-8">
                <p style="margin: 5px;"><a href="#">Web Design </a> / 18 Sep. 2018</p>
              </div>
              <div class="col-12 col-md-4">
                <div class="card-icons">
                  <span><i class="bi bi-plus-circle"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="work-area">
            <div class="row">
              <img src="https://bootstrapmade.com/demo/templates/DevFolio/assets/img/work-4.jpg" alt="" width="360px"
                height="280px">
              <h5 style="margin: 5px;">Bindo Laro Cado</h5>
              <div class="col-12 col-md-8">
                <p style="margin: 5px;"><a href="#">Web Design </a> / 18 Sep. 2018</p>
              </div>
              <div class="col-12 col-md-4">
                <div class="card-icons">
                  <span><i class="bi bi-plus-circle"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="work-area">
            <div class="row">
              <img src="https://bootstrapmade.com/demo/templates/DevFolio/assets/img/work-5.jpg" alt="" width="360px"
                height="280px">
              <h5 style="margin: 5px;">Studio Lena Mado</h5>
              <div class="col-12 col-md-8">
                <p style="margin: 5px;"><a href="#">Web Design </a> / 18 Sep. 2018</p>
              </div>
              <div class="col-12 col-md-4">
                <div class="card-icons">
                  <span><i class="bi bi-plus-circle"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="work-area">
            <div class="row">
              <img src="https://bootstrapmade.com/demo/templates/DevFolio/assets/img/work-6.jpg" alt="" width="360px"
                height="280px">
              <h5 style="margin: 5px;">Studio Big Bang</h5>
              <div class="col-12 col-md-8">
                <p style="margin: 5px;"><a href="#">Web Design </a> / 18 Sep. 2018</p>
              </div>
              <div class="col-12 col-md-4">
                <div class="card-icons">
                  <span><i class="bi bi-plus-circle"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Work end-->

  <!--Swiper section-->
  <section id="clients" class="clients">
    <div class="container">
      <!-- Swiper -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide d-block text-center">
            <img
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8hquZ0Rc1LTmH5YPLGDmdf1ZchGTgNL8rsA&usqp=CAU"
              alt="" width="100px" height="100px">
            <h4>Munna</h4>
            <p>web development</p>
          </div>
          <div class="swiper-slide d-block text-center">
            <img
              src="https://e0.pxfuel.com/wallpapers/521/162/desktop-wallpaper-dslr-blur-background-ideas-dslr-blur-background-hop-digital-background-dslr-background-thumbnail.jpg"
              alt="" width="100px" height="100px">
            <h4>Mojib</h4>
            <p>web design and development</p>
          </div>
          <div class="swiper-slide d-block text-center">
            <img
              src="https://e0.pxfuel.com/wallpapers/521/162/desktop-wallpaper-dslr-blur-background-ideas-dslr-blur-background-hop-digital-background-dslr-background-thumbnail.jpg"
              alt="" width="100px" height="100px">
            <h4>Munna</h4>
            <p>Freelancer</p>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>

  <!--Blog star-->
  <section id="Blog" class="services-mf pt-5 route">
    <div class="container text-center">
      <div class="row">
        <h1>BLOG</h1>
        <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</P>
        <div class="col-12 col-md-4">
          <div class="card mb-3">
            <img src="https://bootstrapmade.com/demo/templates/DevFolio/assets/img/post-1.jpg" alt="">
            <div class="card-body">
              <h3>See more ideas about Travel</h3>
              <p>Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa,
                convallis a
                pellentesque nec, egestas non nisi.</p>
              <a href="#" class="btn btn-primary">webdesing</a>
            </div>
            <div class="card-footer mt-2">
              <div class="post-author">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <p><a href="#"><img src=" profile-1.jpg" alt=""></a>:Munna Mia</p>
                  </div>
                  <div class="col-12 col-lg-6">
                    <span>
                      <p><a href=""><i class="bi bi-alarm"></i></a> 10 minute</p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card">
            <img src="https://bootstrapmade.com/demo/templates/DevFolio/assets/img/post-2.jpg" alt="">
            <div class="card-body">
              <h3>See more ideas about Travel</h3>
              <p>Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa,
                convallis a
                pellentesque nec, egestas non nisi.</p>
              <a href="#" class="btn btn-primary">webdesing</a>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <p><a href="#"><img src=" profile-1.jpg" alt=""></a>:Munna Mia</p>
                  </div>
                  <div class="col-12 col-lg-6">
                    <span>
                      <p><a href=""><i class="bi bi-alarm"></i></a> 10 minute</p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card">
            <img src="https://bootstrapmade.com/demo/templates/DevFolio/assets/img/post-3.jpg" alt="">
            <div class="card-body">
              <h3>See more ideas about Travel</h3>
              <p>Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa,
                convallis a
                pellentesque nec, egestas non nisi.</p>
              <a href="#" class="btn btn-primary">webdesing</a>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <p><a href="#"><img src=" profile-1.jpg" alt=""></a>:Munna Mia</p>
                  </div>
                  <div class="col-12 col-lg-6">
                    <span>
                      <p><a href=""><i class="bi bi-alarm"></i></a> 10 minute</p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card">
            <img src="https://bootstrapmade.com/demo/templates/DevFolio/assets/img/post-1.jpg" alt="">
            <div class="card-body">
              <h3>See more ideas about Travel</h3>
              <p>Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa,
                convallis a
                pellentesque nec, egestas non nisi.</p>
              <a href="#" class="btn btn-primary">webdesing</a>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <p><a href="#"><img src=" profile-1.jpg" alt=""></a>:Munna Mia</p>
                  </div>
                  <div class="col-12 col-lg-6">
                    <span>
                      <p><a href=""><i class="bi bi-alarm"></i></a> 10 minute</p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card">
            <img src="https://bootstrapmade.com/demo/templates/DevFolio/assets/img/post-2.jpg" alt="">
            <div class="card-body">
              <h3>See more ideas about Travel</h3>
              <p>Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa,
                convallis a
                pellentesque nec, egestas non nisi.</p>
              <a href="#" class="btn btn-primary">webdesing</a>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <p><a href="#"><img src=" profile-1.jpg" alt=""></a>:Munna Mia</p>
                  </div>
                  <div class="col-12 col-lg-6">
                    <span>
                      <p><a href=""><i class="bi bi-alarm"></i></a> 10 minute</p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card">
            <img src="https://bootstrapmade.com/demo/templates/DevFolio/assets/img/post-3.jpg" alt="">
            <div class="card-body">
              <h3>See more ideas about Travel</h3>
              <p>Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa,
                convallis a
                pellentesque nec, egestas non nisi.</p>
              <a href="#" class="btn btn-primary">webdesing</a>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <p><a href="#"><img src=" profile-1.jpg" alt=""></a>:Munna Mia</p>
                  </div>
                  <div class="col-12 col-lg-6">
                    <span>
                      <p><a href=""><i class="bi bi-alarm"></i></a> 10 minute</p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Blog end-->


  <!--Contact star-->
  <section id="Contact" class="services-mf pt-5 route">
    <div class="container py-5">
      <div class="row">
        <div class="col-12 col-sm-6 text-center">
          <h2>Send Message Us</h2>
          <form action="">
            <div class="col-md-12 py-4">
              <div class="form-group mb-3">
                <input type="text" name="Name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group mb-3">
                <input type="email" name="Email" class="form-control" id="Email" placeholder="Your Email" required>
              </div>
              <div class="form-group mb-3">
                <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mb-3">
                <textarea class="form-control" name="messge" placeholder="Message" rows="7"></textarea>
              </div>
              <div class="form-group">
                <div class="button">
                  <input type="submit" value="submit">
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-12 col-sm-6">
          <h2>Get in Touch</h2>
          <div class="text-line py-3">
            <p style="font-size: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum
              dolorem soluta quidem expedita
              aperiam aliquid at. Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione nobis mollitia
              inventore?</p>
          </div>
          <div class="icon">
            <ul class="list-icon">
              <li>
                <span><i class="bi bi-geo-alt-fill"></i> 329 WASHINGTON ST BOSTON, MA 02108</span>
              </li>
              <li>
                <span><i class="bi bi-phone"></i> (617) 557-0089</span>
              </li>
              <li>
                <span><i class="bi bi-envelope-arrow-down"></i> contact@example.com</span>
              </li>
            </ul>
          </div>
          <div class="contact-link">
            </span>
            <span><i class="bi bi-facebook"></i></span>
            <span><i class="bi bi-instagram"></i></span>
            <span><i class="bi bi-twitter"></i></span>
            <span><i class="bi bi-whatsapp"></i></span>
            <span><i class="bi bi-linkedin"></i></span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Contact end-->

  <!--footer star-->
  <section id="footer" class="services-mf pt-5 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright text-center bg-success">
            <p>&copy;copyright<a href=""></a>All Rights
              Designed by BootstrapMade</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--footer end-->
  <!--bootstrap javascrit link-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <!--bootstrap javasrcipt end-->

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- Typed JS  -->
  <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
  
  <!--js link star-->
  <script src="assets/js/main.js"></script>
  <!--js link end-->
</body>

</html>