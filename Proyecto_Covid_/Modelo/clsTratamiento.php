<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clsTratamiento
 *
 * @author Dell
 */
class clsTratamiento extends Conexion {
          //put your code here		
    //put your code here
    private $Id_tratamiento;
    private $Nombre;
    private $Cantidad;
    private $Id_tipo_tratamiento;
    public function __construct($nom="",$cant="",$id_t=0) {
        $this->Id_tratamiento=0;
        $this->Nombre=$nom;
        $this->Cantidad=$cant;
        $this->Id_tipo_tratamiento=$id_t;
    }
    public function __destruct() {
        
    }
    public function setNombreTratamiento($n=""){
        $this->Nombre=$n;
    }
    public function setCantidadTratamiento($n=""){
        $this->Cantidad=$n;
    }
    public function setTipoTratamiento($n=0){
        $this->Id_tipo_tratamiento=$n;
    }
    public function getNombre(){
        return $this->Nombre;
    }   
    public function getCantidad(){
        return $this->Cantidad;
    }   
    public function getTipoTratamiento(){
        return $this->Id_tipo_tratamiento;
    }   
    public function guardar()
	{
       $sql="insert into Tratamiento (Nombre,Cantidad,Id_tipo_tratamiento)
	   values('$this->Nombre','$this->Cantidad','$this->Id_tipo_tratamiento')";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function modificar() {
	$sql="update Tratamiento set Nombre='$this->Nombre',Cantidad='$this->Cantidad',Id_tipo_tratamiento='$this->Id_tipo_tratamiento'
	 where Id_tratamiento='$this->Id_tratamiento'";	
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	public function eliminar(){
		$sql="delete from Tratamiento where Id_tratamiento='$this->Id_tratamiento";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}										
	public function buscar()
	{
		$sql="select * from Tratamiento";
		return parent::ejecutar($sql);
	}		
}
