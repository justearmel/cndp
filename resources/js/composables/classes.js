import { ref } from 'vue'
import axios from "axios";
import { useRouter } from 'vue-router';
export default function useClasses()
{
    const classes = ref([])
    const niveaux = ref([])
    const cycles = ref([])
    

    const getclasses = async() => {

        const lasession = localStorage.getItem("UserSessionchoose");
        let response = await axios.get('/api/getclasses/'+lasession);
      
        classes.value = response.data.data;

    }

    const getniveaux = async() => {

        const lasession = localStorage.getItem("UserSessionchoose");
        let response = await axios.get('/api/getniveaux/'+lasession);
      
        niveaux.value = response.data.data;

    }



    

    return {
        getclasses,getniveaux, classes,niveaux,cycles
       

    }

}