@extends('layouts.default.index')

@section('title','My App Vuetify')

@section('l-topbar-title',"Integration Vue.js and Vuetify - Laravel Project Example")

@section('l-content')

<!--
###########
Frameworks
###########
-->


<v-container>
    <div>
        <span class='display-3 grey--text  text--darken-3'>Frameworks</span>
    </div>
    <v-layout row wrap>
        <v-flex xs12 sm6 md4>
            <v-container fill-height>
                <v-card color="blue" class="white--text" height="100%">
                    <v-layout justify-space-between column fill-height>
                        <v-flex>
                            <v-img src="https://cdn.vuetifyjs.com/images/logos/vuetify-logo-300.png" aspect-ratio="2.75"></v-img>
                            <v-card-title primary-title>
                                <div>
                                    <h3 class="headline mb-0">Vuetify</h3>
                                    <div>Tidelift gives software development teams a single source for purchasing and
                                        maintaining their software, with professional-grade assurances from the experts
                                        who
                                        know it best, while seamlessly integrating with existing tools.</div>
                                </div>
                            </v-card-title>
                        </v-flex>
                        <v-flex style='height:100px'>
                            <v-layout align-end row fill-height>
                                <v-flex>
                                    <v-divider></v-divider>
                                    <v-card-actions>
                                        <v-btn color="error" @click='linkopen("https://vuetifyjs.com/pt-BR/getting-started/quick-start")'>Documentation</v-btn>
                                    </v-card-actions>
                                </v-flex>
                            </v-layout>

                        </v-flex>
                    </v-layout>
                </v-card>
            </v-container>


        </v-flex>

        <v-flex xs12 sm6 md4>
            <v-container fill-height>
                <v-card height="100%">
                    <v-layout justify-space-between column fill-height>
                        <v-flex>
                            <v-img src="https://cdn.freebiesupply.com/logos/large/2x/laravel-1-logo-png-transparent.png"
                                aspect-ratio="2.75"></v-img>
                            <v-card-title primary-title>
                                <div>
                                    <h3 class="headline mb-0">Laravel</h3>
                                    <div>Laravel is free, open-source and one of the more popular PHP web framework
                                        based
                                        on the
                                        model–view–controller (MVC) architectural pattern. It is created by Taylor
                                        Otwell,
                                        intended
                                        to reduce the cost of initial development and improve quality of your code by
                                        defining
                                        industry standard design practices. Using Laravel, you can save hours of
                                        development time
                                        and reduce thousands of lines of code compared raw PHP.</div>
                                </div>
                            </v-card-title>
                        </v-flex>
                        <v-flex style='height:100px'>
                            <v-layout align-end row fill-height>
                                <v-flex>
                                    <v-divider></v-divider>
                                    <v-card-actions>
                                        <v-btn color="error" @click='linkopen("https://laravel.com/docs/5.7")'>Documentation</v-btn>
                                    </v-card-actions>
                                </v-flex>
                            </v-layout>

                        </v-flex>
                    </v-layout>
                </v-card>
            </v-container>
        </v-flex>
        <v-flex xs12 sm6 md4>
            <v-container fill-height>
                <v-card color="teal accent-4" class="white--text" height="100%">
                    <v-layout justify-space-between column fill-height>
                        <v-flex>
                            <v-img src="https://dwglogo.com/wp-content/uploads/2017/09/Vue-logo-001.svg" aspect-ratio="2.75"></v-img>
                            <v-card-title primary-title>
                                <div>
                                    <h3 class="headline mb-0">Vue.js</h3>
                                    <div>Vue (pronounced /vjuː/, like view) is a progressive framework for building
                                        user
                                        interfaces. Unlike other monolithic frameworks, Vue is designed from the ground
                                        up
                                        to be incrementally adoptable. The core library is focused on the view layer
                                        only,
                                        and is easy to pick up and integrate with other libraries or existing projects.
                                        On
                                        the other hand, Vue is also perfectly capable of powering sophisticated
                                        Single-Page
                                        Applications when used in combination with modern tooling and supporting
                                        libraries.</div>
                                </div>
                            </v-card-title>
                        </v-flex>
                        <v-flex style='height:100px'>
                            <v-layout align-end row fill-height>
                                <v-flex>
                                    <v-divider></v-divider>
                                    <v-card-actions>
                                        <v-btn color="error" @click='linkopen("https://vuejs.org/v2/guide/")'>Documentation</v-btn>
                                    </v-card-actions>
                                </v-flex>
                            </v-layout>

                        </v-flex>
                    </v-layout>
                </v-card>
            </v-container>
        </v-flex>
    </v-layout>
</v-container>



<v-divider></v-divider>

<!--
###########
Example
###########
-->



<v-container>
    <div><span class='display-3 grey--text  text--darken-3'>Examples - Using Vuetify Components</span></div>
</v-container>





@endsection

<!--
###########
Menu
###########
-->


@section('l-menu')
<v-list>
    <v-subheader>Sub menu</v-subheader>
    <v-divider></v-divider>
    <v-list-tile>
        <v-list-tile-action>
            <v-checkbox></v-checkbox>
        </v-list-tile-action>
        <v-list-tile-content>
            oi
        </v-list-tile-content>
    </v-list-tile>
</v-list>
@endsection


<!--
###########
Footer
###########
-->

@section('l-footer')
<v-card class="flex" flat tile>

    <v-card-actions class="grey darken-3 justify-center">
        <div><span class="white--text">&copy;2018 — <strong>Example project by Christiano Oishi de Carvalho</strong></span></div>

    </v-card-actions>
</v-card>
@endsection


<!--
###########
Vue
###########
-->

@section('js')
<script>
    new Vue({
        el: '#app',

        created() {
            this.$vuetify.theme = {
                primary: '#424242',
                secondary: '#424242',
                accent: '#82B1FF',
                error: '#ff4444',
                info: '#33b5e5',
                success: '#00C851',
                warning: '#ffbb33'
            };
        },
        data: {
            drawer: null,
            dialog: null,
            items: [{
                    src: 'https://cdn.vuetifyjs.com/images/carousel/squirrel.jpg'
                },
                {
                    src: 'https://cdn.vuetifyjs.com/images/carousel/sky.jpg'
                },
                {
                    src: 'https://cdn.vuetifyjs.com/images/carousel/bird.jpg'
                },
                {
                    src: 'https://cdn.vuetifyjs.com/images/carousel/planet.jpg'
                }
            ],

        },
        methods: {
            linkopen: function (link) {
                window.open(link)
            }
        }


    });

</script>
@endsection
