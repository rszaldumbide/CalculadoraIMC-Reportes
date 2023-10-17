<?php

namespace App\Controllers;

use App\Models\modelo;
use CodeIgniter\Controller;
use CodeIgniter\Model;

class Home extends BaseController
{
    public function index()
    {
        return view('layouts/headerInicio') . view('inicio');
    }

    public function ingresoDatos()
    {
        $mensaje = session('mensaje');
        $datos['mensaje'] = $mensaje;

        return view('imc', $datos);
    }

    public function reporte()
    {
        return view('reportes');
    }

    public function crearPaciente()
    {
        $objPaciente = new modelo();

        $datos = [
            "u_nombre" => $_POST['pac_nombre'],
            "u_apellido" => $_POST['pac_ape'],
            "u_cedula" => $_POST['pac_ced'],
            "u_genero" => $_POST['pac_genero'],
            "u_edad" => $_POST['pac_edad'],
            "u_valorimc" => $_POST['pac_valorimc'],
            "u_rangoimc" => $_POST['pac_rangoimc'],
            "u_estado" => 1,
        ];

        $respuesta = $objPaciente->insert($datos);

        if ($respuesta > 0) {
            return redirect()->to(base_url('index.php/ingreso'))->with('mensaje', '1');
        } else {
            return redirect()->to(base_url('index.php/ingreso'))->with('mensaje', '0');
        }
    }

    public function busqueda(){

        $datos = $_POST['txtDatos'];

        return view('index.php/obtenerNombre/'.$datos);

    }

    public function actualizarPaciente()
    {

        $mensaje = session('mensaje');
        $datos['mensaje'] = $mensaje;

        $objPaciente = new modelo();

        $datos = [
            "u_id" => $_POST['pac_id'],
            "u_nombre" => $_POST['pac_nombre'],
            "u_apellido" => $_POST['pac_ape'],
            "u_cedula" => $_POST['pac_ced'],
            "u_genero" => $_POST['pac_genero'],
            "u_edad" => $_POST['pac_edad'],
            "u_valorimc" => $_POST['pac_valorimc'],
            "u_rangoimc" => $_POST['pac_rangoimc'],
            "u_estado" => 1,
        ];

        $id = $_POST['u_id'];

        $respuesta = $objPaciente->actualizar($datos, $id);

        if ($respuesta > 0) {
            return redirect()->to(base_url('index.php/ingreso'))->with('mensaje', '3');
        } else {
            return redirect()->to(base_url('index.php/ingreso'))->with('mensaje', '2');
        }
    }

    public function obtenerNombre($id)
    {
        $data = ['u_cedula' => $id];
        $objPaciente = new modelo();

        $respuesta = $objPaciente->obtenerNombre($data);

        $datos = [
            "datos" => $respuesta
        ];

        return view('index.php/actualizarPaciente', $datos);
    }
}
