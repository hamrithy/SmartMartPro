<?php
	class Theme extends ADMIN_Controller{

		public function __Construct(){
			parent::__Construct();
			$this->load->helper('file');
			$this->load->helper('url');
			$this->load->helper('mygetpath');

		}

		public function Index(){
			$name = "index";
			$path_to_view = get_view_path($name); 
			$files = read_file(''.$path_to_view .'');
			$filename = $name .".php";
			$data= array("filename" => $filename, "files" => $files, "filepath" => $name );
			$this->load->view('admin-kh4it/theme-editor', $data);
		}

		public function showfile($location, $fname){
			$name = $location."/".$fname;
			$path_to_view = get_view_path($name); 
			$files = read_file(''.$path_to_view .'');
			$filename = $name .".php";
			$data= array("filename" => $filename, "files" => $files, "filepath" => $name );
			$this->load->view('admin-kh4it/theme-editor', $data);
		}

		public function edittheme($fname){
			$datafile = $this->input->post('code');
			$path_to_view = get_view_path($fname); 

			if ( ! write_file(''. $path_to_view .'', $datafile))
			{
			     echo 'Unable to write the file';

			}
			else
			{
			    $filename = $fname .".php";
				$data= array("filename" => $filename, "files" => $datafile, "filepath" => $fname );
				$this->load->view('admin-kh4it/theme-editor', $data);
			}

		}

		
	}


?>