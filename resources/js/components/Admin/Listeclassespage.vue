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
<SearchStudentbar/>
<!-- fin barre de recherche -->

                        <!-- ici le corps -->

                        <div class="nk-block">
<div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <div class="row g-gs">
                                                    <div class="col-md-6">
                                                        <div class="card card-bordered">
                                                            <div class="card-inner">
                                                                <h4 class="card-title mb-1">Effectif / Niveau</h4>
                                                             
                                                                
                                                                <div class=""  v-if="effectifniveau==true">
                                                                    <div class="divider"></div>
                                                                   <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer rating-card-footer bg-light border-top d-flex align-center justify-content-between">
                                                                <a class="switch-text collapsed" v-if="effectifniveau==true" @click="effectifniveaustate">
                                                                   
                                                                    <div class="link link-gray switch-text-collapsed" >
                                                                        <span>Voir moins</span><em class="icon ni ni-downward-ios"></em>
                                                                    </div>
                                                                </a>
                                                                <a class="switch-text collapsed" v-if="effectifniveau==false" @click="effectifniveaustate">
                                                                   
                                                                    <div class="link link-gray switch-text-collapsed" >
                                                                        <span>Voir plus</span><em class="icon ni ni-downward-ios"></em>
                                                                    </div>
                                                                </a>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card card-bordered">
                                                            <div class="card-inner">
                                                                <h4 class="card-title mb-1">Effectif / Cycle</h4>
                                                               
                                                               
                                                              <div class=""  v-if="effectifcycle==true">
                                                                    <div class="divider"></div>
                                                                   <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                                                </div>
                                                            </div>
                                                             <div class="card-footer rating-card-footer bg-light border-top d-flex align-center justify-content-between">
                                                                <a class="switch-text collapsed" v-if="effectifcycle==true" @click="effectifcyclestate">
                                                                   
                                                                    <div class="link link-gray switch-text-collapsed" >
                                                                        <span>Voir moins</span><em class="icon ni ni-downward-ios"></em>
                                                                    </div>
                                                                </a>
                                                                <a class="switch-text collapsed" v-if="effectifcycle==false" @click="effectifcyclestate">
                                                                   
                                                                    <div class="link link-gray switch-text-collapsed" >
                                                                        <span>Voir plus</span><em class="icon ni ni-downward-ios"></em>
                                                                    </div>
                                                                </a>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        </div>

                        <div class="nk-block">
                            
                           <div class="card card-stretch">
                                        <div class="card-inner-group">
                                            <div class="card-inner position-relative card-tools-toggle">
                                                <div class="card-title-group">
                                                   
                                                    <div class="card-tools me-n1">
                                                        <ul class="btn-toolbar gx-1">
                                                            <li>
                                                                <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                                            </li><!-- li -->
                                                            <li class="btn-toolbar-sep"></li><!-- li -->
                                                            
                                                        </ul><!-- .btn-toolbar -->
                                                    </div><!-- .card-tools -->
                                                </div><!-- .card-title-group -->
                                                <div class="card-search search-wrap" data-search="search">
                                                    <div class="card-body">
                                                        <div class="search-content">
                                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="rechercher une classe par le nom ou le niveau">
                                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                        </div>
                                                    </div>
                                                </div><!-- .card-search -->
                                            </div><!-- .card-inner -->
                                            <div class="card-inner p-0">
                                                <div class="nk-tb-list nk-tb-ulist">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        
                                                        <!-- <div class="nk-tb-col"><span class="sub-text">Order</span></div> -->
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Classes</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Tot. inscrits</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Tot. affectés</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Tot. internes</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Tot. orphélins</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div>
                                                        <div class="nk-tb-col nk-tb-col-tools text-end">
                                                            
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item" v-for="item in classes" :key="item.id_classes" >
                                                       
                                                       <!-- <div class="nk-tb-col tb-col-mb">
                                                            <span class="tb-amount" style="">1</span>
                                                        </div> -->
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span class="tb-amount">{{item.libelle_classes}}</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span style="text-align:center">{{item.nbinscrit_classes}}</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md" >
                                                           <span style="text-align:center">{{item.nbaffecte_classes}}</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span style="text-align:center">{{item.nbinternes_classes}}</span>
                                                        </div>
                                                         <div class="nk-tb-col tb-col-lg">
                                                            <span style="text-align:center">{{item.nbinternes_classes}}</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                          
 <a href="#" class="btn btn-md btn-primary">xx</a>
                                                            
                                                               
  <a href="#" class="btn btn-md btn-success">yy</a>
                                                            
                                                           
                                                          
                                                        </div>
                                                        
                                                    </div><!-- .nk-tb-item -->
                                                    
                                                </div><!-- .nk-tb-list -->
                                            </div><!-- .card-inner -->
                                            
                                        </div><!-- .card-inner-group -->
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
import useClasses from "../../composables/classes";
import Menu from './Menus/Sidebar.vue';
import Header from './Headers/Header.vue';
import SearchStudentbar from './Searchs/Searchbar.vue';

export default {
    setup()
    {
  const { getclasses, classes} = useClasses();
     onMounted(getclasses);
     
console.log('nous sommes au niveau de la homepage')

return {
 getclasses, classes
    };

    },
	components:{
		Menu,Header,SearchStudentbar
	},
    
 mounted() {
            console.log('ceci est la page de selection de session');
            this.setUsername();
            // this.reduction(this.thesessions);

        },
    data() {
      return {
        isModalVisible: false,
        visiblesearch: false,
        effectifniveau: false,
        effectifcycle: false,
        Username:"",
        UserSession:"",
      };
    },
    methods: {
effectifniveaustate()
{
   this.effectifniveau=!this.effectifniveau;
},
effectifcyclestate()
{
   this.effectifcycle=!this.effectifcycle;
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
            //   console.log(UsernameData);
          }

      },
      choisirsession(sessionEtab)
      {
          localStorage.setItem("UserSessionchoose",sessionEtab);
      }
      
    },
  watch: {
    // call again the method if the route changes
    // '$route': 'fetchData'
  }

}
</script>