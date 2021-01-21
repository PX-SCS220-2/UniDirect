
<table class="table table-search-form">
<tr style="height: 35px">
	<td>
		<select  class="form-control" name="Uni_Id" style="height: 35px;" required>
			<?php

			$UniNameQuery = "SELECT Uni_Id,Uni_Name FROM university";
			$UniNameResult= mysqli_query($admin_con,$UniNameQuery);
			while($UniversityName = mysqli_fetch_assoc($UniNameResult)){
				?>
				<option value=" <?php echo $UniversityName['Uni_Id'] ?> " ><?php echo $UniversityName['Uni_Name'] ?></option>
				<?php
			}
			?>
		</select>
	</td>
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
