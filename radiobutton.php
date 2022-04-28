<form method="POST">
<input type="Radio" name="english[1]" value="english"> english 
<input type="Radio" name="english[2]" value="hindi"> hindi 
<input type="Radio" name="english[3]" value="gujrati"> gujrati<br>
<input type="submit" name="submit" value="submit">
</form>
<?php 
$con=mysqli_connect('localhost','root','','Radiobutoon');

if(isset($_POST['submit'])){
			
		$english=implode(',',$_POST['english']);
		$insert="insert into Radiobutton(value) values('$english')";
		
		$query=mysqli_query($con,$insert);
		if($query){
			
			echo "insert successfull";
			
			
		}else{
			
			
			echo "not inserted";
			
			
		}
}
?>