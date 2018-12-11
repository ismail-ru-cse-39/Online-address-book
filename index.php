<?php
	require_once "connect.php";

	$all_contacts = "select *from contacts";

	$sql_to_all_contacts = $connc->query($all_contacts);

	$num_of_total_address = $sql_to_all_contacts->num_rows;

?>


<!DOCTYPE html>
<html>
<head>
	<?php include"includes/head.inc"; ?>
</head>
<body>
	<div class="wrapper">

		<!-- header section -->
		<?php include"includes/header.inc"; ?>

		<!-- content section -->
		<div class="content">
			<div class="floatl"><h1><?php echo $num_of_total_address ?> person's address are currently listed in database.</h1></div>
			<a class="floatr" href="insert_contact.php"><input class="cancel_contact_button" type="button" value="New Contact"></a>		
			<div class="clear"></div>
			<hr class="pageTitle">
			<table id="contactsTable" class="display">
				<thead>
					<tr align="left">
						<th>First Name:</th>
						<th>Nickname:</th>
						<th>Cell Phone:</th>
						<th>Address</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php while($row = mysqli_fetch_assoc($sql_to_all_contacts)) {?>
					<tr>
						<td><a href = "contact.php?id=<?php echo $row['contact_id'] ?>"><?php echo $row['contact_fname']." ".$row['contact_lname']?></a></td>
						<td><?php echo $row['contact_nickname'] ?></td>
						<td><?php echo $row['contact_hphone'] ?></td>
						<td><?php echo $row['contact_address'] ?></td>
						<td><a href="update_contact.php?id=<?php echo $row['contact_id'] ?>"><i class="fa fa-pencil"></i> |<a href="delete.php?id=<?php echo $row['contact_id'] ?>"> <i class="fa fa-trash-o"></i></td>
					</tr>
				<?php }?>
					
				</tbody>
			</table>
		</div>
	</div>	
</body>
</html>		