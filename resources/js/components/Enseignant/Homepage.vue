<template>
    <div class="nk-body bg-lighter npc-default has-sidebar ">

        <div class="nk-app-root">
            <!-- main @s -->
            <div class="nk-main ">
                <!-- sidebar @s -->
                <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                    <div class="nk-sidebar-element nk-sidebar-head">
                        <div class="nk-sidebar-brand">
                            <router-link :to="{ name: 'locale-homepage' }" href="#" class="logo-link nk-sidebar-logo">
                                <!-- <img class="logo-light logo-img" src="/assets/images/logo1.png" srcset="/assets/images/logo1.png" alt="logo"> -->
                                <img class="logo-dark logo-img" src="/assets/images/logo1.png"
                                    srcset="/assets/images/logo1.png" style="width:100%" alt="logo-dark">
                                <!-- <img class="logo-small logo-img logo-img-small" src="/assets/images/logo1.png" srcset="/assets/images/logo1.png 2x" alt="logo-small"> -->
                            </router-link>
                        </div>
                        <div class="nk-menu-trigger me-n2">
                            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                                    class="icon ni ni-arrow-left"></em></a>
                            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                                data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                        </div>
                    </div><!-- .nk-sidebar-element -->
                    <!-- debut le menu -->
                    <Menu />
                    <!-- fin le menu -->
                </div>
                <!-- sidebar @e -->
                <!-- wrap @s -->
                <div class="nk-wrap ">
                    <!-- main header @s -->

                    <!-- debut Header -->
                    <Header />
                    <!-- fin Header -->

                    <!-- main header @e -->
                    <!-- content @s -->
                    <div class="nk-content ">



                        <div class="container-fluid">

                            <!-- ici le corps -->
                            <div class="nk-block">
                                <div class="row g-gs">
                                    <div class="col-xxl-3 col-sm-3">
                                        <div class="card">
                                            <div class="nk-ecwg nk-ecwg6">
                                                <div class="card-inner">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title"> <em class="icon ni ni-user-alt"></em>
                                                                Elèves</h6>
                                                        </div>
                                                    </div>
                                                    <div class="data">
                                                        <div class="data-group">
                                                            <div class="amount">{{ nbstudents }}</div>
                                                            <div class="nk-ecwg6-ck">
                                                                <div class="chartjs-size-monitor">
                                                                    <div class="chartjs-size-monitor-expand">
                                                                        <div class=""></div>
                                                                    </div>
                                                                    <div class="chartjs-size-monitor-shrink">
                                                                        <div class=""></div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div><!-- .card-inner -->
                                            </div><!-- .nk-ecwg -->
                                        </div><!-- .card -->
                                    </div><!-- .col -->

                                    <div class="col-xxl-3 col-sm-3">
                                        <div class="card">
                                            <div class="nk-ecwg nk-ecwg6">
                                                <div class="card-inner">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title"><em class="icon ni ni-building"></em>
                                                                Classes</h6>
                                                        </div>
                                                    </div>
                                                    <div class="data">
                                                        <div class="data-group">
                                                            <div class="amount">{{ nbclasses }}</div>
                                                            <div class="nk-ecwg6-ck">
                                                                <div class="chartjs-size-monitor">
                                                                    <div class="chartjs-size-monitor-expand">
                                                                        <div class=""></div>
                                                                    </div>
                                                                    <div class="chartjs-size-monitor-shrink">
                                                                        <div class=""></div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div><!-- .card-inner -->
                                            </div><!-- .nk-ecwg -->
                                        </div><!-- .card -->
                                    </div><!-- .col -->

                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- content @e -->
                    <!-- footer @s -->

                    <!-- footer @e -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- main @e -->
        </div>

    </div>
</template>
<script>
import { reactive, computed, onMounted } from 'vue'
import useSessions from "../../composables/sessions";
import Menu from './Menus/Sidebar.vue';
import Header from './Headers/Header.vue';
import SearchStudentbar from './Searchs/Searchbar.vue';

export default {
    setup() {
        const { getstudentsNb, getclassesNb, nbstudents, nbclasses } = useSessions();
        onMounted(getstudentsNb);
        onMounted(getclassesNb);
        console.log('nous sommes au niveau de la homepage')

        return {
            getstudentsNb,
            nbstudents,
            nbclasses,
            getclassesNb
        };

    },
    components: {
        Menu, Header, SearchStudentbar
    },

    mounted() {
        console.log('ceci est la page de selection de session');
        this.setUsername();

    },
    data() {
        return {
            isModalVisible: false,
            visiblesearch: false,
            Username: "",
            UserSession: "",
        };
    },
    methods: {

        fetchData() {
            this.$router.go();
        },
        setUsername() {
            //nous verifions si l'utilsateur est bien connecté sinon nous le renvoyons sur la page de connexion

            if (localStorage.getItem("UserData") === null) {

                this.$router.push("/");

            } else {
                let UsernameData = localStorage.getItem("UserName");
                this.Username = UsernameData;
                //   console.log(UsernameData);
            }

        },
        choisirsession(sessionEtab) {
            localStorage.setItem("UserSessionchoose", sessionEtab);
        }

    },
    watch: {
        // call again the method if the route changes
        //'$route': 'fetchData'
    }

}
</script>