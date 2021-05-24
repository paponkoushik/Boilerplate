<template>
    <vue-recaptcha ref="recaptcha"
                   :loadRecaptchaScript="true"
                   :sitekey="siteKey">
    </vue-recaptcha>
</template>

<script>
    import VueRecaptcha from 'vue-recaptcha';
    export default {
        name: "ReCaptcha",
        components:{
            VueRecaptcha
        },
        props: {
            siteKey : String,
        },
    }
</script>