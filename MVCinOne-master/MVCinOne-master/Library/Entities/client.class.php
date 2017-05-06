<?php

namespace Library\Entities;

class Client extends \Library\Entity{
    private $ncni;
    private $nom;
    private $prenom;
    private $tel;
    private $date_naissance; 
    private $lieu_naissance;
    private $lieu_habitation;
    private $date_inscriptiion;
    
    
    public function getNcni() {
        return $this->ncni;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getTel() {
        return $this->tel;
    }

    public function getDate_naissance() {
        return $this->date_naissance;
    }

    public function getLieu_naissance() {
        return $this->lieu_naissance;
    }

    public function getLieu_habitation() {
        return $this->lieu_habitation;
    }

    public function getDate_inscriptiion() {
        return $this->date_inscriptiion;
    }
    
    //setters
    
    public function setNcni($ncni) {
        $this->ncni = $ncni;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setTel($tel) {
        $this->tel = $tel;
    }

    public function setDate_naissance($date_naissance) {
        $this->date_naissance = $date_naissance;
    }

    public function setLieu_naissance($lieu_naissance) {
        $this->lieu_naissance = $lieu_naissance;
    }

    public function setLieu_habitation($lieu_habitation) {
        $this->lieu_habitation = $lieu_habitation;
    }

    public function setDate_inscriptiion($date_inscriptiion) {
        $this->date_inscriptiion = $date_inscriptiion;
    }



}
