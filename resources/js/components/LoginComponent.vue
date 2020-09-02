<template>
    <div class="hold-transition login-page back-img">
        <div class="login-box">
            <div class="login-logo">
                <a href=""
                ><img
                    src="../../../public/assets/images/logo.png"
                    height="50"
                    width="100"
                    class="img-fluid"
                    alt=""
                /></a>
            </div>
            <!-- /.login-logo -->
            <div class="card shadow-lg rounded">
                <div class="card-header">
                    <h5 class="login-box-msg text-uppercase text-info">
                        Connexion
                    </h5>
                </div>
                <div class="card-body login-card-body">
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input
                                type="password"
                                class="form-control"
                                placeholder="Password"
                            />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-info btn-block">
                                    Se connecter
                                </button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <div class="social-auth-links text-center">
                        <p class="mt-3 mb-1">
                            <a href="/recover_password" class="text-info"><u>I forgot my password</u></a>
                        </p>
                    </div>
                    <!-- /.social-auth-links -->
                </div>
                <!-- /.login-card-body -->
                <div class="card-footer">
                    <div class="social-auth-links text-center">
                        <a href="/register" class="text-center text-info font-italic"
                        ><u
                        > Pas de compte ?
                            Inscrivez-vous</u
                        ></a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "LoginComponent"
    }
</script>

<style scoped>
    .card {
        box-shadow: 5px 5px 5px 5px black;
        -moz-box-shadow: 5px 5px 5px 5px black;
        -webkit-box-shadow: 5px 5px 5px 5px black;
        border-radius: 8px !important;
    }

    .login-page {
        background-color: #923cb5;
        background-image: linear-gradient(147deg, #923cb5 0%, #000000 74%);
        font-family: "Open Sans", sans-serif;
    }
</style>
