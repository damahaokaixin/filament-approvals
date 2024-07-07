<?php

namespace EightyNine\Approvals\Traits;

use App\Models\User;
use RingleSoft\LaravelProcessApproval\Enums\ApprovalActionEnum;
use RingleSoft\LaravelProcessApproval\Models\ProcessApproval;
use RingleSoft\LaravelProcessApproval\Traits\Approvable as TraitsApprovable;

trait Approvable
{
    use TraitsApprovable;

    public function createdBy()
    {
        return User::find($this->approvalStatus->creator_id);
    }

    /**
     * Check if Approval process is completed
     * 因为原始代码中 $this->approvalStatus 可能没有实时更新, 所以这里实时查询, 临时解决下.
     * @return bool
     */
    public function isApprovalCompleted(): bool
    {
        // $registeredSteps = collect($this->approvalStatus->steps ?? []);
        $registeredSteps = collect($this->approvalStatus()->first()->steps ?? []);
        foreach ($registeredSteps as $item) {
            if ($item['process_approval_action'] === null || $item['process_approval_id'] === null) {
                return false;
            }
        }
        return $registeredSteps->last()['process_approval_action'] !== ApprovalActionEnum::REJECTED->value;
    }

    public function onApprovalCompleted(ProcessApproval $approval): bool
    {
        // Write logic to be executed when the approval process is completed
        return true;
    }
}
