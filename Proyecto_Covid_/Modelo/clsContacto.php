<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clsContacto
 *
 * @author Dell
 */
class clsContacto extends Conexion {
          //put your code here		
    //put your code here
    private $Id_contacto;
    private $Id_orden;
    private $nombre;
    private $Tipo;
    public function __construct($nom="",$Tip="") {
        $this->Id_contacto=0;
        $this->nombre=$nom;
        $this->Tipo=$Tip;
    }
    public function __destruct() {
        
    }
    public function setNombre($n=""){
        $this->nombre=$n;
    }
    public function setTipo($n=""){
        $this->Tipo=$n;
    }
    public function setOrden($n=0){
        $this->Id_orden=$n;
    }
    public function getNombre(){
        return $this->nombre;
    }   
    public function getTipo(){
        return $this->Tipo;
    }   
    public function getId_orden(){
        return $this->Id_orden;
    }   
    public function guardar()
	{
       $sql="insert into contacto(Nombre,Tipo,Id_orden)
	   values('$this->nombre','$this->Tipo','$this->Id_orden')";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function modificar() {
	$sql="update contacto set Nombre='$this->nombre',Tipo='$this->Tipo',Id_orden='$this->Id_orden'
	 where Id_contacto='$this->Id_contacto'";	
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	public function eliminar(){
		$sql="delete from contacto where Id_contacto='$this->Id_contacto";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}										

	public function buscar()
	{
		$sql="select * from contacto";
		return parent::ejecutar($sql);
	}		
}
