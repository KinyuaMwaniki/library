<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->nullable()->after('id');
            $table->string('middle_name')->nullable()->after('first_name');
            $table->string('last_name')->nullable()->after('middle_name');
            $table->date('birthday')->nullable()->after('email');
            $table->string('gender')->nullable()->after('birthday');
            $table->string('TelWork')->nullable()->after('gender');
            $table->string('id_no')->nullable()->after('telephone');
            $table->string('employee_id')->nullable()->after('id_no');
            $table->integer('department_id')->nullable()->after('employee_id');
            $table->string('can_access')->nullable()->after('department_id');

            idAgents
            bSysAccount
            UserName
            Title
            Description
            Mobile
            TelHome
            Comments
            AddressStreet
            AddressPOBox
            AddressCity
            AddressState
            AddressZip
            AddressCountry
            CanChangePassword
            MustChangePwdOnLogin
            ChangePwdDays
            PwdLastChange
            PasswordHint
            AgentOutOffice
            CanSetOutOfOffice
            AgentActive
            UserGroupID
            AutoLogout
            AutoLogOutMinutes


            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['first_name', 'middle_name', 'last_name', 'birthday', 'gender', 'TelWork', 'id_no', 'employee_id', 'department_id', 'can_access']);
            $table->dropSoftDeletes();
        });
    }
}
