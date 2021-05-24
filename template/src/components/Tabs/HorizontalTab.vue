<template>
    <div class="horizontal-tab">
        <div class="card card-with-shadow border-0">
            <nav>
                <div class="nav nav-tabs">
                    <a class="nav-item active p-primary" data-toggle="tab" href="#nav-home">
                        <span class="mr-2"><Icon :name="'activity'"/></span>
                        Home
                    </a>
                    <a class="nav-item p-primary" data-toggle="tab" href="#nav-profile">
                        <span class="mr-2"><Icon :name="'phone-call'"/></span>
                        Profile</a>
                    <a class="nav-item p-primary" data-toggle="tab" href="#nav-contact">
                        <span class="mr-2"><Icon :name="'activity'"/></span>
                        Contact</a>
                </div>
            </nav>
            <div class="tab-content p-primary" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home">
                    Home content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                    more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
                    their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their
                    infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                    (injected humour and the like). is simply dummy text of the printing and typesetting industry.
                </div>
                <div class="tab-pane fade" id="nav-profile">
                    Profile content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                    more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
                    their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their
                    infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                    (injected humour and the like). is simply dummy text of the printing and typesetting industry.
                </div>
                <div class="tab-pane fade" id="nav-contact">
                    Contact content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                    more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
                    their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their
                    infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                    (injected humour and the like). is simply dummy text of the printing and typesetting industry.
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "HorizontalTab"
    }
</script>