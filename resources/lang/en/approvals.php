<?php

// translations for EightyNine/Approval
return [

    'ModelLabel_Approval_Flow'=>'Approval flow',
    'PluralModelLabel_Approval_Flows'=>'Approval flows',
    'steps_relation_manager_title'=>'Steps',

    'form_label' => [
        'name' => 'name',
        'approvable_type' => 'approvable_type',
    ],
    'steps_form_label' => [
        'Order' => 'Order',
        'Role' => 'Role',
        'Action' => 'Action',
        'RoleHelperText' => 'Who should approve in this step?',
        'ActionHelperText' => 'What should be done in this step?',
    ],

    'status_column' => [
        'Approved' => 'Approved',
        'Rejected' => 'Rejected',
        'Discarded' => 'Discarded',
        'Submitted' => 'Submitted',

        'approval_by_prefix' => 'By',
        'approval_complete' => 'Complete',
        'approval_incomplete' => 'Incomplete',
        'approval_in_process' => 'In Process',
        'approval_status_does_not_exist' => 'No Status Exists',
    ],
    'navigation' => [
        'label' => 'Approvals',
        'plural_label' => 'Approvals',
        'group' => 'Configuration',
    ],
    'actions' => [
        'create_flow' => 'Create Approval Flow',
        'add_step' => 'Add Step',
        'approvals' => 'Approvals',
        'approve' => 'Approve',
        'discard' => 'Discard',
        'reject' => 'Reject',
        'verify' => 'Verify',
        'check' => 'Check',
        'submit' => 'Submit',
        'reject_confirmation_text' => 'Are you sure you want to reject this record?',
        'approve_confirmation_text' => 'Are you sure you want to approve this record?',
        'discard_confirmation_text' => 'Are you sure you want to discard this record?',
        'submit_confirmation_text' => 'Are you sure you want to submit this record to the next step in the flow?',
        'approval_history' => 'Approval History',
        'history' => [
            'Approved' => 'Approved',
            'Rejected' => 'Rejected',
            'Discarded' => 'Discarded',
            'Submitted' => 'Submitted',
        ]
    ]
];
