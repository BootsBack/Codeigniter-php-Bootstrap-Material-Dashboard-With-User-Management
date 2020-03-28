<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-xs-12">

          <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php elseif($this->session->flashdata('error')): ?>
            <div class="alert alert-error alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('error'); ?>
            </div>
          <?php endif; ?>

          <div class="card">
		  <div class="card-header card-header-rose card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">person</i>
                  </div>
                  <h4 class="card-title">Update Information</h4>
                </div>
         
            <!-- /.card-header -->
            <form role="form" action="<?php base_url('users/setting') ?>" method="post">
              <div class="card-body">

                <?php echo validation_errors(); ?>


                <div class="form-group">
                  <label for="username" class="bmd-label-floating">Username</label>
                  <input type="text" class="form-control" id="username" name="username" value="<?php echo $user_data['username'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="email" class="bmd-label-floating">Email</label>
                  <input type="email" class="form-control" id="email" name="email"  value="<?php echo $user_data['email'] ?>" autocomplete="off">
                </div>                

                <div class="form-group">
                  <label for="fname" class="bmd-label-floating">First name</label>
                  <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $user_data['firstname'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="lname" class="bmd-label-floating">Last name</label>
                  <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $user_data['lastname'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="phone" class="bmd-label-floating">Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $user_data['phone'] ?>" autocomplete="off">
                </div>
		
				<div class="form-group" >
				<label class="col-sm-2 col-form-label label-checkbox">Gender</label>
                      <div class="col-sm-10 checkbox-radios">
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" name="gender" type="radio" value="1" <?php if($user_data['gender'] == 1) { echo "checked"; } ?>> Male
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
						 <div class="form-check form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" name="gender" type="radio" value="2" <?php if($user_data['gender'] == 2) { echo "checked";} ?>> Female
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
					</div>

                <div class="form-group">
                  <div class="alert alert-info alert-dismissible" role="alert">                    
                      Leave the password field empty if you don't want to change.
                  </div>
                </div>

                <div class="form-group">
                  <label for="password" class="bmd-label-floating">Password</label>
                  <input type="text" class="form-control" id="password" name="password" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="cpassword" class="bmd-label-floating">Confirm password</label>
                  <input type="password" class="form-control" id="cpassword" name="cpassword" autocomplete="off">
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <a href="<?php echo base_url('users/profile/') ?>" class="btn btn-warning">Back</a>
              </div>
            </form>
          </div>
        </div>
       
      </div>
    </div>    
  </div>
</div>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#profileMainNav").addClass('active');
    });
  </script>
 
