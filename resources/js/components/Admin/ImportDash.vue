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


<div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <div class="preview-block">
                                                    <span class="preview-title-lg overline-title">Importation de la base</span>
      <br>                                              

<form @submit="submitForm" enctype="multipart/form-data">

<div class="row gy-4">

    <div v-if="error !== ''" class="alert alert-fill alert-danger alert-icon" style="color:white"  role="alert">
      <em class="icon ni ni-cross-fill-c"></em> {{ error }}
    </div>

    <div v-if="message !== ''" class="example-alert">
                <div class="alert alert-success alert-icon">
                <em class="icon ni ni-check-circle"></em> {{ message }}
                 </div>
   </div>
                                                       
                                                       
                                                      
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-06">Fichier</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-file">
                                                                        <input type="file"  name="filename" class="form-file-input" id="inputFileUpload" v-on:change="onFileChange">
                                                                        <label class="form-file-label" for="customFile">Sélectionner un fichier</label>
                                                                    </div>
                                                                </div>
                                                            </div>
<p class="text-danger font-weight-bold">{{filename}}</p>
                                                           
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-06">Table</label>
                                                                <div class="form-control-wrap ">
                                                                    <div class="form-control-select">
                                                                        <select class="form-control" v-model="table" id="default-06">
                                                                            <option value="">Sélectionner une table</option>
                                                                            <option value="Comptes">Compte</option>
                                                                            <option value="Elèves">Elèves</option>
                                                                            <option value="Inscriptions">Inscriptions</option>
                                                                            <option value="Classes">Classes</option>
                                                                            <option value="Matieres">Matieres</option>
                                                                            <option value="Semestres">Semestres</option>
                                                                            <option value="Notes">Notes</option>
                                                                            <option value="Rating">Rating</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       <div class="input-group-append">
<button type="submit" class="btn btn-secondary">Importer</button> &nbsp;
<div class="spinner-border" role="status" v-if="loading">
  <span class="visually-hidden">Loading...</span>
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
// import useSessions from "../../composables/sessions";
import Menu from './Menus/Sidebar.vue';
import Header from './Headers/Header.vue';
import SearchStudentbar from './Searchs/Searchbar.vue';
import { $dataMetaSchema } from 'ajv';
export default {
mounted() {
console.log('Component successfully mounted.')
},
components:{
		Menu,Header,SearchStudentbar
	},
data() {
return {
filename: '',
file: '',
success: '',
message: '',
table: '',
error: '',
loading: false,

};
},
methods: {

onFileChange(e) {
//console.log(e.target.files[0]);
this.filename = e.target.files[0].name;
this.file = e.target.files[0];
},
renitialisation()
{
this.loading=!this.loading;
},
submitForm(e)
{
e.preventDefault();
let currentObj = this;
const config = {
headers: {
'content-type': 'multipart/form-data',
'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
}
}


//
if (this.table.length > 0 && this.filename.length > 0) 
{

    this.loading=!this.loading;
    this.message='';

let formData = new FormData();
formData.append('file', this.file);
formData.append('table', this.table);


// send upload request
axios.post('/api/importations/tables', formData, config)
.then(function (response) {
currentObj.message = response.data.success;
currentObj.loading = response.data.loading;

// this.loading=response.data.loading;
// currentObj.filename = "";
})
.catch(function (error) {
currentObj.error = error;
currentObj.loading = false;
});



}else
{
  this.error="Merci de renseigner tous les champs obligatoires svp !";
}


}


}

}
</script>
