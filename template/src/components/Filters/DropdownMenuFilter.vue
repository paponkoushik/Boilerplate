<template>
    <div class="dropdown-menu-filter">
        <div class="dropdown keep-inside-clicks-open">
            <button class="btn menu-filter-btn" type="button" id="dropdownMenuButton-segments"
                    data-toggle="dropdown">
                How many deals were won?
                <img src="../../../../public/images/chevron-down.svg" alt="">
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-segments">
                <a href="#" class="dropdown-item active">
                    <Icon name="award" class="pr-2"/>
                    How many deals were won?</a>
                <a href="#" class="dropdown-item">
                    <Icon name="frown" class="pr-2"/>
                    How many deals were lost?</a>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "DropdownMenuFilter"
    }
</script>

<style scoped>

</style>