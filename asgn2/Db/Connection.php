<?php
    namespace NS_Connection;

    /**
    */
    class Connection
    {

        /**
         * Class attributes 
         */
        
        /**
         * Constructor method
         * Takes an array of database parameters
         */
        function __construct($params) {
            $this->_host = $params["host"];
            $this->_username = $params["username"];
            $this->_password = $params["password"];
            $this->_dbname = $params["dbname"];
        }

        /**
         * Method connect()
         * establish a database connection
         * @return a database object
         */
        public function connect() {
            $this->_db = new \mysqli($this->_host, $this->_username, 
                    $this->_password, $this->_dbname);
            if ($this->_db->connect_errno) {
                printf("Connect failed: %s\n", $this->_db->connect_error);
                //FIXME: throw exception
                exit();
            }
            return $this->_db;
        }

        /**
         * Method insert()
         * execute insert sql statement
         * @return inserted id, or exception
         */
        public function insert($query) {
            $result = $this->_db->query($query);
            if ($this->_db->error) {
                printf("Insert failed: %s\n", $this->_db->error);
                exit();
                //FIXME: throw exception
            }
            return $this->_db->insert_id;
        }

        /**
         * Method select()
         * @return selected rows from the database as an 
         * array of associative arrays
         */
        public function select($query, $verbose = False) {
            $result = $this->_db->query($query);
            if ($this->_db->error) {
                printf("Select failed: %s\n", $this->_db->error);
                exit();
                //FIXME: throw exception
            }

            if($verbose) {
                if ($result->num_rows > 0) {
                    while($rows = $result->fetch_assoc()) {
                        printf("%d: %s %s\n", stripslashes($rows['id']),
                            stripslashes($rows['firstname']),
                            stripslashes($rows['lastname']));
                    }
                } else {
                    echo 'NO RESULTS';
                }
            }
            return $result;
        }

        /**
         * Method delete()
         * execute the delete sql statement
         */
        public function delete($query) {
            $result = $this->_db->query($query);
            if ($this->_db->error) {
                printf("Delete failed: %s\n", $this->_db->error);
                exit();
                //FIXME: throw exception
            }
            return $result;
        }

        /**
         * Method update()
         * execute the update sql statement
         */
        public function update($query) {
            $result = $this->_db->query($query);
            if ($this->_db->error) {
                printf("Update failed: %s\n", $this->_db->error);
                exit();
                //FIXME: throw exception
            }
            return $result;
        }

        /**
         * Method count_rows()
         * @return the number of rows in the database
         */
        public function count_rows() {
            $query = "SELECT count(*) from User";
            $result = $this->_db->query($query);
            if ($this->_db->error) {
                printf("Query failed: %s\n", $this->_db->error);
                exit();
                //FIXME: throw exception
            }
            while($row = $result->fetch_assoc()) {
                $count = stripslashes($row['count(*)']);
            }
            return $count;
        }

        /**
         * Method disconnect()
         * shutdown an established database connection
         */
        public function disconnect() {
            mysqli_close($this->_db);
        }

    }

?>
