<div class="content-wrapper">
	<section class="content">
		<h4><strong>Book Detail</strong></h4>

		<table class="table">
			<tr>
				<th>ID Book</th>
				<td><?php echo $detail->id_buku ?></td>
			</tr>
			<tr>
				<th>Book Title</th>
				<td><?php echo $detail->judul_buku ?></td>
			</tr>
			<tr>
				<th>Author</th>
				<td><?php echo $detail->nama_pengarang ?></td>
			</tr>
			<tr>
				<th>Release date</th>
				<td><?php echo $detail->rilis ?></td>
			</tr>
			<tr>
				<th>Link</th>
				<td><?php echo $detail->link ?></td>
			</tr>
			<tr>
				<td>
					<img src="<?php echo base_url(); ?>assets/foto/<?php echo $detail->foto; ?>" width="100" height="110">
				</td>
				<td></td>
			</tr>
		</table>
		<a href="<?php echo base_url('mahasiswa/index'); ?>" class="btn btn-primary ml-3">Back</a>
	</section>
</div>