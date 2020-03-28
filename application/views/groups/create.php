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
			<?php echo validation_errors(); ?>
          <div class="card">
           <div class="card-header card-header-rose card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">group</i>
                  </div>
                  <h4 class="card-title">Create Group</h4>
                </div>
            <form role="form" action="<?php base_url('groups/create') ?>" method="post">
              <div class="card-body">               
				
                <div class="form-group">
                  <label for="group_name" class="bmd-label-floating">Group Name</label>
                  <input type="text" class="form-control" required id="group_name" name="group_name"  autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="permission">Permission</label>

                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Create</th>
                        <th>Update</th>
                        <th>View</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Users</td>
                        <td>
						<div class="form-check">
						  <label class="form-check-label">
						  <input type="checkbox" class="form-check-input" name="permission[]" value="createUser">			 
							<span class="form-check-sign">
							  <span class="check"></span>
							</span>
						  </label>
						</div>
						</td>
                        <td>
						<div class="form-check">
						  <label class="form-check-label">
						  <input type="checkbox" class="form-check-input" name="permission[]" value="updateUser">			 
							<span class="form-check-sign">
							  <span class="check"></span>
							</span>
						  </label>
						</div>
						</td>
                        <td><div class="form-check">
						  <label class="form-check-label">
						  <input type="checkbox" class="form-check-input" name="permission[]" value="vieweUser">			 
							<span class="form-check-sign">
							  <span class="check"></span>
							</span>
						  </label>
						</div>
						</td>
                        <td>
						<div class="form-check">
						  <label class="form-check-label">
						  <input type="checkbox" class="form-check-input" name="permission[]" value="deleteUser">			 
							<span class="form-check-sign">
							  <span class="check"></span>
							</span>
						  </label>
						</div>
						</td>
                      </tr>
                      <tr>
                        <td>Groups</td>
                        <td>
						<div class="form-check">
						  <label class="form-check-label">
						  <input type="checkbox" class="form-check-input" name="permission[]" value="createGroup">			 
							<span class="form-check-sign">
							  <span class="check"></span>
							</span>
						  </label>
						</div>
						</td>
                        <td>
						<div class="form-check">
						  <label class="form-check-label">
						  <input type="checkbox" class="form-check-input" name="permission[]" value="updateGroup">			 
							<span class="form-check-sign">
							  <span class="check"></span>
							</span>
						  </label>
						</div>
						</td>
                        <td>
						<div class="form-check">
						  <label class="form-check-label">
						  <input type="checkbox" class="form-check-input" name="permission[]" value="viewGroup">			 
							<span class="form-check-sign">
							  <span class="check"></span>
							</span>
						  </label>
						</div>
						</td>
                        <td>
						<div class="form-check">
						  <label class="form-check-label">
						  <input type="checkbox" class="form-check-input" name="permission[]" value="deleteGroup">			 
							<span class="form-check-sign">
							  <span class="check"></span>
							</span>
						  </label>
						</div>
						</td>
                      </tr>
                      <tr>
                        <td>Stores</td>
                        <td>
						<div class="form-check">
						  <label class="form-check-label">
						  <input type="checkbox" class="form-check-input" name="permission[]" value="createStore">			 
							<span class="form-check-sign">
							  <span class="check"></span>
							</span>
						  </label>
						</div>
						</td>
                        <td>
						<div class="form-check">
						  <label class="form-check-label">
						  <input type="checkbox" class="form-check-input" name="permission[]" value="updateStore">			 
							<span class="form-check-sign">
							  <span class="check"></span>
							</span>
						  </label>
						</div>
						</td>
                        <td>
						<div class="form-check">
						  <label class="form-check-label">
						  <input type="checkbox" class="form-check-input" name="permission[]" value="viewStore">			 
							<span class="form-check-sign">
							  <span class="check"></span>
							</span>
						  </label>
						</div>
						</td>
                        <td>
						<div class="form-check">
						  <label class="form-check-label">
						  <input type="checkbox" class="form-check-input" name="permission[]" value="deleteStore">			 
							<span class="form-check-sign">
							  <span class="check"></span>
							</span>
						  </label>
						</div>
						</td>
                      </tr>
                      
                      <tr>
                        <td>Company</td>
                        <td> - </td>
                        <td>
						<div class="form-check">
						  <label class="form-check-label">
						  <input type="checkbox" class="form-check-input" name="permission[]" value="updateCompany">			 
							<span class="form-check-sign">
							  <span class="check"></span>
							</span>
						  </label>
						</div>
						</td>
                        <td> - </td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Profile</td>
                        <td> - </td>
                        <td>
						<div class="form-check">
						  <label class="form-check-label">
						  <input type="checkbox" class="form-check-input" name="permission[]" value="updateSetting">			 
							<span class="form-check-sign">
							  <span class="check"></span>
							</span>
						  </label>
						</div>
						</td>
                        <td>
						<div class="form-check">
						  <label class="form-check-label">
						  <input type="checkbox" class="form-check-input" name="permission[]" value="viewProfile">			 
							<span class="form-check-sign">
							  <span class="check"></span>
							</span>
						  </label>
						</div>
						</td>
                        <td> -</td>
                      </tr>
                      
					
                    </tbody>
                  </table>
                  
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card-->
        </div>
        <!-- col-md-12 -->
      </div>
      <!-- /.row -->
      
	
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
