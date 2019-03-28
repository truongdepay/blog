<?php

class Index extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper([
            'url'
        ]);

        $this->load->model('post_model');
    }

    public function index()
    {
        $data = [];
        $data['siteTitle'] = 'Blog - Trường Depay';
        $template = 'index';
        $this->loadView($template, $data);
    }

    public function loadMenu()
    {
        $data = [];
        $template = 'menu';
        $this->load->view($template, $data);
    }

    public function loadBanner()
    {
        $data = [];

        $where = [
            'status' => 1
        ];
        $result = $this->post_model->getResult($where);
        $data['result'] = $result;

        $template = 'banner';
        $this->load->view($template, $data);
    }

    public function loadBlog()
    {
        $data = [];
        $template = 'blog';
        $this->load->view($template, $data);
    }

    private function loadView($template, $data)
    {
        $this->load->config('config_template');
        $this->load->view(config_item('pathHeader'), $data);
        $this->load->view($template, $data);
        $this->load->view(config_item('pathFooter'), $data);
    }
}