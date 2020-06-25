<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clsEnfermedadesBase
 *
 * @author Dell
 */
class clsEnfermedadesBase {
    private $Id_enfermedad_base;
    private $Nombre_enfermedad;
    private $Observacion;
    private $Id_paciente;
    public function __construct($nom="",$Obs="",$pac=0) {
        $this->Id_enfermedad_base=0;
        $this->Nombre_enfermedad=$nom;
        $this->Observacion=$Obs;
        $this->Id_paciente=$pac;
    }
    public function __destruct() {
        
    }
    public function setNombreEnfermedad($n=""){
        $this->Nombre_enfermedad=$n;
    }
    public function setObservacion($n=""){
        $this->Observacion=$n;
    }
    public function setIdPaciente($n=0){
        $this->Id_paciente=$n;
    }
    public function getNombreEnfermedad(){
        return $this->Nombre_enfermedade;
    }   
    public function getObservacion(){
        return $this->Observacion;
    }   
    public function getIdPaciente(){
        return $this->Id_paciente;
    }   
    public function guardar()
	{
       $sql="insert into Enfermedad_base(Nombre_enfermedad,Observacion,Id_paciente)
	   values('$this->Nombre_enfermedad','$this->Observacion','$this->Id_paciente')";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function modificar() {
	$sql="update Enfermedad_base set Nombre_enfermedad='$this->Nombre_enfermedad',Observacion='$this->Observacion',Id_paciente='$this->Id_paciente'
	 where Id_enfermedad_base='$this->Id_enfermedad_base'";	
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	public function eliminar(){
		$sql="delete from Enfermedad_base where Id_enfermedad_base='$this->Id_enfermedad_base";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}										

	public function buscar()
	{
		$sql="select * from Enfermedad_base";
		return parent::ejecutar($sql);
	}		
    //put your code here
}
