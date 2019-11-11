<div class=" section text-center bg-dark">
        <div class="container">
            <h2 class="title text-white">Kelola Bisnismu Sekarang!</h2>
            <div class="row">
                <!-- Login card -->
                <div class="col-md-3">
                    <div class="card card-profile">
                        <div class="card-header">
                            <img class="mx-auto" src="/img/avatar-1.png" alt="...">
                        </div>
                        <div class="card-content">
                            <h4 class="title">Login sebagai Admin</h4>
                            <p class="card-text">Atur semua barang dan meja untuk restoranmu</p>
                            <a data-toggle="modal" data-target="#loginModal" href="#" class="btn btn-outline-warning btn-round"><i class=""></i>Login Admin</a>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
    
                </div>
                <!-- End Login card -->
                <!-- Login card -->
                <div class="col-md-3">
                    <div class="card card-profile">
                        <div class="card-header">
                            <img class="mx-auto" src="/img/avatar-2.png" alt="...">
                        </div>
                        <div class="card-content">
                            <h4 class="title">Login sebagai Waiter</h4>
                            <p class="card-text">Atur semua pesanan yang ada di menu</p>
                            <a data-toggle="modal" data-target="#loginModal" href="#" class="btn btn-outline-warning btn-round"><i class=""></i>Login Waiter</a>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
                <!-- End Login card -->
                <!-- Login card -->
                <div class="col-md-3">
                    <div class="card card-profile">
                        <div class="card-header">
                            <img class="mx-auto" src="/img/avatar-3.png" alt="...">
                        </div>
                        <div class="card-content">
                            <h4 class="title">Login sebagai Kasir</h4>
                            <p class="card-text">Kelola semua pembayaran dan keuangan</p>
                            <a data-toggle="modal" data-target="#loginModal" href="#" class="btn btn-outline-warning btn-round"><i class=""></i>Login Cashier</a>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
    
                </div>
                <!-- End Login card -->
                <!-- Login card -->
                <div class="col-md-3">
                    <div class="card card-profile">
                        <div class="card-header">
                            <img class="mx-auto" src="/img/avatar-4.png" alt="...">
                        </div>
                        <div class="card-content">
                            <h4 class="title">Login sebagai Owner</h4>
                            <p class="card-text">Lihat dan cetak laporan penjualan kapanpun</p>
                            <a data-toggle="modal" data-target="#loginModal" href="#" class="btn btn-outline-warning btn-round"><i class=""></i>Login Owner</a>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
    
                </div>
                <!-- End Login card -->
                
                 <!-- Login modal -->
                 <div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3>Login</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <form class="form" role="form" autocomplete="off" id="formLogin" novalidate=""
                                        method="POST">
                                        <div class="form-group">
                                            <label for="uname1">Username</label>
                                            <input type="text" class="form-control form-control-lg" name="uname1"
                                                id="uname1" required="">
                                            <div class="invalid-feedback">Oops, you missed this one.</div>
                                        </div>
                                        <div class="form-group">
                                                <a href="" class="float-right">Forgot password?</a>
                                            <label>Password</label>
                                            <input type="password" class="form-control form-control-lg" id="pwd1"
                                                required="" autocomplete="new-password">
                                            <div class="invalid-feedback">Enter your password too!</div>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rememberMe">
                                            <label class="custom-control-label" for="rememberMe">Remember me on this
                                                computer</label>
                                        </div>
                                        <div class="form-group py-4">
                                            <button class="btn btn-outline-danger btn-lg" data-dismiss="modal"
                                                aria-hidden="true">Cancel</button>
                                            <button type="submit" class="btn btn-success btn-lg btn-fill float-right"
                                                id="btnLogin">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Login modal -->
            </div>
        </div>
    </div>