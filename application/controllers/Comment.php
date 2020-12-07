<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Comment extends CI_Controller{
  function __construct()
  {
      parent::__construct();
      $this->load->model('Comment_model');
        require_once APPPATH . 'third_party/dompdf/dompdf_config.inc.php';
    
        
    }
    
    public function index() {
      $data['title'] = 'Pengumuman';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      

      $params['limit'] = 10; 
      $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
      
      $config = $this->config->item('pagination');
      $config['base_url'] = site_url('comment/index?');
      $config['total_rows'] = $this->Comment_model->get_all_comments_count();
      

      $data['comments'] = $this->Comment_model->get_all_comments($params);
      
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('comment/index',$data);
        $this->load->view('templates/footer');
        
        

    }
    function add()
    {   
      $data['title'] = 'Pengumuman';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      
        $this->load->library('form_validation');

		$this->form_validation->set_rules('comment_status','Comment Status','required|integer');
		$this->form_validation->set_rules('comment_subject','Comment Subject','required|max_length[250]');
		$this->form_validation->set_rules('comment_text','Comment Text','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'comment_status' => $this->input->post('comment_status'),
				'comment_subject' => $this->input->post('comment_subject'),
				'comment_text' => $this->input->post('comment_text'),
            );
            

            $comment_id = $this->Comment_model->add_comment($params);
            redirect('comment/index');
        }
        else
        {            
         
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('comment/add',$data);
        $this->load->view('templates/footer');
        
        }
    }  

    /*
     * Editing a comment
     */
    function edit($comment_id)
    {   
      $data['title'] = 'Pengumuman';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      

        // check if the comment exists before trying to edit it
        $data['comment'] = $this->Comment_model->get_comment($comment_id);
        
        if(isset($data['comment']['comment_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('comment_status','Comment Status','required|integer');
			$this->form_validation->set_rules('comment_subject','Comment Subject','required|max_length[250]');
			$this->form_validation->set_rules('comment_text','Comment Text','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'comment_status' => $this->input->post('comment_status'),
					'comment_subject' => $this->input->post('comment_subject'),
					'comment_text' => $this->input->post('comment_text'),
                );

                $this->Comment_model->update_comment($comment_id,$params);            
                redirect('comment/index');
            }
            else
            {    
              $this->load->view('templates/header', $data);
              $this->load->view('templates/sidebar', $data);
              $this->load->view('templates/topbar', $data);
              $this->load->view('comment/edit',$data);
              $this->load->view('templates/footer');
               }
        }
        else
            show_error('The comment you are trying to edit does not exist.');
    } 

    /*
     * Deleting comment
     */
    function remove($comment_id)
    {
        $comment = $this->Comment_model->get_comment($comment_id);

        // check if the comment exists before trying to delete it
        if(isset($comment['comment_id']))
        {
            $this->Comment_model->delete_comment($comment_id);
            redirect('comment/index');
        }
        else
            show_error('The comment you are trying to delete does not exist.');
    }
    
}