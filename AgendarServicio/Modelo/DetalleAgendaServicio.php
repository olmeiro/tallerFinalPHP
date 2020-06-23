<?php
class DetalleAgendaServicio
{
 private $IdDetalleAgendaServicio;
 private $IdServicio;
 private $IdOperario;
 private $Tarea1;
 private $Tarea2;

 public function __construct(){}

 public function setIdDetalleAgendaServicio($IdDetalleAgendaServicio)
 {
   $this->IdDetalleAgendaServicio = $IdDetalleAgendaServicio;
 }

 public function getIdDetalleAgendaServicio()
 {
   return $this->IdDetalleAgendaServicio;
 }

 public function setIdServicio($IdServicio)
 {
   $this->IdServicio = $IdServicio;
 }

 public function getIdServicio()
 {
   return $this->IdServicio;
 }

 public function setIdOperario($IdOperario)
 {
   $this->IdOperario = $IdOperario;
 }

 public function getIdOperario()
 {
   return $this->IdOperario;
 }

 public function setTarea1($Tarea1)
 {
   $this->Tarea1 = $Tarea1;
 }

 public function getTarea1()
 {
   return $this->Tarea1;
 }

  public function setTarea2($Tarea2)
  {
    $this->Tarea2 = $Tarea2;
  }

  public function getTarea2()
  {
    return $this->Tarea2;
  }
}
 ?>
