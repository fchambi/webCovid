<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clsSeguimiento
 *
 * @author Dell
 */
class clsSeguimiento extends Conexion{
          //put your code here		
    //put your code here
    private $Id_seguimiento;
    private $Fase;
    private $Observacion;
    private $Id_orden;
    private $Id_doctor;
    public function __construct($idoc=0,$idord=0,$fas="",$Obs="") {
        $this->Id_seguimiento=0;
        $this->Id_doctor=$idoc;
        $this->Id_orden=$idord;
        $this->Fase=$fas;
        $this->Observacion=$Obs;
        
    }
    public function __destruct() {
        
    }
    public function setIdOrden($n=0){
        $this->Id_orden=$n;
    }
    public function setIdDoctor($n=0){
        $this->Id_doctor=$n;
    }
    public function setFase($n=""){
        $this->Fase=$n;
    }
    public function setObservacion($n=""){
        $this->Observacion=$n;
    }
    public function getIdDoctor(){
        return $this->Id_doctor;
    }   
    public function getIdOrden(){
        return $this->Id_orden;
    }   
    public function getFase(){
        return $this->Fase;
    }   
    public function getObservacion(){
        return $this->Observacion;
    }   
    public function guardar()
	{
       $sql="insert into Seguimiento (Id_doctor,Id_orden,Fase,Observacion)
	   values('$this->Id_doctor','$this->Id_orden','$this->Fase','$this->Observacion')";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}	
        	
        public function modificar() {
	$sql="update Seguimiento set Id_doctor='$this->Id_doctor',Id_orden='$this->Id_orden',Fase='$this->Fase',Observacion='$this->Observacion'
	 where Id_seguimiento ='$this->Id_seguimiento '";	
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	public function eliminar(){
		$sql="delete from Seguimiento where Id_seguimiento ='$this->Id_seguimiento' ";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}										
	public function buscar()
	{
		$sql="select * from Seguimiento";
		return parent::ejecutar($sql);
	}		
}
