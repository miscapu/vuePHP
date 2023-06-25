<?php
/**
 * Product Model MySQL Data
 * @author MiSCapu
 * @package App\Models;
 * @since MiSCapu 1.0
 */
namespace App\Models;

require __DIR__."/../../vendor/autoload.php";
use App\Models\DB;

use \PDO;

/**
 * Class Product
 * @package App\Models
 */
class Product
{
    public function select( $table )
    {
        $dbModel    =   new DB( $table );
        $stmt       =   $dbModel->conn->prepare( 'SELECT * FROM '.$table );
        $stmt->execute();
        return $stmt->fetchAll( PDO::FETCH_ASSOC );
    }
}