<?php
class HomePages extends Controller {

  public function index() {
    $data = [
      'title' => "Welcome to the HomePage"
    ];
    $this->view('homepages/index', $data);
  }
}