<template>
  <div class="container">
    <SideBar class="sidebar" />

    <div class="container-register">
      <h1>Registrar novo usuário</h1>
      
      <label>Nome</label>
      <input type="text" id="nome">

      <label>Email</label>
      <input type="email" id="email">

      <label>Senha</label>
      <input type="password" id="senha">
      
      <div class="register_button">
        <button>Registrar</button>
      </div>
    </div>
  </div>
</template>

<style scoped>
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  width: 100vw;
  position: relative;
}

.container-register {
  margin: 0; 
  padding: 2rem;
  display: flex;
  flex-direction: column;
  background-color: #f9f9f9;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  max-width: 400px;
  width: 90%;
  box-sizing: border-box;
}

.container-register h1 {
  text-align: center;
  margin-bottom: 1.5rem;
  color: #333;
}

.container-register input {
  width: 100%;
  padding: 0.5rem;
  margin-bottom: 1rem;
  border: 1px solid #ddd;
  border-radius: 4px;
  box-sizing: border-box;
}

.container-register label {
  padding-bottom: 0.5rem;
  font-weight: bold;
  color: #555;
}

.register_button {
  display: flex;
  justify-content: center;
  padding-top: 1rem;
}

.register_button button {
  padding: 0.8rem 1.5rem;
  background-color: #674646;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 1rem;
  transition: background-color 0.3s ease;
}

@media (max-width: 850px){
    .sidebar{
        width: 40vw;
    }
}
</style>

<script setup>
import SideBar from '@/components/SideBar.vue'
</script>
