<template>
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <a href="" class="align-self-center d-lg-none pl-0 navbar-brand">
                <img src="../../assets/images/core.png" class="img-fluid" alt="logo"/>
            </a>
            <div class="d-flex justify-content-between w-100">
                <div class="d-flex justify-content-start">
                    <button class="navbar-toggler align-self-center d-none d-lg-block pl-0"
                            type="button">
                <span v-if="leftMenuType === 'normal'" :key="'align-left'"
                      @click.prevent="togglingLeftMenu('active-icon-only-menu')">
                    <Icon :name="'align-left'"/>
                </span>
                        <span v-else-if="leftMenuType === 'icon-only'" :key="'align-center'"
                              @click.prevent="togglingLeftMenu('active-floating-menu')">
                    <Icon :name="'align-center'"/>
                </span>
                        <span v-else-if="leftMenuType === 'floating'" :key="'align-justify'"
                              @click.prevent="togglingLeftMenu('active-normal-menu')">
                    <Icon :name="'align-justify'"/>
                </span>
                    </button>
                    <button class="navbar-toggler align-self-center d-lg-none pl-0"
                            type="button"
                            data-toggle="offcanvas"
                            @click="sidebarOffcanvas">
                        <Icon :name="'align-left'"/>
                    </button>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <button class="btn btn-outline-primary">Punch In</button>
                </div>
                <div class="">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <button class="navbar-toggler align-self-center"
                                    type="button"
                                    @click.prevent="toggleDarkMode">
                <span v-if="darkMode" :key="'sun'">
                    <Icon :name="'sun'"/>
                </span>
                                <span v-else :key="'moon'">
                    <Icon :name="'moon'"/>
                </span>
                            </button>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a href="#" class="d-flex align-items-center nav-link" @click="fullscreen">
                                <Icon id="fullscreen-button" :name="'maximize'"/>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="d-flex align-items-center nav-link dropdown-toggle"
                               id="languageDropdown"
                               href="#"
                               data-toggle="dropdown"
                               aria-expanded="false">
                                EN
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown language-dropdown"
                                 aria-labelledby="languageDropdown">
                                <a class="dropdown-item">
                                    English
                                </a>
                                <a class="dropdown-item">
                                    Spanish
                                </a>
                                <a class="dropdown-item">
                                    Hindi
                                </a>
                                <a class="dropdown-item">
                                    French
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="d-flex align-items-center nav-link count-indicator dropdown-toggle"
                               id="notificationDropdown"
                               href="#"
                               data-toggle="dropdown">
                                <Icon :name="'bell'"/>
                                <span class="count-symbol bg-primary spinner-grow"/>
                            </a>
                            <div v-if="notifications"
                                 class="dropdown-menu dropdown-menu-right navbar-dropdown notification-dropdown"
                                 aria-labelledby="notificationDropdown">
                                <h6 class="p-primary mb-0 primary-text-color">
                                    <a href="">All Notifications</a>
                                    <span class="badge badge-primary badge-sm badge-circle float-right">5</span>
                                </h6>
                                <div class="dropdown-divider"/>
                                <div class="dropdown-items-wrapper custom-scrollbar">
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <img src="https://images.unsplash.com/photo-1506919258185-6078bba55d2a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                                 class="mr-3 rounded-circle" alt="" width="40">
                                            <div class="media-body">
                                                <p class="my-0 media-heading">Media heading</p>
                                                <span class="text-muted">
                                            Cras sit amet nibh libero, in gravida nulla Cras sit
                                        </span>
                                                <span class="primary-text-color link">
                                            <a href="#" class="mr-3">Today</a>
                                            <a href="#">09:00 AM</a>
                                        </span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <img src="https://images.unsplash.com/photo-1506919258185-6078bba55d2a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                                 class="mr-3 rounded-circle" alt="" width="40">
                                            <div class="media-body">
                                                <p class="my-0 media-heading">Media heading</p>
                                                <span class="text-muted">
                                            Cras sit amet nibh libero, in gravida nulla Cras sit
                                        </span>
                                                <span class="primary-text-color link">
                                            <a href="#" class="mr-3">Today</a>
                                            <a href="#">09:00 AM</a>
                                        </span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <img src="https://images.unsplash.com/photo-1506919258185-6078bba55d2a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                                 class="mr-3 rounded-circle" alt="" width="40">
                                            <div class="media-body">
                                                <p class="my-0 media-heading">Media heading</p>
                                                <span class="text-muted">
                                            Cras sit amet nibh libero, in gravida nulla Cras sit
                                        </span>
                                                <span class="primary-text-color link">
                                            <a href="#" class="mr-3">Today</a>
                                            <a href="#">09:00 AM</a>
                                        </span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div v-else class="dropdown-menu dropdown-menu-right navbar-dropdown notification-dropdown no-notification-dropdown p-primary">

                                <div class="d-flex justify-content-center">
                                    <img src="../../assets/images/no-noti-one-light.png" class="no-notification-img"
                                         alt="">
                                </div>
                                <p class="text-center font-size-80 m-0 pt-2 pb-0">It's very much boring to do as usual stuffs, let's hear a
                                    song with some beer</p>

                            </div>

                        </li>
                        <span class="topbar-divider d-none d-sm-block"/>
                        <li class="nav-item nav-profile dropdown">
                            <a class="d-flex align-items-center nav-link dropdown-toggle mr-0" id="profileDropdown" href="#"
                               data-toggle="dropdown" aria-expanded="false">
                                <div class="nav-profile-text">
                                    <p class="mb-0 text-black">Shafiur Rahman</p>
                                </div>
                                <div class="nav-profile-img">
                                    <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                         alt="image">
                                    <span class="availability-status online"/>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                <div class="dropdown-item profile">
                                    <div class="nav-profile-img">
                                        <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                             alt="image">
                                        <span class="availability-status online"/>
                                    </div>
                                    <div class="nav-profile-text">
                                        <p class="my-0 text-black">Shafiur Rahman</p>
                                        <span class="text-secondary">Admin</span>
                                    </div>
                                </div>
                                <div class="dropdown-divider"/>
                                <a class="dropdown-item" href="/my-profile">
                                    <Icon class="mr-3" :name="'user'"/>
                                    My Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <Icon class="mr-3" :name="'settings'"/>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="/">
                                    <Icon class="mr-3" :name="'log-out'"/>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </nav>
</template>

<script>
    import core from '../../assets/js/core'
    export default {
        extends: core,
        data() {
            return {
                leftMenuType: 'normal',
                notifications: false
            }
        },
        mounted() {
            this.$nextTick(function () {

            })
        },
        methods: {}
    }
</script>