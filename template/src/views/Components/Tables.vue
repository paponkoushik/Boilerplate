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
                    <NormalFilter/>
                    <Datatable/>
                    <div>
                        <nav aria-label="Page navigation example" class="mt-5">
                            <ul class="pagination justify-content-center justify-content-md-end">
                                <li class="page-item disabled">
                                    <a class="page-link border-0" href="#" aria-label="Previous">
                                        <Icon :name="'arrow-left'"/>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link border-0 active" href="#">2</a></li>
                                <li class="page-item"><a class="page-link border-0" href="#">3</a></li>
                                <li class="page-item"><a class="page-link border-0" href="#">4</a></li>
                                <li class="page-item"><a class="page-link border-0" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link border-0 align-content-center" href="#" aria-label="Next">
                                        <Icon :name="'more-horizontal'" class="menu-arrow"/>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link border-0" href="#">9</a></li>
                                <li class="page-item">
                                    <a class="page-link border-0 align-content-center" href="#" aria-label="Next">
                                        <Icon :name="'arrow-right'" class="menu-arrow"/>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import CoreJS from '../../assets/js/core'
    import Datatable from "../../components/Datatable/Datatable";
    import NormalFilter from "../../components/Filters/NormalFilter";

    export default {
        name: "Tables",
        extends: CoreJS,
        components: {
           Datatable, NormalFilter
        },
    }
</script>
