<?php

namespace Library\Entities;


class chauffeur extends \Library\Entity{
    
    private $ncni; 
    private $nom_chauffeur; 
    private $prenom_chauffeur; 
    private $tel; 
    private $date_naissance; 
    private $lieu_naissance;
    private $lieu_habitation;
    private $date_inscription;
    private $matricule; 
    private $secret;    
    
    public function getNcni()
    {
        return $this->ncni;
    }


    public function getNomChauffeur()
    {
        return $this->nom_chauffeur;
    }

   
    public function getPrenomChauffeur()
    {
        return $this->prenom_chauffeur;
    }

    public function getTel()
    {
        return $this->tel;
    }

    
    public function getDateNaissance()
    {
        return $this->date_naissance;
    }

    
    public function getLieuNaissance()
    {
        return $this->lieu_naissance;
    }

   
    public function getLieuHabitation()
    {
        return $this->lieu_habitation;
    }

   
    public function getDateInscription()
    {
        return $this->date_habitation;
    }

    public function getMatricule()
    {
        return $this->matricule;
    }


    public function getSecret()
    {
        return $this->secret;
    }

    //setters

    public function setNcni($ncni) {
        $this->ncni = $ncni;
    }

    public function setNom_chauffeur($nom_chauffeur) {
        $this->nom_chauffeur = $nom_chauffeur;
    }

    public function setPrenom_chauffeur($prenom_chauffeur) {
        $this->prenom_chauffeur = $prenom_chauffeur;
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

    public function setDate_inscription($date_inscription) {
        $this->date_inscription = $date_inscription;
    }

    public function setMatricule($matricule) {
        $this->matricule = $matricule;
    }

    public function setSecret($secret) {
        $this->secret = $secret;
    }


}

