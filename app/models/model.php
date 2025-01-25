<?php
class ModeloTareas
{
    private $tareas = ["Comprar pan", "Estudiar", "Limpiar la casa"];

    public function obtenerTareas()
    {
        return $this->tareas;
    }

    public function agregarTarea($nuevaTarea)
    {
        $this->tareas[] = $nuevaTarea;
    }
}
