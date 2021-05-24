<template>
    <div class="date-picker-input" :class="{'date-picker-input-group':borderGroup}">

        <div class="input-group" @focusin="borderGroup=true" @focusout="borderGroup=false">
            <vc-date-picker value=""/>
            <div class="input-group-append">
                <span class="input-group-text">
                    <Icon :name="'calendar'"/>
                </span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "DatePickerInput",
        data(){
           return{
               borderGroup: false
           }
        },
        mounted() {

        }
    }
</script>
