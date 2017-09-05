<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Camas_model extends CI_Model{

	public function sectorH(){
		$query = $this->db->query("SELECT DISTINCT B.DESCRIP +' '+ LTRIM(Str(C.NRO_CA, 25))CAMA, 												C.ID_CAMA,A.COD_SEC CODSECTOR,
									H.ID_ESTADOCAMA AS ESTADO,H.NRO_FI FICHA ". 
									'FROM SECTOR A, PIEZA B, CAMA C 
									LEFT JOIN HOS_GESTIONCAMA H ON C.ID_CAMA=H.ID_CAMA AND H.ESTADO=1 
									WHERE (A.ESTADO=1) AND (A.COD_SEC=B.COD_SEC AND B.ESTADO=1) AND (B.COD_PIE=C.COD_PIE) AND(A.COD_SEC=1)
									ORDER BY CAMA ASC');

		if ($query->num_rows() > 0) {
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function sectorF(){
		$query = $this->db->query("SELECT DISTINCT B.DESCRIP +' '+ LTRIM(Str(C.NRO_CA, 25))CAMA, 												C.ID_CAMA,A.COD_SEC CODSECTOR,
									H.ID_ESTADOCAMA AS ESTADO,H.NRO_FI FICHA ". 
									'FROM SECTOR A, PIEZA B, CAMA C 
									LEFT JOIN HOS_GESTIONCAMA H ON C.ID_CAMA=H.ID_CAMA AND H.ESTADO=1 
									WHERE (A.ESTADO=1) AND (A.COD_SEC=B.COD_SEC AND B.ESTADO=1) AND (B.COD_PIE=C.COD_PIE) AND(A.COD_SEC=2)
									ORDER BY CAMA ASC');

		if ($query->num_rows() > 0) {
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function sectorE(){
		$query = $this->db->query("SELECT DISTINCT B.DESCRIP +' '+ LTRIM(Str(C.NRO_CA, 25))CAMA, 												C.ID_CAMA,A.COD_SEC CODSECTOR,
									H.ID_ESTADOCAMA AS ESTADO,H.NRO_FI FICHA ". 
									'FROM SECTOR A, PIEZA B, CAMA C 
									LEFT JOIN HOS_GESTIONCAMA H ON C.ID_CAMA=H.ID_CAMA AND H.ESTADO=1 
									WHERE (A.ESTADO=1) AND (A.COD_SEC=B.COD_SEC AND B.ESTADO=1) AND (B.COD_PIE=C.COD_PIE) AND(A.COD_SEC=11)
									ORDER BY CAMA ASC');

		if ($query->num_rows() > 0) {
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function sectorM(){
		$query = $this->db->query("SELECT DISTINCT B.DESCRIP +' '+ LTRIM(Str(C.NRO_CA, 25))CAMA, 												C.ID_CAMA,A.COD_SEC CODSECTOR,
									H.ID_ESTADOCAMA AS ESTADO,H.NRO_FI FICHA ". 
									'FROM SECTOR A, PIEZA B, CAMA C 
									LEFT JOIN HOS_GESTIONCAMA H ON C.ID_CAMA=H.ID_CAMA AND H.ESTADO=1 
									WHERE (A.ESTADO=1) AND (A.COD_SEC=B.COD_SEC AND B.ESTADO=1) AND (B.COD_PIE=C.COD_PIE) AND(A.COD_SEC=3)
									ORDER BY CAMA ASC');

		if ($query->num_rows() > 0) {
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function sectorUpc(){
		$query = $this->db->query("SELECT DISTINCT B.DESCRIP +' '+ LTRIM(Str(C.NRO_CA, 25))CAMA, 												C.ID_CAMA,A.COD_SEC CODSECTOR,
									H.ID_ESTADOCAMA AS ESTADO,H.NRO_FI FICHA ". 
									'FROM SECTOR A, PIEZA B, CAMA C 
									LEFT JOIN HOS_GESTIONCAMA H ON C.ID_CAMA=H.ID_CAMA AND H.ESTADO=1 
									WHERE (A.ESTADO=1) AND (A.COD_SEC=B.COD_SEC AND B.ESTADO=1) AND (B.COD_PIE=C.COD_PIE) AND(A.COD_SEC=4)
									ORDER BY CAMA ASC');

		if ($query->num_rows() > 0) {
			return $query->result_array();
		}else{
			return false;
		}
	}

	//OBTIENE DATOS DEL PACIENTE EN LA CAMA SELECCIONADA
	public function getDatos($nrofi){
		$sql = $this->db->query("SELECT RTRIM(LTRIM(B.A_PAT)) +' '+ RTRIM(LTRIM(B.A_MAT))+' '+ RTRIM(LTRIM(B.NOMBRE)) as PACIENTE,A.NRO_FI FICHA,e.NOMBRE PREVIS,a.OBS OBS ".
				'from HOS_GESTIONCAMA a, PACIENTE b,FIC_PAC c,ficha d,previs e
				WHERE a.NRO_FI=c.NRO_FI AND c.RUT_NUM=b.RUT_NUM AND a.NRO_FI='.$nrofi.' AND a.ESTADO=1 AND c.NRO_FI=d.NRO_FI AND d.RUT_INS=e.RUT_NUM');

		if ($sql->num_rows() > 0) {
			return $sql->result_array();
		}else{
			return false;
		}
	}
}