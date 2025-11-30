<x-layout>
    <div class="mw-md py-4">
        <div class="row">
            <div class="col-md-8 mb-4">

                <p class="fw-bold fs-6" style="text-align: right;">Score</p>
                <p class="text-muted fs-6" style="text-align: right;">Belum dinilai</p>

                <div class="d-flex gap-3">
                    <div class="d-none d-lg-block">
                        <img class="rounded-circle object-fit-cover" width="40" height="40" src="">
                    </div>
                    <div class="w-100">
                        <h2 class="fs-5 fw-bold mt-2">Judul Postingan</h2>

                        <p class="fs-vs text-muted">Nama Pengguna . Tanggal</p>

                        <div class="fs-6">
                            Konten postingan di sini.
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6 mt-2">
                                File 1
                            </div>
                            <div class="col-md-6 mt-2">
                                File 2
                            </div>
                        </div>

                        <div class="w-100 mt-4 d-flex justify-content-between align-items-center">
                            <p class="fs-6 fw-bold">100 Poin</p>
                            <p class="fs-vs text-muted mt-1">Berakhir: due date</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-4">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div id="file-preview" class="mt-3"></div>
                        <div class="mb-3">
                            <label class="form-label">Tambahkan Tugas</label>
                            <input type="file" name="files[]" multiple class="form-control" id="file-input">
                        </div>
                        <button class="btn btn-dark w-100 mt-2">
                            Assign
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-md-4">
                <a href="#" class="btn btn-dark w-100">Lihat Pengumpulan</a>
            </div>
        </div>
    </div>

    <script src="/scripts/preview.js"></script>
</x-layout>
