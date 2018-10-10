<!DOCTYPE html>
<html>
<head>
  <title>ALLOUCHE Nejmeddine</title>
  

  <meta name="mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">

  


</head>
<body>
  {{-- toolbar --}}
  
  <v-card color="grey lighten-4" flat height="200px" tile>
  <v-toolbar dense>
    <v-toolbar-side-icon></v-toolbar-side-icon>

    <v-toolbar-title>Title</v-toolbar-title>

    <v-spacer></v-spacer>

    <v-btn icon>
      <v-icon>search</v-icon>
    </v-btn>

    <v-btn icon>
      <v-icon>favorite</v-icon>
    </v-btn>

    <v-btn icon>
      <v-icon>more_vert</v-icon>
    </v-btn>
  </v-toolbar>
  </v-card>

  {{-- contenu --}}
  
<div id="app">
  <v-app light>
    <v-content>
      <v-container>
        <v-layout row wrap justify-end >
          <v-flex xs12 md4 >
            <div class="text-xs-center" pt5>
              <v-avatar size="125px" >
                <img
                  class="img-circle elevation-7 "
                  src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.15752-9/43076085_487843708364587_4713586677325496320_n.png?_nc_cat=111&oh=178ae933894fe54c5bc78024ff953eab&oe=5C61FCC8"
                >
              </v-avatar>
              <div class="headline">Nejmeddine <span style="font-weight:bold">ALLOUCHE</span></div>
              <div class="subheading text-xs-center grey--text pt-1 pb-3">Développeur WEB</div>
              <v-layout justify-center>
                <v-btn icon large href="https://www.facebook.com/nejmeddine.allouche.1" class="blue--text text--darken-4" ><v-icon large>fa-facebook</v-icon></v-btn>
                <v-btn icon large href="https://www.linkedin.com/in/nejmeddine-allouche" class="blue--text text--darken-1"><v-icon large >fa-linkedin</v-icon></v-btn>
                
              </v-layout>
              <v-spacer></v-spacer>
              <v-card class="elevation-0">
                <v-card-media>
                    
                </v-card-media>
                <v-container hover dark>
                  How are you ?<br>
                  fine ?
                  <div class="col-lg-4 mr-auto flip">
                      <p class="lead">Developpeur Front end
                        
                      </p>
                    </div>
                </v-container>
              </v-card>
            </div>
          </v-flex>
          <v-flex xs12 md5 offset-md2>
            <div v-for="post in posts" :key="post.title">
              <v-card class="my-3" hover>
                <v-card-media
                  class="dark--text"
                  height="200px"
                  :src="post.imgUrl"
                >
                  <v-container fill-height fluid>
                    <v-layout>
                      <v-flex xs12 align-end d-flex>
                        <span class="headline">@{{ post.title }}</span>
                      </v-flex>
                    </v-layout>
                  </v-container>
                </v-card-media>
                <v-card-text>
                  @{{ post.content }}
                </v-card-text>
                <v-card-actions>
                  
                  <v-spacer></v-spacer>
                  <v-btn flat class="blue--text">Plus d'info</v-btn>
                </v-card-actions>
              </v-card>
            </div>
          </v-flex>
        </v-layout>
      </v-container>
    </v-content>
    <v-footer class="secondary" app>
      <v-layout row wrap align-center>
        <v-flex xs12>
          <div class="white--text ml-3">
            Made with
            <v-icon class="red--text">favorite</v-icon>
            by <a class="white--text" href="https://linkedin.com/in/nejmeddine-allouche" target="_blank">ALLOUCHE Nejmeddine</a>
            <a class="white--text" href="https://github.com/vwxyzjn" target="_blank"></a>
          </div>
        </v-flex>
      </v-layout>
    </v-footer>
  </v-app>
 </div>

 
 <script src="https://unpkg.com/vue/dist/vue.js"></script>
 <script src="https://unpkg.com/vuetify/dist/vuetify.js"></script>
 <script src="https://use.fontawesome.com/73c8e2621d.js"></script>
 <script>
   new Vue({
    el: '#app',
    data () {
      return {
        title: '',
        posts: [
          {
            title: 'Qui suis-je ?',
            content: 'Je suis étudiant en 3éme année Licence Informatique à Université Polytechnique Hauts de France',
            imgUrl: 'https://www.timeshighereducation.com/sites/default/files/institution/header_image/swansea-university-campus.jpg'
          },
          {
            title: '',
            content: 'Comme PFA , en BAC on a préparé un site codé en HTML , PHP et Javascript pour la gestion des ressources humaines pour une entreprise',
            imgUrl: 'https://www.bretagne.ars.sante.fr/sites/default/files/styles/vignette_654x449/public/2016-12/CLACT.png?itok=s-bpcxUN'
          }
        ]
      }
    }
  })
 </script>
 
</body>
</html>