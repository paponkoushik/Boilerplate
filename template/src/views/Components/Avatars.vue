<template>
    <div class="container-scroller">
        <!--Top Navbar-->
        <Navbar/>

        <!--Sidebar-->
        <Sidebar/>

        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <Breadcrumb/>
                    <!--Single avatars with status-->
                    <div class="card card-with-shadow border-0 mb-primary">
                        <div class="card-header bg-transparent p-primary">
                            <h4 class="card-title mb-0">Avatars with status</h4>
                        </div>
                        <div class="card-body d-flex align-items-center">
                            <div class="avatars-w-100 mr-2">
                                <img class="rounded-circle"
                                     src="https://images.unsplash.com/photo-1506919258185-6078bba55d2a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                                <span class="status bg-success"/>
                            </div>
                            <div class="avatars-w-90 mr-2">
                                <img class="rounded-circle"
                                     src="https://images.unsplash.com/photo-1506919258185-6078bba55d2a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                                <span class="status bg-primary"/>
                            </div>
                            <div class="avatars-w-80 mr-2">
                                <img class="rounded-circle"
                                     src="https://images.unsplash.com/photo-1506919258185-6078bba55d2a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                                <span class="status bg-warning"/>
                            </div>
                            <div class="avatars-w-70 mr-2">
                                <img class="rounded-circle"
                                     src="https://images.unsplash.com/photo-1506919258185-6078bba55d2a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                                <span class="status bg-danger"/>
                            </div>
                            <div class="avatars-w-60 mr-2">
                                <img class="rounded-circle"
                                     src="https://images.unsplash.com/photo-1506919258185-6078bba55d2a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                                <span class="status bg-info"/>
                            </div>
                            <div class="avatars-w-50 mr-2">
                                <img class="rounded-circle"
                                     src="https://images.unsplash.com/photo-1506919258185-6078bba55d2a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                                <span class="status bg-primary"/>
                            </div>
                            <div class="avatars-w-40 mr-2">
                                <img class="rounded-circle"
                                     src="https://images.unsplash.com/photo-1506919258185-6078bba55d2a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                                <span class="status bg-secondary"/>
                            </div>
                            <div class="avatars-w-30 mr-2">
                                <img class="rounded-circle"
                                     src="https://images.unsplash.com/photo-1506919258185-6078bba55d2a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                                <span class="status bg-success"/>
                            </div>
                            <div class="avatars-w-20 mr-2">
                                <img class="rounded-circle"
                                     src="https://images.unsplash.com/photo-1506919258185-6078bba55d2a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                                <span class="status bg-success"/>
                            </div>

                        </div>
                    </div>

                    <!--Single avatars no image-->
                    <div class="card card-with-shadow border-0 mb-primary">
                        <div class="card-header bg-transparent p-primary">
                            <h4 class="card-title mb-0">Single Avatars - No image</h4>
                        </div>
                        <div class="card-body d-flex align-items-center">
                            <div class="avatars-w-100">
                                <div class="no-img rounded-circle">AV</div>
                            </div>
                            <div class="avatars-w-90 ml-2">
                                <div class="no-img rounded-circle">AV</div>
                            </div>
                            <div class="avatars-w-80 ml-2">
                                <div class="no-img rounded-circle">AV</div>
                            </div>
                            <div class="avatars-w-70 ml-2">
                                <div class="no-img rounded-circle">AV</div>
                            </div>
                            <div class="avatars-w-60 ml-2">
                                <div class="no-img rounded-circle">AV</div>
                            </div>
                            <div class="avatars-w-50 ml-2">
                                <div class="no-img rounded-circle">AV</div>
                            </div>
                            <div class="avatars-w-40 ml-2">
                                <div class="no-img rounded-circle">AV</div>
                            </div>
                            <div class="avatars-w-30 ml-2">
                                <div class="no-img rounded-circle">AV</div>
                            </div>
                            <div class="avatars-w-20 ml-2">
                                <div class="no-img rounded-circle">AV</div>
                            </div>
                        </div>
                    </div>

                    <!--Single avatars-->
                    <div class="card card-with-shadow border-0 mb-primary">
                        <div class="card-header bg-transparent p-primary">
                            <h4 class="card-title mb-0">Single Avatars</h4>
                        </div>
                        <div class="card-body d-flex align-items-center">
                            <div class="avatars-w-100">
                                <img class="rounded-circle"
                                     src="https://images.unsplash.com/photo-1506919258185-6078bba55d2a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                            </div>
                            <div class="avatars-w-90 ml-2">
                                <img class="rounded-circle"
                                     src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                            </div>
                            <div class="avatars-w-80 ml-2">
                                <img class="rounded-circle"
                                     src="https://images.unsplash.com/photo-1565464027194-7957a2295fb7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                            </div>
                            <div class="avatars-w-70 ml-2">
                                <img class="rounded-circle"
                                     src="https://images.unsplash.com/photo-1581791538302-03537b9c97bf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                            </div>
                            <div class="avatars-w-60 ml-2">
                                <img class="rounded-circle"
                                     src="https://images.unsplash.com/photo-1568725624707-9d968f934b75?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                            </div>
                            <div class="avatars-w-50 ml-2">
                                <img class="rounded-circle"
                                     src="https://images.unsplash.com/photo-1570128641432-a1520efe3b1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                            </div>
                            <div class="avatars-w-40 ml-2">
                                <img class="rounded-circle"
                                     src="https://images.unsplash.com/photo-1565464027398-8f98698f6d52?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                            </div>
                            <div class="avatars-w-30 ml-2">
                                <img class="rounded-circle"
                                     src="https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                            </div>
                            <div class="avatars-w-20 ml-2">
                                <img class="rounded-circle"
                                     src="https://images.unsplash.com/photo-1569779213435-ba3167dde7cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                            </div>
                        </div>
                    </div>

                    <!--Single avatars with shadow...-->
                    <div class="card card-with-shadow border-0 mb-primary">
                        <div class="card-header bg-transparent p-primary">
                            <h4 class="card-title mb-0">Single Avatars With Bordered Shadow</h4>
                        </div>
                        <div class="card-body">
                            <div class="avatars-with-shadow d-flex align-items-center">
                                <div class="avatars-w-100">
                                    <img class="avatar-shadow avatar-bordered rounded-circle"
                                         src="https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                         alt="">
                                </div>
                                <div class="avatars-w-90 ml-2">
                                    <img class="avatar-shadow avatar-bordered rounded-circle"
                                         src="https://images.unsplash.com/photo-1569779213435-ba3167dde7cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                         alt="">
                                </div>
                                <div class="avatars-w-80 ml-2">
                                    <img class="avatar-shadow avatar-bordered rounded-circle"
                                         src="https://images.unsplash.com/photo-1565464027398-8f98698f6d52?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                         alt="">
                                </div>
                                <div class="avatars-w-70 ml-2">
                                    <img class="avatar-shadow avatar-bordered rounded-circle"
                                         src="https://images.unsplash.com/photo-1581791538302-03537b9c97bf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                         alt="">
                                </div>
                                <div class="avatars-w-60 ml-2">
                                    <img class="avatar-shadow avatar-bordered rounded-circle"
                                         src="https://images.unsplash.com/photo-1569779213435-ba3167dde7cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                         alt="">
                                </div>
                                <div class="avatars-w-50 ml-2">
                                    <img class="avatar-shadow avatar-bordered rounded-circle"
                                         src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                         alt="">
                                </div>
                                <div class="avatars-w-40 ml-2">
                                    <img class="avatar-shadow avatar-bordered rounded-circle"
                                         src="https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                         alt="">
                                </div>
                                <div class="avatars-w-30 ml-2">
                                    <img class="avatar-shadow avatar-bordered rounded-circle"
                                         src="https://images.unsplash.com/photo-1565464027194-7957a2295fb7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                         alt="">
                                </div>
                                <div class="avatars-w-20 ml-2">
                                    <img class="avatar-shadow avatar-bordered rounded-circle"
                                         src="https://images.unsplash.com/photo-1569779213435-ba3167dde7cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                         alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Single avatars with shadow...-->
                    <div class="card card-with-shadow border-0 mb-primary">
                        <div class="card-header bg-transparent p-primary">
                            <h4 class="card-title mb-0">Single Avatars With Only Shadow</h4>
                        </div>
                        <div class="card-body">
                            <div class="avatars-with-shadow d-flex align-items-center">
                                <div class="avatars-w-100">
                                    <img class="avatar-shadow rounded-circle"
                                         src="https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                         alt="">
                                </div>
                                <div class="avatars-w-90 ml-2">
                                    <img class="avatar-shadow rounded-circle"
                                         src="https://images.unsplash.com/photo-1569779213435-ba3167dde7cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                         alt="">
                                </div>
                                <div class="avatars-w-80 ml-2">
                                    <img class="avatar-shadow rounded-circle"
                                         src="https://images.unsplash.com/photo-1565464027398-8f98698f6d52?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                         alt="">
                                </div>
                                <div class="avatars-w-70 ml-2">
                                    <img class="avatar-shadow rounded-circle"
                                         src="https://images.unsplash.com/photo-1581791538302-03537b9c97bf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                         alt="">
                                </div>
                                <div class="avatars-w-60 ml-2">
                                    <img class="avatar-shadow rounded-circle"
                                         src="https://images.unsplash.com/photo-1569779213435-ba3167dde7cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                         alt="">
                                </div>
                                <div class="avatars-w-50 ml-2">
                                    <img class="avatar-shadow rounded-circle"
                                         src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                         alt="">
                                </div>
                                <div class="avatars-w-40 ml-2">
                                    <img class="avatar-shadow rounded-circle"
                                         src="https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                         alt="">
                                </div>
                                <div class="avatars-w-30 ml-2">
                                    <img class="avatar-shadow rounded-circle"
                                         src="https://images.unsplash.com/photo-1565464027194-7957a2295fb7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                         alt="">
                                </div>
                                <div class="avatars-w-20 ml-2">
                                    <img class="avatar-shadow rounded-circle"
                                         src="https://images.unsplash.com/photo-1569779213435-ba3167dde7cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                         alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--avatars group with media object-->

                    <div class="card card-with-shadow border-0 mb-primary">
                        <div class="card-header bg-transparent p-primary">
                            <h4 class="card-title mb-0">Avatars group with media object</h4>
                        </div>
                        <div class="card-body">
                            <div class="avatars-group-w-60 avatar-group avatars-with-shadow p-2">
                                <img class="shadow rounded-circle"
                                     src="https://images.unsplash.com/photo-1569779213435-ba3167dde7cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="AV">
                                <img class="shadow rounded-circle"
                                     src="https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                                <img class="shadow rounded-circle"
                                     src="https://images.unsplash.com/photo-1581791538302-03537b9c97bf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                                <img class="shadow rounded-circle"
                                     src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                                <img class="shadow rounded-circle"
                                     src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                                <a class="pl-3 text-muted" data-toggle="collapse" href="#avatarsGroupExample"
                                   aria-expanded="false" aria-controls="avatarsGroupExample">+ 10
                                    more</a>
                            </div>

                            <div class="collapse multi-collapse" id="avatarsGroupExample">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-between">
                                        <div class="p-2">
                                            <div class="media d-flex align-items-center pt-2">
                                                <div class="avatars-group-w-60 avatars-with-shadow">
                                                    <img class="shadow rounded-circle"
                                                         src="../../assets/images/avatar-demo.jpg"
                                                         alt="altText">
                                                </div>
                                                <div class="media-body ml-3">
                                                    Happy daughter
                                                    <p class="text-muted font-size-90 mb-0">Junior Web Developer</p>
                                                </div>
                                            </div>
                                            <div class="media d-flex align-items-center pt-2">
                                                <div class="avatars-group-w-60 avatars-with-shadow">
                                                    <img class="shadow rounded-circle"
                                                         src="../../assets/images/avatar-demo.jpg"
                                                         alt="altText">
                                                </div>
                                                <div class="media-body ml-3">
                                                    Happy daughter
                                                    <p class="text-muted font-size-90 mb-0">Junior Web Developer</p>
                                                </div>
                                            </div>
                                            <div class="media d-flex align-items-center pt-2">
                                                <div class="avatars-group-w-60 avatars-with-shadow">
                                                    <img class="shadow rounded-circle"
                                                         src="../../assets/images/avatar-demo.jpg"
                                                         alt="altText">
                                                </div>
                                                <div class="media-body ml-3">
                                                    Happy daughter
                                                    <p class="text-muted font-size-90 mb-0">Junior Web Developer</p>
                                                </div>
                                            </div>
                                            <div class="media d-flex align-items-center pt-2">
                                                <div class="avatars-group-w-60 avatars-with-shadow">
                                                    <img class="shadow rounded-circle"
                                                         src="../../assets/images/avatar-demo.jpg"
                                                         alt="altText">
                                                </div>
                                                <div class="media-body ml-3">
                                                    Happy daughter
                                                    <p class="text-muted font-size-90 mb-0">Junior Web Developer</p>
                                                </div>
                                            </div>
                                            <div class="media d-flex align-items-center pt-2">
                                                <div class="avatars-group-w-60 avatars-with-shadow">
                                                    <img class="shadow rounded-circle"
                                                         src="../../assets/images/avatar-demo.jpg"
                                                         alt="altText">
                                                </div>
                                                <div class="media-body ml-3">
                                                    Happy daughter
                                                    <p class="text-muted font-size-90 mb-0">Junior Web Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="mt-4 pt-2" data-toggle="collapse"
                                           href="#avatarsGroupExample"
                                           aria-expanded="false" aria-controls="avatarsGroupExample">
                                            <Icon :name="'maximize-2'"/>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--avatars group with media object no image-->

                    <div class="card card-with-shadow border-0 mb-primary">
                        <div class="card-header bg-transparent p-primary">
                            <h4 class="card-title mb-0">Avatars group with media object - No Image -(Bordered-Shadow)</h4>
                        </div>
                        <div class="card-body">
                            <div class="avatars-group-w-60 avatar-group avatars-with-shadow p-2">
                                <div class="no-img avatar-shadow avatar-bordered rounded-circle">AV</div>
                                <img class="avatar-shadow avatar-bordered rounded-circle"
                                     src="https://images.unsplash.com/photo-1569779213435-ba3167dde7cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="AV">
                                <div class="no-img avatar-shadow avatar-bordered rounded-circle">AV</div>
                                <img class="avatar-shadow avatar-bordered rounded-circle"
                                     src="https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                                <img class="avatar-shadow avatar-bordered rounded-circle"
                                     src="https://images.unsplash.com/photo-1581791538302-03537b9c97bf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                                <img class="avatar-shadow avatar-bordered rounded-circle"
                                     src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                                <div class="no-img avatar-shadow avatar-bordered rounded-circle">AV</div>
                                <img class="avatar-shadow avatar-bordered rounded-circle"
                                     src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                                <div class="no-img avatar-shadow avatar-bordered rounded-circle">AV</div>
                                <div class="no-img avatar-shadow avatar-bordered rounded-circle">AV</div>
                                <a class="pl-3 text-muted" data-toggle="collapse" href="#avatarsGroupExample-2"
                                   aria-expanded="false" aria-controls="avatarsGroupExample">+ 10
                                    more</a>
                            </div>

                            <div class="collapse multi-collapse" id="avatarsGroupExample-2">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-between">
                                        <div class="p-2">
                                            <div class="media d-flex align-items-center pt-2">
                                                <div class="avatars-group-w-60 avatars-with-shadow">
                                                    <div class="no-img avatar-shadow avatar-bordered rounded-circle">AV</div>
                                                </div>
                                                <div class="media-body ml-3">
                                                    Happy daughter
                                                    <p class="text-muted font-size-90 mb-0">Junior Web Developer</p>
                                                </div>
                                            </div>
                                            <div class="media d-flex align-items-center pt-2">
                                                <div class="avatars-group-w-60 avatars-with-shadow">
                                                    <img class="avatar-shadow avatar-bordered rounded-circle"
                                                         src="../../assets/images/avatar-demo.jpg"
                                                         alt="altText">
                                                </div>
                                                <div class="media-body ml-3">
                                                    Happy daughter
                                                    <p class="text-muted font-size-90 mb-0">Junior Web Developer</p>
                                                </div>
                                            </div>
                                            <div class="media d-flex align-items-center pt-2">
                                                <div class="avatars-group-w-60 avatars-with-shadow">
                                                    <img class="avatar-shadow avatar-bordered rounded-circle"
                                                         src="../../assets/images/avatar-demo.jpg"
                                                         alt="altText">
                                                </div>
                                                <div class="media-body ml-3">
                                                    Happy daughter
                                                    <p class="text-muted font-size-90 mb-0">Junior Web Developer</p>
                                                </div>
                                            </div>
                                            <div class="media d-flex align-items-center pt-2">
                                                <div class="avatars-group-w-60 avatars-with-shadow">
                                                    <img class="avatar-shadow avatar-bordered rounded-circle"
                                                         src="../../assets/images/avatar-demo.jpg"
                                                         alt="altText">
                                                </div>
                                                <div class="media-body ml-3">
                                                    Happy daughter
                                                    <p class="text-muted font-size-90 mb-0">Junior Web Developer</p>
                                                </div>
                                            </div>
                                            <div class="media d-flex align-items-center pt-2">
                                                <div class="avatars-group-w-60 avatars-with-shadow">
                                                    <img class="avatar-shadow avatar-bordered rounded-circle"
                                                         src="../../assets/images/avatar-demo.jpg"
                                                         alt="altText">
                                                </div>
                                                <div class="media-body ml-3">
                                                    Happy daughter
                                                    <p class="text-muted font-size-90 mb-0">Junior Web Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="mt-4 pt-2" data-toggle="collapse"
                                           href="#avatarsGroupExample-2"
                                           aria-expanded="false" aria-controls="avatarsGroupExample">
                                            <Icon :name="'maximize-2'"/>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--avatars group with media object no image-->

                    <div class="card card-with-shadow border-0 mb-primary">
                        <div class="card-header bg-transparent p-primary">
                            <h4 class="card-title mb-0">Avatars group with media object - No Image - (Only Shadow)</h4>
                        </div>
                        <div class="card-body">
                            <div class="avatars-group-w-60 avatar-group avatars-with-shadow p-2">
                                <div class="no-img avatar-shadow rounded-circle">AV</div>
                                <img class="avatar-shadow rounded-circle"
                                     src="https://images.unsplash.com/photo-1569779213435-ba3167dde7cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="AV">
                                <div class="no-img avatar-shadow rounded-circle">AV</div>
                                <img class="avatar-shadow rounded-circle"
                                     src="https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                                <img class="avatar-shadow rounded-circle"
                                     src="https://images.unsplash.com/photo-1581791538302-03537b9c97bf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                                <img class="avatar-shadow rounded-circle"
                                     src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                                <div class="no-img avatar-shadow rounded-circle">AV</div>
                                <img class="avatar-shadow rounded-circle"
                                     src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                     alt="">
                                <div class="no-img avatar-shadow rounded-circle">AV</div>
                                <div class="no-img avatar-shadow rounded-circle">AV</div>
                                <a class="pl-3 text-muted" data-toggle="collapse" href="#avatarsGroupExample-3"
                                   aria-expanded="false" aria-controls="avatarsGroupExample">+ 10
                                    more</a>
                            </div>

                            <div class="collapse multi-collapse" id="avatarsGroupExample-3">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-between">
                                        <div class="p-2">
                                            <div class="media d-flex align-items-center pt-2">
                                                <div class="avatars-group-w-60 avatars-with-shadow">
                                                    <div class="no-img avatar-shadow rounded-circle">AV</div>
                                                </div>
                                                <div class="media-body ml-3">
                                                    Happy daughter
                                                    <p class="text-muted font-size-90 mb-0">Junior Web Developer</p>
                                                </div>
                                            </div>
                                            <div class="media d-flex align-items-center pt-2">
                                                <div class="avatars-group-w-60 avatars-with-shadow">
                                                    <img class="avatar-shadow rounded-circle"
                                                         src="../../assets/images/avatar-demo.jpg"
                                                         alt="altText">
                                                </div>
                                                <div class="media-body ml-3">
                                                    Happy daughter
                                                    <p class="text-muted font-size-90 mb-0">Junior Web Developer</p>
                                                </div>
                                            </div>
                                            <div class="media d-flex align-items-center pt-2">
                                                <div class="avatars-group-w-60 avatars-with-shadow">
                                                    <img class="avatar-shadow rounded-circle"
                                                         src="../../assets/images/avatar-demo.jpg"
                                                         alt="altText">
                                                </div>
                                                <div class="media-body ml-3">
                                                    Happy daughter
                                                    <p class="text-muted font-size-90 mb-0">Junior Web Developer</p>
                                                </div>
                                            </div>
                                            <div class="media d-flex align-items-center pt-2">
                                                <div class="avatars-group-w-60 avatars-with-shadow">
                                                    <img class="avatar-shadow rounded-circle"
                                                         src="../../assets/images/avatar-demo.jpg"
                                                         alt="altText">
                                                </div>
                                                <div class="media-body ml-3">
                                                    Happy daughter
                                                    <p class="text-muted font-size-90 mb-0">Junior Web Developer</p>
                                                </div>
                                            </div>
                                            <div class="media d-flex align-items-center pt-2">
                                                <div class="avatars-group-w-60 avatars-with-shadow">
                                                    <img class="avatar-shadow rounded-circle"
                                                         src="../../assets/images/avatar-demo.jpg"
                                                         alt="altText">
                                                </div>
                                                <div class="media-body ml-3">
                                                    Happy daughter
                                                    <p class="text-muted font-size-90 mb-0">Junior Web Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="mt-4 pt-2" data-toggle="collapse"
                                           href="#avatarsGroupExample-3"
                                           aria-expanded="false" aria-controls="avatarsGroupExample">
                                            <Icon :name="'maximize-2'"/>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import CoreJS from '../../assets/js/core'

    export default {
        name: "Avatars",
        extends: CoreJS,
    }
</script>
