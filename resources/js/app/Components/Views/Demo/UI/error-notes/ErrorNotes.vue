<template>
    <div class="content-wrapper error-notes">
        <app-breadcrumb :page-title="$t('notes')" :directory="$t('ui_elements')" :icon="'trello'"/>
        <div class="mb-primary">
            <copy-button class="float-right" id="noteWarning" :value="noteWarningValue"/>
            <app-note class="pt-2 clearfix" :title="$t('note')+' '+$t('num_one')" note-type="note-warning" :notes="[$t('error_note_warning')]"/>
        </div>
        <div class="mb-primary">
            <copy-button class="float-right" id="noteBlue" :value="noteBlueValue"/>
            <app-note class="pt-2 clearfix" :title="$t('note')+' '+$t('num_two')" content-type="html" note-type="note-blue" :notes="[$t('error_note_blue')]"/>
        </div>
        <div class="mb-primary">
            <copy-button class="float-right" id="noteInfo" :value="noteInfoValue"/>
            <app-note class="pt-2 clearfix" :title="$t('note')+' '+$t('num_three')" content-type="html" note-type="note-info" :notes="[$t('error_note_info')]"/>
        </div>
        <div class="mb-primary">
            <copy-button class="float-right" id="noteSuccess" :value="noteSuccessValue"/>
            <app-note class="pt-2 clearfix" :title="$t('note')+' '+$t('num_four')" content-type="html" note-type="note-success" :notes="[$t('error_note_success')]"/>
        </div>
        <div class="mb-primary">
            <copy-button class="float-right" id="noteRed" :value="noteRedValue"/>
            <app-note class="pt-2 clearfix" :title="$t('note')+' '+$t('num_five')" content-type="html" note-type="note-red" :notes="[$t('error_note_red')]"/>
        </div>
        <div>
            <copy-button class="float-right" id="notePurple" :value="notePurpleValue"/>
            <app-note class="pt-2 clearfix" :title="$t('note')+' '+$t('num_six')" content-type="html" note-type="note-purple" :notes="[$t('error_note_purple')]"/>
        </div>
    </div>
</template>

<script>
    import CopyButton from "../CopyButton";

    export default {
        name: "ErrorNotes",
        components: {CopyButton},
        data() {
            return {
                noteWarningValue: `<app-note :title="$t('note')+' '+$t('num_one')" note-type="note-warning" :notes="[$t('error_note_warning')]"/>`,
                noteBlueValue: `<app-note :title="$t('note')+' '+$t('num_two')" note-type="note-blue" :notes="[$t('error_note_blue')]"/>`,
                noteInfoValue: `<app-note :title="$t('note')+' '+$t('num_three')" note-type="note-info" :notes="[$t('error_note_info')]"/>`,
                noteSuccessValue: `<app-note :title="$t('note')+' '+$t('num_four')" note-type="note-success" :notes="[$t('error_note_success')]"/>`,
                noteRedValue: `<app-note :title="$t('note')+' '+$t('num_six')" note-type="note-red" :notes="[$t('error_note_red')]"/>`,
                notePurpleValue: `<app-note :title="$t('note')+' '+$t('num_seven')" note-type="note-purple" :notes="[$t('error_note_purple')]"/>`,
            }
        }
    }
</script>
