<?php 
	defined('BASEPATH') OR 	exit ('No se encuetra el script');

	/**
	* 
	*/
	class Prueba extends CI_Controller{


		function reandom($num='3'){
			$datos = array();
			for ($i=0; $i < $num; $i++) { 
				for ($j=0; $j < $num; $j++) { 
					$datos[$i][$j]=rand(1, 100);
				}
			}
			$out='';
			$out .= '<table>';
			for ($i=0; $i < $num; $i++) { 
				$out .= '<tr>';
				for ($j=0; $j < $num; $j++) { 
					$out .='<td>'.$datos[$i][$j].'<td>';
				}
				$out .= '</tr>';
			}
			$out .= '</table>';
			echo $out;
		}
		
	}

?>