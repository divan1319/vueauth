<template>
    <form id="recuperarForm" @submit="onSubmit">
        <h3 class="uk-card-title uk-text-center">Forgot your password?</h3>
        <p class="uk-text-center uk-width-medium@s uk-margin-auto">Enter your email address and we will
            send you a link to reset your password.</p>
        <text-input-component customClass="jsValidator" type="email" name="email" placeholder="example@gmail.com" icon="mail"
            validators="required email" v-model="email"></text-input-component>

        <button-component customClass="uk-button-primary uk-button-large uk-width-1-1" :disable="disable" value="Enviar Correo"></button-component>
        <div class="uk-text-small uk-text-center">
            <a href="#" uk-switcher-item="0">Volver al Login</a>
        </div>
    </form>
</template>

<script>
import TextInputComponent from '../components/forms/TextInputComponent.vue'
import ButtonComponent from '../components/ButtonComponent.vue'
export default {
    components:{
        TextInputComponent,
        ButtonComponent
    },
    emits:{
        submit: (payload) => {
            return payload;
        }
    },
    data(){
        return{
            email: "",
            disable: false,
            resetPasswordFormvalidator: undefined
        }
    },
    mounted(){
        this.resetPasswordFormvalidator = new JSValidator('recuperarForm').init();
    },
    methods:{
        onSubmit(){
            if(this.resetPasswordFormvalidator.status){
                this.disable = true;
                axios.post('/forgot-password',{
                    email: this.email
                }).then(res =>{
                    this.$emit('submit',{
                        message: 'Se ha enviado un correo para recuperar tu cuenta',
                        res: res
                    })
                }).catch(error =>{
                    this.disable = false;
                    UIkit.notification({
                        message: 'No hemos encontrado tu correo',
                        status: 'danger'
                    })
                });
            }else{
                this.disable = false;
                UIkit.notification({
                    message: 'Error de validacion',
                    status: 'danger'
                })
            }
        }
    }
}
</script>