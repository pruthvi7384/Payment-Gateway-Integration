<?php
    include 'Top.php';
    // Coding For Navigation Bar Background Color
        $nav_colaps = 'navbar-collapse-nav';
        $nav_class = '';
        if(isset($_GET['type'])){
            $type = $_GET['type'];
            if($type == 'n'){
                $nav_class = 'bg-dark';
                $nav_colaps = '';
            }
        }
?>

<!-- ------------------Navigation Bar--------------------- -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark <?php echo $nav_class ?>">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo SITE__PATH; ?>/index.php">SPF NGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse <?php echo $nav_colaps ?> navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav text-uppercase align-items-center">
                    <li class="nav-item">
                         <a class="nav-link" aria-current="page" href="<?php echo SITE__PATH; ?>/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo SITE__PATH; ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Volunteer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo SITE__PATH; ?>/pages/Donation__Form.php?type=n"><button class="btn btn-outline-success text-uppercase text-light" style="font-weight:bold">Donate Now</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- --------------X----Navigation Bar---X------------------ -->