<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Portfolio Website Design | Codehal</title>

    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- box icons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>

  <body>
    <!-- header design -->
    <header class="header">
      <a href="#" class="logo">Manifestasi</a>

      <nav class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#contact">Contact</a>
      </nav>

      <!-- <div class="bx bx-moon" id="darkMode-icon"></div> -->

      <div class="bx bx-menu" id="menu-icon"></div>
    </header>
    <!-- home section design -->
    <section class="home" id="home">
      <div class="home-content">
        <h3>Lorem, ipsum.</h3>
        <h1>Lorem, ipsum</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem nihil dolores rem qui, beatae quam.</p>

        <div class="social-media">
          <a href="#"><i class="bx bxl-facebook"></i></a>
          <a href="#"><i class="bx bxl-twitter"></i></a>
          <a href="#"><i class="bx bxl-instagram-alt"></i></a>
          <a href="#"><i class="bx bxl-linkedin"></i></a>
        </div>
        <a href="#" class="btn-logo">
          <i class="bx bxl-whatsapp"></i>
          <p>Konsultasikan sekarang</p>
        </a>
      </div>

      <div class="r-container">
        <div class="r-box">
          <div class="r-content" style="--i: 0">
            <i class="bx bx-code-alt"></i>
            <h3>Web Developer</h3>
          </div>
          <div class="r-content" style="--i: 1">
            <i class="bx bx-camera"></i>
            <h3>Photographer</h3>
          </div>
          <div class="r-content" style="--i: 2">
            <i class="bx bx-palette"></i>
            <h3>Web Designer</h3>
          </div>
          <!-- <div class="r-content">
            <i class="bx bx-code-alt"></i>
            <h3>Vidographer</h3>
          </div> -->
          <div class="circle"></div>
        </div>

        <div class="overlay"></div>

        <div class="home-img">
          <img src="{{ asset('images/kartun.jpg') }}" alt="" />
        </div>
      </div>
    </section>

    <!-- about section design -->

    <section class="about" id="about">
      <div class="about-img">
        <img src="{{ asset('images/kartun2.jpg') }}" alt="" />
      </div>
      <div class="about-content">
        <h2 class="heading">About <span>Us</span></h2>
        <h3>Lorem ipsum dolor sit amet.</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus quo illo omnis reiciendis! Asperiores deleniti deserunt qui ipsam dolores, quisquam ex dolorum a quo culpa magnam fugiat excepturi quod ducimus!</p>
        <a href="#" class="btn">Read More</a>
      </div>
    </section>

    <!-- services section design -->
    <section class="services" id="services">
      <h2 class="heading">Our <span>Services</span></h2>

      <div class="services-container">
        <div class="services-box">
          <i class="bx bx-code-alt"></i>
          <h3>Web Development</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta cupiditate libero vero sed perferendis qui vitae blanditiis molestiae quisquam, autem consectetur velit cum culpa inventore officia est quasi nam soluta.</p>
          <a href="#" class="btn">Read More</a>
        </div>
        <div class="services-box">
          <i class="bx bx-mobile-alt"></i>
          <h3>Mobile Development</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta cupiditate libero vero sed perferendis qui vitae blanditiis molestiae quisquam, autem consectetur velit cum culpa inventore officia est quasi nam soluta.</p>
          <a href="#" class="btn">Read More</a>
        </div>
        <div class="services-box">
          <i class="bx bxs-paint"></i>
          <h3>Designer</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta cupiditate libero vero sed perferendis qui vitae blanditiis molestiae quisquam, autem consectetur velit cum culpa inventore officia est quasi nam soluta.</p>
          <a href="#" class="btn">Read More</a>
        </div>
      </div>
    </section>

    <div class="price">
      <h2 class="heading">Tertarik dengan penawaran <span> Kami?</span></h2>
      <h3 class="heading">Harga mulai <span>Rp.100.000 !!</span></h3>
      <div class="price-container">
        <div class="price-card">
          <a href="#" class="btn-logo">
            <i class="bx bxl-whatsapp"></i>
            <p href="#">Konsultasikan sekarang</p>
          </a>
          <p class="note">harga belum termasuk biaya hosting dll</p>
        </div>
      </div>
    </div>

    <!-- portfolio section design -->
    <section class="portofolio" id="portfolio">
      <h2 class="heading">Latest <span>Project</span></h2>

      <div class="portofolio-container">
        <div class="portofolio-box">
          <img src="{{ asset('images/portfolio1.jpg') }}" alt="" />

          <div class="portofolio-layer">
            <h4>Designer</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptatem.</p>
            <a href="#"><i class="bx bx-link-external"></i></a>
          </div>
        </div>
        <div class="portofolio-box">
          <img src="{{ asset('images/portfolio2.jpg') }}" alt="" />

          <div class="portofolio-layer">
            <h4>Website</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptatem.</p>
            <a href="#"><i class="bx bx-link-external"></i></a>
          </div>
        </div>
        <div class="portofolio-box">
          <img src="{{ asset('images/portfolio3.jpg') }}" alt="" />

          <div class="portofolio-layer">
            <h4>Mobile App</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptatem.</p>
            <a href="#"><i class="bx bx-link-external"></i></a>
          </div>
        </div>
      </div>
    </section>

    <!-- testimonial design -->
    <div class="testimonial-container">
      <h2 class="heading">Valuable <span>Testimonial</span></h2>

      <div class="testimonial-wrapper">
        <div class="testimonial-box mySwiper">
          <div class="testimonial-content swiper-wrapper">
            <div class="testimonial-slide swiper-slide">
              <img src="{{ asset('images/testimonial1.jpg') }}" alt="" />
              <h3>Lorem, ipsum dolor.</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus excepturi vitae, ratione possimus natus obcaecati tempora omnis magnam distinctio ullam rerum hic reiciendis similique molestiae modi repudiandae eos quos
                fuga.
              </p>
            </div>
            <div class="testimonial-slide swiper-slide">
              <img src="{{ asset('images/testimonial2.jpg') }}" alt="" />
              <h3>Lorem, ipsum dolor.</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus excepturi vitae, ratione possimus natus obcaecati tempora omnis magnam distinctio ullam rerum hic reiciendis similique molestiae modi repudiandae eos quos
                fuga.
              </p>
            </div>
            <div class="testimonial-slide swiper-slide">
              <img src="{{ asset('images/testimonial3.jpg') }}" alt="" />
              <h3>Lorem, ipsum dolor.</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus excepturi vitae, ratione possimus natus obcaecati tempora omnis magnam distinctio ullam rerum hic reiciendis similique molestiae modi repudiandae eos quos
                fuga.
              </p>
            </div>
          </div>

          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>

    <!-- contact section design -->

    <!-- footer design -->
    <footer class="footer">
      <div class="footer-text">
        <p>Copyright &copy; 2023 by Manifestasi | All Rights Reserved</p>
      </div>

      <div class="footer-iconTop">
        <a href="#home"><i class="bx bx-up-arrow-alt"></i></a>
      </div>
    </footer>

    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- custom js -->
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>
