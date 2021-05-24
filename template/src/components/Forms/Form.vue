<template>
    <div class="form-elements">
        <div class="row">
            <div class="col-12">
                <!--input text type components start here-->
                <div class="card card-with-shadow border-0 mb-primary">
                    <div class="card-header bg-transparent p-primary">
                        <h4 class="card-title mb-0">Text type inputs</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="input-text" class="text-right d-block pt-2">Text input type</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="input-text"
                                               placeholder="Enter text type input">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="input-text-help" class="text-right d-block pt-2">Text input with
                                            help</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="input-text-help"
                                               aria-describedby="emailHelp"
                                               placeholder="Enter ......">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                            with anyone
                                            else.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="text-right d-block pt-2" for="input-email">Input type
                                            email</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" id="input-email"
                                               placeholder="Enter email">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="text-right d-block pt-2" for="input-password">Input type
                                            password</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control" id="input-password" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="text-right d-block pt-2" for="input-disable">Disabled</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text"
                                               class="form-control"
                                               id="input-disable"
                                               placeholder="Disable input field"
                                               disabled>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <!-- Checkboxes & Radios component start from here-->
                <div class="card card-with-shadow border-0 mb-primary">
                    <div class="card-header bg-transparent p-primary">
                        <h4 class="card-title mb-0">Checkboxes & Radios</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 border-right">
                                <form action="">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label class="text-right d-block">Customized Checkbox Default</label>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="customized-checkbox checkbox-default">
                                                    <input id="customizedCheckboxDefault" type="checkbox">
                                                    <label for="customizedCheckboxDefault">First option</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label class="text-right d-block">Customized Checkbox Success</label>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="customized-checkbox checkbox-success">
                                                    <input id="customizedCheckboxSuccess" type="checkbox">
                                                    <label for="customizedCheckboxSuccess">Second option</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label class="text-right d-block">Customized Checkbox Warning</label>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="customized-checkbox checkbox-warning">
                                                    <input id="customizedCheckboxWarning" type="checkbox">
                                                    <label for="customizedCheckboxWarning">Third option</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label class="text-right d-block">Customized Checkbox Info</label>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="customized-checkbox checkbox-info">
                                                    <input id="customizedCheckboxInfo" type="checkbox">
                                                    <label for="customizedCheckboxInfo">Fourth option</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xl-4 d-flex align-items-center">
                                            <label class="text-left d-block mb-lg-2 mb-xl-0">Radio inline
                                                default</label>
                                        </div>
                                        <div class="col-xl-8">
                                            <label class="customized-radio radio-default">
                                                <input type="radio" class="radio-inline" name="radios" checked>
                                                <span class="outside">
                                                    <span class="inside"/>
                                                </span>
                                                Male
                                            </label>
                                            <label class="customized-radio radio-default">
                                                <input type="radio" class="radio-inline" name="radios">
                                                <span class="outside">
                                                    <span class="inside"/>
                                                </span>
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xl-4 d-flex align-items-center">
                                            <label class="text-left d-block mb-lg-2 mb-xl-0">Radio inline
                                                success</label>
                                        </div>
                                        <div class="col-xl-8">
                                            <label class="customized-radio radio-success">
                                                <input type="radio" class="radio-inline" name="radios" checked>
                                                <span class="outside">
                                                    <span class="inside"/>
                                                </span>
                                                Male
                                            </label>
                                            <label class="customized-radio radio-success">
                                                <input type="radio" class="radio-inline" name="radios">
                                                <span class="outside">
                                                    <span class="inside"/>
                                                </span>
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xl-4 d-flex align-items-center">
                                            <label class="text-left d-block mb-lg-2 mb-xl-0">Radio inline
                                                warning</label>
                                        </div>
                                        <div class="col-xl-8">
                                            <label class="customized-radio radio-warning">
                                                <input type="radio" class="radio-inline" name="radios" checked>
                                                <span class="outside">
                                                    <span class="inside"/>
                                                </span>
                                                Male
                                            </label>
                                            <label class="customized-radio radio-warning">
                                                <input type="radio" class="radio-inline" name="radios">
                                                <span class="outside">
                                                    <span class="inside"/>
                                                </span>
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xl-4 d-flex align-items-center">
                                            <label class="text-left d-block mb-lg-2 mb-xl-0">Radio inline info</label>
                                        </div>
                                        <div class="col-xl-8">
                                            <label class="customized-radio radio-info">
                                                <input type="radio" class="radio-inline" name="radios" checked>
                                                <span class="outside">
                                                    <span class="inside"/>
                                                </span>
                                                Male
                                            </label>
                                            <label class="customized-radio radio-info">
                                                <input type="radio" class="radio-inline" name="radios">
                                                <span class="outside">
                                                    <span class="inside"/>
                                                </span>
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!--Radios Button Group...-->
                                <h5 class="title pb-3">Radios Button Group</h5>
                                <div class="radio-button-group mt-5">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn border">
                                            <input type="radio" name="options" id="option1">
                                            <span>10 HOURS</span>
                                        </label>
                                        <label class="btn border">
                                            <input type="radio" name="options" id="option2" checked>
                                            <span>12 HOURS</span>
                                        </label>
                                        <label class="btn border">
                                            <input type="radio" name="options" id="option3">
                                            <span>24 HOURS</span>
                                        </label>
                                        <label class="btn border">
                                            <input type="radio" name="options" id="option4">
                                            <span>24 HOURS</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <!--Select option dropdown component start from here-->
                <div class="card card-with-shadow border-0 mb-primary">
                    <div class="card-header bg-transparent p-primary">
                        <h4 class="card-title mb-0">Select Options dropdown</h4>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="text-right d-block pt-2" for="input-select-options">Select
                                            options</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="custom-select" id="input-select-options">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <!--file upload component start from here-->
                <div class="card card-with-shadow border-0 mb-primary">
                    <div class="card-header bg-transparent p-primary">
                        <h4 class="card-title mb-0">File upload</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <form action="">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="text-right d-block pt-2" for="input-file-upload">File
                                                    upload</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="input-file-upload">
                                                    <label class="custom-file-label" for="input-file-upload">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-6">
                                <!--Dropzone-->
                                <Dropzone/>
                            </div>
                            <div class="col-6">
                                <!--Custom image upload-->
                                <CustomImageUpload/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <!--Chips Input With Search & Select-->
                <div class="card card-with-shadow border-0 mb-primary">
                    <div class="card-header bg-transparent p-primary">
                        <h4 class="card-title mb-0">Chips With Search & Select (Multiple item select)</h4>
                    </div>
                    <div class="card-body">
                        <ChipsInput/>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <!--Wizard Steps Design start here-->
                <div class="card card-with-shadow border border-0 mb-primary">
                    <div class="card-header bg-transparent p-primary">
                        <h4 class="card-title mb-0">Form wizard steps</h4>
                    </div>
                    <div class="card-body">
                        <FormWizard/>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <!--TimePicker Input Design start here-->
                <div class="card card-with-shadow border border-0 mb-primary">
                    <div class="card-header bg-transparent p-primary">
                        <h4 class="card-title mb-0">Time Picker Input</h4>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-xl-3 d-flex align-items-center justify-content-end">Schedule time at :</div>
                            <div class="col-xl-7">
                                <TimePickerInput/>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12">
                <!--DatePicker Input Design start here-->
                <div class="card card-with-shadow border border-0 mb-primary">
                    <div class="card-header bg-transparent p-primary">
                        <h4 class="card-title mb-0">Date Picker Input</h4>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-xl-3 d-flex align-items-center justify-content-end">Schedule Date at :</div>
                            <div class="col-xl-7">
                                <DatePickerInput/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Editor Section Started Here....-->
            <div class="col-12">
                <!--DatePicker Input Design start here-->
                <div class="card card-with-shadow border border-0 mb-primary">
                    <div class="card-header bg-transparent p-primary">
                        <h4 class="card-title mb-0">Editor</h4>
                    </div>
                    <div class="card-body">
                        <Editor/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import CoreJS from "../../assets/js/core";

    export default {
        name: "Form",
        extends: CoreJS,
        mounted() {

        }
    }

</script>
