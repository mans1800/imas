
<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title"></h3>
            </div>
            <div class="box-body">
                <?PHP
                $attributes = array('class' => 'form-horizontal', "role" => "form");
                echo form_open("", $attributes);
                ?>


                <div class="form-group">
                    <label class="col-sm-2 control-label">Office Code<font color="red">*</font></label>
                    <div class="col-sm-10">
                        <select class="form-control" name="Suptax_officecode" required style="margin-bottom:10px;">
                            <option disabled selected value="">Office Code</option>  
                            <option value="1">001</option>
                            <option value="2">002</option>
                        </select>
                    </div>
                </div> 


                <div class="form-group">
                    <label class="col-sm-2 control-label">Tax ID Number<font color="red">*</font></label>
                    <div class="col-sm-10">
                        <input type="text" name="suptax_taxnumber" class="form-control" placeholder="Tax ID Number" value="<?PHP if (!empty($suptax[0]->suptax_taxnumber)) echo $suptax[0]->suptax_taxnumber; ?>">
                    </div>
                </div>

                <div class="box-footer"><div align="right">
                                            <a href="javascript:history.back();" style="margin-right: 10px;"><input type="button" class="btn btn-primary" value="Cancel"></a>
                    <button type="submit" class="btn btn-info pull-right">Submit</button>
                    <input type="hidden" name="suptax_id" value="<?PHP if (!empty($suptax[0]->suptax_id)) echo $suptax[0]->suptax_id; ?>">
                </div></div>
                <?php echo form_close(); ?>	
            </div>
        </div>
    </div>
</div>	
