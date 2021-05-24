<template>
    <div>
        <div class="card card-with-shadow border-0">
            <div class="card-body">
                <div class="datatable">
                    <div class="table-responsive table-view-responsive custom-scrollbar">
                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th class="pt-0">Name</th>
                                <th class="pt-0">Status</th>
                                <th class="pt-0">
                                    <a href="#" class="btn d-flex justify-content-between">
                                        <span class="mr-2">Subscribers</span>
                                        <span>
                                        <Icon :name="'chevron-down'"/>
                                    </span>
                                    </a>
                                </th>
                                <th class="pt-0">
                                    <a href="#" class="btn d-flex justify-content-between">
                                        <span class="mr-2">Campaigns</span>
                                        <span>
                                        <Icon :name="'chevron-up'"/>
                                    </span>
                                    </a>
                                </th>
                                <th class="pt-0">
                                    <span class="mr-2">Send rate</span>
                                </th>
                                <th class="pt-0">Go to brand</th>
                                <th class="pt-0 text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr @click.prevent="selectRow" :class="{'highlighted': isActiveRow}">
                                <td data-title="Name">
                                    <a href="#">Gain Solutions LTD</a>
                                </td>
                                <td data-title="Status">
                                    <span class="badge badge-pill badge-warning">Inactive</span>
                                </td>
                                <td data-title="Subscribers">1223</td>
                                <td data-title="Campaigns">12</td>
                                <td data-title="Send rate">2%</td>
                                <td data-title="Go to brand">
                                    <a href="#" class="btn btn-primary rounded-pill px-4 py-0 text-white">
                                        <Icon :name="'activity'"/>
                                    </a>
                                </td>
                                <td data-title="Actions" class="table-action">
                                    <ActionButton/>
                                </td>
                            </tr>
                            <tr>
                                <td data-title="Name"><a href="#">Grameenphone</a></td>
                                <td data-title="Status">
                                    <span class="badge badge-pill badge-success">Active</span>
                                </td>
                                <td data-title="Subscribers">1223</td>
                                <td data-title="Campaigns">12</td>
                                <td data-title="Send rate">2%</td>
                                <td data-title="Go to brand">
                                    <a href="#" class="btn btn-primary rounded-pill px-4 py-0 text-white">
                                        <Icon :name="'activity'"/>
                                    </a>
                                </td>
                                <td data-title="Actions" class="table-action">
                                    <ActionButton/>
                                </td>
                            </tr>
                            <tr>
                                <td data-title="Name"><a href="#">Pathao</a></td>
                                <td data-title="Status">
                                    <span class="badge badge-pill badge-success">Active</span>
                                </td>
                                <td data-title="Subscribers">1223</td>
                                <td data-title="Campaigns">12</td>
                                <td data-title="Send rate">2%</td>
                                <td data-title="Go to brand">
                                    <a href="#" class="btn btn-primary rounded-pill px-4 py-0 text-white">
                                        <Icon :name="'activity'"/>
                                    </a>
                                </td>
                                <td data-title="Actions" class="table-action">
                                    <ActionButton/>
                                </td>
                            </tr>
                            <tr>
                                <td data-title="Name"><a href="#">Pathao</a></td>
                                <td data-title="Status">
                                    <span class="badge badge-pill badge-danger">Inactive</span>
                                </td>
                                <td data-title="Subscribers">1223</td>
                                <td data-title="Campaigns">12</td>
                                <td data-title="Send rate">2%</td>
                                <td data-title="Go to brand">
                                    <a href="#" class="btn btn-primary rounded-pill px-4 py-0 text-white">
                                        <Icon :name="'activity'"/>
                                    </a>
                                </td>
                                <td data-title="Actions" class="table-action">
                                    <ActionButton/>
                                </td>
                            </tr>
                            <tr>
                                <td data-title="Name"><a href="#">Pathao</a></td>
                                <td data-title="Status">
                                    <span class="badge badge-pill badge-success">Active</span>
                                </td>
                                <td data-title="Subscribers">1223</td>
                                <td data-title="Campaigns">12</td>
                                <td data-title="Send rate">2%</td>
                                <td data-title="Go to brand">
                                    <a href="#" class="btn btn-primary rounded-pill px-4 py-0 text-white">
                                        <Icon :name="'activity'"/>
                                    </a>
                                </td>
                                <td data-title="Actions" class="table-action">
                                    <ActionButton/>
                                </td>
                            </tr>
                            <tr>
                                <td data-title="Name"><a href="#">Pathao</a></td>
                                <td data-title="Status">
                                    <span class="badge badge-pill badge-success">Active</span>
                                </td>
                                <td data-title="Subscribers">1223</td>
                                <td data-title="Campaigns">12</td>
                                <td data-title="Send rate">2%</td>
                                <td data-title="Go to brand">
                                    <a href="#" class="btn btn-primary rounded-pill px-4 py-0 text-white">
                                        <Icon :name="'activity'"/>
                                    </a>
                                </td>
                                <td data-title="Actions" class="table-action">
                                    <ActionButton/>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--<NoDataFound/>-->
            </div>
        </div>

        <div class="bulk-floating-action-wrapper" v-if="isActiveRow">
            <div class="actions">
                <div class="dropdown d-inline-block btn-dropdown">
                    <button type="button"
                            class="btn btn-light dropdown-toggle border-right"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                        <Icon :name="'align-justify'"/>
                    </button>
                    <div class="dropdown-menu py-0">
                        <div class="form-group p-primary mb-0">
                            <input type="text" class="form-control" placeholder="Type your new list name">
                        </div>
                    </div>
                </div>
                <div class="dropdown d-inline-block btn-dropdown">
                    <button type="button"
                            class="btn btn-light dropdown-toggle border-right"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                        <Icon :name="'activity'"/>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Add to blacklist</a>
                        <a class="dropdown-item" href="#">Create a campaign</a>
                        <a class="dropdown-item" href="#">Delete</a>
                    </div>
                </div>
                <div class="dropdown d-inline-block btn-dropdown">
                    <button type="button"
                            class="btn btn-light dropdown-toggle border-right"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                        <Icon :name="'flag'"/>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Subscribed</a>
                        <a class="dropdown-item" href="#">Unsubscribed</a>
                    </div>
                </div>
                <div class="dropdown d-inline-block btn-dropdown">
                    <button type="button"
                            class="btn btn-light dropdown-toggle border-right"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                        <Icon :name="'delete'"/>
                    </button>
                    <div class="dropdown-menu py-0 search-and-select" aria-labelledby="dropdownMenuLink">
                        <div class="btn-dropdown-close d-sm-none">
                    <span class="title">
                        Search and select
                    </span>
                            <span class="back float-right" @click.prevent="hideDropDownMenu">
                        <Icon :name="'x'"/>
                    </span>
                        </div>
                        <div class="form-group form-group-with-search p-primary">
                    <span class="form-control-feedback">
                        <Icon :name="'search'"/>
                    </span>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <div class="dropdown-divider my-0"/>
                        <div class="dropdown-search-result-wrapper">
                            <a class="dropdown-item" href="#">Option one
                                <span class="check-sign float-right">
                        <i data-feather="check" class="menu-icon"/>
                    </span>
                            </a>
                            <a class="dropdown-item" href="#">Option two
                                <span class="check-sign float-right">
                        <i data-feather="check" class="menu-icon"/>
                    </span>
                            </a>
                            <a class="dropdown-item" href="#">Option three
                                <span class="check-sign float-right">
                        <i data-feather="check" class="menu-icon"/>
                    </span>
                            </a>
                            <a class="dropdown-item" href="#">Option four
                                <span class="check-sign float-right">
                        <i data-feather="check" class="menu-icon"/>
                    </span>
                            </a>
                            <a class="dropdown-item" href="#">Option five
                                <span class="check-sign float-right">
                        <i data-feather="check" class="menu-icon"/>
                    </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="dropdown d-inline-block btn-dropdown">
                    <button type="button"
                            class="btn btn-light dropdown-toggle border-right"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                        <Icon :name="'plus-square'"/>
                    </button>
                    <div class="dropdown-menu py-0 search-and-select" aria-labelledby="dropdownMenuLink">
                        <div class="btn-dropdown-close d-sm-none">
                    <span class="title">
                        Search and select
                    </span>
                            <span class="back float-right" @click.prevent="hideDropDownMenu">
                        <Icon :name="'x'"/>
                    </span>
                        </div>
                        <div class="form-group form-group-with-search p-primary">
                    <span class="form-control-feedback">
                        <Icon :name="'search'"/>
                    </span>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <div class="dropdown-divider my-0"/>
                        <div class="dropdown-search-result-wrapper">
                            <a class="dropdown-item" href="#">Option one
                                <span class="check-sign float-right">
                        <i data-feather="check" class="menu-icon"/>
                    </span>
                            </a>
                            <a class="dropdown-item" href="#">Option two
                                <span class="check-sign float-right">
                        <i data-feather="check" class="menu-icon"/>
                    </span>
                            </a>
                            <a class="dropdown-item" href="#">Option three
                                <span class="check-sign float-right">
                        <i data-feather="check" class="menu-icon"/>
                    </span>
                            </a>
                            <a class="dropdown-item" href="#">Option four
                                <span class="check-sign float-right">
                        <i data-feather="check" class="menu-icon"/>
                    </span>
                            </a>
                            <a class="dropdown-item" href="#">Option five
                                <span class="check-sign float-right">
                        <i data-feather="check" class="menu-icon"/>
                    </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import '../../assets/js/core'
    import ActionButton from '../Buttons/DefaultActionButton'

    export default {
        name: "Datatable.vue",
        components: {
            ActionButton
        },
        data() {
            return {
                isActiveRow: false
            }
        },
        methods: {
            selectRow() {
                this.isActiveRow = !this.isActiveRow;
                console.log('selected')
            }
        }
    }
</script>
