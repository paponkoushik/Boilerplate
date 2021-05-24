<template>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <app-breadcrumb :page-title="$t('all_notification')" icon="bell"/>
            </div>
        </div>

        <app-table :id="tableId" :options="options" @action="triggerActions"/>

    </div>
</template>

<script>
    import * as actions from '../../../Config/ApiUrl'
    import AppLibrary from "../../../Helpers/AppLibrary";
    import {formatDateToLocal, onlyTime, optional} from "../../../Helpers/Helpers";
    import {axiosPost} from "../../../Helpers/AxiosHelper";
    export default {
        name: "AllNotification",
        extends: AppLibrary,
        data() {
            return {
                selectedUrl: '',
                tableId: 'all-notifications',
                rowData: {},
                options: {
                    name: 'All Notifications',
                    url: actions.NOTIFICATIONS,
                    showHeader: true,
                    columns: [
                        {
                            title: this.$t('title'),
                            type: 'button',
                            key: 'data',
                            className: 'btn btn-sm btn-link',
                            actionType: 'read',
                            modifier: data => data.message.replace(/<[^>]*>/g, '')
                        },
                        {
                            title: this.$t('notification_from'),
                            type: 'object',
                            key: 'notifier',
                            uniqueKey: 'id',
                            modifier: function (notifier, rowData) {
                                return optional(notifier, 'full_name');
                            }
                        },
                        {
                            title: this.$t('date'),
                            type: 'object',
                            key: 'created_at',
                            uniqueKey: 'id',
                            modifier: function (created_at, rowData) {
                                return formatDateToLocal(created_at)
                            }
                        },
                        {
                            title: this.$t('time'),
                            type: 'object',
                            key: 'created_at',
                            uniqueKey: 'id',
                            modifier: function (created_at, rowData) {
                                return onlyTime(created_at)
                            }
                        },
                    ],
                    filters: [
                        {
                            "title": this.$t('created'),
                            "type": "range-picker",
                            "key": "date",
                            "option": ["today", "thisMonth", "last7Days", "thisYear"]
                        }
                    ],
                    showFilter: true,
                    showSearch: true,
                    paginationType: "pagination",
                    responsive: true,
                    rowLimit: 10,
                    showAction: false,
                    orderBy: 'desc',
                    actionType: "dropdown",
                    actions: [
                        {
                            title: this.$t('copy'),
                            icon: 'copy',
                            type: 'page',
                            url: `/`,
                            name: 'copy'
                        }
                    ],
                }
            }
        },

        methods: {
            triggerActions(row, action, active) {
                this.readNotification(row);
            },
            readNotification(notification) {
                axiosPost(`admin/user/notifications/mark-as-read/${notification.id}`).then(({data}) => {
                    if (data.data.url) {
                        window.location = data.data.url;
                    }
                });
            },
        }
    }
</script>
