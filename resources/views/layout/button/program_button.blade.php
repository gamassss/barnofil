<div class="d-flex gap-2">
    <button type="button" data-bs-toggle="modal" data-bs-target="#modal-edit" class="btn btn-info btn-edit-program" data-id="{{ $model->id }}">Edit</button>
    <form action="/admin/data/program/{{ $model->id }}" method="post">
        @csrf
        @method('DELETE')
        <button onclick="return confirm('Apa anda yakin?')" type="submit" class="btn btn-danger">Hapus</button>
    </form>
</div>

<script>
    $('.btn-info').unbind().on('click', function() {
        let id = $(this).attr('data-id');
				
				$.ajax({
					type: "get",
					url: `/admin/data/program/${id}/edit`,
					data: '',
					success: function (res) {
						console.log(res)
					}
				});
    });
</script>
