<!DOCTYPE html>
<html lang="en">

<head>
    <title>STUDIO 5 | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/img/newlogo2putih.png" rel="icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">
        body {
            background-image: url(assets/img/hero-bg.png);
        }

        .form-control.password {
            width: 80%;
            display: block;
            width: 100%;
            height: 34px;
            padding: 0;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        }

        .form-control.password input {
            display: inline;
            width: 90%;
            height: 100%;
            padding: 6px 12px;
            border: none;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555 !important;
        }

        .form-control.password input:focus-visible {
            outline: none;
        }

        .input-group-append {
            display: inline;
        }
    </style>
</head>

<body>

    <!-- if you want to create login page and register page together in one page ...you have to only chnage his name...that's it...                 -->
    <div class="container" style="margin-top: 5%;">
        <div class="row">
            <div class="col-sm-4"> </div>
            <div class="col-md-4">

                <h1 class="text-center text-success"> Sign Up</h1>
                <br />

                <div class="col-sm-16">
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?php echo session()->getFlashdata('error'); ?>
                                </div>
                            <?php endif; ?>
                            <form method="post" action="register/process">
                                <div class=" form-group">
                                    <input type="text" name="email" class="form-control" id="email" placeholder="Email" required="true">
                                </div>
                                <div class=" form-group">
                                    <input type="text" name="nama_lengkap" class="form-control" id="name" placeholder="Nama Lengkap" required="true">
                                </div>
                                <div class=" form-group">
                                    <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="Nomor Telpon" required="true">
                                </div>
                                <div class="form-group">
                                    <div class="form-control password">
                                        <input type="password" name="password" id="password" placeholder="Password" required="true">
                                        <div class="input-group-append">
                                            <span class="input-group-text" onclick="password_show_hide();">
                                                <img src="/img/eye-fill.svg" id="show_eye_password" alt="icon show password">
                                                <img class="hidden" src="/img/eye-slash-fill.svg" id="hide_eye_password" alt="icon hide password">
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" name="submit" value="login" class="pull-right btn btn-block btn-info">Sign In</button>
                                </div>

                            </form>
                            <br><br><br>
                            <div class="text-center">
                                <a href="/login"> Already have account? Sign In Here </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- custom js to handle show and hide password -->
    <script>
        function password_show_hide() {
            var x = document.getElementById("password");
            var show_eye = document.getElementById("show_eye_password");
            var hide_eye = document.getElementById("hide_eye_password");
            if (x.type === "password") {
                x.type = "text";
                show_eye.classList.add("hidden");
                hide_eye.classList.remove("hidden");
            } else {
                x.type = "password";
                show_eye.classList.remove("hidden");
                hide_eye.classList.add("hidden");

            }
        }
    </script>
</body>

</html>