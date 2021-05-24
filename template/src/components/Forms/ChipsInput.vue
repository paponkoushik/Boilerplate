<template>
    <div class="search-filter-dropdown">
        <div class="dropdown">
            <div class="p-2 chips-container custom-scrollbar"
                 id="dropdownMenuLink"
                 data-toggle="dropdown">
                    <span class="chips d-inline-block mr-2 mb-2" v-for="(chip, index) in selectedOptions" :key="index">
                        <span class="mx-3">{{chip}}</span>
                        <span class="delete-chips" @click.prevent="deleteChips(index)">
                            <Icon :name="'x'"/>
                        </span>
                    </span> <span class="add">+ add</span>
            </div>
            <div class="dropdown-menu py-0" aria-labelledby="dropdownMenuLink">
                <div class="form-group form-group-with-search">
                    <span class="form-control-feedback">
                        <Icon :name="'search'"/>
                    </span>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <div class="dropdown-divider my-0"/>
                <div class="dropdown-search-result-wrapper custom-scrollbar">
                    <a v-for="(option, index) in menuOptions"
                       :key="index"
                       class="dropdown-item"
                       :class="{'disabled selected': isChipSelected(option)}"
                       href="#" @click.prevent="addChips(index)">
                        {{ option }}
                        <span class="check-sign float-right">
                            <i data-feather="check" class="menu-icon"/>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ChipsInput",
        data() {
            return {
                menuOptions: [
                    'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten',
                ],
                selectedOptions: [],
            }
        },
        methods: {
            isChipSelected(value) {
                return this.selectedOptions.includes(value);
            },
            addChips(index) {
                let instance = this;
                instance.item = instance.menuOptions[index];
                instance.selectedOptions.push(instance.item);
            },
            deleteChips(index) {
                let instance = this;
                instance.selectedOptions.splice(index, 1);
            }
        }
    }
</script>