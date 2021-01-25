
<?php

	<table class="table table-hover table-universities" style="overflow: scroll; font-size: 16px;">


		<?php while($record = mysqli_fetch_assoc($result)){


			?>


			<tr style="">
				<td>
					<span style="font-size: 60px;" class="fa fa-user"></span>
				</td>

				<td colspan="2" style="text-align: left;"><b>Name :</b><?php echo $record['Student_Name'] ?>
				<br>
				<b>Phone :</b><?php echo $record['Student_Phone'] ?> <br>

				<b>Email :</b><?php echo $record['Student_Email'] ?>

				</td>



				<td style="text-align: left;"><b>University :</b><?php echo $record['name'] ?> <br>
					<b>Course Type:</b><?php echo $record['Course_Type'] ?>
				</td>


		  </tr>


		<?php } ?>
	</table>
	<?php
}

if(mysqli_num_rows($result)==0){
	?>
	<span class="alert alert-info col-xs-12">There are no any courses</span>
	<?php
}
?>
