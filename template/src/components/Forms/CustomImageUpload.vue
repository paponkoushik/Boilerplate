<template>
    <div>
        <div class="custom-image-upload-wrapper">
            <div class="image-area d-flex">
                <img v-if="url" :src="url" alt="" class="img-fluid mx-auto my-auto">
            </div>
            <div class="input-area">
                <label id="upload-label" for="upload">Change Image</label>
                <input id="upload" type="file" @change="onFileChange" class="form-control d-none">
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CustomImageUpload",
        data() {
            return {
                url: '../../assets/images/core.png',
            }
        },
        methods: {
            onFileChange(e) {
                const file = e.target.files[0];
                this.url = URL.createObjectURL(file);
            }
        }
    }
</script>
