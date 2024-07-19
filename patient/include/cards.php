<?php
include("../admin/config.php");
?>
<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php
                $query = "SELECT * FROM tbl_appointment WHERE p_id = $_SESSION[patient_session]";
                $result = mysqli_query($conn, $query);
                $count = mysqli_num_rows($result);
                echo $count;
                ?></h3>

                <p>Appointments</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php
                $query = "SELECT * FROM tbl_test WHERE p_id = $_SESSION[patient_session]";
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