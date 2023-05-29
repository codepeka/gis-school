<section class="section">
    <div class="section-header">
        <a href="<?= site_url('sekolah') ?>">
            <h5 class="fa fa-arrow-left m-0 mt-2 mr-3 ml-2"></h5>
        </a>
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
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="3">
                                        <h3 class="m-0"><?= $sekolah->nama; ?></h3>
                                    </th>
                                </tr>
                            </thead>
                            <tr>
                                <td width="200px"><b>NPSN</b></td>
                                <td width="10px">:</td>
                                <td><?= $sekolah->npsn; ?></td>
                            </tr>
                            <tr>
                                <td width="200px"><b>Tipe Sekolah</b></td>
                                <td width="10px">:</td>
                                <td><?= ($sekolah->tipe_sekolah == 'N' ? 'Negeri' : 'Swasta'); ?></td>
                            </tr>
                            <tr>
                                <td width="200px"><b>Lintang</b></td>
                                <td width="10px">:</td>
                                <td><?= $sekolah->lintang; ?></td>
                            </tr>
                            <tr>
                                <td width="200px"><b>Bujur</b></td>
                                <td width="10px">:</td>
                                <td><?= $sekolah->bujur; ?></td>
                            </tr>
                            <tr>
                                <td width="200px"><b>Alamat</b></td>
                                <td width="10px">:</td>
                                <td><?= $sekolah->alamat; ?></td>
                            </tr>
                        </table>
                        <table class="table table-bordered">
                            <tr>
                                <td colspan="3" class="text-center">
                                    <b>Detail Sekolah : </b>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3"><br><?= $sekolah->deskripsi; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>