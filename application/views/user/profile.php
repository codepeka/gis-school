<script type="text/javascript">
    const base_url = '<?php echo base_url(); ?>';
</script>
<script src="<?= base_url('action/profile.js'); ?>"></script>

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
                <!-- Form -->
                <form class="needs-validation" novalidate="" id="myForm">
                    <div class="card" id="settings-card">
                        <div class="card-header">
                            <h4>Edit Profil</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group row align-items-center">
                                <label for="site-title" class="form-control-label col-sm-3 text-md-right">Nama</label>
                                <div class="col-sm-6 col-md-9">
                                    <input type="text" name="nama" class="form-control" id="nama" value="<?= $this->session->userdata('name') ?>" required>
                                    <!-- Validation -->
                                    <div class="valid-feedback"> Good job! </div>
                                    <div class="invalid-feedback"> Nama Wajib Diisi! </div>
                                    <!-- End Validation -->
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label for="site-title" class="form-control-label col-sm-3 text-md-right">Username</label>
                                <div class="col-sm-6 col-md-9">
                                    <input type="text" name="username" class="form-control" id="username" value="<?= $this->session->userdata('username') ?>" required>
                                    <!-- Validation -->
                                    <div class="valid-feedback"> Good job! </div>
                                    <div class="invalid-feedback"> Username Wajib Diisi! </div>
                                    <!-- End Validation -->
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label for="site-title" class="form-control-label col-sm-3 text-md-right">Password Lama</label>
                                <div class="col-sm-6 col-md-9">
                                    <input type="text" name="passLama" class="form-control" id="passLama" required>
                                    <!-- Validation -->
                                    <div class="valid-feedback"> Good job! </div>
                                    <div class="invalid-feedback"> Password Lama Wajib Diisi! </div>
                                    <!-- End Validation -->
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label for="site-title" class="form-control-label col-sm-3 text-md-right">Password Baru</label>
                                <div class="col-sm-6 col-md-9">
                                    <input type="text" name="passBaru" class="form-control" id="passBaru" required>
                                    <!-- Validation -->
                                    <div class="valid-feedback"> Good job! </div>
                                    <div class="invalid-feedback"> Password Baru Wajib Diisi! </div>
                                    <!-- End Validation -->
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label for="site-title" class="form-control-label col-sm-3 text-md-right">Ulangi Password Baru</label>
                                <div class="col-sm-6 col-md-9">
                                    <input type="text" name="ulangiPassBaru" class="form-control" id="ulangiPassBaru" required>
                                    <!-- Validation -->
                                    <div class="valid-feedback"> Good job! </div>
                                    <div class="invalid-feedback"> Ulangi Password Baru Wajib Diisi! </div>
                                    <!-- End Validation -->
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-whitesmoke text-md-right">
                            <button class="btn btn-primary" id="btnSave" onclick="save()">Save Changes</button>
                        </div>
                    </div>
                </form>
                <!-- penutup form -->
            </div>
        </div>
    </div>
</section>