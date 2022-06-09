<template>
    <form id="reset_account_form" @submit.prevent="onSubmit">
        <h3 class="uk-card-title uk-text-center">Restablecer Cuenta</h3>
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
<button-component customClass="uk-button-primary uk-button-large uk-width-1-1" :disable="disable" value="Cambiar Contraseña">
        </button-component>


    </form>

</template>
<script>
import TextInputComponent from '../components/forms/TextInputComponent.vue'
import ButtonComponent from '../components/ButtonComponent.vue'
    export default{
        props:{
            token:{
                type: String,
                required: true
            },
            email:{
                type: String,
                required: true
            }
        },
        components:{
            TextInputComponent,
            ButtonComponent
        },
        emits:{
            submit:(payload) =>{
                    return payload;
            }
        },
        data(){
            return{
                password:"",
                password_confirmation:"",
                disable:false,
                resetAccountFormValidator: undefined
            }
        },
        mounted(){
            this.resetAccountFormValidator = new JSValidator('reset_account_form').init();
        },
        methods:{
            onSubmit(){
                if(this.resetAccountFormValidator.status){
                    this.disable = true;
                    axios.post('/reset-password',{
                        token: this.token,
                        email: this.email,
                        password: this.password,
                        password_confirmation: this.password_confirmation
                    }).then(res => {
                        this.$emit('submit',{
                            message:"Se ha cambiado la contraseña",
                            res: res
                        });
                    }).catch(e => {
                        console.log(e);
                        UIkit.notification({
                            
                            message: "Ha ocurrido un error",
                            status: "danger"
                        })
                    })
                }else{
                    UIkit.notification({
                        message: "Error de validacion",
                        status: 'danger'
                    })
                }
            }
        }

    }
</script>