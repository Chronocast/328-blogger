<?php

class Blog 
{
    // Declare the class attributes
    //private $_username;
    protected $username;
    
    //Parameterized constructor with default values
    function __construct( blogName = "unknown")
    {
        $this->blogName = $blogName;
    }
    
    function getName() 
    {
        return $this->blogName;
    }

    function setName($blogName)
    {
        $blogName = strip_tags($blogName);
        $this->blogName = $blogName;
    }

} // End of class