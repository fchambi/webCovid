<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clsSalida
 *
 * @author Dell
 */
class clsSalida extends Conexion {
          //put your code here		
    //put your code here
    private $Id_salida;
    private $Id_seguimiento;
    private $Fecha_Salida;
    private $Hora_Salida;
    private $Descripcion;
    public function __construct($idseg=0,$fecha="",$hora="",$desc="") {
        $this->Id_salida=0;
        $this->Id_seguimiento=$idseg;
        $this->Fecha_Salida=$fecha;
        $this->Hora_Salida=$hora;
        $this->Descripcion=$desc;
    }
    public function __destruct() {
        
    }
    public function setIdSeguimiento($n=0){
        $this->Id_seguimiento=$n;
    }
    public function setFechaSalida($n=""){
        $this->Fecha_Salida=$n;
    }
    public function setHoraSalida($n=""){
        $this->Hora_Salida=$n;
    }
    public function setDescripcion($n=""){
        $this->Descripcion=$n;
    }
    public function getIdSeguimiento(){
        return $this->Id_seguimiento;
    }   
    public function getFechaSalida(){
        return $this->Fecha_Salida;
    }   
    public function getHoraSalida(){
        return $this->Hora_Salida;
    }   
    public function getDescripcion(){
        return $this->Descripcion;
    }   
    public function guardar()
	{
       $sql="insert into Salida (Id_seguimiento,Fecha_Salida,Hora_Salida,Descripcion)
	   values('$this->Id_seguimiento','$this->Fecha_Salida','$this->Hora_Salida','$this->Descripcion')";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function modificar() {
	$sql="update Salida set Id_seguimiento='$this->Id_seguimiento',Fecha_Salida='$this->Fecha_Salida',Hora_Salida='$this->Hora_Salida',Descripcion='$this->Descripcion'
	 where Id_salida='$this->Id_salida'";	
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	public function eliminar(){
		$sql="delete from Salida where Id_salida='$this->Id_salida";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}										
	public function buscar()
	{
		$sql="select * from Salida";
		return parent::ejecutar($sql);
	}		
}
