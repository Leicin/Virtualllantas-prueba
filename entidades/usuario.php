<?php

class Usuarios
{

	private $id;
	private $user;
	private $Clave;
	

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getUser()
	{
		return $this->user;
	}

	public function setUser($user)
	{
		$this->user = $user;
	}

	public function getClave()
	{
		return $this->Clave;
	}

	public function setClave($Clave)
	{
		$this->Clave = $Clave;
	}
}
