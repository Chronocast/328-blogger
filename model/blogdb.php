<?php
    /**
     * Blog Assignment
     * @author Nate Hascup <nshascup@gmail.com>
     * @version 1.0
     */
    
    //CONNECT
    class BlogsDB
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
            $statement->bindValue(':username', $author, PDO::PARAM_STR);
            
            $statement->execute();
            
            //Return ID of inserted row
            return $this->_pdo->lastInsertId();
        }
        
        /**
         * Adds a blogger to the collection of users in the db.
         *
         * @access public
         * @param string $username the name of the blogger
         *
         * @return true if the insert was successful, otherwise false
         */
        function addBlogger($username)
        {
            $insert = 'INSERT INTO blogger (username) VALUES (:username)';
             
            $statement = $this->_pdo->prepare($insert);
            $statement->bindValue(':username', $username, PDO::PARAM_STR);
            
            $statement->execute();
            
            //Return ID of inserted row
            return $this->_pdo->lastInsertId();
        }
         
        //READ
        /**
         * Returns all bloggers in the database collection.
         *
         * @access public
         *
         * @return an associative array of bloggers indexed by userID
         */
        function allBloggers()
        {
            $select = 'SELECT userID, username FROM blogger';
            $results = $this->_pdo->query($select);
             
            $resultsArray = array();
             
            //map each user id to a row of data for that user
            while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
                $resultsArray[$row['userID']] = $row;
            }
             
            return $resultsArray;
        }
         
        /**
         * Returns a bloggers  that has the given id.
         *
         * @access public
         * @param int $id the id of the pet
         *
         * @return an associative array of pet attributes, or false if
         * the pet was not found
         */
        
        function bloggerInfo($username)
        {
            $select = 'SELECT * FROM blogger WHERE username=:username';
             
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':username', $username, PDO::PARAM_STR);
            $statement->execute();
             
            return $statement->fetch(PDO::FETCH_ASSOC);
        }
         
         /**
         * Returns a blogger that has the given username.
         *
         * @access public
         * @param int $id the id of the pet
         *
         * @return an associative array of pet attributes, or false if
         * the pet was not found
         */
        
        function bloggerBlogs($username)
        {
            
            
            $select = 'SELECT * FROM blogs WHERE username=:username ORDER BY blogDate DESC';
            
            $results = $this->_pdo->prepare($select);
            $results->bindValue(':username', $username, PDO::PARAM_STR);
            $results->execute();
             
            $resultsArray = array();
             
            //map each blog to a row of data by date
            $rows = $results->fetchAll(PDO::FETCH_ASSOC);
             
            return $rows;
        }
         
         //GETTER
         /**
         * Returns true if the name is used by a pet in the database.
         *
         * @access public
         * @param string $name the name of the pet to look for
         *
         * @return true if the name already exists, otherwise false
         */   
        
        
        function mostRecentBlog($username)
        {            
            $select = 'SELECT * FROM blogs WHERE username=:username ORDER BY blogDate DESC LIMIT 1';
             
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':username', $username, PDO::PARAM_STR);
            $statement->execute();
             
            $rows = $statement->fetch(PDO::FETCH_ASSOC);
             
            return $rows;
        }
        
         /**
         * Returns true if the name is used by a pet in the database.
         *
         * @access public
         * @param string $name the name of the pet to look for
         *
         * @return true if the name already exists, otherwise false
         */   
        
        
        /*function getBlog($username, $blogName)
        {            
            $select = 'SELECT * FROM blogs WHERE username=:username, blogNamer=:blogName';
             
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':username', $username, PDO::PARAM_STR);
            $statement->bindValue(':blogName', $blogName, PDO::PARAM_STR);
            $statement->execute();
             
            $rows = $statement->fetch(PDO::FETCH_ASSOC);
             
            return $rows;
        }*/
         
         
        /**
         * Returns true if the name is used by a pet in the database.
         *
         * @access public
         * @param string $name the name of the pet to look for
         *
         * @return true if the name already exists, otherwise false
         */   
        
        /*function userExists($name)
        {            
            $select = 'SELECT id, name, type, color FROM pets WHERE name=:name';
             
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':name', $name, PDO::PARAM_STR);
            $statement->execute();
             
            $row = $statement->fetch(PDO::FETCH_ASSOC);
             
            return !empty($row);
        }
        
        function blogExists($name)
        {            
            $select = 'SELECT id, name, type, color FROM pets WHERE name=:name';
             
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':name', $name, PDO::PARAM_STR);
            $statement->execute();
             
            $row = $statement->fetch(PDO::FETCH_ASSOC);
             
            return !empty($row);
        }*/
         
        //UPDATE
      
         /**
         * Updates the attributes for a pet in the database.
         *
         * @access public
         * @param int $id the id of the pet
         * @param string $name the name of the pet
         * @param string $type the type of pet (giraffe, turtle, bear, ...)
         * @param string $color the color of the animal
         */  
        
        /*function updateUser($id, $name, $type, $color)
        {          
            $update = 'UPDATE pets SET name=:name, type=:type, color=:color
                                   WHERE id=:id';
             
            $statement = $this->_pdo->prepare($update);
            $statement->bindValue(':name', $name, PDO::PARAM_STR);
            $statement->bindValue(':type', $type, PDO::PARAM_STR);
            $statement->bindValue(':color', $color, PDO::PARAM_STR);
            $statement->bindValue(':id', $id, PDO::PARAM_INT);
             
            $statement->execute();
        }
        
        function updateBlog($id, $name, $type, $color)
        {          
            $update = 'UPDATE pets SET name=:name, type=:type, color=:color
                                   WHERE id=:id';
             
            $statement = $this->_pdo->prepare($update);
            $statement->bindValue(':name', $name, PDO::PARAM_STR);
            $statement->bindValue(':type', $type, PDO::PARAM_STR);
            $statement->bindValue(':color', $color, PDO::PARAM_STR);
            $statement->bindValue(':id', $id, PDO::PARAM_INT);
             
            $statement->execute();
        }*/
         
        //DELETE
         
        /**
         * Deletes the pet associated with the input id.
         *
         * @access public
         * @param int $id the id of the pet
         *
         * @return true if the delete was successful, otherwise false
         */
        
        /*function deleteBlog($id)
        {        
            $delete = 'DELETE FROM blogs WHERE id=:id';
             
            $statement = $this->_pdo->prepare($delete);
            $statement->bindValue(':id', $id, PDO::PARAM_INT);
             
            return $statement->execute();
        }
        
        function deleteUser($id)
        {        
            $delete = 'DELETE FROM blogs WHERE id=:id';
             
            $statement = $this->_pdo->prepare($delete);
            $statement->bindValue(':id', $id, PDO::PARAM_INT);
             
            return $statement->execute();
        }*/
    }