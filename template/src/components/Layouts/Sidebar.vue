<template>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="/dashboard"><img src="../../assets/images/core.png" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="/dashboard"><img src="../../assets/images/core.png" alt="logo" /></a>
        </div>
        <ul class="nav nav-scrolling">
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                    <span class="icon-wrapper">
                        <Icon :name="'sun'" class="menu-icon"/>
                    </span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <span class="icon-wrapper">
                        <Icon :name="'server'" class="menu-icon"/>
                    </span>
                    <span class="menu-title">Brands</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/users-roles">
                    <span class="icon-wrapper">
                        <Icon :name="'user'" class="menu-icon"/>
                    </span>
                    <span class="menu-title">Users & Roles</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <span class="icon-wrapper">
                        <Icon :name="'settings'" class="menu-icon"/>
                    </span>
                    <span class="menu-title">Settings</span>
                    <i class="menu-arrow"/>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                App Settings long text
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                Basic Settings
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-components" aria-expanded="false" aria-controls="ui-components">
                    <span class="icon-wrapper">
                        <Icon :name="'briefcase'" class="menu-icon"/>
                    </span>
                    <span class="menu-title">Components</span>
                    <i class="menu-arrow"/>
                </a>
                <div class="collapse" id="ui-components">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="/tables">
                                Datatable
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tabs">
                                Tabs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/breadcumbs">
                                Breadcumbs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/forms">
                                Form Elements
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/modals">
                                Modals
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/badges">
                                Badges
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/buttons">
                                Buttons
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/avatars">
                                Avatars
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/charts">
                                Charts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cards">
                                Cards
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tag-manager">
                                Tag manager
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</template>

<script>
    import core from '../../assets/js/core'
    export default {
        extends: core,
        name: "Sidebar"
    }
</script>
