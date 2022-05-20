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
                            <div class="row">
                                <div class="col-sm-6 col-lg-4 col-xxl-3 mb-3" v-for="item in classesTeacher"
                                    :key="item.id_classes">
                                    <div class="card ">
                                        <div class="card-body" style="padding-bottom: 0px;">
                                            <div class="project">
                                                <div class="project-head" style="margin-bottom: 0px;">
                                                    <router-link
                                                        :to="{ name: 'DetailClassepage-Teacher', params: { IdClasse: item.id_classes } }"
                                                        class="project-title">
                                                        <div class="user-avatar sq bg-purple"><span><em
                                                                    class="far fa-heart"></em></span></div>
                                                        <div class="project-info">
                                                            <h6 class="title">{{ item.libelle_classes }}</h6>
                                                            <span class="sub-text">{{ item.libellecycle_classes
                                                            }}</span>
                                                        </div>
                                                    </router-link>
                                                </div>
                                                <div class="project-progress ">
                                                    <div class="data-group">
                                                        <ul class="nk-ecwg4-legends" style="padding-bottom: 0px;">
                                                            <li>
                                                                <div class="title">
                                                                    <span class="dot dot-lg sq"
                                                                        data-bg="#9cabff"></span>
                                                                    <span>Nombre inscrits</span>
                                                                </div>
                                                                <div class="amount amount-xs">{{ item.nbinscrit_classes
                                                                }}</div>
                                                            </li>
                                                            <li>
                                                                <div class="title">
                                                                    <span class="dot dot-lg sq"
                                                                        data-bg="#b8acff"></span>
                                                                    <span>Nombre affecter</span>
                                                                </div>
                                                                <div class="amount amount-xs">{{ item.nbaffecte_classes
                                                                }}</div>
                                                            </li>
                                                            <li>
                                                                <div class="title">
                                                                    <span class="dot dot-lg sq"
                                                                        data-bg="#f9db7b"></span>
                                                                    <span>Nombre non affecter</span>
                                                                </div>
                                                                <div class="amount amount-xs">{{
                                                                        item.nbnonaffecte_classes
                                                                }}</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
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