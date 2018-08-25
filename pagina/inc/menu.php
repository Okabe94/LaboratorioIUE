<div id="menu">
    <ul>
        <li><a href="prestamos-activos.php" <?php if($_GET['currentPage'] == 'prestamos-activos') echo 'class="active"'; ?>>Préstamos Activos</a></li>
        <li><a href="equipos.php" <?php if($_GET['currentPage'] == 'equipos') echo 'class="active"'; ?>>Inventario de Equipos</a></li>
        <li><a href="estudiantes.php" <?php if($_GET['currentPage'] == 'estudiantes') echo 'class="active"'; ?>>Estudiantes Registrados</a></li>
        <li><a href="reports.php" <?php if($_GET['currentPage'] == 'reports') echo 'class="active"'; ?>>Reports</a></li>
    </ul>
</div>
