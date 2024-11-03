@extends('layouts.main')

@section('content')

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <img src="assets/img/hero-bg-2.jpg" alt="" class="hero-bg">

      <div class="container">
        <div class="row gy-4 justify-content-between">
          <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-in">
            <h1>Unlock Your Financial Future with <span>InvestSmart</span></h1>
            <p>Join thousands of investors achieving their financial goals with ease and security. Your journey to smarter investing starts here.</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Get Started</a>
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center">
                <i class="bi bi-play-circle"></i><span>Watch Video</span>
              </a>
            </div>
          </div>


        </div>
      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="about section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row align-items-xl-center gy-5">

        <div class="col-xl-5 content">
          <h3>About Us</h3>
          <h2>Your Trusted Partner in Smart Investing</h2>
          <p>We are committed to helping you reach your financial goals through secure, transparent, and innovative investment solutions. Our platform offers personalized insights, expert guidance, and powerful tools designed to maximize your potential for growth.</p>
          <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
        </div>

        <div class="col-xl-7">
          <div class="row gy-4 icon-boxes">

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <i class="bi bi-buildings"></i>
                <h3>Integrity & Trust</h3>
                <p>We prioritize transparency and ethical practices, ensuring your investments are managed with utmost care.</p>
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box">
                <i class="bi bi-clipboard-pulse"></i>
                <h3>Data-Driven Insights</h3>
                <p>Empowering you with real-time data and analytics to make informed and effective investment decisions.</p>
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box">
                <i class="bi bi-command"></i>
                <h3>Customized Strategies</h3>
                <p>Offering tailored solutions that align with your financial objectives, risk tolerance, and growth targets.</p>
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="icon-box">
                <i class="bi bi-graph-up-arrow"></i>
                <h3>Growth & Success</h3>
                <p>Focused on sustainable, long-term growth to help you build a secure financial future.</p>
              </div>
            </div> <!-- End Icon Box -->

          </div>
        </div>

      </div>
    </div>

  </section><!-- /About Section -->

<!-- Features Section -->
<section id="features" class="features section">

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="features-item">
            <i class="bi bi-eye" style="color: #ffbb2c;"></i>
            <h3><a href="" class="stretched-link">Transparent Investments</a></h3>
          </div>
        </div><!-- End Feature Item -->

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="features-item">
            <i class="bi bi-infinity" style="color: #5578ff;"></i>
            <h3><a href="" class="stretched-link">Diverse Portfolio</a></h3>
          </div>
        </div><!-- End Feature Item -->

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="features-item">
            <i class="bi bi-mortarboard" style="color: #e80368;"></i>
            <h3><a href="" class="stretched-link">Expert Guidance</a></h3>
          </div>
        </div><!-- End Feature Item -->

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
          <div class="features-item">
            <i class="bi bi-nut" style="color: #e361ff;"></i>
            <h3><a href="" class="stretched-link">Secure Transactions</a></h3>
          </div>
        </div><!-- End Feature Item -->

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
          <div class="features-item">
            <i class="bi bi-shuffle" style="color: #47aeff;"></i>
            <h3><a href="" class="stretched-link">Flexible Plans</a></h3>
          </div>
        </div><!-- End Feature Item -->

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
          <div class="features-item">
            <i class="bi bi-star" style="color: #ffa76e;"></i>
            <h3><a href="" class="stretched-link">Performance Tracking</a></h3>
          </div>
        </div><!-- End Feature Item -->

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
          <div class="features-item">
            <i class="bi bi-x-diamond" style="color: #11dbcf;"></i>
            <h3><a href="" class="stretched-link">Goal-Oriented Tools</a></h3>
          </div>
        </div><!-- End Feature Item -->

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
          <div class="features-item">
            <i class="bi bi-camera-video" style="color: #4233ff;"></i>
            <h3><a href="" class="stretched-link">Educational Resources</a></h3>
          </div>
        </div><!-- End Feature Item -->

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="900">
          <div class="features-item">
            <i class="bi bi-command" style="color: #b2904f;"></i>
            <h3><a href="" class="stretched-link">24/7 Support</a></h3>
          </div>
        </div><!-- End Feature Item -->

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1000">
          <div class="features-item">
            <i class="bi bi-dribbble" style="color: #b20969;"></i>
            <h3><a href="" class="stretched-link">Mobile Access</a></h3>
          </div>
        </div><!-- End Feature Item -->

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1100">
          <div class="features-item">
            <i class="bi bi-activity" style="color: #ff5828;"></i>
            <h3><a href="" class="stretched-link">Market Updates</a></h3>
          </div>
        </div><!-- End Feature Item -->

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1200">
          <div class="features-item">
            <i class="bi bi-brightness-high" style="color: #29cc61;"></i>
            <h3><a href="" class="stretched-link">Growth Opportunities</a></h3>
          </div>
        </div><!-- End Feature Item -->

      </div>

    </div>

  </section><!-- /Features Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-emoji-smile"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-journal-richtext"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-headset"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-people"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

<!-- Details Section -->
<section id="details" class="details section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Details</h2>
      <div><span>Explore Our</span> <span class="description-title">Platform Features</span></div>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4 align-items-center features-item">
        <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
          <img src="assets/img/details-1.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
          <h3>Streamlined Investment Management</h3>
          <p class="fst-italic">
            Simplify your investment experience with powerful, intuitive tools designed to enhance your financial journey.
          </p>
          <ul>
            <li><i class="bi bi-check"></i><span> Track investments effortlessly with real-time data.</span></li>
            <li><i class="bi bi-check"></i><span> Personalized portfolio insights and recommendations.</span></li>
            <li><i class="bi bi-check"></i><span> Easily manage and diversify your assets.</span></li>
          </ul>
        </div>
      </div><!-- Features Item -->

      <div class="row gy-4 align-items-center features-item">
        <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/details-2.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
          <h3>Advanced Risk Management Tools</h3>
          <p class="fst-italic">
            Take control of your investments with sophisticated risk management features that prioritize security.
          </p>
          <p>
            From intelligent alerts to real-time risk assessments, we provide the tools to help you make confident investment decisions and protect your assets.
          </p>
        </div>
      </div><!-- Features Item -->

      <div class="row gy-4 align-items-center features-item">
        <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
          <img src="assets/img/details-3.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-7" data-aos="fade-up">
          <h3>Secure & Transparent Transactions</h3>
          <p>We ensure a high standard of security and transparency, so you can trust your transactions are in safe hands.</p>
          <ul>
            <li><i class="bi bi-check"></i><span> Robust encryption for all data and transactions.</span></li>
            <li><i class="bi bi-check"></i><span> Detailed transaction history for complete clarity.</span></li>
            <li><i class="bi bi-check"></i><span> Compliance with the highest financial standards.</span></li>
          </ul>
        </div>
      </div><!-- Features Item -->

      <div class="row gy-4 align-items-center features-item">
        <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
          <img src="assets/img/details-4.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
          <h3>Comprehensive Support & Resources</h3>
          <p class="fst-italic">
            Our dedicated support and educational resources are here to guide you at every step of your investment journey.
          </p>
          <p>
            Gain access to expert insights, tutorials, and customer support to help you make the most of our platform and grow your wealth with confidence.
          </p>
        </div>
      </div><!-- Features Item -->

    </div>

  </section><!-- /Details Section -->


<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section dark-background">

    <img src="https://unsplash.com/photos/testimonials-bg" class="testimonials-bg" alt="">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            }
          }
        </script>
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="https://unsplash.com/photos/testimonials-1" class="testimonial-img" alt="">
              <h3>Emily Thompson</h3>
              <h4>CEO, Future Investments</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>The platform's investment tools are unmatched, helping us make informed decisions and maximize returns. Highly recommend for anyone serious about financial growth.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="https://unsplash.com/photos/testimonials-2" class="testimonial-img" alt="">
              <h3>James Carter</h3>
              <h4>Financial Advisor</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>As a financial advisor, I trust this platform for its accuracy and comprehensive analysis. My clients appreciate the seamless experience and impactful results.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="https://unsplash.com/photos/testimonials-3" class="testimonial-img" alt="">
              <h3>Amanda Johnson</h3>
              <h4>Investor</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>I've achieved impressive returns using this platform. The insights and advice provided have transformed my investment strategy completely.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="https://unsplash.com/photos/testimonials-4" class="testimonial-img" alt="">
              <h3>Michael Lee</h3>
              <h4>Entrepreneur</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>The platform provides fantastic support for new investors. With clear guidance and detailed analysis, I feel more confident than ever in my financial journey.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="https://unsplash.com/photos/testimonials-5" class="testimonial-img" alt="">
              <h3>Sarah Wilson</h3>
              <h4>Startup Founder</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Reliable, insightful, and user-friendly. The platform has played a key role in helping me manage my assets while focusing on growing my business.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- /Testimonials Section -->

<!-- Pricing Section -->
<section id="pricing" class="pricing section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Pricing</h2>
      <div><span>Explore Our</span> <span class="description-title">Plans & Pricing</span></div>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <!-- Free Plan -->
        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="pricing-item">
            <h3>Free Plan</h3>
            <p class="description">Perfect for exploring the basics at no cost.</p>
            <h4><sup>$</sup>0<span> / month</span></h4>
            <p class="text-center small">Duration: Unlimited</p>
            <p class="text-center small"><strong>ROI:</strong> Limited but ideal for learning the basics</p>
            <a href="/plan" class="cta-btn">Start Free</a>
            <ul>
              <li><i class="bi bi-check"></i> Basic feature access</li>
              <li><i class="bi bi-check"></i> Essential support</li>
              <li><i class="bi bi-check"></i> Community access</li>
              <li class="na"><i class="bi bi-x"></i> Advanced analytics</li>
              <li class="na"><i class="bi bi-x"></i> Custom integrations</li>
              <li class="na"><i class="bi bi-x"></i> Dedicated support</li>
            </ul>
          </div>
        </div><!-- End Free Plan -->

        <!-- Business Plan -->
        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="pricing-item featured">
            <p class="popular">Popular</p>
            <h3>Business Plan</h3>
            <p class="description">Ideal for small businesses looking to scale efficiently.</p>
            <h4><sup>$</sup>29<span> / month</span></h4>
            <p class="text-center small">Duration: Monthly</p>
            <p class="text-center small"><strong>ROI:</strong> High value with expanded features for business growth</p>
            <a href="/plan" class="cta-btn">Start Now</a>
            <ul>
              <li><i class="bi bi-check"></i> Everything in Free</li>
              <li><i class="bi bi-check"></i> Priority support</li>
              <li><i class="bi bi-check"></i> Enhanced features</li>
              <li><i class="bi bi-check"></i> Advanced analytics</li>
              <li><i class="bi bi-check"></i> Custom integrations</li>
              <li class="na"><i class="bi bi-x"></i> Dedicated account manager</li>
            </ul>
          </div>
        </div><!-- End Business Plan -->

        <!-- Developer Plan -->
        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="pricing-item">
            <h3>Developer Plan</h3>
            <p class="description">Comprehensive package for professionals seeking full access.</p>
            <h4><sup>$</sup>49<span> / month</span></h4>
            <p class="text-center small">Duration: Monthly</p>
            <p class="text-center small"><strong>ROI:</strong> Maximum ROI for developers with premium support and tools</p>
            <a href="/plan" class="cta-btn">Start Now</a>
            <ul>
              <li><i class="bi bi-check"></i> Everything in Business</li>
              <li><i class="bi bi-check"></i> Dedicated account manager</li>
              <li><i class="bi bi-check"></i> Priority support</li>
              <li><i class="bi bi-check"></i> Premium integrations</li>
              <li><i class="bi bi-check"></i> API access</li>
              <li><i class="bi bi-check"></i> Advanced security</li>
            </ul>
          </div>
        </div><!-- End Developer Plan -->

      </div>

    </div>

  </section><!-- /Pricing Section -->

<!-- Faq Section -->
<section id="faq" class="faq section light-background">

    <div class="container-fluid">

      <div class="row gy-4">

        <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

          <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
            <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
            <p>
              Welcome to our FAQ section! Here, we address some of the most common questions our users have. If you don’t find the answer you’re looking for, feel free to reach out to our support team.
            </p>
          </div>

          <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

            <div class="faq-item faq-active">
              <i class="faq-icon bi bi-question-circle"></i>
              <h3>What features are included in the Free Plan?</h3>
              <div class="faq-content">
                <p>The Free Plan offers basic feature access, community support, and educational resources to help you get started. Perfect for exploring the platform without any cost!</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <i class="faq-icon bi bi-question-circle"></i>
              <h3>How can I upgrade my plan?</h3>
              <div class="faq-content">
                <p>You can easily upgrade your plan from your account settings. Simply select the plan you'd like to upgrade to and follow the prompts for payment and confirmation.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <i class="faq-icon bi bi-question-circle"></i>
              <h3>What is your refund policy?</h3>
              <div class="faq-content">
                <p>We offer a 30-day money-back guarantee for all paid plans. If you're not satisfied with our service, simply contact our support team within 30 days for a full refund.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <i class="faq-icon bi bi-question-circle"></i>
              <h3>Is there a trial period for paid plans?</h3>
              <div class="faq-content">
                <p>Yes! All paid plans come with a free trial period, allowing you to test out the features risk-free before committing to a subscription.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

          </div>

        </div>

        <div class="col-lg-5 order-1 order-lg-2">
          <img src="assets/img/faq.jpg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
        </div>
      </div>

    </div>

  </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <div><span>Check Our</span> <span class="description-title">Contact</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>contact@aurorahcorp.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

 @endsection
