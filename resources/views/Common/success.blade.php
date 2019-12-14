@if(session('status'))
	@if(session('status') == 'eliminado')
		<script type="text/javascript">
			swal({
				position: 'top-center',
				type: 'success',
				title: 'Elemento Eliminado',
				showConfirmButton: false,
				timer: 1500
			})
		</script>
	@endif
	@if(session('status') == 'guardado')
		<script type="text/javascript">
			swal({
				position: 'top-top-center',
				type: 'success',
				title: 'Elemento Guardado',
				showConfirmButton: false,
				timer: 1500
			})
		</script>
	@endif
	@if(session('status') == 'actualizado')
		<script type="text/javascript">
			swal({
				position: 'top-top-center',
				type: 'success',
				title: 'Elemento Actualizado',
				showConfirmButton: false,
				timer: 1500
			})
		</script>
	@endif
@endif