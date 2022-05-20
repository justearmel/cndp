import { ref } from 'vue'
import axios from "axios";
import { useRouter } from 'vue-router';
export default function useUsers() {
    const eleve = ref([])


    const getstudentinfos = async(id) => {

        const lasession = localStorage.getItem("UserSessionchoose");
        let response = await axios.get('/api/getstudentinfos/' + id + '/' + lasession);

        eleve.value = response.data.data;

    }



    return {
        getstudentinfos,
        eleve

    }

}