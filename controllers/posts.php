<?php

class Posts extends CI_Controller
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('post_model', 'post');
		$this->load->library("pagination");
		$this->load->database();
	}


	public function index()
	{
		$limit = 2;
		$offset=$this->uri->segment(3);
		$config['total_rows'] = $this->post->count_all();
		$config['base_url'] = site_url('/posts/index/');
		$config['per_page'] = $limit;

		$data['posts'] = $this->post->limit($limit, $offset)->post->get_all();

		$this->pagination->initialize($config);

		$data["pagination_links"] = $this->pagination->create_links();

		$this->load->view('posts',$data);
	}


}