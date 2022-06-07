<template>
    <form>
        <h3 class="uk-card-title uk-text-center">Forgot your password?</h3>
        <p class="uk-text-center uk-width-medium@s uk-margin-auto">Enter your email address and we will
            send you a link to reset your password.</p>
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
</template>

<script>
export default {

}
</script>