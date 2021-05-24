<template>
    <div class="content-wrapper">
        <app-breadcrumb :page-title="$t('calendar_view')"/>
        <div v-click-outside="closeAddEditModal">
            <div class="card card-with-shadow min-height-400 border-0">
                <div class="card-body p-primary">
                    <app-calendar
                        :preloader="preloader"
                        :options="options"
                    />
                </div>
            </div>

            <!--Add popup modal-->

            <event-add-edit-modal
                :event-data="eventData"
                :selected-url="selectedUrl"
                @reloadCalendar="initCalendar"
            />
        </div>
    </div>
</template>

<script>
import CoreLibrary from "../../../../../../core/helpers/CoreLibrary";
import {CALENDARS} from "../../../../../Config/ApiUrl";

export default {
    name: "CalendarView",
    extends: CoreLibrary,
    data() {
        return {
            selectedUrl: '',
            eventData: '',
            preloader: false,
            options: {
                select: this.createEvent,
                eventClick: this.selectedEvent,
                initialEvents: []
            }
        }
    },
    created() {
        this.initCalendar();
    },
    methods: {
        initCalendar() {
            this.preloader = true;
            let x = localStorage.getItem("calendar-default-view");
            if(x) this.options.initialView = x;
            else this.options.initialView = 'timeGridWeek';
            this.axiosGet(CALENDARS).then(res => {
                this.options.initialEvents = res.data;
            }).finally(()=>{
                this.preloader = false;
                this.setView();
            })
        },
        closeAddEditModal() {
            document.getElementsByClassName("custom-modal")[0].classList.add("d-none");
            this.selectedUrl = '';
        },
        createEvent(arg) {
            this.eventData = arg;
            this.selectedUrl = '';
        },
        selectedEvent(arg) {
            this.selectedUrl = `${CALENDARS}/${arg.event.id}`;
            this.eventData = arg;
        },
        setView(){
            setTimeout(()=> {
                $('.fc-dayGridMonth-button').click(()=> {
                    localStorage.setItem('calendar-default-view','dayGridMonth');
                });
                $('.fc-timeGridWeek-button').click(()=> {
                    localStorage.setItem('calendar-default-view','timeGridWeek');
                });
                $('.fc-timeGridDay-button').click(()=> {
                    localStorage.setItem('calendar-default-view','timeGridDay');
                })
            }, 1000);

        }
    }
}
</script>
