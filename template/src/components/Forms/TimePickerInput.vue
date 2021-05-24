<template>
    <div class="time-picker-input">
        <div class="dropdown keep-inside-clicks-open">
            <div class="input-group" id="dropdownMenuTimePicker" data-toggle="dropdown" aria-haspopup="true"
                 aria-expanded="false">
                <input type="button" class="form-control" v-model="selectedTime">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><i data-feather="clock"/></span>
                </div>
            </div>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuTimePicker">
                <div class="hour custom-scrollbar py-2">
                    <ul class="p-0">
                        <li v-for="(n) in 23" :key="n" class="dropdown-item py-2" @click.prevent="selectHour(n)">
                            {{ n }}
                        </li>
                    </ul>
                </div>
                <div class="minute custom-scrollbar py-2">
                    <ul class="p-0">
                        <li v-for="(n) in 59" :key="n" class="dropdown-item py-2" @click.prevent="selectMinute(n)">
                            {{ n }}
                        </li>
                    </ul>
                </div>
                <div class="am-pm custom-scrollbar py-2">
                    <ul class="p-0">
                        <li class="dropdown-item py-2">
                            <label class="customized-radio radio-default">
                                <input type="radio" class="radio-inline" name="am-pm" checked>
                                <span class="outside">
                                                    <span class="inside"/>
                                                </span>
                                AM
                            </label>
                        </li>
                        <li class="dropdown-item py-2">
                            <label class="customized-radio radio-default">
                                <input type="radio" class="radio-inline" name="am-pm" checked>
                                <span class="outside">
                                                    <span class="inside"/>
                                                </span>
                                AM
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import CoreJS from '../../assets/js/core'

    export default {
        name: "TimePickerInput",
        extends: CoreJS,
        data() {
            return {
                selectedTime: '',
            }
        },
        methods: {
            selectHour(hour) {
                this.selectedTime = hour;
            },
            selectMinute(minute) {
                this.selectedTime += " : " + minute;
            }
        }
    }
</script>

