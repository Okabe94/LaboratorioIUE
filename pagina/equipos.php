<?php

include_once("phpGrid/conf.php");
include_once('inc/head.php');
?>

<h1>Laboratorio IUE</h1>

<?php
$_GET['currentPage'] = 'equipos';
include_once('inc/menu.php');
$dgProd = new \C_DataGrid('SELECT * FROM Equipo', 'CodEquipo', 'Equipos');
$dgProd->set_col_hidden('CodEquipo', false);
$dgProd->set_col_title('CodBarras', 'Código de Barras');
$dgProd->set_col_title('NombreEquipo', 'Nombre');
$dgProd->set_col_title('Descripcion', 'Descripción');

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
