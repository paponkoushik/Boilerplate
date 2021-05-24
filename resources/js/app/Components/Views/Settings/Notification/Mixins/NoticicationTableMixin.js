import * as actions from '../../../../../Config/ApiUrl';

export const NotificationTableMixin = {
    data() {
        return {
            option: {
                url: actions.NOTIFICATION_EVENTS,
                tablePaddingClass: 'px-0 py-primary',
                datatableWrapper: false,
                showHeader: true,
                tableShadow: false,
                columns: [
                    {
                        title: this.$t('event_name'),
                        type: 'text',
                        key: 'translated_name',
                    },
                    {
                        title: this.$t('event_channel'),
                        type: 'custom-html',
                        key: 'settings',
                        isVisible: true,
                        modifier: (settings, row) =>  {
                            if (['user_invitation', 'password_reset'].includes(row.name)) {
                                return `<span class="badge badge-pill badge-success">${this.$t('mail')}</span>`;
                            }
                            if (!settings)
                                return '';
                            return settings.notify_by.map(type => {
                                return `<span class="badge badge-pill ${type === 'database' ? 'badge-primary' : 'badge-success'}">${this.$t(type)}</span>`
                            }).join(' ')
                        }
                    },
                    {
                        title: this.$t('templates'),
                        type: 'button',
                        key: 'id',
                        className: 'btn btn-sm btn-primary py-1',
                        icon: 'trello',
                        actionType: 'manage',
                        modifier: (id) => {
                            return this.$t('update');
                        }
                    },
                    {
                        title: this.$t('action'),
                        type: 'action',
                        key: 'name',
                        isVisible: true
                    },
                ],
                showSearch: true,
                showFilter: false,
                paginationType: "loadMore",
                responsive: true,
                rowLimit: 10,
                showAction: true,
                orderBy: 'desc',
                actionType: "default",
                actions: [
                    {
                        title: this.$t('edit'),
                        type: 'modal',
                        actionType: 'edit',
                        icon: 'settings',
                        uniqueKey: '',
                        modifier: (row) => {
                            return !['user_invitation', 'password_reset'].includes(row.name);
                        }
                    },

                ],
            }
        }
    },
}
