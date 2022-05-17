<template>
    <div class="nk-body bg-lighter npc-default has-sidebar ">

<div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <router-link :to="{ name: 'locale-homepage' }" href="#" class="logo-link nk-sidebar-logo">
                            <!-- <img class="logo-light logo-img" src="/assets/images/logo1.png" srcset="/assets/images/logo1.png" alt="logo"> -->
                            <img class="logo-dark logo-img" src="/assets/images/logo1.png" srcset="/assets/images/logo1.png" style="width:100%" alt="logo-dark">
                            <!-- <img class="logo-small logo-img logo-img-small" src="/assets/images/logo1.png" srcset="/assets/images/logo1.png 2x" alt="logo-small"> -->
                        </router-link>
                    </div>
                    <div class="nk-menu-trigger me-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <!-- debut le menu -->
				<Menu/>
                <!-- fin le menu -->
            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                
                <!-- debut Header -->
                <Header/>
                <!-- fin Header -->
                
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">



                    <div class="container-fluid">
                       
<!-- debut barre de recherche -->

<!-- fin barre de recherche -->

                        <!-- ici le corps -->

                       <div class="card-inner">
                                                <div class="preview-block">
                                                    <span class="preview-title-lg overline-title">Importation des fichiers</span>
                                                    
                                                    
                                                       <form>

<div class="row gy-4">
                                                        
                                                       
                                                       
                                                       
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-06">Fichier compte</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-file">
                                                                        <input type="file" multiple="" class="form-file-input" @change="uploadFile" ref="file">
                                                                        <label class="form-file-label" for="customFile">Sélectionner le fichier</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>

                                                        
                                                       
                                                    </div>

                                                     <div class="row gy-4">
                                                        
                                                      <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-06"></label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-file">
                                                                          <a href="#" @click="submitFile" class="btn btn-primary">valider</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                       
                                                    </div>

                                                            
                                                        </form>

                                                    
                                                   
                                                   
                                                 
                                                    
                                                </div>
                                            </div>
                        
                    </div>
                    
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>

	</div>
</template>
<script>
import { reactive, computed,onMounted } from 'vue'
// import useSessions from "../../composables/sessions";
import Menu from './Menus/Sidebar.vue';
import Header from './Headers/Header.vue';
import SearchStudentbar from './Searchs/Searchbar.vue';


export default {
    setup()
    {
//  const { getallsessions,thesessions } = useSessions();
//     onMounted(getallsessions);
console.log('nous allons rechercher la liste des sessions')

return {
    //  getallsessions,thesessions
    };

    },
	components:{
		Menu,Header,SearchStudentbar
	},
    
 mounted() {
            console.log('ceci est la page de selection de session');
            this.setUsername();
        },
    data() {
      return {
       images: null,
        Username:"",
        UserSession:"",
        error:'',
        error1:'',
        message:'',
    
      };
    },
    methods: {
        fetchData()
        {
          this.$router.go();
        },
      showModal() {
        this.isModalVisible = !this.isModalVisible;
      },
      setUsername()
      {
          //nous verifions si l'utilsateur est bien connecté sinon nous le renvoyons sur la page de connexion

         if (localStorage.getItem("UserData") === null) 
          {
           
            this.$router.push("/");

          }else
          {
              let UsernameData = localStorage.getItem("UserName");
              this.Username=UsernameData;
              //nous allons rechercher la liste des infos a afficher
            //   console.log(UsernameData);

             

             

          }

      },
      choisirsession(sessionEtab)
      {
          localStorage.setItem("UserSessionchoose",sessionEtab);
      },
      uploadFile() {
        this.Images = this.$refs.file.files[0];
      },
      submitFile() {
       const formData = new FormData();
       formData.append('file', this.Images);
        const headers = { 'Content-Type': 'multipart/form-data' };
        axios.get('/sanctum/csrf-cookie').then(response => {
axios.post('/api/importations/comptes', formData).then((res) => {
          res.data.files; // binary representation of the file
          res.status; // HTTP status
        });
        })
        
      },
      personnalBtn()
      {
        //   console.log('Modification des informations personnelles');

       if (this.nom.length > 0 && this.prenom.length > 0 && this.datenais !=null && this.lieunais.length > 0 && this.genre.length > 0 && this.nationalite.length > 0 && this.telephone.length > 0) 
        {

axios.get('/sanctum/csrf-cookie').then(response => {
                     axios.post('/api/login/update', {
                        id: this.id,
                        nom: this.nom,
                        prenom: this.prenom,
                        datenais: this.datenais,
                        lieunais: this.lieunais,
                        genre: this.genre,
                        nationalite: this.nationalite,
                        telephone: this.telephone,
                        email: this.email,
                        etape:2
                       
                    })
                        .then(response => {

                            if (response.data.success) {

                                 this.message = response.data.message;
                                 localStorage.setItem("UserData",JSON.stringify(response.data.data[0]));
            

                            } else {
                                 this.error = response.data.message;
                                

                            }
                        })
                        .catch(function (error) {
                            console.error(error);
                        });
                })


        }else
        {
            this.error="Merci de renseigner tous les champs obligatoires svp !";
        }

      },
      parametreBtn()
      {
          if (this.login.length > 0 && this.password.length > 0) 
           {
axios.get('/sanctum/csrf-cookie').then(response => {
                     axios.post('/api/login/update', {
                        id: this.id,
                        login: this.login,
                        password: this.password,
                        etape:1
                       
                    })
                        .then(response => {

                            if (response.data.success) {

                                 this.message = response.data.message;
                                 localStorage.setItem("UserData",JSON.stringify(response.data.data[0]));
            

                            } else {
                                 this.error = response.data.message;
                                

                            }
                        })
                        .catch(function (error) {
                            console.error(error);
                        });
                })


           }else
           {
               this.error1="Merci de renseigner tous les champs obligatoires svp !";
           }
      }
      
    },
  watch: {
    // call again the method if the route changes
    '$route': 'fetchData'
  }

}
</script>