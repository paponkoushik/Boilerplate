<template>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <app-breadcrumb :page-title="$t('grid_view')"/>
            </div>
            <div class="col-sm-12 col-md-6 breadcrumb-side-button">
                <div class="float-md-right mb-3 mb-sm-3 mb-md-0">
                    <button type="button"
                            class="btn btn-primary btn-with-shadow"
                            data-toggle="modal"
                            @click="openAddEditModal">
                        {{ $t('add') }}
                    </button>
                </div>
            </div>
        </div>

        <app-table
            :id="tableId"
            :options="options"
            :card-view="true"
            @action="getListAction"
        />

        <app-add-modal
            v-if="isAddEditModalActive"
            :table-id="tableId"
            :selected-url="selectedUrl"
            @close-modal="closeAddEditModal"
        />

        <app-delete-modal
            v-if="deleteConfirmationModalActive"
            :preloader="deleteLoader"
            modal-id="demo-delete"
            @confirmed="confirmed"
            @cancelled="cancelled"
        />
    </div>
</template>

<script>
import CoreLibrary from "../../../../../../core/helpers/CoreLibrary.js";
import * as actions from "../../../../../Config/ApiUrl";
import {TableHelpers} from "../mixins/TableHelpers";
import AppFunction from "../../../../../../core/helpers/app/AppFunction";

export default {
    extends: CoreLibrary,
    name: "GridView",
    mixins: [TableHelpers],
    data() {
        return {
            isAddEditModalActive: false,
            deleteConfirmationModalActive: false,
            deleteLoader: false,
            selectedUrl: '',
            tableId: 'grid-view-table',
            rowData: {},
            options: {
                cardView: true,
                cardViewComponent: 'grid-view',
                name: 'AdvanceTable',
                url: actions.DATATABLE_DATA,
                showHeader: true,
                columns: [
                    {
                        title: this.$t('user'),
                        type: 'media-object',
                        key: 'media-object',
                        mediaTitleKey: 'name',
                        mediaSubtitleKey: 'email',
                        default: AppFunction.getAppUrl('images/avatar-demo.jpg'),
                        modifier: (value, row) => {
                            return value; // imag url
                        },
                        isVisible: true
                    },
                    {
                        title: this.$t('status'),
                        type: 'custom-html',
                        key: 'status',
                        isVisible: true,
                        modifier: (value) => {
                            let ClassName = 'danger';

                            if (value === 'active') ClassName = `success`;
                            else if (value === 'invited') ClassName = `warning`;

                            return `<span class="badge badge-sm badge-pill badge-${ClassName}">${this.$t(value)}</span>`;
                        }
                    },
                    {
                        title: this.$t('phone'),
                        type: 'text',
                        key: 'phone',
                    },
                    {
                        title: this.$t('gender'),
                        type: 'custom-html',
                        key: 'gender',
                        modifier: (value) => {
                            return `<span>${this.$t(value)}</span>`
                        }
                    },
                ],
                actions: [
                    {
                        title: this.$t('edit'),
                        icon: 'edit',
                        type: 'none',
                        component: 'app-add-modal',
                        modalId: 'demo-add-edit-Modal',

                    }, {
                        title: this.$t('delete'),
                        icon: 'trash',
                        type: 'none',
                        component: 'app-confirmation-modal',
                        modalId: 'demo-delete',
                    }
                ],
                filters: [
                    {
                        "title": this.$t('date'),
                        "type": "range-picker",
                        "key": "date",
                        "option": ["today", "thisMonth", "last7Days", "nextYear"]
                    },
                    {
                        "title": this.$t('age'),
                        "type": "range-filter",
                        "key": "age-range",
                        "maxTitle": this.$t('max_age'),
                        "minTitle": this.$t('min_age'),
                        "sign": ""
                    },
                    {
                        "title": this.$t('status'),
                        "type": "checkbox",
                        "key": "status",
                        "option": [
                            {id: 'active', value: 'Active'},
                            {id: 'inactive', value: 'Inactive'},
                            {id: 'invited', value: 'Invited'},
                        ],
                    },
                    {
                        "title": this.$t('gender'),
                        "type": "radio",
                        "key": "filter-with-gender",
                        "option": [
                            {id: 'male', value: 'Male'},
                            {id: 'female', value: 'Female'},
                            {id: 'other', value: 'Other'},
                        ],

                        "header": {
                            "title": this.$t('want_to_filter_your_list'),
                            "description": this.$t('you_can_filter_your_data_table_which_are_created_based_on_gender'),
                        },
                    },
                    {
                        "title": this.$t('search_and_select'),
                        "type": "drop-down-filter",
                        "key": "search select",
                        "option": [],
                    }
                ],
                showFilter: true,
                showSearch: true,
                showCount: true,
                showClearFilter: true,
                paginationType: "pagination",
                responsive: true,
                rowLimit: 10,
                showAction: true,
                orderBy: 'desc',
                actionType: "default",
            }
        }
    },

    created() {
        this.options.columns = [...this.options.columns, this.actionObj];
        this.searchAndSelectFilterOptions();
    },
    methods: {
        /**
         * for open add edit modal
         */
        openAddEditModal() {
            this.isAddEditModalActive = true;
        },

        /**
         * for close add edit modal
         */
        closeAddEditModal() {
            $("#demo-add-edit-Modal").modal('hide');
            this.isAddEditModalActive = false;
            this.searchAndSelectFilterOptions();
            this.reSetData();
        },

        /**
         * $emit Form datatable action
         */
        getListAction(rowData, actionObj, active) {

            this.rowData = rowData;

            if (actionObj.title == 'Delete') {

                this.openDeleteModal();
            } else if (actionObj.title == this.$t('edit')) {

                this.selectedUrl = `${actions.DATATABLE_DATA}/${rowData.id}`;
                this.openAddEditModal();
            }
        },

        /**
         * for open confirmation modal
         */
        openDeleteModal() {
            this.deleteConfirmationModalActive = true;
        },

        /**
         * confirmed $emit Form confirmation modal
         */
        confirmed() {
            let url = `${actions.DATATABLE_DATA}/${this.rowData.id}`;
            this.deleteLoader = true;
            this.axiosDelete(url)
                .then(response => {
                    this.deleteLoader = false;
                    $("#demo-delete").modal('hide');
                    this.cancelled();
                    this.$toastr.s(response.data.message);
                    this.searchAndSelectFilterOptions();
                }).catch(({error}) => {

                //trigger after error
            }).finally(() => {
                this.$hub.$emit('reload-' + this.tableId);
            });
        },

        /**
         * cancelled $emit Form confirmation modal
         */
        cancelled() {
            this.deleteConfirmationModalActive = false;
            this.reSetData();
        },

        reSetData() {
            this.rowData = {};
            this.selectedUrl = '';
        },

        searchAndSelectFilterOptions() {
            this.axiosGet(actions.DATATABLE_SEARCH_SELECT).then(response => {

                let name = this.options.filters.find(element => element.title === this.$t('search_and_select'));
                name.option = response.data.map(name => {
                    return {
                        id: name.name,
                        value: name.name
                    }
                });
            });
        }
    },
}
</script>
