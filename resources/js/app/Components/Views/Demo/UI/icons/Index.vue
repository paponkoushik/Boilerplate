<template>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-8 col-lg-8 col-xl-9">
                <app-breadcrumb :page-title="$t('icons')" :directory="$t('ui_elements')" :icon="'trello'"/>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                <div class="single-search-wrapper">
                    <div class="form-group form-group-with-search d-flex align-items-center">
                        <span class="form-control-feedback">
                            <app-icon name="search"/>
                        </span>
                        <input type="text" class="form-control" v-model="searchValue" :placeholder="$t('search')">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-sm-4 col-md-3 col-xl-2 mb-primary" v-for="(icon, index) in showIcon"
                 :key="index">
                <div class="card card-with-shadow border-0 h-100">
                    <a href="#"
                       class="default-font-color"
                       data-toggle="tooltip"
                       data-placement="top"
                       :data-copy="icon"
                       :title="$t('copy_icon_to_clipboard')"
                       @click.prevent="copyIconDom('copy-icon-dom',icon)">
                        <div class="card-body text-center">
                            <span :key="icon">
                                <app-icon :name="icon"/>
                            </span>
                            <h6 class="mt-primary text-center">{{ icon }}</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <textarea type="text"
                  class="d-none"
                  id="copy-icon-dom"
                  readonly="readonly">
            {{ iconDomValue }}
        </textarea>
    </div>
</template>

<script>
    import CopyToClipboard from "../../../../../Helpers/CopyToClipboard";

    export default {
        name: "Index",
        data() {
            return {
                searchValue: '',
                allIcons: [
                    'activity',
                    'airplay',
                    'alert-circle',
                    'alert-octagon',
                    'alert-triangle',
                    'align-center',
                    'align-justify',
                    'align-left',
                    'align-right',
                    'anchor',
                    'aperture',
                    'arrow-down-left',
                    'arrow-down-right',
                    'arrow-down',
                    'arrow-left',
                    'arrow-right',
                    'arrow-up-left',
                    'arrow-up-right',
                    'arrow-up',
                    'at-sign',
                    'award',
                    'bar-chart-2',
                    'bar-chart',
                    'battery-charging',
                    'battery',
                    'bell-off',
                    'bell',
                    'bluetooth',
                    'bold',
                    'book',
                    'bookmark',
                    'box',
                    'briefcase',
                    'calendar',
                    'camera-off',
                    'camera',
                    'cast',
                    'check-circle',
                    'check-square',
                    'check',
                    'chevron-down',
                    'chevron-left',
                    'chevron-right',
                    'chevron-up',
                    'chevrons-down',
                    'chevrons-left',
                    'chevrons-right',
                    'chevrons-up',
                    'chrome',
                    'circle',
                    'clipboard',
                    'clock',
                    'cloud-drizzle',
                    'cloud-lightning',
                    'cloud-off',
                    'cloud-rain',
                    'cloud-snow',
                    'cloud',
                    'codepen',
                    'command',
                    'compass',
                    'copy',
                    'corner-down-left',
                    'corner-down-right',
                    'corner-left-down',
                    'corner-left-up',
                    'corner-right-down',
                    'corner-right-up',
                    'corner-up-left',
                    'corner-up-right',
                    'cpu',
                    'credit-card',
                    'crop',
                    'crosshair',
                    'delete',
                    'disc',
                    'download-cloud',
                    'download',
                    'droplet',
                    'edit-2',
                    'edit-3',
                    'edit',
                    'external-link',
                    'eye-off',
                    'eye',
                    'facebook',
                    'fast-forward',
                    'feather',
                    'file-minus',
                    'file-plus',
                    'file-text',
                    'file',
                    'film',
                    'filter',
                    'flag',
                    'folder',
                    'github',
                    'gitlab',
                    'globe',
                    'grid',
                    'hash',
                    'headphones',
                    'heart',
                    'help-circle',
                    'home',
                    'image',
                    'inbox',
                    'info',
                    'instagram',
                    'italic',
                    'layers',
                    'layout',
                    'life-buoy',
                    'link-2',
                    'link',
                    'list',
                    'loader',
                    'lock',
                    'log-in',
                    'log-out',
                    'mail',
                    'map-pin',
                    'map',
                    'maximize-2',
                    'maximize',
                    'menu',
                    'message-circle',
                    'message-square',
                    'mic-off',
                    'mic',
                    'minimize-2',
                    'minimize',
                    'minus-circle',
                    'minus-square',
                    'minus',
                    'monitor',
                    'moon',
                    'more-horizontal',
                    'more-vertical',
                    'move',
                    'music',
                    'navigation-2',
                    'navigation',
                    'octagon',
                    'package',
                    'paperclip',
                    'pause-circle',
                    'pause',
                    'percent',
                    'phone-call',
                    'phone-forwarded',
                    'phone-incoming',
                    'phone-missed',
                    'phone-off',
                    'phone-outgoing',
                    'phone',
                    'pie-chart',
                    'play-circle',
                    'play',
                    'plus-circle',
                    'plus-square',
                    'plus',
                    'pocket',
                    'power',
                    'printer',
                    'radio',
                    'refresh-ccw',
                    'refresh-cw',
                    'repeat',
                    'rewind',
                    'rotate-ccw',
                    'rotate-cw',
                    'save',
                    'scissors',
                    'search',
                    'server',
                    'settings',
                    'share-2',
                    'share',
                    'shield',
                    'shopping-cart',
                    'shuffle',
                    'sidebar',
                    'skip-back',
                    'skip-forward',
                    'slack',
                    'slash',
                    'sliders',
                    'smartphone',
                    'speaker',
                    'square',
                    'star',
                    'stop-circle',
                    'sun',
                    'sunrise',
                    'sunset',
                    'tablet',
                    'tag',
                    'target',
                    'thermometer',
                    'thumbs-down',
                    'thumbs-up',
                    'toggle-left',
                    'toggle-right',
                    'trash-2',
                    'trash',
                    'trending-down',
                    'trending-up',
                    'triangle',
                    'tv',
                    'twitter',
                    'type',
                    'umbrella',
                    'underline',
                    'unlock',
                    'upload-cloud',
                    'upload',
                    'user-check',
                    'user-minus',
                    'user-plus',
                    'user-x',
                    'user',
                    'users',
                    'video-off',
                    'video',
                    'voicemail',
                    'volume-1',
                    'volume-2',
                    'volume-x',
                    'volume',
                    'watch',
                    'wifi-off',
                    'wifi',
                    'wind',
                    'x-circle',
                    'x-square',
                    'x',
                    'zap',
                    'zoom-in',
                    'zoom-out'
                ],

                //click to copy icon
                iconDomValue: '',
            }
        },
        computed: {
            showIcon: function () {
                if (this.searchValue === '') {
                    return this.allIcons;
                } else {
                    return this.allIcons.filter(icon => {
                        return icon.toLowerCase().includes(this.searchValue.toLowerCase());
                    });
                }
            }
        },
        methods: {
            copyIconDom(id, icon) {
                this.iconDomValue = '<app-icon name="' + icon + '"/>';
                setTimeout(() => {
                    CopyToClipboard.copyDom(id);
                    this.$toastr.s(this.$t('icon_copied_successfully'));
                });
            }
        }
    }
</script>
