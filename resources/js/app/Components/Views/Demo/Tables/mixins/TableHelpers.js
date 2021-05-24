export const TableHelpers = {
    data() {
        return {
            tableColumns : [
                {
                    title: this.$t('name'),
                    type: 'text',
                    key: 'name',
            
                },
                {
                    title: this.$t('email'),
                    type: 'text',
                    key: 'email',
            
                },
                {
                    title: this.$t('status'),
                    type: 'custom-html',
                    key: 'status',
                    isVisible: true,
                    modifier: (value) => {
                        if (value) {
                            let ClassName = 'danger';

                            if (value === 'active') ClassName = `success`;
                            else if (value === 'invited') ClassName = `warning`;

                            return `<span class="badge badge-sm badge-pill badge-${ClassName}">${this.$t(value)}</span>`;
                        }
                    }
                },
                {
                    title: this.$t('phone'),
                    type: 'text',
                    key: 'phone',
                },
                {
                    title: this.$t('age'),
                    type: 'text',
                    key: 'age',
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
            actionObj : {
                title: this.$t('action'),
                type: 'action',
            }
        }
    },
}