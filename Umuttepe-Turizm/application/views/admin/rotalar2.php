<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Umuttepe Turizm - Rotalar</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../assets/js/config.js"></script>

  <style>
    .rotaduzenlebtn {
      width: 25%;
      border: 1px solid steelblue;
      border-radius: 10px;
      background-color: steelblue;
      padding: 10px;
      margin-top: 10px;
      color: aliceblue;
    }

    .rotaeklebtn {
      width: 25%;
      border: 1px solid steelblue;
      border-radius: 10px;
      background-color: steelblue;
      padding: 10px;
      margin-top: 10px;
      color: aliceblue;
    }

    .rotaolusturbtn {
      width: 25%;
      border: 1px solid steelblue;
      border-radius: 10px;
      background-color: steelblue;
      padding: 10px;
      margin-top: 10px;
      color: aliceblue;
    }

    
    

    .rotaduzenleiptalbtn {
      width: 25%;
      border: 1px solid steelblue;
      border-radius: 10px;
      background-color: darkred;
      padding: 10px;
      margin-top: 10px;
      color: aliceblue;
    }
    .rotaekleiptalbtn {
      width: 25%;
      border: 1px solid steelblue;
      border-radius: 10px;
      background-color: darkred;
      padding: 10px;
      margin-top: 10px;
      color: aliceblue;
    }

    

    #rotaeklediv {
      display: none;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    

    #rotaduzenlediv {
      display: none;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .show-animation {

      animation: fadeInDown 0.5s ease;
    }

    @keyframes fadeInDown {
      0% {
        opacity: 0;
        transform: translateY(-20px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>


</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <span class="app-brand-logo demo">
            <img src="../assets/img/elements/umuttepelogo6.png" style="width: 32%; height: 32%;">
          </span>
          <a href="index.html" class="app-brand-link">
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item ">
            <a href="admin" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Anasayfa</div>
            </a>
          </li>
          <li class="menu-item ">
            <a href="admin/kullanicilar" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Kullanıcılar</div>
            </a>
          </li>
          <li class="menu-item active">
            <a href="admin/rotalar" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Rotalar</div>
            </a>
          </li>
          <li class="menu-item ">
            <a href="admin/sehirler" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Şehirler</div>
            </a>
          </li>
          <li class="menu-item ">
            <a href="admin/tarifeler" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Tarifeler</div>
            </a>
          </li>

          <!-- Layouts -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div data-i18n="Layouts">Layouts</div>
            </a>

            <ul class="menu-sub">
              <li class="menu-item">
                <a href="layouts-without-menu.html" class="menu-link">
                  <div data-i18n="Without menu">Without menu</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="layouts-without-navbar.html" class="menu-link">
                  <div data-i18n="Without navbar">Without navbar</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="layouts-container.html" class="menu-link">
                  <div data-i18n="Container">Container</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="layouts-fluid.html" class="menu-link">
                  <div data-i18n="Fluid">Fluid</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="layouts-blank.html" class="menu-link">
                  <div data-i18n="Blank">Blank</div>
                </a>
              </li>
            </ul>
          </li>

          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div data-i18n="Account Settings">Account Settings</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="pages-account-settings-account.html" class="menu-link">
                  <div data-i18n="Account">Account</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="pages-account-settings-notifications.html" class="menu-link">
                  <div data-i18n="Notifications">Notifications</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="pages-account-settings-connections.html" class="menu-link">
                  <div data-i18n="Connections">Connections</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
              <div data-i18n="Authentications">Authentications</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="auth-login-basic.html" class="menu-link" target="_blank">
                  <div data-i18n="Basic">Login</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="auth-register-basic.html" class="menu-link" target="_blank">
                  <div data-i18n="Basic">Register</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                  <div data-i18n="Basic">Forgot Password</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-cube-alt"></i>
              <div data-i18n="Misc">Misc</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="pages-misc-error.html" class="menu-link">
                  <div data-i18n="Error">Error</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="pages-misc-under-maintenance.html" class="menu-link">
                  <div data-i18n="Under Maintenance">Under Maintenance</div>
                </a>
              </li>
            </ul>
          </li>
          <!-- Components -->
          <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
          <!-- Cards -->
          <li class="menu-item">
            <a href="cards-basic.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-collection"></i>
              <div data-i18n="Basic">Cards</div>
            </a>
          </li>
          <!-- User interface -->
          <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-box"></i>
              <div data-i18n="User interface">User interface</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="ui-accordion.html" class="menu-link">
                  <div data-i18n="Accordion">Accordion</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-alerts.html" class="menu-link">
                  <div data-i18n="Alerts">Alerts</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-badges.html" class="menu-link">
                  <div data-i18n="Badges">Badges</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-buttons.html" class="menu-link">
                  <div data-i18n="Buttons">Buttons</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-carousel.html" class="menu-link">
                  <div data-i18n="Carousel">Carousel</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-collapse.html" class="menu-link">
                  <div data-i18n="Collapse">Collapse</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-dropdowns.html" class="menu-link">
                  <div data-i18n="Dropdowns">Dropdowns</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-footer.html" class="menu-link">
                  <div data-i18n="Footer">Footer</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-list-groups.html" class="menu-link">
                  <div data-i18n="List Groups">List groups</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-modals.html" class="menu-link">
                  <div data-i18n="Modals">Modals</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-navbar.html" class="menu-link">
                  <div data-i18n="Navbar">Navbar</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-offcanvas.html" class="menu-link">
                  <div data-i18n="Offcanvas">Offcanvas</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                  <div data-i18n="Pagination &amp; Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-progress.html" class="menu-link">
                  <div data-i18n="Progress">Progress</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-spinners.html" class="menu-link">
                  <div data-i18n="Spinners">Spinners</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-tabs-pills.html" class="menu-link">
                  <div data-i18n="Tabs &amp; Pills">Tabs &amp; Pills</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-toasts.html" class="menu-link">
                  <div data-i18n="Toasts">Toasts</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-tooltips-popovers.html" class="menu-link">
                  <div data-i18n="Tooltips & Popovers">Tooltips &amp; popovers</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-typography.html" class="menu-link">
                  <div data-i18n="Typography">Typography</div>
                </a>
              </li>
            </ul>
          </li>

          <!-- Extended components -->
          <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-copy"></i>
              <div data-i18n="Extended UI">Extended UI</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                  <div data-i18n="Perfect Scrollbar">Perfect scrollbar</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="extended-ui-text-divider.html" class="menu-link">
                  <div data-i18n="Text Divider">Text Divider</div>
                </a>
              </li>
            </ul>
          </li>

          <li class="menu-item">
            <a href="icons-boxicons.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-crown"></i>
              <div data-i18n="Boxicons">Boxicons</div>
            </a>
          </li>

          <!-- Forms & Tables -->
          <li class="menu-header small text-uppercase"><span class="menu-header-text">Forms &amp; Tables</span></li>
          <!-- Forms -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-detail"></i>
              <div data-i18n="Form Elements">Form Elements</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="forms-basic-inputs.html" class="menu-link">
                  <div data-i18n="Basic Inputs">Basic Inputs</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="forms-input-groups.html" class="menu-link">
                  <div data-i18n="Input groups">Input groups</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-detail"></i>
              <div data-i18n="Form Layouts">Form Layouts</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="form-layouts-vertical.html" class="menu-link">
                  <div data-i18n="Vertical Form">Vertical Form</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="form-layouts-horizontal.html" class="menu-link">
                  <div data-i18n="Horizontal Form">Horizontal Form</div>
                </a>
              </li>
            </ul>
          </li>
          <!-- Tables -->
          <li class="menu-item">
            <a href="tables-basic.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-table"></i>
              <div data-i18n="Tables">Tables</div>
            </a>
          </li>
          <!-- Misc -->
          <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
          <li class="menu-item">
            <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank"
              class="menu-link">
              <i class="menu-icon tf-icons bx bx-support"></i>
              <div data-i18n="Support">Support</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank"
              class="menu-link">
              <i class="menu-icon tf-icons bx bx-file"></i>
              <div data-i18n="Documentation">Documentation</div>
            </a>
          </li>
        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                  aria-label="Search..." />
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">



              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" alt
                      class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" alt
                              class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">Muhammet</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">Profilim</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-cog me-2"></i>
                      <span class="align-middle">Ayarlar</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <span class="d-flex align-items-center align-middle">
                        <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                        <span class="flex-grow-1 align-middle">Bakiye</span>
                        <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="auth-login-basic.html">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">

            <div id="rotaduzenlediv">
              <div class="card mb-4">
                <h5 class="card-header">Rota Düzenle</h5>
                <div class="card-body">
                  <form >
                  <div class="row">
                    <div class="col-lg-6 col-sm-12">
                      <label for="exampleFormControlSelect1" class="form-label">Kalkış Yeri</label>
                      <select class="form-select" id="kalkisyeriduzenle" aria-label="Default select example">
                        
                        <option value="1">İstanbul</option>
                        <option value="2">Ankara</option>
                        <option value="3">Kocaeli</option>
                      </select>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                      <label for="exampleFormControlSelect1" class="form-label">Varış Yeri</label>
                      <select class="form-select" id="varisyeriduzenle" aria-label="Default select example">
                       
                        <option value="1">İstanbul</option>
                        <option value="2">Ankara</option>
                        <option value="3">Kocaeli</option>
                      </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6 col-sm-12">
                      <label for="html5-time-input" class="col-form-label">Kalkış Saati</label>

                      <input class="form-control" type="time" value="12:30:00" id="kalkissaatiduzenle" />

                    </div>

                    <div class="col-lg-6 col-sm-12">
                      <label for="html5-time-input" class="col-form-label">Varış Saati</label>

                      <input class="form-control" type="time" value="12:30:00" id="varissaatiduzenle" />

                    </div>

                  </div>

                  <div class="row mt-1">
                    <div class="col-lg-6 col-sm-12">
                      <label for="defaultFormControlInput" class=" form-label">Bilet Ücreti</label>
                      <input type="text" class="form-control" id="biletucretiduzenle" placeholder="765 TL"
                        aria-describedby="defaultFormControlHelp" />

                    </div>
                    <div class="col-lg-6 col-sm-12">
                      <label for="defaultFormControlInput" class=" form-label">Otobüs Plakası</label>
                      <input type="text" class="form-control" id="otobusplakasiduzenle" placeholder="06NZR294"
                        aria-describedby="defaultFormControlHelp" />
                    </div>
                  </div>

                  <input type="button" value="Rotayı Güncelle" class="rotaduzenlebtn">
                  <input type="button" value="İptal" class="rotaduzenleiptalbtn">
                  </form>
                </div>
              </div>
            </div> 

            <div id="rotaeklediv">
              <div class="card mb-4">
                <h5 class="card-header">Sefer Ekle</h5>
                <div class="card-body">

                <form>
                  <div class="row">
                    <div class="col-lg-6 col-sm-12">
                      <label for="exampleFormControlSelect1" class="form-label">Kalkış Yeri</label>
                      <select class="form-select" id="kalkisyeriekle" aria-label="Default select example">
                       <option value="0" selected>Seçiniz*</option>
                        <option value="1">İstanbul</option>
                        <option value="2">Ankara</option>
                        <option value="3">Kocaeli</option>
                      </select>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                      <label for="exampleFormControlSelect1" class="form-label">Varış Yeri</label>
                      <select class="form-select" id="varisyeriekle" aria-label="Default select example">
                      <option value="0" selected>Seçiniz*</option>
                        <option value="1">İstanbul</option>
                        <option value="2">Ankara</option>
                        <option value="3">Kocaeli</option>
                      </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6 col-sm-12">
                      <label for="html5-time-input" class="col-form-label">Kalkış Saati</label>

                      <input class="form-control" type="time" value="00:00:00" id="kalkissaatiekle" />

                    </div>

                    <div class="col-lg-6 col-sm-12">
                      <label for="html5-time-input" class="col-form-label">Varış Saati</label>

                      <input class="form-control" type="time" value="00:00:00" id="varissaatiekle" />

                    </div>

                  </div>

                  <div class="row mt-1">
                    <div class="col-lg-6 col-sm-12">
                      <label for="defaultFormControlInput" class=" form-label">Bilet Ücreti</label>
                      <input type="text" class="form-control" id="biletucretiekle" placeholder="765 TL"
                        aria-describedby="defaultFormControlHelp" />

                    </div>
                    <div class="col-lg-6 col-sm-12">
                      <label for="defaultFormControlInput" class=" form-label">Otobüs Plakası</label>
                      <input type="text" class="form-control" id="otobusplakasiekle" placeholder="06NZR294"
                        aria-describedby="defaultFormControlHelp" />
                    </div>
                  </div>
                  <input type="button" value="Seferi Oluştur" class="rotaolusturbtn">
                  <input type="button" value="İptal" class="rotaekleiptalbtn">
                  </form>

                </div>
              </div>
            </div> 

            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Rotalar</h4>
            <div class="card">
              <h5 class="card-header">Rota Tablosu</h5>
              <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Kalkış Yeri</th>
                      <th>Varış Yeri</th>
                      <th>Kalkış Saati</th>
                      <th>Varış Saati</th>
                      <th>Bilet Ücreti</th>
                      <th>Otobüs Plakası</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <tr>
                      <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong
                          id="kalkisyeritablo">İstanbul</strong></td>
                      <td id="varisyeritablo">Kocaeli</td>
                      <td id="kalkissaatitablo">07:00:00</td>
                      <td id="varisaatitablo">12:00:00</td>
                      <td id="biletucretitablo">650 TL</td>
                      <td id="plakatablo">06NZR294</td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a id="duzenlebtn" class="dropdown-item" href="javascript:void(0);"><i
                                class="bx bx-edit-alt me-1"></i> Düzenle</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Sil</a>
                          </div>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong
                          id="kalkisyeritablo">İstanbul</strong></td>
                      <td id="varisyeritablo">Ankara</td>
                      <td id="kalkissaatitablo">07:00:00</td>
                      <td id="varissaatitablo">12:00:00</td>
                      <td id="biletucretitablo">650 TL</td>
                      <td id="plakatablo">06NZR294</td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a id="duzenlebtn" class="dropdown-item" href="javascript:void(0);"><i
                                class="bx bx-edit-alt me-1"></i> Düzenle</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Sil</a>
                          </div>
                        </div>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
            <input type="button" value="Sefer Ekle" class="rotaeklebtn">
          </div>
          <!-- / Content -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->

      </div>
      <!-- / Layout page -->
    </div>



  </div>
  <!-- / Layout wrapper -->



  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="../assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="../assets/js/main2.js"></script>

  <!-- Page JS -->
  <script src="../assets/js/dashboards-analytics.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <script src="../assets/js/rotalar.js"></script>
</body>

</html>