<!DOCTYPE html>
<html lang="en">

<head>
<title>Admin - Manage Users</title> 
<!-- Bootstrap core CSS-->
<?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
<!-- Custom fonts for this template-->
<?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
<!-- Page level plugin CSS-->
<?php echo link_tag('assests/vendor/datatables/dataTables.bootstrap4.css'); ?>
<!-- Custom styles for this template-->
<?php echo link_tag('assests/css/sb-admin.css'); ?>

  </head>

  <body id="page-top">

   <?php include APPPATH.'views/admin/includes/header.php';?>

    <div id="wrapper">

      <!-- Sidebar -->
  <?php include APPPATH.'views/admin/includes/sidebar.php';?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url('user/Dashboard'); ?>">User</a>
            </li>
            <li class="breadcrumb-item active">Assign Project</li>
          </ol>

          <!-- Page Content -->
          
          <hr>
          <!-- Remove success message automatically jquery -->

          <script>
setTimeout(function(){
    $(".text-danger").hide(); },5000);
</script>

<!---- Success Message ---->

<?php if($this->session->flashdata('success')!='') { ?>
  <div class="text-success"><?php echo $this->session->flashdata('success');?> </div>
  <?php } ?>



<!---- Form Start ---->

<?php echo form_open_multipart() ;?>
<div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
<?php echo form_input(['name'=>'projectname','id'=>'projectname','class'=>'form-control','autofocus'=>'autofocus' ,'value'=>set_value('projectname')]);?>
<?php echo form_label('Enter Project Name', 'projectname'); ?>
<?php echo form_error('projectname',"<div style='color:red'>","</div>");?>
                </div>
                </div>
              </div>
            </div>
        
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group"> 

<?php echo form_input(['name'=>'description','id'=>'description','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('description')]);?>
<?php echo form_label('Enter Project Details', 'description'); ?>
<?php echo form_error('description',"<div style='color:red'>","</div>");?>

                  </div>
                </div>
              </div>
            </div>
  
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group"> 

<?php echo form_upload(['name'=>'project_file','id'=>'project_file','class'=>'form-control','autofocus'=>'autofocus']);?>
<?php echo form_label('Enter Project File [Jpg/png/pdf allowed]', 'project_file'); ?>
<div class="text-danger"><?php echo (!empty($errorImageUpload))? $errorImageUpload:'';?></div>

                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">

<?php echo form_input(['name'=>'lastdate','id'=>'lastdate','class'=>'form-control','autofocus'=>'autofocus', 'type'=>'date','required' => 'required','value'=>set_value('lastdate')]);?>
<?php echo form_label('Enter Submission Date', 'lastdate'); ?>
<?php echo form_error('lastdate',"<div style='color:red'>","</div>");?>

                  </div>
                </div>
              </div>
            </div>

 
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                  <select  class="form-control" name="id" id="asign" required>
    <option  value="" >Select user</option>
<?php if(count($users)):?>
<?php foreach ($users as $user):?>
    <option value= <?php echo $user->id?>><?php echo $user->firstName?> <?php echo $user->lastName?></option>
    <?php endforeach;?>
    <?php endif;?>
    </select> 

                 </div>
                </div>
              </div>
            </div>
  
            <div class="form-row">
            <div class="col-md-6">  
 <?php echo form_submit(['name'=>'assign','value'=>'Assign','class'=>'btn btn-primary btn-block']); ?>
</div>
         
        </div>

<?php echo form_close();?>  

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
     <?php include APPPATH.'views/admin/includes/footer.php';?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

   
 
  <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

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
