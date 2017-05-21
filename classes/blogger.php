<?php

class Blogger 
{
    // Declare the class attributes
    //private $_username;
    protected $username;
    
    //Parameterized constructor with default values
    function __construct( $username = "unknown")
    {
        $this->username = $username;
    }
    
    function getName() 
    {
        return $this->username;
    }

    function setName($username)
    {
        $username = strip_tags($username);
        $this->username = $username;
    }

} // End of class
