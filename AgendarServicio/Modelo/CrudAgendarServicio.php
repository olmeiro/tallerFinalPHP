<!-- <?php
 require_once('AgendarServicio.php');
 require_once('../../conexion.php');

class CrudAgendarServicio
{
  public function __construct(){}

    public function ListarServicios()
        {
          //echo "listar competencias";
          $Db = Db::Conectar();
          $ListaServicios = [];
          $Sql = $Db->query('SELECT * FROM agendaservicio');
          $Sql->execute();
          foreach($Sql->fetchAll() as $Servicio)
          {
            $MyServicio = new Servicio();
            // echo $Competencia['CodigoCompetencia'].".....".$Competencia['NombreCompetencia'];
            $MyServicio -> setIdServicio($Servicio['IdServicio']);
            $MyServicio -> setNombreObra($Servicio['NombreObra']);
            $MyServicio -> setIdEstadoServicio($Servicio['IdEstadoServicio']);
            $MyServicio -> setIdCotizacion($Servicio['IdCotizacion']);
            $MyServicio -> setFechaInicio($Servicio['FechaInicio']);
            $MyServicio -> setFechaFin($Servicio['FechaFin']);


            $ListaServicios[] = $MyServicio;
          }
          return $ListaServicios;
        }

        public function InsertarServicio($AgendarServicio) //Se recibe objeto Competencia
         {
             $Db = Db::Conectar(); //Conectar a BBDD revisar conexion
             //Definir la insercion a realizar.
             $Insert = $Db->prepare('INSERT INTO agendaservicio VALUES(NULL, :IdServicio, NOW())');
             $Insert->bindValue('IdServicio',$AgendarServicio->getIdServicio());

             try
             {
               $Insert->execute();//ejecutar el INSERT
              $IdAgendaServicioGenerado = $Db->lastInsertID();
              //echo $CodigoServicioGenerado;
               echo "Registro exitoso de la Agenda del servicio";
             }
             catch(Exception $e)
             {
               echo $e->getMessage();//Mostrar errores en la insercion.
               //die();
             }
             return $IdAgendaServicioGenerado;
         }

         public function ObtenerServicio ($IdServicio)
          {
            //Código para obtener una competencia:
              $Db = Db::Conectar();
              $Sql = $Db->prepare('SELECT * FROM  servicio WHERE IdServicio =:IdServicio'); //aca agrego mas campo si quiero buscar por mas campos luego el bind value
              $Sql->bindValue('IdServicio',$IdServicio); //evita la inyeccion SQL
              $MyServicio = new Servicio();
              try
              {
                $Sql -> execute();//ejecutar el SELEC
                $Servicio = $Sql -> fetch();//se lleva el array obtenido en $Compentencia luego de realizar el sql
                $MyServicio -> setIdServicio($Servicio['IdServicio']);
                $MyServicio -> setNombreObra($Servicio['NombreObra']);
                $MyServicio -> setIdEstadoServicio($Servicio['IdEstadoServicio']);
                $MyServicio -> setFechaInicio($Servicio['FechaInicio']);
                $MyServicio -> setFechaFin($Servicio['FechaFin']);

                //echo "Registro exitoso";
              }
              catch(Exception $e)
              {
                echo $e->getMessage();//Mostrar errores en la MODIFICACION.
                die();
              }
              return $MyServicio;
          }

          // public function ModificarCliente($Cliente) //Se recibe objeto Competencia
          // {
          //     $Db = Db::Conectar(); //Conectar a BBDD revisar conexion
          //     //Definir la insercion a realizar.
          //     $Sql = $Db->prepare('UPDATE clientes SET CodigoCliente=:CodigoCliente,
          //                                              NombreCliente=:NombreCliente,
          //                                              ApellidosCliente=:ApellidosCliente,
          //                                              DireccionCliente=:DireccionCliente
          //                                              WHERE CodigoCliente=:CodigoCliente');//para usar bindvalue para evitar sqlInjection
          //     $Sql->bindValue('CodigoCliente',$Cliente->getCodigoCliente());
          //     $Sql->bindValue('NombreCliente',$Cliente->getNombreCliente());
          //     $Sql->bindValue('ApellidosCliente',$Cliente->getApellidosCliente());
          //     $Sql->bindValue('DireccionCliente',$Cliente->getDireccionCliente());
          //
          //     try
          //     {
          //       $Sql->execute();//ejecutar el UPDATE
          //       echo "Modificación exitosa";
          //     }
          //     catch(Exception $e)
          //     {
          //       echo $e->getMessage();//Mostrar errores en la insercion.
          //       die();
          //     }
          // }

      public function EliminarServicio($IdServicio) //Se recibe objeto Competencia
      {
          $Db = Db::Conectar(); //Conectar a BBDD revisar conexion
          //Definir la insercion a realizar.
          $Sql = $Db->prepare('DELETE FROM servicio WHERE IdServicio=:IdServicio');//para usar bindvalue para evitar sqlInjection
          $Sql->bindValue('IdServicio',$IdServicio);
          try
          {
            $Sql->execute();//ejecutar el DELETE
            echo "Eliminación éxitosa";
          }
          catch(Exception $e)
          {
            echo $e->getMessage();//Mostrar errores en la insercion.
            die();
          }
      }
    }
 ?> -->
