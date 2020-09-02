<template>
    <div class="hold-transaction login-page">
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
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">
                        You forgot your password? Here you can easily retrieve a new
                        password.
                    </p>

                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-info btn-block">
                                    Request new password
                                </button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "RecoverpasswordComponent"
    }
</script>

<style scoped>
    .card {
        box-shadow: 5px 5px 5px 5px black;
        -moz-box-shadow: 5px 5px 5px 5px black;
        -webkit-box-shadow: 5px 5px 5px 5px black;
    }
    .card-body {
        border-radius: 8px !important;
    }

    .login-page {
        background-color: #923cb5;
        background-image: linear-gradient(147deg, #923cb5 0%, #000000 74%);
        font-family: "Open Sans", sans-serif;
    }
</style>
