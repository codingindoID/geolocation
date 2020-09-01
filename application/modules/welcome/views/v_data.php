<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table>
		<caption>table title and/or explanatory text</caption>
		<thead>
			<tr>
				<th>#</th>
				<th>locality</th>
				<th>label</th>
				<th>latitude</th>
				<th>longitude</th>
				<th>#</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no=1;
			foreach ($data as $data): ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $data['locality'] ?></td>
					<td><?php echo $data['label'] ?></td>
					<td><?php echo $data['latitude'] ?></td>
					<td><?php echo $data['longitude'] ?></td>
					<td><a class="btn btn-primary" role="button" href="https://www.google.com/maps/dir/?api=1&destination=<?php echo $data['latitude'] ?>,<?php echo $data['longitude'] ?>&travelmode=driving&origin=jepara" target="_blank" title="Buat rute menuju lokasi"> Menuju lokasi</a></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</body>
</html>