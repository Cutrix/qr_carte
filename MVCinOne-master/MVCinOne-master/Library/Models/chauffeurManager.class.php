<?php
	namespace Library\Models;
	/*
		Here you put your entities namespace

		example : use \Library\Entities\MyEntity;
	*/
	abstract class ChauffeurManager extends \Library\Managers
	{
		/*
			declare your method metho that while be redeclare in {name}Manager_PDO.class.php

			exemple : abstract public function getStatus($Mail);
		*/
		abstract public function add(\lib\Entities\chauffeur $chauffeur);
	}