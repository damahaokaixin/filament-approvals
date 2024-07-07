<?php

// EightyNine/Approval 的翻译
return [
    'ModelLabel_Approval_Flow'=>'审批工作流',
    'PluralModelLabel_Approval_Flows'=>'审批工作流',
    'steps_relation_manager_title'=>'审批步骤',

    'form_label' => [
        'name' => '审批流名称',
        'approvable_type' => '审批流类型',
    ],
    'steps_form_label' => [
        'Order' => '排序序号',
        'Role' => '用户组角色',
        'Action' => '执行操作',
        'RoleHelperText' => '这一步谁来审批?',
        'ActionHelperText' => '这一步应该做什么?',
    ],
    'status_column' => [
        'Approved' => '已批准',
        'Rejected' => '已拒绝',
        'Discarded' => '已丢弃',
        'Submitted' => '已提交',

        'approval_by_prefix' => '通过',
        'approval_complete' => '完成',
        'approval_incomplete' => '未完成',
        'approval_in_process' => '处理中',
        'approval_status_does_not_exist' => '状态不存在',
    ],
    'navigation' => [
        'label' => '审批',
        'plural_label' => '审批',
        'group' => '配置',
    ],
    'actions' => [
        'create_flow' => '创建审批流程',
        'add_step' => '添加步骤',
        'approvals' => '审批',
        'approve' => '批准',
        'discard' => '丢弃',
        'reject' => '拒绝',
        'verify' => '验证',
        'check' => '检查',
        'submit' => '提交',
        'reject_confirmation_text' => '您确定要拒绝此记录吗？',
        'approve_confirmation_text' => '您确定要批准此记录吗？',
        'discard_confirmation_text' => '您确定要丢弃此记录吗？',
        'submit_confirmation_text' => '您确定要将此记录提交到流程的下一步吗？',
        'approval_history' => '审批历史',
        'history' => [
            'Approved' => '已批准',
            'Rejected' => '已拒绝',
            'Discarded' => '已丢弃',
            'Submitted' => '已提交',
        ]
    ]
];
