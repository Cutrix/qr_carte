<?php
	namespace Library\Models;
	/*
		Here you put your entities namespace

		example : use \Library\Entities\MyEntity;
	*/
        
        use Library\Entities\chauffeur;
        
	class chauffeurManager_PDO extends ChauffeurManager
	{
		/*
			put here the {name}Manager class methode body for requesting the database
			exemple :
			public function getStatus($Mail) 
			{
				$requete = $this->dao->prepare('SELECT COUNT(adminID) AS nbr FROM  t_admin WHERE adminMail=:adminMail GROUP BY adminID');
					$requete->bindValue(':adminMail', htmlspecialchars($Mail,ENT_QUOTES), \PDO::PARAM_STR);
					return $requete->execute()?$result=$requete->fetch();else false;
					
			}
		*/
               public function add($chauffeur) {
                   $q = $this->dao->prepare("INSERT INTO chauffeur (ncni , nom, prenom ,tel, date_naissance, lieu_naissance, lieu_habitation, date_inscription VALUES (?,?,?,?,?,?,?,?,?)");                   
               }

}