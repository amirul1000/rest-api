<?php
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Credentials: true");
	header("Access-Control-Max-Age: 1000");
	header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
	header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");
	
	//date_default_timezone_set('Asia/Dhaka'); 
	
	session_start();
	set_time_limit(0);
	//sleep(1);
	
	class Server {
	
		public function serve() {
			
			$method = $_SERVER['REQUEST_METHOD'];
			
			switch ($method) {
				//search
				case "GET":
					$this->get();
					break;
				//insert		   
				case "POST":
					$this->post();
					break;
				//update		   
				case "PUT":
					$this->put();
					break;
				//delete		   
				case "DELETE":
					$this->delete();
					break;
				default:
					echo 'error';
			}
		}
	
		//search
		function get() {
			  $cmd = $_REQUEST['cmd'];
			switch ($cmd) {
				case 'address':
	                 $arr_data['REQUEST_METHOD'] = $_SERVER['REQUEST_METHOD'];
					 
					  foreach($_REQUEST as $key=>$value)
					  {
						  $arr_data[$key] = $value;
					  }
					  echo json_encode($arr_data);
					break;
	
				default:
					echo 'Error';
				
				}
		}
	
		//update		
		function post() {
			   $cmd = $_REQUEST['cmd'];  
			  switch ($cmd) {
				case 'address':
	                 $arr_data['REQUEST_METHOD'] = $_SERVER['REQUEST_METHOD'];
					 
					  foreach($_REQUEST as $key=>$value)
					  {
						  $arr_data[$key] = $value;
					  }
					  echo json_encode($arr_data);
					break;
	
	
				default:
					echo 'Error';
			}
			}
	
		//update		
		function put() {
			switch ($cmd) {
				case '':
	
					break;
	
				default:
					echo 'Error';
			}
		}
	
		//delete	
		function delete() {
			   $cmd = $_REQUEST['cmd'];  
			  switch ($cmd) {
				case 'address':
	                 $arr_data['REQUEST_METHOD'] = $_SERVER['REQUEST_METHOD'];
					 
					  foreach($_REQUEST as $key=>$value)
					  {
						  $arr_data[$key] = $value;
					  }
					  echo json_encode($arr_data);
					break;
	
	
				default:
					echo 'Error';
			}
			}
	
	}
	
	$server = new Server;
	$server->serve();
?>