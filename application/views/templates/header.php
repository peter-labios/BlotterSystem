<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Blotter System</title>
  <!-- Bootstrap core CSS-->
  <link href=" <?php echo base_url('assets/admin/vendor/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url(); ?>assets/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/admin/css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/combobox/css/bootstrap-combobox.css'); ?>">
  
</head>

<body>

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
<a class="navbar-brand" href="">Barangay Malaban Blotter System</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link add-blotter" id="openAddModal" data-toggle="modal" data-target="#addBlotterModal" data-url="<?php echo site_url('blotters/addblotter/')?>">
            <i class="fa fa-fw fa-address-book"></i>
            <span class="nav-link-text">Add Blotter</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="btn">
        </li>
      </ul>
    </div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">
<br><br>


      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="<?php echo base_url()?>admins/logout">Logout</a>
                  
                </div>
              </div>
            </div>
      </div>

      <!-- Add Blotter Modal-->
      <div class="modal fade" id="addBlotterModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class ="modal-header">
                    <h3>Add New Blotter Report</h3>
                </div>
                <div class ="modal-body">
                    <form id="addBlotterForm" action="" method="post" class="form-horizontal">
                      <div class="form-group">
                        <div class="col-md-12">
                          <input type="text" name="complainantNameTxt" class="form-control" placeholder="Complainant Name">  
                        </div>
                        <br>
                        <div class="col-md-12">
                          <input type="text" name="defendantNameTxt" class="form-control" placeholder="Defendant Name">  
                        </div>
                        <br>
                        <div class="col-md-12">
                          <input type="text" name="caseTypeTxt" class="form-control" placeholder="Case Type">  
                        </div>
                        <br>
                        <div class="col-md-12">
                          <textarea type="text" name="detailsTxt" class="form-control" placeholder="Details of Report"></textarea>
                        </div>
                      </div>
                    </form>
                </div>
                <div class="modal-footer" >
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a style="color:white" class="btn btn-primary" id="btnAdd">Add</a>
                </div>
            </div>
        </div>
      </div>
      