<template>
    <i v-if="icon() && icon().iconType === 'fontawesome' " :class="icon().iconName"/>
    <i v-else :data-feather="name"/>
</template>

<script>
    import CoreJS from '../../assets/js/core';

    export default {
        name: "Icon",
        extends: CoreJS,
        props: {
            name: {
                default: '',
                type: String,
            },
            iconClass: {
                default: '',
                type: String,
            }
        },
        data() {
            return {
                icon: () => {
                    let instance = this;
                    return this.getIcons().find(item => {
                        return item.name === instance.name;
                    });
                }
            }
        },
        methods: {
            getIcons() {
                return [
                    {
                        name: 'sort',
                        iconType: 'fontawesome',
                        iconName: 'fas fa-sort',
                    }
                ]
            }
        }
    }
</script>