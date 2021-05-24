<template>
    <div class="content-wrapper">
        <app-breadcrumb :page-title="$t('basic')" :directory="$t('datatables')" :icon="'grid'"/>
        <div class="row">
            <!--List View-->
            <list-view class="mb-primary"/>

            <!--Profile View-->
            <profile-view/>
        </div>
    </div>
</template>

<script>
    import ListView from "./ListView";
    import ProfileView from "./ProfileView";
    export default {
        name: "index",
        components: {
            ListView,
            ProfileView
        },
    }
</script>
