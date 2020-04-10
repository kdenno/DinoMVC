<?php
class Pages extends Controller{
  private $postModel;
  public function __construct()
  {
    $this->postModel = $this->model('Post');
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
