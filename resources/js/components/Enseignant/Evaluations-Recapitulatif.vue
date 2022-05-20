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
                                    Récapitulatif :
                                </h3>
                                <div class="nk-block-head-sub">
                                    <router-link class="back-to" :to="{ name: 'Evaluations-Teacher' }"><em
                                            class="icon ni ni-arrow-left"></em>
                                        <span>Evaluations Dash</span>
                                    </router-link>
                                </div>

                            </div>
                            <div class="row">
                                <div class="nk-content-inner">
                                    <div class="nk-content-body">
                                        <div class="nk-block">
                                            <div class="card shadow-sm">
                                                <div class="card-inner">
                                                    <div class="card-title">
                                                        <h3 class="overline-title title">
                                                            Option de recherche:
                                                        </h3>
                                                    </div>
                                                    <div class="row gy-4">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Classe</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2"
                                                                        data-search="on">
                                                                        <option value="{{ item.id_classes }}"
                                                                            v-for="item in classesTeacher"
                                                                            :key="item.id_classes">{{
                                                                                    item.libelle_classes
                                                                            }}</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Matière</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2"
                                                                        data-placeholder="Select multiple options">
                                                                        <option value="default_option">Card</option>
                                                                        <option value="option_select_name">Bitcoin
                                                                        </option>
                                                                        <option value="option_select_name">Cash</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Matière</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2"
                                                                        data-placeholder="Select multiple options">
                                                                        <option value="default_option">Card</option>
                                                                        <option value="option_select_name">Bitcoin
                                                                        </option>
                                                                        <option value="option_select_name">Cash</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--row-->
                                                </div>
                                                <!--card inner-->
                                            </div>
                                        </div>
                                        <!--.nk-block -->
                                        <div class="nk-block">
                                            <div class="card card-bordered card-preview">
                                                <div class="card-inner">
                                                    <div class=" table table-responsive ">
                                                        <table class="table table-bordered ">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Nom & Prénom</th>
                                                                    <th scope="col">N1</th>
                                                                    <th scope="col">N2</th>
                                                                    <th scope="col">N3</th>
                                                                    <th scope="col">N4</th>
                                                                    <th scope="col">N5</th>
                                                                    <th scope="col">N6</th>
                                                                    <th scope="col">N7</th>
                                                                    <th scope="col">N9</th>
                                                                    <th scope="col">N10</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Cell</td>
                                                                    <td>Cell</td>
                                                                    <td>Cell</td>
                                                                    <td>Cell</td>
                                                                    <td>Cell</td>
                                                                    <td>Cell</td>
                                                                    <td>Cell</td>
                                                                    <td>Cell</td>
                                                                    <td>Cell</td>
                                                                    <td>Cell</td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
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