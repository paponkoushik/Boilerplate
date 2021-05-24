<template>
    <div class="editor">
        <form method="post">
            <textarea id="summernote" name="editordata"/>
        </form>
    </div>
</template>

<script>
    import CoreJS from '../../assets/js/core'

    export default {
        name: "Editor",
        extends: CoreJS,
        mounted(){
            $('#summernote').summernote({
                placeholder: 'Write something here...',
                tabsize: 2,
                height: 400
            });
        }
    }

</script>