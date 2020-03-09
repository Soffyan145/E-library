<div class="content-wrapper">
	<section class="content">
		<h4><strong>&nbsp Book detail</strong></h4>

		<table class="table">
			<tr>
				<th>Title Book</th>
				<td><?php echo $detail->judul_buku ?></td>
			</tr>
			<tr>
				<th>Author</th>
				<td><?php echo $detail->id_pengarang ?></td>
			</tr>
			<tr>
				<th>Date Release</th>
				<td><?php echo $detail->rilis ?></td>
			</tr>
			<tr>
				<th>Synopsis</th>
				<td><?php echo $detail->sinopsis ?></td>
			</tr>
			<tr>
				<th>Category</th>
				<td><?php echo $detail->kategori ?></td>
			</tr>
			<tr>
				<th>Book Link</th>
				<td><?php echo $detail->link ?></td>
			</tr>
			<tr>
				<th>Cover</th>
				<td>
					<img src="<?php echo base_url(); ?>assets/images/books/<?php echo $detail->foto; ?>" width="100" height="110">
				</td>
				<td></td>
			</tr>
		</table>
		<a href="<?php echo base_url('admin/data_buku/index'); ?>" class="btn btn-primary ml-3">Back</a>
	</section>
</div>