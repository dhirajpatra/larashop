@if ($message = Session::get('success'))
<div class="alert alert-success alert-block top-15">
	<button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
</div>
@endif
