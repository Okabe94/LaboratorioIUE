<?php

include_once("phpGrid/conf.php");
include_once('inc/head.php');
?>

<h1>Laboratorio IUE</h1>

<?php
$_GET['currentPage'] = 'prestamos-activos';
include_once('inc/menu.php');
$sql = 'SELECT CodPrestamo, NombreMonitor, NombreEstudiante, PlanAcademico, NombreEquipo FROM prestamo
                           INNER JOIN Monitor ON Prestamo.CodMonitor = Monitor.CodMonitor
                           INNER JOIN Estudiante_Equipo ON Prestamo.CodEstudianteEquipo = Estudiante_Equipo.CodEstudianteEquipo
                           INNER JOIN Estudiante ON Estudiante_Equipo.CodEstudiante = Estudiante.CodEstudiante
                           INNER JOIN Equipo ON Estudiante_Equipo.CodEquipo = Equipo.CodEquipo';
$dgProd = new \C_DataGrid($sql, 'CodPrestamo', 'prestamos');
$dgProd->set_col_hidden('CodPrestamo', false);
$dgProd->enable_autowidth(true)->set_dimension('auto', '200px')->set_pagesize(100);
$dgProd->set_col_title('NombreMonitor', 'Monitor');
$dgProd->set_col_title('NombreEstudiante', 'Estudiante');
$dgProd->set_col_title('PlanAcademico', 'Plan Académico ');
$dgProd->set_col_title('NombreEquipo', 'Equipo');
$dgProd->display();
?>

<span style="background-color:gold">______</span> -- Indicating inventory that needs reorder.<br />
<span style="background-color:#DCDCDC">______</span> -- Negative inventory on hand!

<style>
.number-columns{
	font-weight: 700 !important;
}
</style>

<?php
include_once('inc/footer.php');
