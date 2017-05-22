<?php
    /**
     * Blog Assignment
     * @author Nate Hascup <nshascup@gmail.com>
     * @version 1.0
     */
    
    //CONNECT
    class BlogPostDB
    {
        private $_pdo;
        
        function __construct()
        {
            //Require configuration file
            require_once '/home/nhascup/config.php';
            
            try {
                //Establish database connection
                $this->_pdo = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
                
                //Keep the connection open for reuse to improve performance
                $this->_pdo->setAttribute( PDO::ATTR_PERSISTENT, true);
                
                //Throw an exception whenever a database error occurs
                $this->_pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            }
            catch (PDOException $e) {
                die( "Error!: " . $e->getMessage());
            }
        }
        
        //CREATE
         
        /**
         * Adds a blog to the collection of blogs in the db.
         *
         * @access public
         * @param string $blogName the name of the blogger
         * @param string $blogContent the content of the blog
         * @param string $username the name of the blogger
         *
         * @return true if the insert was successful, otherwise false
         */
        function addBlog($blogName, $blogContent, $username)
        {
            $insert = 'INSERT INTO blogs (blogName, blogContent, username) VALUES (:blogName, :blogContent, :username)';
             
            $statement = $this->_pdo->prepare($insert);
            $statement->bindValue(':blogName', $username, PDO::PARAM_STR);
            $statement->bindValue(':blogContent', $username, PDO::PARAM_STR);
            $statement->bindValue(':author', $author, PDO::PARAM_STR);
            
            $statement->execute();
            
            //Return ID of inserted row
            return $this->_pdo->lastInsertId();
        }