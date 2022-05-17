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
                                                    
                                                   <div class="container" style="margin-top: 50px;">
<div class="text-center">
<h4>File Upload with VueJS and Laravel</h4><br>
<div style="max-width: 500px; margin: 0 auto;">
<div v-if="success !== ''" class="alert alert-success" role="alert">
{{success}}
</div>
<form @submit="submitForm" enctype="multipart/form-data">
<div class="input-group">
<div class="custom-file">
<input type="file" name="filename" class="custom-file-input" id="inputFileUpload"
v-on:change="onFileChange">
<label class="custom-file-label" for="inputFileUpload">Choose file</label>
</div>
<div class="input-group-append">
<input type="submit" class="btn btn-primary" value="Upload">
</div>
</div>
<br>
<p class="text-danger font-weight-bold">{{filename}}</p>
</form>
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
// import useSessions from "../../composables/sessions";
import Menu from './Menus/Sidebar.vue';
import Header from './Headers/Header.vue';
import SearchStudentbar from './Searchs/Searchbar.vue';
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
success: ''
};
},
methods: {
onFileChange(e) {
//console.log(e.target.files[0]);
this.filename = "Selected File: " + e.target.files[0].name;
this.file = e.target.files[0];
},
submitForm(e) {
e.preventDefault();
let currentObj = this;
const config = {
headers: {
'content-type': 'multipart/form-data',
'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
}
}
// form data
let formData = new FormData();
formData.append('file', this.file);
// send upload request
axios.post('/api/store_file', formData, config)
.then(function (response) {
currentObj.success = response.data.success;
currentObj.filename = "";
})
.catch(function (error) {
currentObj.output = error;
});
}
}
}
</script>
