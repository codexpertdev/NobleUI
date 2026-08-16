<?php


namespace App\Constants;


class ControllerMethods
{

    // Common
    const index = '@index';
    const store = '@store';
    const add = '@add';
    const show = '@show';
    const update = '@update';
    const delete = '@delete';
    const list = '@list';
    const listById = '@listById';
    const detail = '@detail';
    const addUpdate = '@addUpdate';

    // User Auth
    const register = '@register';
    const login = '@login';
    const changePassword = '@changePassword';
    const forgotPassword = '@forgotPassword';
    const forgotPasswordCustom = '@forgotPasswordCustom';
    const resetPassword = '@resetPassword';
    const updatePassword = '@updatePassword';
    const logout = '@logout';

    // Users
    const profile = '@profile';
    const updateProfile = '@updateProfile';
    const adminUsers = '@adminUsers';
    const unauthorised = '@unauthorised';
    const adminaccess = '@adminaccess';
    const activeaccess = '@activeaccess';
    const changeIsActive = '@changeIsActive';
    const changeStartTime = '@updateStartTime';
    const activeUsersList = '@activeUsersList';
    const inactiveUsersList = '@inactiveUsersList';

    // Daily Report
    const lastDailyReport = '@lastDailyReport';

    // Daily Rate
    const updateEmployeeDailyRate = '@updateEmployeeDailyRate';
    const AllEmployeeRates = '@AllEmployeeRates';
    const GetEmployeeRate = '@GetEmployeeRate';

    // PersonalDetail
    const birthdayUsersOfMonth = '@birthdayUsersOfMonth';

    // TimeSlot
    const todayTotalTimeWithCollection = '@getTodayTotalTimeWithCollection';
    const todayTotalTimeWithQuery = '@getTodayTotalTimeWithQuery';
    const thisMonthTotalTimeWithQuery = '@getThisMonthTotalTimeWithQuery';
    const thisMonthTotalTimeWithCollection = '@getThisMonthTotalTimeWithCollection';
    const thisMonthDayWiseTotalTimeWithCollection = '@getThisMonthDayWiseTotalTimeWithCollection';
    const thisMonthDayWiseTotalTimeWithQuery = '@getThisMonthDayWiseTotalTimeWithQuery';
    const thisMonthTotalTimeCombineWithCollection = '@getThisMonthTotalTimeCombineWithCollection';
    const thisMonthTotalTimeCombineWithQuery = '@getThisMonthTotalTimeCombineWithQuery';
    const thisMonthDayWiseChartData = '@getThisMonthDayWiseChartData';
    const getTodayLastTimeSlot = '@getTodayLastTimeSlot';
    const addLocalTimeSlots = '@addLocalTimeSlots';

    // LeaveRequest
    const statusUpdate = '@statusUpdate';
    const userList = '@userList';

    // Holiday
    const getHolidays = '@index';
    const createHoliday = '@store';
    const showHoliday = '@show';
    const updateHoliday = '@update';
    const deleteHoliday = '@destroy';
    const getHolidaysOfMonth = '@getHolidaysOfMonth';

    // Bank Information
    const getBankDetails = '@index';
    const addBankDetails = '@store';
    const updateBankDetails = '@update';
    const deleteBankInformation = '@destroy';

    // Previous Employee Details
    const getPreviousEmployeeDetails = '@index';
    const addPreviousEmployeeDetails = '@store';
    const updatePreviousEmployeeDetails = '@update';
    const deletePreviousEmployeeDetails = '@destroy';

    // Employee Credentials Details
    const getEmployeeCredentials = '@index';
    const addEmployeeCredentials = '@store';
    const updateEmployeeCredentials = '@update';
    const deleteEmployeeCredentials = '@destroy';

    // Employee Transport Details
    const getEmployeeTransportDetails = '@index';
    const addEmployeeTransportDetails = '@store';
    const updateEmployeeTransportDetails = '@update';
    const deleteEmployeeTransportDetails = '@destroy';

    // System faults
    const getAllSystemFaults = '@getAllSystemFaults';
    const updateSystemFaultStatus = '@updateSystemFaultStatus';

    // Employee Information
    const department_designation_List = '@department_designation_List';
    const employee_increment = '@increment';
}
