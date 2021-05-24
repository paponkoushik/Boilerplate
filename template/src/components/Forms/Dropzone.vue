<template>
    <div>
        <form action="/file-upload" id="my-awesome-dropzone" class="dropzone">
            <div class="dz-default dz-message">
                <i class="text-primary" data-feather="upload-cloud"/>
                <h5 class="title text-muted">Drag & Drop</h5>
                <p class="p-0 m-0">or</p>
                <a href="#">Browse</a>
            </div>
        </form>
    </div>
</template>

<script>
    import CoreJS from "../../assets/js/core";
    import Dropzone from 'dropzone/dist/dropzone'
    window.dropzone = Dropzone;

    Dropzone.options.myAwesomeDropzone = {
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 2, // MB
        accept: function(file, done) {
            if (file.name == "naha.jpg") {
                done("Naha, you don't.");
            }
            else { done("Uploaded"); }
        }
    };

    export default {
        name: "Dropzone",
        extends: CoreJS,
    }
</script>