<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Latihan Ajax</title>
</head>
<body>

	<div class="container mt-4">

		<div class="form-group">
			
			<select class="form-control" id="siswa">
				<option disabled selected>-- Pilih Kelas --</option>
				<?php
				foreach($kelas as $row)

				{
					echo '<option value='.$row->kelas_id.'>'.$row->kelas_nama.'</option>';
				}

				?>
			</select>
		</div>

		<table class="table" >
			<thead>
				<tr>

					<th scope="col">Id</th>
					<th scope="col">Nama</th>
					<th scope="col">Nim</th>

				</tr>
			</thead>
			<tbody>
				<tr>
					
					
				</tr>
			</tbody>
		</table>
	</div>

</body>
</html>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$('#siswa').change(function(){
			var siswa_id = $(this).val();

			$.ajax({
				url: "<?php echo base_url(); ?>Welcome/carisiswa",
				method: "POST",
				data: {siswa_id:siswa_id},
				success: function(data)
				{
					$('tbody').html(data);
				}
			});
		});
	});
</script>