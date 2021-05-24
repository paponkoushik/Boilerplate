<?php

namespace Database\Seeders\App;

use App\Models\Core\Auth\Type;
use Illuminate\Database\Seeder;
use App\Models\Core\Auth\Permission;
use Database\Seeders\Traits\DisableForeignKeys;

class PermissionChildAppSeeder extends Seeder
{
    use DisableForeignKeys;

    public function run()
    {
        $this->disableForeignKeys();
        Permission::query()->truncate();
        $appId = Type::findByAlias('app')->id;
        $permissions = [
            //dashboard
            [
                'name' => 'view_default',
                'type_id' => $appId,
                'group_name' => 'dashboard',
            ],
            [
                'name' => 'view_academy',
                'type_id' => $appId,
                'group_name' => 'dashboard',
            ],
            [
                'name' => 'view_ecmommerce',
                'type_id' => $appId,
                'group_name' => 'dashboard',
            ],
            [
                'name' => 'view_hospital',
                'type_id' => $appId,
                'group_name' => 'dashboard',
            ],
            [
                'name' => 'view_hrm',
                'type_id' => $appId,
                'group_name' => 'dashboard',
            ],
            //auth
            [
                'name' => 'view_registration',
                'type_id' => $appId,
                'group_name' => 'authentication',
            ],
            [
                'name' => 'view_forget_password',
                'type_id' => $appId,
                'group_name' => 'authentication',
            ],
            [
                'name' => 'view_reset_password',
                'type_id' => $appId,
                'group_name' => 'authentication',
            ],

            //datatable
            [
                'name' => 'view_basic_datatable',
                'type_id' => $appId,
                'group_name' => 'datatable',
            ],
            [
                'name' => 'manage_functional_datatable',
                'type_id' => $appId,
                'group_name' => 'datatable',
            ],
            [
                'name' => 'manage_advance_datatable',
                'type_id' => $appId,
                'group_name' => 'datatable',
            ],
            [
                'name' => 'view_responsive_datatable',
                'type_id' => $appId,
                'group_name' => 'datatable',
            ],
            [
                'name' => 'manage_filter_type_datatable',
                'type_id' => $appId,
                'group_name' => 'datatable',
            ],
            [
                'name' => 'manage_paginated_datatable',
                'type_id' => $appId,
                'group_name' => 'datatable',
            ],
            [
                'name' => 'manage_gird_view_datatable',
                'type_id' => $appId,
                'group_name' => 'datatable',
            ],
            //form
            [
                'name' => 'view_form_layouts',
                'type_id' => $appId,
                'group_name' => 'form',
            ],
            [
                'name' => 'view_form_elements',
                'type_id' => $appId,
                'group_name' => 'form',
            ],
            [
                'name' => 'view_form_validation',
                'type_id' => $appId,
                'group_name' => 'form',
            ],
            [
                'name' => 'view_form_text_editor',
                'type_id' => $appId,
                'group_name' => 'form',
            ],
            //ui-elements
            [
                'name' => 'view_ui_avatar',
                'type_id' => $appId,
                'group_name' => 'ui_elements',
            ],
            [
                'name' => 'view_ui_badges_pill',
                'type_id' => $appId,
                'group_name' => 'ui_elements',
            ],
            [
                'name' => 'view_buttons',
                'type_id' => $appId,
                'group_name' => 'ui_elements',
            ],
            [
                'name' => 'view_cards',
                'type_id' => $appId,
                'group_name' => 'ui_elements',
            ],
            [
                'name' => 'view_checkboxes_radios',
                'type_id' => $appId,
                'group_name' => 'ui_elements',
            ],
            [
                'name' => 'view_error_notes',
                'type_id' => $appId,
                'group_name' => 'ui_elements',
            ],
            [
                'name' => 'view_icons',
                'type_id' => $appId,
                'group_name' => 'ui_elements',
            ],
            [
                'name' => 'view_modals',
                'type_id' => $appId,
                'group_name' => 'ui_elements',
            ],
            [
                'name' => 'view_nothing_to_show',
                'type_id' => $appId,
                'group_name' => 'ui_elements',
            ],
            [
                'name' => 'view_tabs',
                'type_id' => $appId,
                'group_name' => 'ui_elements',
            ],
            //sample pages
            [
                'name' => 'view_user_profile',
                'type_id' => $appId,
                'group_name' => 'sample_pages',
            ],
            [
                'name' => 'manage_calendar_view',
                'type_id' => $appId,
                'group_name' => 'sample_pages',
            ],
            [
                'name' => 'manage_kanban_view',
                'type_id' => $appId,
                'group_name' => 'sample_pages',
            ],
            [
                'name' => 'manage_report_view',
                'type_id' => $appId,
                'group_name' => 'sample_pages',
            ],
            [
                'name' => 'view_blank_page',
                'type_id' => $appId,
                'group_name' => 'sample_pages',
            ],
            //error pages
            [
                'name' => 'view_error_400',
                'type_id' => $appId,
                'group_name' => 'error_pages',
            ],
            [
                'name' => 'view_error_401',
                'type_id' => $appId,
                'group_name' => 'error_pages',
            ],
            [
                'name' => 'view_error_403',
                'type_id' => $appId,
                'group_name' => 'error_pages',
            ],
            [
                'name' => 'view_error_404',
                'type_id' => $appId,
                'group_name' => 'error_pages',
            ],
            [
                'name' => 'view_error_405',
                'type_id' => $appId,
                'group_name' => 'error_pages',
            ],
            [
                'name' => 'view_error_503',
                'type_id' => $appId,
                'group_name' => 'error_pages',
            ],
            //user roles
            [
                'name' => 'view_users',
                'type_id' => $appId,
                'group_name' => 'user_and_roles',
            ],

            [
                'name' => 'invite_user',
                'type_id' => $appId,
                'group_name' => 'user_and_roles',
            ],
            [
                'name' => 'update_users',
                'type_id' => $appId,
                'group_name' => 'user_and_roles',
            ],
            [
                'name' => 'delete_users',
                'type_id' => $appId,
                'group_name' => 'user_and_roles',
            ],
            [
                'name' => 'attach_roles_users',
                'type_id' => $appId,
                'group_name' => 'user_and_roles',
            ],
            [
                'name' => 'detach_roles_users',
                'type_id' => $appId,
                'group_name' => 'user_and_roles',
            ],
            //role
            [
                'name' => 'view_roles',
                'type_id' => $appId,
                'group_name' => 'user_and_roles',
            ],
            [
                'name' => 'create_roles',
                'type_id' => $appId,
                'group_name' => 'user_and_roles',
            ],
            [
                'name' => 'update_roles',
                'type_id' => $appId,
                'group_name' => 'user_and_roles',
            ],
            [
                'name' => 'delete_roles',
                'type_id' => $appId,
                'group_name' => 'user_and_roles',
            ],
            [
                'name' => 'attach_users_to_roles',
                'type_id' => $appId,
                'group_name' => 'user_and_roles',
            ],
            //settings
            [
                'name' => 'view_settings',
                'type_id' => $appId,
                'group_name' => 'settings',
            ],
            [
                'name' => 'update_settings',
                'type_id' => $appId,
                'group_name' => 'settings',
            ],
            [
                'name' => 'view_delivery_settings',
                'type_id' => $appId,
                'group_name' => 'settings',
            ],
            [
                'name' => 'update_delivery_settings',
                'type_id' => $appId,
                'group_name' => 'settings',
            ],
            [
                'name' => 'view_sms_settings',
                'type_id' => $appId,
                'group_name' => 'settings',
            ],
            [
                'name' => 'update_sms_settings',
                'type_id' => $appId,
                'group_name' => 'settings',
            ],
            [
                'name' => 'view_recaptcha_settings',
                'type_id' => $appId,
                'group_name' => 'settings',
            ],
            [
                'name' => 'update_recaptcha_settings',
                'type_id' => $appId,
                'group_name' => 'settings',
            ],
            [
                'name' => 'view_notification_settings',
                'type_id' => $appId,
                'group_name' => 'settings',
            ],
            [
                'name' => 'update_notification_settings',
                'type_id' => $appId,
                'group_name' => 'settings',
            ],
            [
                'name' => 'view_notification_templates',
                'type_id' => $appId,
                'group_name' => 'settings',
            ],
            [
                'name' => 'update_notification_templates',
                'type_id' => $appId,
                'group_name' => 'settings',
            ],
        ];
        $this->enableForeignKeys();
        Permission::query()->insert($permissions);
    }
}
