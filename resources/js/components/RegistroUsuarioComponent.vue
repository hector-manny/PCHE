<template>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 mt-3">
            <h1 class="text-center">Registro de Empleado</h1>
            <div class="card mt-3 borderCircle">
                <div class="card-body">
                    <form>
                        <div class="d-flex flex-row justify-content-between">
                            <div class="form-group col-6">
                                <label for="name">Nombre</label>
                                <input id="name" type="text" class="form-control" v-model="usuario.name" required autofocus>
                            </div>
                            <div class="form-group col-6">
                                <label for="last_name">Apellido</label>
                                <input id="last_name" type="text" class="form-control" v-model="usuario.last_name" required autofocus>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <div class="form-group col-6">
                                <label for="company">Empresa</label>
                                <select id="company" class="form-control" v-model="usuario.company" required autofocus @change="getAreas">
                                    <option v-for="empresa in empresas" :key="empresa.id" :value="empresa.id">
                                        {{ empresa.nombre }}
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label for="area">Área</label>
                                <select id="area" class="form-control" v-model="usuario.area" required autofocus>
                                    <option v-if="areas.length === 0" :disabled="true">
                                        Sin elementos disponibles
                                    </option>
                                    <option v-for="a in areas" :key="a.id" :value="a.id">
                                        {{ a.nombre }}
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <div class="form-group col-4">
                                <label for="job_title">Cargo</label>
                                <input id="job_title" type="text" class="form-control" v-model="usuario.job_title" required autofocus>
                            </div>
                            <div class="form-group col-4">
                                <label for="job_title">DUI</label>
                                <input id="job_title" type="text" class="form-control" v-model="usuario.dui" required autofocus>
                            </div>
                            <div class="form-group col-4">
                                <label for="email">Correo Electrónico</label>
                                <input id="email" type="email" class="form-control" v-model="usuario.email" required>
                            </div>
                        </div>
                        <div class="form-group col-12 d-flex flex-row justify-content-start">
                            <button type="button" class="btn btn-primary" @click="registrar">
                                Guardar
                            </button>
                            <button type="button" class="btn btn-light ml-3">
                                Cancelar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</template>
<script>

import axios from 'axios';

    export default{
        data() {
            return {
                usuario:{
                    name:'',
                    last_name:'',
                    email:'',
                    area: 0,
                    job_title:'',
                    company:'',
                    dui: ''
                },
                empresas: [],
                areas: []
            }
        },
        mounted() {
            this.getEmpresas();
        },
        methods: {
            registrar() {
                axios.post('registrarse', this.usuario, {
                    headers:{'Content-type':'application/json'}
                }).then(response=>{
                    console.log(response.data);
                })
            },
            getEmpresas(){
                axios.get('empresas',{
                    headers: {'Content-type': 'application/json'}
                }).then(resp=>{
                    this.empresas = resp.data;
                });
            },
            getAreas() {
                console.log(this.usuario.company)
                axios.get(`areas?idEmpresa=${this.usuario.company}`, {
                    headers: { 'Content-type': 'application/json' }
                }).then(resp=>{
                    this.areas = resp.data;
                });
            }

        }
    }
</script>
<style>
    .borderCircle{
        border-radius: 20px;
    }
</style>