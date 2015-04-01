<?php


/**
* @Entity
* @Table(name="enseignants")
**/
class Enseignant implements Jsonserializable
{
	

	/** @Id @Column(type="integer") @GeneratedValue **/
	private $id;
	/** @Column(type="string") **/
	private $nom;
	/** @Column(type="string") **/
	private $prenom;
	/** @Column(type="string") **/
	private $photo;
	/** @Column(type="string") **/
	private $tel;
	/** @Column(type="string") **/
	private $email;
	/** @Column(type="string") **/
	private $adresse;
	/** @Column(type="string") **/
	private $ville;
	/** @Column(type="string") **/
	private $nationnalite;
	/** @Column(type="string") **/
	private $groupeSanguin;
	/** @Column(type="string") **/
	private $situationFamilliale;

	function __construct(argument)
	{
		# code...
	}
}
?>