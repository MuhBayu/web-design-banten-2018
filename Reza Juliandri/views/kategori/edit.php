<form method="post" action="<?=BASEURL?>?c=a_kategori&m=update&id=<?=$_GET['id']?>">
	<div class="is-space"></div>
	<h1 class="is-center is-margin">Edit Kategori</h1>
	<?php if(isset($_SESSION['flash'])): ?>
		<?php if($_SESSION['flash_type'] == "error"): ?>
			<div class="alert is-yellow">
				<p><?=flash()?></p>
			</div>
		<?php else: ?>
			<div class="alert is-red">
				<p><?=flash()?></p>
			</div>
		<?php endif; ?>
	<?php endif; ?>
	<div style="width:70%">
		<div class="form-group">
			<label>Nama Kategori: </label>
			<input type="text" name="nama_kategori" placeholder="Masukkan Nama Kategori" value="<?=$kategori->nama_kategori?>">
		</div>
		<div style="padding-left:67%">
			<button class="btn is-red" type="submit">Submit</button>
			<a class="btn is-yellow" style="font-size: 0.8em;" onclick="window.history.back()" name="login">Kembali</a>
		</div>
	</div>
</form>
