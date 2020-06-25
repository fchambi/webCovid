<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clsResultado
 *
 * @author Dell
 */
class clsResultado extends Conexion {
          //put your code here		
    //put your code here
    private $Id_prueba;
    private $Nombre_resultado;
    private $Resultado;
    private $Id_revision;
    public function __construct($nom="",$res="",$idrev=0) {
        $this->Id_prueba=0;
        $this->Nombre_resultado=$nom;
        $this->Resultado=$res;
        $this->Id_revision=$idrev;
    }
    public function __destruct() {
        
    }
    public function setNombreResultado($n=""){
        $this->Nombre_resultado=$n;
    }
    public function setResultado($n=""){
        $this->Resultado=$n;
    }
    public function setIdRevision($n=0){
        $this->Id_revision=$n;
    }
    public function getNombreResultado(){
        return $this->Nombre_resultado;
    }   
    public function getResultado(){
        return $this->Resultado;
    }   
    public function getIdRevision(){
        return $this->Id_revision;
    }   
    public function guardar()
	{
       $sql="insert into Resultado (Nombre_resultado,Resultado,Id_revision)
	   values('$this->Nombre_resultado','$this->Resultado','$this->Id_revision')";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function modificar() {
	$sql="update Resultado set Nombre_resultado='$this->Nombre_resultado',Resultado='$this->Resultado',Id_revision='$this->Id_revision'
	 where Id_prueba='$this->Id_prueba'";	
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	public function eliminar(){
		$sql="delete from Resultado where Id_prueba='$this->Id_prueba";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}										

	public function buscar()
	{
		$sql="select * from Resultado";
		return parent::ejecutar($sql);
	}		
}
