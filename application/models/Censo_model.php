<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Censo_model extends CI_Model
{
	
	//OBTIENE INGRESOS ENTRE FECHA
	public function getAll($desde,$hasta){
		$query = $this->db->query("SELECT DISTINCT SUBSTRING(E.DESCRIP,1,4)+' '+LTRIM(Str(F.NRO_CA, 25))CAMA,B.RUT_NUM,RTRIM(LTRIM(".
			"B.A_PAT))+' '+RTRIM(LTRIM(B.A_MAT))+' '+RTRIM(LTRIM(B.NOMBRE))   as PACIENTE ,".
								"Convert(char(10), A.FECHAINI, 103)FECHAINI,I.HORA,c.NOMBRE as PREVISION,a.NRO_FI FICHA ".
							"FROM HOS_GESTIONCAMA A, PACIENTE B,previs C,SECTOR D,PIEZA E,CAMA F,FIC_PAC G,ficha H,HOS_HORAINGRESO I ".
							"WHERE ((a.RUT_NUM=b.RUT_NUM) AND (a.ID_ESTADOCAMA=18)AND(A.FECHA BETWEEN '$desde' AND '$hasta') AND (A.NRO_FI=G.NRO_FI)AND (G.NRO_FI=H.NRO_FI) AND(H.RUT_INS=C.RUT_NUM)AND (a.ID_CAMA=f.ID_CAMA) ".
							"AND(d.ESTADO=1)AND(D.COD_SEC=E.COD_SEC AND E.ESTADO=1)AND (E.COD_PIE=F.COD_PIE) AND A.NRO_FI=I.NRO_FI)
							GROUP BY F.NRO_CA,B.RUT_NUM,B.A_PAT,B.A_MAT,B.NOMBRE,FECHAINI,I.HORA,c.NOMBRE,A.NRO_FI,E.DESCRIP");

		if ($query->num_rows() > 0) {
			return $query->result_array();
		}else{
			return false;
		}
	}

	//OBTIENE INGRESOS DE UN DIA ESPECIFICO
	public function getDia($desde){

		$originalDate = $desde;
		$newDate = date("d/m/Y", strtotime($originalDate));

		$query = $this->db->query("SELECT DISTINCT SUBSTRING(E.DESCRIP,1,4)+' '+LTRIM(Str(F.NRO_CA, 25))CAMA,B.RUT_NUM,RTRIM(LTRIM(".
			"B.A_PAT))+' '+RTRIM(LTRIM(B.A_MAT))+' '+RTRIM(LTRIM(B.NOMBRE))   as PACIENTE ,".
								"Convert(char(10), A.FECHAINI, 103)FECHAINI,I.HORA,c.NOMBRE as PREVISION,a.NRO_FI FICHA ".
							"FROM HOS_GESTIONCAMA A, PACIENTE B,previs C,SECTOR D,PIEZA E,CAMA F,FIC_PAC G,ficha H,HOS_HORAINGRESO I ".
							"WHERE ((a.RUT_NUM=b.RUT_NUM) AND (a.ID_ESTADOCAMA=18)AND(CONVERT(VARCHAR(10), A.FECHA,103)='$newDate') AND (A.NRO_FI=G.NRO_FI)AND (G.NRO_FI=H.NRO_FI) AND(H.RUT_INS=C.RUT_NUM)AND (a.ID_CAMA=f.ID_CAMA) ".
							"AND(d.ESTADO=1)AND(D.COD_SEC=E.COD_SEC AND E.ESTADO=1)AND (E.COD_PIE=F.COD_PIE) AND A.NRO_FI=I.NRO_FI) ".
							"GROUP BY F.NRO_CA,B.RUT_NUM,B.A_PAT,B.A_MAT,B.NOMBRE,FECHAINI,I.HORA,c.NOMBRE,A.NRO_FI,E.DESCRIP");

		if ($query->num_rows() > 0) {
			return $query->result_array();
		}else{
			return  false;
		}
	}

	//OBTIENE TODOS LOS EGRESOS ENTRE FECHAS
	public function getAllEgresos($desde,$hasta){
		$originalDate1 = $desde;
		$newDate1 = date("d/m/Y", strtotime($originalDate1));

		$originalDate2 = $hasta;
		$newDate2 = date("d/m/Y", strtotime($originalDate2));

		$query = $this->db->query("SELECT C.RUT_NUM, RTRIM(LTRIM(C.A_PAT))+' '+RTRIM(LTRIM(C.A_MAT))+' '+C.NOMBRE PACIENTE, A.NRO_FI,CONVERT(VARCHAR(10),A.FECHA,103)FECHA,CONVERT(VARCHAR(10),A.FECHA_INI,103)FECHA_INI,DATEDIFF(DAY, A.FECHA_INI, A.FECHA)AS ESTADA,CONVERT(VARCHAR(17),A.FECHA,108)HORA,".
				"SUBSTRING(F.DESCRIP,1,4)+' '+LTRIM(Str(G.NRO_CA, 25))CAMA,H.ID_AREA NIVEL ".
				"from HOS_ALTA A,FIC_PAC B,PACIENTE C,HOS_GESTIONCAMA D,SECTOR E,PIEZA F,CAMA G,HOS_NIVELESCUIDADO H ".
				"where CONVERT(VARCHAR(10),A.FECHA,103)>='$newDate1' AND CONVERT(VARCHAR(10),A.FECHA,103)<='$newDate2' AND A.NRO_FI=B.NRO_FI AND B.RUT_NUM=C.RUT_NUM ".
				"AND D.ID_ESTADOCAMA=2 AND D.NRO_FI=A.NRO_FI AND D.ID_CAMA=G.ID_CAMA AND G.COD_PIE=F.COD_PIE AND F.COD_SEC=E.COD_SEC ".
				"AND A.ID_NIVEL=H.ID_AREA");


		if ($query->num_rows() > 0) {
			return $query->result_array();
		}else{
			return false;
			//return  $this->db->last_query();
		}
	}

	//OBTIENE EGRESOS DEL DIA SELECCIONADO
	public function getEgresosDia($fecha){
		$originalDate = $fecha;
		$newDate = date("d/m/Y", strtotime($originalDate));

		$query = $this->db->query("SELECT C.RUT_NUM, RTRIM(LTRIM(C.A_PAT))+' '+RTRIM(LTRIM(C.A_MAT))+' '+C.NOMBRE PACIENTE, A.NRO_FI,CONVERT(VARCHAR(10),A.FECHA,103)FECHA,CONVERT(VARCHAR(10),A.FECHA_INI,103)FECHA_INI,DATEDIFF(DAY, A.FECHA_INI, A.FECHA)AS ESTADA,CONVERT(VARCHAR(17),A.FECHA,108)HORA,".
				"SUBSTRING(F.DESCRIP,1,4)+' '+LTRIM(Str(G.NRO_CA, 25))CAMA,H.ID_AREA NIVEL ".
				"from HOS_ALTA A,FIC_PAC B,PACIENTE C,HOS_GESTIONCAMA D,SECTOR E,PIEZA F,CAMA G,HOS_NIVELESCUIDADO H ".
				"where CONVERT(VARCHAR(10),A.FECHA,103)='$newDate' AND A.NRO_FI=B.NRO_FI AND B.RUT_NUM=C.RUT_NUM ".
				"AND D.ID_ESTADOCAMA=2 AND D.NRO_FI=A.NRO_FI AND D.ID_CAMA=G.ID_CAMA AND G.COD_PIE=F.COD_PIE AND F.COD_SEC=E.COD_SEC ".
				"AND A.ID_NIVEL=H.ID_AREA");

		if ($query->num_rows() > 0) {
			return $query->result_array();
		}else{
			return false;
		}
	}

}