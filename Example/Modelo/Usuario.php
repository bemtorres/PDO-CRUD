<?php

/*
CREATE TABLE usuario
  (
    id_usuario INTEGER NOT NULL AUTO_INCREMENT,
    rut        VARCHAR (11) NOT NULL ,
    nombre     VARCHAR (30) NOT NULL,
    apellido   VARCHAR (30) NOT NULL,
    celular    VARCHAR (15) NOT NULL,
    domicilio  VARCHAR (100) NOT NULL,
    email      VARCHAR (60) NOT NULL,
    activo     INTEGER NOT NULL,
    id_tipo_u  INTEGER NOT NULL,
    PRIMARY KEY(id_usuario)
  ) ;
 */
class Usuario {
    private $id_usuario;
    private $rut;
    private $nombre;
    private $apellido;
    private $celular;
    private $domicilio;
    private $email;
    private $activo;
    private $id_tipo_u;
    function __construct($id_usuario, $rut, $nombre, $apellido, $celular, $domicilio, $email, $activo, $id_tipo_u) {
        $this->id_usuario = $id_usuario;
        $this->rut = $rut;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->celular = $celular;
        $this->domicilio = $domicilio;
        $this->email = $email;
        $this->activo = $activo;
        $this->id_tipo_u = $id_tipo_u;
    }
    function getId_usuario() {
        return $this->id_usuario;
    }

    function getRut() {
        return $this->rut;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getCelular() {
        return $this->celular;
    }

    function getDomicilio() {
        return $this->domicilio;
    }

    function getEmail() {
        return $this->email;
    }

    function getActivo() {
        return $this->activo;
    }

    function getId_tipo_u() {
        return $this->id_tipo_u;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setDomicilio($domicilio) {
        $this->domicilio = $domicilio;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setActivo($activo) {
        $this->activo = $activo;
    }

    function setId_tipo_u($id_tipo_u) {
        $this->id_tipo_u = $id_tipo_u;
    }

function __toString(){
        return print_r($this,true);
    }
}
