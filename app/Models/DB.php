<?php
/**
 * Access to MySQL
 *
 * @author MiSCapu
 * @since MiSCapu 1.0
 * @package App\Models;
 */
namespace App\Models;

use \PDO;
use \PDOException;


/**
 * Class DB
 * @package App\Models
 */
class DB{

    /**
     * **********************************************************
     * Credentials MySQL: change for your credentials MySQL
     * **********************************************************
     */
    const HOST      =   "localhost";
    const DBNAME    =   "github2";
    const USER      =   "root";
    const PASS      =   "root";


    /**
     * @var string $table table MySQL name
     * @access private
     */
    private $table;

    /**
     * @var PDO $conn connect to MySQL
     * @access public
     */
    public $conn;

    /**
     * DB constructor.
     * @param null $table
     */
    public function __construct( $table = null )
    {
        $this->table    =   $table;
        $this->setConnection();
    }

    /**
     * @function setConnection Set connection MySQL
     * @access private
     */
    private function setConnection()
    {
        try {
            $this->conn =   new PDO( "mysql:host=".self::HOST.";dbname=".self::DBNAME,self::USER,self::PASS );
            $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        }catch( PDOException $exception ){
            die( "Error: ".$exception->getMessage() );
        }
    }
}