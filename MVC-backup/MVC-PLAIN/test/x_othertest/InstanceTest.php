<?php 

	
	interface Server{ function m(); }
	class Client1 implements Server{function m(){echo 'sucess instance.';}}
	class Client2 implements Server{function m(){}}
	class ClientFactory {
		static function create(){
			return new Client1();			
		}
	}

	class InstanceTest extends PHPUnit_Framework_TestCase{

		function testInstance(){

			$client1 = new Client1();

			if($client1 instanceof Server){
				//echo 'yes';
			}
		}

		function testFactory(){

			$c = ClientFactory::create();

			if($c instanceof Server) {
				//echo 'yes';
			}

			//$c->m();//instance of.
		}


	}

	
