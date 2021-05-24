<template>
    <div class="dropdown options-dropdown">
        <button type="button" class="btn-option btn" data-toggle="dropdown">
            <i data-feather="more-vertical"/>
        </button>
        <div class="dropdown-menu dropdown-menu-right py-2 mt-1">
            <a class="dropdown-item px-4 py-2" href="#">Enabled</a>
            <a class="dropdown-item px-4 py-2" href="#">Disabled</a>
            <a class="dropdown-item px-4 py-2" href="#">Edit</a>
            <a class="dropdown-item px-4 py-2" href="#">Delete</a>
            <a class="dropdown-item px-4 py-2" href="#">Settings</a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "OptionsDropdownButton"
    }
</script>
