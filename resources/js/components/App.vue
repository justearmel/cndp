<template>
    <div style="background-image:url(/assets/img/cndp.jpg);background-size:cover;">

        <div class="nk-app-root">
            <!-- main @s -->
            <div class="nk-main ">
                <!-- wrap @s -->
                <div class="nk-wrap nk-wrap-nosidebar">
                    <!-- content @s -->
                    <div class="nk-content ">
                        <div class="nk-block nk-block-middle nk-auth-body  wide-xs">

                            <div class="card">
                                <div class="card-inner card-inner-lg">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title" style="text-align:center">Authentification</h4>

                                        </div>
                                    </div>
                                    <div v-if="message !== ''" style="color:white"
                                        class="alert alert-fill alert-success alert-icon" role="alert">
                                        <em class="icon ni ni-check-fill-c"></em> {{ message }}
                                    </div>

                                    <div v-if="error !== ''" class="alert alert-fill alert-danger alert-icon"
                                        style="color:white" role="alert">
                                        <em class="icon ni ni-cross-fill-c"></em> {{ error }}
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="login">Login</label>
                                            </div>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control form-control-lg" v-model="login"
                                                    id="login" placeholder="Entrer votre login">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="password">Mot de passe</label>

                                            </div>
                                            <div class="form-control-wrap">
                                                <a href="#" class="form-icon form-icon-right passcode-switch lg"
                                                    data-target="password">
                                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                                </a>
                                                <input type="password" class="form-control form-control-lg"
                                                    v-model="password" id="password"
                                                    placeholder="Entrer votre mot de passe">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-lg btn-secondary btn-block" @click="seconnecter">Se
                                                connecter</button>
                                        </div>
                                    </form>



                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- wrap @e -->
                </div>
                <!-- content @e -->
            </div>
            <!-- main @e -->
        </div>

    </div>
</template>


<script>



export default {

    mounted() {
        this.initialisation();
    },
    data() {
        return {
            login: "",
            password: "",
            error: "",
            message: "",
            isLoggedIn: false,
        };
    },
    methods:
    {
        seconnecter(e) {
            e.preventDefault();
            if (this.login.length > 0 && this.password.length > 0) {

                axios.get('/sanctum/csrf-cookie').then(response => {
                    axios.post('/api/login', {
                        login: this.login,
                        password: this.password,

                    })
                        .then(response => {

                            if (response.data.success) {

                                this.error = ''
                                this.message = response.data.message;

                                let typeUser = response.data.data[0].type_users;
                                let user_id = response.data.data[0].id;
                                let namesUser = response.data.data[0].nom_users + " " + response.data.data[0].prenom_users;

                                if (typeUser == 'Admin_locale') {
                                    //stockage des informations dans localstorage
                                    localStorage.setItem("UserData", JSON.stringify(response.data.data[0]));
                                    localStorage.setItem("UserName", namesUser);


                                    this.$router.push("/localeadmin/accueil");

                                    //redirection vers l'espace admin

                                } else if (typeUser == 'Teacher') {
                                    //stockage des informations dans localstorage
                                    localStorage.setItem("UserData", JSON.stringify(response.data.data[0]));
                                    localStorage.setItem("UserName", namesUser);
                                    localStorage.setItem("UserSessionchoose", "2020-2021");
                                    localStorage.setItem("user_id", user_id);

                                    this.$router.push("/Teacher/dashboard");

                                    //redirection vers l'espace admin

                                }



                            } else {
                                this.error = response.data.message;


                            }
                        })
                        .catch(function (error) {
                            console.error(error);
                        });
                })

            } else {
                this.error = "Merci de renseigner tous les champs";
            }

        },
        initialisation() {
            if (localStorage.getItem("Notconnectionmethod") === null) {
                //il n'y a pas eu d'éjection de l'utilisation de la plateforme
            } else {
                //nous avons une éjection de la plateforme

                this.error = localStorage.getItem("Notconnectionmethod");

            }
        }
    },
}
</script>



