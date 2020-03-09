<div class="content-wrapper">
	<section class="content">
		<h4><strong>&nbsp Detail author</strong></h4>

		<table class="table">
			<tr>
				<th>ID author</th>
				<td><?php echo $detail_pengarang->id_pengarang ?></td>
			</tr>
			<tr>
				<th>Author name</th>
				<td><?php echo $detail_pengarang->nama_pengarang ?></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><?php echo $detail_pengarang->email ?></td>
			</tr>
			<tr>
				<td>
					<img src="<?php echo base_url(); ?>assets/images/books/<?php echo $detail_pengarang->foto_pengarang; ?>" width="100" height="110">
				</td>
				<td></td>
			</tr>
		</table>
		<a href="<?php echo base_url('admin/data_pengarang/index'); ?>" class="btn btn-primary ml-3">Back</a>
	</section>
</div>