<template>
    <div class="text-center">
        <HelloWorld msg="Welcome to the Core Design"/>
    </div>
</template>

<script>
    // @ is an alias to /src
    import HelloWorld from "@/components/HelloWorld.vue";

    export default {
        name: "home",
        components: {
            HelloWorld
        }
    };
</script>
