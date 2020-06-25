<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clsSeguimientoSintoma
 *
 * @author Dell
 */
class clsSeguimientoSintoma extends Conexion{
          //put your code here		
    //put your code here
    private $Id_sintoma;
    private $Id_seguimiento;
    public function __construct($idseg=0,$idsin=0) {
        $this->Id_sintoma=$idsin;
        $this->Id_seguimiento=$idseg;
        
    }
    public function __destruct() {
        
    }
    public function setIdSeguimiento($n=0){
        $this->Id_seguimiento=$n;
    }
    public function setIdSintoma($n=0){
        $this->Id_sintoma=$n;
    }
    public function getIdSeguimiento(){
        return $this->Id_seguimiento;
    }   
    public function getIdSintoma(){
        return $this->Id_sintoma;
    }   
    public function guardar()
	{
       $sql="insert into Seguimiento_Sintoma (Id_seguimiento,Id_sintoma)
	   values('$this->Id_seguimiento','$this->Id_sintoma')";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}	
	public function eliminar(){
		$sql="delete from Seguimiento_Sintoma where Id_seguimiento='$this->Id_seguimiento AND Id_sintoma='$this->Id_sintoma  ";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}										
	public function buscar()
	{
		$sql="select * from Seguimiento_Sintoma";
		return parent::ejecutar($sql);
	}		
}
