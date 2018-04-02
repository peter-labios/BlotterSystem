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
<a class="navbar-brand" href="">Barangay Malaban Offline System</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-balance-scale"></i>
            <span class="nav-link-text">Blotters Reports</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a class="nav-link add-blotter" id="openAddModal" data-toggle="modal" data-target="#addBlotterModal" data-url="<?php echo site_url('blotters/addblotter/')?>">
                <i class="fa fa-fw fa-address-book"></i>
                <span class="nav-link-text">Add Blotter</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url('blotters/index') ?>">
                <i class="fa fa-fw fa-table"></i>View Blotters
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Barangay Clearance</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a class="nav-link" id="openCreateClearance" data-toggle="modal" data-target="#createClearanceModal" data-url="<?php echo site_url('clearances/addclearance/')?>" data-url2="<?php echo site_url('blotters/clearancecheck/')?>">
                <i class="fa fa-fw fa-address-book"></i>
                  <span class="nav-link-text">Create Clearance</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url('clearances/index') ?>">
                <i class="fa fa-fw fa-table"></i>View Clearances
              </a>
            </li>
          </ul>
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
                        <br>
                        <div class="col-md-12">
                          <input type="text" name="officerTxt" class="form-control" placeholder="Recording Officer Name">  
                        </div>
                      </div>
                    </form>
                </div>
                <div class="modal-footer" >
                    <button class="btn btn-secondary" id="btnAddCancel" type="button" data-dismiss="modal">Cancel</button>
                    <a style="color:white" class="btn btn-primary" id="btnAdd">Add</a>
                </div>
            </div>
        </div>
      </div>

<!-- Create Clearance Modal-->
<div class="modal fade" id="createClearanceModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class ="modal-header">
        <h3>Create Barangay Clearance</h3>
      </div>
      <div class ="modal-body">
        <form id="createClearanceForm" action="" method="post" class="form-horizontal">
          <div class="form-group">
            <div class="col-md-12">
              <input type="text" name="applicantNameTxt" class="form-control" placeholder="Applicant's Full Name">  
            </div>
            <br>
            <div class="col-md-12">
              <textarea type="text" name="origAddressTxt" class="form-control" placeholder="Original Address of Applicant"></textarea>
            </div>
            <br>
            <div class="col-md-12">
              <input type="date" name="birthDatePicker" class="form-control">  
            </div>
            <br>
            <div class="col-md-12">
              <textarea type="text" name="currAddressTxt" class="form-control" placeholder="Current Address of Applicant"></textarea>
            </div>
            <br>
            <div class="col-md-12">
              <input type="text" name="reasonTxt" class="form-control" placeholder="Reason For Applying">  
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer" >
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a style="color:white" class="btn btn-primary" id="btnCreate">Create Clearance</a>
      </div>
    </div>
  </div>
</div>

<!-- Existing Blotters Modal -->
<div class="modal fade" id="clearanceContinue">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class ="modal-header">
                <h3>Existing Blotter Reports</h3>
            </div>
            <div class ="modal-body">
                <p>Applicant has existing blotter reports against them. Continue?</p>
            </div>
            <div class="modal-footer" >
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a style="color:white" class="btn btn-primary" id="btnContinue">Continue</a>
            </div>
        </div>
    </div>
</div>