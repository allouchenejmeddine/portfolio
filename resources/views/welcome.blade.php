<!DOCTYPE html>
<html>
<head>
  <title>ALLOUCHE Nejmeddine</title>


  <meta name="mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">

<style>
	.span-moi {
		border-radius: 5px;
	}
 #app {
  background: #ebeaf3;
 }
 .card {
		border-radius: 10px;
 }
</style>



</head>
<body>

<div id="app">
  <v-app light>
		<v-card color="grey lighten-4" flat  >
  <v-toolbar dark color="grey darken-2">

    <v-toolbar-title>Portfolio</v-toolbar-title>

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
    <v-content>
      <v-container>
        <v-layout row wrap>
          <v-flex xs12 md10 offset-md1 lg8 offset-lg2>
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
              <v-card class="card">
                <v-container class="grey darken-2">
									<p class="subheading white--text">
										Développeur Front end passionné par la création web, je suis actif en tant que developpeur web indépendant. Je propose donc mes services en tant que prestataire ou sous-traitant.
									</p>
									</v-container>
              </v-card>
            </div>
          </v-flex>
          <v-flex xs12 md10 offset-md1 lg8 offset-lg2>
            <div v-for="post in posts" :key="post.title">
              <v-card class="my-3 card" hover>
                <v-card-media
                  class="dark--text"
                  height="400px"
                  :src="post.imgUrl"
                >
                  <v-container fluid>
                    <v-layout>
                      <v-flex xs12>
                        <span class="elevation-20 title white--text pa-2 info span-moi" v-text="post.title"></span>
                      </v-flex>
                    </v-layout>
                  </v-container>
                </v-card-media>
                <v-card-text class="subheading">
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

		<v-footer height="auto"
		          color="grey darken-2">

			<v-container fluid
			             pb-0
			             px-0>
				<v-layout justify-center
				          row
				          wrap
				          class="mb-3">
					<v-btn v-for="(item, index) in social"
					       :key="index"
					       dark
					       color="my_blue"
								 class="mx-auto"
								 :href="item.link"
								 target="_blank"
								 icon>
						<v-icon size="30px">@{{ item.icon  }}</v-icon>
					</v-btn>
				</v-layout>

				<v-layout justify-center
				          row
				          wrap
				          id="footer">
					<v-flex class="black"
					        py-4
					        text-xs-center
					        white--text>
						&copy; @{{ new Date().getFullYear() }} —
						<strong>&nbsp;nejmeddine.com</strong>
					</v-flex>
					<section class="black  py-4 pr-2 text-xs-right white--text">
						Created by <a class="font-weight-bold yellow--text"
						   href="https: //www.linkedin.com/in/nejmeddine-allouche/
"
						   target="_blank"
						   rel="noopener noreferrer">Nejmeddine</a>
					</section>
				</v-layout>

			</v-container>

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
						imgUrl: 'https://firebasestorage.googleapis.com/v0/b/my-portfolio97.appspot.com/o/cmi-tm-i-istv-9-igp4443.jpg?alt=media&token=1a3c9e21-a0a4-4ce3-89ec-cd3e23616d5c'
          },
          {
            title: "Projet Fin d'Année",
            content: 'Comme PFA , en BAC on a préparé un site codé en HTML , PHP et Javascript pour la gestion des ressources humaines pour une entreprise',
						imgUrl: 'https://firebasestorage.googleapis.com/v0/b/my-portfolio97.appspot.com/o/human-resources-101-intro-to-human-resources_186458_large.jpg?alt=media&token=3a5d6499-1a92-43c9-bd88-0d6b453c49d0'
          }
				],
				social: [
					{
					icon:'fa fa-facebook',
					link:'https://www.facebook.com/nejmeddine.allouche.1'
				},
					{
						icon:'fa fa-linkedin',
						link: 'https://www.linkedin.com/in/nejmeddine-allouche'
					}
					,
					{
						icon:'fa fa-phone',
						link: ''
					},
					{
							icon:'fa fa-instagram',
							link: 'https//www.instagram.com/najm.all'
					},
			]
			}
		}
    })
 </script>

</body>
</html>
