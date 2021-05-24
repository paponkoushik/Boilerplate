<template>
    <div class="wizard-steps">
        <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                   aria-controls="pills-home" aria-selected="true">
                    <div class="tab-step-init">Details</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                   aria-controls="pills-profile" aria-selected="false">
                    <div class="tab-step">Delivery</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                   aria-controls="pills-contact" aria-selected="false">
                    <div class="tab-step">Setup</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-audience-tab" data-toggle="pill" href="#pills-audience" role="tab"
                   aria-controls="pills-audience" aria-selected="false">
                    <div class="tab-step">Audience</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-template-tab" data-toggle="pill" href="#pills-template" role="tab"
                   aria-controls="pills-template" aria-selected="false">
                    <div class="tab-step">Template</div>
                </a>
            </li>
        </ul>
        <hr>
        <div class="tab-content pt-4" id="pills-tabContent" style="min-height: 200px">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                 aria-labelledby="pills-home-tab">
                Home Content
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                Profile Content
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                Contact Content
            </div>
            <div class="tab-pane fade" id="pills-audience" role="tabpanel" aria-labelledby="pills-audience-tab">
                Audience Content
            </div>
            <div class="tab-pane fade" id="pills-template" role="tabpanel" aria-labelledby="pills-template-tab">
                Template Content
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "FormWizard"
    }
</script>