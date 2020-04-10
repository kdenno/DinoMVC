<?php
class Pages extends Controller{
  public function __construct()
  {
  }
  public function index() {
    // since index is the default method 
    $this->loadView('hello');
  }
}
