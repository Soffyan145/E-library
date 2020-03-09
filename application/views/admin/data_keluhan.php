<div class="container-fluid">

	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>email</th>
			<th>Complaint</th>
			<th>Action</th>
		</tr>

		<?php
		$no = 1;
		foreach ($keluhan as $kl) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $kl->nama ?></td>
				<td><?php echo $kl->email ?></td>
				<td><?php echo $kl->keluhan ?></td>
				<td onclick="javascript: return confirm('Apakah masalah ini sudah teratasi?.. ?')"><?php echo anchor('admin/data_keluhan/hapus/' . $kl->id_keluhan, '<div class="btn btn-danger btn-sm"><i class="fas fa-clipboard-check"> Teratasi</i></div>') ?></td>
			</tr>

		<?php endforeach; ?>

	</table>
</div>