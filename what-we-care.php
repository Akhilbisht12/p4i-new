<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>P4i</title>
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.css" />
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./assets/bootstrap/css/style.css" />
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand d-flex mx-md-5 p-md-3" href="#">
            <img class="logo" src="./assets/images/logo.png" alt="" />
            <!-- <div class="h5">Partnership<br />For Impact</div> -->
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul
              class="
                navbar-nav
                fs-5
                text-font-bold
                justify-content-evenly
                h-100
              "
            >
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdownMenuLink"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Who
                </a>
                <ul
                  class="dropdown-menu"
                  aria-labelledby="navbarDropdownMenuLink"
                >
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdownMenuLink"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  What
                </a>
                <ul
                  class="dropdown-menu"
                  aria-labelledby="navbarDropdownMenuLink"
                >
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdownMenuLink"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  How
                </a>
                <ul
                  class="dropdown-menu"
                  aria-labelledby="navbarDropdownMenuLink"
                >
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdownMenuLink"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Campaigns
                </a>
                <ul
                  class="dropdown-menu"
                  aria-labelledby="navbarDropdownMenuLink"
                >
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Media</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <section class="what-care">
      <div class="section-3 d-flex flex-column justify-content-center">
        <h3 class="heading-font">Issues we care about</h3>
        <div class="container my-3">
          <div class="sec3-content my-5">
            <div
              class="
                d-flex
                flex-column
                align-items-center
                justify-content-center
              "
            >
              <img
                src="./assets/images/childrem.png"
                class="sec3imgs"
                alt=""
                srcset=""
                data-aos="fade-up"
              />
              <div class="h5 sec3imgs-text">Children</div>
            </div>
            <div class="d-flex flex-column justify-content-center">
              <img
                src="./assets/images/gender.png"
                class="sec3imgs"
                alt=""
                srcset=""
                data-aos="fade-up"
              />
              <div class="h5 sec3imgs-text">Gender</div>
            </div>
            <div class="d-flex flex-column justify-content-center">
              <img
                src="./assets/images/livelihood.png"
                class="sec3imgs"
                alt=""
                srcset=""
                data-aos="fade-up"
              />
              <div class="h5 sec3imgs-text">Livelihood</div>
            </div>
            <div class="d-flex flex-column justify-content-center">
              <img
                src="./assets/images/education.png"
                class="sec3imgs"
                alt=""
                srcset=""
                data-aos="fade-up"
              />
              <div class="h5 sec3imgs-text">Education</div>
            </div>
            <div class="d-flex flex-column justify-content-center">
              <img
                src="./assets/images/mentalhealth.png"
                class="sec3imgs"
                alt=""
                srcset=""
                data-aos="fade-up"
              />
              <div class="h5 sec3imgs-text">Mental Health</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="divider">
      <hr width="90%" style="height: 2px" />
    </div>

    <?php include 'templates/footer.php'; ?>
