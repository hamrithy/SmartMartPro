<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Language extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->english();
    }

    public function khmer(){
        $cookie = array(
                    'name'   => 'LANGUAGE',
                    'value'  => 'kh',
                    'expire' => 604800
                );
        $cookie_languageID = array(
                    'name'   => 'LANGUAGE_ID',
                    'value'  => '1',
                    'expire' => 604800
                );
        $this->input->set_cookie($cookie);
        $this->input->set_cookie($cookie_languageID);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function english(){
        $cookie = array(
                    'name'   => 'LANGUAGE',
                    'value'  => 'en',
                    'expire' => 604800
                );
        $cookie_languageID = array(
                    'name'   => 'LANGUAGE_ID',
                    'value'  => '2',
                    'expire' => 604800
                );
        $this->input->set_cookie($cookie);
        $this->input->set_cookie($cookie_languageID);
        redirect($_SERVER['HTTP_REFERER']);
    }
}
?>
