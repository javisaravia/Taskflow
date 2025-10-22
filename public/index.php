<?php
$tasks = [
    [
        'title' => 'Comprar insumos para el proyecto',
        'completed' => false,
        'priority' => 'alta'
    ],
    [
        'title' => 'Revisar correos pendientes',
        'completed' => true,
        'priority' => 'media'
    ],
    [
        'title' => 'Actualizar documentación del proyecto',
        'completed' => false,
        'priority' => 'baja'
    ],
    [
        'title' => 'Llamar al cliente para feedback',
        'completed' => true,
        'priority' => 'alta'
    ],
    [
        'title' => 'Organizar reunión de equipo',
        'completed' => false,
        'priority' => 'media'
    ]
];
?>

<?php
define("SITE_NAME", "TaskFlow");
$pageTitle = SITE_NAME . " - Página de Inicio";
$userName = "Javier"; 
$userAge = 23;
$isPremiumUser = true;

include 'C:\xampp\htdocs\taskflow\app\views\header.php'; 
?>

<main>
    <h2>Perfil del Usuario</h2>
    <p><strong>Nombre:</strong> <?php echo $userName; ?></p>
    <p><strong>Edad:</strong> <?php echo $userAge; ?> años</p>
    <p><strong>Estado de la cuenta:</strong> Usuario <?php echo $isPremiumUser ? "Premium" : "Estándar"; ?></p>
</main>

<?php
include 'C:\xampp\htdocs\taskflow\app\views\footer.php';
?>

