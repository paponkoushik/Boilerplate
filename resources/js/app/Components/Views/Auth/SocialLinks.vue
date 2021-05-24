<template>
    <div v-if="componentLoader" class="position-relative h-100">
        <app-overlay-loader/>
    </div>
    <div v-else>
        <draggable tag="div"
                   v-model="socialLinks"
                   v-bind="dragOptions"
                   @start="dragstart($event)"
                   @end="dragend"
                   @change="change">
            <app-pre-loader v-if="!isActive"/>
            <div class="row py-half-primary"
                 v-else
                 v-for="(socialLink, index) in socialLinks"
                 :key="'social-link'+index">
                <div class="col-4 col-lg-4">
                    <div class="d-flex align-items-center">
                        <div class="cursor-grab mr-3">
                            <app-icon name="align-justify" class="text-muted"/>
                        </div>
                        <div>
                            <div class="icon-box mr-2" :key="socialLink.icon">
                                <app-icon :name="socialLink.icon"/>
                            </div>
                        </div>
                        {{ $t(socialLink.name) }}
                    </div>
                </div>
                <div class="col-7 col-lg-7 mt-2 mt-lg-0">
                    <div v-if="socialLink.link && !socialLink.edit"
                         :key="'with-link-'+index"
                         class="h-100 d-flex align-items-center justify-content-between">
                        <p class="mb-0 mr-2">{{ socialLink.link }}</p>
                        <div class="btn-group btn-group-action">
                            <button type="button"
                                    class="btn"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    :title="$t('edit')"
                                    @click.prevent="editToggle(index)">
                                <app-icon name="edit"/>
                            </button>
                            <button type="button"
                                    class="btn"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    :title="$t('remove_link')"
                                    @click.prevent="removeSocialLink(index)">
                                <app-icon name="trash"/>
                            </button>
                        </div>
                    </div>
                    <div v-else
                         class="h-100"
                         :key="'without-link-'+index">
                        <div v-if="socialLink.edit"
                             :key="'without-link-edit-'+index"
                             class="d-flex align-items-center h-100">
                            <app-input :id="'social-link-'+index"
                                       class="mr-2 flex-grow-1"
                                       type="text"
                                       v-model="socialLink.link"/>
                            <button type="submit"
                                    class="btn btn-primary mr-2"
                                    @click.prevent="addSocialLink(index)">
                                {{ $t('save') }}
                            </button>
                            <a href="#" class="text-muted" @click.prevent="editToggle(index)">
                                <app-icon name="x"/>
                            </a>
                        </div>
                        <div v-else
                             :key="'without-link-show-'+index"
                             class="d-flex align-items-center justify-content-end h-100">
                            <button type="submit" class="btn btn-primary"
                                    @click.prevent="editToggle(index)">
                                {{ $t('add') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </draggable>
    </div>
</template>

<script>
import draggable from 'vuedraggable';
import {FormMixin} from "../../../../core/mixins/form/FormMixin";
import GlobalHelperMixin from "../../../Mixins/global/GlobalHelperMixin";
import {UserMixin} from "./Mixins/UserMixin";
import {CHANGE_SOCIAL_LINKS} from "../../../Config/ApiUrl";

export default {
    name: "SocialLinks",
    components: {draggable},
    mixins: [FormMixin, UserMixin, GlobalHelperMixin],
    data() {
        return {
            isActive: false,
            socialLinks: []
        }
    },
    mounted() {
        setTimeout(() => {
            $('[data-toggle="tooltip"]').tooltip();
        }, 5000);
    },
    watch: {
        'user.socialLinks': {
            handler: 'setSocialLinks',
            immediate: true
        },
        componentLoader: function (value) {
            if (value == false) {
                setTimeout(() => {
                    let position = parseInt(localStorage.getItem('profileScrollPosition'));
                    if (position) {
                        window.scroll({
                            top: position,
                            left: 0,
                            behavior: 'smooth'
                        });
                    }
                    localStorage.removeItem('profileScrollPosition');
                });
            }
        }
    },
    computed: {
        dragOptions() {
            return {
                animation: 300
            };
        }
    },
    methods: {
        setSocialLinks() {
            this.isActive = false;
            this.socialLinks = [...this.user.socialLinks];
            this.isActive = true;
        },
        editToggle(index) {
            $('[data-toggle="tooltip"]').tooltip("hide");
            this.isActive = false;
            this.socialLinks[index].edit = !this.socialLinks[index].edit;
            this.isActive = true;
            setTimeout(() => {
                $('#social-link-' + index).focus();
            });
        },
        removeSocialLink(index) {
            $('[data-toggle="tooltip"]').tooltip("hide");
            this.isActive = false;
            this.socialLinks[index].link = null;
            this.isActive = true;
            this.update(this.socialLinks[index]);
        },
        addSocialLink(index) {
            this.isActive = false;
            this.socialLinks[index].edit = false;
            this.isActive = true;
            this.update(this.socialLinks[index]);
        },
        update(data) {
            localStorage.setItem('profileScrollPosition', window.scrollY + '');
            const url = CHANGE_SOCIAL_LINKS;
            this.axiosPost({
                url,
                data
            }).then(res => {
                this.$toastr.s(res.data.message);
                location.reload();
            }).catch(err => {
                this.$toastr.s(err.data.message);
            })
        },
        dragstart(ev) {
            this.drag = true;
            ev.target.classList.add('catch-container');
            ev.item.classList.add('catch-item');
        },
        dragend(ev) {
            this.drag = false;
            ev.target.classList.remove('catch-container');
            ev.item.classList.remove('catch-item');
        },
        change() {
        },
    }
}
</script>
