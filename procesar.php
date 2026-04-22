<?php
//constantes
// Variables libreta
$lib1 = $_POST['lib1']; // Libreta 1 materia 
$lib5 = $_POST['lib5']; // Libreta 5 materias
// Boligrafos
$boliAzul = $_POST['boliAzul']; // 	Paquete Bolígrafo azul 
$boliNeon = $_POST['boliNeon']; // 	Bolígrafo Neon
// Accesorios
$regla = $_POST['regla']; // 	Regla 30 cm 
$borrador = $_POST['borrador'];  // 	Borrador 
$sacPuntas = $_POST['sacPuntas'];  // 	Sacapuntas

include 'ClasePedidoEscolar.php'; // Traer Clase para calcular

$calcular = new procesar();
$instancia= $calcular->prueba($lib1);
?>