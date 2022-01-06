const app = new Vue ({
   el: '#app',

   data: {
      db: "./db.php",
      discs: [],
   },

   methods: {
      getApi(){ 
         axios.get(this.db)
         .then(r =>{
             this.discs = r.data;
             // console.log(this.discs);
             this.option();

         })
         .catch(e =>{
             console.log(e);
         })
     },

   },

   mounted(){
      this.getApi();
   }

})