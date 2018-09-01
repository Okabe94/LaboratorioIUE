<?php

include_once("phpGrid/conf.php");
include_once('inc/head.php');
?>

<h1>Laboratorio IUE</h1>

<?php
$_GET['currentPage'] = 'estudiantes';
include_once('inc/menu.php');
$dgProd = new \C_DataGrid('SELECT * FROM Estudiante', 'CodEstudiante', 'Estudiantes');
$dgProd->set_col_hidden('CodEstudiante', false);
$dgProd->set_col_title('CodCarne', 'Número de Carné');
$dgProd->set_col_title('NombreEstudiante', 'Nombre');
$dgProd->set_col_title('PlanAcademico', 'Plan Académico ');

#Properties
$dgProd->set_dimension('auto','auto', True);
$dgProd->set_pagesize(100);
$dgProd->enable_search(True);
$dgProd->enable_autoheight(True);
$dgProd->display();
?>

<style>
.number-columns{
	font-weight: 700 !important;
}
</style>

<?php
include_once('inc/footer.php');
?>
