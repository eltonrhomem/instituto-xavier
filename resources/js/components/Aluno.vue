<template>
<div class="row form-group">
    <div class="col-md-2">
        <layout />
    </div>
    <form @submit.prevent="onSubmit">
        <div class="col-md-10 ">
            <div class="row">
                <div class="col-md-12">
                    <h1>Cadastro de Alunos1</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ">
                        <label for="nomealuno">Nome completo</label>
                        <input type="text" class="form-control text-uppercase" id="nomealuno" v-model="form.nmaluno">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ">
                        <label for="nomeguerra">Nome de guerra</label>
                        <input type="text" class="form-control text-uppercase" id="nomeguerra" v-model="form.nomeguerra">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 ">
                        <label for="datanascimento">Data de nascimento</label>
                        <input type="date" class="form-control text-uppercase" id="datanascimento" v-model="form.datanascimento">
                </div>
                <div class="col-md-3 ">
                    <label for="tiposangue">Tipo sanguíneo</label>
                    <select  class="form-control" id="tiposangue" v-model="form.tiposanguineo">
                        <option value=""></option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="A-">A-</option>
                        <option value="A+">A+</option>
                        <option value="B-">B-</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>
                <div class="col-md-3 ">
                    <label for="tiposangue">Sexo</label>
                    <select  class="form-control" id="tiposangue" v-model="form.sexo">
                        <option value=""></option>
                        <option value="M">M</option>
                        <option value="F">F</option>

                    </select>
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-md-12">
                        <label for="idsuperpoderes">Super poderes/habilidades</label>
                    <div class="input-group">
                        <select class="custom-select" id="idsuperpoderes" aria-label="Example select with button addon">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                    </div>
                </div> -->

            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success" >Salvar</button>
                </div>

            </div>
            <pre>{{this.dados}}</pre>

        </div>


    </form>

</div>

</template>

<script>

import Layout from './Layout';
import repositorioAPIAluno from './../api/repositorioAPIAluno';

export default {
    components: {
        Layout
    },

    data () {
        return {

            dados: [],
            form : {
                nmaluno: '',
                nomeguerra: '',
                datanascimento: '',
                tiposanguineo: '',
                sexo: '',


            }
        }

    },

    methods: {

        async onSubmit() {
            console.log('montei= ',this.form)

            await repositorioAPIAluno.salvarAluno({...this.form}).then(
                (response) => {
                    this.dados = response.data;
                }
            );
           // console.log('a= ', a);
            //await repositorioAPIAluno.



            /* await axios.get('http://127.0.0.1:8000/api/alunos/13')
                            .then( response => {
                                a =  response.data
                            }); */
            this.dados = a;
        }
    }

}
</script>

<style>

</style>
