<?php
class Recent_post extends CI_Controller{
    public function recent_post()
	{
		$data['recent_post_aja'] = $this->model_home->data_home()->result();
		$this->load->view('recent_post/recent_post',$data);
	}
}





?>
