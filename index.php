
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!-- my CSS -->
      <link rel="stylesheet" href="materialize/css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <title>My Portfolio</title>

    <body>

      <!--navbar-->
  <div class="navbar-fixed">
    <nav class="blue darken-2">
      <div class="container">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Antasafariq</a>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#slider">Home</a></li>
          <li><a href="#about">About Me</a></li>
          <li><a href="#clients">Tugas</a></li>
          <li><a href="#services">Sosial Media</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#Contact">Contact Us</a></li>
        </ul>
      </div>
      </div>
    </nav>
  </div>


    <!--sidenav-->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="#slider">Home</a></li>
    <li><a href="#about">About Me</a></li>
    <li><a href="#clients">Tugas</a></li>
    <li><a href="#services">Sosial Media</a></li>
    <li><a href="#portfolio">Portfolio</a></li>
    <li><a href="#Contact">Contact Us</a></li>
  </ul>


    <!--slider-->
  <div id="slider" class="slider scrollspy">
    <ul class="slides">
      <li>
        <img src="img/slider/1.png">
        <div class="caption left-align">
          <h3>Wellcome to my Blog!</h3>
          <h5 class="light grey-text text-lighten-3">This Blog contains is all about me.</h5>
        </div>
      </li>
     <li>
        <img src="img/slider/4.png">
        <div class="caption right-align">
          <h3>Selamat datang di Blog saya!</h3>
          <h5 class="light grey-text text-lighten-3">Blog ini berisi tentang diri saya.</h5>
        </div>
      </li>
     <li>
        <img src="img/slider/3.png">
        <div class="caption center-align">
          <h3>Willkommen in meinem Blog!</h3>
          <h5 class="light grey-text text-lighten-3">Dieser Blog handelt von mir.</h5>
        </div>
      </li>
    </ul>
  </div>

  <!--About Me-->
  <section id="about" class="about scrollspy">
    <div class="container">
      <div class="row">
        <h3 class="center ligh grey-text text-darken-3">About Me</h3>
        <div class="col m6 light">
          <h5>Tentang Diri Saya</h5>
          <p>Nama saya Antasafariq Fikriansyah, sering dipanggil Ariq. Saya berumur 18 tahun menuju 19 tahun februari nanti. Saya mempunyai hobby ber-olahraga, motoran, jalan-jalan dan makan yang pasti. Saya lahir di Semarang, tepatnya tanggal 26 Februari 2001. Saya sangat suka ber-motoran bersama teman-teman, kenapa saya bisa sangat suka, mungkin karna enaknya menikmati jalanan dan angin angin dengan mengendarai motor, ditambah bersama seseorang. Saya besar di Bandung walaupun lahir di Samarang, karna orang tua yg berpindah pindah dinasnya. Kenapa saya tidak terlalu menyukai game, karna saya orang yang mudah bosan jika bermain game.</p>
        </div>
        <div class="col m6 light">
          <p>RIDING</p>
          <div class="progress">
              <div class="determinate green" style="width: 90%">
          </div>
          </div>

          <p>EATING
          <div class="progress">
              <div class="determinate green" style="width: 85%">
          </div>
          </div>

          <p>SPORT</p>
          <div class="progress">
              <div class="determinate orange" style="width: 65%">
          </div>
          </div>
         
          <p>GAMING</p>
          <div class="progress">
              <div class="determinate red" style="width: 45%">
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Clients-->
  <div id="clients" class="parallax-container scrollspy">
      <div class="parallax">
        <img src="img/slider/2.png">
      </div>
      <div class="container clients">
        <h3 class="center light black-text">Tugas Semester 2</h3>
        <div class="row">
          <div class="col m4 center">
            <h4>Kelas</h4>
            <hr>
            <p><a href="kuliah/pertemuan9/">Pertemuan 9</a></p>
            <p><a href="kuliah/pertemuan10/">Pertemuan 10</a></p>
            <p><a href="kuliah/pertemuan11/">Pertemuan 11</a></p>
            <p><a href="kuliah/pertemuan12/">Pertemuan 12</a></p>
            <p><a href="kuliah/pertemuan13/">Pertemuan 13</a></p>
          </div>
          <div class="col m4 center">
          </div>
          <div class="col m4 center">
            <h4>Praktikum</h4>
            <hr>
            <p><a href="praktikum/P5_SENIN13_193040030/">Pertemuan 5</a></p>
            <p><a href="praktikum/P6_SENIN13_193040030/">Pertemuan 6</a></p>
            <p><a href="praktikum/P7_SENIN13_193040030/">Pertemuan 7</a></p>
            <p><a href="praktikum/TUBES/">Tugas Besar</a></p>
          </div>
        </div>
      </div>
    </div>


      <!--service-->
      <section class="services grey lighten-3">
        <div id="services" class="container scrollspy">
          <div class="row">
            <h3 class="light center grey-text text-darken-3">Sosial Media</h3>
            <div class="col m4 s12">
              <div class="card-panel center">
                <i class="material-icons">chat</i>
                <h5>LINE</h5>
                <p>ID :</p>
                <p>ariq0811</p>
              </div>
            </div>
            <div class="col m4 s12">
              <div class="card-panel center">
                <i class="material-icons">photo_camera</i>
                <h5>Instagram</h5>
                <p>Username :</p>
                <p>@antasafarik</p>
              </div>
            </div>
            <div class="col m4 s12">
              <div class="card-panel center">
                <i class="material-icons">public</i>
                <h5>Twitter</h5>
                <p>Username :</p>
                <p>@Antasafarik</p>
              </div>
            </div>
             <div class="col m6 s12">
              <div class="card-panel center">
                <i class="material-icons">play_arrow</i>
                <h5>Youtube</h5>
                <p>Youtube :</p>
                <p>ARQMotoV HD</p>
              </div>
            </div>
            <div class="col m6 s12">
              <div class="card-panel center">
                <i class="material-icons">email</i>
                <h5>E-mail</h5>
                <p>E-mail :</p>
                <p>antasafrik@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--portfolio-->
      <section id="portfolio" class="portfolio scrollspy">
        <div class="container">
          <h3 class="light center grey-text text-darken-3">Portfolio</h3>
          <div class="row">
            <div class="col m3 s12">
              <img src="img/portfolio/7.jpg" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
               <img src="img/portfolio/8.jpg" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="img/portfolio/9.jpg" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="img/portfolio/9,1.jpg" class="responsive-img materialboxed">
            </div>
          </div>
          <div class="row">
            <div class="col m3 s12">
              <img src="img/portfolio/10.jpg" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
               <img src="img/portfolio/11.jpg" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="img/portfolio/12.jpg" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="img/portfolio/13.jpg" class="responsive-img materialboxed">
            </div>
          </div>
        </div>
      </section>


      <!--Contact Ue-->
      <section id="Contact" class="Contact grey lighten-3 scrollspy">
        <div class="container">
          <h3 class="light grey-text text-darken-3 center">Contact Us</h3>
          <div class="row">
            <div class="col m5 s12">
              <div class="card-panel blue darken-2 center white-text">
                <i class="material-icons">mail_outline</i>
                <h5>Contact</h5>
                <p>antasafrik@gmail.com</p>
                <p>or</p>
                <p>087786380558</p>
              </div>
              <ul class="collection with-header">
                <li class="collection-header"><h5>My Location</h5></li>
                <li class="collection-item">Simple Blog By Antasafariq</li>
                <li class="collection-item">Jl. Puma No. 03 Sukaraja II, Bandung</li>
                <li class="collection-item">West Java, Indonesia</li>
              </ul>
            </div>

            <div class="col m7 s12">
              <form>
                <div class="card-panel">
                  <h5>Please fill out this form</h5>
                  <div class="input-field">
                    <input type="text" name="name" id="name" required class="validate">
                    <label for="name">Name</label>
                  </div>
                  <div class="input-field">
                    <input type="email" name="email" id="email" class="validate">
                    <label for="email">E-mail</label>
                  </div>
                  <div class="input-field">
                    <input type="text" name="phone" id="phone" class="validate">
                    <label for="phone">Phone Number</label>
                  </div>
                  <div class="input-field">
                    <textarea id="textarea1" class="materialize-textarea" class="validate"></textarea>
                    <label for="textarea1">Massage</label>
                  </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                      <i class="material-icons right">send</i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>


      <!--footer-->
      <footer class="blue darken-2 center">
        <p class="flow-text">Simple Web. Copyright &copy; By Antasafariq 2019.</p>
      </footer>














      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
      <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
          indicators: false,
          height: 500,
          transition: 600,
          interval: 3000
        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
          scrolloffset: 35
        });

      </script>
    </body>
  </html>