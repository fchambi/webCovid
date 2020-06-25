<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clsOrden
 *
 * @author Dell
 */
class clsOrden extends Conexion {
    //put your code here
    private $Id_orden;
    private $Id_hospital;
    private $Id_paciente;
    private $Fecha_ingreso;
    private $Hora_ingreso;
    public function __construct($hos=0,$pac=0,$fec="",$ho="") {
        $this->Id_orden=0;
        $this->Id_hospital=$hos;
        $this->Id_paciente=$pac;
        $this->Fecha_ingreso=$fec;
        $this->Hora_ingreso=$ho;
    }
    public function __destruct() {      
    }
    public function setId_hospital($hos=0){
        $this->Id_hospital=$hos;
    }
    public function setId_paciente($pac=0){
        $this->Id_paciente=$pac;
    }
    public function setFecha_Ingreso($c=""){
        $this->Fecha_ingreso=$c;
    }
    public function setHora_Ingreso($c=""){
        $this->Hora_ingreso=$c;
    }
    public function getId_hospital(){
        return $this->Id_hospital;
    }
    public function getId_paciente(){
        return $this->Id_paciente;
    }
    public function getFecha_ingreso(){
        return $this->Fecha_ingreso;
    }
    public function getHora_ingreso(){
        return $this->Hora_ingreso;
    }
    public function guardar()
	{
       $sql="insert into orden(Id_hospital,Id_paciente,Fecha_ingreso,Hora_ingreso)
	   values('$this->Id_hospital','$this->Id_paciente','$this->Fecha_ingreso','$this->Hora_ingreso')";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function modificar() {
	$sql="update orden set Id_hospital='$this->Id_hospital',Id_paciente='$this->Id_paciente',Fecha_ingreso='$this->Fecha_ingreso',
	Hora_ingreso='$this->Hora_ingreso' where Id_orden='$this->Id_orden'";	
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	public function eliminar(){
		$sql="delete from orden where Id_orden='$this->Id_orden'";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}										

	public function buscar()
	{
		$sql="select * from orden";
		return parent::ejecutar($sql);
	}			
}
