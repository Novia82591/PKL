<div class="card-body">
    <form action="{{url ('simpan-file') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" id="nim" name="nim" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" id="nama" name="nama" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" id="judul" name="judul" class="form-control">
        </div>
        <div class="form-group">
            <input type="file" id="persyaratan" name="persyaratan" class="form-control">
        </div>
        <div class="form-group">
            <input type="file" id="makalah" name="makalah" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" id="status" name="status" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" id="tanggal" name="tanggal" class="form-control">
        </div>
        <div class="form-group">
            <input type="file" id="keterangan" name="keterangan" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </form>
</div>