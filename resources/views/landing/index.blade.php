<!-- content keunggulan -->
<div class="section text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <h2 class="title">Keunggulan Kami</h2>
                <br>
                <h5 class="description">
                    Kami berusaha semaksimal mungkin untuk membuat semua pelanggan
                    yang menggunakan produk kami mendapatkan layanan yang terbaik.
                    Dengan mengandalkan beberapa fitur unggulan yang kami miliki,
                    Kami yakin semua pelanggan kami mendapatkan layanan yang terbaik!
                </h5>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
        <br />
        <br />
        <div class="row">
            <div class="col-md-3">
                <div class="info">
                    <div class="">
                        <img class="col-lg-5" src="/icons/checklist.png" alt="loading icon">
                    </div>
                    <div class="description">
                        <h4 class="info-title">Mudah</h4>
                        <p class="description">Lihat, buat, edit, dan hapus data dengan cepat dan mudah</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info">
                    <div class="">
                        <img class="col-lg-5" src="/icons/form.png" alt="loading icon">
                    </div>
                    <div class="description">
                        <h4 class="info-title">Detail</h4>
                        <p>Cetak laporan kapanpun anda membutuhkannya</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info">
                    <div class="icon">
                        <img class="col-lg-5" src="/icons/idea.png" alt="loading icon">
                    </div>
                    <div class="description">
                        <h4 class="info-title">Teratur</h4>
                        <p>Mengatur setiap pekerja yang anda butuhkan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info">
                    <div class="icon">
                        <img class="col-lg-5" src="/icons/loupe.png" alt="loading icon">
                    </div>
                    <div class="description">
                        <h4 class="info-title">Simpel</h4>
                        <p>Tampilan website yang lebih simpel dan menarik</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>
</div>
<!-- End Content keunggulan -->

<!-- Card section -->
@include('auth.login-modal')
<!-- End Card section -->

<!-- Register section -->
<div id="register" class="section landing-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <h2 class="text-center">Karyawan Baru?</h2>
                <br>
                <br>
                <form class="contact-form" action="" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Nama</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nc-icon nc-single-02"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nc-icon nc-email-85"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nc-icon nc-badge"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nc-icon nc-lock-circle-open"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 ml-auto mr-auto">
                            <button class="btn btn-danger btn-lg btn-fill">Daftar Sekarang</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Register section-->