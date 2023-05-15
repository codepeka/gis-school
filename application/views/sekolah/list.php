<script src="<?= base_url('action/sekolah.js'); ?>"></script>

<section class="section">
  <div class="section-header">
    <h1><?= $title; ?></h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item">Apps</div>
      <div class="breadcrumb-item">Layout</div>
      <div class="breadcrumb-item active"><?= $url; ?></div>
    </div>
  </div>

  <div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <!-- <h4>Basic DataTables</h4> -->
            <button type="button" class="btn btn-primary daterange-btn icon-left btn-icon tambah" onclick="tambah()">
              <i class="fas fa-plus"></i> Tambah Data Sekolah
            </button>
            <button class="btn btn-icon icon-left btn-info ml-2" onclick="reload_table()">
              <i class="fas fa-sync"></i> Refresh
            </button>
          </div>
          <div class="card-body">

            <!-- tabelnya -->
            <div class="table-responsive">
              <table class="table table-striped" id="myTable">
                <thead>
                  <tr>
                    <th class="text-center"> # </th>
                    <th>NPSN</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Tanggal Update</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody id="showData">
                  <!-- Isinya -->
                </tbody>
              </table>
              <!-- penutup tabelnya -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modalnya -->
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleModal">Tambah Data Sekolah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="needs-validation" novalidate="" id="myForm">
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="npsn">NPSN</label>
              <input type="hidden" name="idne" id="idne">
              <input type="text" class="form-control" name="npsn" id="npsn" required="" minlength="8">
              <!-- Validation -->
              <div class="valid-feedback"> Good job! </div>
              <div class="invalid-feedback"> NPSN minimal 6 kata</div>
              <!-- End Validation -->
            </div>
            <div class="form-group col-md-6">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" name="nama" id="nama" required="" minlength="6">
              <!-- Validation -->
              <div class="valid-feedback"> Good job! </div>
              <div class="invalid-feedback"> Nama minimal 6 kata</div>
              <!-- End Validation -->
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="provinsi">Provinsi</label>
              <input type="text" class="form-control" name="provinsi" id="provinsi" required="">
              <!-- Validation -->
              <div class="valid-feedback"> Good job! </div>
              <div class="invalid-feedback"> Provinsi wajib diisi.</div>
              <!-- End Validation -->
            </div>
            <div class="form-group col-md-6">
              <label for="kota">Kota</label>
              <input type="text" class="form-control" name="kota" id="kota" required="">
              <!-- Validation -->
              <div class="valid-feedback"> Good job! </div>
              <div class="invalid-feedback"> Kota wajib diisi.</div>
              <!-- End Validation -->
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="kecamatan">Kecamatan</label>
              <input type="text" class="form-control" name="kecamatan" id="kecamatan" required="">
              <!-- Validation -->
              <div class="valid-feedback"> Good job! </div>
              <div class="invalid-feedback"> Kecamatan wajib diisi.</div>
              <!-- End Validation -->
            </div>
            <div class="form-group col-md-6">
              <label for="kelurahan">Kelurahan</label>
              <input type="text" class="form-control" name="kelurahan" id="kelurahan" required="">
              <!-- Validation -->
              <div class="valid-feedback"> Good job! </div>
              <div class="invalid-feedback"> Kelurahan wajib diisi.</div>
              <!-- End Validation -->
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="status_pendidikan">Status Pendidikan</label>
              <select class="form-control" name="status_pendidikan" id="status_pendidikan" required="">
                <option value=""> ~~~ PILIH STATUS PENDIDIKAN ~~~ </option>
                <option value="SMA">SMA</option>
                <option value="SMK">SMK</option>
                <option value="MA">MA</option>
                <option value="MAK">MAK</option>
              </select>
              <!-- Validation -->
              <div class="valid-feedback"> Good job! </div>
              <div class="invalid-feedback"> Wajib Diisi! </div>
              <!-- End Validation -->
            </div>
            <div class="form-group col-md-6">
              <label for="tipe_sekolah">Tipe Sekolah</label>
              <select class="form-control" name="tipe_sekolah" id="tipe_sekolah" required="">
                <option value=""> ~~~ PILIH TIPE SEKOLAH ~~~ </option>
                <option value="N">NEGERI</option>
                <option value="S">SWASTA</option>
              </select>
              <!-- Validation -->
              <div class="valid-feedback"> Good job! </div>
              <div class="invalid-feedback"> Wajib Diisi! </div>
              <!-- End Validation -->
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="akreditasi">Akreditasi</label>
              <input type="text" class="form-control" name="akreditasi" id="akreditasi" required="">
              <!-- Validation -->
              <div class="valid-feedback"> Good job! </div>
              <div class="invalid-feedback"> Akreditasi wajib diisi.</div>
              <!-- End Validation -->
            </div>
            <div class="form-group col-md-6">
              <label for="kurikulum">Kurikulum</label>
              <input type="text" class="form-control" name="kurikulum" id="kurikulum" required="">
              <!-- Validation -->
              <div class="valid-feedback"> Good job! </div>
              <div class="invalid-feedback"> Kurikulum wajib diisi.</div>
              <!-- End Validation -->
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="lintang">Lintang</label>
              <input type="text" class="form-control" name="lintang" id="lintang" required="">
              <!-- Validation -->
              <div class="valid-feedback"> Good job! </div>
              <div class="invalid-feedback"> Lintang wajib diisi.</div>
              <!-- End Validation -->
            </div>
            <div class="form-group col-md-6">
              <label for="bujur">Bujur</label>
              <input type="text" class="form-control" name="bujur" id="bujur" required="">
              <!-- Validation -->
              <div class="valid-feedback"> Good job! </div>
              <div class="invalid-feedback"> Bujur wajib diisi.</div>
              <!-- End Validation -->
            </div>
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" required="" minlength="6"></textarea>
            <!-- Validation -->
            <div class="valid-feedback"> Good job! </div>
            <div class="invalid-feedback"> Alamat minimal 6 kata </div>
            <!-- End Validation -->
          </div>
        </div>
        <div class="modal-footer bg-whitesmoke">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button class="btn btn-primary" id="btnSave" onclick="save()">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- penutup ModalNya -->