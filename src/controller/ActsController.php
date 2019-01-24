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
      $activiteiten = $this->actDAO->search($_GET['dag'], $_GET['soort'], $_GET['locatie']);
      $this->set('dag',$_GET['dag']);
      $this->set('soort',$_GET['soort']);
      $this->set('locatie',$_GET['locatie']);
      $this->set('currentDay', $_GET['dag']);
      $this->set('currentSoort', $_GET['soort']);
      $this->set('currentLocatie', $_GET['locatie']);
    }else{
      $activiteiten = $this->actDAO->search();
      $this->set('dag', 1);
      $this->set('soort', '');
      $this->set('locatie', '');
      $this->set('currentDay',  1);
      $this->set('currentSoort', '');
      $this->set('currentLocatie', '');
    }

    $this->set('activiteiten', $activiteiten);

    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {

        header('Content-Type: application/json');
        echo json_encode($players);
        exit();
    }
  }
  public function view() {
    $this->set('currentPage', 'programma');
    if(!empty($_GET['id'])) {
      //voor de detailpage
      $actId = $_GET['id'];
      $act = $this->actDAO->selectById($actId);
      $this->set('act', $act);
    }

    if(empty($act)){
      //id validatie
      $_SESSION['error'] = 'Unknown act';
      header('Location: index.php');
      exit();
    }

  }
}
