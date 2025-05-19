<template>
    <div class="container">
        
        <SideBar class="sidebar"/>

        <div class="container-register">
            <h1>Registrar novo úsuario</h1>
            
            <label>Nome</label>
            <input type="text" id="nome">

            <label>Email</label>
            <input type="email" id="email">

            <label>Senha</label>
            <input type="password" id="senha">
        </div>
    </div>
</template>

<style scoped>

.container-register {
  margin-left: 43vw;
  margin-top: 25vh;
  padding: 2rem;
  display: flex;
  flex-direction: column;
}

.container-register input{
    width: 25rem;
    border-radius: 3px #FFFFFFB2;
    height: 25px
}

</style>


<script setup>
import SideBar from '@/components/SideBar.vue'
</script>

