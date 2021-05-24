<?php

namespace App\Http\Composer;

use Illuminate\View\View;

class SidebarComposer
{
    public function compose(View $view)
    {
        $view->with(['data' => [
            [
                'id' => 'dashboard-samples',
                'icon' => 'pie-chart',
                'name' => __t('dashboard'),
                'permission' => authorize_any(['view_default', 'view_academy', 'view_ecmommerce', 'view_hospital', 'view_hrm']),
                'subMenu' => [
                    [
                        'name' => trans('custom.default'),
                        'url' => '/admin/dashboard',
                        'permission' => auth()->user()->can('view_default'),
                    ],
                    [
                        'name' => trans('custom.academy'),
                        'url' => '/dashboard/academy',
                        'permission' => auth()->user()->can('view_academy'),
                    ],
                    [
                        'name' => trans('custom.e_commerce'),
                        'url' => '/dashboard/ecommerce',
                        'permission' => auth()->user()->can('view_ecmommerce'),
                    ],
                    [
                        'name' => trans('custom.hospital'),
                        'url' => '/dashboard/hospital',
                        'permission' => auth()->user()->can('view_hospital'),
                    ],
                    [
                        'name' => trans('custom.hrm'),
                        'url' => '/dashboard/hrm',
                        'permission' => auth()->user()->can('view_hrm'),
                    ],
                ],
            ],
            [
                'id' => 'auth-pages',
                'icon' => 'power',
                'name' => __t('authentication'),
                'permission' => authorize_any(['view_registration', 'view_forget_password', 'view_reset_password']),
                'subMenu' => [
                    [
                        'name' => trans('custom.registration'),
                        'url' => '/user/registration',
                        'permission' => auth()->user()->can('view_registration'),
                    ],
                    [
                        'name' => trans('custom.forget_password'),
                        'url' => '/forget-password',
                        'permission' => auth()->user()->can('view_forget_password'),
                    ],
                    [
                        'name' => trans('custom.reset_password'),
                        'url' => '/reset/password',
                        'permission' => auth()->user()->can('view_reset_password'),
                    ],
                ],
            ],
            [
                'id' => 'tables',
                'icon' => 'grid',
                'name' => trans('custom.datatables'),
                'permission' => authorize_any([
                    'view_basic_datatable', 'manage_functional_datatable', 'manage_advance_datatable',
                    'view_responsive_datatable', 'manage_filter_type_datatable', 'manage_paginated_datatable',
                    'manage_gird_view_datatable',
                ]),
                'subMenu' => [
                    [
                        'name' => trans('custom.basic'),
                        'url' => '/tables/basic-datatable',
                        'permission' => auth()->user()->can('view_basic_datatable'),
                    ],
                    [
                        'name' => trans('custom.functional'),
                        'url' => '/tables/functional',
                        'permission' => auth()->user()->can('manage_functional_datatable'),
                    ],
                    [
                        'name' => trans('custom.advance'),
                        'url' => '/tables/advance',
                        'permission' => auth()->user()->can('manage_advance_datatable'),
                    ],
                    [
                        'name' => trans('custom.responsive'),
                        'url' => '/tables/responsive',
                        'permission' => auth()->user()->can('view_responsive_datatable'),
                    ],
                    [
                        'name' => trans('custom.filter_type'),
                        'url' => '/tables/filter',
                        'permission' => auth()->user()->can('manage_filter_type_datatable'),
                    ],
                    [
                        'name' => trans('custom.grid_view'),
                        'url' => '/tables/grid-view',
                        'permission' => auth()->user()->can('manage_gird_view_datatable'),
                    ],
                    [
                        'name' => trans('custom.paginated'),
                        'url' => '/tables/pagination',
                        'permission' => auth()->user()->can('manage_paginated_datatable'),
                    ],
                ],
            ],
            [
                'id' => 'forms',
                'icon' => 'sidebar',
                'name' => trans('custom.forms_and_fields'),
                'permission' => authorize_any(['view_form_layouts', 'view_form_elements', 'view_form_validation', 'view_form_text_editor']),
                'subMenu' => [
                    [
                        'name' => trans('custom.form_layouts'),
                        'url' => '/form/layouts',
                        'permission' => auth()->user()->can('view_form_layouts'),
                    ],
                    [
                        'name' => trans('custom.form_elements'),
                        'url' => '/form/elements',
                        'permission' => auth()->user()->can('view_form_elements'),
                    ],
                    [
                        'name' => trans('custom.form_validations'),
                        'url' => '/form/validation',
                        'permission' => auth()->user()->can('view_form_validation'),
                    ],
                    [
                        'name' => trans('custom.text_editor'),
                        'url' => '/form/text',
                        'permission' => auth()->user()->can('view_form_text_editor'),
                    ],
                ],
            ],
            [
                'id' => 'ui',
                'icon' => 'trello',
                'name' => trans('custom.ui_elements'),
                'permission' => authorize_any([
                    'view_ui_avatar', 'view_ui_badges_pill', 'view_buttons', 'view_cards',
                    'view_checkboxes_radios', 'view_error_notes', 'view_icons', 'view_modals', 'view_nothing_to_show', 'view_tabs',
                ]),
                'subMenu' => [
                    [
                        'name' => trans('custom.avatars'),
                        'url' => '/avatars',
                        'permission' => auth()->user()->can('view_ui_avatar'),
                    ],
                    [
                        'name' => trans('custom.badges_and_pills'),
                        'url' => '/badges',
                        'permission' => auth()->user()->can('view_ui_badges_pill'),
                    ],
                    [
                        'name' => trans('custom.buttons'),
                        'url' => '/buttons',
                        'permission' => auth()->user()->can('view_buttons'),
                    ],
                    [
                        'name' => trans('custom.cards'),
                        'url' => '/cards',
                        'permission' => auth()->user()->can('view_cards'),
                    ],
                    [
                        'name' => trans('custom.checkboxes_and_radios'),
                        'url' => '/checkboxes-radios',
                        'permission' => auth()->user()->can('view_checkboxes_radios'),
                    ],
                    [
                        'name' => trans('custom.notes'),
                        'url' => '/error-notes',
                        'permission' => auth()->user()->can('view_error_notes'),
                    ],
                    [
                        'name' => trans('custom.icons'),
                        'url' => '/icons',
                        'permission' => auth()->user()->can('view_icons'),
                    ],
                    [
                        'name' => trans('custom.modals'),
                        'url' => '/modal',
                        'permission' => auth()->user()->can('view_modals'),
                    ],
                    [
                        'name' => trans('custom.nothing_to_show'),
                        'url' => '/nothing-to-show',
                        'permission' => auth()->user()->can('view_nothing_to_show'),
                    ],
                    [
                        'name' => trans('custom.tabs'),
                        'url' => '/tabs',
                        'permission' => auth()->user()->can('view_tabs'),
                    ],
                ],
            ],
            [
                'id' => 'pages',
                'icon' => 'copy',
                'name' => trans('default.sample_pages'),
                'permission' => authorize_any(['view_user_profile', 'view_blank_page']),
                'subMenu' => [
                    [
                        'name' => trans('custom.user_profile'),
                        'url' => '/my-profile',
                        'permission' => auth()->user()->can('view_user_profile'),
                    ],
                    [
                        'name' => trans('custom.calendar_view'),
                        'url' => '/calendar-view',
                        'permission' => auth()->user()->can('manage_calendar_view'),
                    ],
                    [
                        'name' => trans('custom.kanban_view'),
                        'url' => '/kanban-view',
                        'permission' => auth()->user()->can('manage_kanban_view'),
                    ],
                    [
                        'name' => trans('custom.report'),
                        'url' => '/report-view',
                        'permission' => auth()->user()->can('manage_report_view'),
                    ],
                    [
                        'name' => trans('custom.blank_page'),
                        'url' => '/blank-page',
                        'permission' => auth()->user()->can('view_blank_page'),
                    ],
                ],
            ],
            [
                'id' => 'error-pages',
                'icon' => 'alert-triangle',
                'name' => trans('custom.error_pages'),
                'permission' => authorize_any([
                    'view_error_400', 'view_error_401', 'view_error_403', 'view_error_404',
                    'view_error_405', 'view_error_503',
                ]),
                'subMenu' => [
                    [
                        'name' => trans('custom.error_400'),
                        'url' => '/error-400',
                        'permission' => auth()->user()->can('view_error_400'),
                    ],
                    [
                        'name' => trans('custom.error_401'),
                        'url' => '/error-401',
                        'permission' => auth()->user()->can('view_error_401'),
                    ],
                    [
                        'name' => trans('custom.error_403'),
                        'url' => '/error-403',
                        'permission' => auth()->user()->can('view_error_403'),
                    ],
                    [
                        'name' => trans('custom.error_404'),
                        'url' => '/error-404',
                        'permission' => auth()->user()->can('view_error_404'),
                    ],
                    [
                        'name' => trans('custom.error_405'),
                        'url' => '/error-500',
                        'permission' => auth()->user()->can('view_error_405'),
                    ],
                    [
                        'name' => trans('custom.error_503'),
                        'url' => '/error-503',
                        'permission' => auth()->user()->can('view_error_503'),
                    ],
                ],
            ],
            [
                'icon' => 'user-check',
                'name' => trans('custom.user_and_roles'),
                'url' => '/users-and-roles',
                'permission' => authorize_any(['view_users', 'view_roles', 'invite_user', 'create_roles']),
            ],
            [
                'icon' => 'settings',
                'name' => trans('custom.settings'),
                'url' => '/app-setting',
                'permission' => authorize_any(
                    [
                        'view_settings', 'update_settings', 'view_delivery_settings',
                        'update_delivery_settings', 'view_sms_settings', 'update_sms_settings', 'view_recaptcha_settings',
                        'view_notification_settings', 'update_notification_settings', 'update_notification_templates',
                        'view_notification_templates',
                    ]
                ),
            ],
        ]]);
    }
}
