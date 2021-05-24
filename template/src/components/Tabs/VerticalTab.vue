<template>
    <div class="vertical-tab">
        <div class="row no-gutters">
            <div class="col-md-3 pr-md-3 tab-menu">
                <div class="card card-with-shadow border-0">
                    <div class="header-icon">
                        <div class="icon-position d-flex justify-content-center">
                            <div class="tab-icon d-flex justify-content-center align-items-center">
                                <Icon :name="'user'"/>
                            </div>
                        </div>
                    </div>
                    <div class="px-primary py-primary tab-menu-wrapper">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                             aria-orientation="vertical">
                            <a class="tab-item-link my-2 my-sm-3 active d-flex justify-content-between"
                               id="v-pills-delivery-tab"
                               data-toggle="pill"
                               href="#v-pills-delivery">
                                Delivery
                                <span class="active-icon"><Icon name="chevron-right"/></span>
                            </a>
                            <a class="tab-item-link my-2 my-sm-3 d-flex justify-content-between"
                               id="v-pills-privacy-tab"
                               data-toggle="pill"
                               href="#v-pills-privacy">
                                Privacy
                                <span class="active-icon"><Icon name="chevron-right"/></span>
                            </a>
                            <a class="tab-item-link my-2 my-sm-3 d-flex justify-content-between"
                               id="v-pills-templates-tab"
                               data-toggle="pill"
                               href="#v-pills-templates">
                                Templates
                                <span class="active-icon"><Icon name="chevron-right"/></span>
                            </a>
                            <a class="tab-item-link my-2 my-sm-3 d-flex justify-content-between"
                               id="v-pills-custom-tab"
                               data-toggle="pill"
                               href="#v-pills-custom">
                                Custom fields
                                <span class="active-icon"><Icon name="chevron-right"/></span>
                            </a>
                            <a class="tab-item-link my-2 my-sm-3 d-flex justify-content-between"
                               id="v-pills-notification-tab"
                               data-toggle="pill"
                               href="#v-pills-notification">
                                Notifications
                                <span class="active-icon"><Icon name="chevron-right"/></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 pl-md-3 pt-md-0 pt-sm-4 pt-4">
                <div class="card card-with-shadow border-0">
                    <div class="tab-content px-primary" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-delivery" role="tabpanel"
                             aria-labelledby="v-pills-delivery-tab">
                            <h5 class="d-flex align-items-center text-capitalize mb-0 title tab-content-header">
                                Delivery</h5>
                            <hr>
                            <div class="content py-primary">
                                <div class="d-flex timeline mx-lg-5 mb-5rem">
                                    <div class="text-right timeline-title">
                                        <p class="mb-0">Department</p>
                                        <a href="#" class="font-size-90">Change</a>
                                    </div>
                                    <div class="d-flex">
                                        <div class="timeline-icon mx-3">
                                            <div class="svg-wrapper">
                                                <Icon :name="'briefcase'"/>
                                            </div>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="single-record">
                                                <p class="font-size-90 mb-0">Main Department</p>
                                                <p class="mb-0">
                                                    <span class="font-size-80 text-muted">12/12/20</span>
                                                    -
                                                    <span class="font-size-80 primary-text-color">Present</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex timeline mx-lg-5 mb-5rem">
                                    <div class="text-right timeline-title">
                                        <p class="mb-0">Workshift</p>
                                        <a href="#" class="font-size-90">Change</a>
                                    </div>
                                    <div class="d-flex">
                                        <div class="timeline-icon mx-3">
                                            <div class="svg-wrapper">
                                                <Icon :name="'clock'"/>
                                            </div>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="single-record mb-primary has-multiple-record">
                                                <p class="font-size-90 mb-0">Regular Workshift (12:00am - 9:00pm)</p>
                                                <p class="mb-0">
                                                    <span class="font-size-80 text-muted">11/11/20</span>
                                                    -
                                                    <span class="font-size-80 primary-text-color">Present</span>
                                                </p>
                                            </div>
                                            <div class="single-record">
                                                <p class="font-size-90 mb-0">Morning Shift</p>
                                                <p class="mb-0">
                                                    <span class="font-size-80 text-muted">23/03/19</span>
                                                    -
                                                    <span class="font-size-80 primary-text-color">11/11/20</span>
                                                </p>
                                                <p class="font-size-80 text-muted mb-0">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                                    ever since the 1500s, when an unknown printer took a galley of type
                                                    and scrambled it to make a type specimen book. It has survived not
                                                    only five centuries, but also the leap into electronic typesetting,
                                                    remaining essentially unchanged.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex timeline mx-lg-5 mb-5rem">
                                    <div class="text-right timeline-title">
                                        <p class="mb-0">Designation</p>
                                        <a href="#" class="font-size-90">Change</a>
                                    </div>
                                    <div class="d-flex">
                                        <div class="timeline-icon mx-3">
                                            <div class="svg-wrapper">
                                                <Icon :name="'award'"/>
                                            </div>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="single-record mb-primary has-multiple-record">
                                                <p class="font-size-90 mb-0">Senior Software Developer</p>
                                                <p class="mb-0">
                                                    <span class="font-size-80 text-muted">11/11/20</span>
                                                    -
                                                    <span class="font-size-80 primary-text-color">Present</span>
                                                </p>
                                            </div>
                                            <div class="single-record">
                                                <p class="font-size-90 mb-0">Junior Software Developer</p>
                                                <p class="mb-0">
                                                    <span class="font-size-80 text-muted">23/03/19</span>
                                                    -
                                                    <span class="font-size-80 primary-text-color">11/11/20</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex timeline mx-lg-5 mb-5rem">
                                    <div class="text-right timeline-title">
                                        <p class="mb-0">Role</p>
                                        <a href="#" class="font-size-90">Change</a>
                                    </div>
                                    <div class="d-flex">
                                        <div class="timeline-icon mx-3">
                                            <div class="svg-wrapper">
                                                <Icon :name="'user-check'"/>
                                            </div>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="single-record">
                                                <p class="font-size-90 mb-0">Manage, Employee</p>
                                                <p class="mb-0">
                                                    <span class="font-size-80 text-muted">12/12/20</span>
                                                    -
                                                    <span class="font-size-80 primary-text-color">Present</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex timeline mx-lg-5 mb-5rem">
                                    <div class="text-right timeline-title">
                                        <p class="mb-0">Employment Status</p>
                                        <a href="#" class="font-size-90">Change</a>
                                    </div>
                                    <div class="d-flex">
                                        <div class="timeline-icon mx-3">
                                            <div class="svg-wrapper">
                                                <Icon :name="'flag'"/>
                                            </div>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="single-record mb-primary has-multiple-record">
                                                <p class="font-size-90 mb-0">Permanent</p>
                                                <p class="mb-0">
                                                    <span class="font-size-80 text-muted">11/11/20</span>
                                                    -
                                                    <span class="font-size-80 primary-text-color">Present</span>
                                                </p>
                                            </div>
                                            <div class="single-record">
                                                <p class="font-size-90 mb-0">Provision</p>
                                                <p class="mb-0">
                                                    <span class="font-size-80 text-muted">23/03/19</span>
                                                    -
                                                    <span class="font-size-80 primary-text-color">11/11/20</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex timeline mx-lg-5 mb-5rem">
                                    <div class="text-right timeline-title">
                                        <p class="mb-0">Joining Date</p>
                                        <a href="#" class="font-size-90">Add</a>
                                    </div>
                                    <div class="d-flex">
                                        <div class="timeline-icon mx-3">
                                            <div class="svg-wrapper">
                                                <Icon :name="'award'"/>
                                            </div>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="single-record">
                                                <p class="font-size-90 mb-0">Not joined yet</p>
                                                <p class="mb-0">
                                                    <span class="font-size-80 text-muted">Created at 12/12/20</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-privacy" role="tabpanel"
                             aria-labelledby="v-pills-privacy-tab">
                            <h5 class="d-flex align-items-center mb-0 title">Privacy</h5>
                            <hr class="mt-0">
                            <div class="content py-primary">
                                Privacy Setting
                                Why do we use it?
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                here', making it look like readable English. Many desktop publishing packages and web
                                page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                ipsum' will uncover many web sites still in their infancy. Various versions have evolved
                                over the years, sometimes by accident, sometimes on purpose (injected humour and the
                                like).

                                is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book.
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-templates" role="tabpanel"
                             aria-labelledby="v-pills-templates-tab">
                            <h5 class="d-flex align-items-center mb-0 title">Templates</h5>
                            <hr class="mt-0">
                            <div class="content py-primary">
                                Template Setting
                                Why do we use it?
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                here', making it look like readable English. Many desktop publishing packages and web
                                page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                ipsum' will uncover many web sites still in their infancy. Various versions have evolved
                                over the years, sometimes by accident, sometimes on purpose (injected humour and the
                                like).

                                is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s,
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-custom" role="tabpanel"
                             aria-labelledby="v-pills-custom-tab">
                            <h5 class="d-flex align-items-center mb-0 title">Custom Fields</h5>
                            <hr class="mt-0">
                            <div class="content py-primary">
                                Custom fields Setting
                                Why do we use it?
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                here', making it look like readable English. Many desktop publishing packages and web
                                page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                ipsum' will uncover many web sites still in their infancy. Various versions have evolved
                                over the years, sometimes by accident, sometimes on purpose (injected humour and the
                                like).

                                is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only
                                five centuries, but also the leap into electronic typesetting, remaining essentially
                                unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                containing Lorem Ipsum passages, and more recently with desktop publishing software like
                                Aldus PageMaker including versions of Lorem Ipsum.
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-notification" role="tabpanel"
                             aria-labelledby="v-pills-notification-tab">
                            <h5 class="d-flex align-items-center mb-0 title">Notification</h5>
                            <hr class="mt-0">
                            <div class="content py-primary">
                                Notifications Setting
                                Why do we use it?
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                here', making it look like readable English. Many desktop publishing packages and web
                                page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                ipsum' will uncover many web sites still in their infancy. Various versions have evolved
                                over the years, sometimes by accident, sometimes on purpose (injected humour and the
                                like).

                                is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only
                                five centuries, but also the leap into electronic typesetting, remaining essentially
                                unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                containing Lorem Ipsum passages, and more recently with desktop publishing software like
                                Aldus PageMaker including versions of Lorem Ipsum.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "VerticalTab"
}
</script>
