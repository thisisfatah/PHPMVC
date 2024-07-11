<div class="container mt-3">
    <div class="row">
                <div class="col-lg-6">
                  <?= Flasher::flash(); ?>
                </div>

              </div>

      <div class="row mb-2">
        <div class="col-lg-6">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal" id="tombolTambah">
            Tambah Data Mahasiswa
            </button>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-lg-6">
          <form action="<?= BASEURL; ?>/mahasiswa/cari/" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Mahasisiwa" name="keyword" id="keyword" aria-describedby="button-addon2" autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit" id="tombol-cari">Cari</button>
            </div>
          </div>            
          </form>
        </div>
      </div>

      <div class="row ">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item ">
                        <?= $mhs['nama']; ?>

                        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('yakin?');">hapus</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-warning float-right ml-2 tombolUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ml-2">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
</div>


<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judul-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="form-modal-label">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/mahasiswa/tambah/" method="post">
          <input type="hidden" name="id" id="id">
        <div class="form-group">
            <label for="nama">Name</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Your Name">
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="number" class="form-control" id="nrp" name="nrp" placeholder="12334546">
        </div>

        
      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
    </form>
    </div>
  </div>
</div>