<?
require '../modelo/conexion.php';
mysqli_select_db ($conn,"aplicacion");
$query = 'SELECT * FROM DATOS WHERE 1;';
$result = mysqli_query($conn, $query); 
$rowCount = mysqli_num_rows($result);
if ($result) 
{
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
