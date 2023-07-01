<?php include "includes/server.php"; ?>

<!DOCTYPE html>
<html lang="en">

<?php include "includes/head.php"; ?>
<style>
#norah{
    margin-left:20px;
    margin-bottom:0px;
    font-size:15px;
}
</style>

<body>

    <!-- ======= Header ====-- -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-block align-items-center">
                <p class="text-danger mr-3" id="norah">norahHomes</p>
                <span class="mb-0">Control Hub</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div>

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li>



                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">K. Favour</span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Favour</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="logout.php">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="index.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        <section class="dashboard">
            <div class="row">
                <!-- Lightning Section -->
                <div class="col-xxl-4 col-xl-4 mb-3">

                    <div class="card info-card customers-card h-100" style=" border-radius: 35px;">
                        <div class="card-body d-flex">

                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center mt-4">
                                <i class="bi bi-lightbulb"></i>
                            </div>

                            <div class="d-flex align-items-center ml-3">
                                <h5 class="card-title ml-5 bg"> LIGHTNING</h5>
                            </div>

                        </div>
                        <div class="m-1 bg- " style="background-color: #4B515D;  border-radius: 35px;">
                            <div class="bg-primar p-2 m-3 d-flex justify-content-between">
                                <div>
                                Fan Switch
                                </div>
                                <div>
                                <label class="toggle">
                                    <input class="toggle-input" type="checkbox" />
                                    <span class="toggle-label" data-off="OFF" data-on="ON"></span>
                                    <span class="toggle-handle"></span>
                                </label>
                                </div>
                            </div>
                            <div class="bg-primar p-2 m-3 d-flex justify-content-between">
                                <div>
                                Compound Light
                                </div>
                                <div>
                                <label class="toggle">
                                    <input class="toggle-input" type="checkbox" />
                                    <span class="toggle-label" data-off="OFF" data-on="ON"></span>
                                    <span class="toggle-handle"></span>
                                </label>
                                </div>
                            </div>
                            <div class="bg-primar p-2 m-3 d-flex justify-content-between">
                                <div>
                                Balcony Light
                                </div>
                                <div>
                                <label class="toggle">
                                    <input class="toggle-input" type="checkbox" />
                                    <span class="toggle-label" data-off="OFF" data-on="ON"></span>
                                    <span class="toggle-handle"></span>
                                </label>
                                </div>
                            </div>
                            <div class="bg-primar p-2 m-3 d-flex justify-content-between">
                                <div>
                                Front Door Light
                                </div>
                                <div>
                                <label class="toggle">
                                    <input class="toggle-input" type="checkbox" />
                                    <span class="toggle-label" data-off="OFF" data-on="ON"></span>
                                    <span class="toggle-handle"></span>
                                </label>
                                </div>
                            </div>
                            <div class="bg-primar p-2 m-3 d-flex justify-content-between">
                                <div>
                                Sitting Room Light
                                </div>
                                <div>
                                <label class="toggle">
                                    <input class="toggle-input" type="checkbox" />
                                    <span class="toggle-label" data-off="OFF" data-on="ON"></span>
                                    <span class="toggle-handle"></span>
                                </label>
                                </div>
                            </div>
                            <div class="bg-primar p-2 m-3 d-flex justify-content-between">
                                <div>
                                Bedroom Light
                                </div>
                                <div>
                                <label class="toggle">
                                    <input class="toggle-input" type="checkbox" />
                                    <span class="toggle-label" data-off="OFF" data-on="ON"></span>
                                    <span class="toggle-handle"></span>
                                </label>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>

                <div class="col-xxl-4 col-xl-4 ">

                    <div class="card" style="color: #4B515D; border-radius: 35px; height:95%;">
                        <div class="card-body p-4">

                            <div class="d-flex">
                                <h6 class="flex-grow-1">Ilaro</h6>
                                <h6>15:07</h6>
                            </div>

                            <div class="d-flex flex-column text-center mt-5 mb-4">
                                <h6 class="display-4 mb-0 font-weight-bold" style="color: #1C2331;"> 13°C </h6>
                                <span class="small" style="color: #868B94">Stormy</span>
                            </div>

                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1" style="font-size: 1rem;">
                                <h6 class="display-4 mb-0 font-weight-bold" style="color: #1C2331;"> </h6>
                                </div>
                                <div class="flex-grow-1" style="font-size: 1rem;">
                                <h6 class="display-4 mb-0 font-weight-bold text-center" style="color: #1C2331;"> 13°C </h6>
                                </div>
                                <div>
                                    <img src="./assets/img/ilu1.webp"
                                        width="60px">
                                </div>
                            </div>

                            <div class="d-block mt-3">
                                <p>Daytime</p>
                                <p>Nighttime</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 mb-3">

                <div class="card info-card customers-card h-100" style=" border-radius: 35px;">
                        <div class="card-body d-flex">

                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center mt-4">
                                <i class="bi bi-lightning-charge"></i>
                            </div>

                            <div class="d-flex align-items-center ml-2 pb-5">
                                <h5 class="card-title ml-5 mb-5"> POWER CONSUMPTION</h5>
                            </div>

                        </div>
                        <div class="card-body d-block text-dark mt-5 mb-5">
                            <div class="fs-22 fw-bold mt-5">Battery Percentage:</div>
                            <div class="fs-22 fw-bold mb-5">Energy Consumed:</div>
                        </div>

                    </div>


            </div>
            </div>
        </section>


    </main>



    <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>