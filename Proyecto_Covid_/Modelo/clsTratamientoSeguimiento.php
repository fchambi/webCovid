<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clsTratamientoSeguimiento
 *
 * @author Dell
 */
class clsTratamientoSeguimiento extends Conexion{
          //put your code here		
    //put your code here
    private $Id_tratamiento;
    private $Id_seguimiento;
    public function __construct($idseg=0,$idtrat=0) {
        $this->Id_tratamiento=$idtrat;
        $this->Id_seguimiento=$idseg;
        
    }
    public function __destruct() {
        
    }
    public function setIdSeguimiento($n=0){
        $this->Id_seguimiento=$n;
    }
    public function setIdTratamiento($n=0){
        $this->Id_tratamiento=$n;
    }
    public function getIdSeguimiento(){
        return $this->Id_seguimiento;
    }   
    public function getIdTratamiento(){
        return $this->Id_tratamiento;
    }   
    public function guardar()
	{
       $sql="insert into Tratamiento_Seguimiento (Id_seguimiento,Id_tratamiento)
	   values('$this->Id_seguimiento','$this->Id_tratamiento')";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}	
	public function eliminar(){
		$sql="delete from Tratamiento_Seguimiento where Id_seguimiento='$this->Id_seguimiento AND Id_tratamiento='$this->Id_tratamiento  ";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}										
	public function buscar()
	{
		$sql="select * from Tratamiento_Seguimiento";
		return parent::ejecutar($sql);
	}		
}
