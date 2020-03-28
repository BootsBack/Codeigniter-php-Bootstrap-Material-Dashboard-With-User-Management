<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo base_url('assets/material-dashboard/assets/img/sidebar-1.jpg');?>">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="<?php echo base_url('dashboard');?>" class="simple-text logo-normal">
          Software Name
        </a></div>
      <div class="sidebar-wrapper">
	  
        <ul class="nav">
		<li class="nav-item">
            <b class="nav-link">             
			  <i><img width="40px;" src="<?php echo base_url('assets/material-dashboard/assets/img/cat.png');?>"  alt="User Image"></i>
              <p><?php echo $_SESSION['username'];?></p>
            </b>
          </li>
		<?php if(isset($user_permission)){ ?>
          
          <?php if(in_array('createUser', $user_permission) || in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)){ ?>
          <li class="nav-item " id="navUsers">
            <a class="nav-link" data-toggle="collapse" href="#usersMenu">
              <i class="material-icons">person</i>
              <p> Users
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="usersMenu">
              <ul class="nav">
                <?php if(in_array('createUser', $user_permission)){ ?>
                <li class="nav-item" id="add-users">
                  <a class="nav-link" href="<?php echo base_url('users/create');?>" >
                    <span class="sidebar-normal"> Add User </span>
                  </a>
                </li>
				<?php }
				 if(in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)){ ?>
                <li class="nav-item " id="manage-users">
                  <a class="nav-link" href="<?php echo base_url('users/');?>">
                    <span class="sidebar-normal"> Manage User </span>
                  </a>
                </li>
				<?php }
				?>
              </ul>
            </div>
          </li>
		  <?php } 
		  if(in_array('createGroup', $user_permission) || in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)){  ?>
          <li class="nav-item" id="navGroup">
            <a class="nav-link" data-toggle="collapse" href="#groupMenu">
              <i class="material-icons">group</i>
              <p> Group
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="groupMenu">
              <ul class="nav">
                <?php if(in_array('createGroup', $user_permission)){ ?>
                <li class="nav-item " id="create-groups">
                  <a class="nav-link" href="<?php echo base_url('groups/create');?>">
                    <span class="sidebar-normal"> Add Group </span>
                  </a>
                </li>
				<?php }
				 if(in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)){ ?>
                <li class="nav-item " id="manage-groups" >
                  <a class="nav-link" href="<?php echo base_url('groups/');?>">
                    <span class="sidebar-normal"> Manage Group </span>
                  </a>
                </li>
				<?php }
				?>
              </ul>
            </div>
          </li>
		  <?php } 	if(in_array('createStore', $user_permission) || in_array('updateStore', $user_permission) || in_array('viewStore', $user_permission) || in_array('deleteStore', $user_permission)){   ?>
		  <li class="nav-item" id="storesMainNav">
            <a class="nav-link" href="<?php echo base_url('stores');?>">
              <i class="material-icons">store</i>
              <p>Stores</p>
            </a>
          </li>
		 <?php	}  if(in_array('updateCompany', $user_permission)){?> 
		  <li class="nav-item" id="companyMainNav">
            <a class="nav-link" href="<?php echo base_url('company');?>">
              <i class="material-icons">info</i>
              <p>Company Info</p>
            </a>
          </li>
		 <?php	}  
		 	  if(in_array('viewProfile', $user_permission)){?> 
		  <li class="nav-item" id="profileMainNav">
            <a class="nav-link" href="<?php echo base_url('users/profile/');?>">
              <i class="material-icons">assignment_ind</i>
              <p>Profile</p>
            </a>
          </li>
		 <?php	}  }  ?>
		  <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('auth/logout');?>">
              <i class="material-icons">lock</i>
              <p>Signout</p>
            </a>
          </li>
		  
          <li class="nav-item " id="template-rtl">
            <a class="nav-link" href="<?php echo base_url('dashboard/template/rtl');?>">
              <i class="material-icons">language</i>
              <p>RTL Support</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="<?php echo base_url('dashboard');?>">Dashboard</a>
			<a class="navbar-brand" href="<?php echo base_url('error');?>">Error 404</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="<?php echo base_url('users/profile/');?>">Profile</a>
                  <a class="dropdown-item" href="<?php echo base_url('users/setting/');?>">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo base_url('auth/logout/');?>">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->