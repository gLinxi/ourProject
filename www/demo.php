<?php
$link=mysql_connect('127.0.0.1','root','123456');
if(!$link) echo "Error!";
//else echo "Ok!";
mysql_query("set name 'utf8'"); 
mysql_select_db('Question')or die("cant get database");
mysql_set_charset('utf8');

$sql = "SELECT a,b,c,d,correct,distrib,flag,infor FROM Ques";
$res = mysql_query($sql);
if($res&&mysql_num_rows($res))
{
	//echo "card get";
	$i = 0;
	while($card = mysql_fetch_array($res))
	{
		for($j=0;$j<8;$j++)
		{
			//echo $card[$j]."   ";
			$dataTable[$i][$j]=$card[$j];
		}
		$i++;
	}
	$istrue=1;
	/*$card = mysql_fetch_assoc($res);
	$istrue=1;
	echo $card[1]['distrib'];
	 */
}else{
	//echo "card not get";
	$msg = "Please to Input the correct number";
	$istrue=0;
}
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>Demo</title>
		<style>
		.buttondiv
		{	
				margin:10px;
				
    	}
		 </style>
    </head>
	<body <?php echo 'bgcolor="#cccccc"'?> >
	<script type="text/javascript">
		function submit()
		{

		}
	</script>
	<caption><h1 align = "center" >The Question for the new users</h1></caption>
	<?php $i=0;
		$bgcolor="D15765";
		for($i=0;$i<5;$i++)
		{
			$temp = $i+1;
			echo "<table"." bgcolor =".$bgcolor." align = \"center\" "." border=\"1\" "." width=600 ".">";
				echo "<tr>"; 
					echo "<caption>"."<h3 align =\"left\">"."Num".$temp.".  ".$dataTable[$i][5]."</h3></caption>";
				echo "</tr>";
				echo "<tr>";
					echo "<td><input type=\"radio\" name= \"rs$i\" value =\"1\">"."A. ".$dataTable[$i][0]."</td>";
				echo "</tr>";		
				echo "<tr>";
					echo "<td><input type=\"radio\" name= \"rs$i\" value =\"2\">"."B. ".$dataTable[$i][1]."</td>";
				echo "</tr>";	
				echo "<tr>";
					echo "<td><input type=\"radio\" name= \"rs$i\" value =\"3\">"."C. ".$dataTable[$i][2]."</td>";
				echo "</tr>";	
				echo "<tr>";
					echo "<td><input type=\"radio\" name= \"rs$i\" value =\"4\">"."D. ".$dataTable[$i][3]."</td>";
				echo "</tr>";
			echo "</table>";			
		}
	?>
	</body>
	<div align="center" >
		<div class="buttondiv">
			<form action="" method="post">
				<input type="submit"  name="sub" value="提交信息" onclick="submit()" />
			</form>
		</div>
		<div>
			<?php
			if($istrue == 1)
			{
				echo "yes";
			}
			else
			{
				echo "no";
			}
			?>
		</div>
	</div>
</html>
