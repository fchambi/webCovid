<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clsSintoma
 *
 * @author Dell
 */
class clsSintoma extends Conexion {
          //put your code here		
    //put your code here
    private $Id_sintoma;
    private $Nombre;
    private $Nivel;
    public function __construct($nom="",$Niv="") {
        $this->Id_sintoma=0;
        $this->Nombre=$nom;
        $this->Nivel=$Niv;
    }
    public function __destruct() {
        
    }
    public function setNombreSintoma($n=""){
        $this->Nombre=$n;
    }
    public function setNivel($n=""){
        $this->Nivel=$n;
    }
    public function getNombre(){
        return $this->Nombre;
    }   
    public function getNivel(){
        return $this->Nivel;
    }   
    public function guardar()
	{
       $sql="insert into Sintoma (Nombre,Nivel)
	   values('$this->Nombre','$this->Nivel')";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function modificar() {
	$sql="update Sintoma set Nombre='$this->Nombre',Nivel='$this->Nivel'
	 where Id_sintoma='$this->Id_sintoma'";	
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	public function eliminar(){
		$sql="delete from Sintoma where Id_sintoma='$this->Id_sintoma";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}										

	public function buscar()
	{
		$sql="select * from Sintoma";
		return parent::ejecutar($sql);
	}		
}
