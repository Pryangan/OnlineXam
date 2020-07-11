<?php 
	$a=$_REQUEST['t1'];
	$b=$_REQUEST['t2'];
	
	for($i=$a;$i<=$b;$i++)
	{
	if($i%2==0)
	{
		$e=$e.$i;
	}
	else
	{
		$o=$o.$i;
	}
	}
?>

<table width="50%" border="1">
  <tr>
    <th scope="col" colspan="2">Comparision</th>
    
  </tr>
  <tr>
    <td>Even numbers</td>
    <td><input type="text" value="<?php echo $e;?>" /></td>
  </tr>
  <tr>
    <td>odd numbers</td>
    <td><input type="text" value="<?php echo $o;?>" /></td>
  </tr>
</table>
	