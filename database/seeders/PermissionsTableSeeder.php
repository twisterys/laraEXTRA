<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 18,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 24,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 25,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 28,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 29,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 30,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 33,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 34,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 35,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 38,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 39,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 40,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 41,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 42,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 43,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 44,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 45,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 46,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 47,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 48,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 49,
                'title' => 'task_create',
            ],
            [
                'id'    => 50,
                'title' => 'task_edit',
            ],
            [
                'id'    => 51,
                'title' => 'task_show',
            ],
            [
                'id'    => 52,
                'title' => 'task_delete',
            ],
            [
                'id'    => 53,
                'title' => 'task_access',
            ],
            [
                'id'    => 54,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 55,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 56,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 57,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 58,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 59,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 60,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 61,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 62,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 63,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 64,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 65,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 66,
                'title' => 'expense_create',
            ],
            [
                'id'    => 67,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 68,
                'title' => 'expense_show',
            ],
            [
                'id'    => 69,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 70,
                'title' => 'expense_access',
            ],
            [
                'id'    => 71,
                'title' => 'income_create',
            ],
            [
                'id'    => 72,
                'title' => 'income_edit',
            ],
            [
                'id'    => 73,
                'title' => 'income_show',
            ],
            [
                'id'    => 74,
                'title' => 'income_delete',
            ],
            [
                'id'    => 75,
                'title' => 'income_access',
            ],
            [
                'id'    => 76,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 77,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 78,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 79,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 80,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 81,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 82,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 83,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 84,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 85,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 86,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 87,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 88,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 89,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 90,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 91,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 92,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 93,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 94,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 95,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 96,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 97,
                'title' => 'time_management_access',
            ],
            [
                'id'    => 98,
                'title' => 'time_work_type_create',
            ],
            [
                'id'    => 99,
                'title' => 'time_work_type_edit',
            ],
            [
                'id'    => 100,
                'title' => 'time_work_type_show',
            ],
            [
                'id'    => 101,
                'title' => 'time_work_type_delete',
            ],
            [
                'id'    => 102,
                'title' => 'time_work_type_access',
            ],
            [
                'id'    => 103,
                'title' => 'time_project_create',
            ],
            [
                'id'    => 104,
                'title' => 'time_project_edit',
            ],
            [
                'id'    => 105,
                'title' => 'time_project_show',
            ],
            [
                'id'    => 106,
                'title' => 'time_project_delete',
            ],
            [
                'id'    => 107,
                'title' => 'time_project_access',
            ],
            [
                'id'    => 108,
                'title' => 'time_entry_create',
            ],
            [
                'id'    => 109,
                'title' => 'time_entry_edit',
            ],
            [
                'id'    => 110,
                'title' => 'time_entry_show',
            ],
            [
                'id'    => 111,
                'title' => 'time_entry_delete',
            ],
            [
                'id'    => 112,
                'title' => 'time_entry_access',
            ],
            [
                'id'    => 113,
                'title' => 'time_report_create',
            ],
            [
                'id'    => 114,
                'title' => 'time_report_edit',
            ],
            [
                'id'    => 115,
                'title' => 'time_report_show',
            ],
            [
                'id'    => 116,
                'title' => 'time_report_delete',
            ],
            [
                'id'    => 117,
                'title' => 'time_report_access',
            ],
            [
                'id'    => 118,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 119,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 120,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 121,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 122,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 123,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 124,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 125,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 126,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 127,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 128,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 129,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 130,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 131,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 132,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 133,
                'title' => 'mission_create',
            ],
            [
                'id'    => 134,
                'title' => 'mission_edit',
            ],
            [
                'id'    => 135,
                'title' => 'mission_show',
            ],
            [
                'id'    => 136,
                'title' => 'mission_delete',
            ],
            [
                'id'    => 137,
                'title' => 'mission_access',
            ],
            [
                'id'    => 138,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
