<?php


$query = "INSERT INTO `course` ( `Course_Name`, `Uni_Id`, `Course_Type`, `Fee`) VALUES ( '$Course_Name', $Uni_Id, '$Course_Type', $Fee)";
		if($result = mysqli_query($admin_con,$query)){
			?>
			<script type="text/javascript">
				alert('Course Added!');
			</script>
			<?php
		}

}
?>
