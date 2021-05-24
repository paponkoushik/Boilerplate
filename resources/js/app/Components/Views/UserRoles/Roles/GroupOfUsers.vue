<template>
    <app-avatars-group :avatars-group-class="avatarsGroupClass" :name="avatarsGroupName+index" :shadow="false" :border="true" :avatars="users"/>
</template>

<script>
    export default {
        name: "GroupOfUsers",
        props: {
            value: {},
            rowData: {},
            index: {}
        },
        data(){
            return {
                avatarsGroupClass: 'avatars-group-w-50',
                avatarsGroupName: 'groupOfUsers',
            }
        },
        computed:{
            users(){
                let users = this.value;
                users.map(item => {
                    item.img = item.profile_picture?.path;
                    item.alt = item.full_name;
                    item.title = item.full_name;
                });
                return users;
            }
        }
    }
</script>
