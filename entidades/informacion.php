<?php

class Informacion {

    private $Id;
    private $Titulo;
    private $Contenido;
    private $Imagen;
    private $Dirre_correo;


    public function getId(){
		return $this->Id;
	}

	public function setId($Id){
		$this->Id = $Id;
	}

	public function getTitulo(){
		return $this->Titulo;
	}

	public function setTitulo($Titulo){
		$this->Titulo = $Titulo;
	}

	public function getContenido(){
		return $this->Contenido;
	}

	public function setContenido($Contenido){
		$this->Contenido = $Contenido;
	}

	public function getFoto(){
		return $this->Foto;
	}

	public function setFoto($Foto){
		$this->Foto = $Foto;
	}


	public function getDirre_correo(){
		return $this->Dirre_correo;
	}

	public function setDirre_correo($Dirre_correo){
		$this->Dirre_correo = $Dirre_correo;
	}

}