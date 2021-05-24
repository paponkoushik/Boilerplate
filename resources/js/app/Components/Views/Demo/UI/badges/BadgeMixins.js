export const BadgeMixins = {
    data(){
        return{
            badgesContextualValue: `<div class="card-body">
                <div class="mb-primary">
                    <h6>{{ $t('large') }}</h6>
                    <app-badge :label="$t('primary')" className="badge badge-primary badge-lg mr-2"/>
                    <app-badge :label="$t('secondary')" className="badge badge-secondary badge-lg mr-2"/>
                    <app-badge :label="$t('success')" className="badge badge-success badge-lg mr-2"/>
                    <app-badge :label="$t('danger')" className="badge badge-danger badge-lg mr-2"/>
                    <app-badge :label="$t('warning')" className="badge badge-warning badge-lg mr-2"/>
                    <app-badge :label="$t('info')" className="badge badge-info badge-lg mr-2"/>
                    <app-badge :label="$t('dark')" className="badge badge-dark badge-lg mr-2"/>
                </div>
                <div class="mb-primary">
                    <h6>{{ $t('medium') }}</h6>
                    <app-badge :label="$t('primary')" className="badge badge-primary mr-2"/>
                    <app-badge :label="$t('secondary')" className="badge badge-secondary mr-2"/>
                    <app-badge :label="$t('success')" className="badge badge-success mr-2"/>
                    <app-badge :label="$t('danger')" className="badge badge-danger mr-2"/>
                    <app-badge :label="$t('warning')" className="badge badge-warning mr-2"/>
                    <app-badge :label="$t('info')" className="badge badge-info mr-2"/>
                    <app-badge :label="$t('dark')" className="badge badge-dark mr-2"/>
                </div>
                <div class="">
                    <h6>{{ $t('small') }}</h6>
                    <app-badge :label="$t('primary')" className="badge badge-primary badge-sm mr-2"/>
                    <app-badge :label="$t('secondary')" className="badge badge-secondary badge-sm mr-2"/>
                    <app-badge :label="$t('success')" className="badge badge-success badge-sm mr-2"/>
                    <app-badge :label="$t('danger')" className="badge badge-danger badge-sm mr-2"/>
                    <app-badge :label="$t('warning')" className="badge badge-warning badge-sm mr-2"/>
                    <app-badge :label="$t('info')" className="badge badge-info badge-sm mr-2"/>
                    <app-badge :label="$t('dark')" className="badge badge-dark badge-sm mr-2"/>
                </div>
            </div>`,

            badgesNumericValue: `<div class="card-body">
                <div class="mb-primary">
                    <h6>{{ $t('large') }}</h6>
                    <app-badge :label="$t('num_one')" className="badge badge-primary badge-lg mr-2"/>
                    <app-badge :label="$t('num_two')" className="badge badge-secondary badge-lg mr-2"/>
                    <app-badge :label="$t('num_three')" className="badge badge-success badge-lg mr-2"/>
                    <app-badge :label="$t('num_four')" className="badge badge-danger badge-lg mr-2"/>
                    <app-badge :label="$t('num_five')" className="badge badge-warning badge-lg mr-2"/>
                    <app-badge :label="$t('num_six')" className="badge badge-info badge-lg mr-2"/>
                    <app-badge :label="$t('num_seven')" className="badge badge-dark badge-lg mr-2"/>
                </div>
                <div class="mb-primary">
                    <h6>{{ $t('medium') }}</h6>
                    <app-badge :label="$t('num_one')" className="badge badge-primary mr-2"/>
                    <app-badge :label="$t('num_two')" className="badge badge-secondary mr-2"/>
                    <app-badge :label="$t('num_three')" className="badge badge-success mr-2"/>
                    <app-badge :label="$t('num_four')" className="badge badge-danger mr-2"/>
                    <app-badge :label="$t('num_five')" className="badge badge-warning mr-2"/>
                    <app-badge :label="$t('num_six')" className="badge badge-info mr-2"/>
                    <app-badge :label="$t('num_seven')" className="badge badge-dark mr-2"/>
                </div>
                <div class="">
                    <h6>{{ $t('small') }}</h6>
                    <app-badge :label="$t('num_one')" className="badge badge-primary badge-sm mr-2"/>
                    <app-badge :label="$t('num_two')" className="badge badge-secondary badge-sm mr-2"/>
                    <app-badge :label="$t('num_three')" className="badge badge-success badge-sm mr-2"/>
                    <app-badge :label="$t('num_four')" className="badge badge-danger badge-sm mr-2"/>
                    <app-badge :label="$t('num_five')" className="badge badge-warning badge-sm mr-2"/>
                    <app-badge :label="$t('num_six')" className="badge badge-info badge-sm mr-2"/>
                    <app-badge :label="$t('num_seven')" className="badge badge-dark badge-sm mr-2"/>
                </div>
            </div>`,

            pillsContextualValue: `<div class="card-body">
                <div class="mb-primary">
                    <h6>{{ $t('large') }}</h6>
                    <app-badge :label="$t('primary')" className="badge badge-primary badge-lg badge-pill mr-2"/>
                    <app-badge :label="$t('secondary')" className="badge badge-secondary badge-lg badge-pill mr-2"/>
                    <app-badge :label="$t('success')" className="badge badge-success badge-lg badge-pill mr-2"/>
                    <app-badge :label="$t('danger')" className="badge badge-danger badge-lg badge-pill mr-2"/>
                    <app-badge :label="$t('warning')" className="badge badge-warning badge-lg badge-pill mr-2"/>
                    <app-badge :label="$t('info')" className="badge badge-info badge-lg badge-pill mr-2"/>
                    <app-badge :label="$t('dark')" className="badge badge-dark badge-lg badge-pill mr-2"/>
                </div>
                <div class="mb-primary">
                    <h6>{{ $t('medium') }}</h6>
                    <app-badge :label="$t('primary')" className="badge badge-primary badge-pill mr-2"/>
                    <app-badge :label="$t('secondary')" className="badge badge-secondary badge-pill mr-2"/>
                    <app-badge :label="$t('success')" className="badge badge-success badge-pill mr-2"/>
                    <app-badge :label="$t('danger')" className="badge badge-danger badge-pill mr-2"/>
                    <app-badge :label="$t('warning')" className="badge badge-warning badge-pill mr-2"/>
                    <app-badge :label="$t('info')" className="badge badge-info badge-pill mr-2"/>
                    <app-badge :label="$t('dark')" className="badge badge-dark badge-pill mr-2"/>
                </div>
                <div class="">
                    <h6>{{ $t('small') }}</h6>
                    <app-badge :label="$t('primary')" className="badge badge-primary badge-sm badge-pill mr-2"/>
                    <app-badge :label="$t('secondary')" className="badge badge-secondary badge-sm badge-pill mr-2"/>
                    <app-badge :label="$t('success')" className="badge badge-success badge-sm badge-pill mr-2"/>
                    <app-badge :label="$t('danger')" className="badge badge-danger badge-sm badge-pill mr-2"/>
                    <app-badge :label="$t('warning')" className="badge badge-warning badge-sm badge-pill mr-2"/>
                    <app-badge :label="$t('info')" className="badge badge-info badge-sm badge-pill mr-2"/>
                    <app-badge :label="$t('dark')" className="badge badge-dark badge-sm badge-pill mr-2"/>
                </div>
            </div>`,

            pillsNumericValue: `<div class="card-body">
                <div class="mb-primary">
                    <h6>{{ $t('large') }}</h6>
                    <app-badge :label="$t('num_one')" className="badge badge-primary badge-lg badge-pill mr-2"/>
                    <app-badge :label="$t('num_two')" className="badge badge-secondary badge-lg badge-pill mr-2"/>
                    <app-badge :label="$t('num_three')" className="badge badge-success badge-lg badge-pill mr-2"/>
                    <app-badge :label="$t('num_four')" className="badge badge-danger badge-lg badge-pill mr-2"/>
                    <app-badge :label="$t('num_five')" className="badge badge-warning badge-lg badge-pill mr-2"/>
                    <app-badge :label="$t('num_six')" className="badge badge-info badge-lg badge-pill mr-2"/>
                    <app-badge :label="$t('num_seven')" className="badge badge-dark badge-lg badge-pill mr-2"/>
                </div>
                <div class="mb-primary">
                    <h6>{{ $t('medium') }}</h6>
                    <app-badge :label="$t('num_one')" className="badge badge-primary badge-pill mr-2"/>
                    <app-badge :label="$t('num_two')" className="badge badge-secondary badge-pill mr-2"/>
                    <app-badge :label="$t('num_three')" className="badge badge-success badge-pill mr-2"/>
                    <app-badge :label="$t('num_four')" className="badge badge-danger badge-pill mr-2"/>
                    <app-badge :label="$t('num_five')" className="badge badge-warning badge-pill mr-2"/>
                    <app-badge :label="$t('num_six')" className="badge badge-info badge-pill mr-2"/>
                    <app-badge :label="$t('num_seven')" className="badge badge-dark badge-pill mr-2"/>
                </div>
                <div class="">
                    <h6>{{ $t('small') }}</h6>
                    <app-badge :label="$t('num_one')" className="badge badge-primary badge-sm badge-pill mr-2"/>
                    <app-badge :label="$t('num_two')" className="badge badge-secondary badge-sm badge-pill mr-2"/>
                    <app-badge :label="$t('num_three')" className="badge badge-success badge-sm badge-pill mr-2"/>
                    <app-badge :label="$t('num_four')" className="badge badge-danger badge-sm badge-pill mr-2"/>
                    <app-badge :label="$t('num_five')" className="badge badge-warning badge-sm badge-pill mr-2"/>
                    <app-badge :label="$t('num_six')" className="badge badge-info badge-sm badge-pill mr-2"/>
                    <app-badge :label="$t('num_seven')" className="badge badge-dark badge-sm badge-pill mr-2"/>
                </div>
            </div>`,
        }
    }
};
