<?php

require_once( __DIR__ . '/DAO.php');

class ActDAO extends DAO {

  public function selectById($id) {
    $sql = "SELECT activiteiten.*, isb_hours.beginuur, isb_days.dagen, locaties.locatie, locaties.kaart_img
            FROM activiteiten
            INNER JOIN isb_hours
            ON activiteiten.id = isb_hours.activiteit_id
            INNER JOIN isb_days
            ON isb_hours.dag_id = isb_days.id
            INNER JOIN locaties
            ON isb_hours.locatie_id = locaties.id
            WHERE isb_hours.id = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function search($dag = '', $soort = '', $locatie = ''){
    $sql = "SELECT activiteiten.*, isb_hours.id, isb_hours.locatie_id, isb_hours.beginuur, isb_hours.dag_id, isb_days.dagen
            FROM activiteiten
            INNER JOIN isb_hours
            ON activiteiten.id = isb_hours.activiteit_id
            INNER JOIN isb_days
            ON isb_hours.dag_id = isb_days.id WHERE 1";

    if (!empty($dag)) {
      $sql .= " AND isb_hours.dag_id = :dag ";
    }

    if (!empty($soort)) {
      $sql .= " AND activiteiten.soort = :soort ";
    }

    if (!empty($locatie)) {
      $sql .= " AND isb_hours.locatie_id = :locatie ";
    }

    // $sql .= " ORDER BY `Overall` DESC LIMIT :max";

    $stmt = $this->pdo->prepare($sql);
    if (!empty($dag)) {
      $stmt->bindValue(':dag', $dag);
    }
    if (!empty($soort)) {
      $stmt->bindValue(':soort', $soort);
    }
    if (!empty($locatie)) {
      $stmt->bindValue(':locatie', $locatie);
    }
    // if (!empty($nationality)) {
    //   $stmt->bindValue(':nationality', $nationality);
    // }
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
