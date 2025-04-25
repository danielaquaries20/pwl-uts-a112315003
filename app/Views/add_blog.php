<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<form>
    <!-- Judul -->
    <div class="mb-3">
        <label for="judul" class="form-label">Judul Blog</label>
        <input type="text" class="form-control" id="judul" placeholder="Masukkan judul Blog" required>
    </div>

    <!-- Penulis -->
    <div class="mb-3">
        <label for="penulis" class="form-label">Nama Penulis</label>
        <input type="text" class="form-control" id="penulis" placeholder="Masukkan nama penulis" required>
    </div>

    <!-- Tanggal -->
    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal Blog</label>
        <input type="date" class="form-control" id="tanggal" required>
    </div>

    <!-- Status -->
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" required>
            <option value="" disabled selected>Pilih status</option>
            <option value="Published">Published</option>
            <option value="Draft">Draft</option>
        </select>
    </div>

    <!-- Konten -->
    <div class="mb-3">
        <label for="konten" class="form-label">Isi Blog</label>
        <textarea class="form-control" id="konten" rows="6" placeholder="Tulis isi Blog di sini..."
            required></textarea>
    </div>

    <!-- Tombol Submit -->
    <button type="submit" class="btn btn-primary">Simpan Blog</button>
</form>
</div>

<?= $this->endSection() ?>