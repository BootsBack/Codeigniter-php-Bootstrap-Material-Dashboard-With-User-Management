    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-xs-12">

          <div class="card card-primary">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Edit User</h4>
            </div>
            <form role="form" action="<?php base_url('users/create') ?>" method="post">
              <div class="card-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">
                  <label for="groups" >Groups</label>
                  <select class="form-control" id="groups" name="groups" style="width:100%">
                    <option value="">Select Groups</option>
                    <?php foreach ($group_data as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>" <?php if($user_group['id'] == $v['id']) { echo 'selected'; } ?> ><?php echo $v['group_name'] ?></option> 
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="groups">Store</label>
                  <select class="form-control" id="store" name="store">
                    <option value="">Select store</option>
                    <?php foreach ($store_data as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>" <?php if($user_data['store_id'] == $v['id']) { echo "selected='selected'"; } ?>><?php echo $v['name'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="username" class="bmd-label-floating">Username</label>
                  <input type="text" class="form-control" id="username" name="username" value="<?php echo $user_data['username'] ?>" autocomplete="off">
                </div>

                <div class="form-group" class="bmd-label-floating">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" value="<?php echo $user_data['email'] ?>" autocomplete="off">
                </div>                

                <div class="form-group" class="bmd-label-floating">
                  <label for="fname">First name</label>
                  <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $user_data['firstname'] ?>" autocomplete="off">
                </div>

                <div class="form-group" class="bmd-label-floating">
                  <label for="lname">Last name</label>
                  <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $user_data['lastname'] ?>" autocomplete="off">
                </div>

                <div class="form-group" class="bmd-label-floating">
                  <label for="phone">Phone</label>
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
                  <input type="password" class="form-control" id="password" name="password"  autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="cpassword" class="bmd-label-floating">Confirm password</label>
                  <input type="password" class="form-control" id="cpassword" name="cpassword" autocomplete="off">
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!-- col-md-12 -->
      </div>
      <!-- /.row -->
      

    </div>
    <!-- /.content -->
  </div>

<script type="text/javascript">
  $(document).ready(function() {    
	$("#usersMenu").addClass('show')
    $("#manage-users").addClass('active') 
	$("#navGroup").addClass('active')
  });
</script>
