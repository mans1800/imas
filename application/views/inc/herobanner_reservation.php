<!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-md-offset-0 col-md-4">
                    <div class="intro-message">
                        <h3>Reservation</h3>
                        <!-- <h3>A Template by Start Bootstrap</h3> -->
                        <?php echo form_open_multipart(base_url() . "home/booking") ?>
                        <hr class="intro-divider">
                        <div class="form-horizontal">
                            
                          <div class="form-group">
                            <label for="" class="col-xs-4 col-md-3 control-label text-nowrap">Check In</label>
                            <div class="col-xs-8 col-md-9">
                              <input type="text" name="reservations_checkin" id="dateStart" class="form-control datepicker">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-xs-4 col-md-3 control-label text-nowrap">Check Out</label>
                            <div class="col-xs-8 col-md-9">
                              <input type="text" name="reservations_checkout"  id="dateEnd" class="form-control datepicker">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-xs-4 col-md-3 control-label m-b">Adult</label>
                            <div class="col-xs-8 col-md-3 m-b">
                              <select name="reservations_person"  class="form-control" style="width:65px;">
                                  <?PHP $i=1; ?>
                                  <?PHP for ($i=1; $i<21; $i++) { ?>
                                  <option value="<?PHP echo $i;?>"><?PHP echo $i; ?></option>
                                  <?PHP } ?>
                              </select>
                            </div>
                            <label for="" class="col-xs-4 col-md-2 control-label">Child</label>
                            <div class="col-xs-4 col-md-4">
                              <select name="reservations_baby"  class="form-control" style="width:65px;">
                                  <?PHP $i=1; ?>
                                  <?PHP for ($i=1; $i<21; $i++) { ?>
                                  <option value="<?PHP echo $i;?>"><?PHP echo $i; ?></option>
                                  <?PHP } ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-xs-offset-4 col-sm-8 text-left">
                              <button type="submit" class="btn btn-success">Check Available</button>
                            </div>
                          </div> <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->
