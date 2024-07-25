<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('file_number')->nullable();
            $table->text('assigned_to')->nullable();
            $table->text('collector_name')->nullable();
            $table->text('title')->nullable();
            $table->text('first_name')->nullable();
            $table->text('middle_name')->nullable();
            $table->text('last_name')->nullable();
            $table->text('full_name')->nullable();
            $table->text('address')->nullable();
            $table->text('address2')->nullable();
            $table->text('city')->nullable();
            $table->text('state')->nullable();
            $table->text('zip')->nullable();
            $table->date('last_worked')->nullable();
            $table->text('account_number')->nullable();
            $table->decimal('original_balance', 10, 2)->nullable();
            $table->text('original_creditor')->nullable();
            $table->text('type_of_debt')->nullable();
            $table->text('debt_category')->nullable();
            $table->decimal('paid_to_date', 10, 2)->nullable();
            $table->decimal('principal', 10, 2)->nullable();
            $table->decimal('accrued_interest', 10, 2)->nullable();
            $table->decimal('current_balance', 10, 2)->nullable();
            $table->date('last_payment_date')->nullable();
            $table->decimal('last_payment_amount', 10, 2)->nullable();
            $table->text('social_security_number')->nullable();
            $table->text('primary_phone')->nullable();
            $table->text('work_phone')->nullable();
            $table->text('email_address')->nullable();
            $table->text('alternate_phone')->nullable();
            $table->text('cell_phone')->nullable();
            $table->date('birth_date')->nullable();
            $table->text('occupation')->nullable();
            $table->boolean('currently_employed')->nullable();
            $table->text('employer')->nullable();
            $table->text('employer_address')->nullable();
            $table->text('employer_city')->nullable();
            $table->text('employer_state')->nullable();
            $table->text('employer_zip')->nullable();
            $table->text('spouse_name')->nullable();
            $table->text('spouse_employer')->nullable();
            $table->text('spouse_work_phone')->nullable();
            $table->text('spouse_employer_address')->nullable();
            $table->text('spouse_employer_city')->nullable();
            $table->text('spouse_employer_state')->nullable();
            $table->text('spouse_employer_zip')->nullable();
            $table->text('joint_first_name')->nullable();
            $table->text('joint_middle_name')->nullable();
            $table->text('joint_last_name')->nullable();
            $table->text('joint_full_name')->nullable();
            $table->text('joint_address')->nullable();
            $table->text('joint_address2')->nullable();
            $table->text('joint_city')->nullable();
            $table->text('joint_state')->nullable();
            $table->text('joint_zip')->nullable();
            $table->text('joint_social_security_number')->nullable();
            $table->text('joint_primary_phone')->nullable();
            $table->text('joint_secondary_phone')->nullable();
            $table->date('joint_birth_date')->nullable();
            $table->text('joint_employer')->nullable();
            $table->text('joint_employer_address')->nullable();
            $table->text('joint_employer_city')->nullable();
            $table->text('joint_employer_state')->nullable();
            $table->text('joint_employer_zip')->nullable();
            $table->text('co_debtor1_first_name')->nullable();
            $table->text('co_debtor1_middle_name')->nullable();
            $table->text('co_debtor1_last_name')->nullable();
            $table->text('co_debtor1_full_name')->nullable();
            $table->text('co_debtor1_address')->nullable();
            $table->text('co_debtor1_address2')->nullable();
            $table->text('co_debtor1_city')->nullable();
            $table->text('co_debtor1_state')->nullable();
            $table->text('co_debtor1_zip')->nullable();
            $table->text('co_debtor1_primary_phone')->nullable();
            $table->text('co_debtor1_secondary_phone')->nullable();
            $table->text('co_debtor2_first_name')->nullable();
            $table->text('co_debtor2_middle_name')->nullable();
            $table->text('co_debtor2_last_name')->nullable();
            $table->text('co_debtor2_full_name')->nullable();
            $table->text('co_debtor2_address')->nullable();
            $table->text('co_debtor2_address2')->nullable();
            $table->text('co_debtor2_city')->nullable();
            $table->text('co_debtor2_state')->nullable();
            $table->text('co_debtor2_zip')->nullable();
            $table->text('co_debtor2_primary_phone')->nullable();
            $table->text('co_debtor2_secondary_phone')->nullable();
            $table->text('client_name')->nullable();
            $table->text('portfolio')->nullable();
            $table->date('date_placed')->nullable();
            $table->text('status_name')->nullable();
            $table->text('status_type')->nullable();
            $table->text('status_color')->nullable();
            $table->decimal('contingency_amount', 10, 2)->nullable();
            $table->text('salesman')->nullable();
            $table->decimal('salesman_percentage', 5, 2)->nullable();
            $table->text('make_payable_to_name')->nullable();
            $table->text('make_payable_to_address')->nullable();
            $table->text('make_payable_to_city')->nullable();
            $table->text('make_payable_to_state')->nullable();
            $table->text('make_payable_to_zip')->nullable();
            $table->text('group_name')->nullable();
            $table->integer('credit_score')->nullable();
            $table->date('date_charged_off')->nullable();
            $table->date('date_account_opened')->nullable();
            $table->date('date_received')->nullable();
            $table->decimal('interest_percentage', 5, 2)->nullable();
            $table->boolean('calculate_interest')->nullable();
            $table->decimal('attorney_fees', 10, 2)->nullable();
            $table->decimal('collection_fees', 10, 2)->nullable();
            $table->decimal('court_fees', 10, 2)->nullable();
            $table->decimal('late_fees', 10, 2)->nullable();
            $table->decimal('misc_fees', 10, 2)->nullable();
            $table->decimal('penalty_fees', 10, 2)->nullable();
            $table->decimal('nsf_fees', 10, 2)->nullable();
            $table->decimal('judgment_fees', 10, 2)->nullable();
            $table->decimal('advanced_fees', 10, 2)->nullable();
            $table->decimal('reimbursed_fees', 10, 2)->nullable();
            $table->decimal('adjustments', 10, 2)->nullable();
            $table->decimal('charged_off_principal', 10, 2)->nullable();
            $table->date('statute_of_limit_date')->nullable();
            $table->date('delinquency_date')->nullable();
            $table->text('manager_name')->nullable();
            $table->date('order_by_date')->nullable();
            $table->text('customer_type')->nullable();
            $table->text('authorized_user')->nullable();
            // Use TEXT for custom fields as well
            for ($i = 1; $i <= 60; $i++) {
                $table->text("custom$i")->nullable();
            }
            $table->text('claim_status')->nullable();
            $table->text('claim_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('debts');
    }
}
