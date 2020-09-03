<template>
    <div class="hold-transition register-page back-img">
        <div class="register-logo margin-logo-1">
            <a href=""
            ><img
                src="../../../public/assets/images/logo.png"
                height="50"
                width="100"
                class="img-fluid"
                alt=""
            /></a>
        </div>
        <div class="container text-center col-md-8 mt-2 mb-2">
            <h6 class="h5 text-white title_text">Payez et Vendez grace à note boutique personnalisée en ligne <br/> Inscrivez-vous et commencez votre personnalisation.</h6>
        </div>
        <div class="register-box box">
            <div class="card shadow-lg rounded">
                <div class="card-header">
                    <h5 class="login-box-msg text-uppercase text-info">
                        Création de compte
                    </h5>
                </div>
                <div class="card-body register-card-body p-4">
                    <form novalidate @submit.prevent="onSubmit">
                        <div class="input-group mb-3">
                            <input
                                type="text"
                                class="form-control form-control-lg"
                                placeholder="Full Name"
                                v-model="form.name"
                                autocomplete
                            />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input
                                type="email"
                                class="form-control form-control-lg"
                                placeholder="Email"
                                v-model="form.email"
                                autocomplete
                            />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input
                                type="text"
                                class="form-control form-control-lg"
                                placeholder="Adresse"
                                v-model="form.address"
                                autocomplete
                            />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-home"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <select
                                class="form-control form-control-lg select2 "
                                style="width: 100%;"
                                v-model="form.status"
                            >
                                <option title="Status">Type de compte</option>
                                <option value="station" selected="selected"
                                >Station's enterprise</option
                                >
                                <option value="customer">Customer's enterprise</option>
                            </select>
                            <small>select your profile account</small>
                        </div>
                        <div class="form-group">
                            <select
                                class="form-control form-control-lg select2"
                                style="width: 100%;"
                                v-model="form.ccode"
                            >
                                <option title="Pays">Pays</option>
                                <option
                                    :value="country.state"
                                    v-bind:key="country.state"
                                    v-for="country in countries"
                                >{{ country.abbr }}</option
                                >
                            </select>
                            <small>select your country</small>
                        </div>
                        <div class="input-group mb-3">
                            <input
                                type="tel"
                                class="form-control form-control-lg"
                                placeholder="phone"
                                v-model="form.phone"
                                autocomplete
                            />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-phone"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input
                                type="password"
                                class="form-control form-control-lg"
                                placeholder="Password"
                                v-model="form.password"
                            />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input
                                type="password"
                                class="form-control form-control-lg"
                                placeholder="Retype password"
                                v-model="form.password_confirmation"
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
                                    Créer un compte
                                </button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                </div>
                <!-- /.form-box -->
                <div class="card-footer">
                    <div class="social-auth-links text-center">
                        <a href="/login" class="text-center text-info font-italic"
                        ><u>Aviez-vous déjà un compte? Connectez-vous</u></a
                        >
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <footer class="text-white">
            <strong>Copyright © 2020 All rights reserved.</strong>
        </footer>
    </div>
    <!-- /.register-box -->
</template>

<script>
    import axios from "axios";
    export default {
        name: "RegisterComponent",
        data: function() {
            return {
                form: {
                    name: null,
                    address: null,
                    status: null,
                    ccode: null,
                    password: null,
                    password_confirmation: null,
                    phone: null,
                    email: null
                },
                countries: [
                    { state: "ZA", abbr: "Afrique du Sud" },
                    { state: "DZ", abbr: "Algérie" },
                    { state: "AO", abbr: "Angola" },
                    { state: "BJ", abbr: "Bénin" },
                    { state: "BW", abbr: "Botswana" },
                    { state: "BF", abbr: "Burkina Faso" },
                    { state: "BI", abbr: "Burundi" },
                    { state: "CM", abbr: "Cameroun" },
                    { state: "CV", abbr: "Cap-Vert" },
                    { state: "CF", abbr: "République centrafricaine" },
                    { state: "KM", abbr: "Comores" },
                    { state: "CG", abbr: "République du Congo" },
                    { state: "CD", abbr: "République démocratique du Congo" },
                    { state: "CI", abbr: "Côte d'Ivoire" },
                    { state: "DJ", abbr: "Djibouti" },
                    { state: "EG", abbr: "Égypte" },
                    { state: "ER", abbr: "Érythrée" },
                    { state: "ET", abbr: "Éthiopie" },
                    { state: "GA", abbr: "Gabon" },
                    { state: "GM", abbr: "Gambie" },
                    { state: "GH", abbr: "Ghana" },
                    { state: "GN", abbr: "Guinée" },
                    { state: "GW", abbr: "Guinée-Bissau" },
                    { state: "GQ", abbr: "Guinée équatoriale" },
                    { state: "KE", abbr: "Kenya" },
                    { state: "LS", abbr: "Lesotho" },
                    { state: "AI", abbr: "Liberia" },
                    { state: "LY", abbr: "Libye" },
                    { state: "MG", abbr: "Madagascar" },
                    { state: "MW", abbr: "Malawi" },
                    { state: "ML", abbr: "Mali" },
                    { state: "MA", abbr: "Maroc" },
                    { state: "MU", abbr: "Maurice" },
                    { state: "MR", abbr: "Mauritanie" },
                    { state: "MZ", abbr: "Mozambique" },
                    { state: "NA", abbr: "Namibie" },
                    { state: "NE", abbr: "Niger" },
                    { state: "NG", abbr: "Nigeria" },
                    { state: "UG", abbr: "Ouganda" },
                    { state: "RW", abbr: "Rwanda" },
                    { state: "ST", abbr: "São Tomé-et-Principe" },
                    { state: "SN", abbr: "Sénégal" },
                    { state: "SC", abbr: "Seychelles" },
                    { state: "SO", abbr: "Somalie" },
                    { state: "SS", abbr: "Soudan du Sud" },
                    { state: "SZ", abbr: "Eswatini" },
                    { state: "TZ", abbr: "Tanzanie" },
                    { state: "TD", abbr: "Tchad" },
                    { state: "TG", abbr: "Togo" },
                    { state: "ZM", abbr: "Zambie" },
                    { state: "ZW", abbr: "Zimbabwe" }
                ]
            };
        },

        methods: {
            async onSubmit() {
                // try {
                //     const response = await axios({
                //         method: "post",
                //         url: "/api/create-account",
                //         data: {
                //             name: this.form.name,
                //             address: this.form.address,
                //             status: this.form.status,
                //             ccode: this.form.ccode,
                //             password: this.form.password,
                //             password_confirmation: this.form.password_confirmation,
                //             phone: this.form.phone,
                //             email: this.form.email
                //         },
                //         headers: {
                //             Accept: "application/json"
                //         },
                //         dataType: "json"
                //     });
                //     console.log(response.data);
                // } catch (e) {
                //     console.log(e);
                // }
                console.log(this.form);
            }
        }
    };
</script>

<style scoped>
    .margin-logo-1{
        margin-top: 60px!important;
    }
    .card {
        box-shadow: 5px 5px 5px 5px black;
        -moz-box-shadow: 5px 5px 5px 5px black;
        -webkit-box-shadow: 5px 5px 5px 5px black;
        border-radius: 8px !important;
    }
    .register-page {
        background-color: #923cb5;
        background-image: linear-gradient(147deg, #923cb5 0%, #000000 74%);
        font-family: "Open Sans", sans-serif;

        background-size: cover !important;
        background-attachment: fixed !important;
        background-repeat: no-repeat !important;
        width: 100%;
        height: 100%;
    }
    @media (min-width: 576px) {
        .box {
            width: 400px !important;
        }
    }

    @media (min-width: 768px) {
        .box {
            width: 400px !important;
        }
    }

    @media (min-width: 992px) {
        .box {
            width: 400px !important;
        }
    }

    @media (min-width: 1200px) {
        .box {
            width: 450px !important;
        }
    }


    @media (min-width: 576px) {
        .box {
            width: 400px !important;
        }
    }

    @media (min-width: 768px) {
        .title_text {
            font-size: 0.9rem;
        }
    }

    @media (min-width: 992px) {
        .title_text {
            font-size: 0.9rem;
        }
    }

    @media (min-width: 1200px) {
        .title_text {
            font-size: 1.2rem;
        }
    }
</style>
