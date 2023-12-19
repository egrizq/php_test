<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/css/bootstrap.css">
</head>

<body>
    <div class="container">

        <br>
        <div class="row">
            <div class="col-3">
                <img src="image/logo_undira.jpg" width="200px" style="margin-bottom: 10px;">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Dashboard</a>
                    <a class="nav-link" id="v-pills-profil-tab" data-toggle="pill" href="#v-pills-profil" role="tab" aria-controls="v-pills-profil" aria-selected="false">Jadwal Kuliah</a>
                    <a class="nav-link" id="v-pills-kontak-tab" data-toggle="pill" href="#v-pills-kontak" role="tab" aria-controls="v-pills-kontak" aria-selected="false">Nilai Mahasiswa</a>
                    <a class="nav-link" data-toggle="pill" href="logout.php" role="tab" aria-controls="v-pills-kontak" aria-selected="false">Logout</a>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h4>Dashboard</h4>
                        <div class="row">
                            <div class="card col-md-4 mb-3">Jumlah Pertemuan</div>
                            <div class="card col-md-8 mb-3">
                                Jadwal Perkuliahan
                                <small>Realisasi Pembelajaran Kelas</small><br>
                                <small>Semester</small>
                                <small>Matapelajaran</small>
                                <small>Jadwal</small>
                                <small>Ruangan</small>
                                <small>Lokasi</small>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profil" role="tabpanel" aria-labelledby="v-pills-profil-tab">
                        <h4>Jadwal Kuliah</h4>
                        <div class="card">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama Mahasiswa</label>
                                        <select class="form-control">
                                            <option>Silahkan Pilih</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Kode Kelas</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-kontak" role="tabpanel" aria-labelledby="v-pills-kontak-tab">
                        <h4>Kontak</h4>
                        <p>Email : agussuratna@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="css/js/jquery.js"></script>
    <script src="css/js/popper.js"></script>
    <script src="css/js/bootstrap.js"></script>
</body>

</html>