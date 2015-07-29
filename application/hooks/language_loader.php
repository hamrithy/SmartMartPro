<?php

/*
 * This is our Db_log hook file
 * 
 */

class Language_loader {

    var $CI;

    function __construct() {
        log_message('debug','Language_loader...');
        $this->CI = & get_instance(); // Create instance of CI
    }

    function init() {
        $this->CI->load->helper('language');
        $language = $this->CI->input->cookie('LANGUAGE');
        log_message('debug','Language_loader...'.$language);
        if($language){
            $this->CI->lang->load('smartmart',$language);
            log_message('debug','IF Language_loader...'.$language);
        }else{
            $this->CI->lang->load('smartmart', $this->CI->config->item('language'));
            log_message('debug','ELSE Language_loader...'.$language);
        }    
    }
}

?>