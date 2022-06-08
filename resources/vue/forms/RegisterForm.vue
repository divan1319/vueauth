<template>
    <form id="RegisterForm" @submit.prevent="onSubmit">
        <h3 class="uk-card-title uk-text-center">Registrate, es gratis!!</h3>
        <text-input-component customClass="jsValidator"
        type="text" name="name" placeholder="Nombre Completo" 
        icon="user" 
        validators="required length" min_length="10" max_length="100"
        v-model="name"></text-input-component>

        <text-input-component
        customClass="jsValidator" type="email" name="email"
        placeholder="example@gmail.com" icon="mail"
        validators="required email" v-model="email"></text-input-component>

        <text-input-component customClass="jsValidator" type="password" name="password"
        placeholder="Contraseña" icon="lock"
        validators="required length" min_length="8"
        v-model="password"></text-input-component>

        <text-input-component customClass="jsValidator" type="password" name="password_confirmation"
        placeholder="Confirmar Contraseña"
        icon="lock" validators="required password_confirmation"
        v-model="password_confirmation">
        </text-input-component>

        <checkbox-input-component customClass="jsValidator" name="terms"
        text="Estoy de acuerdo con los termino y condiciones" 
        validators="checked" v-model="terms"></checkbox-input-component>


        <button-component customClass="uk-button-primary uk-button-large uk-width-1-1" :disable="disable" value="Registrarme">

        </button-component>
        <div class="uk-text-small uk-text-center">
            ¿Ya tienes una cuenta? <a href="#" uk-switcher-item="0">Iniciar Sesión</a>
        </div>
    </form>
</template>

<script>
import TextInputComponent from '../components/forms/TextInputComponent.vue'
import CheckboxInputComponent from '../components/forms/CheckboxInputComponent.vue'
import ButtonComponent from '../components/ButtonComponent.vue'
export default {
    components: {
        TextInputComponent,
        CheckboxInputComponent,
        ButtonComponent
    },
    data() {
        return {
            name: "",
            email: "",
            password: "",
            password_confirmation: "",
            terms:false,
            disable: false,
            registerFormValidator: undefined
        }
    },
    mounted(){
        this.registerFormValidator = new JSValidator('RegisterForm').init();
    },
    methods:{
        onSubmit(){
            if(this.registerFormValidator.status && this.terms){
                axios.post('/register',{
                    name: this.name,
                    email: this.email,
                    password: this.password,
                    password_confirmation: this.password_confirmation
                }).then(res => {

                    console.log(res);

                }).catch(error => {
                    UIkit.notification({
                    message:'Ha ocurrido un error',
                    status:'danger'
                    });
                });

            }else{
                UIkit.notification({
                    message:'Error de validacion',
                    status:'danger'
                });
            }
        }
    }
}
</script>