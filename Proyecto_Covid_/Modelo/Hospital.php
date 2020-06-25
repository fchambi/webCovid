<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Hospital
 *
 * @author Dell
 */
include_once('clsConexion.php');
class Hospital extends Conexion {
    //put your code here
        //put your code here
    private $Id_hospital;
    private $nombre;
    private $calle;
    private $avenida;
    private $zona;
    private $telefono;
    public function __construct($nom="",$cal="",$ave="",$zon="",$te="") {
        $this->Id_hospital=0;
        $this->nombre=$nom;
        $this->avenida=$ave;
        $this->calle=$cal;
        $this->zona=$zon;
        $this->telefono=$te;     
    }
    public function __destruct() {
        
    }
    public function setNombre($n=""){
        $this->nombre=$n;
    }
    public function setAvenida($n=""){
        $this->avenida=$n;
    }
    public function setCalle($c=""){
        $this->calle=$c;
    }
    public function setZona($zn=""){
        $this->zona=$zn;
    }
    public function setTelefono($te=""){
        $this->telefono=$te;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    public function getAvenida(){
        return $this->avenida;
    }
    public function getCalle(){
        return $this->calle;
    }
    public function getZona(){
        return $this->zona;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function guardar()
	{
       $sql="insert into hospital(nombre,calle,avenida,zona,telefono)
	   values('$this->nombre','$this->avenida','$this->calle','$this->avenida','$this->zona','$this->telefono')";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function modificar() {
	$sql="update hospital set nombre='$this->nombre',calle='$this->calle',avenida='$this->avenida',
	zona='$this->zona',telefono='$this->telefono' where Id_hospital='$this->Id_hospital'";	
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	public function eliminar(){
		$sql="delete from hospital where Id_hospital='$this->Id_hospital'";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}										

	public function buscar()
	{
		$sql="select * from hospital";
		return parent::ejecutar($sql);
	}			
}
