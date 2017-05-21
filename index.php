<?php    
	/*
	*Author: Nate Hascup
	*Greenriver IT 328
	*Blog Assignment
	*/
	
	//Require the autoload file
    require_once('vendor/autoload.php');
	
    //session_start();
	session_start();

	//Create an instance of the Base class    
	$f3 = Base::instance();        

	//Set debug level
	$f3->set('DEBUG', 3);
	
	//Instantiate the database class
	$bloggerDB = new BlogsDB();
	
    //Define a default route    
	$f3->route('GET /',
		function($f3) {
  
			//Get all bloggers from the database
			$bloggers = $GLOBALS['bloggerDB']->allBloggers();
			
			//Assign the pets to an f3 variable
			$f3->set('bloggers', $bloggers);
			
			//display page
			$view = new View;
			echo $view->render('pages/index.html');        
		 });
	
	/*$f3->route('GET /create',
		function() {            
		    $view = new View;
			echo $view->render('pages/form1.html');        
		 });
	
	$f3->route('POST /form2',
		function() {
			//Create a pet object
			$p = new Pet();
			$p->setName($_POST['pet-name']);
			$_SESSION['pet'] = $p;
			
			$view = new View;
		    echo $view->render('pages/form2.html');
			print_r($_SESSION);
		});
		
	$f3->route('POST /results',
		function($f3) {
			//Get the pet object from the session
			$p = $_SESSION['pet'];
			
			//Set the pet's color
			$p->setColor($_POST['color']);
			
			//Set f3 variables
			$f3->set('name', $p->getName());
			$f3->set('color', $p->getColor());
			
			$view = new View;
			echo $view->render('pages/results.html');
			print_r($_SESSION);
		});*/
	
	//Run fat free    
	$f3->run();