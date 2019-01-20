<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ActDAO.php';

class ActsController extends Controller {

  private $ActDAO;

  function __construct() {
    $this->actDAO = new ActDAO();

  }

  public function index() {
    $this->set('currentPage', 'home');

  }
  public function programma() {
    $this->set('currentPage', 'programma');
  }
  public function view() {

  }
}
