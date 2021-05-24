<template>
    <div class="btn-group btn-group-action" role="group" aria-label="Basic example">
        <button type="button"
                class="btn"
                data-toggle="tooltip"
                data-placement="top"
                title="Active">
            <Icon :name="'check'"/>
        </button>
        <button type="button"
                class="btn"
                data-toggle="tooltip"
                data-placement="top"
                title="Edit">
            <Icon :name="'edit'"/>
        </button>
        <button type="button"
                class="btn"
                data-toggle="tooltip"
                data-placement="top"
                title="Delete">
            <Icon :name="'trash'"/>
        </button>
    </div>
</template>

<script>
    export default {
        name: "DefaultActionButton"
    }
</script>
