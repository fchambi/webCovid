<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clsTipoTratamiento
 *
 * @author Dell
 */
class clsTipoTratamiento extends Conexion {
          //put your code here		
    //put your code here
    private $Id_tipo_tratamiento;
    private $Nombre;
    public function __construct($nom="") {
        $this->Id_tipo=0;
        $this->Nombre=$nom;
    }
    public function __destruct() {
        
    }
    public function setNombreTipo($n=""){
        $this->Nombre=$n;
    }
    public function getNombre(){
        return $this->Nombre;
    }   
    public function guardar()
	{
       $sql="insert into Tipo_tratamiento (Nombre)
	   values('$this->Nombre','$this->Nivel')";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function modificar() {
	$sql="update Tipo_tratamiento set Nombre='$this->Nombre'
	 where Id_tipo_tratamiento='$this->Id_tipo_tratamiento'";	
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	public function eliminar(){
		$sql="delete from Tipo_tratamiento where Id_tipo_tratamiento='$this->Id_tipo_tratamiento";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}										
	public function buscar()
	{
		$sql="select * from Tipo_tratamiento";
		return parent::ejecutar($sql);
	}		
}
