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
                    <div class="row buttons-component-page">
                        <div class="col-12">
                            <div class="card card-with-shadow border-0 mb-primary">
                                <div class="card-header bg-transparent p-primary">
                                    <h4 class="card-title mb-0">Colors</h4>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-secondary">Secondary</button>
                                    <button type="button" class="btn btn-success">Success</button>
                                    <button type="button" class="btn btn-danger">Danger</button>
                                    <button type="button" class="btn btn-warning">Warning</button>
                                    <button type="button" class="btn btn-info">Info</button>
                                    <button type="button" class="btn btn-dark">Dark</button>
                                    <button type="button" class="btn btn-light">Light</button>
                                    <button type="button" disabled="disabled" class="btn btn-light">Light</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-with-shadow border-0 mb-primary">
                                <div class="card-header bg-transparent p-primary">
                                    <h4 class="card-title mb-0">Style</h4>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-outline-success">Default</button>
                                    <button type="button" class="btn btn-success rounded-pill">Active</button>
                                    <button type="button" class="btn btn-warning rounded-pill">Inactive</button>
                                    <button type="button" class="btn btn-outline-danger rounded-pill">
                                        Outline + Rounded
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-with-shadow border-0 mb-primary">
                                <div class="card-header bg-transparent p-primary">
                                    <h4 class="card-title mb-0">Loading Buttons</h4>
                                </div>
                                <div class="card-body">
                                    <button class="btn btn-primary" type="button">
                                        <span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>
                                        Loading...
                                    </button>
                                    <button class="btn btn-primary" type="button">
                                        <span class="spinner-grow spinner-grow-sm mr-2" role="status" aria-hidden="true"></span>
                                        Loading...
                                    </button>
                                    <button type="submit" class="btn btn-primary px-5">
                                        <span class="spinner-bounce">
                                            <span class="bounce1 mr-1"></span>
                                            <span class="bounce2 mr-1"></span>
                                            <span class="bounce3 mr-1"></span>
                                        </span>
                                    </button>
                                    <DefaultLoadingButton :button_text="'Click here...'"
                                                          :button_loader="buttonLoader"
                                                          @submit="showLoadingEffect"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-with-shadow border-0 mb-primary">
                                <div class="card-header bg-transparent p-primary">
                                    <h4 class="card-title mb-0">Buttons Group</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>Default Action Button</p>
                                            <div class="btn-group btn-group-action" role="group"
                                                 aria-label="Basic example">
                                                <button type="button"
                                                        class="btn"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title="Active">
                                                    <i data-feather="check"/>
                                                </button>
                                                <button type="button"
                                                        class="btn"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title="Edit">
                                                    <i data-feather="edit"/>
                                                </button>
                                                <button type="button"
                                                        class="btn"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title="Delete">
                                                    <i data-feather="trash"/>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-center">Options dropdown button</p>
                                            <div class="d-flex justify-content-center">
                                                <OptionsDropdownButton/>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-with-shadow border-0 mb-primary">
                                <div class="card-header bg-transparent p-primary">
                                    <h4 class="card-title mb-0">Dropdowns</h4>
                                </div>
                                <div class="card-body">
                                    <div class="dropdown d-inline-block btn-dropdown">
                                        <button type="button"
                                                class="btn btn-light dropdown-toggle ml-0 mr-2"
                                                data-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                            Default Dropdown Light
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <div class="dropdown d-inline-block btn-dropdown">
                                        <button type="button"
                                                class="btn btn-dark dropdown-toggle ml-0 mr-2"
                                                data-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                            Default Dropdown Dark
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <div class="dropdown d-inline-block btn-dropdown">
                                        <button type="button"
                                                class="btn btn-light dropdown-toggle ml-0 mr-2"
                                                data-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                            Dropdown With Brand
                                        </button>
                                        <div class="dropdown-menu">
                                            <span class="dropdown-item dropdown-title">
                                                <i data-feather="sliders" class="primary-text-color mr-3"/>
                                                Manage Brands
                                            </span>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/core.png" alt="" width="40"
                                                         class="rounded-circle img-fluid">
                                                    <span class="ml-3">Gain Media</span>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <div class="d-flex align-items-center">
                                                    <img src="https://cdn.emojidex.com/emoji/seal/grameenphone.png?1513891283"
                                                         alt="" width="40" class="rounded-circle img-fluid">
                                                    <span class="ml-3">Grameenphone</span>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <div class="d-flex align-items-center">
                                                    <img src="https://pathao.com/wp-content/uploads/2019/03/cropped-Pathao-icon-.png"
                                                         alt="" width="40" class="rounded-circle img-fluid">
                                                    <span class="ml-3">Pathao</span>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <div class="d-flex align-items-center">
                                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSGnGLxQGdE7UMCFlPvak8B6SB30_cLu21DBYyZ0AbW9FzywqE-"
                                                         alt="" width="40" class="rounded-circle img-fluid">
                                                    <span class="ml-3">Unite Living</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
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
    import CoreJS from '../../assets/js/core'

    export default {
        name: "Buttons",
        extends: CoreJS,
        data() {
            return {
                buttonLoader: false,
            }
        },
        methods: {
            showLoadingEffect() {
                this.buttonLoader = !this.buttonLoader;
            }
        }
    }
</script>
