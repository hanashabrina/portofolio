<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal Portfolio</title>

  <!--
    - favicon
  -->
  
  <link rel="shortcut icon" href="{{ asset('vcard-personal-portfolio-master/assets/images/logo.ico') }}" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="{{ asset('vcard-personal-portfolio-master/assets/css/style.css') }}">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="{{ asset('vcard-personal-portfolio-master/assets/images/hana.jpg') }}" alt="Richard hanrick" width="80" style="border-radius: 14px">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Richard hanrick">Hana Shabrina</h1>

          <p class="title">Front End Developer</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:hanashabrinaa@gmail.com" class="contact-link">hanashabrinaa@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="tel:+6282136074165" class="contact-link">+62 821-3607-4165</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="1982-06-23">January 29, 2003</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>Semarang, Central Java, Indonesia</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="https://github.com/hanashabrina" class="social-link">
              <ion-icon name="logo-github"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://www.instagram.com/hanaashabrinaa/" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>


    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">About me</h2>
        </header>

        <section class="about-text">
          <p>
            Hana is a computer science student with a strong passion for learning and exploring knowledge. 
            Her analytical abilities and problem-solving skills allow her to tackle complex challenges in software development. 
            With strong expertise in programming and software development, makes she is a well-rounded candidate for a career in the development field.
          </p>
        </section>


        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">What i'm doing</h3>

          <ul class="service-list">

            <li class="service-item">

              <div class="service-icon-box">
                <img src="{{ asset('vcard-personal-portfolio-master/assets/images/icon-design.svg') }}" alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web design</h4>

                <p class="service-item-text">
                  Creating a modern and high-quality design that is user-friendly.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="{{ asset('vcard-personal-portfolio-master/assets/images/icon-dev.svg') }}" alt="Web development icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Front End Developer</h4>

                <p class="service-item-text">
                  Developing high-quality front-end on the website based on functionality.
                </p>
              </div>

            </li>

          </ul>

        </section>

        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Diponegoro University</h4>

              <span>2021 — recent</span>

              <p class="timeline-text">
                Department of Informatics, Faculty of Science and Mathematics
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">SMA Negeri 6 Semarang</h4>

              <span>2018 — 2021</span>

              <p class="timeline-text">
                Concentrating in Natural Science
              </p>

            </li>

          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Web Design & Front End Developer Intern</h4>

              <span>Jan 2024 — Feb 2024</span>

              <p class="timeline-text">
                Internship at Indosat Tbk in Semarang city and developing the NEPTION application for site management in Central Java area.
              </p>

            </li>

          </ol>

        </section>

        <section class="skill">

          <h3 class="h3 skills-title">My skills</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Figma</h5>
                <data value="95">95%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 95%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">HTML</h5>
                <data value="90">90%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 90%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">CSS</h5>
                <data value="90">90%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 90%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">JavaScript</h5>
                <data value="80">80%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 80%;"></div>
              </div>

            </li>

          </ul>

        </section>

      </article>

    </div>

  </main>

  <!--
    - custom js link
  -->
  <script src="{{ asset('vcard-personal-portfolio-master/assets/js/script.js') }}"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>