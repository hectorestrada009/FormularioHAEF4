<?php
include("../clasedb.php");
extract($_REQUEST);

class MusicaControlador
{
	public function index(){
		$db=new clasedb();
		$conex=$db->conectar();

		$sql="SELECT * FROM datos_musica";

		$res=mysqli_query($conex,$sql);
		$campos=mysqli_num_fields($res);
		$filas=mysqli_num_rows($res);
		$i=0;
		$datos[]=array();

		while($data=mysqli_fetch_array($res)){
			for ($j=0; $j < $campos; $j++){
				$datos[$i][$j]=$data[$j];
			}
			$i++;
		}
		mysqli_close($conex);
			header("Location: index.php?filas=".$filas."&campos=".$campos."&data=".serialize($datos));
	}
    public function modificar(){
        extract($_REQUEST);
        $db=new clasedb();
        $conex=$db->conectar();
        $sql="SELECT * FROM datos_musica WHERE id=".$id_musica."";
		$res=mysqli_query($conex,$sql);
        $data=mysqli_fetch_array($res);
        
        header("Location: editar.php?data=".serialize($data));
    }

    public function actualizar(){
        extract($_REQUEST);
        $db=new clasedb();
        $conex=$db->conectar();

        $sql="UPDATE datos_musica set 
        cancion='$cancion',
        autor='$autor',
        ano_lan='$ano_lan',
        disquera='$disquera',
        genero='$genero'
        WHERE id=$id_musica";
       	$res=mysqli_query($conex,$sql);
        	if ($res) {
        		?>
        		<script>
        			alert("REGISTRO MODIFICADO");
        			window.location="MusicaControlador.php?operacion=index";
        		</script>
        		<?php
        	}else{
        		?>
        		<script>
        			alert("ERROR AL MODIFICAR REGISTRO");
        			window.location="MusicaControlador.php?operacion=index";
        		</script>
        		<?php
        	}
        $this->index();
    }

   
    public function eliminar(){

    	extract($_REQUEST);//extrayendo variables del url
    	$db=new clasedb();
    	$conex=$db->conectar();//conectando con la base de datos

    	$sql="DELETE FROM datos_musica WHERE id=".$id_musica;

		$res=mysqli_query($conex,$sql);
		if ($res)
		 {
			?>
			<script type="text/javascript">
				alert("REGISTRO ELIMINADO");
				window.location="MusicaControlador.php?operacion=index";
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				alert("REGISTRO NO ELIMINADO");
				window.location="MusicaControlador.php?operacion=index";
			</script>
			<?php
			}
    }



	static function controlador($operacion){
		$musica=new MusicaControlador();
	switch ($operacion) {
		case 'index':
			$musica->index();
			break;
		case 'registrar':
			$musica->registrar();
			break;
		case 'guardar':
			$musica->guardar();
			break;
		case 'modificar':
			$musica->modificar();
			break;
		case 'actualizar':
			$musica->actualizar();
			break;
		case 'eliminar':
			$musica->eliminar();
			break;
		default:
			?>
				<script>
					alert("No existe la ruta");
					window.location="MusicaControlador.php?operacion=index";
				</script>
			<?php
			break;
	}//switch
}//funcion controlador
}//class
MusicaControlador::controlador($operacion);
?>