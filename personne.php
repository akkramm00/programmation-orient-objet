<?php
class Personne {
	private string $age;
	private string $prenom;
	
	public function getAge(){
		return $this->age;
	}
	
	public function getPrenom(){
		return $this->prenom;
	}
	
	public function setAge(int $age){
		$this->age=$age;
	}
	
	public function setPrenom(string $prenom){
		$this->prenom=$prenom;
	}
	
	public function __construct(string $prenom, int $age){
		$this->setAge($age);
		$this->setPrenom($prenom);
	}
}
interface PresentationInterface{
	public function sePresenter();
}

class Homme extends Personne implements PresentationInterface{
	
	public function sePresenter(){
		echo("Je suis un Homme de ".$this->getAge()." ans et je m’appelle ".$this->getPrenom())."<br>";
	}
}

class Femme extends Personne implements PresentationInterface{
	
	public function sePresenter(){
		echo("Je suis une Femme age de ".$this->getAge()." et je m’appelle ".$this->getPrenom());
	}
}

$monsieur = new Homme("john","28");
$monsieur->sePresenter();

$femme = new Femme("Marie","27");
$femme->sePresenter();

?>