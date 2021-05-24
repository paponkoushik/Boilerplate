<template>
    <div class="content-wrapper">
        <app-breadcrumb :page-title="$t('cards')" :directory="$t('ui_elements')" :icon="'trello'"/>

        <div class="row mb-primary">
            <div class="col-12">
                <div class="d-flex justify-content-between mb-3">
                    <h5>{{ $t('basic') }}</h5>
                    <!--copy button-->
                    <copy-button id="basic-card" :value="basicCardValue"/>
                </div>
                <div class="card card-with-search border-0 card-with-shadow">
                    <div class="card-body">
                        <div class="text-justify">
                            {{$t('card_content')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-primary">
            <div class="col-12">
                <div class="d-flex justify-content-between mb-3">
                    <h5>{{ $t('titled') }}</h5>
                    <!--copy button-->
                    <copy-button id="titled-card" :value="titledCardValue"/>
                </div>

                <div class="card card-with-search border-0 card-with-shadow">
                    <div class="card-header d-flex align-items-center p-primary bg-transparent">
                        <h5 class="card-title d-inline-block mb-0">{{$t('title')}}</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-justify">
                            {{$t('card_content')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Card With Header And Search...-->

        <div class="row mb-primary">
            <div class="col-12">
                <div class="d-flex justify-content-between mb-3">
                    <h5>{{ $t('searchable') }}</h5>
                    <!--copy button-->
                    <copy-button id="searchable-card" :value="searchableCardValue"/>
                </div>
                <div class="card card-with-search border-0 card-with-shadow">
                    <div class="card-header d-flex align-items-center p-primary bg-transparent">
                        <h5 class="card-title d-inline-block mb-0">{{$t('title')}}</h5>
                        <div class="form-group form-group-with-search d-flex align-items-center mb-0 ml-auto">
                            <app-search @input="getSearchValue"/>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-justify">
                            {{$t('card_content')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-primary">
            <div class="col-12">
                <div class="d-flex justify-content-between mb-3">
                    <h5>{{ $t('group_by') }}</h5>
                    <!--copy button-->
                    <copy-button id="group-by-card" :value="groupByCardValue"/>
                </div>
                <div class="card card-with-search border-0 card-with-shadow">
                    <div class="card-header d-flex justify-content-between align-items-center p-primary bg-transparent">
                        <h5 class="card-title d-inline-block mb-0">{{$t('title')}}</h5>
                        <ul class="nav tab-filter-menu justify-content-flex-end">
                            <li class="nav-item" v-for="(item, index) in chartFilterOptions" :key="index">
                                <a href="#"
                                   class="nav-link py-0"
                                   :class="[value == item.id ? 'active' : index === 0 && value === '' ? 'active': '']"
                                   @click="getFilterValue(item.id)">
                                    {{ item.value }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="text-justify">
                            {{$t('card_content')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-xl-3">
                <div class="d-flex justify-content-between mb-3">
                    <h5>{{$t('card')+$t('num_one')}}</h5>
                    <!--copy button-->
                    <copy-button id="special-card-one" :value="specialOneCardValue"/>
                </div>
                <div class="card card-with-search border-0 card-with-shadow mb-primary">
                    <div class="card-body">
                        <app-media-object :img-url="imgUrl" :media-title="$t('media_title')"
                                          :media-subtitle="$t('media_subtitle')"/>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="d-flex justify-content-between mb-3">
                    <h5>{{$t('card')+$t('num_two')}}</h5>
                    <!--copy button-->
                    <copy-button id="special-card-two" :value="specialTwoCardValue"/>
                </div>
                <app-widget class="mb-primary" :type="'app-widget-with-icon'" :label="$t('total_sales')" :number="70"
                            :icon="'layers'"/>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="d-flex justify-content-between mb-3">
                    <h5>{{$t('card')+$t('num_three')}}</h5>
                    <!--copy button-->
                    <copy-button id="special-card-three" :value="specialThreeCardValue"/>
                </div>
                <app-widget class="mb-primary" :type="'app-widget-without-icon'" :label="$t('total_loss')"
                            :number="10"/>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="d-flex justify-content-between mb-3">
                    <h5>{{$t('card')+$t('num_four')}}</h5>
                    <!--copy button-->
                    <copy-button id="special-card-four" :value="specialFourCardValue"/>
                </div>
                <app-widget class="mb-primary" :type="'app-widget-with-circle'" :label="$t('total_profit')"
                            :number="60"/>
            </div>

        </div>

    </div>

</template>

<script>
    import CopyButton from "../CopyButton";
    import {CardMixins} from "./CardMixins";

    export default {
        name: "Cards",
        components: {CopyButton},
        mixins: [CardMixins],
        data() {
            return {
                value: '',
                chartFilterOptions: [
                    {id: 'last_seven_days', value: 'Last 7 days'},
                    {id: 'this_week', value: 'This week'},
                    {id: 'last_week', value: 'Last week'},
                    {id: 'this_month', value: 'This month'},
                    {id: 'last_month', value: 'Last month'},
                    {id: 'this_year', value: 'This year'},
                    {id: 'total', value: 'Total'},
                ],
                // for media Object
                imgUrl: 'images/avatar-demo.jpg',
            }
        },
        methods: {
            getFilterValue(item) {
                this.value = item;
            },
            getSearchValue() {

            }
        }

    }
</script>
