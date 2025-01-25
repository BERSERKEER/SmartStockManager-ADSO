<?php
require_once 'modelo.php';
require_once 'vista.php';

class ControladorTareas
{
    private $modelo;
    private $vista;

    public function __construct()
    {
        $this->modelo = new ModeloTareas();
        $this->vista = new VistaTareas();
    }

    public function manejarSolicitud()
    {
        if (isset($_POST['nueva_tarea'])) {
            $this->modelo->agregarTarea($_POST['nueva_tarea']);
        }

        $tareas = $this->modelo->obtenerTareas();
        $this->vista->mostrarTareas($tareas);
    }
}
