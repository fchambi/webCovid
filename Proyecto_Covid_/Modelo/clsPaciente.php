<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clsPaciente
 *
 * @author Dell
 */

include_once('clsConexion.php');
class clsPaciente extends Conexion {
          //put your code here
    private $Id_paciente;
    private $nombre;
    private $CI;
    private $Fecha_nac;
    private $apellido;
    private $calle;
    private $avenida;
    private $zona;
    private $telefono;
    public function __construct($nom="",$ape="",$es="",$c="",$fc="",$cal="",$ave="",$zon="",$te="") {
        $this->Id_paciente=0;
        $this->nombre=$nom;
        $this->apellido=$ape;
        $this->estado=$es;
        $this->CI=$c;
        $this->Fecha_nac=$fc;
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
    public function setApellido($n=""){
        $this->apellido=$n;
    }
    public function setEstado($n=""){
        $this->estado=$n;
    }
    public function setCI($n=""){
        $this->CI=$n;
    }
    public function setFechaNac($n=""){
        $this->Fecha_nac=$n;
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
    public function getApellido(){
        return $this->apellido;
    }   
    public function getCI(){
        return $this->CI;
    }    
    public function getEstado(){
        return $this->estado;
    }   
    public function getFechaNac(){
        return $this->Fecha_nac;
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
       $sql="insert into paciente(nombre,apellido,estado,CI,Fecha_Nac,calle,avenida,zona,telefono)
	   values('$this->nombre','$this->apellido','$this->estado','$this->CI','$this->Fecha_nac','$this->avenida','$this->calle','$this->avenida','$this->zona','$this->telefono')";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function modificar() {
	$sql="update paciente set nombre='$this->nombre',apellido='$this->apellido',estado='$this->estado',CI='$this->CI',Fecha_Nac='$this->Fecha_nac',calle='$this->calle',avenida='$this->avenida',
	zona='$this->zona',telefono='$this->telefono' where Id_paciente='$this->Id_paciente'";	
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	public function eliminar(){
		$sql="delete from paciente where Id_paciente='$this->Id_paciente";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}										

	public function buscar()
	{
		$sql="select * from paciente";
		return parent::ejecutar($sql);
	}
    //put your code here
}
