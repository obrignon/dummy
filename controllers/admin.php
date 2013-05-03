<?php defined('BASEPATH') or exit('No direct script access allowed');


class Admin extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('dummy');
    }

    // Index runs by default when you visit /admin/dummy
    public function index()
    {
        echo 'Hello World <a href="'.site_url().'/admin/dummy/example">Example Link</a>';
    }

    // Example runs when you visit /admin/dummy/example/200
    public function example($count = 100)
    {
        echo $this->dummy->getContent($count, null, false);
    }
}