<template>
  <div>
    <div class="text-center">
      <h1>Instituto Xavier</h1>
      <small>para jovens superdotados</small>
    </div>
    <div>
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Usuário</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Senha</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <div class="form-group">
        <router-link to="/home">
          <button type="submit" class="btn btn-primary">Entrar</button>
        </router-link>  

        </div>
      </form>

    </div>
   </div>
</template>

<script>

export default {
   
}
</script>

<style>





</style>