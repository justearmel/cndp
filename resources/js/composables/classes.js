import { ref } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";
export default function useClasses() {
    const classesTeacher = ref([]);
    const classeinfoID = ref([]);
    const ListeEleveclasseofTeacher = ref([]);
    const classes = ref([]);
    const niveaux = ref([]);
    const cycles = ref([]);

    const getclasses = async() => {
        const lasession = localStorage.getItem("UserSessionchoose");
        let response = await axios.get("/api/getclasses/" + lasession);

        classes.value = response.data.data;
    };

    const getclasseinfoID = async(id) => {
        const lasession = localStorage.getItem("UserSessionchoose");
        let response = await axios.get(
            "/api/getclasseinfoID/" + id + "/" + lasession
        );

        classeinfoID.value = response.data.data;
    };
    const getclassesTeacher = async(id) => {
        const lasession = localStorage.getItem("UserSessionchoose");
        let response = await axios.get(
            "/api/getclasseofTeacher/" + id + "/" + lasession
        );

        classesTeacher.value = response.data.data;
    };

    const getListeEleveclasseofTeacher = async(id) => {
        const lasession = localStorage.getItem("UserSessionchoose");
        let response = await axios.get(
            "/api/getListeEleveclasseofTeacher/" + id + "/" + lasession
        );

        ListeEleveclasseofTeacher.value = response.data.data;
    };

    const getniveaux = async() => {
        const lasession = localStorage.getItem("UserSessionchoose");
        let response = await axios.get("/api/getniveaux/" + lasession);

        niveaux.value = response.data.data;
    };

    return {
        getclasses,
        getniveaux,
        classes,
        niveaux,
        cycles,
        getclassesTeacher,
        classesTeacher,
        getListeEleveclasseofTeacher,
        ListeEleveclasseofTeacher,
        getclasseinfoID,
        classeinfoID,
    };
}