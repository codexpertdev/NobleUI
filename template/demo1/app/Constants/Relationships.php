<?php


namespace App\Constants;


class Relationships
{
    const USER = 'user';
    const UPDATED_BY = 'updatedBy';

    const PERSONAL_DETAIL = 'personalDetail';
    const CONTACT_DETAIL = 'contactDetail';
    const DAILY_REPORTS = 'dailyReports';
    const EMPLOYEE_DAILY_RATE = 'employeeDailyRate';
    const TIME_SLOTS = 'timeSlots';
    const LAST_TIME_SLOT = 'lastTimeSlot';

    /**
     *  LeaveRequest RelationShips
     */
    const LEAVE_DAYS = 'leaveDays';
    const LEAVE_STATUS = 'leaveStatus';
    const LEAVE_TYPE = 'leaveType';
    const LEAVE = 'leave';
    const MASTER_LEAVE = 'masterLeave';
    const DEPARTMENT = 'department';
    const DESIGNATION = 'designation';
}
