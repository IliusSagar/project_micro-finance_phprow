<?php 

include_once 'connectdb.php';
session_start();

if($_SESSION['useremail']=="" OR $_SESSION['role']==""){

  header('location:index.php');

}

include_once 'header.php';



if(isset($_POST['btnsonchoyreg'])){

$kormionesonchoyreghisab=$_POST['kormionesonchoyreghisab_name'];
$kormionesonchoyregno=$_POST['kormionesonchoyregno_name'];
$kormionesonchoyreggrahoknam=$_POST['kormionesonchoyreggrahoknam_name'];
$kormionesonchoyreggrahokpitarnam=$_POST['kormionesonchoyreggrahokpitarnam_name'];
$kormionesonchoyreggrahokmatarnam=$_POST['kormionesonchoyreggrahokmatarnam_name'];
$kormionesonchoyreggrahoksamirnam=$_POST['kormionesonchoyreggrahoksamirnam_name'];
$kormionesonchoyreggrahokmobile=$_POST['kormionesonchoyreggrahokmobile_name'];
$kormionesonchoyreggrahoknid=$_POST['kormionesonchoyreggrahoknid_name'];
$kormionesonchoyreggrahokaddress=$_POST['kormionesonchoyreggrahokaddress_name'];
$kormioneregdate=$_POST['kormioneregdate_name'];
$kormionesonchoyregnomineernam=$_POST['kormionesonchoyregnomineernam_name'];
$kormionesonchoyregnomineerpitarnam=$_POST['kormionesonchoyregnomineerpitarnam_name'];
$kormionesonchoyregnomineermatarnam=$_POST['kormionesonchoyregnomineermatarnam_name'];
$kormionesonchoyregnomineersamirnam=$_POST['kormionesonchoyregnomineersamirnam_name'];
$kormionesonchoyregnomineermobile=$_POST['kormionesonchoyregnomineermobile_name'];
$kormionesonchoyregnomineernid=$_POST['kormionesonchoyregnomineernid_name'];
$kormionesonchoyregnomineeraddress=$_POST['kormionesonchoyregnomineeraddress_name'];
$kormionesonchoyregamount=$_POST['kormionesonchoyregamount_name'];


    $f_name= $_FILES['myfile']['name'];
    $f_tmp = $_FILES['myfile']['tmp_name'];
    

    $f_size = $_FILES['myfile']['size'];
    $f_extension = explode('.',$f_name);
    $f_extension= strtolower(end($f_extension));

    $f_newfile = uniqid().'.'.$f_extension;
    $store = "productimages/".$f_newfile;

    if($f_extension=='jpg' || $f_extension=='jpeg' || $f_extension=='png' || $f_extension=='gif'){

        if($f_size>=1000000){

            //echo 'Max file should be 1MB';

            $error = '<script type="text/javascript">
            jQuery(function validation(){
    
            swal({
                title: "Error!",
                text: "only jpg, jpeg, png and gif can be upload!",
                icon: "warning",
                button: "Ok",
            });
    
            });
            </script>';

            echo $error;

        }else{

            if(move_uploaded_file($f_tmp,$store)){

                $productimage=$f_newfile;

            }

        }

    }else{

        //echo 'only jpg png and gif can be upload';

        $error = '<script type="text/javascript">
            jQuery(function validation(){
    
            swal({
                title: "Warning!",
                text: "only jpg, jpeg, png and gif can be upload!",
                icon: "error",
                button: "Ok",
            });
    
            });
            </script>';

            echo $error;

    }

    if(!isset($error)){

        $insert=$pdo->prepare("insert into tbl_kormione_sonchoy_registration(kormionesonchoyreghisab,kormionesonchoyregno,kormionesonchoyreggrahoknam,kormionesonchoyreggrahokpitarnam,kormionesonchoyreggrahokmatarnam,kormionesonchoyreggrahoksamirnam,kormionesonchoyreggrahokmobile,kormionesonchoyreggrahoknid,kormionesonchoyreggrahokaddress,kormioneregdate,kormionesonchoyregnomineernam,kormionesonchoyregnomineerpitarnam,kormionesonchoyregnomineermatarnam,kormionesonchoyregnomineersamirnam,kormionesonchoyregnomineermobile,kormionesonchoyregnomineernid,kormionesonchoyregnomineeraddress,kormionesonchoyregamount,kormionesonchoyregimag) values(:kormionesonchoyreghisab,:kormionesonchoyregno,:kormionesonchoyreggrahoknam,:kormionesonchoyreggrahokpitarnam,:kormionesonchoyreggrahokmatarnam,:kormionesonchoyreggrahoksamirnam,:kormionesonchoyreggrahokmobile,:kormionesonchoyreggrahoknid,:kormionesonchoyreggrahokaddress,:kormioneregdate,:kormionesonchoyregnomineernam,:kormionesonchoyregnomineerpitarnam,:kormionesonchoyregnomineermatarnam,:kormionesonchoyregnomineersamirnam,:kormionesonchoyregnomineermobile,:kormionesonchoyregnomineernid,:kormionesonchoyregnomineeraddress,:kormionesonchoyregamount,:kormionesonchoyregimag)");

        $insert->bindParam(':kormionesonchoyreghisab',$kormionesonchoyreghisab);
        $insert->bindParam(':kormionesonchoyregno',$kormionesonchoyregno);
        $insert->bindParam(':kormionesonchoyreggrahoknam',$kormionesonchoyreggrahoknam);
        $insert->bindParam(':kormionesonchoyreggrahokpitarnam',$kormionesonchoyreggrahokpitarnam);
        $insert->bindParam(':kormionesonchoyreggrahokmatarnam',$kormionesonchoyreggrahokmatarnam);
        $insert->bindParam(':kormionesonchoyreggrahoksamirnam',$kormionesonchoyreggrahoksamirnam);
        $insert->bindParam(':kormionesonchoyreggrahokmobile',$kormionesonchoyreggrahokmobile);
        $insert->bindParam(':kormionesonchoyreggrahoknid',$kormionesonchoyreggrahoknid);
        $insert->bindParam(':kormionesonchoyreggrahokaddress',$kormionesonchoyreggrahokaddress);
        $insert->bindParam(':kormioneregdate',$kormioneregdate);
        $insert->bindParam(':kormionesonchoyregnomineernam',$kormionesonchoyregnomineernam);
        $insert->bindParam(':kormionesonchoyregnomineerpitarnam',$kormionesonchoyregnomineerpitarnam);
        $insert->bindParam(':kormionesonchoyregnomineermatarnam',$kormionesonchoyregnomineermatarnam);
        $insert->bindParam(':kormionesonchoyregnomineersamirnam',$kormionesonchoyregnomineersamirnam);
        $insert->bindParam(':kormionesonchoyregnomineermobile',$kormionesonchoyregnomineermobile);
        $insert->bindParam(':kormionesonchoyregnomineernid',$kormionesonchoyregnomineernid);
        $insert->bindParam(':kormionesonchoyregnomineeraddress',$kormionesonchoyregnomineeraddress);
        $insert->bindParam(':kormionesonchoyregamount',$kormionesonchoyregamount);
        $insert->bindParam(':kormionesonchoyregimag',$productimage);
        
        
        if($insert->execute()){

            //echo 'Registration Successfull';

        $error = '<script type="text/javascript">
            jQuery(function validation(){
    
            swal({
                title: "Registration Successfull!",
                text: "Registration Added!",
                icon: "success",
                button: "Ok",
            });
    
            });
            </script>';

            echo $error;

        }else{

            //echo 'Add registration fail';

        $error = '<script type="text/javascript">
            jQuery(function validation(){
    
            swal({
                title: "Error!",
                text: "Add registration fail!",
                icon: "error",
                button: "Ok",
            });
    
            });
            </script>';

            echo $error;


        }


    }



}



?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      কর্মচারী ১ | সঞ্চয় রেজিস্ট্রেশন ফর্ম 
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

        <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title"><a href="kormocharione_sonchyreg_report.php" class="btn btn-success" role="button">সঞ্চয় রেজিস্ট্রেশন রিপোর্ট</a></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form action="" method="post" name="kormione_form_name" enctype="multipart/form-data">
            
              <div class="box-body">

                

                    <div class="col-md-6">

                <div class="form-group">
                  <label>সঞ্চয় গ্রাহকের হিসাব</label>
                  <select class="form-control" name="kormionesonchoyreghisab_name" required>
                    <option>দৈনিক হিসাব</option>
                    <option>সাপ্তাহিক হিসাব</option>
                    <option>মাসিক হিসাব</option>
                  </select>
                </div>

                <div class="form-group">
                  <label >গ্রাহকের রেজিস্ট্রেশন নম্বর</label>
                  <input type="number" min="1" step="1" class="form-control" name="kormionesonchoyregno_name" placeholder="Enter..." required>
                </div>

                <div class="form-group">
                  <label >গ্রাহকের নাম</label>
                  <input type="text" class="form-control" name="kormionesonchoyreggrahoknam_name" placeholder="Enter..." required>
                </div>

                <div class="form-group">
                  <label >পিতার নাম</label>
                  <input type="text" class="form-control" name="kormionesonchoyreggrahokpitarnam_name" placeholder="Enter..." required>
                </div>

                <div class="form-group">
                  <label >মাতার নাম</label>
                  <input type="text" class="form-control" name="kormionesonchoyreggrahokmatarnam_name" placeholder="Enter..." required>
                </div>

                <div class="form-group">
                  <label >স্বামী/স্ত্রীর নাম</label>
                  <input type="text" class="form-control" name="kormionesonchoyreggrahoksamirnam_name" placeholder="Enter..." required>
                </div>

                <div class="form-group">
                  <label >মোবাইল নং</label>
                  <input type="number" min="1" step="1" class="form-control" name="kormionesonchoyreggrahokmobile_name" placeholder="Enter..." required>
                </div>

                <div class="form-group">
                  <label >জাতীয় পরিচয়পত্র / জন্ম নিবন্ধন নং</label>
                  <input type="number" min="1" step="1" class="form-control" name="kormionesonchoyreggrahoknid_name" placeholder="Enter..." required>
                </div>

                <div class="form-group">
                  <label >ঠিকানা</label>
                  <input type="text" class="form-control" name="kormionesonchoyreggrahokaddress_name" placeholder="Enter..." required>
                </div><hr>

                <!-- <div class="form-group">
                  <label >Name</label>
                  <input type="text" class="form-control" name="txtname" placeholder="Enter..." required>
                </div>

                <div class="form-group">
                  <label >NUMBER</label>
                  <input type="number" class="form-control" name="txtemail" placeholder="Enter..." required>
                </div>
            
                <div class="form-group">
                  <label>Role</label>
                  <select class="form-control" name="txtselect_option" required>
                    <option value="" disabled selected>Select role</option>         
                    <option>User</option>
                    <option>Admin</option>
                  </select>
                </div> -->

                    </div>

                    <div class="col-md-6">

                    <div class="form-group">
                        <label>Date:</label>

                        <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar" style="color: red;"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepicker" name="kormioneregdate_name" value="<?php echo date("Y-m-d"); ?>" data-date-format="yyyy-mm-dd" >
                        </div>
                        <!-- /.input group -->
                    </div>

                    <div class="form-group">
                        <label >নমিনীর নাম</label>
                        <input type="text" class="form-control" name="kormionesonchoyregnomineernam_name" placeholder="Enter..." required>
                    </div>

                    <div class="form-group">
                        <label >নমিনীর পিতার নাম</label>
                        <input type="text" class="form-control" name="kormionesonchoyregnomineerpitarnam_name" placeholder="Enter..." required>
                    </div>

                    <div class="form-group">
                        <label >নমিনীর মাতার নাম</label>
                        <input type="text" class="form-control" name="kormionesonchoyregnomineermatarnam_name" placeholder="Enter..." required>
                    </div>

                    <div class="form-group">
                        <label >নমিনীর স্বামী/স্ত্রীর নাম</label>
                        <input type="text" class="form-control" name="kormionesonchoyregnomineersamirnam_name" placeholder="Enter..." required>
                    </div>

                    <div class="form-group">
                        <label >নমিনীর মোবাইল নং</label>
                        <input type="number" min="1" step="1" class="form-control" name="kormionesonchoyregnomineermobile_name" placeholder="Enter..." required>
                    </div>

                    <div class="form-group">
                        <label >নমিনীর জাতীয় পরিচয়পত্র / জন্ম নিবন্ধন নং</label>
                        <input type="number" min="1" step="1" class="form-control" name="kormionesonchoyregnomineernid_name" placeholder="Enter..." required>
                    </div>

                    <div class="form-group">
                        <label >নমিনীর ঠিকানা</label>
                        <input type="text" class="form-control" name="kormionesonchoyregnomineeraddress_name" placeholder="Enter..." required>
                    </div><hr>

                    <div class="form-group" style="display:none;">
                        <label >Deposits Amount</label>
                        <div class="input-group">
                        <div class="input-group-addon">
                            <!-- <i class="fa fa-usd"></i> -->
                            <i class="" style="color: red;">৳</i>
                        </div>

                        <input type="number" min="1" step="1" class="form-control" name="kormionesonchoyregamount_name" placeholder="Enter..." >
                    </div>
                        
                    </div>

                    <!-- <div class="form-group">
                        <label >Name</label>
                        <input type="text" class="form-control" name="txtname" placeholder="Enter..." required>
                    </div>

                    <div class="form-group">
                        <label >NUMBER</label>
                        <input type="number" class="form-control" name="txtemail" placeholder="Enter..." required>
                    </div> -->

                    <div class="form-group">
                        <label >গ্রাহকের ছবি</label>
                        <input style="color: red;" type="file" class="input-group" name="myfile" required>
                        <p>ছবি পাঠান</p>
                    </div>
                    

                    </div>

                

            </div>

            <div class="box-footer">
                

                <button type="submit" class="btn btn-success" name="btnsonchoyreg">SUBMIT</button>

            </div>

            </form>

        </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
      $('#datepicker').datepicker({
      autoclose: true
    })
  </script>

 <?php 

 include_once 'footer.php';

 ?>