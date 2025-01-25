<?php
class VistaTareas
{
    public function mostrarTareas($tareas)
    {
        echo "<ul>";
        foreach ($tareas as $tarea) {
            echo "<li>" . htmlspecialchars($tarea) . "</li>";
        }
        echo "</ul>";
    }
}
