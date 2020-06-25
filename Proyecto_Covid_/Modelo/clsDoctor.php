<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clsDoctor
 *
 * @author Dell
 */
class clsDoctor extends Conexion {
          //put your code here		
    //put your code here
    private $Id_doctor;
    private $nombre;
    private $CI;
    private $Fecha_nac;
    private $apellido;
    private $Especialidad;
    private $Turno;
    public function __construct($nom="",$ape="",$c="",$fc="",$esp="",$tur="") {
        $this->Id_doctor=0;
        $this->nombre=$nom;
        $this->apellido=$ape;
        $this->CI=$c;
        $this->Fecha_nac=$fc;
        $this->Especialidad=$esp;
        $this->Turno=$tur;
    }
    public function __destruct() {
        
    }
    public function setNombre($n=""){
        $this->nombre=$n;
    }
    public function setApellido($n=""){
        $this->apellido=$n;
    }
    public function setCI($n=""){
        $this->CI=$n;
    }
    public function setFechaNac($n=""){
        $this->Fecha_nac=$n;
    }
    public function setEspecialidad($n=""){
        $this->Especialidad=$n;
    }
    public function setTurno($n=""){
        $this->Turno=$n;
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
    public function getFechaNac(){
        return $this->Fecha_nac;
    }    
    public function getEspecialidad(){
        return $this->Especialidad;
    }
    public function getTurno(){
        return $this->Turno;
    }
    public function guardar()
	{
       $sql="insert into doctor(Nombre,Apellido,CI,FechaNac,Especialidad,Turno)
	   values('$this->nombre','$this->apellido','$this->estado','$this->CI','$this->Fecha_nac','$this->Especialidad','$this->Turno')";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function modificar() {
	$sql="update doctor set Nombre='$this->nombre',Apellido='$this->apellido',CI='$this->CI',FechaNac='$this->Fecha_nac',Especialidad='$this->Especialidad',Turno='$this->Turno'
	 where Id_doctor='$this->Id_doctor'";	
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	public function eliminar(){
		$sql="delete from doctor where Id_doctor='$this->Id_doctor";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}										

	public function buscar()
	{
		$sql="select * from doctor";
		return parent::ejecutar($sql);
	}		
}
