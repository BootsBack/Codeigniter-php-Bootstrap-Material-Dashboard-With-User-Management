<?php 

class Dashboard extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();


		$this->data['page_title'] = 'Dashboard';
	}

	public function index()
	{
		$group_id = $this->data['group_data']['group_id'];
		$is_admin = ($group_id == 1) ? true :false;
		$this->data['is_admin'] = $is_admin;
		$this->render_template('dashboard/index', $this->data);
	}
	public function template(){

		$filename = 'application/views/dashboard/'.$this->uri->segment(3).'.php';
		if($this->uri->segment(3) == 'rtl'){
		$this->load->view('dashboard/rtl',$this->data);
		
		}else{
		if (file_exists($filename)) {
           //echo "yes";
		   $this->render_template('dashboard/'.$this->uri->segment(3), $this->data);
        }else{
			$this->my_404();
		}
		}
	}
}