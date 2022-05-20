<template>
   <div>
       <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="alert alert-pro alert-primary">
    <div class="alert-text">
       
<div class="nk-header-search " style="display:block;">
                                <em class="icon ni ni-search"></em>
                                <input type="text" v-model="libelle" data-value="{{ libelle }}" class="form-control border-transparent form-focus-none"  placeholder="Rechercher par son prénom ou son matricule">
                            </div>
                           

    </div>
</div>
                            </div>
                        </div> <br>
                        <div class="nk-tb-list is-separate mb-3" v-if="visibiliy" >
                                        <div class="nk-tb-item nk-tb-head">
                                           
                                            <div class="nk-tb-col"><span class="sub-text">Nom </span></div>
                                            <div class="nk-tb-col tb-col-mb"><span class="sub-text">Prénoms</span></div>
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Classes</span></div>
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Age</span></div>
                                             
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item"  v-for="item in resultat"
            :key="item.id" @click="detailstudent(item.id)" style="cursor:pointer">
                                           
                                           <div class="nk-tb-col tb-col-mb">
                                                <span class="">{{item.nom_users}}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-mb">
                                                <span class="">{{item.prenom_users}}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>{{item.libelle_classes}}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <span>{{item.age_users}}</span>
                                            </div>
                                           
                                            
                                            
                                        </div><!-- .nk-tb-item -->
                                        
                                    </div>
   </div>
</template>
<script>
export default {
    data() {
      return {
       libelletosearch:'',
       libelle:'',
       tailletosearch:0,
       resultat:[],
       visibiliy:false,
      };
    },
mounted() {
            console.log('ceci est la barre de recherche des élèves');
            
        },
        methods:
        {
            detailstudent(id)
            {
                 this.$router.push("/localeadmin/reinscription/student/"+id);
            },
           
            thehandler(event)
            {
               console.log("bonjour "+event.target.value);
            },
            handlesearch()
            {
                console.log("bonjour "+this.libelle);
                
                if(this.libelletosearch!='')
                {
const lasession = localStorage.getItem("UserSessionchoose");
axios.get('/sanctum/csrf-cookie').then(response => {
                     axios.get('/api/searching/'+this.libelletosearch+'/'+lasession)
                        .then(response => {
this.visibiliy=response.data.success;
                            if (response.data.success) {

                              this.tailletosearch= response.data.taille;
                              this.resultat=response.data.data;

                            } else {
                                //  this.error = response.data.message;
                                

                            }
                        })
                        .catch(function (error) {
                            console.error(error);
                        });
                })
                }else
                {
this.visibiliy=false;
                }



              
            }
        },
        watch: {
    libelle(val) {
      

 if(val!='')
                {
const lasession = localStorage.getItem("UserSessionchoose");
axios.get('/sanctum/csrf-cookie').then(response => {
                     axios.get('/api/searching/'+val+'/'+lasession)
                        .then(response => {
this.visibiliy=response.data.success;
                            if (response.data.success) {

                              this.tailletosearch= response.data.taille;
                              this.resultat=response.data.data;

                            } else {
                                //  this.error = response.data.message;
                                

                            }
                        })
                        .catch(function (error) {
                            console.error(error);
                        });
                })
                }else
                {
this.visibiliy=false;
                }

    },
    resultat(val)
    {
        this.resultat=val;
    }
  }

}
</script>