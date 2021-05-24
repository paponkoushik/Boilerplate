<template>
    <div class="container-scroller">
        <!--Top Navbar-->
        <Navbar/>

        <!--Sidebar-->
        <Sidebar/>

        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <Breadcrumb/>

                    <!--Badges List Section Started....-->
                    <div class="card card-with-shadow border-0 mb-primary">
                        <div class="card-header bg-transparent p-primary">
                            <h4 class="card-title mb-0">Badges</h4>
                        </div>
                        <div class="card-body">
                            <span class="badge badge-success mr-2">Success</span>
                            <span class="badge badge-warning mr-2">Warning</span>
                            <span class="badge badge-danger mr-2">Danger</span>
                            <span class="badge badge-purple mr-2">Purple</span>
                            <span class="badge badge-success badge-pill mr-2">Success Pill</span>
                            <span class="badge badge-warning badge-pill mr-2">Warning Pill</span>
                            <span class="badge badge-danger badge-pill mr-2">Danger Pill</span>
                            <span class="badge badge-purple badge-pill mr-2">Purple Pill</span>
                            <span class="badge badge-secondary badge-sm mr-2">Small badges</span>
                            <span class="badge badge-secondary badge-sm badge-pill mr-2">Secondary</span>
                            <span class="badge badge-secondary badge-sm badge-circle mr-2">3</span>
                            <span class="badge badge-success badge-lg mr-2">Success lg</span>
                            <span class="badge badge-secondary badge-lg badge-pill mr-2">Pill lg</span>
                            <span class="badge badge-secondary badge-lg badge-circle mr-2">5</span>
                        </div>
                    </div>

                    <!--Notes Section Started....-->
                    <div class="card card-with-shadow border-0">
                        <div class="card-header bg-transparent p-primary">
                            <h4 class="card-title mb-0">Notes</h4>
                        </div>
                        <div class="card-body">
                            <div class="note-title d-flex">
                                <Icon :name="'book-open'"/>
                                <h6 class="card-title pl-2">Note Title</h6>
                            </div>
                            <div class="note note-warning p-4">
                                <p class="m-1">- Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s.</p>
                                <p class="m-1">- Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s.</p>
                                <p class="m-1">- Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s.</p>
                            </div>
                            <div class="note note-blue mt-4 p-4">
                                <p class="m-1">- Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s.</p>
                                <p class="m-1">- Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s.</p>
                                <p class="m-1">- Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s.</p>
                            </div>
                            <div class="note note-red mt-4 p-4">
                                <p class="m-1">- Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s.</p>
                                <p class="m-1">- Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s.</p>
                                <p class="m-1">- Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s.</p>
                            </div>
                            <div class="note note-purple mt-4 p-4">
                                <p class="m-1">- Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s.</p>
                                <p class="m-1">- Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s.</p>
                                <p class="m-1">- Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s.</p>
                            </div>
                            <div class="note note-success mt-4 p-4">
                                <p class="m-1">- Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s.</p>
                                <p class="m-1">- Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s.</p>
                                <p class="m-1">- Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s.</p>
                            </div>
                            <div class="note note-info mt-4 p-4">
                                <p class="m-1">- Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s.</p>
                                <p class="m-1">- Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s.</p>
                                <p class="m-1">- Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import CoreJS from '../../assets/js/core'

    export default {
        name: "Badges",
        extends: CoreJS,
    }
</script>
