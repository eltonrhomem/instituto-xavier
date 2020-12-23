<template>
<div class="row form-group">
    <div class="col-md-2"> 
        <layout />
    </div>
    <div class="col-md-10 ">
        <div class="row">
            <div class="col-md-12">
                <h1>Tela 2</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ">
                    <label for="nomealuno">Nome completo</label>
                    <input type="text" class="form-control text-uppercase" id="nomealuno">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ">
                    <label for="nomeguerra">Nome de guerra</label>
                    <input type="text" class="form-control text-uppercase" id="nomeguerra">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 ">
                    <label for="datanascimento">Data de nascimento</label>
                    <input type="date" class="form-control text-uppercase" id="datanascimento">
            </div>
            <div class="col-md-3 ">
                <label for="tiposangue">Tipo sanguíneo</label>
                <select  class="form-control" id="tiposangue">
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
        </div>
        <div class="row">
            <div class="col-md-12">
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
            </div>

        </div>
        
    </div>

</div>
  
</template>

<script>

import Layout from './Layout';
export default {
    components: {
        Layout
    }
}
</script>

<style>

</style>