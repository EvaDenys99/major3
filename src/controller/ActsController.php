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
      // filter
      if (!empty($_GET['action']) && $_GET['action'] == 'filter') {
        $activiteiten = $this->actDAO->search($_GET['dag']);
        $this->set('dag',$_GET['dag']);
      }else{
        $activiteiten = $this->actDAO->search(1);
        $this->set('dag', 1);
      }

      $this->set('activiteiten', $activiteiten);

      // if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {

      //   header('Content-Type: application/json');
      //   echo json_encode($players);
      //   exit();
      // }




  }
  public function view() {

  }
}
