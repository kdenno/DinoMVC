<?php
class Pages extends Controller{
  public function __construct()
  {
  }
  public function index() {
    // since index is the default method 
    $data = ['title'=>'Welcome'];
    $this->loadView('pages/index', $data);
  }
  public function about() {
    $this->loadView('pages/about');
  }
}
