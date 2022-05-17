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
<SearchStudentbar/>
<!-- fin barre de recherche -->

                        <!-- ici le corps -->

                       <div class="nk-block">
                                    <div class="card">
                                        <div class="card-aside-wrap">
                                            <div class="card-inner">
                                                <div class="preview-block" v-if="statevisible">
                                                  <div class="nk-block-head-content">
                                                            <h4 class="nk-block-title">Informations Personnelles</h4>
                                                           
<div v-if="error !== ''" class="alert alert-fill alert-danger alert-icon" style="color:white"  role="alert">
      <em class="icon ni ni-cross-fill-c"></em> {{ error }}
    </div>

    <div v-if="message !== ''" class="example-alert">
                <div class="alert alert-success alert-icon">
                <em class="icon ni ni-check-circle"></em> {{ message }}
                 </div>
   </div>
                                                           
                                                        </div><br>
                                                    <div class="row gy-4">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="matricule">Matricule <span style="color:red">*</span> </label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" v-model="matricule" readonly id="matricule" placeholder="Entrer le matricule">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="classe">Classe <span style="color:red">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" v-model="classe" id="classe" placeholder="Entrer le prénom" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="nom">Nom <span style="color:red">*</span> </label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" v-model="nom" id="nom" placeholder="Entrer le nom">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="prenom">Prénoms <span style="color:red">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" v-model="prenom" id="prenom" placeholder="Entrer le prénom">
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="datenais">Date de naissance <span style="color:red">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="date" class="form-control" v-model="datenais" id="datenais" placeholder="Entrer le date de naissance">
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="lieunais">Lieu de naissance <span style="color:red">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" v-model="lieunais" id="lieunais" placeholder="Entrer le lieu de naissance">
                                                                </div>
                                                            </div>
                                                        </div>
                                                 <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Genre <span style="color:red">*</span></label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-control" v-model="genre" >
                                                                    <option selected value="" data-select2-id="25">Sélectionner un genre</option>
                                                                    <option value="M">M</option>
                                                                    <option value="F" >F</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                       
                                                    </div>



                                                          <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="nationalite">Nationalité <span style="color:red">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" v-model="nationalite" id="nationalite" placeholder="Entrer le nationalité">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="pere">Père <span style="color:red">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" v-model="pere" id="pere" placeholder="Entrer le nom du père">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="mere">Mère <span style="color:red">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" v-model="mere" id="mere" placeholder="Entrer le nom de la mère">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Statut <span style="color:red">*</span></label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-control" v-model="statut" >
                                                                   
                                                                    <option value="1">Actif</option>
                                                                    <option value="0" >Inactif / Sortant</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                       
                                                      </div>

                                                      <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Régime <span style="color:red">*</span></label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-control" v-model="regime" >
                                                                    <option selected value="" >Sélectionner le régime</option>
                                                                    <option value="1">Doublant</option>
                                                                    <option value="0" >Non doublant</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                       
                                                      </div>

                                                     <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Interne <span style="color:red">*</span></label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-control" v-model="interne" @change="interneaction" >
                                                                    <option value="1">Interne</option>
                                                                    <option value="0" selected>Externe</option>
                                                                </select>

                                                              

                                                            </div>
                                                        </div>
                                                       
                                                    </div>

                                                     <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Affectée <span style="color:red">*</span></label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-control" v-model="affecte" >
                                                            
                                                                    <option value="1">Affectée</option>
                                                                    <option value="0" >Non Affectée</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                       
                                                    </div>

                                                    

                                                     <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Bourse<span style="color:red">*</span></label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-control" v-model="bourse" >
                                                                   
                                                                    <option value="0">Non boursier</option>
                                                                    <option value="1" >Sémi boursier</option>
                                                                    <option value="2" >Bourse entière</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                       
                                                    </div>

                                                     <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Orphélin <span style="color:red">*</span></label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-control" v-model="orphelin" >
                                                                  
                                                                    <option value="0">Non</option>
                                                                    <option value="1" >Orphelin de père</option>
                                                                    <option value="2" >Orphelin de mère</option>
                                                                    <option value="3" >Orphelin de père et de mère</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                       
                                                    </div>

                                                     <div class="col-sm-12">
                                                         <div class="card-head">
                                                            <h5 class="card-title">Parent à contacter</h5>
                                                        </div>
                                                       
                                                    </div>

                                                     <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="principal">Nom et prénoms<span style="color:red">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" v-model="principal" id="principal" placeholder="Entrer le nom et prénoms du parent à contacter">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="principalphone">contact<span style="color:red">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" v-model="principalphone" id="principalphone" placeholder="Entrer le numéro du parent à contacter">
                                                                </div>
                                                            </div>
                                                        </div>

                                                   
              
              
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-lg btn-primary" @click="personnalBtn"><em class="icon ni ni-edit"></em> Modifier</button>
                                                            </div>
                                                        </div>
                                                        
                                                      
                                                        
                                                    </div>
                                                    <br>
                                                   
                                                    
                                                </div>


                <div class="preview-block" v-if="statevisible==false">
                                                  <div class="nk-block-head-content">
                                                            <h4 class="nk-block-title">Documents</h4>
                                                           
<div v-if="error1 !== ''" class="alert alert-fill alert-danger alert-icon" style="color:white"  role="alert">
      <em class="icon ni ni-cross-fill-c"></em> {{ error1 }}
    </div>

    <div v-if="message !== ''" class="example-alert">
                <div class="alert alert-success alert-icon">
                <em class="icon ni ni-check-circle"></em> {{ message }}
                 </div>
   </div>

                                                        </div><br>
                                                    <div class="row gy-4">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="login">Login</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control form-control-lg" id="login" v-model="login" placeholder="Entrer le login">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                             <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Mot de passe</label>
                                            
                                        </div>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" v-model="password" id="password" placeholder="Entrer le mot de passe">
                                        </div>
                                    </div>
                                                        </div>
                                                        
                                                              
                                                       <div class="col-md-12">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-lg btn-primary" @click="parametreBtn"> <em class="icon ni ni-edit"></em> Modifier</button>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                    
                                                    
                                                    
                                                    
                                                </div> 


                                            </div>
                                            <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg toggle-screen-lg" data-toggle-body="true" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                                <div class="card-inner-group" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
                                                    <div class="card-inner">


                                                    <div class="team">
                                                       
                                                        <div class="user-card user-card-s2">
                                                            <div class="user-avatar lg bg-primary">
                                                                <img src="/assets/images/avatar/a-sm.jpg" alt="">
                                                                <div class="status dot dot-lg dot-success"></div>
                                                            </div>
                                                            <div class="user-info">
                                                                <h6>{{matricule}}</h6>
                                                               
                                                                <span class="sub-text">{{nom}}  {{prenom}}</span>
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="team-view">
                                                            <a href="html/user-details-regular.html" class="btn btn-block btn-dark"><span>Imprimer la fiche</span></a>
                                                        </div>
                                                    </div><!-- .team -->
                                               

                                                       
                                                    </div><!-- .card-inner -->
                                                   
                                                    <div class="card-inner p-0">
                                                        <ul class="link-list-menu" v-if="statevisible">
                                                              <li ><a @click="changeTo(true)" class="active" href="#"><em class="icon ni ni-user-fill-c"></em><span>Informations personnelles</span></a></li>
                                                              <li ><a  @click="changeTo(false)"  href="#"><em class="icon ni ni-file-docs"></em><span>Documents</span></a></li>
                                                        </ul>
                                                         <ul class="link-list-menu" v-if="statevisible==false">
                                                              <li ><a @click="changeTo(true)" href="#"><em class="icon ni ni-user-fill-c"></em><span>Informations personnelles</span></a></li>
                                                          <li ><a class="active"  @click="changeTo(false)"  href="#"><em class="icon ni ni-file-docs"></em><span>Documents</span></a></li>
                                                        </ul>
  
                                                    </div><!-- .card-inner -->
                                                </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 403px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div><!-- .card-inner-group -->
                                            </div><!-- card-aside -->
                                        </div><!-- .card-aside-wrap -->
                                    </div><!-- .card -->
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
 import useUsers from "../../composables/users";
import Menu from './Menus/Sidebar.vue';
import Header from './Headers/Header.vue';
import SearchStudentbar from './Searchs/Searchbar.vue';


export default {
    props: {
        id: {
            required: true,
            type: String
        }
    },
    setup(props)
    {
  const { getstudentinfos,eleve } = useUsers();
    onMounted(getstudentinfos(props.id));
console.log('nous allons rechercher la liste des sessions')

return {
      getstudentinfos,eleve 
    };

    },
	components:{
		Menu,Header,SearchStudentbar
	},
    
 mounted() {
            // console.log(this.id);
             this.getthestudentdatas();
        },
    data() {
      return {
        isModalVisible: false,
        Username:"",
        UserSession:"",
        id:this.id,
        etape:1,
        nom:'',
        prenom:'',
        datenais:'',
        lieunais:'',
        nationlite:'',
        email:'',
        telephone:'',
        genre:'',
        login:'',
        password:'',
        statevisible:true,
        nationalite:'',
        error:'',
        error1:'',
        message:'',
        matricule:'',
        classe:'',
        pere:'',
        mere:'',
        regime:'',
        interne:'',
        externe:'',
        bourse:'',
        affecte:'',
        orphelin:'',
        principal:'',
        principalphone:'',
        statut:'',
       

    
      };
    },
    methods: {
        interneaction()
        {
            let interne=this.interne;
          
             if(this.interne==0)
             {
                 this.externe=1;

             }else if(this.interne==1)
             {
                 this.externe=0;
             }

        },
        getthestudentdatas()
        {
            console.log(this.eleve);
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
              //nous allons rechercher la liste des infos a afficher
            //   console.log(UsernameData);

              let UserDataInfo = JSON.parse(localStorage.getItem("UserData"));

               this.id=UserDataInfo.id;
               this.nom=UserDataInfo.nom_users;
               this.prenom=UserDataInfo.prenom_users;
               this.datenais=UserDataInfo.datenais_users;
               this.lieunais=UserDataInfo.lieunais_users;
               this.nationalite=UserDataInfo.nationalite_users;
               this.email=UserDataInfo.email_users;
               this.telephone=UserDataInfo.tel_users;
               this.genre=UserDataInfo.sexe_users;
               this.login=UserDataInfo.login_users;

             

          }

      },
      choisirsession(sessionEtab)
      {
          localStorage.setItem("UserSessionchoose",sessionEtab);
      },
      changeTo(valeur)
      {
          this.error='';
          this.error1='';
          this.message='';
         
          if(this.statevisible==valeur)
          {

          }else
          {
this.statevisible=valeur;
          }
          
        
        //   console.log(this.statevisible+' / '+valeur);
          
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
    // '$route': 'fetchData',

    eleve(val)
    {
       console.log(val[0]);
       this.nom=val[0].nom_users;
       this.prenom=val[0].prenom_users;
       this.datenais=val[0].datenais_users;
       this.lieunais=val[0].lieunais_users;
       this.nationalite=val[0].nationalite_users;
       this.genre=val[0].sexe_users;
       this.matricule=val[0].matricule_users;
       this.classe=val[0].libelle_classes;
       this.pere=val[0].pere_users;
       this.mere=val[0].mere_users;
       this.regime=val[0].doublant_inscriptions;
       this.interne=val[0].interne_inscriptions;
       this.affecte=val[0].affecter_inscriptions;
       this.bourse=val[0].bourse_inscriptions;
       this.orphelin=val[0].orphelins_inscriptions;
       this.principal=val[0].principal_users;
       this.principalphone=val[0].contactprincipal_users;
       this.statut=val[0].statut_inscriptions;
    }

  }

}
</script>