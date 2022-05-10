<?php include 'sentMail.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <link rel="stylesheet" href="styles/styles2.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body class='main-content'>
  <header class="section sec1 header active" id='home'>
    <div class="header-content">
      <div class="left-header">
        <div class="h-shape"></div>
      </div>
      <div class="right-header ">
        <h1 class="name">
          Bonjour, Je m'appelle <span>Benjamin ADRIEN.</span><br>
          Je suis un développeur Web en recherche d'alternance.
        </h1>
        <p>

        </p>
        <div class="btn-con">
          <a href="benjamin-adrien.pdf" class="main-btn" target="__blank">
            <span class="btn-text">Download CV</span>
            <span class="btn-icon"><i class="fas fa-download"></i></span>
          </a>
        </div>
      </div>
    </div>
  </header>
  <main>
    <section class="section sec2 about" id='about'>
      <div class="main-title">
        <h2>à propos de <span>moi</span><span class="bg-text">mes stats</span></h2>
      </div>
      <div class="about-container">
        <div class="left-about">
          <h4>Informations à propos de moi</h4>
          <p>
            J'ai toujours été fasciné par la programmation dès l'instant où j'ai
            écris mon premier programme. Mais c'est lorsque j'ai réalisé mon
            premier projet que s'en est devenu une passion. Et depuis, elle ne
            m'a jamais quitté. <br><br> Aujourd'hui, afin de faire de ma passion
            mon métier, j’intègre dès la rentrée prochaine le cursus Développement
            Web en alternance chez MyDigitalSchool. Afin de compléter cette
            formation, je suis à la recherche d’une entreprise où réaliser mon
            alternance.
          </p>
          <div class="btn-con">
            <a href="benjamin-adrien.pdf" class="main-btn" target="__blank">
              <span class="btn-text">Download CV</span>
              <span class="btn-icon"><i class="fas fa-download"></i></span>
            </a>
          </div>
        </div>
      </div>
      <div class="about-stats">
        <h4 class="stat-title">Mes Compétences</h4>
        <div class="progress-bars">
          <!-- duplicatable -->
          <div class="progress-bar">
            <p class="prog-title">html5</p>
          </div>
          <div class="progress-bar">
            <p class="prog-title">CSS3</p>
          </div>
          <div class="progress-bar">
            <p class="prog-title">JavaScript</p>
          </div>
          <div class="progress-bar">
            <p class="prog-title">Python</p>
          </div>
          <div class="progress-bar">
            <p class="prog-title">SASS</p>
          </div>
          <div class="progress-bar">
            <p class="prog-title">java</p>
          </div>
        </div>
      </div>
      <h4 class="stat-title">Mes Expériences</h4>
      <div class="timeline">
        <!-- duplicatable -->
        <div class="timeline-item">
          <div class="tl-icon">
            <i class="fas fa-briefcase"></i>
          </div>
          <p class="tl-duration">Mars 2022 - Present</p>
          <h5>Préparateur de Commandes <span> - Cléon</span></h5>
          <p>
            J'exécute des opérations de réception, de stockage, de tenue des
            stocks, de préparation de commandes et d'expédition de marchandises. </p>
        </div>
        <div class="timeline-item">
          <div class="tl-icon">
            <i class="fas fa-briefcase"></i>
          </div>
          <p class="tl-duration">Octobre 2016 - Novembre 2020</p>
          <h5>Enseignant en Sciences Physiques <span> - Collèges et Lycées</span></h5>
          <p>
            Ma principale mission a été de leur faire acquérir une culture
            scientifique afin qu'ils construisent leur première
            représentation du monde qui les entoure et développer leur esprit
            critique, leur curiosité ainsi que leur sens de l'observation.
          </p>
        </div>
        <div class="timeline-item">
          <div class="tl-icon">
            <i class="fas fa-briefcase"></i>
          </div>
          <p class="tl-duration">Septembre 2019 - Juillet 2020</p>
          <h5>Enseignant en Technologie <span> - Collège Colbert</span></h5>
          <p>
            <u> Parmis mes missions on retrouve :</u><br>
            - Mettre au point et exécuter un programme informatique (en JavaScript). <br>
            - Imaginer des solutions en réponse à des besoins. <br>
            - Réaliser le prototype d'un objet communiquant.

          </p>
        </div>
      </div>
    </section>
    <section class="section sec3 portfolio" id='portfolio'>
      <div class="main-title">
        <h2>Mon <span>Portfolio</span><span class="bg-text">My Work</span></h2>
      </div>
      <p class="port-text">
      </p>
      <div class="portfolios">
        <!-- duplicatable -->
        <div class="portfolio-item">
          <div class="image">
            <img src="img/portfolio.jpg" alt="">
          </div>
          <div class="hover-item">
            <h3>Source Code : </h3>
            <div class="icons">
              <a href="https://github.com/BenjaminAdrien/MyPortfolio" class="icon" target='__blank'>
                <i class="fab fa-github"></i>
              </a>
            </div>
          </div>
          <div class="blog-text">
            <h4>
              Mon Portfolio
            </h4>
            <p>
              Un site web adaptif conçu avec <strong>SASS</strong>,
              <strong>JavaScript</strong> pour les animations et une
              partie en <strong>PHP</strong> pour l'envoi des emails.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="section sec4 contact" id='contact'>
      <div class="main-title">
        <h2>Me <span>Contacter</span><span class="bg-text">Contacts</span></h2>
      </div>
      <div class="contact-content-con">
        <div class="left-contact">
          <h4>Intéressé par mon Profil ?</h4>
          <p> N'hésitez pas à me contacter</p>
          <div class="contact-info">
            <div class="contact-item">
              <div class="icon">
                <i class="fas fa-map-marker-alt"></i>
                <span>Localisation&nbsp;</span>
              </div>
              <p>
                <span>:&nbspMontfaucon&#8209Montigné,&nbspFrance</span>
              </p>
            </div>
            <div class="contact-item">
              <div class="icon">
                <i class="fas fa-envelope"></i>
                <span>Email&nbsp;</span>
              </div>
              <p>
                <span>:&nbspbenadrien314@gmail.com</span>
              </p>
            </div>
            <div class="contact-item">
              <div class="icon">
                <i class="fas fa-user-graduate"></i>
                <span>Ecole&nbsp;</span>
              </div>
              <p>
                <span>:&nbspMyDigitalSchool,&nbspNantes</span>
              </p>
            </div>
            <div class="contact-item">
              <div class="icon">
                <i class="fas fa-globe-americas"></i>
                <span>Langues&nbsp;</span>
              </div>
              <p>
                <span>:&nbspFrench,&nbspEnglish</span>
              </p>
            </div>
          </div>
          <div class="contact-icons">
            <div class="contact-icon">
              <a href="https://www.linkedin.com/in/benjamin-adrien/" target="_blank">
                <i class="fab fa-linkedin"></i>
              </a>
            </div>
            <div class="contact-icon">
              <a href="https://github.com/BenjaminAdrien" target="_blank">
                <i class="fab fa-github"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="right-contact">
          <form method='post' action="" name="myemailform" class="contact-form">
            <div class="input-control ic2">
              <input type="text" name='name' required placeholder="Your Name">
              <input type="email" name='email' required placeholder="Your Email">
            </div>
            <div class="input-control">
              <input type="text" name='subject' required placeholder="Enter Subject">
            </div>
            <div class="input-control">
              <textarea name="message" id="" cols="15" rows="8" placeholder="Message Here..."></textarea>
            </div>
            <div>
              <p class="success php"><?php echo $success;  ?></p>
              <p class="failed php"><?php echo $failed;  ?></p>
            </div>
            <div class="submit-btn">
              <button href="#" class="main-btn" type="submit" name="submit" data-submit="...Sending">
                <div class="progress-hover"></div>
                <span class="btn-text">Submit</span>
                <span class="btn-icon"><i class="fas fa-arrow-right"></i></span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>

  </main>

  <div class="controls">
    <div class="control control-1 active-btn" data-id="home">
      <i class="fas fa-home"></i>
    </div>
    <div class="control control-2" data-id="about">
      <i class="fas fa-user"></i>
    </div>
    <div class="control control-3" data-id="portfolio">
      <i class="fas fa-briefcase"></i>
    </div>
    <div class="control control-4" data-id="contact">
      <i class="fas fa-envelope-open"></i>
    </div>
  </div>

  <div class="theme-btn">
    <i class="fas fa-adjust"></i>
  </div>

  <script src="app.js"></script>
</body>

</html>