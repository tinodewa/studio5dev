<?= $this->extend('pages/user/template/page_layout.php') ?>
<!-- <link href="assets/img/newlogo2putih.png" rel="icon"> -->

<?= $this->section('content') ?>
<section style="background: url(assets/img/signin.png);min-height: 100vh;background-size: cover;">
    <div class="container" style="margin-top: 5%;">
        <div class="row gy-4 justify-content-center">
            <div class="col-md-4">
                <div class="card text-dark">
                    <div class="card-body text-center">
                        <img src="/assets/img/newlogo2.png" height="100" class="d-block m-auto" alt="">
                        <img src="/assets/img/Welcome Back !.png" height="20" class="mt-2 mb-3 d-block m-auto" alt="">
                        <br />
                        <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?php echo session()->getFlashdata('error'); ?>
                            </div>
                        <?php endif; ?>
                        <form method="post" action="login/process" class="mt-3">
                            <div class="mb-3 text-start">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Enter Your Email" required="true">
                            </div>
                            <div class="mb-3 text-start">
                                <label for="password" class="form-label">Password</label>
                                <div class="form-control password d-inline-flex">
                                    <input type="password" name="password" id="password" placeholder="Enter Your Password" required="true">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="showHidePassword">
                                            <img src="/img/eye-fill.svg" id="show_eye_password" alt="icon show password">
                                            <img class="d-none" src="/img/eye-slash-fill.svg" id="hide_eye_password" alt="icon hide password">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mv-2">
                                <button type="submit" name="submit" value="login" class="btn btn-log w-100">Sign In</button>
                            </div>
                        </form>
                        <br>
                        <div class="text-center">
                            Don't have an account? <a href="/register"> Sign Up Here </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- custom js to handle show and hide password -->
<script type="text/javascript">
    jQuery(document).ready(function() {
        $('#showHidePassword').click(function(e) {
            var x = document.getElementById("password");
            var show_eye = document.getElementById("show_eye_password");
            var hide_eye = document.getElementById("hide_eye_password");
            if (x.type === "password") {
                x.type = "text";
                show_eye.classList.add("d-none");
                hide_eye.classList.remove("d-none");
            } else {
                x.type = "password";
                show_eye.classList.remove("d-none");
                hide_eye.classList.add("d-none");
            }
        });
    });
</script>
<?= $this->endSection() ?>