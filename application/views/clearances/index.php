<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Blotter Reports
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>I.D.</th>
                        <th>Applicant Name</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>I.D.</th>
                        <th>Applicant Name</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach($clearances as $clearance): ?>
                        <tr>
                        <td style="width: 5%"><?php echo $clearance['id']; ?></td>
                        <td style="width: 15%"><?php echo $clearance['applicant_name']; ?></td>
                        <td style="width: 15%"><?php echo $clearance['created_at']; ?></td>
                        <td style="width: 15%" align="center">
                            <button class="mt-1 ml-1 mb-1 btn btn-success btn-sm view-profile" id="openEditModal"><i class="fa fa-fw fa-user-o"></i>Print</button>
                        </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>