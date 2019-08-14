<!DOCTYPE html>
<html lang="en">
<head>
  <title>JAL Virtual | Powered by iCrew&trade; </title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/font-icons.css" />
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
  <link rel="stylesheet" href="css/style.css" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="https://www.jal.com/favicon.ico">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

</head>

<body>

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      "Loading..."
    </div>
  </div>

  <main class="main-wrapper">

    <!-- Navigation -->
    <header class="nav">
      <div class="nav__holder nav--sticky">
        <div class="container-fluid container-semi-fluid nav__container">
          <div class="flex-parent">

            <div class="nav__header">
              <!-- Logo -->
              <a href="index.php" class="logo-container flex-child">
                <img src="http://jalvirtual.com/en/lib/skins/jal2014/images/logo.png"  alt="JAL_LOGO" style="width: auto; height: 40px;">
              </a>

              <!-- Mobile toggle -->
              <button type="button" class="nav__icon-toggle" id="nav__icon-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="nav__icon-toggle-bar"></span>
                <span class="nav__icon-toggle-bar"></span>
                <span class="nav__icon-toggle-bar"></span>
              </button>
            </div>

            <!-- Navbar -->
            <nav id="navbar-collapse" class="nav__wrap collapse navbar-collapse">
              <ul class="nav__menu">
                <li class="active">
                  <a href="index.php">Home</a>
                </li>
                <li class="nav__menu">
                    <li><a href="about.html">About</a></li>
                    
                    <ul class="nav__menu">
                <li class="active">
                  <li><a href="contact.html">Contact</a></li>
                  </ul>
                </li>
                <ul class="nav__menu">
                <li class="active">
                  <li><a href="staff.php">Staff</a></li>
                  </ul>
                </li>
              </ul> <!-- end menu -->
            </nav> <!-- end nav-wrap -->

            <div class="nav__btn-holder nav--align-right">
              <a href="<?php echo SITE_URL; ?>/index.php/login" class="btn nav__btn">
                <span class="nav__btn-text">Crew Area</span>
              </a>
            </div>

          </div> <!-- end flex-parent -->
        </div> <!-- end container -->

      </div>
    </header> <!-- end navigation -->
