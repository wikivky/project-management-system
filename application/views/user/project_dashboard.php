<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User dashboard</title>

<!-- Bootstrap core CSS-->
<?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
<!-- Custom fonts for this template-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet">
<!-- Page level plugin CSS-->
<?php echo link_tag('assests/vendor/datatables/dataTables.bootstrap4.css'); ?>
<!-- Custom styles for this template-->
<?php echo link_tag('assests/css/sb-admin.css'); ?>

  </head>

  <body id="page-top">

 <?php include APPPATH.'views/user/includes/header.php';?>

    <div id="wrapper">

      <!-- Sidebar -->
 <?php include APPPATH.'views/user/includes/sidebar.php';?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url('user/Dashboard'); ?>">User</a>
            </li>
            <li class="breadcrumb-item active">Project Details</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-12 col-sm-6 mb-3">
   
            </div>
<?php if ($this->session->flashdata('msg')) { ?>
<p style="color:green; font-size:18px;" align="center"><?php echo $this->session->flashdata('msg');?></p>
<?php } ?>  
  
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-tasks"></i> 
              Project Details </div>
              </div>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      
                      <th>Project Name</th>
                      <th>Details</th>
                      <th>Submission Date</th>
                      <th>Project Document</th>
                      <th>Action</th>
                     
                    </tr>
                  </thead>
                  
                  <tbody>
 <?php if(count($project)) :

foreach ($project as $pro) :
  ?>
                <tr>
                    <td><?php echo $pro->project_name;?></td>
                    <td><?php echo $pro->description;?></td>
                    <td><?php echo $pro->date;?></td> 
                    <td>
                                    <?php 
                                    $path = './assests/uploads/'.$pro->project_file;
                                    if($pro->project_file != "" && file_exists($path)) {
                                        ?>
                                        <a href="\ciproject\assests\uploads/<?php echo $pro->project_file;?>" target="_blank">view file</a>
                                        <?php
                                    } else {
                                        ?>
                                        <a href="\ciproject\assests\uploads/no-file.png" target="_blank">view file</a>

                                        <?php
                                    }
                                    ?>

                                </td>

<!-- Here we pass both approve coloum and project id from add project table -->

<td>                  <?php $respose = $pro->approve;
                                 if($respose == 'approved')
                      {
                      ?>
                         <a id="myButton" href="Project_check/approve?project_id=<?php echo $pro->project_id;?>&approve=<?php echo $pro->approve?>" class="btn btn-danger" value="Reject">Reject</a>
                      <?php
                      }
                      else{
                      ?>
                        <h5 style="color:red"> Rejected</h5> 
                      <?php
                      }
                      ?>
</td>


               
                    </tr>
                   

 <?php endforeach;

else : ?>

<tr>
<td colspan="3">No Record found</td>
</tr>
<?php
endif;
?>     
  </tbody>
</table>

        </div>
     

        <!-- Sticky Footer -->
   <?php include APPPATH.'views/user/includes/footer.php';?>

      </div>
     

    </div>
   

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Ajax for approve-->
    <script>
   $(document).ready(function(){
    $("#myButton").click(function(){
        $(this).text("Rejected");//you will loose <i> tag
        //$(this).html("<i class="fa fa-envelope"></i> View Email")//better to use html instead of text.
    });
});
    </script>


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/chart.js/Chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/datatables/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assests/js/sb-admin.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/js/demo/datatables-demo.js'); ?>"></script>
    <script src="<?php echo base_url('assests/js/demo/chart-area-demo.js'); ?>"></script>

  </body>

</html>
