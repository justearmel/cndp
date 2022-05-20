<template>
    <div class="nk-body bg-lighter npc-default has-sidebar ">
        <div class="nk-app-root">
            <div class="nk-main ">
                <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                    <div class="nk-sidebar-element nk-sidebar-head">
                        <div class="nk-sidebar-brand">
                            <router-link :to="{ name: 'locale-homepage' }" href="#" class="logo-link nk-sidebar-logo">
                                <img class="logo-dark logo-img" src="/assets/images/logo1.png"
                                    srcset="/assets/images/logo1.png" style="width:100%" alt="logo-dark">
                            </router-link>
                        </div>
                        <div class="nk-menu-trigger me-n2">
                            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                                    class="icon ni ni-arrow-left"></em></a>
                            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                                data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                        </div>
                    </div>
                    <Menu />
                </div>
                <div class="nk-wrap ">
                    <Header />
                    <div class="nk-content ">
                        <div class="">
                            <div class="nk-content-inner">
                                <div class="nk-content-body">
                                    <div class="nk-block-head nk-block-head-sm">
                                        <div class="nk-block-between">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title page-title">Liste de classe :
                                                    <span class="badge badge-sm bg-secondary"
                                                        v-for="item in classeinfoID" :key="item.id">{{
                                                                item.libelle_classes
                                                        }}</span>
                                                </h3>
                                                <div class="nk-block-head-sub">
                                                    <router-link class="back-to"
                                                        :to="{ name: 'ListeClassepage-Teacher' }">
                                                        <em class="icon ni ni-arrow-left"></em>
                                                        <span>Classes</span>
                                                    </router-link>
                                                </div>
                                            </div>


                                            <!-- .nk-block-head-content -->
                                            <div class="nk-block-head-content">
                                                <div class="toggle-wrap nk-block-tools-toggle">
                                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                                        data-target="more-options"><em
                                                            class="icon ni ni-more-v"></em></a>
                                                    <div class="toggle-expand-content" data-content="more-options">
                                                        <ul class="nk-block-tools g-3">
                                                            <li>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right">
                                                                        <em class="icon ni ni-search"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control"
                                                                        id="default-04" placeholder="Search by name">
                                                                </div>
                                                            </li>

                                                            <li class="nk-block-tools-opt">
                                                                <a href="#" class="btn  btn-primary">
                                                                    <em class="icon ni ni-file-docs"></em>
                                                                    <span>
                                                                        Liste note
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="nk-block-tools-opt">
                                                                <a href="#" class="btn  btn-primary">
                                                                    <em class="icon ni ni-file-docs"></em>
                                                                    <span>
                                                                        Liste de classe
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .nk-block-head-content -->
                                        </div>

                                        <div class="nk-block">
                                            <div class="nk-tb-list is-separate mb-3">
                                                <div class="card card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class=" user-activity-group g-4"
                                                                v-for="item in classeinfoID" :key="item.id">
                                                                <div class="user-activity">
                                                                    <em class="icon ni ni-users"></em>
                                                                    <div class="info">
                                                                        <span class="amount">{{ item.nbinscrit_classes
                                                                        }}</span>
                                                                        <span class="title">Total Eléve</span>
                                                                    </div>
                                                                </div>
                                                                <div class="user-activity">
                                                                    <em class="icon ni ni-users"></em>
                                                                    <div class="info">
                                                                        <span class="amount">{{ item.nbfilles_classes
                                                                        }}</span>
                                                                        <span class="title">Fille</span>
                                                                    </div>
                                                                </div>
                                                                <div class="user-activity">
                                                                    <em class="icon ni ni-users"></em>
                                                                    <div class="info">
                                                                        <span class="amount">{{ item.nbgarcons_classes
                                                                        }}</span>
                                                                        <span class="title">Garçon</span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="nk-block">

                                            <div class="nk-tb-list is-separate is-medium mb-3">
                                                <div class="nk-tb-item nk-tb-head">

                                                    <div class="nk-tb-col tb-col-sm"><span>Photo</span></div>
                                                    <div class="nk-tb-col">
                                                        <span class="">Matricule</span>
                                                    </div>

                                                    <div class="nk-tb-col"><span>Nom & Prénom</span></div>

                                                    <div class="nk-tb-col">
                                                        <span class="">Genre</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="">Doublant</span>
                                                    </div>
                                                </div>
                                                <!-- .nk-tb-item -->
                                                <div class="nk-tb-item" v-for="item in ListeEleveclasseofTeacher"
                                                    :key="item.id">


                                                    <div class="nk-tb-col tb-col-sm">
                                                        <div class="user-avatar sm">
                                                            <em class="icon ni ni-user-alt"></em>
                                                        </div>
                                                    </div>

                                                    <div class="nk-tb-col">
                                                        <span class="badge badge-sm badge-dot has-bg bg-warning">
                                                            {{ item.matricule_users }}</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="tb-lead">{{ item.nom_users }} {{
                                                                item.prenom_users
                                                        }}</span>
                                                    </div>
                                                    <div class="nk-tb-col ">
                                                        <span class="tb-sub">{{ item.sexe_users }}</span>
                                                    </div>

                                                    <div class="nk-tb-col ">
                                                        <ul class="">

                                                            <li>
                                                                <div v-if="item.doublant_users == 1">
                                                                    <span class="tb-status text-warning">Oui</span>
                                                                </div>
                                                                <div v-else>
                                                                    <span class="tb-status text-success">Non</span>
                                                                </div>

                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- .nk-tb-item -->

                                            </div>
                                        </div><!-- .nk-block -->
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
import useClasses from "../../composables/classes";
import Menu from './Menus/Sidebar.vue';
import Header from './Headers/Header.vue';

export default {
    props: {
        IdClasse: {
            required: true,
            type: String
        }
    },
    setup(props) {
        const { getListeEleveclasseofTeacher, ListeEleveclasseofTeacher, getclasseinfoID, classeinfoID } = useClasses();

        onMounted(getListeEleveclasseofTeacher(props.IdClasse));
        onMounted(getclasseinfoID(props.IdClasse));
        return {
            getListeEleveclasseofTeacher, ListeEleveclasseofTeacher,
            getclasseinfoID, classeinfoID
        };

    },
    components: {
        Menu, Header
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