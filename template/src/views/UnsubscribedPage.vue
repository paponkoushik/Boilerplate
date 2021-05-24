<template>
    <div class="unsubscriber-page">
        <div class="container-fluid h-100">
            <div class="main-panel h-100">
                <div class="content-wrapper p-0">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-6">
                            <div class="card card-with-shadow border-0 p-primary">
                                <div class="text-center">
                                    <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                         class="img-fluid rounded-circle mb-2"
                                         width="100"
                                         alt="">
                                    <p class="mb-0">Steven Marcury</p>
                                    <p class="mb-5 text-secondary font-size-90">steven@gmail.com</p>

                                    <h5>Successfully unsubscribed</h5>
                                    <p class="text-secondary">We'll stop sending you email about this type of <span class="text-dark">This type of campaign</span></p>
                                    <p class="text-secondary mb-0">Did you unsubscribe by mistake? <a href="">Resubscribe</a></p>
                                    <p class="text-secondary mb-0">You can also manage all notifications from Gain email marketing in your <a href="">email setting</a></p>

                                    <a href="/" class="btn btn-primary mt-5">Back to gmail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import core from '../assets/js/core'
    export default {
        name: "UnsubscribedPage",
        extends: core
    }
</script>