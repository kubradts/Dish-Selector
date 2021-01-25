<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Dashboard / Admin Panel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'><link rel="stylesheet" href="css/styledashboard.css">

</head>
<body>
<!-- partial:index.partial.html -->
<body class="sidebar-is-reduced">
  <header class="l-header">
    <div class="l-header__inner clearfix">
      <div class="c-header-icon js-hamburger">
        <div class="hamburger-toggle"><span class="bar-top"></span><span class="bar-mid"></span><span class="bar-bot"></span></div>
      </div>

      <div class="c-search">

      </div>
      <div class="header-icons-group">


        <div class="c-header-icon logout"><a  href="logout?_token={{ csrf_token() }}"><i class="fa fa-power-off"></a></i></div>

      </div>
    </div>
  </header>
  <div class="l-sidebar">
    <div class="logo">
      <div class="logo__txt">D</div>
    </div>
    <div class="l-sidebar__content">
      <nav class="c-menu js-menu">
        <ul class="u-list">
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Menu Oluşturma"><a  href="dashboard">
            <div class="c-menu__item__inner"><i class="fa fa-puzzle-piece"></i>
              <div class="c-menu-item__title"><span>Menu Oluşturma</span></div>
            </div></a>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Geçmiş menüler" ><a  href="menu_list">
            <div class="c-menu__item__inner"><i class="fa fa-puzzle-piece"></i>
              <div class="c-menu-item__title"><span>Geçmiş menüler</span></div>

            </div></a>

          </li>

          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Profil"><a  href="user/profile">
            <div class="c-menu__item__inner"><i class="fa fa-cogs"></i>
              <div class="c-menu-item__title"><span>Profil</span></div>
            </div></a>
          </li>


        </ul>
      </nav>
    </div>
  </div>


<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://use.fontawesome.com/releases/v5.0.8/js/all.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script><script  src="js/scriptdashboard.js"></script>
</body>

</html>
