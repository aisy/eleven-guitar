
<link rel="stylesheet" type="text/css" href="<?= base_url('mdl/css/dataTables.material.min.css') ?>">

<script src="<?= base_url('mdl/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('mdl/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('mdl/js/dataTables.material.min.js') ?>"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#data_barang').DataTable( {
			columnDefs: [
			{
				targets: [ 0, 1, 2 ],
				className: 'mdl-data-table__cell--non-numeric'
			}
			]
		} );
	} );
</script>