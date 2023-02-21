<?php
require_once('Model/Employe.php');
class Pilote extends Employe
{

    protected bool $CommandantdeBord;
    protected int $nombreheurevol;
    public static $nombre = 0;

    public const agemin = 20;
    public const agemax = 60;


    public function __construct(string $nom, string $prenom, int $year, int $month, int $day,int $nombreheurevol, bool $CommandantdeBord)
    {
        parent::__construct($nom, $prenom, $year, $month, $day);
        $this->addnombre();
        $this->setCommandantdeBord($CommandantdeBord);
        $this->setNombreheurevol($nombreheurevol);

    }

    public function SePresenter()
    {
        echo"Bonjour je m'appelle " . $this->prenom . "  " . $this->nom . " Né le ";
        echo$this->datenaissance->format('Y-m-d');
        echo ", J'ai " . $this->nombreheurevol . " Heure de Vol ";
        if($this->isCommandantdeBord()){
            echo "Et Je suis Commandant de Bord";
        }
        else{
            echo "Et Je ne suis pas Commandant de Bord";

        }
    }


    public function getnombre(){
        return self::$nombre;
    }
    public function addnombre(){
        self::$nombre++;
    }


    public function isCommandantdeBord(): bool
    {
        return $this->CommandantdeBord;
    }

    public function setCommandantdeBord(bool $CommandantdeBord): void
    {
        $this->CommandantdeBord = $CommandantdeBord;
    }


    public function getNombreheurevol(): int
    {
        return $this->nombreheurevol;
    }

    public function setNombreheurevol(int $nombreheurevol): void
    {
        $this->nombreheurevol = $nombreheurevol;
    }


}


