<?php

require_once( __DIR__ . '/DAO.php');

class ActDAO extends DAO {

  public function search($dag = ''){
    $sql = "SELECT activiteiten.*, isb_hours.id, isb_hours.locatie_id, isb_hours.beginuur, isb_hours.dag_id, isb_days.dagen
            FROM activiteiten
            INNER JOIN isb_hours
            ON activiteiten.id = isb_hours.activiteit_id
            INNER JOIN isb_days
            ON isb_hours.dag_id = isb_days.id WHERE 1";

    if (!empty($dag)) {
      $sql .= " AND isb_hours.dag_id = :dag ";
    }

    // $sql .= " ORDER BY `Overall` DESC LIMIT :max";

    $stmt = $this->pdo->prepare($sql);
    if (!empty($dag)) {
      $stmt->bindValue(':dag', $dag);
    }
    // if (!empty($nationality)) {
    //   $stmt->bindValue(':nationality', $nationality);
    // }
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
