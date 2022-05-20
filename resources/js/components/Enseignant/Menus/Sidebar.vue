<template>
    <div class="nk-sidebar-element">
        <div style="text-align:center">
            <img class="" src="/assets/images/logo_etab/logo.png" alt="" style="width:70%">
        </div><br>
        <div class="nk-sidebar-content">

            <div class="nk-sidebar-menu" data-simplebar>

                <ul class="nk-menu">

                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-calender-date-fill"></em></span>
                            <span class="nk-menu-text">{{ libellesesion }}</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item" v-for="item in reduction(thesessions)" :key="item.id_sessions">
                                <a href="#" @click="choisirsessionx(item.libelle_sessions)" class="nk-menu-link"><span
                                        class="nk-menu-text">{{ item.libelle_sessions }}</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li>

                    <li class="nk-menu-item">
                        <router-link :to="{ name: 'locale-homepage-Teacher' }" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></span>
                            <span class="nk-menu-text">Accueil</span>
                        </router-link>
                    </li>
                    <li class="nk-menu-item">
                        <router-link :to="{ name: 'ListeClassepage-Teacher' }" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-table-view-fill"></em></span>
                            <span class="nk-menu-text">Classes</span>
                        </router-link>
                    </li>
                    <li class="nk-menu-item">
                        <router-link :to="{ name: 'Evaluations-Teacher' }" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">Evaluation</span>
                        </router-link>
                    </li>


                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</template>
<script>
import { reactive, computed, onMounted } from 'vue'
import useSessions from "../../../composables/sessions";
export default {
    setup() {
        const { libellesesion, getallsessionschoosen, getallsessions, thesessions } = useSessions();
        onMounted(getallsessionschoosen);
        onMounted(getallsessions);
        console.log('nous allons rechercher la liste des sessions')

        return {
            libellesesion,
            getallsessionschoosen,
            thesessions, getallsessions
        };

    },
    // props: ['Sessionchoose'],

    mounted() {
        // console.log(this.$attrs);
        // this.$emit(Sessionchoose,this.Sessionchoose);
    },
    data() {
        return {
            //  Sessionchoose: this.$attrsSessionchoose,
        };

    },
    methods:
    {
        reduction(thedatas) {
            return thedatas.filter((thedata) => thedata.libelle_sessions != this.libellesesion);
        },
        choisirsessionx(sessionEtab) {
            localStorage.setItem("UserSessionchoose", sessionEtab);
            this.$router.go();
        }
    }
    // setup() 
    // {
    //     let  session="";
    //     session.value=this.$attrs;

    //        return 
    //     }

}
</script>