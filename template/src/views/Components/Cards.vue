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
                    <div class="row card-equal-height">
                        <div class="col-12 col-md-6">
                            <!--Card With Header And Footer...-->
                            <h4 class="title font-weight-bold pb-2">Card With Header And Footer</h4>
                            <div class="card border-0 card-with-shadow">
                                <div class="card-header p-primary bg-transparent">
                                    <h5 class="card-title m-0">Header</h5>
                                </div>
                                <div class="card-body">
                                    <p class="text-justify">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                                        professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                                        professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words.
                                    </p>
                                </div>
                                <div class="card-footer p-primary bg-transparent">
                                    <button type="button" class="btn btn-primary">Save</button>
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary ml-2">Cancle</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <!--Card With Header...-->
                            <h4 class="title font-weight-bold pb-2">Card With Header</h4>
                            <div class="card border-0 card-with-shadow">
                                <div class="card-header bg-transparent p-primary">
                                    <h5 class="card-title m-0">Header</h5>
                                </div>
                                <div class="card-body">
                                    <p class="text-justify">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                                        professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                                        professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <!--Card With Just Body...-->
                            <h4 class="title font-weight-bold pb-2 pt-5">Card With Just Body</h4>
                            <div class="card border-0 card-with-shadow">
                                <div class="card-body">
                                    <p class="text-justify">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                                        professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                                        professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <!--Card With Header And Search...-->
                            <h4 class="title font-weight-bold pb-2 pt-5">Card With Header With Search</h4>
                            <div class="card card-with-search border-0 card-with-shadow">
                                <div class="card-header d-flex align-items-center p-primary bg-transparent">
                                    <h5 class="card-title d-inline-block mb-0">Header</h5>
                                    <div class="form-group form-group-with-search d-flex align-items-center mb-0 ml-auto">
                                        <span class="form-control-feedback">
                                            <Icon :name="'search'"/>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-justify">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                                        professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                                        professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words.
                                    </p>
                                </div>
                                <div class="card-footer p-primary bg-transparent">
                                    <button type="button" class="btn btn-primary">Save</button>
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary ml-2">Cancle</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Card With Just Body Hoverable...-->
                    <h4 class="title font-weight-bold pb-2 pt-5">Card Body Hoverable</h4>
                    <div class="row">
                        <!--Template add edit cards-->
                        <div class="col-xl-2">
                            <div class="card border-0 ">
                                <div class="card-body rounded body-hoverable bg-primary d-flex align-items-center justify-content-center">
                                    <div class="text-center">
                                        <i data-feather="file-plus" class="menu-icon"/>
                                        <p class="my-0 pt-2 text-white">Add new</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="card border-0">
                                <div class="card-body rounded body-hoverable d-flex d-flex align-items-center justify-content-center">
                                    <div class="my-auto text-center">
                                        <i data-feather="file-text" class="menu-icon text-primary"/>
                                        <p class="my-0 pt-2 primary-text-color">Choose one</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Cards with circular progress bars-->
                        <div class="col-xl-2">
                            <div class="card card-with-shadow border border-0 mb-primary py-primary">
                                <div class="circular-progress-bar">
                                    <div class="progress" data-percentage="75">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <p class="m-0">
                                                75%
                                            </p>
                                        </div>
                                    </div>
                                    <p class="text-center mt-3">Email open rate</p>
                                    <small class="mt-3 text-center d-block">(Average)</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="card card-with-shadow border border-0 mb-primary py-primary">
                                <div class="circular-progress-bar">
                                    <div class="progress" data-percentage="20">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <p class="m-0">
                                                20%
                                            </p>
                                        </div>
                                    </div>
                                    <p class="text-center mt-3">Email bounce rate</p>
                                    <small class="mt-3 text-center d-block">(Average)</small>
                                </div>
                            </div>
                        </div>

                        <!--Template Preview Card-->
                        <div class="col-xl-2">
                            <div class="card template-preview-card border-0 mb-primary">
                                <div class="template-preview-wrapper p-3 rounded">
                                    <span class="v-html-wrapper" v-html="iframeContent"/>
                                    <div class="card-overlay-options">
                                        <ul class="list-group h-100">
                                            <li class="list-group-item">
                                                <a class="d-block" href="">
                                                    <Icon :name="'eye'"/><span class="ml-3">Preview</span>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="d-block" href="">
                                                    <Icon :name="'edit'"/><span class="ml-3">Edit</span>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="d-block" href="">
                                                    <Icon :name="'trash'"/><span class="ml-3">Delete</span>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="d-block" href="">
                                                    <Icon :name="'copy'"/><span class="ml-3">Duplicate</span>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="d-block" href="">
                                                    <Icon :name="'zap'"/><span class="ml-3">Use Campaign</span>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="d-block" href="">
                                                    <Icon :name="'download'"/><span class="ml-3">Download</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="card template-preview-card border-0 mb-primary">
                                <div class="template-preview-wrapper p-3 rounded">
                                    <span class="v-html-wrapper" v-html="iframeContent"/>
                                    <div class="card-overlay-options">
                                        <ul class="list-group h-100">
                                            <li class="list-group-item">
                                                <a class="d-block" href="">
                                                    <Icon :name="'eye'"/><span class="ml-3">Preview</span>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="d-block" href="">
                                                    <Icon :name="'edit'"/><span class="ml-3">Edit</span>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="d-block" href="">
                                                    <Icon :name="'trash'"/><span class="ml-3">Delete</span>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="d-block" href="">
                                                    <Icon :name="'copy'"/><span class="ml-3">Duplicate</span>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="d-block" href="">
                                                    <Icon :name="'zap'"/><span class="ml-3">Use Campaign</span>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="d-block" href="">
                                                    <Icon :name="'download'"/><span class="ml-3">Download</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Tenants Preview Card-->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card card-with-shadow border-0 p-primary tenant-preview-card">
                                <div class="d-flex justify-content-between">
                                    <img src="https://pathao.com/wp-content/uploads/2019/03/cropped-Pathao-icon-.png"
                                         class="img-fluid d-inline-block rounded mb-2"
                                         width="50"
                                         height="50"
                                         alt="">
                                    <div class="dropdown options-dropdown">
                                        <button type="button" class="btn-option btn d-flex align-items-center justify-content-center" data-toggle="dropdown">
                                            <i data-feather="more-horizontal"/>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right py-2 mt-1">
                                            <a class="dropdown-item px-4 py-2" href="#">Edit tenant</a>
                                            <a class="dropdown-item px-4 py-2" href="#">Cancel invitation</a>
                                        </div>
                                    </div>
                                </div>

                                <p class="mb-2">Pahtao Ltd.</p>
                                <p class="mb-4 font-size-80 text-muted">Burnet Ali</p>
                                <div class="d-flex align-items-center mb-2">
                                    <span class="badge badge-danger badge-lg badge-pill mr-2">Inactive</span>
                                </div>
                                <div class="mb-4">
                                    <p class="mb-2">
                                        <span class="text-muted">Short name:</span> pathao
                                    </p>
                                    <p class="mb-0">
                                        <span class="text-muted">Group:</span> Multinational
                                    </p>
                                </div>
                                <a href="#" class="btn-to-tenant-dashboard">
                                    <i data-feather="arrow-right"/>
                                    <span>Go To Dashboard</span>
                                </a>
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
        name: "Cards",
        extends: CoreJS,
        data() {
            return {
                iframeContent: '<p style="text-align: center; "><span style="font-family: &quot;Comic Sans MS&quot;;">Hey...! Welcome&nbsp;</span></p><p style="text-align: center; "><img style="width: 50%;" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/floral-thank-you-card-template-a2f501467428c583f51d34a1b404195f_screen.jpg?ts=1561537284"></p><p style="text-align: center; "><span style="font-family: &quot;Comic Sans MS&quot;; font-size: 14px; text-align: justify;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their</span><span style="font-family: &quot;Comic Sans MS&quot;;">﻿</span><br></p>'
            }
        }
    }
</script>

<style lang="scss">
    .card-equal-height{
        .card {
            min-height: 500px;
        }
    }
</style>
