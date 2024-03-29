<div class="d-flex gap-2">
    <button type="button" data-bs-toggle="modal" data-bs-target="#modal-edit" class="btn btn-info btn-edit-program" data-id="{{ $model->id }}">Detail</button>
    <form action="/admin/submission/waiting/{{ $model->id }}" method="post">
        @csrf
        @method('PUT')
        <button type="submit" class="btn btn-success">Approve</button>
    </form>
</div>

<script>
    $('.btn-edit-program').unbind().on('click', function() {
        let id = $(this).attr('data-id');
				
				$.ajax({
					type: "get",
					url: `/admin/data/program/${id}`,
					data: '',
					success: function ({ nama, deskripsi, nama_kategori, status, total_dana, target_dana, tanggal_mulai, tanggal_berakhir }) {
						total_dana = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(total_dana)
						target_dana = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(target_dana)
						$('#nama-program').val(nama);
						$('#deskripsi-program').html(deskripsi);
						$('#kategori-program').val(nama_kategori);
						$('#status-program').val(status);
						$('#dana-terkumpul').val(total_dana);
						$('#target-dana').val(target_dana);
						$('#tanggal-mulai').val(tanggal_mulai);
						$('#tanggal-berakhir').val(tanggal_berakhir);
					}
				});
    });
</script>