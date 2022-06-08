<template>
    <form id="InicioSesionForm" @submit.prevent="onSubmit">
        <h3 class="uk-card-title uk-text-center">Welcome back!</h3>
        <text-input-component
            type="email"
            name="email"
            placeholder="example@gmail.com"
            icon="mail"
            validators="required email"
            v-model="email"></text-input-component>

        <text-input-component
            type="password"
            name="password"
            placeholder="Contraseña"
            icon="lock"
            validators="required"
            v-model="password"></text-input-component>

        <div class="uk-margin uk-text-right@s uk-text-center uk-text-small">
            <a href="#" uk-switcher-item="2">¿Olvido la contraseña?</a>
        </div>
        <button-component customClass="uk-button-primary uk-button-large uk-width-1-1" :disable="disable"
        value="Entrar"></button-component>

        <div class="uk-text-small uk-text-center">
            Not registered? <a href="#" uk-switcher-item="1">Create an account</a>
        </div>
    </form>
</template>

<script>
import TextInputComponent from '../components/forms/TextInputComponent.vue'
import ButtonComponent from '../components/ButtonComponent.vue'
import axios from 'axios';
export default {
    components:{
        TextInputComponent,
        ButtonComponent
    },

    emits:{
        submit : (payload) =>{
            return payload;
        }
    },

    data(){
        return {
            email:"",
            password:"",
            disable: false,
            loginFormValidator: undefined
        }
    },

    mounted(){
        this.loginFormValidator = new JSValidator('InicioSesionForm').init();
    },

    methods : {
        onSubmit(){
            if(this.loginFormValidator.status){
                this.disable = true;
                axios.post('/login',{
                    email: this.email,
                    password: this.password
                }).then(res => {

                    console.log(res);
                    
                    this.$emit('submit',{
                        message:'Inicio de sesion exitoso',
                        res: res
                    })

                }).catch(error => {
                    console.log(error);
                    this.disable = false;
                    UIkit.notification({
                    message: 'Usuario o contaseña incorrectos',
                    status: 'danger'
                    });
                });

            }else{
                this.disable = false;
                UIkit.notification({
                    message: 'Error de validacion',
                    status: 'danger'
                });
            }
        }
    }
}
</script>