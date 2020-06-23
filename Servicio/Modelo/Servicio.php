<?php
class Servicio
{
  private $IdServicio;
  private $NombreObra;
  private $IdEstadoServicio;
  private $IdCotizacion;
  private $FechaInicio;
  private $FechaFin;

  public function __construct(){}

  public function setIdServicio($IdServicio)
  {
    $this->IdServicio = $IdServicio;
  }

  public function getIdServicio()
  {
    return $this->IdServicio;
  }

  public function setNombreObra($NombreObra)
  {
    $this->NombreObra = $NombreObra;
  }

  public function getNombreObra()
  {
    return $this->NombreObra;
  }

  public function setIdEstadoServicio($IdEstadoServicio)
  {
    $this->IdEstadoServicio = $IdEstadoServicio;
  }

  public function getIdEstadoServicio()
  {
    return $this->IdEstadoServicio;
  }

  public function setIdCotizacion($IdCotizacion)
  {
    $this->IdCotizacion = $IdCotizacion;
  }

  public function getIdCotizacion()
  {
    return $this->IdCotizacion;
  }

  public function setFechaInicio($FechaInicio)
  {
    $this->FechaInicio = $FechaInicio;
  }

  public function getFechaInicio()
  {
    return $this->FechaInicio;
  }

  public function setFechaFin($FechaFin)
  {
    $this->FechaFin = $FechaFin;
  }

  public function getFechaFin()
  {
    return $this->FechaFin;
  }
}
 ?>
