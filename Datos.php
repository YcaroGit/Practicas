<?php
include_once 'scripts/funciones.php';
// include_once 'Busqueda.php';

$columnas = ['nombre', 'apellidos', 'email', 'telefono'];
$tabla = "CUIDADOR";

$campo = isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : null;

$where = '';
//cuenta las columnas
if ($campo != null) {
    $where = "WHERE(";
    $contar = count($columnas);
    for ($i = 0; $i < $contar; $i++) {
        $where .= $columnas[$i] . " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -4);
    $where .= ")";
}
$sql = "SELECT " . implode(", ", $columnas) . "
FROM $tabla
$where ";
// echo $sql;
// exit;
$resultado = $conn->query($sql);
$num_rows = $resultado->num_rows;
$html = '';
if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $html .= '<tr>';
        $html .= '<td>' . $row['nombre'] . '</td>';
        $html .= '<td>' . $row['apellidos'] . '</td>';
        $html .= '<td>' . $row['email'] . '</td>';
        $html .= '<td>' . $row['telefono'] . '</td>';
        $html .= '<td><a href="">Editar</a></td>';
        $html .= '<td><a href="">Eliminar</a></td>';
        $html .= '</tr>';
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="6">NO SE ENCUENTRA</td>';
    $html .= '</tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);
