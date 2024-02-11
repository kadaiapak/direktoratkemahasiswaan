<!-- sidebar -->
<div class="sidebar col-md-4">
    <aside>
        <!-- Start Sidebar Item -->
        <div class="sidebar-item search">
            <div class="title">
                <h4>Search</h4>
            </div>
            <div class="sidebar-info">
                <form>
                    <input type="text" class="form-control">
                    <input type="submit" value="search">
                </form>
            </div>
        </div>
        <!-- End Sidebar Item -->

        <!-- Start Sidebar Item -->
        <div class="sidebar-item category">
            <div class="title">
                <h4>Kategori</h4>
            </div>
            <div class="sidebar-info">
                <ul>
                    <li>
                        <a href="<?= base_url('/berita-beasiswa'); ?>">Beasiswa</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/berita-prestasi'); ?>">Lomba / Prestasi</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/berita-organisasi'); ?>">Organisasi Kemahasiswaan</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/'); ?>">Alumni</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Sidebar Item -->

        <!-- Start Sidebar Item -->
        <div class="sidebar-item recent-post">
            <div class="title">
                <h4>informasi Penting</h4>
            </div>
            <?php foreach ($beritaPenting as $bp) { ?>
                <div class="item">
                <div class="content">
                    <div class="thumb"  >
                        <a href="<?= base_url('/berita/'.$bp['berita_slug']); ?>">
                            <img src="<?= base_url('upload/berita_sampul/'.$bp['berita_sampul']); ?>" alt="Thumb">
                        </a>
                    </div>
                    <div class="info">
                        <h4>
                            <a href="<?= base_url('/berita/'.$bp['berita_slug']); ?>"><?= $bp['berita_judul']; ?></a>
                        </h4>
                        <div class="meta">
                            <i class="fas fa-eye"></i><a href="<?= base_url('/berita/'.$bp['berita_slug']); ?>"><?= $bp['berita_tayang']; ?> dilihat</a> 
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- End Sidebar Item -->
    </aside>
</div>
<!-- end sidebar -->