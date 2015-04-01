<?php 
/**
	L'entité Etudiant
*/
//namespace Api\entities;
/**
* @Entity
* @Table(name="etudiants")
**/
class Etudiant implements Jsonserializable
{

	/** @Id @Column(type="integer") @GeneratedValue **/
	private $id;
	/** @Column(type="string") **/
	private $nom;
	/** @Column(type="string") **/
	private $prenom;
	/** @Column(type="string") **/
	private $tel;
	/** @Column(type="string") **/
	private $email;
	/** @Column(type="string") **/
	private $cne;
	/** @Column(type="string") **/
	private $adresse;
	/** @Column(type="datetime") **/
	private $dateNaissance;
    /** @Column(type="string") **/
    private $photo;
	
    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
   

    /**
     * Gets the value of nom.
     *
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Sets the value of nom.
     *
     * @param mixed $nom the nom
     *
     * @return self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Gets the value of prenom.
     *
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Sets the value of prenom.
     *
     * @param mixed $prenom the prenom
     *
     * @return self
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Gets the value of tel.
     *
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Sets the value of tel.
     *
     * @param mixed $tel the tel
     *
     * @return self
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Gets the value of email.
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the value of email.
     *
     * @param mixed $email the email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets the value of cne.
     *
     * @return mixed
     */
    public function getCne()
    {
        return $this->cne;
    }

    /**
     * Sets the value of cne.
     *
     * @param mixed $cne the cne
     *
     * @return self
     */
    public function setCne($cne)
    {
        $this->cne = $cne;

        return $this;
    }

    /**
     * Gets the value of adresse.
     *
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Sets the value of adresse.
     *
     * @param mixed $adresse the adresse
     *
     * @return self
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Gets the value of dateNaissance.
     *
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Sets the value of dateNaissance.
     *
     * @param mixed $dateNaissance the date naissance
     *
     * @return self
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }


    public function jsonSerialize() {
        return [
            'id' => $this->id,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'tel' => $this->tel,
            'email' => $this->email,
            'cne' => $this->cne,
            'adresse' => $this->adresse,
            'dateNaissance' => $this->dateNaissance,
            'photo' => $this->photo
        ];
    }


    /**
     * Gets the value of photo.
     *
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Sets the value of photo.
     *
     * @param mixed $photo the photo
     *
     * @return self
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }
}
 ?>