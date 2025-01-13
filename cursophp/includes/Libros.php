<?php
class Libro{
	private $nombre;
	private $autor;
	private $desc;
	private $imgP;
	private $fileP;
	
	public function __Libro(){
			$this->$nombre = "";
			$this->$autor = "";
			$this->$desc = "";
			$this->$imgP = "";
			$this->$fileP = "";
		}
	
	public function __Libro($nom,$aut,$des,$img,$file){
			$this->$nombre = $nom;
			$this->$autor = $aut;
			$this->$desc = $des;
			$this->$imgP = $img;
			$this->$fileP = $file;
		}
	//Sets
	public function setNom($nom){
		$this->$nombre = $nom;
		}
	}
	public function setAut($aut){
		$this->$autor = $aut;
		}
	}
	public function setDes($des){
		$this->$desc = $des;
		}
	}
	public function setImg($img){
		$this->$ImgP = $img;
		}
	}
	public function setFile($file){
		$this->$fileP = $file;
		}
	
	//Gets
	public function getNom(){
		return $this->$Nombre;
		}
	}
	public function getAut(){
		return $this->$autor;
		}
	}
	public function getDes(){
		return $this->$Desc;
		}
	}
	public function getImg(){
		return $this->$imgP;
		}
	}
	public function getFile(){
		return $this->$fileP;
		}
	}


?>