<template>
            <div id="login" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <ul class="uk-tab uk-flex-center" uk-grid uk-switcher="animation: uk-animation-fade">
                    <li><a href="#">Registro</a></li>
                    <li><a href="#">Iniciar Sesión</a></li>
                    <li class="uk-hidden"><a href="#">Recuperar Contraseña</a></li>
                </ul>
                <ul class="uk-switcher uk-margin">
                    <!-------------------------REGISTRO FORM------------------------------>
                    <li>
                        <h3 class="uk-card-title uk-text-center">Registrate, es gratis!!</h3>
                        <form>
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                                    <input class="uk-input uk-form-large" type="text" placeholder="First and last name">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                    <input class="uk-input uk-form-large" type="text" placeholder="Email address">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                    <input class="uk-input uk-form-large" type="password" placeholder="Set a password">
                                </div>
                            </div>
                            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                <label><input class="uk-checkbox" type="checkbox"> Acepto los terminos y
                                    condiciones</label>
                            </div>
                            <div class="uk-margin">
                                <button
                                    class="uk-button uk-button-primary uk-button-large uk-width-1-1">Registrarme</button>
                            </div>
                            <div class="uk-text-small uk-text-center">
                                ¿Ya tienes una cuenta? <a href="#" uk-switcher-item="1">Iniciar Sesión</a>
                            </div>
                        </form>
                    </li>
                    <!----------------------INICIO FORM------------------------------------>
                    <li>
                        <h3 class="uk-card-title uk-text-center">Welcome back!</h3>
                        <form>
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                    <input class="uk-input uk-form-large" type="text" placeholder="Email address">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                    <input class="uk-input uk-form-large" type="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="uk-margin uk-text-right@s uk-text-center uk-text-small">
                                <a href="#" uk-switcher-item="2">Forgot Password?</a>
                            </div>
                            <div class="uk-margin">
                                <button class="uk-button uk-button-primary uk-button-large uk-width-1-1">Login</button>
                            </div>
                            <div class="uk-text-small uk-text-center">
                                Not registered? <a href="#" uk-switcher-item="0">Create an account</a>
                            </div>
                        </form>
                    </li>
                    <!-------------------RECUPERACION FORM---------------------------------->
                    <li>
                        <h3 class="uk-card-title uk-text-center">Forgot your password?</h3>
                        <p class="uk-text-center uk-width-medium@s uk-margin-auto">Enter your email address and we will
                            send you a link to reset your password.</p>
                        <form>
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                    <input class="uk-input uk-form-large" type="text" placeholder="Email address">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <button class="uk-button uk-button-primary uk-button-large uk-width-1-1">Send
                                    Email</button>
                            </div>
                            <div class="uk-text-small uk-text-center">
                                <a href="#" uk-switcher-item="1">Back to login</a>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
</template>
<script>
    export default{

    }

</script>