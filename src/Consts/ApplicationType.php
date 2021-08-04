<?php

namespace CustomD\LaravelExperian\Consts;

use MyCLabs\Enum\Enum;

class ApplicationType extends Enum
{

    /**
     * Agent’s Customer Mail Order
     */
    public const AC =  'AC';

    /**
     * Agency Account
     */
    public const AG =  'AG';

    /**
     * Customer Address Authenticity
     */
    public const AO =  'AO';

    /**
     * Broker
     */
    public const BK =  'BK';

    /**
     * Current Account
     */
    public const CA =  'CA';

    /**
     * Shared for credit – searches carried out in the name of the consumer
     */
    public const CAPS_EQ =  'CAPS & EQ';

    /**
     * Credit Card
     */
    public const CC =  'CC';

    /**
     * Debt Consolidation Loan
     */
    public const CD =  'CD';

    /**
     * Charge Card
     */
    public const CH =  'CH';

    /**
     * Credit Limit Change or Authorisation
     */
    public const CL =  'CL';

    /**
     * Customer Management
     */
    public const CM =  'CM';

    /**
     * Card Not Present
     */
    public const CN =  'CN';

    /**
     * Communications(catch All)
     */
    public const CO =  'CO';

    /**
     * Catalogue Request only
     */
    public const CR =  'CR';

    /**
     * Credit Sale
     */
    public const CS =  'CS';

    /**
     * Collections Strategy
     */
    public const CT =  'CT';

    /**
     * Credit Union
     */
    public const CU =  'CU';

    /**
     * Direct Credits
     */
    public const DC =  'DC';

    /**
     * Direct Debit
     */
    public const DD =  'DD';

    /**
     * Direct Mail Order Account
     */
    public const DM =  'DM';

    /**
     * Debt Recovery
     */
    public const DR =  'DR';

    /**
     * International Reports
     */
    public const EI =  'EI';

    /**
     * Employment Check
     */
    public const EM =  'EM';

    /**
     * Enquiry, not an application – general bucket type – non product specific
     */
    public const EQ =  'EQ';

    /**
     * Fraud Investigation – Benefit Fraud
     */
    public const FB =  'FB';

    /**
     * Fraud Investigation - Generic
     */
    public const FG =  'FG';

    /**
     * Fraud Investigation
     */
    public const FI =  'FI';

    /**
     * Fraud Investigation - Prescription
     */
    public const FP =  'FP';

    /**
     * Fraud Investigation – Tax or Duty
     */
    public const FT =  'FT';

    /**
     * Guarantor
     */
    public const GA =  'GA';

    /**
     * Government Sector Authenticate or Enquiry
     */
    public const GB =  'GB';

    /**
     * Generic Search by Financial Services provider for Authentication purposes
     */
    public const GF =  'GF';

    /**
     * Home Credit Provider
     */
    public const HC =  'HC';

    /**
     * Hire Purchase / Conditional Sale
     */
    public const HP =  'HP';

    /**
     * Identification: Age Authentication
     */
    public const IA =  'IA';

    /**
     * Insurance Collection
     */
    public const IC =  'IC';

    /**
     * Identification: Generic Financial
     */
    public const if =  'if';

    /**
     * Identification: Generic Check
     */
    public const IG =  'IG';

    /**
     * Identification: Prevention of Money Laundering
     */
    public const IM =  'IM';

    /**
     * Insurance Provider
     */
    public const IN =  'IN';

    /**
     * Internet / Media Services Provider
     */
    public const IP =  'IP';

    /**
     * Identification: Transaction(Card Not Present) {
     */
    public const IT =  'IT';

    /**
     * Mortgage Buy to Let
     */
    public const MB =  'MB';

    /**
     * First Mortgage
     */
    public const MG =  'MG';

    /**
     * Mortgage High LTV
     */
    public const MH =  'MH';

    /**
     * Money Laundering Batch
     */
    public const ML =  'ML';

    /**
     * Mortgage and Unsecured Loan
     */
    public const MU =  'MU';

    /**
     * Mortgage Multiple Product
     */
    public const MX =  'MX';

    /**
     * Overdraft Account
     */
    public const OA =  'OA';

    /**
     * Premium Instalment
     */
    public const PI =  'PI';

    /**
     * Personal Loan
     */
    public const PL =  'PL';

    /**
     * Credit Card Quotation
     */
    public const QC =  'QC';

    /**
     * Insurance Quotation
     */
    public const QI =  'QI';

    /**
     * Personal Loan Quotation
     */
    public const QL =  'QL';

    /**
     * Mortgage Quotation
     */
    public const QM =  'QM';

    /**
     * Quotation Provider of Communications or Media Services
     */
    public const QP =  'QP';

    /**
     * Store Card Quotation
     */
    public const QS =  'QS';

    /**
     * Telco Quotation
     */
    public const QT =  'QT';

    /**
     * Utility Quotation
     */
    public const QU =  'QU';

    /**
     * Multiple Product Quotation
     */
    public const QX =  'QX';

    /**
     * Rental Agreement
     */
    public const RA =  'RA';

    /**
     * Revolving Credit
     */
    public const RC =  'RC';

    /**
     * Reprocess
     */
    public const RE =  'RE';

    /**
     * Debt Recovery – Sundry Debt
     */
    public const RS =  'RS';

    /**
     * Debt Recovery – Tax or Duty Debt
     */
    public const RT =  'RT';

    /**
     * Store Card
     */
    public const SC =  'SC';

    /**
     * Secured Loan
     */
    public const SL =  'SL';

    /**
     * Student Loan
     */
    public const ST =  'ST';

    /**
     * Debt Tracing – Benefit Debt
     */
    public const TB =  'TB';

    /**
     * Tenant / Home Rental
     */
    public const TC =  'TC';

    /**
     * Fixed Line Agreement
     */
    public const TF =  'TF';

    /**
     * Mobile Phone
     */
    public const TM =  'TM';

    /**
     * Debt Tracing – Sundry Debt
     */
    public const TS =  'TS';

    /**
     * Debt Tracing – Tax or Duty Debt
     */
    public const TT =  'TT';

    /**
     * Financial Partner Enquiry
     */
    public const UA =  'UA';

    /**
     * Consumer Credit Report
     */
    public const UC =  'UC';

    /**
     * Unregistered Enquiry
     */
    public const UE =  'UE';

    /**
     * Undisclosed Address Search
     */
    public const US =  'US';

    /**
     * Utilities
     */
    public const UT =  'UT';

    /**
     * Residency Verification – Generic
     */
    public const VG =  'VG';

    /**
     * Housing Verification;
     */
    public const VH =  'VH';
}
