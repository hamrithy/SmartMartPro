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

		public function showfile($fname){
			$name = $fname;
			$path_to_view = get_view_path($name); 
			$files = read_file(''.$path_to_view .'');
			$filename = $name .".php";
			$data= array("filename" => $filename, "files" => $files, "filepath" => $name );
			$this->load->view('admin-kh4it/theme-editor', $data);
		}
		public function showfiles($location, $fname){
			$name = $location."/".$fname;
			$path_to_view = get_view_path($name); 
			$files = read_file(''.$path_to_view .'');
			$filename = $name .".php";
			$data= array("filename" => $filename, "files" => $files, "filepath" => $name );
			$this->load->view('admin-kh4it/theme-editor', $data);
		}

		public function showlangfile($folder, $fname){
			$path_to_view = get_lang_path($folder, $fname);
			$files = read_file(''.$path_to_view .'');
			$filename = $folder."/".$fname .".php";
			$data= array("filename" => $filename, "files" => $files, "filepath" => $fname, "langs" => $folder );
			$this->load->view('admin-kh4it/theme-editor', $data);
		}

		public function edittheme($fname){
			$datafile = $_POST['code'];
			if(isset($_POST['langfile'])){
				$folder = $this->input->post('langfile');
				$path_to_view = get_lang_path($folder, $fname);
			}else{
				$path_to_view = get_view_path($fname); 
			}			

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