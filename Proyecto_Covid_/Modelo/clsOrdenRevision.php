<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clsOrdenRevision
 *
 * @author Dell
 */
class clsOrdenRevision extends Conexion {
    //put your code here
        //put your code here
    private $Id_revision;
    private $Id_doctor;
    private $Id_paciente;
    private $Fecha_revision;
    private $Descripcion;
    public function __construct($doc=0,$pac=0,$fec="",$des="") {
        $this->Id_revision=0;
        $this->Id_doctor=$doc;
        $this->Id_paciente=$pac;
        $this->Fecha_revision=$fec;
        $this->Descripcion=$des;
    }
    public function __destruct() {
        
    }
    public function setDoctor($n=0){
        $this->Id_doctor=$n;
    }
    public function setPaciente($n=0){
        $this->Id_paciente=$n;
    }
    public function setFechaRevision($n=""){
        $this->Fecha_revision=$n;
    }
    public function setDescripcion($n=""){
        $this->Descripcion="";
    }
    public function getDoctor(){
        return $this->Id_doctor;
    }
    public function getPaciente(){
        return $this->Id_paciente;
    }
    public function getFechaRevision(){
        return $this->Fecha_revision;
    }
    public function getDescripcion(){
        return $this->Descripcion;
    }
    public function guardar()
	{
       $sql="insert into Orden_Revision(Id_paciente,Id_doctor,Fecha_revision,Descripcion)
	   values('$this->Id_paciente','$this->Id_doctor','$this->Fecha_revision','$this->Descripcion')";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function modificar() {
	$sql="update Orden_Revision set Id_paciente='$this->Id_paciente',Id_doctor='$this->Id_doctor',Fecha_revision='$this->Fecha_revision',
	Descripcion='$this->Descripcion' where Id_revision='$this->Id_revision'";	
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	public function eliminar(){
		$sql="delete from Orden_Revision where Id_revision='$this->Id_revision'";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}										
	public function buscar()
	{
		$sql="select * from Orden_Revision ";
		return parent::ejecutar($sql);
	}			
}
