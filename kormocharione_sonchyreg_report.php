<?php 

include_once 'connectdb.php';
session_start();

if($_SESSION['useremail']=="" OR $_SESSION['role']==""){

  header('location:index.php');

}


include_once 'header.php';

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      কর্মচারী ১ | সঞ্চয় রেজিস্ট্রেশন রিপোর্ট 
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


        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">সঞ্চয় রেজিস্ট্রেশন রিপোর্ট</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">

              <div style="overflow-x:auto;">
              <table id="kormionesonchoyreg" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>তারিখ</th>
                            <th>গ্রাহকের ছবি</th>
                            <th>সঞ্চয় গ্রাহকের হিসাব</th>
                            <th>গ্রাহকের রেজিস্ট্রেশন নম্বর</th>
                            <th>গ্রাহকের নাম</th>
                            <th>পিতার নাম</th>
                            <th>মাতার নাম</th>
                            <th>স্বামী/স্ত্রীর নাম</th>
                            <th>মোবাইল নং</th>
                            <th>জাতীয় পরিচয়পত্র / জন্ম নিবন্ধন নং</th>
                            <th>ঠিকানা</th>  
                            <th>নমিনীর নাম</th>
                            <th>নমিনীর পিতার নাম</th>
                            <th>নমিনীর মাতার নাম</th>
                            <th>নমিনীর স্বামী/স্ত্রীর নাম</th>
                            <th>নমিনীর মোবাইল নং</th>
                            <th>নমিনীর জাতীয় পরিচয়পত্র / জন্ম নিবন্ধন নং</th>
                            <th>নমিনীর ঠিকানা</th>
                                                     
                            
                            <th>View</th>
                            <th>Edit</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php 
                    $select=$pdo->prepare("SELECT * FROM tbl_kormione_sonchoy_registration ORDER BY id DESC");
                    $select->execute();

                    while($row=$select->fetch(PDO::FETCH_OBJ)){

                        echo'
                        <tr>
                        <td>'.$row->id.'</td>   
                        <td>'.$row->kormioneregdate.'</td>
                        <td><img src="productimages/'.$row->kormionesonchoyregimag.'" class="img-rounded" width="40px" height="40px"/></td>
                        <td>'.$row->kormionesonchoyreghisab.'</td>
                        <td>'.$row->kormionesonchoyregno.'</td>
                        <td>'.$row->kormionesonchoyreggrahoknam.'</td>
                        <td>'.$row->kormionesonchoyreggrahokpitarnam.'</td>
                        <td>'.$row->kormionesonchoyreggrahokmatarnam.'</td>
                        <td>'.$row->kormionesonchoyreggrahoksamirnam.'</td>
                        <td>'.$row->kormionesonchoyreggrahokmobile.'</td>
                        <td>'.$row->kormionesonchoyreggrahoknid.'</td>
                        <td>'.$row->kormionesonchoyreggrahokaddress.'</td>
                        <td>'.$row->kormionesonchoyregnomineernam.'</td>
                        <td>'.$row->kormionesonchoyregnomineerpitarnam.'</td>
                        <td>'.$row->kormionesonchoyregnomineermatarnam.'</td>
                        <td>'.$row->kormionesonchoyregnomineersamirnam.'</td>
                        <td>'.$row->kormionesonchoyregnomineermobile.'</td>
                        <td>'.$row->kormionesonchoyregnomineernid.'</td>
                        <td>'.$row->kormionesonchoyregnomineeraddress.'</td>
                        

                        <td>
                        <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-eye-open" title="delete"></span></a>
                        </td>

                        <td>
                        <a href="#" class="btn btn-info" role="button"><span class="glyphicon glyphicon-edit" title="delete"></span></a>
                        </td>

                        <td>
                        <a href="#" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-trash" title="delete"></span></a>
                        </td>
  
                        </tr> 
                        ';

                    }



                    ?>

                    </tbody>
                </table>
                </div>

              </div>
        </div>




    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
    $(document).ready(function(){
       $('#kormionesonchoyreg').DataTable(); 
    });
</script>

 <?php 

 include_once 'footer.php';

 ?>