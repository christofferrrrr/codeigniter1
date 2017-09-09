<html>
<head>
<title><?php echo $title;?></title>
</head>
<body>
	<h1>View Students</h1>
	<img src=<?php echo base_url("assets/images/nosananolife.jpg");?> alt="BIATCH">;
	<table border='1'>
		<thead>
			<tr>
			<th> ID no.</th>
			<th> LAST NAME</th>
			<th> FIRST NAME</th>
			<th> MIDDLE NAME</th>
			<th> SEX</th>
			<th> ACTION</th>
			</tr>
		</thead>
		<tbody>
	<?php
	foreach($students as $s){
		echo '<tr>
					<td>'.$s['idno'].'</td>
					<td>'.$s['lastname'].'</td>
					<td>'.$s['firstname'].'</td>
					<td>'.$s['middlename'].'</td>
					<td>'.$s['sex'].'</td>
					<td>
						<a href="">View</a>
						<a href="">Edit</a>
						<a href="">Delete</a>
					</td>
						
			   </tr>';
	}
	?>
</tbody>
</body>
</html>