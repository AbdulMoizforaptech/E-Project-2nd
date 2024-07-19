<?php
include("../admin/config.php");
?>
<div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php
                $query = "SELECT * FROM tbl_appointment WHERE h_id = $_SESSION[hospital_session]";
                $result = mysqli_query($conn, $query);
                $count = mysqli_num_rows($result);
                echo $count;
                ?></h3>

                <p>Vaccination Appointments</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php
                $query = "SELECT * FROM tbl_test WHERE h_id = $_SESSION[hospital_session]";
                $result = mysqli_query($conn, $query);
                $count = mysqli_num_rows($result);
                echo $count;
                ?></h3>

                <p>Covid Test</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->