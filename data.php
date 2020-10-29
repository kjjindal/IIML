<?php

$server='localhost';
$username="root";
$password="";  //  enter  your mysql database password
error_reporting(0);
$connection=mysqli_connect($server,$username,$password);

if($connection){
// create a database named legal
  
  $sql=" CREATE SCHEMA `legal` ";
  $result=mysqli_query($connection,$sql);

  // create a table named agreementmasterdata1
  $sql2="
  CREATE TABLE `legal`.`agreementmasterdata1` (
    `sno` INT NOT NULL AUTO_INCREMENT,
    `General_Unic_No` VARCHAR(100) NOT NULL,
    `General_Department` VARCHAR(100) NULL,
    `General_Type_of_Agreement` VARCHAR(100) NULL,
    `General_Executing_By__IIL_HBI` VARCHAR(100) NULL,
    `General_Other_Party_Name` VARCHAR(100) NULL,
    `General_Third_party_name_in_case_of_Tripartite` VARCHAR(100) NULL,
    `General_Purpose_of_Agreement` VARCHAR(100) NULL,
    `General_Date_of_signed_copy_received` VARCHAR(100) NULL,
    `General_Date_of_Execution_of_Agreement` VARCHAR(100) NULL,
    `General_Effective_Date` VARCHAR(100) NULL,
    `General_Validity_period_of` VARCHAR(100) NULL,
    `General_Date_of_Expiry` VARCHAR(100) NULL,
    `General_Exclusive_Non_Exclusive` VARCHAR(100) NULL,
    `General_Territory` VARCHAR(100) NULL,
    `General_Termination_clause_existence` VARCHAR(100) NULL,
    `General_Period_of_notice_for_termination` VARCHAR(100) NULL,
    `General_Governing_Law` VARCHAR(100) NULL,
    `General_Arbitration` VARCHAR(100) NULL,
    `General_Who_will_appoint_Arbitrator` VARCHAR(100) NULL,
    `General_Jurisdiction__for_Courts_Arbitration` VARCHAR(100) NULL,
    `CDA_Period_of_confidentiality_after_the_expiry` VARCHAR(100) NULL,
    `M_IIL_as_company_By_back_commercialization_in_open_market` VARCHAR(100) NULL,
    `M_IIL_as_company_One_time_Fee` VARCHAR(100) NULL,
    `M_IIL_as_company_Royalty_Pct_and_the_period` VARCHAR(100) NULL,
    `M_IIL_as_company_Pct_of_penalty_and_for_what` VARCHAR(100) NULL,
    `M_IIL_as_company_who_will_fix_MRP` VARCHAR(100) NULL,
    `M_IIL_as_company_Getting_info_from_M_at_what_instances` VARCHAR(100) NULL,
    `M_IIL_as_Manufacturer_To_sell__to_c_commercializ_in_open_market` VARCHAR(100) NULL,
    `M_IIL_as_Manufacturer_One_time_fee` VARCHAR(100) NULL,
    `M_IIL_as_Manufacturer_Royalty_Pct_and_the_period` VARCHAR(100) NULL,
    `M_IIL_as_Manufacturer_Pct_of_penalty_and_for_what` VARCHAR(100) NULL,
    `M_IIL_as_Manufacturer_who_will_fix_MRP` VARCHAR(100) NULL,
    `M_IIL_as_Manufacturer_Passing_info_to_Company_at_what_instances` VARCHAR(100) NULL,
    `Lease_Registered_Unregistered` VARCHAR(100) NULL,
    `Lease_Security_Deposit` VARCHAR(100) NULL,
    `Lease_Monthly_quarterly_Half_yearly_Yearly` VARCHAR(100) NULL,
    `Lease_Lease_amount` VARCHAR(100) NULL,
    `Lease_Pct_increase_at_the_time_of_renewal` VARCHAR(100) NULL,
    `D_In_case_of_award_of_Tender_Pct_Commission` VARCHAR(100) NULL,
    `C_F_BG_Amount` VARCHAR(100) NULL,
    `C_F_BG_Expiry` VARCHAR(100) NULL,
    `C_F_Sales_Limit` VARCHAR(100) NULL,
    `C_F_Pct_Commission` VARCHAR(100) NULL,
    `C_F_Pct_Performance_Incentive` VARCHAR(100) NULL,
    `C_F_Max_Pct_Commission` VARCHAR(100) NULL,
    `C_F_Remuneration_for_institutional_Sales` VARCHAR(100) NULL,
    `Collection_Agent_Agreement_Pct_Service_Charges` VARCHAR(100) NULL,
    `CTA_Any_payment_towards_Product__Material__etc` VARCHAR(100) NULL,
    `CTA_Budget_per_Subject` VARCHAR(100) NULL,
    `CTA_Minimum_Subjects` VARCHAR(100) NULL,
    `CTA_Disbursement_schedule_by_Sponsor_to_Institution` VARCHAR(100) NULL,
    `CTA_Amount_by_Sponsor_to_Investigative_Site` VARCHAR(100) NULL,
    `Medical_waste_Disposal_Agreement_Payment_detailsl` VARCHAR(100) NULL,
    PRIMARY KEY (`sno`,`General_Unic_No`))";
  
    $result2=mysqli_query($connection,$sql2);
}
else{
  echo 'try once again';
}



?>







