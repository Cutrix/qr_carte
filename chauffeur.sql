CREATE database IF NOT exists qr_carte_projects

create table if not exists chauffeur (
	id int unsigned auto_increment,
	ncni varchar(10) not null,
	nom varchar(20) not null,
	prenom varchar(50) not null,
	tel varchar(20) not null,
	date_naissance varchar(50) not null,
	lieu_naissance varchar(50) not null,
	lieu_habitation varchar(30) not null,
	date_inscription date not null,
	primary key(id)
)
