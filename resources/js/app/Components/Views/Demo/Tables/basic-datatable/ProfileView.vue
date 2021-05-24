<template>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <h5 class="mb-3">{{ $t('profile_view') }}</h5>
        <app-table id="basic-profile-view-table" :options="profileOption"/>
    </div>
</template>

<script>
    import * as actions from "../../../../../Config/ApiUrl";
    import AppFunction from "../../../../../../core/helpers/app/AppFunction";

    export default {
        name: "ProfileView",
        data() {
            return {
                profileOption: {
                    url: actions.DATATABLE_DATA,
                    name: this.$t('profile_view'),

                    datatableWrapper: false,
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
                            title: this.$t('gender'),
                            type: 'custom-html',
                            key: 'gender',
                            modifier: (value) => {
                                return `<span>${this.$t(value)}</span>`
                            }
                        },
                    ],
                    showFilter: false,
                    paginationType: "pagination",
                    responsive: true,
                    rowLimit: 10,
                    orderBy: 'desc',
                    showAction: false,
                    actions: [],
                },
            }
        }
    }
</script>
