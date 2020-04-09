<?php
/*
* App Core Class
* Creates URL & Loads core controller
* URL format - /controller/method/params
*/
class Core
{
  protected $currentController = 'Pages';
  protected $currentMethod = 'index';
  protected $params = [];

  public function __construct()
  {
    $url = $this->getUrl();
    if ($url && file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
      $this->currentController = ucwords($url[0]);
      // unset first index
      unset($url[0]);
    }
    // require the file
    require '../app/controllers/' . $this->currentController.'.php';
    // instantiate controller class
    $this->currentController = new $this->currentController;
  }
  public function getUrl()
  {
    // we used access to redirect everything to index.php by default and everything after that to become a parameter that we can get in the $_GET[] super global
  
    if (isset($_GET['url'])) {
      $url = rtrim($_GET['url'], '/'); // remove trailing slash if any
      $url = filter_var($url, FILTER_SANITIZE_URL); // sanitize url
      $url = explode('/', $url); // convert to array;
      return $url;
   
    };
    
  }
}
