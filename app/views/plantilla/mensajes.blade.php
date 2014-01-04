<?php 
	$msj_error = Session::get('msj_error');
?>
@if (!empty($msj_error))
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<strong>Error</strong> {{Session::get('msj_error')}}
</div>
@endif

@if (isset($msj_informacion))
<div class="alert alert-info alert-dismissable">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Nota:</strong> {{$msj_informacion}}
</div>
@endif

@if (isset($msj_exito))
<div class="alert alert-success alert-dismissable">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	{{$msj_exito}}
</div>
@endif