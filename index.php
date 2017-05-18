<?php    
	/*
	*Author: Nate Hascup
	*Greenriver IT 328
	*Dating Form 1 Page
	*/
	
	
	//Require the autoload file
	require_once('vendor/autoload.php');
	
	session_start();

	//Create an instance of the Base class    
	$f3 = Base::instance();            
    
    //Define a default route    
	$f3->route('GET /', function() {            
			$view = new View;
			echo $view->render('pages/home.html');        
		}    
	);
	
	//Define form 1 route    
	$f3->route('GET /form1', function() {            
			$view = new View;
			echo $view->render('pages/form1.html');        
		}    
	);
	
	//Define form 2 route    
	$f3->route('POST /form2', function() {
			//Premium yes/no?
			if(isset($_POST['premium']))
			{
				$member = new Premium();
			}else{
				$member = new Member();
			}
			
			$member->setFirst($_POST['first']);
			$member->setLast($_POST['last']);
			$member->setAge($_POST['age']);
			$member->setGender($_POST['gender']);
			$member->setCell($_POST['cell']);
			
			$_SESSION['member'] = $member;
			
			$view = new View;
			echo $view->render('pages/form2.html');        
		}    
	);
	
	//Define form 3 route    
	$f3->route('POST /form3', function() {
			
			$member = $_SESSION['member'];
			
			$member->setEmail($_POST['email']);
			$member->setState($_POST['st']);
			$member->setSeek($_POST['seek']);
			$member->setBios($_POST['bios']);
			
			$_SESSION['member'] = $member;
			
			if(get_class($member) == Premium)
			{
				$view = new View;
				echo $view->render('pages/form3.html');
			}else{
				$view = new View;
				echo $view->render('pages/summary.php');
			}
		}    
	);
	
	//Define final summary route    
	$f3->route('POST /summary', function() {
			
			$member = $_SESSION['member'];
			
			$member->setOutDoorInts($_POST['outInts']);
			$member->setInDoorInts($_POST['inInts']);
			
			$_SESSION['member'] = $member;
			
			$view = new View;
			echo $view->render('pages/summary.php');        
		}    
	);	
	
	
	//Run fat free    
	$f3->run();