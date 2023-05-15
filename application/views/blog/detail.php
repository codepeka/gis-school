<section class="section">
    <div class="section-header">
        <h1><?= $blog->judul; ?></h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">Upload : <?= $blog->updated_at; ?></div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <img class="rounded mx-auto d-block" style="max-width: 100%;" src="<?= base_url('uploads/blog/' . $blog->gambar); ?>" alt="Gambar. <?= $blog->judul; ?>">
                        <br />
                        <?= $blog->isi; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>