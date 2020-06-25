<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clsControl
 *
 * @author Dell
 */
class clsControl extends Conexion{
          //put your code here		
    //put your code here
    private $Id_control;
    private $Id_seguimiento;
    private $Id_revision;
    private $Fecha_control;
    public function __construct($idseguimiento=0,$idrevision=0,$fec="") {
        $this->Id_control=0;
        $this->Id_seguimiento=$idseguimiento;
        $this->Id_revision=$idrevision;
        $this->Fecha_control=$fec;
        
    }
    public function __destruct() {
        
    }
    public function setIdSeguimiento($n=0){
        $this->Id_seguimiento=$n;
    }
    public function setIdRevision($n=0){
        $this->Id_revision=$n;
    }
    public function setFechaControl($n=""){
        $this->Fecha_control=$n;
    }
    public function getIdSeguimiento(){
        return $this->Id_seguimiento;
    }   
    public function getIdRevision(){
        return $this->Id_revision;
    }   
    public function getFechaControl(){
        return $this->Fecha_control;
    }   
    public function guardar()
	{
       $sql="insert into Control (Id_seguimiento,Id_revision,Fecha_control)
	   values('$this->Id_seguimiento','$this->Id_revision','$this->Fecha_control')";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}	
        	
        public function modificar() {
	$sql="update Control set Id_seguimiento='$this->Id_seguimiento',Id_revision='$this->Id_revision',Fecha_control='$this->Fecha_control'
	 where Id_control='$this->Id_control'";	
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	public function eliminar(){
		$sql="delete from Control where Id_control='$this->Id_control' ";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}										
	public function buscar()
	{
		$sql="select * from Control";
		return parent::ejecutar($sql);
	}		
}
