<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");
class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'slug');
    }


    function index()
    {
        $this->template->load('template', 'admin/dashboard');
    }

    function program()
    {
        $this->template->load('template', 'admin/program');
    }
}
