<template>
    <div class="container">

        <div class="login-left">
            <h1 class="titulo-login">Bem-Vindo!</h1>
            <div class="formumalio-login">
                <label>E-mail</label>
                <input class="input-login" type="email">
                
                <label>Senha</label>
                <input class="input-login" type="password">
            </div>
            <button>Registrar</button>
        </div>

        <div class="login-right">
            <img src="../assets/fotos/950dcbf02121757abda6f9a89bb8bcf542737d40.jpg" alt="petshop">
        </div>
        
    </div>
</template>

<style scoped>

.container{
    display: flex;
    height: 100vh;
    width: 100%;
}

h1{
    font-family: 'Poppins', sans-serif;
}

.login-left{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 2rem;
    width: 100%;
    background-color: #d9d9d9;
}

.login-right{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
}

.formumalio-login{
    font-family: "Roboto", sans-serif;
    display: flex;
    flex-direction: column;
}

label{
    margin: 10px 0;
}

input{
    border: none;
    border-radius: 4px;
    width: 20rem;
    height: 25px;
}

button{
    font-family: "Roboto", sans-serif;
    padding: 10px;
    width: 10rem;
    border: none;
    border-radius: 4px;
    background-color:#005FB8;
    color: #FFFFFF;
}

</style>