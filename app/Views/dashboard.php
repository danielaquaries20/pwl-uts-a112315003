<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<!-- Table with stripped rows -->
<!-- <table class="table datatable">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Position</th>
            <th scope="col">Age</th>
            <th scope="col">Start Date</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Brandon Jacob</td>
            <td>Designer</td>
            <td>28</td>
            <td>2016-05-25</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Bridie Kessler</td>
            <td>Developer</td>
            <td>35</td>
            <td>2014-12-05</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Ashleigh Langosh</td>
            <td>Finance</td>
            <td>45</td>
            <td>2011-08-12</td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>Angus Grady</td>
            <td>HR</td>
            <td>34</td>
            <td>2012-06-11</td>
        </tr>
        <tr>
            <th scope="row">5</th>
            <td>Raheem Lehner</td>
            <td>Dynamic Division Officer</td>
            <td>47</td>
            <td>2011-04-19</td>
        </tr>
    </tbody>
</table> -->
<!-- Navbar -->
<div class="container-fluid">
    <div class="row">
        <!-- Main content -->
        <main>
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-body">
                            <h5 class="card-title text-white">Jumlah Blog</h5>
                            <p class="card-text">10</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-body">
                            <h5 class="card-title text-white">Jumlah Pengguna</h5>
                            <p class="card-text">10</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-body">
                            <h5 class="card-title text-white">Kategori Blog</h5>
                            <p class="card-text">10</p>
                        </div>
                    </div>
                </div>
            </div>

            <h4>Blog Terbaru</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cara Membuat Blog dengan Bootstrap</td>
                        <td>Tutorial</td>
                        <td>25 April 2025</td>
                        <td><button class="btn btn-sm btn-primary">Delete</button></td>
                    </tr>
                    <tr>
                        <td>Tips Menulis Artikel yang Menarik</td>
                        <td>Tips</td>
                        <td>24 April 2025</td>
                        <td><button class="btn btn-sm btn-primary">Delete</button></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</div>

<!-- End Table with stripped rows -->
<?= $this->endSection() ?>