<template>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-primary" v-if="data.length > 0"
             v-for="(profile, rowIndex) in data" :key="'row'+rowIndex">
            <profile-card
                :id="id"
                :profile="profile"
                :actions="actions"
                @action-grid-view-table="getAction"
            />
        </div>
    </div>
</template>

<script>
export default {
    name: "GridView",
    props: ['id', 'data', 'actions'],
    methods: {
        getAction(row, action, active) {
            this.$emit('getCardAction', row, action, active);
        }
    }
}
</script>
