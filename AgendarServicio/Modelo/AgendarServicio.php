<?php
class AgendarServicio
{
  private $IdAgendaServicio;
  private $IdServicio;
  private $Fecha;

  public function __construct(){}

  public function setIdAgendaServicio($IdAgendaServicio)
  {
    $this->IdAgendaServicio = $IdAgendaServicio;
  }

  public function getIdAgendaServicio()
  {
    return $this->IdAgendaServicio;
  }

  public function setIdServicio($IdServicio)
  {
    $this->IdServicio = $IdServicio;
  }

  public function getIdServicio()
  {
    return $this->IdServicio;
  }

  public function setFecha($Fecha)
  {
    $this->Fecha = $Fecha;
  }

  public function getFecha()
  {
    return $this->Fecha;
  }
}
 ?>
