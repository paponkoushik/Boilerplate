export const UiModalMixins = {
    data(){
        return{
            centeredModalValue: `<!--small modal start-->
                <button type="button" class="btn btn-primary mr-2" @click="smallModalCentered = true">
                    {{ $t('small') }}
                </button>
                <app-modal v-if="smallModalCentered" modal-id="small-modal-centered" modal-alignment="center"
                           modal-size="small" @close-modal="closeModal">

                    <template slot="header">
                        <h5 class="modal-title">{{ $t('small') }}</h5>
                        <button type="button" class="close outline-none" data-dismiss="modal" aria-label="Close">
                            <span>
                                <app-icon :name="'x'"></app-icon>
                            </span>
                        </button>
                    </template>

                    <template slot="body">
                        <p class="text-justify">{{ $t('modal_content_2') }}</p>
                    </template>

                    <template slot="footer">
                        <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal" @click="closeModal">
                            {{ $t('close') }}
                        </button>
                        <button type="button" class="btn btn-primary">{{ $t('save_changes') }}</button>
                    </template>
                </app-modal>


                <!--Default Medium modal start-->
                <button type="button" class="btn btn-primary mr-2"
                        @click="defaultModalCentered = true">{{ $t('medium') }}
                </button>
                <app-modal v-if="defaultModalCentered" modal-id="default-modal-centered" modal-alignment="center"
                           modal-size="default" @close-modal="closeModal">
                    <template slot="header">
                        <h5 class="modal-title">{{ $t('medium') }}</h5>
                        <button type="button" class="close outline-none" data-dismiss="modal" aria-label="Close">
                            <span>
                                <app-icon :name="'x'"></app-icon>
                            </span>
                        </button>
                    </template>

                    <template slot="body">
                        <p class="text-justify">{{ $t('modal_content') }}</p>
                    </template>

                    <template slot="footer">
                        <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal" @click="closeModal">
                            {{ $t('close') }}
                        </button>
                        <button type="button" class="btn btn-primary">{{ $t('save_changes') }}</button>
                    </template>
                </app-modal>


                <!--large modal start-->
                <button type="button" class="btn btn-primary mr-2"
                        @click="largeModalCentered = true">{{ $t('large') }}
                </button>
                <app-modal v-if="largeModalCentered" modal-id="large-modal-centered" modal-alignment="center"
                           modal-size="large" @close-modal="closeModal">

                    <template slot="header">
                        <h5 class="modal-title">{{ $t('large') }}</h5>
                        <button type="button" class="close outline-none" data-dismiss="modal" aria-label="Close">
                            <span>
                                <app-icon :name="'x'"></app-icon>
                            </span>
                        </button>
                    </template>

                    <template slot="body">
                        <p class="text-justify">{{ $t('modal_content') }}</p>
                    </template>

                    <template slot="footer">
                        <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal" @click="closeModal">
                            {{ $t('close') }}
                        </button>
                        <button type="button" class="btn btn-primary">{{ $t('save_changes') }}</button>
                    </template>
                </app-modal>

                <!--extra large modal start-->
                <button type="button" class="btn btn-primary mr-2"
                        @click="xlModalCentered = true">{{ $t('extra_large') }}
                </button>
                <app-modal v-if="xlModalCentered" modal-id="xl-modal-centered" modal-alignment="center"
                           modal-size="extra-large" @close-modal="closeModal">

                    <template slot="header">
                        <h5 class="modal-title">{{ $t('extra_large') }}</h5>
                        <button type="button" class="close outline-none" data-dismiss="modal" aria-label="Close">
                            <span>
                                <app-icon :name="'x'"></app-icon>
                            </span>
                        </button>
                    </template>

                    <template slot="body">
                        <p class="text-justify">
                            {{ $t('modal_content') }}
                        </p>
                    </template>

                    <template slot="footer">
                        <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal" @click="closeModal">
                            {{ $t('close') }}
                        </button>
                        <button type="button" class="btn btn-primary">{{ $t('save_changes') }}</button>
                    </template>
                </app-modal>

                <!--Full width modal start-->
                <button type="button" class="btn btn-primary mr-2"
                        @click="fullWidthModalCentered = true">{{ $t('full_width') }}
                </button>
                <app-modal v-if="fullWidthModalCentered" modal-id="full-width-modal-centered" modal-alignment="center"
                           modal-size="full-width" @close-modal="closeModal">

                    <template slot="header">
                        <h5 class="modal-title">{{ $t('full_width') }}</h5>
                        <button type="button" class="close outline-none" data-dismiss="modal" aria-label="Close">
                            <span>
                                <app-icon :name="'x'"></app-icon>
                            </span>
                        </button>
                    </template>

                    <template slot="body">
                        <p class="text-justify">
                            {{ $t('modal_content') }}
                        </p>
                    </template>

                    <template slot="footer">
                        <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal" @click="closeModal">
                            {{ $t('close') }}
                        </button>
                        <button type="button" class="btn btn-primary">{{ $t('save_changes') }}</button>
                    </template>
                </app-modal>`,

            topCenteredModalValue: `<!--small modal start-->
                <button type="button" class="btn btn-primary mr-2"
                        @click="smallModal = true">{{ $t('small') }}
                </button>
                <app-modal v-if="smallModal" modal-id="small-modal" modal-size="small" modal-alignment="top"
                           @close-modal="closeModal">

                    <template slot="header">
                        <h5 class="modal-title">{{ $t('small') }}</h5>
                        <button type="button" class="close outline-none" data-dismiss="modal" aria-label="Close">
                            <span>
                                <app-icon :name="'x'"></app-icon>
                            </span>
                        </button>
                    </template>

                    <template slot="body">
                        <p class="text-justify">{{ $t('modal_content_2') }}</p>
                    </template>

                    <template slot="footer">
                        <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal" @click="closeModal">
                            {{ $t('close') }}
                        </button>
                        <button type="button" class="btn btn-primary">{{ $t('save_changes') }}</button>
                    </template>
                </app-modal>

                <!--Default modal start-->
                <button type="button" class="btn btn-primary mr-2"
                        @click="defaultModal = true">{{ $t('medium') }}
                </button>
                <app-modal v-if="defaultModal" modal-id="default-modal" modal-size="default" modal-alignment="top"
                           @close-modal="closeModal">
                    <template slot="header">
                        <h5 class="modal-title">{{ $t('medium') }}</h5>
                        <button type="button" class="close outline-none" data-dismiss="modal" aria-label="Close">
                            <span>
                                <app-icon :name="'x'"></app-icon>
                            </span>
                        </button>
                    </template>

                    <template slot="body">
                        <p class="text-justify">{{ $t('modal_content') }}</p>
                    </template>

                    <template slot="footer">
                        <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal" @click="closeModal">
                            {{ $t('close') }}
                        </button>
                        <button type="button" class="btn btn-primary">{{ $t('save_changes') }}</button>
                    </template>
                </app-modal>

                <!--large modal start-->
                <button type="button" class="btn btn-primary mr-2"
                        @click="largeModal = true">{{ $t('large') }}
                </button>
                <app-modal v-if="largeModal" modal-id="large-modal" modal-size="large" modal-alignment="top"
                           @close-modal="closeModal">

                    <template slot="header">
                        <h5 class="modal-title">{{ $t('large') }}</h5>
                        <button type="button" class="close outline-none" data-dismiss="modal" aria-label="Close">
                            <span>
                                <app-icon :name="'x'"></app-icon>
                            </span>
                        </button>
                    </template>

                    <template slot="body">
                        <p class="text-justify">{{ $t('modal_content') }}</p>
                    </template>

                    <template slot="footer">
                        <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal" @click="closeModal">
                            {{ $t('close') }}
                        </button>
                        <button type="button" class="btn btn-primary">{{ $t('save_changes') }}</button>
                    </template>
                </app-modal>

                <!--extra large modal start-->
                <button type="button" class="btn btn-primary mr-2"
                        @click="xlModal = true">{{ $t('extra_large') }}
                </button>
                <app-modal v-if="xlModal" modal-id="xl-modal" modal-size="extra-large" modal-alignment="top"
                           @close-modal="closeModal">

                    <template slot="header">
                        <h5 class="modal-title">{{ $t('extra_large') }}</h5>
                        <button type="button" class="close outline-none" data-dismiss="modal" aria-label="Close">
                            <span>
                                <app-icon :name="'x'"></app-icon>
                            </span>
                        </button>
                    </template>

                    <template slot="body">
                        <p class="text-justify">
                            {{ $t('modal_content') }}
                        </p>
                    </template>

                    <template slot="footer">
                        <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal" @click="closeModal">
                            {{ $t('close') }}
                        </button>
                        <button type="button" class="btn btn-primary">{{ $t('save_changes') }}</button>
                    </template>
                </app-modal>
                <!--Full height modal start-->
                <button type="button" class="btn btn-primary mr-2"
                        @click="fullHeight = true">{{ $t('full_height') }}
                </button>
                <app-modal v-if="fullHeight" modal-id="full-height-modal" modal-size="default" modal-alignment="top"
                           @close-modal="closeModal">

                    <template slot="header">
                        <h5 class="modal-title">{{ $t('full_height') }}</h5>
                        <button type="button" class="close outline-none" data-dismiss="modal" aria-label="Close">
                            <span>
                                <app-icon :name="'x'"></app-icon>
                            </span>
                        </button>
                    </template>

                    <template slot="body">
                        <p class="text-justify">
                            {{ $t('modal_content')+$t('modal_content')+$t('modal_content') }}
                        </p>
                    </template>

                    <template slot="footer">
                        <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal" @click="closeModal">
                            {{ $t('close') }}
                        </button>
                        <button type="button" class="btn btn-primary">{{ $t('save_changes') }}</button>
                    </template>
                </app-modal>
`,

            specialModalValue: `<div class="card-body">
                <!--Full screen modal start-->
                <button type="button" class="btn btn-primary mr-2" @click="fullScreen = true">
                    {{ $t('full_screen') }}
                </button>
                <app-modal v-if="fullScreen"
                           modal-id="full-screen-modal"
                           modal-size="fullscreen"
                           @close-modal="closeModal">
                    <template slot="header">
                        <h5 class="modal-title">{{ $t('full_screen') }}</h5>
                        <button type="button" class="close outline-none" data-dismiss="modal" aria-label="Close">
                            <span>
                                <app-icon :name="'x'"></app-icon>
                            </span>
                        </button>
                    </template>

                    <template slot="body">
                        <p class="text-justify">
                            {{ $t('modal_content') }}
                        </p>
                    </template>

                    <template slot="footer">
                        <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal" @click="closeModal">
                            {{ $t('close') }}
                        </button>
                        <button type="button" class="btn btn-primary">{{ $t('save_changes') }}</button>
                    </template>
                </app-modal>

                <!--Confirmed modal start-->
                <button type="button" class="btn btn-success mr-2"
                        @click="confirmedModal = true">{{ $t('confirm') }}
                </button>
                <app-modal v-if="confirmedModal"
                           modal-id="confirm-modal"
                           modal-alignment="center"
                           modal-size="md"
                           @close-modal="closeModal">
                    <div class="modal-body d-flex flex-column justify-content-center modal-alert">
                        <div class="text-center">
                            <app-icon class="text-success text-center" :name="'check-circle'"/>
                        </div>
                        <h5 class="text-center font-weight-bold mt-4">{{ $t('congratulation') }}</h5>
                        <p class="text-center mb-4 font-size-90">{{ $t('confirm_text') }}</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-success" data-dismiss="modal" @click="closeModal">{{ $t('continue') }}</a>
                        </div>
                    </div>
                </app-modal>

                <!--Alert modal start-->
                <button type="button" class="btn btn-warning mr-2" @click="alertModal = true">
                    {{ $t('alert') }}
                </button>
                <app-modal v-if="alertModal"
                           modal-id="alert-modal"
                           modal-alignment="center"
                           modal-size="md"
                           @close-modal="closeModal">
                    <div class="modal-body d-flex flex-column justify-content-center modal-alert">
                        <div class="text-center">
                            <app-icon class="text-warning" :name="'alert-triangle'"/>
                        </div>
                        <h5 class="text-center font-weight-bold mt-4">{{ $t('alert')+'!' }}</h5>
                        <p class="text-center mb-4 font-size-90">{{ $t('alert_text') }}</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-warning" data-dismiss="modal" @click="closeModal">
                                {{ $t('continue') }}
                            </a>
                        </div>
                    </div>
                </app-modal>

                <!--Delete modal start-->
                <button type="button" class="btn btn-danger mr-2" @click="deleteModal=true">
                    {{ $t('delete')}}
                </button>
                <app-confirmation-modal v-if="deleteModal"
                                        modal-id="delete"
                                        @confirmed="confirmed"
                                        @cancelled="cancelled"/>
            </div>`
        }
    }
};
