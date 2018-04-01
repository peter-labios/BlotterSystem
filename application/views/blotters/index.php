<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Blotter Reports
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Case I.D.</th>
                        <th>Complainant</th>
                        <th>Defendant</th>
                        <th>Case Title</th>
                        <th>Case Details</th>
                        <th>STATUS</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Case I.D.</th>
                        <th>Complainant</th>
                        <th>Defendant</th>
                        <th>Case Title</th>
                        <th>Case Details</th>
                        <th>STATUS</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach($blotters as $blotter): ?>
                        <tr>
                        <td style="width: 5%"><?php echo $blotter['id']; ?></td>
                        <td style="width: 15%"><?php echo $blotter['complainant']; ?></td>
                        <td style="width: 15%"><?php echo $blotter['defendant']; ?></td>
                        <td style="width: 10%"><?php echo $blotter['blotter_case']; ?></td>
                        <td style="width: 10%"><?php echo word_limiter($blotter['details'], 5); ?></td>
                        <td style="width: 5%"><?php echo $blotter['status'] ?></td>
                        <td style="width: 15%" align="center">
                            <button class="mt-1 ml-1 mb-1 btn btn-success btn-sm view-profile" id="openEditModal" data-id="<?php echo $blotter['id'];?>" data-url="<?php echo base_url('blotters/editblotter/')?>" data-complainant="<?php echo $blotter['complainant'];?>" data-defendant="<?php echo $blotter['defendant'];?>" data-blottercase="<?php echo $blotter['blotter_case'];?>" data-blotterdetails="<?php echo $blotter['details'];?>" data-created="<?php echo $blotter['created_at'];?>" data-officer="<?php echo $blotter['recording_officer'];?>" data-status="<?php echo $blotter['status'];?>"><i class="fa fa-fw fa-user-o"></i>Details</button>
                            <button class="mt-1 ml-1 mb-1 btn btn-danger btn-sm confirm-delete" data-id="<?php echo $blotter['id'];?>" data-url="<?php echo base_url('blotters/deleteblotter/')?>" ><i class="fa fa-fw fa-trash-o"></i>Delete</button>
                        </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class ="modal-header">
                <h3>Delete Blotter Report</h3>
            </div>
            <div class ="modal-body">
                <p>Are you sure you want to delete this record?</p>
            </div>
            <div class="modal-footer" >
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a style="color:white" class="btn btn-primary" id="btnDelete">Delete</a>
            </div>
        </div>
    </div>
</div>

<!-- View Report Modal -->
<div class="modal fade" id="viewModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Modal Title</h3>
            </div>
            <div class="modal-body">
                    <form id="viewBlotterForm" action="" method="post" class="form-horizontal">
                      <div class="form-group">
                        <div class="col-md-12">
                          Complainant Name<input type="text" id="complainantNameTxt" name="complainantNameTxt" class="form-control" readonly>
                        </div>
                        <br>
                        <div class="col-md-12">
                          Defendant Name<input type="text" id="defendantNameTxt" name="defendantNameTxt" class="form-control" readonly>  
                        </div>
                        <br>
                        <div class="col-md-12">
                          Case Title<input type="text" id="caseTypeTxt" name="caseTypeTxt" class="form-control" readonly>  
                        </div>
                        <br>
                        <div class="col-md-12">
                          Case Details<textarea type="text" id="detailsTxt" name="detailsTxt" class="form-control" readonly></textarea>
                        </div>
                        <br>
                        <div class="col-md-12">
                          Case Status<input type="text" id="statusTxt" name="statusTxt" class="form-control" readonly>  
                        </div>
                        <br>
                        <div class="col-md-12">
                          Case Creation Date and Time<input type="text" id="dateTimeTxt" name="dateTimeTxt" class="form-control" readonly>  
                        </div>
                        <br>
                        <div class="col-md-12">
                          Case Recording Officer<input type="text" id="officerTxt" name="officerTxt" class="form-control" readonly>  
                        </div>
                      </div>
                    </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" id="btnEditCancel" data-dismiss="modal">Cancel</button>
                <a style="color:white" class="btn btn-primary" id="btnEdit">Edit</a>
            </div>
        </div>
    </div>
</div>