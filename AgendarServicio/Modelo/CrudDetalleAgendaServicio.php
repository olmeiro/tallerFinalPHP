<?php
class CrudDetalleAgendaServicio
{
  public function __construct(){}

  public function InsertarDetalleServicio($DetalleAgendaServicio)
  {
    $DetalleInsertado =0;
    $Db = Db::Conectar(); //Conectar a BBDD revisar conexion
    //Definir la insercion a realizar.
    $Insert = $Db->prepare('INSERT INTO detalleagendaservicio (IdDetalleAgendaServicio, IdServicio, IdOperario, Tarea1, Tarea2) VALUES(NULL,:IdServicio,:IdOperario,:Tarea1,:Tarea2)');
    $Insert->bindValue('IdServicio',$DetalleAgendaServicio->getIdServicio());
    $Insert->bindValue('IdOperario',$DetalleAgendaServicio->getIdOperario());
    $Insert->bindValue('Tarea1',$DetalleAgendaServicio->getTarea1());
    $Insert->bindValue('Tarea2',$DetalleAgendaServicio->getTarea2());

    try
    {
      $Insert->execute();//ejecutar el INSERT
      $DetalleInsertado = 1;
    }
    catch(Exception $e)
    {
      echo $e->getMessage();//Mostrar errores en la insercion.
      //die();
      $mensaje = "problemas con el registro detalle factura";
    }
    return $DetalleInsertado;
  }
}
 ?>
