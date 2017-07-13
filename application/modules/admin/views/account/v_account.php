
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">
                    <a href="<?php echo base_url(); ?>admin/account/create" class="btn btn-info">
                        <i  class="fa fa-plus" aria-hidden="true"></i> <?php echo 'Add'; ?>
                    </a> 
                </h3>
            </div>
            <div class="box-body  table-responsive">
                <table class="table table-striped table-bordered table-autosort" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="10%">Account Code</th>

                            <th width="35%">Account Name</th>
                            
                            <th width="10%">Year</th>
                            
                            <th width="15%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?PHP
                        foreach ($data_cat as $row) {
                            ?>
                            <tr>

                                <td><?PHP echo $row->account_code; ?></td>

                                <td><?PHP echo $row->account_name; ?></td>
                                                               
                                <td><?PHP echo $row->account_year; ?></td>

                                <td>
                                    <a href="account/create/<?PHP echo $row->account_id; ?>">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"> แก้ไข</i>
                                    </a>
                                    |
                                    <a href="account/deletes/<?PHP echo $row->account_id; ?>" onclick="return confirm('Are you sure you want to delete this item?');">
                                        <i class="fa fa-times-circle" aria-hidden="true"> ลบ</i>
                                    </a>
                                </td>
                            </tr>
                            <?PHP
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>