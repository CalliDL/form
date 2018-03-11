<?php
//Seccion A
$sexo = $_GET['sexo'];
$edad = $_GET['edad'];
$grado = $_GET['grado'];
$titulo = $_GET['titulo'];
$antiguedad = $_GET['antiguedad'];
$cursos = $_GET['cursos'];
$cuales = $_GET['cuales'];
//Seccion A-1
$importancia = $_GET['importancia'];
$razon1_1 = $_GET['razon1_1'];
$contenidos = $_GET['contenidos'];
$razon1_2 = $_GET['razon1_2'];
$pertinente = $_GET['pertinente'];
$razon1_3 = $_GET['razon1_3'];
$narcotrafico = ( empty($_GET['narcotrafico']) ) ? "": $_GET['narcotrafico'];
$violencia1 = ( empty($_GET['violencia1']) ) ? "": $_GET['violencia1'];
$violencia2 = ( empty($_GET['violencia2']) ) ? "": $_GET['violencia2'];
$violencia3 = ( empty($_GET['violencia3']) ) ? "": $_GET['violencia3'];
$violencia4 = ( empty($_GET['violencia4']) ) ? "": $_GET['violencia4'];
$violencia5 = ( empty($_GET['violencia5']) ) ? "": $_GET['violencia5'];
$violencia6 = ( empty($_GET['violencia6']) ) ? "": $_GET['violencia6'];
$violencia7 = ( empty($_GET['violencia7']) ) ? "": $_GET['violencia7'];
$violencia8 = ( empty($_GET['violencia8']) ) ? "": $_GET['violencia8'];
$violencia9 = ( empty($_GET['violencia9']) ) ? "": $_GET['violencia9'];
$violencia10 = ( empty($_GET['violencia10']) ) ? "": $_GET['violencia10'];
$otros = $_GET['otros'];
$elementos= $_GET['elementos'];
$razon1_5 = $_GET['razon1_5'];
$lenguaje = $_GET['lenguaje'];
$razon1_6 = $_GET['razon1_6'];
$experiencia = $_GET['experiencia'];
$experiencia_docente = $_GET['experiencia_docente'];
// Seccion A-2
$estudiantado = $_GET['estudiantado'];
$razon2_1 = $_GET['razon2_1'];
$promocion = $_GET['promocion'];
$razon2_2 = $_GET['razon2_2'];
$comunidad1 = $_GET['comunidad1'];
$comunidad2 = $_GET['comunidad2'];
$comunidad3 = $_GET['comunidad3'];
$comunidad4 = ( empty($_GET['comunidad4']) ) ? "": $_GET['comunidad4'];
$comunidad5 = ( empty($_GET['comunidad5']) ) ? "": $_GET['comunidad5'];
// Seccion A-3
$oportunidades = $_GET['oportunidades'];
$razon3_1 = $_GET['razon3_1'];
$igualdad = $_GET['igualdad'];
$razon3_2 = $_GET['razon3_2'];
// Seccion A-4
$lugar_interior = ( empty($_GET['lugar_interior']) ) ? "": $_GET['lugar_interior'];
$lugar_exterior = ( empty($_GET['lugar_exterior']) ) ? "": $_GET['lugar_exterior'];
$ocasion4_1 = $_GET['ocasion4_1'];
//-----------------------------------------
$Amenazas4_1a = ( empty($_GET['Amenazas4_1a']) ) ? "": $_GET['Amenazas4_1a'];
$quien4_1 = ( empty($_GET['quien4_1']) ) ? "": $_GET['quien4_1'];
$Golpes4_1a = ( empty($_GET['Golpes4_1a']) ) ? "": $_GET['Golpes4_1a'];
$quien4_2 = ( empty($_GET['quien4_2']) ) ? "": $_GET['quien4_2'];
$Humillacion4_1a = ( empty($_GET['Humillacion4_1a']) ) ? "": $_GET['Humillacion4_1a'];
$quien4_3 = ( empty($_GET['quien4_3']) ) ? "": $_GET['quien4_3'];
$Acoso_sexual4_1a = ( empty($_GET['Acoso_sexual4_1a']) ) ? "": $_GET['Acoso_sexual4_1a'];
$quien4_4 = ( empty($_GET['quien4_4']) ) ? "": $_GET['quien4_4'];
$Acoso_laboral4_1a = ( empty($_GET['Acoso_laboral4_1a']) ) ? "": $_GET['Acoso_laboral4_1a'];
$quien4_5 = ( empty($_GET['quien4_5']) ) ? "": $_GET['quien4_5'];
$Violencia_sexual4_1a = ( empty($_GET['Violencia_sexual4_1a']) ) ? "": $_GET['Violencia_sexual4_1a'];
$quien4_6 = ( empty($_GET['quien4_6']) ) ? "": $_GET['quien4_6'];
$Ignorarla4_1a = ( empty($_GET['Ignorarla4_1a']) ) ? "": $_GET['Ignorarla4_1a'];
$quien4_7 = ( empty($_GET['quien4_7']) ) ? "": $_GET['quien4_7'];
$otros4_1a = ( empty($_GET['otros4_1a']) ) ? "": $_GET['otros4_1a'];
$ampliar4_1a = ( empty($_GET['ampliar4_1a']) ) ? "": $_GET['ampliar4_1a'];
//=========================================
$lugar_interior4_2 = ( empty($_GET['lugar_interior4_2']) ) ? "": $_GET['lugar_interior4_2'];
$lugar_exterior4_2 = ( empty($_GET['lugar_exterior4_2']) ) ? "": $_GET['lugar_exterior4_2'];
$ocasion4_2 = $_GET['ocasion4_2'];
//-----------------------------------------
$Amenazas4_2a = ( empty($_GET['Amenazas4_2a']) ) ? "": $_GET['Amenazas4_2a'];
$alumno_quien4_1 = ( empty($_GET['alumno_quien4_1']) ) ? "": $_GET['alumno_quien4_1'];
$Golpes4_2a = ( empty($_GET['Golpes4_2a']) ) ? "": $_GET['Golpes4_2a'];
$alumno_quien4_2 = ( empty($_GET['alumno_quien4_2']) ) ? "": $_GET['alumno_quien4_2'];
$Humillacion4_2a = ( empty($_GET['Humillacion4_2a']) ) ? "": $_GET['Humillacion4_2a'];
$alumno_quien4_3 = ( empty($_GET['alumno_quien4_3']) ) ? "": $_GET['alumno_quien4_3'];
$alumno_Acososexual4_1a = ( empty($_GET['alumno_Acososexual4_1a']) ) ? "": $_GET['alumno_Acososexual4_1a'];
$alumno_quien4_4 = ( empty($_GET['alumno_quien4_4']) ) ? "": $_GET['alumno_quien4_4'];
$alumno_Acoso_laboral4_1a = ( empty($_GET['alumno_Acoso_laboral4_1a']) ) ? "": $_GET['alumno_Acoso_laboral4_1a'];
$alumno_quien4_5 = ( empty($_GET['alumno_quien4_5']) ) ? "": $_GET['alumno_quien4_5'];
$alumno_Violencia_sexual4_1a = ( empty($_GET['alumno_Violencia_sexual4_1a']) ) ? "": $_GET['alumno_Violencia_sexual4_1a'];
$alumno_quien4_6 = ( empty($_GET['alumno_quien4_6']) ) ? "": $_GET['alumno_quien4_6'];
$alumno_Ignorarla4_1a = ( empty($_GET['alumno_Ignorarla4_1a']) ) ? "": $_GET['alumno_Ignorarla4_1a'];
$alumno_quien4_7 = ( empty($_GET['alumno_quien4_7']) ) ? "": $_GET['alumno_quien4_7'];
$alumno_otros4_1a = ( empty($_GET['alumno_otros4_1a']) ) ? "": $_GET['alumno_otros4_1a'];
$alumno_ampliar4_1a = ( empty($_GET['alumno_ampliar4_1a']) ) ? "": $_GET['alumno_ampliar4_1a'];
//=========================================
$lugar_interior4_3 = ( empty($_GET['lugar_interior4_3']) ) ? "": $_GET['lugar_interior4_3'];
$lugar_exterior4_3 = ( empty($_GET['lugar_exterior4_3']) ) ? "": $_GET['lugar_exterior4_3'];
$ocasion4_3 = $_GET['ocasion4_3'];
//-----------------------------------------
$Amenazas4_3a = ( empty($_GET['Amenazas4_3a']) ) ? "": $_GET['Amenazas4_3a'];
$admin_quien4_1 = ( empty($_GET['admin_quien4_1']) ) ? "": $_GET['admin_quien4_1'];
$Golpes4_3a = ( empty($_GET['Golpes4_3a']) ) ? "": $_GET['Golpes4_3a'];
$admin_quien4_2 = ( empty($_GET['admin_quien4_2']) ) ? "": $_GET['admin_quien4_2'];
$Humillacion4_3a = ( empty($_GET['Humillacion4_3a']) ) ? "": $_GET['Humillacion4_3a'];
$admin_quien4_3 = ( empty($_GET['admin_quien4_3']) ) ? "": $_GET['admin_quien4_3'];
$admin_Acoso_sexual4_1a = ( empty($_GET['admin_Acoso_sexual4_1a']) ) ? "": $_GET['admin_Acoso_sexual4_1a'];
$admin_quien4_4 = ( empty($_GET['admin_quien4_4']) ) ? "": $_GET['admin_quien4_4'];
$admin_Acoso_laboral4_1a = ( empty($_GET['admin_Acoso_laboral4_1a']) ) ? "": $_GET['admin_Acoso_laboral4_1a'];
$admin_quien4_5 = ( empty($_GET['admin_quien4_5']) ) ? "": $_GET['admin_quien4_5'];
$admin_Violencia_sexual4_1a = ( empty($_GET['admin_Violencia_sexual4_1a']) ) ? "": $_GET['admin_Violencia_sexual4_1a'];
$admin_quien4_6 = ( empty($_GET['admin_quien4_6']) ) ? "": $_GET['admin_quien4_6'];
$admin_Ignorarla4_1a = ( empty($_GET['admin_Ignorarla4_1a']) ) ? "": $_GET['admin_Ignorarla4_1a'];
$admin_quien4_7 = ( empty($_GET['admin_quien4_7']) ) ? "": $_GET['admin_quien4_7'];
$admin_otros4_1a = ( empty($_GET['admin_otros4_1a']) ) ? "": $_GET['admin_otros4_1a'];
$admin_ampliar4_1a = ( empty($_GET['admin_ampliar4_1a']) ) ? "": $_GET['admin_ampliar4_1a'];
//Seccion A-5
$instancia = $_GET['instancia'];
$cual5 = ( empty($_GET['cual5']) ) ? "": $_GET['cual5'];

$Apoyo_psi = ( empty($_GET['Apoyo_psi']) ) ? "": $_GET['Apoyo_psi'];
$Orientacion_jur = ( empty($_GET['Orientacion_jur']) ) ? "": $_GET['Orientacion_jur'];
$Canalizacion = ( empty($_GET['Canalizacion']) ) ? "": $_GET['Canalizacion'];
$No_se = ( empty($_GET['No_se']) ) ? "": $_GET['No_se'];
$Otros_instancia = $_GET['Otros_instancia'];
//----------------------------------------------
$instancia_aca = $_GET['instancia_aca'];
$cual5aca = ( empty($_GET['cual5aca']) ) ? "": $_GET['cual5aca'];

$Apoyo_psi_aca = ( empty($_GET['Apoyo_psi_aca']) ) ? "": $_GET['Apoyo_psi_aca'];
$Orientacion_jur_aca = ( empty($_GET['Orientacion_jur_aca']) ) ? "": $_GET['Orientacion_jur_aca'];
$Canalizacion_aca = ( empty($_GET['Canalizacion_aca']) ) ? "": $_GET['Canalizacion_aca'];
$No_se_aca = ( empty($_GET['No_se_aca']) ) ? "": $_GET['No_se_aca'];
$Otros_instancia_aca = $_GET['Otros_instancia_aca'];

//----------------------------------------------
$instancia_admin = $_GET['instancia_admin'];
$cual5admin = ( empty($_GET['cual5admin']) ) ? "": $_GET['cual5admin'];

$Apoyo_psi_admin = ( empty($_GET['Apoyo_psi_admin']) ) ? "": $_GET['Apoyo_psi_admin'];
$Orientacion_jur_admin = ( empty($_GET['Orientacion_jur_admin']) ) ? "": $_GET['Orientacion_jur_admin'];
$Canalizacion_admin = ( empty($_GET['Canalizacion_admin']) ) ? "": $_GET['Canalizacion_admin'];
$No_se_admin = ( empty($_GET['No_se_admin']) ) ? "": $_GET['No_se_admin'];
$Otros_instancia_admin = $_GET['Otros_instancia_admin'];

//----------------------------------------------
$uni_a = ( empty($_GET['uni_a']) ) ? "": $_GET['uni_a'];
$uni_b = ( empty($_GET['uni_b']) ) ? "": $_GET['uni_b'];
$uni_c = ( empty($_GET['uni_c']) ) ? "": $_GET['uni_c'];
$uni_d = ( empty($_GET['uni_d']) ) ? "": $_GET['uni_d'];
$uni_e = ( empty($_GET['uni_e']) ) ? "": $_GET['uni_e'];
$uni_f = ( empty($_GET['uni_f']) ) ? "": $_GET['uni_f'];
$como_uni = $_GET['como_uni'];

//----------------------------------------------
$curso_3_ani = $_GET['curso_3_ani'];
$cuales_curso = ( empty($_GET['cuales_curso']) ) ? "": $_GET['cuales_curso'];
//----------------------------------------------
$sancion = $_GET['sancion'];
$cual_sancion = ( empty($_GET['cual_sancion']) ) ? "": $_GET['cual_sancion'];
//----------------------------------------------
$organo = $_GET['organo'];
$cual_organo = ( empty($_GET['cual_organo']) ) ? "": $_GET['cual_organo'];
//----------------------------------------------
$grave1 = $_GET['grave1'];
$grave2 = $_GET['grave2'];
$grave3 = $_GET['grave3'];
$grave4 = ( empty($_GET['grave4']) ) ? "": $_GET['grave4'];
$grave5 = ( empty($_GET['grave5']) ) ? "": $_GET['grave5'];
//----------------------------------------------
$acc1 = $_GET['acc1'];
$acc2 = $_GET['acc2'];
$acc3 = $_GET['acc3'];
$acc4 = ( empty($_GET['acc4']) ) ? "": $_GET['acc4'];
$acc5 = ( empty($_GET['acc5']) ) ? "": $_GET['acc5'];


$fh = fopen("file.csv", "a");

//date_default_timezone_set('America/New_York'); 
//$today = date("m.d.y");   

//the data
$data = "$sexo,$edad,$grado,$titulo,$antiguedad,$cursos,$cuales,$importancia,$razon1_1,$contenidos,$razon1_2,$pertinente,$razon1_3,$narcotrafico,$violencia1,$violencia2,$violencia3,$violencia4,$violencia5,$violencia6,$violencia7,$violencia8,$violencia9,$violencia10,$otros,$elementos,$razon1_5,$lenguaje,$razon1_6,$experiencia,$experiencia_docente,$estudiantado,$razon2_1,$promocion,$razon2_2,$comunidad1,$comunidad2,$comunidad3,$comunidad4,$comunidad5,$oportunidades,$razon3_1,$igualdad,$razon3_2,$lugar_interior,$lugar_exterior,$ocasion4_1,$Amenazas4_1a,$quien4_1,$Golpes4_1a,$quien4_2,$Humillacion4_1a,$quien4_3,$Acoso_sexual4_1a,$quien4_4,$Acoso_laboral4_1a,$quien4_5,$Violencia_sexual4_1a,$quien4_6,$Ignorarla4_1a,$quien4_7,$otros4_1a,$ampliar4_1a,$lugar_interior4_2,$lugar_exterior4_2,$ocasion4_2,$Amenazas4_2a,$alumno_quien4_1,$Golpes4_2a,$alumno_quien4_2,$Humillacion4_2a,$alumno_quien4_3,$alumno_Acososexual4_1a,$alumno_quien4_4,$alumno_Acoso_laboral4_1a,$alumno_quien4_5,$alumno_Violencia_sexual4_1a,$alumno_quien4_6,$alumno_Ignorarla4_1a,$alumno_quien4_7,$alumno_otros4_1a,$alumno_ampliar4_1a,$lugar_interior4_3,$lugar_exterior4_3,$ocasion4_3,$Amenazas4_3a,$admin_quien4_1,$Golpes4_3a,$admin_quien4_2,$Humillacion4_3a,$admin_quien4_3,$admin_Acoso_sexual4_1a,$admin_quien4_4,$admin_Acoso_laboral4_1a,$admin_quien4_5,$admin_Violencia_sexual4_1a,$admin_quien4_6,$admin_Ignorarla4_1a,$admin_quien4_7,$admin_otros4_1a,$admin_ampliar4_1a,$instancia,$cual5,$Apoyo_psi,$Orientacion_jur,$Canalizacion,$No_se,$Otros_instancia,$instancia_aca,$cual5aca,$Apoyo_psi_aca,$Orientacion_jur_aca,$Canalizacion_aca,$No_se_aca,$Otros_instancia_aca,$instancia_admin,$cual5admin,$Apoyo_psi_admin,$Orientacion_jur_admin,$Canalizacion_admin,$No_se_admin,$Otros_instancia_admin,$uni_a,$uni_b,$uni_c,$uni_d,$uni_e,$uni_f,$como_uni,$curso_3_ani,$cuales_curso,$sancion,$cual_sancion,$organo,$cual_organo,$grave1,$grave2,$grave3,$grave4,$grave5,$acc1,$acc2
,$acc3,$acc4,$acc5\n";

fwrite($fh, $data);

fclose($fh);

$result = '';
$result .= '<meta http-equiv="refresh" content="0; url=http://localhost//fin.html">';
echo $result;
die();
?>
