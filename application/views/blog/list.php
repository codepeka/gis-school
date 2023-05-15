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
            <div class="col-12 row">
                <?php foreach ($blog as $row) : ?>
                    <div class="col-12 col-md-4 col-lg-4">
                        <article class="article article-style-c">
                            <div class="article-header">
                                <div class="article-image" data-background="<?php echo ($row->gambar != null ? base_url('uploads/blog/') . $row->gambar : base_url('assets/img/news/img13.jpg')); ?>" style="background-image: url(&quot;<?php echo ($row->gambar != null ? base_url('uploads/blog/') . $row->gambar : base_url('assets/img/news/img13.jpg')); ?>&quot;);">
                                </div>
                                <!-- assets/img/news/img13.jpg -->
                            </div>
                            <div class="article-details">
                                <div class="article-category"><a>Blog</a>
                                    <div class="bullet"></div> <a><?= $row->updated_at; ?></a>
                                </div>
                                <div class="article-title">
                                    <h2><a href="<?= site_url('blog/detail/') . $row->id; ?>"><?= $row->judul; ?></a></h2>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>