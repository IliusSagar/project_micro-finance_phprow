<?php 

include_once 'connectdb.php';
session_start();

if($_SESSION['useremail']==""){

  header('location:index.php');

}



include_once 'header_kormocharifour.php';


?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      কর্মচারী ৪ | ড্যাশবোর্ড 
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

        <div class="box-body">


            <div class="row ">

            <marquee behavior="" direction=""><h1>স্বাগতম কর্মচারী ৪</h1></marquee>
                
                

            </div>
        </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php 

 include_once 'footer.php';

 ?>