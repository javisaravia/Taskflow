/* */
<?php

function obtenerClasePrioridad($prioridad)
{
  
    switch ($prioridad) {
        case 'alta':
            return 'prioridad-alta';
        case 'media':
            return 'prioridad-media';
        case 'baja':
            return 'prioridad-baja';
        default:
            return '';
    }
}

function renderizarTarea($tarea)
{
    $clasePrioridad = obtenerClasePrioridad($tarea['prioridad']);

    $claseCompletada = $tarea['completado'] ? 'completada' : '';

    $clasesCSS = trim($clasePrioridad . ' ' . $claseCompletada);
}
return "<li class='{$clasesCSS}'>{$tarea['titulo']}</li>"; 


?>