import { createRouter, createWebHistory } from "vue-router";
import Index from "../components/App.vue";
import Accueil from "../components/Admin/Sessionchoice.vue";
import LocaleHomepage from "../components/Admin/Homepage.vue";
import LocaleProfilepage from "../components/Admin/Profilepage.vue";
import LocaleDetailstudent from "../components/Admin/Detailstudentpage.vue";
import LocaleImportpage from "../components/Admin/ImportDash.vue";
import LocaleStudentDashpage from "../components/Admin/Studentdahpage.vue";
import LocaleListeclaassepage from "../components/Admin/Listeclassespage.vue";

//$Teatcher
import LocaleHomepage_Teacher from "../components/Enseignant/Homepage.vue";
import LocaleProfilepage_Teacher from "../components/Admin/Profilepage.vue";
import ListeClassepage_Teacher from "../components/Enseignant/ListeClasses.vue";
import DetailClassepage_Teacher from "../components/Enseignant/DetailClasses.vue";
import Evaluations_Teacher from "../components/Enseignant/Evaluations.vue";
import EvaluationsRecapitulatif_Teacher from "../components/Enseignant/Evaluations-Recapitulatif.vue";

export const routes = [{
        name: "home",
        path: "/",
        meta: { isGuest: true },
        component: Index,
    },
    {
        name: "locale-sessionchoice",
        path: "/localeadmin/accueil",
        component: Accueil,
        meta: {
            requiresAuth: true,
            reload: true,
        },
        watch: "fetchData",
    },
    {
        name: "locale-homepage",
        path: "/localeadmin/dashboard",
        meta: {
            requiresAuth: true,
            reload: true,
        },
        watch: "fetchData",
        component: LocaleHomepage,
    },
    {
        name: "locale-profilepage",
        path: "/localeadmin/moncompte",
        meta: {
            requiresAuth: true,
            reload: true,
        },
        component: LocaleProfilepage,
    },
    {
        name: "locale-importpage",
        path: "/localeadmin/importdash",
        meta: {
            requiresAuth: true,
            reload: true,
        },
        component: LocaleImportpage,
    },
    {
        name: "locale-detailstudent",
        path: "/detailstudent/:id",
        component: LocaleDetailstudent,
        props: true,
        meta: {
            requiresAuth: true,
        },
    },
    {
        name: "locale-studentdash",
        path: "/localeadmin/studentdash",
        meta: {
            requiresAuth: true,
            reload: true,
        },
        // watch:'fetchData',
        component: LocaleStudentDashpage,
    },
    {
        name: "locale-listeclasses",
        path: "/localeadmin/listeclasses",
        meta: {
            requiresAuth: true,
            reload: true,
        },
        // watch:'fetchData',
        component: LocaleListeclaassepage,
    },
    {
        name: "locale-homepage-Teacher",
        path: "/Teacher/dashboard",
        meta: {
            requiresAuth: true,
            reload: true,
        },
        component: LocaleHomepage_Teacher,
    }, ,
    {
        name: "locale-profilepage-Teacher",
        path: "/Teacher/moncompte",
        meta: {
            requiresAuth: true,
            reload: true,
        },
        component: LocaleProfilepage_Teacher,
    },
    {
        name: "ListeClassepage-Teacher",
        path: "/Teacher/Classes",
        meta: {
            requiresAuth: true,
            //reload: true,
        },
        component: ListeClassepage_Teacher,
    },
    {
        name: "DetailClassepage-Teacher",
        path: "/Teacher/DetailClasses/:IdClasse",
        props: true,
        meta: {
            requiresAuth: true,
            //reload: true,
        },
        component: DetailClassepage_Teacher,
    },
    {
        name: "Evaluations-Teacher",
        path: "/Teacher/Evaluations",
        meta: {
            requiresAuth: true,
            //reload: true,
        },
        component: Evaluations_Teacher,
    },
    {
        name: "EvaluationsRecapitulatif-Teacher",
        path: "/Teacher/Evaluations/Recapitulatif",
        meta: {
            requiresAuth: true,
            //reload: true,
        },
        component: EvaluationsRecapitulatif_Teacher,
    },
];

const router = createRouter({
    history: createWebHistory(),
    mode: "history",
    base: process.env.BASE_URL,
    routes,
});

router.beforeEach((to, from, next) => {
    if (to.meta.requiresAuth && !localStorage.getItem("UserData")) {
        localStorage.clear();
        localStorage.setItem(
            "Notconnectionmethod",
            "Vous devez renseigner vos identifiants de connexion"
        );
        next({ name: "home" });
    } else {
        next();
    }
});

export default router;