const app = new Vue ({
   el: '#app',

   data: {
      //db: "./db.php",
      albums: [],
      genres: [],
      genre: '',
      apiURL: 'http://localhost:8888/php-ajax-dischi/server.php?',
   },

   methods: {
      getApi(){ 
         axios.get(this.apiURL, {
            params: {
               genre: this.genre,
            }
         })
         .then(r =>{
            this.albums = r.data;
            this.option();
         })
         .catch(e =>{
            console.log(e);
         })
      },

      getGenre(){
         this.albums.forEach(album => {
            if (!this.genres.includes(album.genre)) {
               this.genres.push(album.genre);
            }
         });
         return this.genres;
      }

   },

   mounted(){
      this.getApi();
   }

})