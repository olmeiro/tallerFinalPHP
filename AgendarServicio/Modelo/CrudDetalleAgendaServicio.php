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

  public function ListarDetalleServicio()
   {
        $Db = Db::Conectar();
        $ListaDetalleServicio = [];
        $Sql = $Db->query('SELECT detalleagendaservicio.IdDetalleAgendaServicio, detalleagendaservicio.IdServicio, detalleagendaservicio.IdOperario, operario.Nombre, detalleagendaservicio.Tarea1, detalleagendaservicio.Tarea2 FROM detalleagendaservicio INNER JOIN operario ON detalleagendaservicio.IdOperario=operario.IdOperario');

        $Sql->execute();

        foreach($Sql->fetchAll() as $DetServicio){
             $MyDetalleServicio = new DetalleAgendaServicio();

             $MyDetalleServicio->setIdDetalleAgendaServicio($DetServicio['IdDetalleAgendaServicio']);
             $MyDetalleServicio->setIdServicio($DetServicio['IdServicio']);
             $MyDetalleServicio->setIdOperario($DetServicio['Nombre']);
             $MyDetalleServicio->setTarea1($DetServicio['Tarea1']);
             $MyDetalleServicio->setTarea2($DetServicio['Tarea2']);
             //$MyDetalleServicio->setNombre($DetServicio['Nombre']);

             $ListaDetalleServicio[]=$MyDetalleServicio;
        }
        return $ListaDetalleServicio;
   }

}
 ?>
