<template>
    <div class="nk-header nk-header-fixed is-light">
        <div class="container-fluid">
            <div class="nk-header-wrap">
                <div class="nk-menu-trigger d-xl-none ms-n1">
                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                            class="icon ni ni-menu"></em></a>
                </div>
                <div class="nk-header-brand d-xl-none">
                    <a href="html/index.html" class="logo-link">
                        <img class="logo-light logo-img" src="/assets/images/logo1.png"
                            srcset="/assets/images/logo1.png" alt="logo">
                        <img class="logo-dark logo-img" src="/assets/images/logo1.png"
                            srcset="/assets/images/logo1.png " alt="logo-dark">
                    </a>
                </div>

                <div class="nk-header-tools">
                    <ul class="nk-quick-nav">

                        <li class="">

                            <router-link :to="{ name: 'locale-profilepage' }" class="btn btn-primary"
                                title="Mon compte">
                                <em class="icon ni ni-user-alt"></em>
                            </router-link>

                        </li>
                        <li>
                            <button class="btn btn-danger" title="Déconnexion" @click="deconnexion">
                                <em class="icon ni ni-signout"></em>
                            </button>
                        </li>
                    </ul>



                </div>
            </div><!-- .nk-header-wrap -->
        </div><!-- .container-fliud -->
    </div>
</template>
<script>
export default
    {

        mounted() {
            console.log('ceci est la page du header')
        }, methods:
        {
            deconnexion() {
                localStorage.clear();
                this.$router.push("/");

            }
        }
    }
</script>