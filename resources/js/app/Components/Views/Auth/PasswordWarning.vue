<template>
    <app-note class="mt-2"
              note-type="note-warning"
              :show-title="false"
              :notes="[$t('password_hint_note')]"/>
</template>

<script>
    export default {
        name: "PasswordWarning"
    }
</script>