/* */
<?php

function obtenerClasePrioridad($prioridad)

{
    $clasesTarea = "";
    switch ($prioridad) 
    {

            case 'alta':
                $clasesTarea .= ' priority-alta';
                break;
            case 'media':
                $clasesTarea .= ' priority-media';
                break;
            case 'baja':
                $clasesTarea .= ' priority-baja';
                break;
    }
}
return $clasesTarea;

function realizarTarea($tarea)
{
    $tareas = [
    ['titulo' => 'Configurar el entorno de desarrollo', 'completado' => true, 'prioridad' => 'alta'],
    ['titulo' => 'Crear la estructura de carpetas', 'completado' => true, 'prioridad' => 'alta'],
    ['titulo' => 'Diseñar la base de datos', 'completado' => false, 'prioridad' => 'media'],
    ['titulo' => 'Implementar el sistema de login', 'completado' => false, 'prioridad' => 'alta'],
    ['titulo' => 'Crear la vista de tareas', 'completado' => false, 'prioridad' => 'baja']
];
obtenerClasePrioridad($tarea);
}
return 


?>