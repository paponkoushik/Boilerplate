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
                    <div class="user-profile mb-primary">
                        <div class="card card-with-shadow py-5 border-0">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-5">
                                    <div class="media border-right px-5 pr-xl-5 pl-xl-0 user-header-media">
                                        <div class="profile-pic-wrapper">
                                            <div class="custom-image-upload-wrapper circle mx-xl-auto">
                                                <div class="image-area d-flex">
                                                    <img id="imageResult"
                                                         src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                                         alt=""
                                                         class="img-fluid mx-auto my-auto">
                                                </div>
                                                <div class="input-area">
                                                    <label id="upload-label" for="upload">Change</label>
                                                    <input id="upload" type="file" onchange="readURL(this)" class="form-control d-none">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body user-info-header">
                                            <h4 class="position-relative d-flex align-items-center justify-content-center">
                                                Steven Marcury
                                                <span class="badge badge-pill badge-success user-status">Active</span>
                                            </h4>
                                            <p class="text-muted mb-1 mb-sm-0">demo123@gmail.com</p>
                                            <p class="primary-text-color mb-0">Admin</p>
                                            <div class="social-links pt-3">
                                                <a class="mr-3" href="#">
                                                    <i class="fab fa-twitter"/>
                                                </a>
                                                <a class="mr-3" href="#">
                                                    <i class="fab fa-facebook-f"/>
                                                </a>
                                                <a class="mr-3" href="#">
                                                    <i class="fab fa-linkedin-in"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-7">
                                    <div class="user-details px-5 px-sm-5 px-md-5 px-lg-0 px-xl-0 mt-5 mt-sm-5 mt-md-0 mt-lg-0 mt-xl-0">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                                                <div class="border-right custom">
                                                    <div class="media mb-4 mb-xl-5">
                                                        <div class="align-self-center mr-3">
                                                            <Icon :name="'map-pin'"/>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="text-muted mb-0">Adress:</p>
                                                            <p class="mb-0">House #, Road #, City, Country</p>
                                                        </div>
                                                    </div>
                                                    <div class="media mb-4 mb-xl-0">
                                                        <div class="align-self-center mr-3">
                                                            <Icon :name="'phone'"/>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="text-muted mb-0">Contact:</p>
                                                            <p class="mb-0">+012 234 567 789</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                                                <div class="media mb-4 mb-xl-5">
                                                    <div class="align-self-center mr-3">
                                                        <Icon :name="'calendar'"/>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-muted mb-0">Created:</p>
                                                        <p class="mb-0">12 september, 1995</p>
                                                    </div>
                                                </div>
                                                <div class="media mb-0 mb-xl-0">
                                                    <div class="align-self-center mr-3">
                                                        <Icon :name="'gift'"/>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-muted mb-0">Date of birth:</p>
                                                        <p class="mb-0">1 june, 2000</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-tab">
                        <div class="row no-gutters">
                            <div class="col-md-3 pr-md-3 tab-menu">
                                <div class="card card-with-shadow border-0">
                                    <div class="header-icon">
                                        <div class="icon-position d-flex justify-content-center">
                                            <div class="tab-icon d-flex justify-content-center align-items-center">
                                                <Icon :name="'user'"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-primary py-primary">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                             aria-orientation="vertical">
                                            <a class="tab-item-link my-2 my-sm-3 active"
                                               id="v-pills-personal-tab"
                                               data-toggle="pill"
                                               href="#v-pills-personal">
                                                <span class="active-icon"><Icon :name="'minus'"/></span>
                                                Personal info
                                            </a>
                                            <a class="tab-item-link my-2 my-sm-3"
                                               id="v-pills-privacy-tab"
                                               data-toggle="pill"
                                               href="#v-pills-privacy">
                                                <span class="active-icon"><Icon :name="'minus'"/></span>
                                                Password change
                                            </a>
                                            <a class="tab-item-link my-2 my-sm-3"
                                               id="v-pills-social-tab"
                                               data-toggle="pill"
                                               href="#v-pills-social">
                                                <span class="active-icon"><Icon :name="'minus'"/></span>
                                                Social links
                                            </a>
                                            <a class="tab-item-link my-2 my-sm-3"
                                               id="v-pills-activity-tab"
                                               data-toggle="pill"
                                               href="#v-pills-activity">
                                                <span class="active-icon"><Icon :name="'minus'"/></span>
                                                Activity
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 pl-md-3 pt-md-0 pt-sm-4 pt-4">
                                <div class="card card-with-shadow border-0">
                                    <div class="tab-content px-primary" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-personal"
                                             role="tabpanel"
                                             aria-labelledby="v-pills-personal-tab">
                                            <h4 class="d-flex align-items-center mb-0 title">Personal Info</h4>
                                            <hr>
                                            <div class="content py-primary">
                                                <form action="">
                                                    <div class="form-group mb-primary">
                                                        <div class="row">
                                                            <div class="col-xl-2 d-flex align-items-center">
                                                                <label for="input-text-first-name"
                                                                       class="text-left d-block mb-lg-2 mb-xl-0">First
                                                                    name</label>
                                                            </div>
                                                            <div class="col-xl-8">
                                                                <input type="text" class="form-control"
                                                                       id="input-text-first-name"
                                                                       placeholder="Enter first name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-primary">
                                                        <div class="row">
                                                            <div class="col-xl-2 d-flex align-items-center">
                                                                <label for="input-text-last-name"
                                                                       class="text-left d-block mb-lg-2 mb-xl-0">Last
                                                                    name</label>
                                                            </div>
                                                            <div class="col-xl-8">
                                                                <input type="text" class="form-control"
                                                                       id="input-text-last-name"
                                                                       placeholder="Enter last name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-primary">
                                                        <div class="row">
                                                            <div class="col-xl-2 d-flex align-items-center">
                                                                <label for="input-text-email"
                                                                       class="text-left d-block mb-lg-2 mb-xl-0">Enter
                                                                    email</label>
                                                            </div>
                                                            <div class="col-xl-8">
                                                                <input type="email" class="form-control"
                                                                       id="input-text-email" placeholder="Email here">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-primary">
                                                        <div class="row">
                                                            <div class="col-xl-2 d-flex align-items-center">
                                                                <label class="text-left d-block mb-lg-2 mb-xl-0">Gender</label>
                                                            </div>
                                                            <div class="col-xl-8">
                                                                <div class="custom-radio-default">
                                                                    <div class="custom-control custom-radio custom-control-inline mr-5">
                                                                        <input checked type="radio"
                                                                               id="customRadioDefault1"
                                                                               name="customRadioDefault"
                                                                               class="custom-control-input">
                                                                        <label class="custom-control-label pl-2"
                                                                               for="customRadioDefault1">Male</label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio custom-control-inline">
                                                                        <input type="radio" id="customRadioDefault2"
                                                                               name="customRadioDefault"
                                                                               class="custom-control-input">
                                                                        <label class="custom-control-label pl-2"
                                                                               for="customRadioDefault2">Female</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-primary">
                                                        <div class="row">
                                                            <div class="col-xl-2 d-flex align-items-center">
                                                                <label for="input-text-contact"
                                                                       class="text-left d-block mb-lg-2 mb-xl-0">Contact
                                                                    number</label>
                                                            </div>
                                                            <div class="col-xl-8">
                                                                <input type="text" class="form-control"
                                                                       id="input-text-contact" placeholder="Contact">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-primary">
                                                        <div class="row">
                                                            <div class="col-xl-2 d-flex align-items-center">
                                                                <label for="input-text-address"
                                                                       class="text-left d-block mb-lg-2 mb-xl-0">Address</label>
                                                            </div>
                                                            <div class="col-xl-8">
                                                                <input type="text" class="form-control"
                                                                       id="input-text-address" placeholder="Address">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-primary">
                                                        <div class="row">
                                                            <div class="col-xl-2 d-flex align-items-center">
                                                                <label class="text-left d-block mb-lg-2 mb-xl-0">
                                                                    Date of birth
                                                                </label>
                                                            </div>
                                                            <div class="col-xl-8">
                                                                <date-picker-input/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mt-5">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <button type="submit" class="btn btn-primary mr-3">
                                                                    Save
                                                                </button>
                                                                <button type="button" class="btn btn-secondary">Cancel
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-privacy" role="tabpanel"
                                             aria-labelledby="v-pills-privacy-tab">
                                            <h4 class="d-flex align-items-center mb-0 title">Password change</h4>
                                            <hr>
                                            <div class="content py-primary">
                                                <form action="">
                                                    <div class="form-group mb-primary">
                                                        <div class="row">
                                                            <div class="col-xl-2 d-flex align-items-center">
                                                                <label for="input-text-password"
                                                                       class="text-left d-block mb-lg-2 mb-xl-0">Password</label>
                                                            </div>
                                                            <div class="col-xl-8">
                                                                <input type="text" class="form-control"
                                                                       id="input-text-password" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-primary">
                                                        <div class="row">
                                                            <div class="col-xl-2 d-flex align-items-center">
                                                                <label for="input-text-confirm-password"
                                                                       class="text-left d-block mb-lg-2 mb-xl-0">Confirm
                                                                    password</label>
                                                            </div>
                                                            <div class="col-xl-8">
                                                                <input type="text" class="form-control"
                                                                       id="input-text-confirm-password" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mt-5">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <button type="submit" class="btn btn-primary mr-3">
                                                                    Save
                                                                </button>
                                                                <button type="button" class="btn btn-secondary">Cancel
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-social" role="tabpanel"
                                             aria-labelledby="v-pills-social-tab">
                                            <h4 class="d-flex align-items-center mb-0 title">Social links</h4>
                                            <hr>
                                            <div class="content py-primary">
                                                Why do we use it?
                                                It is a long established fact that a reader will be distracted by the
                                                readable content
                                                of a page when looking at its layout. The point of using Lorem Ipsum is
                                                that it has a
                                                more-or-less normal distribution of letters, as opposed to using
                                                'Content here, content
                                                here', making it look like readable English. Many desktop publishing
                                                packages and web
                                                page editors now use Lorem Ipsum as their default model text, and a
                                                search for 'lorem
                                                ipsum' will uncover many web sites still in their infancy. Various
                                                versions have evolved
                                                over the years, sometimes by accident, sometimes on purpose (injected
                                                humour and the
                                                like).

                                                is simply dummy text of the printing and typesetting industry. Lorem
                                                Ipsum has been the
                                                industry's standard dummy text ever since the 1500s, when an unknown
                                                printer took a
                                                galley of type and scrambled it to make a type specimen book. It has
                                                survived not only
                                                five centuries, but also the leap into electronic typesetting, remaining
                                                essentially
                                                unchanged. It was popularised in the 1960s with the release of Letraset
                                                sheets
                                                containing Lorem Ipsum passages, and more recently with desktop
                                                publishing software like
                                                Aldus PageMaker including versions of Lorem Ipsum.

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-activity" role="tabpanel"
                                             aria-labelledby="v-pills-activity-tab">
                                            <h4 class="d-flex align-items-center mb-0 title">Activity</h4>
                                            <hr>
                                            <div class="content py-primary">
                                                Custom fields Setting
                                                Why do we use it?
                                                It is a long established fact that a reader will be distracted by the
                                                readable content
                                                of a page when looking at its layout. The point of using Lorem Ipsum is
                                                that it has a
                                                more-or-less normal distribution of letters, as opposed to using
                                                'Content here, content
                                                here', making it look like readable English. Many desktop publishing
                                                packages and web
                                                page editors now use Lorem Ipsum as their default model text, and a
                                                search for 'lorem
                                                ipsum' will uncover many web sites still in their infancy. Various
                                                versions have evolved
                                                over the years, sometimes by accident, sometimes on purpose (injected
                                                humour and the
                                                like).

                                                is simply dummy text of the printing and typesetting industry. Lorem
                                                Ipsum has been the
                                                industry's standard dummy text ever since the 1500s, when an unknown
                                                printer took a
                                                galley of type and scrambled it to make a type specimen book. It has
                                                survived not only
                                                five centuries, but also the leap into electronic typesetting, remaining
                                                essentially
                                                unchanged. It was popularised in the 1960s with the release of Letraset
                                                sheets
                                                containing Lorem Ipsum passages, and more recently with desktop
                                                publishing software like
                                                Aldus PageMaker including versions of Lorem Ipsum.
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
    </div>
</template>

<script>
    import CoreJS from '../assets/js/core'

    export default {
        name: "UserProfile.vue",
        extends: CoreJS,
        mounted() {
            // SHOW UPLOADED IMAGE
            let input = document.getElementById( 'upload' );

            function readURL(input) {
                if (input.files && input.files[0]) {
                    let reader = new FileReader();

                    reader.onload = function (e) {
                        $('#imageResult').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $(function () {
                $('#upload').on('change', function () {
                    readURL(input);
                });
            });
        },
        methods: {

        }
    }
</script>
