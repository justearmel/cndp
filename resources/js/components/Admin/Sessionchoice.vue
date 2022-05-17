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
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="alert alert-pro alert-primary">
    <div class="alert-text">
        <h6>Bonjour {{Username}},</h6>
        <p>Bienvenue sur l'espace d'administration du Collège Notre Dame de la Paix d'Abadjin kouté </p>
   
   <div class="example-alert">
        <div class="alert alert-fill alert-light alert-icon">
        <em class="icon ni ni-alert-circle"></em> Merci de sélectionner une <strong>année scolaire</strong> svp !  
    </div>
</div>
    </div>
</div>
                            </div>
                        </div>
                        <br>
                        <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <div class="row">
                                                    <div class="col-md-4 col-lg-4" v-for="item in thesessions" :key="item.id_sessions" >
                                                        <div class="card pricing">
                                                            <div class="pricing-head">
                                                        <div class="pricing-media" style="">
                                                            <img src="/assets/images/rentrer.jpeg" alt="" style="max-width: 100%;">
                                                        </div>
                                                        <h5 class="card-title">{{item.libelle_sessions}}</h5>
                                                                
                                                            </div>
                                                            <div class="pricing-body">
                                                                <ul class="pricing-features">
                                                                    <li><span class="w-50">Total inscrits</span> - <span class="ms-auto">{{item.nbinscrit_sessions}}</span></li>
                                                                    <!-- <li><span class="w-50">Total sortant</span> - <span class="ms-auto">{{item.nbsortant_sessions}}</span></li> -->
                                                                    <li><span class="w-50">Total affectés</span> - <span class="ms-auto">{{item.nbaffecte_sessions}}</span></li>
                                                                    <li><span class="w-50">Total internes</span> - <span class="ms-auto">{{item.nbinternes_sessions}}</span></li>
                                                                </ul>
                                                                <div class="pricing-action">
                                                                    <button class="btn btn-primary" @click="choisirsession(item.libelle_sessions)" >Sélectionner cette année</button>
                                                                    <button class="btn btn-primary" @click="updatingone(item.libelle_sessions)" >Mise à jour 1</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
import useSessions from "../../composables/sessions";
import Menu from './Menus/Sidebarvide.vue';
import Header from './Headers/Header.vue';


export default {
    setup()
    {
 const { getallsessions,thesessions } = useSessions();
    onMounted(getallsessions);
console.log('nous allons rechercher la liste des sessions')

return {
     getallsessions,thesessions
    };

    },
	components:{
		Menu,Header
	},
    
 mounted() {
            console.log('ceci est la page de selection de session');
            this.setUsername();
        },
    data() {
      return {
        isModalVisible: false,
        Username:"",
        UserSession:"",
      };
    },
    methods: {
        updatingone(sessionEtab)
        {
           

axios.get('/sanctum/csrf-cookie').then(response => {
                     axios.post('/api/UpdatingInfos', {
                        sessionEtab: sessionEtab,
                         etape: 4,
                        
                       
                    })
                        .then(response => {



                        //     if (response.data.success) {

                        //           this.error = ''
                        //          this.message =response.data.message;

                        //       let typeUser=response.data.data[0].type_users;
                        //       let namesUser=response.data.data[0].nom_users+" "+response.data.data[0].prenom_users;

                        //   if(typeUser=='Admin_locale')
                        //   {
                        //       //stockage des informations dans localstorage
                        //         localStorage.setItem("UserData",JSON.stringify(response.data.data[0]));
                        //         localStorage.setItem("UserName",namesUser);
                               
                                
                        //         this.$router.push("/localeadmin/accueil");
                                
                        //       //redirection vers l'espace admin

                        //   }

            

                        //     } else {
                        //          this.error = response.data.message;
                                

                        //     }
                        })
                        .catch(function (error) {
                            console.error(error);
                        });
                })
        },
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
              localStorage.clear();

              localStorage.setItem("Notconnectionmethod",'Vous devez renseigner vos identifiants de connexion');
           
              this.$router.push("/");

          }else
          {
              let UsernameData = localStorage.getItem("UserName");
              this.Username=UsernameData;
            //   console.log(UsernameData);


//              if (localStorage.getItem("UserSessionchoose") === null) 
//               {
//  this.$router.push("/localeadmin/accueil");
                                
//               }else
//               {
// this.$router.push("/localeadmin/dashboard");
//               }


          }

      },
      choisirsession(sessionEtab)
      {
          localStorage.setItem("UserSessionchoose",sessionEtab);
        //   this.$router.go("/localeadmin/dashboard");
          this.$router.push("/localeadmin/dashboard");
      }
      
    },
  watch: {
    // call again the method if the route changes
    '$route': 'fetchData'
  }

}
</script>