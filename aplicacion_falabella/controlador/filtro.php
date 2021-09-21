<?
require '../modelo/conexion.php';
include '../modelo/conexion.php';

$limiteInferior = $_POST["limiteInferior"];
$limiteSuperior = $_POST["limiteSuperior"];

mysqli_select_db ($conn,"aplicacion");
$query = 'SELECT * FROM `DATOS` WHERE Age < '.intval($limiteSuperior).' AND Age > '.intval($limiteInferior).';';
$result = mysqli_query($conn, $query); 
$rowCount = mysqli_num_rows($result);
if ($result) 
{
	?>
	<tr>
		<th>Edad</th>
        <th>aspartato</th>
        <th>Fosfatasa</th>
        <th>Alanina	</th>
    </tr>
    <?
	while ($fila = $result->fetch_row()) 
	{
	    ?>
	    	<tr>
	    		<td>
	    			<?
	    				echo $fila[1];
	    			?>
	    		</td>
	    		<td>
	    			<?
	    				echo $fila[2];
	    			?>
	    		</td>
	    		<td>
	    			<?
	    				echo $fila[3];
	    			?>
	    		</td>
	    		<td>
	    			<?
	    				echo $fila[4];
	    			?>
	    		</td>
	    	</tr>
	    <?
	}
	$result->close();
}