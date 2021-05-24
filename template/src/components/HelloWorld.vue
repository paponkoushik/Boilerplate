<template>
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-12 col-md-5">
            <div class="card m-3 p-3 bg-light">
                <img class="img-fluid mx-auto" src="../assets/images/core.png" alt="Vue logo"/>
                <h1>{{ msg }}</h1>
                <a href="/dashboard">
                    <i data-feather="airplay"/>
                    Go to dashboard
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    import core from "../assets/js/core";
    export default {
        name: "HelloWorld",
        extends: core,
        props: {
            msg: String
        }
    };
</script>
