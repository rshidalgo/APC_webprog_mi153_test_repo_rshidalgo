<?php
class News extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['news'] = $this->news_model->get_news();
        $data['name'] = 'COMMENT';
		$data['nickname'] = 'COMMENT';
	    $data['address'] = 'COMMENT';        
		$data['website'] = 'COMMENT';	
        $data['email'] = 'COMMENT';
        $data['comment'] = 'COMMENT';
        $data['gender'] = 'COMMENT';
        $data['cellphone'] = 'COMMENT';		
	
 
        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
    }
 
    public function view($slug = NULL)
    {
        $data['news_item'] = $this->news_model->get_news($slug);
        
        if (empty($data['news_item']))
        {
            show_404();
        }
 
        $data['name'] = $data['news_item']['name'];
 
        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['name'] = 'Create a Comment';
 
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('nickname', 'Nickname', 'required');
		 $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
		 $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('website', 'Website', 'required');
		 $this->form_validation->set_rules('comment', 'Comment', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
		 $this->form_validation->set_rules('cellphone', 'Cellphone', 'required');
  
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('news/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->news_model->set_news();
            $this->load->view('templates/header', $data);
            $this->load->view('news/success');
            $this->load->view('templates/footer');
        }
    }
    
    public function edit()
    {
        $user_id = $this->uri->segment(3);
        
        if (empty($user_id))
        {
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['name'] = 'Edit a news item';        
        $data['news_item'] = $this->news_model->get_news_by_id($user_id);
      
 
	   $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('nickname', 'Nickname', 'required');
		 $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
		 $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('website', 'Website', 'required');
		 $this->form_validation->set_rules('comment', 'Comment', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
		 $this->form_validation->set_rules('cellphone', 'Cellphone', 'required');
	
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('news/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->news_model->set_news($user_id);
            //$this->load->view('news/success');
            redirect( base_url() . 'index.php/news');
        }
    }
    
    public function delete()
    {
        $user_id = $this->uri->segment(3);
        
        if (empty($user_id))
        {
            show_404();
        }
                
        $news_item = $this->news_model->get_news_by_id($user_id);
        
        $this->news_model->delete_news($user_id);        
        redirect( base_url() . 'index.php/news');        
    }
}
