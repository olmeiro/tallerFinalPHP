<!-- <?php
 require_once('Operario.php');
 require_once('../../conexion.php');

class CrudOperario
{
  public function __construct(){}

    public function ListarOperarios()
        {
          //echo "listar competencias";
          $Db = Db::Conectar();
          $ListaOperarios = [];
          $Sql = $Db->query('SELECT * FROM operario');
          $Sql->execute();
          foreach($Sql->fetchAll() as $Operario)
          {
            $MyOperario = new Operario();
            // echo $Competencia['CodigoCompetencia'].".....".$Competencia['NombreCompetencia'];
            $MyOperario -> setIdOperario($Operario['IdOperario']);
            $MyOperario -> setNombre($Operario['Nombre']);
            $MyOperario -> setApellido($Operario['Apellido']);
            $MyOperario -> setDocumento($Operario['Documento']);
            $MyOperario -> setCelular($Operario['Celular']);

            $ListaOperarios[] = $MyOperario;
          }
          return $ListaOperarios;
        }

        public function InsertarOperario($Operario) //Se recibe objeto Competencia
         {
             $Db = Db::Conectar(); //Conectar a BBDD revisar conexion
             //Definir la insercion a realizar.
             $Insert = $Db->prepare('INSERT INTO operario VALUES(NULL, :Nombre, :Apellido, :Documento, :Celular)');
             $Insert->bindValue('Nombre',$Operario->getNombre());
             $Insert->bindValue('Apellido',$Operario->getApellido());
             $Insert->bindValue('Documento',$Operario->getDocumento());
             $Insert->bindValue('Celular',$Operario->getCelular());

             try
             {
               $Insert->execute();//ejecutar el INSERT
               echo "Registro exitoso del Operario";
             }
             catch(Exception $e)
             {
               echo $e->getMessage();//Mostrar errores en la insercion.
               die();
             }
         }

         public function ObtenerOperario ($IdOperario)
          {
            //Código para obtener una competencia:
              $Db = Db::Conectar();
              $Sql = $Db->prepare('SELECT * FROM  operario WHERE IdOperario =:IdOperario'); //aca agrego mas campo si quiero buscar por mas campos luego el bind value
              $Sql->bindValue('IdOperario',$IdOperario); //evita la inyeccion SQL
              $MyOperario = new Operario();
              try
              {
                $Sql -> execute();//ejecutar el SELEC
                $Operario = $Sql -> fetch();//se lleva el array obtenido en $Compentencia luego de realizar el sql
                $MyOperario -> setIdOperario($Operario['IdOperario']);
                $MyOperario -> setNombre($Operario['Nombre']);
                $MyOperario -> setApellido($Operario['Apellido']);
                $MyOperario -> setDocumento($Operario['Documento']);
                $MyOperario -> setCelular($Operario['Celular']);

                //echo "Registro exitoso";
              }
              catch(Exception $e)
              {
                echo $e->getMessage();//Mostrar errores en la MODIFICACION.
                die();
              }
              return $MyOperario;
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

      public function EliminarOperario($IdOperario) //Se recibe objeto Competencia
      {
          $Db = Db::Conectar(); //Conectar a BBDD revisar conexion
          //Definir la insercion a realizar.
          $Sql = $Db->prepare('DELETE FROM operario WHERE IdOperario=:IdOperario');//para usar bindvalue para evitar sqlInjection
          $Sql->bindValue('IdOperario',$IdOperario);
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
