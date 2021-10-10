<?php
    include 'components/Navigation__Bar.php';
?>
    <!-- ---------------Home Page--------------- -->
      <div class="container-fluid d-flex justify-content-center align-items-center" id="home">
          <div class="row text-light">
              <div class="col-xl-8" style="font-weight:bold">
                    <p style="font-weight:bold">small help can make change.</p>
                    <h1 class="mb-3 text-capitalize" style="font-weight:bold">We can't help everyone , but everyone can help someone !</h1>
                    <h4 class="mb-3" style="font-weight:bold">your small constribution means lot.</h4>
                    <a class="mt-3" class="nav-link" href="<?php echo SITE__PATH; ?>/pages/Donation__Form.php?type=n"><button class="mt-3 btn btn-outline-success text-uppercase text-light" style="font-weight:bold">Donate Now</button></a>
              </div>
          </div>
      </div>
    <!-- ------------X---Home Page---X------------ -->
<?php
    include 'components/Footer.php';
?>