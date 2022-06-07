<template>
    <form>
        <h3 class="uk-card-title uk-text-center">Welcome back!</h3>
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
</template>

<script>
export default {

}
</script>