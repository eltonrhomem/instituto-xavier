<template>
  <div>
      <nav class="nav flex-column">
        <!-- <a class="nav-link active" >Active</a> -->
        <!-- <a class="nav-link" >Link</a> -->
        <router-link to="/aluno"><a class="nav-link" >cadastrar aluno</a></router-link>
        <router-link to="/tela2"><a class="nav-link" > Tela 2</a></router-link>
        <router-link to="/"><a class="nav-link" >Voltar</a></router-link>
        <!-- <a class="nav-link disabled"  tabindex="-1" aria-disabled="true">Disabled</a> -->
      </nav>
    <router-view></router-view>

  </div>
</template>

<script>
  export default {
    
  }
</script>


<style>

</style>