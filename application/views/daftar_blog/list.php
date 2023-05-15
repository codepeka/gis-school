<script src="<?= base_url('action/daftar-blog.js'); ?>"></script>

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
                        <a type="button" class="btn btn-primary daterange-btn icon-left btn-icon tambah" href="daftarblog/add">
                            <i class="fas fa-plus"></i> Tambah Data Blog
                        </a>
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
                                        <th>Judul</th>
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