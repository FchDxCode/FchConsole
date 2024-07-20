@extends('Layout')
@section('Content')

<a href="#" onclick="ModalTambahGame()"  class="btn btn-success"> + Add New Data</a>

<table class="table table-bordered">
    <tr>
        <th>Kode game</th>
        <th>Nama game</th>
        <th>Deskripsi game</th>
        <th>Link game</th>
        <th>Opsi</th>
    </tr>
    @foreach($game as $Get)
    <tr>
        <td>{{ $Get->kd_game }}</td>
        <td>{{ $Get->nama_game }}</td>
        <td>{{ $Get->desk_game }}</td>
        <td>{{ $Get->link_game }}</td>
        <td>
            <a href="#" onclick="ModalEditGame({{ $Get->kd_game }} ,'{{ $Get->nama_game }}')" class="btn btn-info" >Update</a>
            |
            <a href="#" onclick="ModalHapusGame({{ $Get->kd_game }})" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
</table>


<!-- Form Modal Tambah Berita -->
<form action="game/tambah" method="post">
    @csrf
<div class="modal fade" id="ModalTambahGame" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Tambah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
                <label  class="form-label">Kode game</label>
                <input type="text" class="form-control" name="kd_game" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama game</label>
                <input name="nama_game" class="form-control" required></input>
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi game</label>
                <input name="desk_game" class="form-control" required></input>
            </div>
            <div class="mb-3">
                <label class="form-label">Link game</label>
                <input type="url" name="link_game" class="form-control" required></input>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
        </div>
        </div>
    </div>
</div>
</form>
<!-- Form Modal Tambah Berita -->


<!-- Form Modal Hapus Berita-->
<form action="game/hapus" method="post">
    @csrf
<div class="modal fade" id="ModalHapusGame" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
          <div class="modal-footer">
              <input type="hidden" name="kd_game">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
          </div>
      </div>
    </div>
  </div>
</form>
  <!-- Form Modal Hapus Berita-->

<!-- Form Modal Edit Berita -->
<form action="game/edit" method="post">
    @csrf
<div class="modal fade" id="ModalEditGame" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Ubah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
                <label  class="form-label">Kode Berita</label>
                <input type="text" class="form-control" name="kd_game" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama Berita</label>
                <input type="text" class="form-control" name="nama_game"  required>
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi game</label>
                <input type="text" class="form-control" name="desk_game" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Link game</label>
                <input type="url" class="form-control" name="link_game" required>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-primary" name="ubah" value="Ubah">
        </div>
        </div>
    </div>
</div>
</form>
<!-- Form Modal Edit Berita -->


<script>

    // Modal Tambah Berita
    function ModalTambahGame () {
           $('#ModalTambahGame').modal('show');
       }
    // Modal Tambah Berita


     // Modal Hapus Berita
     function ModalHapusGame ($id) {
            $('[name="kd_game"]').val($id);
           $('#ModalHapusGame').modal('show');
       }
    // Modal Tambah Berita

    // Modal Edit Berita
    function ModalEditGame (id,nama,desk,link) {

    $('[name="kd_game"]').val(id);
    $('[name="nama_game"]').val(nama);
    $('[name="desk_game"]').val(desk);
    $('[name="link_game"]').val(link);
    $('#ModalEditGame').modal('show');
}
// Modal Edit Berita




   </script>



@endsection


