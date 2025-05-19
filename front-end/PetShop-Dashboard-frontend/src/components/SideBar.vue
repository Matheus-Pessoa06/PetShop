<template>
    
    <div class="sidebar">
        <div class="container-header">
            <input type="image" src="" alt="">
            <div class="titulo">
                <p>Olá, Matheus!</p>
                <h1>Bem vindo!</h1>
            </div>  
            
            <hr />
        </div>
        
        <div class="container-pages">
            <span>Usuarios</span>
            <span>Cuidadores</span>
            <span>Pets</span>
            <span>Vendas</span>
            <span>Tipos de Serviços</span>
            <span>Serviços</span>
        </div>

        <div class="container-thead">
            <button>Sair <i class="pi pi-sign-out"></i></button>
        </div>
    </div>   
    
</template>

<style scoped>
    .sidebar{
        background-color: #391f1f;
        font-family: "Inter", sans-serif;
    }

    .sidebar{
        position: fixed;
        top: 0;
        left: 0;
        width: 20vw;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        
    }

    .container-header{
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 6rem;
    }

    input{
        border-radius: 50%;
        background-color: #f1f1f1;
        width: 6rem;
        height: 6rem;
        display: inline-block;
        margin-top: 1rem;
        margin-bottom: 1rem;
        
    }

    .titulo{
       text-align: center;
       color: #ffffff;
    }
    .titulo p {
        margin: 0;
        font-size: 1rem;
    }
    .titulo h1 {
        margin: 0;
        font-size: 2rem;
    }

    hr{
        width: 15rem;
        margin-top: 2rem;
        border: none;
        border-top: 2px solid #6a5151;
    }

    .container-pages{
        display: flex;
        flex-direction: column;
    }

    .container-pages span{
        margin: 1rem;
        cursor: pointer;
        color: #f1f1f1;
    }

    .container-thead{
        margin-top: 3rem;
    }
    .container-thead button{
        width: 13rem;
        border: none;
        height: 2rem;
        border-radius: 6px;
        color: #f1f1f1;
        cursor: pointer;
        background-color: #674646;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 0.9rem;
    }

    @media (max-width: 1200px) {
        .sidebar {
            width: 30vw;
            height: 100vh;
            position: relative;
        }

        .main-content {
            margin-left: 0;
        }
    }

    @media (max-width: 780px) {
        .sidebar {
            width: 100vw;
            height: 100vh;
            position: relative;
        }

        .main-content {
            margin-left: 0;
        }
    }
</style>

<script>
import 'primeicons/primeicons.css'

</script>