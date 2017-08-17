<?php
/**
 * @Author: Eng_technical
 * @Date:   2016-02-22 13:22:00
 * @Last Modified by:   Eng_technical
 * @Last Modified time: 2016-07-26 12:26:41
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class My404 extends CI_Controller {
    public function __construct(){
        parent::__construct(); 
    } 

    public function index(){ 
        $data = [];
    	$this->output->set_status_header('404');
        $this->load->view('errors/html/error_404',$data);
    } 
   
} 