 <!-- Main content -->
    <div class="content">
	<div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <?php if($this->session->flashdata('errors')){ ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo validation_errors(); ?>
              
            </div>
          <?php } ?>

          <div class="card">
				<div class="card-header card-header-primary">
                  <h4 class="card-title">Add New User</h4>
                </div>
            <form role="form" action="<?php base_url('users/create') ?>" method="post">
              <div class="card-body">

                

                <div class="form-group">
                  <label for="groups" class="bmd-label-floating">Groups</label>
                  <select class="form-control" id="groups" name="groups" style="width:100%">
                    <option value="">Select Groups</option>
                    <?php foreach ($group_data as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>"><?php echo $v['group_name'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="groups" class="bmd-label-floating">Store</label>
                  <select class="form-control" id="store" name="store">
                    <option value="">Select store</option>
                    <?php foreach ($store_data as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="username" class="bmd-label-floating">Username</label>
                  <input type="text" class="form-control" id="username" name="username" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="email" class="bmd-label-floating">Email</label>
                  <input type="email" class="form-control" id="email" name="email"  autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="password" class="bmd-label-floating">Password</label>
                  <input type="password" class="form-control" id="password" name="password"  autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="cpassword" class="bmd-label-floating">Confirm password</label>
                  <input type="password" class="form-control" id="cpassword" name="cpassword" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="fname" class="bmd-label-floating">First name</label>
                  <input type="text" class="form-control" id="fname" name="fname"  autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="lname" class="bmd-label-floating">Last name</label>
                  <input type="text" class="form-control" id="lname" name="lname"  autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="phone" class="bmd-label-floating">Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone"  autocomplete="off">
                </div>

               
				<div class="form-group" >
				<label class="col-sm-2 col-form-label label-checkbox">Gender</label>
                      <div class="col-sm-10 checkbox-radios">
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" name="gender" type="radio" value="1"> Male
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
						 <div class="form-check form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" name="gender" type="radio" value="2"> Female
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
					</div>	
				</div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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
  <!-- /.content-wrapper -->