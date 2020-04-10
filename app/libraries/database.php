
<?php

/**
 * PDO Database class
 * Connect to database
 * Bind values
 * Return rows and results
 */
class Database
{
  private $host = DB_HOST;
  private $user = DB_USER;
  private $password = DB_PASS;
  private $dbname = DB_NAME;

  private $dbh;
  private $error;
  private $stmt;

  public function __construct()
  {
    // set dsn
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
    $options = array(
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

    );

    // create PDO intance
    try {
      $this->dbh = new PDO($dsn, $this->user, $this->password, $options);
    } catch (PDOException $e) {
      $this->error = $e->getMessage();
      echo $this->error;
    }
  }
}
?>