<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Language extends CI_Controller{

    function __construct(){
        parent::__construct();
        //$this->load->helper('language');
    }

    public function index(){
        $this->english();
    }

    public function khmer(){
        //$this->lang->load('smartmart', 'khmer');
        $cookie = array(
                    'name'   => 'LANGUAGE',
                    'value'  => 'kh',
                    'expire' => 604800
                );
        $this->input->set_cookie($cookie);
        //echo lang('hello');
        //print_r($this->input->cookie());
        //print_r($this->session->userdata($cookie));
        //echo json_encode($this->input->cookie("LANGUAGE"));
        //echo json_encode($this->input->cookie("LANGUAGE"));
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function english(){
        //$this->lang->load('smartmart', 'english');
        $cookie = array(
                    'name'   => 'LANGUAGE',
                    'value'  => 'en',
                    'expire' => 604800
                );
        $this->input->set_cookie($cookie);
        //echo lang('hello');
        //print_r($this->input->cookie());
        //print_r($this->session->userdata($cookie));
        //echo json_encode($this->input->cookie("LANGUAGE"));
        //echo json_encode($this->input->cookie("LANGUAGE"));
        redirect($_SERVER['HTTP_REFERER']);
    }
}
?>
