<style>
.striped {
	border-top: 1px solid #01579b;
	border-left: 1px solid #01579b;
}
.striped th, .striped td {
	padding: 20px;
	text-align: center;
	border-right: 1px solid #01579b;
	border-bottom: 1px solid #01579b;
}
.striped th {
	background: #01579b;
	color: white;
	border-radius: 0;
}
.striped td {
	background: #e1f5fe;
}
.striped td, .striped td a {
	color: #01579b;
}
</style>

<h1> Users </h1>

<a href="<?php echo $GLOBALS['ep_dynamic_url']; ?>users/create" class="btn-floating btn-large waves-effect waves-light light-blue darken-4"><i class="material-icons">add</i></a> <br/> <br/>

<table class="striped" style="background: white; padding: 10px; width: 100%; float: left">
	<tr>
		<thead>
			<th> Id </th>
			<th> Username </th>
			<th> Name </th>
			<th> Email </th>
			<th> Gender </th>
			<th> Action </th>
		</thead>
	</tr>
	<?php while($row = $userlistarray->fetch_assoc()) { ?>
	<tr>
		<tbody>
			<td> <?php echo $row['id']; ?> </td>
			<td> <?php echo $row['username']; ?> </td>
			<td> <?php echo $row['name']; ?> </td>
			<td> <?php echo $row['email']; ?> </td>
			<td> <?php echo $row['gender']; ?> </td>
			<td> <a href="<?php echo $GLOBALS['ep_dynamic_url']; ?>users/update/id/<?php echo $row['id']; ?>"> [Edit] </a> | <a href="<?php echo $GLOBALS['ep_dynamic_url']; ?>users/userdelete/id/<?php echo $row['id']; ?>">  [Delete] </a> </td>
		</tbody>
	</tr>
	<?php } ?>
</table>