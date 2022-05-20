import { ref } from 'vue'
import axios from "axios";
import { useRouter } from 'vue-router';
export default function useSessions()
{
    const thesessions = ref([])
    const libellesesion = ref('')
    const nbstudents= ref('')
    const nbparents = ref('')
    const nbteachers= ref('')
    const nbclasses = ref('')

    const getteachersNb = async() => {

        const lasession = localStorage.getItem("UserSessionchoose");
        let response = await axios.get('/api/getteachersNb/'+lasession);
      
        nbteachers.value = response.data.data;

    }

    const getstudentsNb = async() => {

        const lasession = localStorage.getItem("UserSessionchoose");
        let response = await axios.get('/api/getstudentsNb/'+lasession);
      
        nbstudents.value = response.data.data;

    }

    const getclassesNb = async() => {

        const lasession = localStorage.getItem("UserSessionchoose");
        let response = await axios.get('/api/getclassesNb/'+lasession);
      
        nbclasses.value = response.data.data;

    }
    

    const getallsessions = async() => {

        const UserDataInfo = JSON.parse(localStorage.getItem("UserData"));
        const codeEtab=UserDataInfo.codeEtab_assigner;
        let response = await axios.get('/api/allsessions/'+codeEtab);
      
        thesessions.value = response.data.data;

    }

    const getallsessionschoosen = async() => {

        const UserSessionchoose = localStorage.getItem("UserSessionchoose");
  
        libellesesion.value = UserSessionchoose;

    }

    return {
        getstudentsNb,
        getclassesNb,
        getallsessions,
        getteachersNb,
        thesessions,
        libellesesion,
        getallsessionschoosen,
        nbclasses,
        nbteachers,
        nbparents,
        nbstudents
        // error,
        // message,
        // drivers,
        // driver,
        // getdrivers,
        // getdriver,
        // deletedDriver,
        // updateDriver,
        // nbdrivers,
        // getPartenairedriversNb

    }

}