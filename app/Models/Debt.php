<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
    use HasFactory;
    protected $table = 'debts';

    // You can define which attributes are mass assignable
    protected $fillable = [
        'file_number', 'assigned_to', 'collector_name', 'title', 'first_name', 'middle_name',
        'last_name', 'full_name', 'address', 'address2', 'city', 'state', 'zip', 'last_worked',
        'account_number', 'original_balance', 'original_creditor', 'type_of_debt', 'debt_category',
        'paid_to_date', 'principal', 'accrued_interest', 'current_balance', 'last_payment_date',
        'last_payment_amount', 'social_security_number', 'primary_phone', 'work_phone', 'email_address',
        'alternate_phone', 'cell_phone', 'birth_date', 'occupation', 'currently_employed', 'employer',
        'employer_address', 'employer_city', 'employer_state', 'employer_zip', 'spouse_name', 'spouse_employer',
        'spouse_work_phone', 'spouse_employer_address', 'spouse_employer_city', 'spouse_employer_state',
        'spouse_employer_zip', 'joint_first_name', 'joint_middle_name', 'joint_last_name', 'joint_full_name',
        'joint_address', 'joint_address2', 'joint_city', 'joint_state', 'joint_zip', 'joint_social_security_number',
        'joint_primary_phone', 'joint_secondary_phone', 'joint_birth_date', 'joint_employer',
        'joint_employer_address', 'joint_employer_city', 'joint_employer_state', 'joint_employer_zip',
        'co_debtor1_first_name', 'co_debtor1_middle_name', 'co_debtor1_last_name', 'co_debtor1_full_name',
        'co_debtor1_address', 'co_debtor1_address2', 'co_debtor1_city', 'co_debtor1_state', 'co_debtor1_zip',
        'co_debtor1_primary_phone', 'co_debtor1_secondary_phone', 'co_debtor2_first_name', 'co_debtor2_middle_name',
        'co_debtor2_last_name', 'co_debtor2_full_name', 'co_debtor2_address', 'co_debtor2_address2',
        'co_debtor2_city', 'co_debtor2_state', 'co_debtor2_zip', 'co_debtor2_primary_phone',
        'co_debtor2_secondary_phone', 'client_name', 'portfolio', 'date_placed', 'status_name',
        'status_type', 'status_color', 'contingency_amount', 'salesman', 'salesman_percentage',
        'make_payable_to_name', 'make_payable_to_address', 'make_payable_to_city', 'make_payable_to_state',
        'make_payable_to_zip', 'group_name', 'credit_score', 'date_charged_off', 'date_account_opened',
        'date_received', 'interest_percentage', 'calculate_interest', 'attorney_fees', 'collection_fees',
        'court_fees', 'late_fees', 'misc_fees', 'penalty_fees', 'nsf_fees', 'judgment_fees',
        'advanced_fees', 'reimbursed_fees', 'adjustments', 'charged_off_principal', 'statute_of_limit_date',
        'delinquency_date', 'manager_name', 'order_by_date', 'customer_type', 'authorized_user',
        'custom1', 'custom2', 'custom3', 'custom4', 'custom5', 'custom6', 'custom7', 'custom8', 'custom9',
        'custom10', 'custom11', 'custom12', 'custom13', 'custom14', 'custom15', 'custom16', 'custom17',
        'custom18', 'custom19', 'custom20', 'custom21', 'custom22', 'custom23', 'custom24', 'custom25',
        'custom26', 'custom27', 'custom28', 'custom29', 'custom30', 'custom31', 'custom32', 'custom33',
        'custom34', 'custom35', 'custom36', 'custom37', 'custom38', 'custom39', 'custom40', 'custom41',
        'custom42', 'custom43', 'custom44', 'custom45', 'custom46', 'custom47', 'custom48', 'custom49',
        'custom50', 'custom51', 'custom52', 'custom53', 'custom54', 'custom55', 'custom56', 'custom57',
        'custom58', 'custom59', 'custom60', 'claim_status', 'claim_type',
    ];
}
