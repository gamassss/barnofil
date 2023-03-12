<div class="d-flex gap-2">
	<button type="button" data-bs-toggle="modal" data-bs-target="#modal-edit" class="btn btn-info btn-edit-program" data-id="{{ $model->id }}">Detail</button>
	<form action="/admin/data/user/{{ $model->id }}" method="post">
			@csrf
			@method('DELETE')
			<button onclick="return confirm('Apa anda yakin?')" type="submit" class="btn btn-danger">Hapus</button>
	</form>
</div>