<?php
namespace Devoir_oop_php_Alexandre\Personne\Personne;
class Personne{
    private $nom;
    private $prenom;
    private $sexe;
    private $age;
    private $err;
    public function __construct($nom, $prenom, $sexe, $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->age = $age;
    }
    public function AffichagePersonne()
    {
        # code...
        $type="";
        if($this->age >= 0)
        {
            if($this->age > 80)
                $type = "Pus Vieux";
            else if($this->age > 50)
                $type = "Vieux";
            else if($this->age > 18)
                $type = "Adulte";
            else if($this->age > 12)
                $type = "Majeur";
            else
                $type = "Enfant";
            echo "Vous etes  <span id='nom'><font color='blue'>".$this->nom."</font></span> <span id='nom'><font color='blue'>".$this->prenom."</font></span> du sexe <span id='nom'><font color='aqua'>".$this->sexe."</font></span> avec Age <font color='green'>".$this->age."</font> Par consequant vous etez <b><font color='cadetblue'>".$type."</font></b><br><br>"; 
        }
        else
            echo "<font color='red'>saisir un age valide</font><br>";
    }

    /**
     * Get the value of err
     */ 
    public function getErr()
    {
        return $this->err;
    }

    /**
     * Set the value of err
     *
     * @return  self
     */ 
    public function setErr($err)
    {
        $this->err = $err;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of sexe
     */ 
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @return  self
     */ 
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}