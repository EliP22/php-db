<?php
class Comic{
	private $nombre;
	private $desc;
	private $imgP;
	private $fileP;
	
	public function __Comic(){
			$this->$nombre = "";
			$this->$desc = "";
			$this->$imgP = "";
			$this->$linkP = "";
		}
	
	public function __Comic($nom,$des,$img,$link){
			$this->$nombre = $nom;
			$this->$desc = $des;
			$this->$imgP = $img;
			$this->$linkP = $linkl;
		}
	//Sets
	public function setNom($nom){
		$this->$nombre = $nom;
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
	public function setLink($link){
		$this->$linkP = $link;
		}
		
		
	//Gets
	public function getNom(){
		return $this->$Nombre;
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
	public function getLink(){
		return $this->$linkP;
		}
	}


?>