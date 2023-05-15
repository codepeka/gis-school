<link rel="stylesheet" href="<?= base_url() ?>assets/modules/summernote/summernote-bs4.css">
<script src="<?= base_url() ?>assets/modules/summernote/summernote-bs4.js"></script>
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
                    <div class="card-body">
                        <form class="needs-validation" novalidate="" id="myForm" method="post" action="<?= site_url('daftarblog/store') ?>" enctype="multipart/form-data">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul : </label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="judul" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar : </label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="file" name="gambar" class="form-control" style="height: 48px">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Isi : </label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea name="isi" class="summernote-simple" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Bagikan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>