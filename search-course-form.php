
<table class="table table-search-form">
<tr style="height: 35px">
	<td>

		<select class="form-control" name="Course_Type" style="height: 35px;"  required >
			<option value="Deploma">Deploma</option>
			<option  value="Phd">Phd</option>
			<option  value="Master">Master</option>
		</select>
	</td>
	<td>
		<select class="form-control" name="Course_Name" style="height: 35px;"  required>
			<option value="ICT">ICT</option>
			<option  value="Marketing">Marketing</option>
			<option  value="Accounting">Accounting</option>
		</select>
	</td>
	<td>
		<button type="submit" name="course-search" class="btn "><span class="fa fa-search"></span> Search</button>
	</td>

</tr>
<?php
if(isset($_POST['course-search'])){
?>
	<tr style="height: 35px"><td colspan="4" style="text-align: left;"> <a href="admin_course.php" >Close Filter <span class="fa fa-close"  style="color: red"></span></a></td></tr>
<?php

}

?>
</table>
