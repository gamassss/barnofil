<div class="d-flex gap-2">
    <button type="button"
        class="btn btn-info"
        data-id="{{ $model->id }}">Edit</button>
    <form action="/admin/data/program/{{ $model->id }}" method="post">
        @csrf
        @method('DELETE')
        <button onclick="return confirm('Apa anda yakin?')" type="submit"
            class="btn btn-danger">Hapus</button>
    </form>
</div>
