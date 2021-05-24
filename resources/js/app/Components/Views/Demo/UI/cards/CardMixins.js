export const CardMixins = {
    data() {
        return {
            basicCardValue: `<div class="card card-with-search border-0 card-with-shadow">
                    <div class="card-body">
                        <div class="text-justify">
                            {{$t('card_content')}}
                        </div>
                    </div>
                </div>`,

            titledCardValue: `<div class="card card-with-search border-0 card-with-shadow">
                    <div class="card-header d-flex align-items-center p-primary bg-transparent">
                        <h5 class="card-title d-inline-block mb-0">{{$t('title')}}</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-justify">
                            {{$t('card_content')}}
                        </div>
                    </div>
                </div>`,

            searchableCardValue: `<div class="card card-with-search border-0 card-with-shadow">
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
                </div>`,

            groupByCardValue: `<div class="card card-with-search border-0 card-with-shadow">
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
                </div>`,

            specialOneCardValue: `<div class="card card-with-search border-0 card-with-shadow mb-primary">
                    <div class="card-body">
                        <app-media-object :img-url="imgUrl" :media-title="$t('media_title')"
                                          :media-subtitle="$t('media_subtitle')"/>
                    </div>
                </div>`,

            specialTwoCardValue: `<app-widget class="mb-primary" :type="'app-widget-with-icon'" :label="$t('total_sales')" :number="70"
                            :icon="'layers'"/>`,

            specialThreeCardValue: `<app-widget class="mb-primary" :type="'app-widget-without-icon'" :label="$t('total_loss')"
                            :number="10"/>`,

            specialFourCardValue: `<app-widget class="mb-primary" :type="'app-widget-with-circle'" :label="$t('total_profit')"
                            :number="60"/>`

        }
    }


};
