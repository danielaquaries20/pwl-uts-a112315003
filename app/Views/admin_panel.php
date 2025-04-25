<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <!-- Judul Tabel Pengguna -->
    <h3 class="mb-3 text-primary">Data Pengguna Blog</h3>
    <div class="table-responsive mb-4">
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Usernames</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Daniel Aquaries Pratama</td>
                    <td>daniel</td>
                    <td>Admin</td>
                    <td>
                        <button class="btn btn-sm btn-warning">Update</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Bella Antrifosa</td>
                    <td>bella_antrifosa</td>
                    <td>Pengguna</td>
                    <td>
                        <button class="btn btn-sm btn-warning">Update</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Judul Tabel Postingan -->
    <h3 class="mb-3 text-primary">Data Postingan Blog</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Judul Blog</th>
                    <th>Penulis</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mengenal Bootstrap 5</td>
                    <td>Daniel Aquaries Pratama</td>
                    <td>25 April 2025</td>
                    <td>Published</td>
                    <td>
                        <button class="btn btn-sm btn-warning">Update</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Tips SEO untuk Blogger</td>
                    <td>Bella Antrifosa</td>
                    <td>22 April 2025</td>
                    <td>Published</td>
                    <td>
                        <button class="btn btn-sm btn-warning">Update</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Apa Itu SEO dan Mengapa Penting?</td>
                    <td>Daniel Aquaries Pratama</td>
                    <td>20 April 2025</td>
                    <td>Draft</td>
                    <td>
                        <button class="btn btn-sm btn-warning">Update</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>