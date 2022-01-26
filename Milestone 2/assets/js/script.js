const app = new Vue({
  el: '#app',
  data:{
    musics: null,
  },

  mounted(){
    axios
    .get('./api/apiMusic.php')
    .then(response => {
    console.log(response);

      this.musics = response.data;

    })
    .catch(error => {
    console.log(error);

    });
  }
});