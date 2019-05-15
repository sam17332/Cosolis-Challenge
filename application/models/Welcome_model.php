<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }

    public function setRecibir(string $nombres, string $apellidos, string $apodo, string $fecha, string $talla)
    {
        $this->db->query("INSERT INTO data (categoria, nombre, texto, tipo, valor) VALUES ('jugador', 'nombre', 'Ingrese sus nombres', 'string', {$nombres})");
        $this->db->query("INSERT INTO data (categoria, nombre, texto, tipo, valor) VALUES ('jugador', 'apellidos', 'Ingrese sus apellidos', 'string', {$apellidos})");
        $this->db->query("INSERT INTO data (categoria, nombre, texto, tipo, valor) VALUES ('jugador', 'apodo', 'Ingrese su apodo', 'string', {$apodo})");
        $this->db->query("INSERT INTO data (categoria, nombre, texto, tipo, valor) VALUES ('jugador', 'fecha', 'AAAA-MM-DD', 'string', {$fecha})");
        $this->db->query("INSERT INTO data (categoria, nombre, texto, tipo, valor) VALUES ('jugador', 'talla', 'talla de camiseta', 'string', {$talla})");
    } 
    
    public function setRecibir1(string $fechaP, string $horaI, string $horaF, string $resultado)
    {
        $this->db->query("INSERT INTO data (categoria, nombre, texto, tipo, valor) VALUES ('partido', 'Fecha del Partido', 'AAAA-MM-DD', 'string', {$fechaP})");
        $this->db->query("INSERT INTO data (categoria, nombre, texto, tipo, valor) VALUES ('partido', 'Hora de inicio', 'HH:MM', 'string', {$horaI})");
        $this->db->query("INSERT INTO data (categoria, nombre, texto, tipo, valor) VALUES ('partido', 'Hora de finalizacion', 'HH:MM', 'string', {$horaF})");
        $this->db->query("INSERT INTO data (categoria, nombre, texto, tipo, valor) VALUES ('partido', 'Resultado', 'se perdio (0) se gano (1)', 'boolean', {$resultado})");
    } 
}

