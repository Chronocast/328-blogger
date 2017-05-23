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
			//print_r($bloggers);			//get the most recent blog infor for each blogger
			$recentBlogsArray = array();
			
			foreach($bloggers as $blogger){
				
				array_push($recentBlogsArray, $GLOBALS['bloggerDB']->mostRecentBlog($blogger['username']));
			}
			
			//Assign the bloggers to an f3 variable
			$f3->set('bloggers', $bloggers);
			$f3->set('recentBlogs', $recentBlogsArray);
			$f3->set('jpg', "jpg");
			
			//display page
			$view = new View;
			echo Template::instance()->render('pages/index.html');        
		 });
	
	$f3->route('POST /bloggerPage',
		function($f3) {
			//get a blogger
			$user = $_POST['blogger'];
			$blogger = $GLOBALS['bloggerDB']->bloggerInfo($user);
			
			$recentBlog = $GLOBALS['bloggerDB']->mostRecentBlog($user);
			
			$bloggersBlogs = $GLOBALS['bloggerDB']->bloggerBlogs($user);
			
			$f3->set('blogger', $blogger);
			$f3->set('bloggersBlogs', $bloggersBlogs);
			$f3->set('recentBlog', $recentBlog);
			
			$view = new View;
		    echo Template::instance()->render('pages/blogger.html');
			
		});
	
	$f3->route('POST /blogPage',
		function($f3) {
			//get a blog
			
			$blog = $_POST['blog'];
			
			print_r($blog);
			
			//$theBlog = $GLOBALS['bloggerDB']->getBlog($blog['username'], $blog['blogName']);
			
			//$f3->set('username', $blog['username']);
			//$f3->set('blogContent', $blog['blogContent']);
			
			$view = new View;
		    echo Template::instance()->render('pages/blogPost.html');
			
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
	
	$f3->route('GET /login',
		function() {            
		    $view = new View;
			echo Template::instance()->render('pages/login.html');        
		 });
	
	$f3->route('GET /createAccount',
		function() {            
		    $view = new View;
			echo Template::instance()->render('pages/createAccount.html');        
		 });
	
	$f3->route('GET /aboutUs',
		function() {            
		    $view = new View;
			echo Template::instance()->render('pages/aboutus.html');        
		 });
	
	//Run fat free    
	$f3->run();