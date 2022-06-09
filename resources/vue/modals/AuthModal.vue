<template>
    <div id="login" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <ul class="uk-tab uk-flex-center" uk-grid uk-switcher="animation: uk-animation-fade">
                <li><a href="#">Iniciar Sesión</a></li>
                <li><a href="#">Registrarme</a></li>
                <li class="uk-hidden"><a href="#">Recuperar Contraseña</a></li>
            </ul>
            <ul class="uk-switcher uk-margin">
                <!-------------------------REGISTRO FORM------------------------------>
                <li>
                    <login-form
                    @submit="submitForm"></login-form>

                </li>
                <!----------------------INICIO FORM------------------------------------>
                <li>
                    <register-form
                    @submit="submitForm"></register-form>

                </li>
                <!-------------------RECUPERACION FORM---------------------------------->
                <li>

                    <reset-password-form
                    @submit="submitForm"></reset-password-form>
                </li>
            </ul>
        </div>
    </div>
</template>
<script>
import LoginForm from '../forms/LoginForm'
import RegisterForm from '../forms/RegisterForm'
import ResetPasswordForm from '../forms/ResetPasswordForm'
export default {
    components: {
        LoginForm,
        RegisterForm,
        ResetPasswordForm
    },
    methods:{
        submitForm (payload) {
            store.dispatch('setAuthUser');

            UIkit.notification({
                message: payload.message,
                status: 'success'
            });

            UIkit.modal('#login').hide();

        }
    }
}

</script>