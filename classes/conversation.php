<?php
/**
 * Created by PhpStorm.
 * User: Aurelio Nkumbe
 * Date: 10/09/2015
 * Time: 02:21
 */

class conversation {
    /**
     * @var array collection of connected users
     */
    private $connectedUsersAmount = array();
    /**
     * @var array collection of error messages
     */
    public $errors = array();
    /**
     * @var array collection of success / neutral messages
     */
    public $messages = array();
    /**
     * @var object $db_connection The database connection
     */
    private $db_connection = null;

    public function __construct()
    {
        session_start();


    }
    public function connectToDataBase()
    {
        // connection already opened
        if ($this->db_connection != null) {
            return true;
        } else {
            // create a database connection, using the constants from config/config.php
            try {
                // Generate a database connection, using the PDO connector
                // @see http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/
                // Also important: We include the charset, as leaving it out seems to be a security issue:
                // @see http://wiki.hashphp.org/PDO_Tutorial_for_MySQL_Developers#Connecting_to_MySQL says:
                // "Adding the charset to the DSN is very important for security reasons,
                // most examples you'll see around leave it out. MAKE SURE TO INCLUDE THE CHARSET!"
                $this->db_connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
                return true;
                // If an error is catched, database connection failed
            } catch (PDOException $e) {
                $this->errors[] = MESSAGE_DATABASE_ERROR;
                return false;
            }
        }
    }


    public function sendMessage()
    {



    }
    public function getAllMessages()
    {



    }
    public function whoIsonline()
    {



    }
    public function getMessageSentToMe()
    {



    }
    public function getSenderInfos()
    {



    }
    public function SentMessageTo()
    {



    }
}