<?php

include_once("phpGrid/conf.php");
include_once('inc/head.php');
?>

<h1>Laboratorio IUE</h1>

<?php
$_GET['currentPage'] = 'prestamos-activos';
include_once('inc/menu.php');
$sql = 'SELECT CodPrestamo, NombreMonitor, NombreEstudiante, PlanAcademico, NombreEquipo, FechaHora FROM prestamo
                           INNER JOIN Monitor ON Prestamo.CodMonitor = Monitor.CodMonitor
                           INNER JOIN Estudiante_Equipo ON Prestamo.CodEstudianteEquipo = Estudiante_Equipo.CodEstudianteEquipo
                           INNER JOIN Estudiante ON Estudiante_Equipo.CodEstudiante = Estudiante.CodEstudiante
                           INNER JOIN Equipo ON Estudiante_Equipo.CodEquipo = Equipo.CodEquipo';

$dgProd = new \C_DataGrid($sql, 'CodPrestamo', 'prestamos');
$dgProd->set_query_filter('Entregado = False');
$dgProd->set_col_hidden('CodPrestamo', false);
$dgProd->set_col_title('NombreMonitor', 'Monitor');
$dgProd->set_col_title('NombreEstudiante', 'Estudiante');
$dgProd->set_col_title('PlanAcademico', 'Plan Académico ');
$dgProd->set_col_title('NombreEquipo', 'Equipo');
$dgProd->set_col_title('FechaHora', 'Fecha y Hora');

#Properties
$dgProd->set_col_width('FechaHora', 65);
$dgProd->set_dimension('auto','auto', True);
$dgProd->set_pagesize(50);
$dgProd->enable_autoheight(True);
$dgProd->enable_search(True);
$dgProd->display();
?>

<style>
.number-columns{
	font-weight: 700 !important;
}
</style>

<?php
include_once('inc/footer.php');
