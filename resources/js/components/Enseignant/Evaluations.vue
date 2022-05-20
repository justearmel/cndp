<template>
    <div class="nk-body bg-lighter npc-default has-sidebar ">
        <div class="nk-app-root">
            <div class="nk-main ">
                <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                    <div class="nk-sidebar-element nk-sidebar-head">
                        <div class="nk-sidebar-brand">
                            <router-link :to="{ name: 'locale-homepage' }" class="logo-link nk-sidebar-logo">
                                <img class="logo-dark logo-img" src="/assets/images/logo1.png"
                                    srcset="/assets/images/logo1.png" style="width:100%" alt="logo-dark">
                            </router-link>
                        </div>
                        <div class="nk-menu-trigger me-n2">
                            <a class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                                    class="icon ni ni-arrow-left"></em></a>
                            <a class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                                data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                        </div>
                    </div>
                    <Menu />
                </div>
                <div class="nk-wrap ">
                    <Header />
                    <div class="nk-content ">
                        <div class="container-fluid">
                            <div class="nk-block-head-content mb-4">
                                <h3 class="nk-block-title page-title"><em class="icon ni ni-dashboard-fill"></em>
                                    Evaluations
                                </h3>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-4 mt-1">
                                    <router-link :to="{ name: 'EvaluationsRecapitulatif-Teacher' }"
                                        class="nk-download shadow-sm">
                                        <div class="data">
                                            <div class="thumb"><em style="font-size: -webkit-xxx-large;"
                                                    class="icon ni ni-calendar-alt"></em></div>
                                            <div class="info">
                                                <h6 class="title"><span class="name">Récapitulatif</span></h6>
                                                <div class="meta">
                                                    <span class="version">
                                                        <span class="text-soft">Version: </span> <span>1.3.1</span>
                                                    </span>
                                                    <span class="release">
                                                        <span class="text-soft">Status: </span> <span
                                                            class="badge badge-dim bg-success">active</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </router-link>
                                </div>
                                <div class="col-12 col-md-4 mt-1 ">
                                    <router-link :to="{ name: '' }" class="nk-download shadow-sm">
                                        <div class="data">
                                            <div class="thumb"><em style="font-size: -webkit-xxx-large;"
                                                    class="icon ni ni-edit"></em></div>
                                            <div class="info">
                                                <h6 class="title"><span class="name">Consigner</span></h6>
                                                <div class="meta">
                                                    <span class="version">
                                                        <span class="text-soft">Version: </span> <span>1.3.1</span>
                                                    </span>
                                                    <span class="release">
                                                        <span class="text-soft">Status: </span> <span
                                                            class="badge badge-dim bg-success">active</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </router-link>
                                </div>
                                <div class="col-12 col-md-4 mt-1">
                                    <router-link :to="{ name: '' }" class="nk-download shadow-sm">
                                        <div class="data">
                                            <div class="thumb"><em style="font-size: -webkit-xxx-large;"
                                                    class="icon ni ni-file-download"></em></div>
                                            <div class="info">
                                                <h6 class="title"><span class="name">Exportations</span></h6>
                                                <div class="meta">
                                                    <span class="version">
                                                        <span class="text-soft">Version: </span> <span>1.3.1</span>
                                                    </span>
                                                    <span class="release">
                                                        <span class="text-soft">Status: </span> <span
                                                            class="badge badge-dim bg-success">active</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { reactive, computed, onMounted } from 'vue'
import useSessions from "../../composables/sessions";
import useClasses from "../../composables/classes";
import Menu from './Menus/Sidebar.vue';
import Header from './Headers/Header.vue';

export default {
    setup() {
        const { getclassesTeacher, classesTeacher } = useClasses();

        onMounted(getclassesTeacher(localStorage.getItem("user_id")));
        return {
            getclassesTeacher, classesTeacher,


        };

    },
    components: {
        Menu, Header
    },

    mounted() {
        console.log('ceci est la page de selection de session');
        this.setUsername();
        console.log(this.classesTeacher);
        console.log();
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
        '$route': 'fetchData'
    }

}
</script>