# Select Data from MySQL using PHP, VueJS and Axios
## Installation

> Install Dependencies

In the command line 

``composer install``


> Create Database

Create Database "vuePHP"


> Create Table

Import products.sql file


> Change Credentials MySQL

In file <b style="color:red">app/Models/DB.php</b> change the line:

``DB.php``
```
const HOST          =   "localhost";
    const DBNAME    =   "your-DB-name";
    const USER      =   "your-user-mysql";
    const PASS      =   "your-password-mysql";
```


> Change URL root

In file <b style="color:red">index.php</b> change the line:

``index.php``
```
define( 'BASE_URL', 'YOUR_URL_ROOT' );
```
 


## Contribute

Contributions are always welcome!
Please read the [contribution guidelines](miscapu.com) first.

## License

[![CC0](https://licensebuttons.net/p/zero/1.0/88x31.png)](https://creativecommons.org/publicdomain/zero/1.0/)

To the extent possible under law, [Miguel Santisteban](https://miscapu.com) has waived all copyright and related or neighboring rights to this work.
