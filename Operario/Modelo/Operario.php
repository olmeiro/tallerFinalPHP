<?php
/**
 *
 */
class Operario
{
  private $IdOperario;
  private $Nombre;
  private $Apellido;
  private $Documento;
  private $Celular;

  function __construct()
  {
    // code...
  }

  public function setIdOperario($IdOperario)
  {
    $this->IdOperario = $IdOperario;
  }

  public function getIdOperario()
  {
    return $this->IdOperario;
  }

  public function setNombre($Nombre)
  {
    $this->Nombre = $Nombre;
  }

  public function getNombre()
  {
    return $this->Nombre;
  }

  public function setApellido($Apellido)
  {
    $this->Apellido = $Apellido;
  }

  public function getApellido()
  {
    return $this->Apellido;
  }

  public function setDocumento($Documento)
  {
    $this->Documento = $Documento;
  }

  public function getDocumento()
  {
    return $this->Documento;
  }

  public function setCelular($Celular)
  {
    $this->Celular = $Celular;
  }

  public function getCelular()
  {
    return $this->Celular;
  }
}
 ?>
