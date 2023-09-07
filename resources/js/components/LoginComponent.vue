<template>
    <div class="d-flex">
        <div class="d-flex flex-column col-5 paddingOff" style="background-color: #1b4d76;">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 effect" src="assets/img/banner4.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 effect" src="assets/img/banner5.jpg" alt="Third slide">
                    </div>
                </div>
<!--                 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> -->
            </div>
        </div>
        <div class="bg-white d-flex flex-column justify-content-center align-items-center col-7 paddingOff">
            <img src="assets/img/latinMobile.png" alt="logo" class="w-25">
            <form class="w-50">
                <div class="form-group">
                    <label for="user">Usuario</label>
                    <input type="text" class="form-control" id="user" placeholder="Escriba usuario" aria-describedby="userHelp" v-model="objLogin.email">
                </div>
                <div class="form-group">
                    <label for="pass">Contraseña</label>
                    <input type="password" class="form-control" id="pass" placeholder="Escriba contraseña" aria-describedby="passHelp" v-model="objLogin.password">
                </div>
                <div class="form-group mb-0">
                    <button type="button" class="btn btn-primary btn-block" @click="Ingresar">
                        Iniciar Sesión
                    </button>
                </div>
            </form>
            <Transition name="fade">
                <div v-if="emptyEmail" class="alert alert-danger w-50" role="alert">
                    <p class="text-center">Ingrese Usuario</p>
                </div>
                <div v-if="emptyPassword" class="alert alert-danger w-50" role="alert">
                    <p class="text-center">Ingrese Contraseña</p>
                </div>
            </Transition>
        </div>
    </div>
</template>
<script>

import axios from 'axios'
    export default {
        data() {
            return {
            objLogin: { email: '', password: '' },
            emptyEmail: false,
            emptyPassword: false,
            }
        },
        mounted() {

        },
        methods: {
            Ingresar(){
                if(this.objLogin.email == ''){
                    this.emptyEmail = true;
                } else if(this.objLogin.password == ''){
                    this.emptyPassword = true;
                } else{
                    this.$router.push('/business')
                    /* axios.post('login', this.objLogin, { headers: {'Content-type': 'application/json' }}).then(response=>{
                        console.log(response.data)
                        this.$router.push('/dashboard')
                    }).catch(error=>{
                        console.log(error)
                    }) */
                }
            }
        }
    }
</script>
<style>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }

    .fade-enter, .fade-leave-to{
        opacity: 0;
    }

    .effect{
        filter: opacity(.5);
    }
    
    .paddingOff{
        padding-left: 0px;
        padding-right: 0px;
    }
</style>