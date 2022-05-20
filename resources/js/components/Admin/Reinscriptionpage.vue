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
				<Menu  />
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

                        <div class="nk-block">
                           <div class="nk-block nk-block-lg">

                                <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Formulaire de réinscription</h4>
                                               
                                            </div>
                                        </div>

                                       
                                        
                                        <div class="card">
                                           
 <SearchStudentbar/>

                                            <div class="card-inner">
                                               <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Informations de l'élève</h4>
                                               
                                            </div>
                                        </div>
                                                <form action="#" class="form-validate" novalidate="novalidate">
                                                    <div class="row g-gs">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="matricule">Matricule <span style="color:red">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control invalid" v-model="matricule" id="matricule" name="matricule" aria-describedby="fv-full-name-error" aria-invalid="true">
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="affecte">Affecté <span style="color:red">*</span></label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-control form-select invalid" id="affecte" v-model="affecte" name="affecte" data-placeholder="Select a option" aria-describedby="fv-topics-error">
                                                                       
                                                                        <option value="1" selected>OUI</option>
                                                                        <option value="0">NON</option>
                                                                        
                                                                    </select>
                                                               </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="nom">Nom <span style="color:red">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control invalid" id="nom" v-model="nom" name="nom" aria-describedby="fv-full-name-error" aria-invalid="true">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="prenom">Prénoms <span style="color:red">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control invalid" id="prenom" v-model="prenom" name="prenom" aria-describedby="fv-full-name-error" aria-invalid="true">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="datenais">Date de naissance <span style="color:red">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="date" class="form-control invalid" id="datenais" v-model="datenais" name="datenais" aria-describedby="fv-full-name-error" aria-invalid="true">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="lieunais">Lieu de naissance <span style="color:red">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control invalid" id="lieunais" v-model="lieunais" name="lieunais" aria-describedby="fv-full-name-error" aria-invalid="true">
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="lieuhabitation">Lieu d'habitation</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control invalid" id="lieuhabitation" v-model="lieuhabitation" name="lieuhabitation" aria-describedby="fv-full-name-error" aria-invalid="true">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="nationalite">Nationalité <span style="color:red">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control invalid" v-model="nationalite" id="nationalite" name="nationalite" aria-describedby="fv-full-name-error" aria-invalid="true">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                       
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="genre">Genre <span style="color:red">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="hidden" name="genre" v-model="genre">
                                                                    <ul class="custom-control-group">
                                                                         <li>
                                                                            <div class="custom-control custom-radio custom-control-pro no-control ">
                                                                                <input type="radio" class="custom-control-input invalid" name="genre" @click="changesexe('F')"  checked="checked" id="sex-female" required="">
                                                                                <label class="custom-control-label" for="sex-female">Fille</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-radio custom-control-pro no-control">
                                                                                <input type="radio" class="custom-control-input invalid" name="genre" id="sex-male" @click="changesexe('M')" aria-describedby="fv-sex-error">
                                                                                <label class="custom-control-label" for="sex-male">Garçon</label>
                                                                            </div>
                                                                        </li>
                                                                       
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="lastschool">Dernier établissement fréquenté </label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control invalid" v-model="lastschool" id="lastschool" name="lastschool" aria-describedby="fv-full-name-error" aria-invalid="true">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="classe">Classe <span style="color:red">*</span></label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-control form-select invalid" v-model="classe" id="classe" name="classe" data-placeholder="Select a option" aria-describedby="fv-topics-error">
                                                                     <option  selected value="">Sélectionner une classe</option>
                                                                     <option
                v-for="item in classes"
                :key="item.id"
                :value="item.id_classes"
              >
                {{ item.libelle_classes }}
              </option>
                                                                    </select>
                                                               </div>
                                                            </div>
                                                        </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="dateentre">Date d'entrée <span style="color:red">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="date" class="form-control invalid" v-model="dateentre" id="dateentre" name="dateentre" aria-describedby="fv-full-name-error" aria-invalid="true">
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="interne">Interne <span style="color:red">*</span></label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-control form-select invalid" v-model="interne" id="interne" name="interne" data-placeholder="Select a option" aria-describedby="fv-topics-error">
                                                                        <option label="empty" value=""></option>
                                                                        <option value="1">OUI</option>
                                                                        <option value="0">NON</option>
                                                                       
                                                                    </select>
                                                               </div>
                                                            </div>
                                                        </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="bourse">Bourse <span style="color:red">*</span></label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-control form-select invalid" v-model="bourse" id="bourse" name="bourse" data-placeholder="Select a option" aria-describedby="fv-topics-error">
                                                                        <option label="empty" value=""></option>
                                                                        <option value="0">NON</option>
                                                                         <option value="1">SEMI BOURSIER</option>
                                                                        <option value="2">BOURSE ENTIERE</option>                                                        
                                                                    </select>
                                                               </div>
                                                            </div>
                                                        </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="orphelin">Orphelin</label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-control form-select invalid" v-model="orphelin" id="orphelin" name="orphelin" data-placeholder="Select a option" aria-describedby="fv-topics-error">
                                                                       
                                                                        <option value="0">NON</option>
                                                                        <option value="1">ORPHELIN DE PERE</option>
                                                                        <option value="2">ORPHELIN DE MERE</option>
                                                                        <option value="3">ORPHELIN DE PERE ET DE MERE</option>
                                                                    </select>
                                                               </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Informations des parents</h4>
                                               
                                            </div>
                                        </div>
                                                        
                                                   <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="pere">Nom du père <span style="color:red">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control invalid" v-model="pere" id="pere" name="pere" aria-describedby="fv-full-name-error" aria-invalid="true">
                                                                </div>
                                                            </div>
                                                        </div>  
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="mere">Nom de la mère <span style="color:red">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control invalid" v-model="mere" id="mere" name="mere" aria-describedby="fv-full-name-error" aria-invalid="true">
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="professionpere">Profession du père</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control invalid" v-model="professionpere" id="professionpere" name="professionpere" aria-describedby="fv-full-name-error" aria-invalid="true">
                                                                </div>
                                                            </div>
                                                        </div>
                                                          
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="professionmere">Profession de la mère</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control invalid" v-model="professionmere" id="professionmere" name="professionmere" aria-describedby="fv-full-name-error" aria-invalid="true">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="contactpere">Contact du père</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control invalid" v-model="contactpere" id="contactpere" name="contactpere" aria-describedby="fv-full-name-error" aria-invalid="true">
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="contactmere">Contact de la mère</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control invalid" v-model="contactmere" id="contactmere" name="contactmere" aria-describedby="fv-full-name-error" aria-invalid="true">
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="principal">Personne à contacter en cas d'urgence <span style="color:red">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control invalid" v-model="principal" id="principal" name="principal" aria-describedby="fv-full-name-error" aria-invalid="true">
                                                                </div>
                                                            </div>
                                                        </div> 

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="phoneprincipal">Contact (Personne à contacter en cas d'urgence) <span style="color:red">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control invalid" v-model="phoneprincipal" id="phoneprincipal" name="phoneprincipal" aria-describedby="fv-full-name-error" aria-invalid="true">
                                                                </div>
                                                            </div>
                                                        </div> 
                                                       
                                                       
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <button type="submit" disabled class="btn btn-lg btn-primary" v-if="studentid==0">Enregistrer</button>
                                                                <button type="submit"  class="btn btn-lg btn-primary" v-if="studentid>0">Enregistrer</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
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
import useClasses from "../../composables/classes";
import Menu from './Menus/Sidebar.vue';
import Header from './Headers/Header.vue';
import SearchStudentbar from './Searchs/SearchReinscription.vue';
import moment from 'moment';


export default {
    setup()
    {
  const { getstudentsNb,getclassesNb,nbstudents,nbclasses} = useSessions();
  const { getclasses,classes} = useClasses();
     onMounted(getstudentsNb);
     onMounted(getclassesNb);
     onMounted(getclasses);
console.log('nous sommes au niveau de la homepage')

return {
 getstudentsNb,
nbstudents,
nbclasses,
classes,
getclasses,
getclassesNb
    };

    },
	components:{
		Menu,Header,SearchStudentbar
	},
    
 mounted() {
            console.log('ceci est la page de selection de session');
            this.setUsername();
            this.currentDateTime();
            // this.reduction(this.thesessions);

        },
    data() {
      return {
        isModalVisible: false,
        visiblesearch: false,
        Username:"",
        Usernameid:"",
        UserSession:"",
        matricule:"",
        affecte:1,
        nom:"",
        prenom:"",
        datenais:"",
        lieunais:"",
        lieuhabitation:"",
        nationalite:"",
        genre:"F",
        lastschool:"",
        classe:"",
        contactpere:"",
        contactmere:"",
        professionpere:"",
        professionmere:"",
        pere:"",
        mere:"",
        orphelin:0,
        bourse:0,
        interne:1,
        dateentre:"",
        principal:"",
        phoneprincipal:"",
        studentid:0,
       


      };
    },
    methods: {

        currentDateTime() {
      this.dateentre= moment().format('YYYY-MM-DD');
    },

        changesexe(valeur)
        {
             this.genre=valeur;
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
           
            this.$router.push("/");

          }else
          {
              let UsernameData = localStorage.getItem("UserName");
              this.Username=UsernameData;

               let Userata = JSON.parse(localStorage.getItem("UserData"));

               this.Usernameid=Userata.id;
          }

      },
      choisirsession(sessionEtab)
      {
          localStorage.setItem("UserSessionchoose",sessionEtab);
      }
      
    },
  watch: {
    // call again the method if the route changes
    '$route': 'fetchData'
  }

}
</script>
