<?php

include_once("phpGrid/conf.php");
include_once('inc/head.php');
?>

<h1>Laboratorio IUE</h1>

<?php
$_GET['currentPage'] = 'prestamos-activos';
include_once('inc/menu.php');
$dgProd = new \C_DataGrid('SELECT * FROM prestamo ', 'CodPrestamo', 'Préstamos Activos');
$dgProd->set_col_hidden('CodPrestamo', false);
$dgProd->enable_autowidth(true)->set_dimension('auto', '200px')->set_pagesize(100);
$dgProd->set_col_title('CodCarne', 'Número de Carné');
$dgProd->set_col_title('NombreEstudiante', 'Nombre');
$dgProd->set_col_title('PlanAcademico', 'Plan Académico ');
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
