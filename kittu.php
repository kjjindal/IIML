<?php
include 'dbconnect.php';
$success=false;
?>

<?php

error_reporting(0);

?>
<?php
$unq=array("General"=>"GENE","CDA"=>"CDAA","Lease"=>"LEAS","CTA"=>"CTAA","Medical waste Disposal Agreement"=>"MWDA","C_F"=>"CANF","Manufacturing(IIL as Manufacturer)"=>"MIIM","Collection Agent Agreement"=>"COLL","Distribution"=>"DIST","Manufacturing(IIL as company)"=>"MIIC");
if(isset($_GET['doc'])){
  $unqw=$unq[$_GET['doc']];

}

$sql="SELECT * FROM `legal`.`agreementmasterdata1`  ";
$result=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($result)){
   $sno=$row['sno'];
   $date=date('dmY');
   $unic_no=$unqw."/".($sno+1)."/".$date;  
 }

?>




 <!-- for insert data into database -->
 <?php

 if($_SERVER['REQUEST_METHOD']=='POST'){
   $e1= $_POST['General_Unic_No'];
   $e2= $_POST['General_Department'];
   $e3= $_POST['General_Type_of_Agreement'];
   $e4= $_POST['General_Executing_By__IIL_HBI'];
   $e5= $_POST['General_Other_Party_Name'];
   $e6= $_POST['General_Third_party_name_in_case_of_Tripartite'];
   $e7= $_POST['General_Purpose_of_Agreement'];
   $e8= $_POST['General_Date_of_signed_copy_received'];
   $e9= $_POST['General_Date_of_Execution_of_Agreement'];
   $e10= $_POST['General_Effective_Date'];
   $e11= $_POST['General_Validity_period_of'];
   $e12= $_POST['General_Date_of_Expiry'];
   $e13= $_POST['General_Exclusive_Non_Exclusive'];
   $e14= $_POST['General_Territory'];
   $e15= $_POST['General_Termination_clause_existence'];
   $e16= $_POST['General_Period_of_notice_for_termination'];
   $e17= $_POST['General_Governing_Law'];
   $e18= $_POST['General_Arbitration'];
   $e19= $_POST['General_Who_will_appoint_Arbitrator'];
   $e20= $_POST['General_Jurisdiction__for_Courts_Arbitration'];
   $e21= $_POST['CDA_Period_of_confidentiality_after_the_expiry_Termination_of_the_Agreement'];
   $e22= $_POST['Manufacturing_IIL_as_company_By_back_commercialization_in_open_market'];
   $e23= $_POST['Manufacturing_IIL_as_company_One_time_Fee'];
   $e24= $_POST['Manufacturing_IIL_as_company_Royalty_Pct_and_the_period'];
   $e25= $_POST['Manufacturing_IIL_as_company_Pct_of_penalty_and_for_what'];
   $e26= $_POST['Manufacturing_IIL_as_company_who_will_fix_MRP'];
   $e27= $_POST['Manufacturing_IIL_as_company_Getting_info_from_Manufacturer_at_what_instances'];
   $e28= $_POST['Manufacturing_IIL_as_Manufacturer_To_sell_to_company_commercialization_in_open_market'];
   $e29= $_POST['Manufacturing_IIL_as_Manufacturer_One_time_fee'];
   $e30= $_POST['Manufacturing_IIL_as_Manufacturer_Royalty_Pct_and_the_period'];
   $e31= $_POST['Manufacturing_IIL_as_Manufacturer_Pct_of_penalty_and_for_what'];
   $e32= $_POST['Manufacturing_IIL_as_Manufacturer_who_will_fix_MRP'];
   $e33= $_POST['Manufacturing_IIL_as_Manufacturer_Passing_info_to_Company_at_what_instances'];
   $e34= $_POST['Lease_Registered_Unregistered'];
   $e35= $_POST['Lease_Security_Deposit'];
   $e36= $_POST['Lease_Monthly_quarterly_Half_yearly_Yearly'];
   $e37= $_POST['Lease_Lease_amount'];
   $e38= $_POST['Lease_Pct_increase_at_the_time_of_renewal'];
   $e39=  $_POST['Distribution_In_case_of_award_of_Tender_Pct_Commission'];
   $e40= $_POST['C_F_BG_Amount'];
   $e41= $_POST['C_F_BG_Expiry'];
   $e42= $_POST['C_F_Sales_Limit'];
   $e43= $_POST['C_F_Pct_Commission'];
   $e44= $_POST['C_F_Pct_Performance_Incentive'];
   $e45= $_POST['C_F_Max_Pct_Commission'];
   $e46= $_POST['C_F_Remuneration_for_institutional_Sales'];
   $e47= $_POST['Collection_Agent_Agreement_Pct_Service_Charges'];
   $e48= $_POST['CTA_Any_payment_towards_Product__Material__etc'];
   $e49= $_POST['CTA_Budget_per_Subject'];
   $e50= $_POST['CTA_Minimum_Subjects'];
   $e51= $_POST['CTA_Disbursement_schedule_by_Sponsor_to_Institution'];
   $e52= $_POST['CTA_Amount_by_Sponsor_to_Investigative_Site'];
   $e53= $_POST['Medical_waste_Disposal_Agreement_Payment_details'];


   

  //  $sql="INSERT INTO agreementmasterdata1 (General_Unic_No) VALUES ('$e1')";
   

   $sql="INSERT INTO `legal`.`agreementmasterdata1` (`General_Unic_No`, `General_Department`, `General_Type_of_Agreement`, `General_Executing_By__IIL_HBI`, `General_Other_Party_Name`, `General_Third_party_name_in_case_of_Tripartite`, `General_Purpose_of_Agreement`, `General_Date_of_signed_copy_received`, `General_Date_of_Execution_of_Agreement`, `General_Effective_Date`, `General_Validity_period_of`, `General_Date_of_Expiry`, `General_Exclusive_Non_Exclusive`, `General_Territory`, `General_Termination_clause_existence`, `General_Period_of_notice_for_termination`, `General_Governing_Law`, `General_Arbitration`, `General_Who_will_appoint_Arbitrator`, `General_Jurisdiction__for_Courts_Arbitration`, `CDA_Period_of_confidentiality_after_the_expiry`, `M_IIL_as_company_By_back_commercialization_in_open_market`, `M_IIL_as_company_One_time_Fee`, `M_IIL_as_company_Royalty_Pct_and_the_period`, `M_IIL_as_company_Pct_of_penalty_and_for_what`, `M_IIL_as_company_who_will_fix_MRP`, `M_IIL_as_company_Getting_info_from_M_at_what_instances`, `M_IIL_as_Manufacturer_To_sell__to_c_commercializ_in_open_market`, `M_IIL_as_Manufacturer_One_time_fee`, `M_IIL_as_Manufacturer_Royalty_Pct_and_the_period`, `M_IIL_as_Manufacturer_Pct_of_penalty_and_for_what`, `M_IIL_as_Manufacturer_who_will_fix_MRP`, `M_IIL_as_Manufacturer_Passing_info_to_Company_at_what_instances`, `Lease_Registered_Unregistered`, `Lease_Security_Deposit`, `Lease_Monthly_quarterly_Half_yearly_Yearly`, `Lease_Lease_amount`, `Lease_Pct_increase_at_the_time_of_renewal`, `D_In_case_of_award_of_Tender_Pct_Commission`, `C_F_BG_Amount`, `C_F_BG_Expiry`, `C_F_Sales_Limit`, `C_F_Pct_Commission`, `C_F_Pct_Performance_Incentive`, `C_F_Max_Pct_Commission`, `C_F_Remuneration_for_institutional_Sales`, `Collection_Agent_Agreement_Pct_Service_Charges`, `CTA_Any_payment_towards_Product__Material__etc`, `CTA_Budget_per_Subject`, `CTA_Minimum_Subjects`, `CTA_Disbursement_schedule_by_Sponsor_to_Institution`, `CTA_Amount_by_Sponsor_to_Investigative_Site`, `Medical_waste_Disposal_Agreement_Payment_detailsl`) VALUES ('$e1', '$e2', '$e3', '$e4', '$e5', '$e6', '$e7', '$e8', '$e9', '$e10', '$e11', '$e12', '$e13', '$e14', '$e15', '$e16', '$e17', '$e18', '$e19', '$e20', '$e21', '$e22', '$e23', '$e24', '$e25', '$e26', '$e27', '$e28', '$e29', '$e30', '$e31', '$e32','$e33', '$e34', '$e35', '$e36', '$e37', '$e38', '$e39', '$e40', '$e41', '$e42', '$e43', '$e44', '$e45', '$e46', '$e47', '$e48', '$e49', '$e50', '$e51', '$e52', '$e53')";
   $result=mysqli_query($conn,$sql);
   if($result){
      $success=true;
   }
  }
?>


























<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <link rel="icon" href="document.png">
    <title>Legal Document</title>
  </head>
  <body style="background-color: #f0f2f5;">
  <?php

  if($success){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
     <strong>Successfully Submitted !</strong> Feels Free to submit another document details. 
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>';
  }



?>
  <section class="my-5"  >
  <div class="container-fluid shadow bg-light"style="height:auto;margin:0 auto;width:90%" >
  <div class="row mr-0">
  <!-- <div class="col-md-5 pl-0">
  <img src="document.jpg" width="100%" height="100%" >
  </div> -->
  <div class="col-md-12">
      <h2 class="text-center mt-5 mb-3"  style="color: darkblue;"  > Create A Legal Document   </h2>

<div class="btn-group mb-4" style="left:41%;"    >
  <button type="button" class="btn btn-danger dropdown-toggle" id="check" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
    Document Type
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="kittu.php?doc=General">General</a>
    <a class="dropdown-item" href="kittu.php?doc=CDA">CDA</a>
    <a class="dropdown-item" href="kittu.php?doc=Lease">Lease	</a>
    <a class="dropdown-item" href="kittu.php?doc=CTA">CTA	</a>
    <a class="dropdown-item" href="kittu.php?doc=Medical waste Disposal Agreement">Medical waste Disposal Agreement	
	</a>
    <a class="dropdown-item" href="kittu.php?doc=C_F">C& F	
	</a>
    <a class="dropdown-item" href="kittu.php?doc=Manufacturing(IIL as Manufacturer)">  Manufacturing (IIL as Manufacturer)	
  	</a>
    <a class="dropdown-item" href="kittu.php?doc=Collection Agent Agreement">Collection Agent Agreement	
	</a>
    <a class="dropdown-item" href="kittu.php?doc=Distribution">Distribution</a>
    <a class="dropdown-item" href="kittu.php?doc=Manufacturing(IIL as company)">   Manufacturing (IIL as company)   </a>

  </div>
</div>
<form class="needs-validation"  action="kittu.php"  method="post" novalidate>
<?php
if(!isset($_GET['doc'])){

  echo '<div class="jumbotron jumbotron-fluid mt-5">
  <div class="container">
  <marquee direction="left"  ><h1 class="display-4">Choose one Document Type </h1> </marquee> 
  </div>
</div>';
}

else{
  echo '
  <div class="form-row">
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom01">General_Unic_No</label>

    <input type="text" class="form-control" id="validationCustom01" name="General_Unic_No" required value='.$unic_no.' readonly>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom02">General_Department</label>
  
      <input type="text" class="form-control" id="validationCustom02"   name="General_Department"  required>
  
      <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom03">General_Type_of_Agreement</label>
    <input type="text" class="form-control" id="validationCustom03"   name="General_Type_of_Agreement" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
</div>

<div class="form-row">
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom04">General_Executing_By__IIL_HBI</label>
  
    <input type="text" class="form-control" id="validationCustom04"   name="General_Executing_By__IIL_HBI" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
<div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom05">General_Other_Party_Name</label>

    <input type="text" class="form-control" id="validationCustom05"   name="General_Other_Party_Name" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
 
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom06">General_Third_party_name_in_case_of_Tripartite</label>
  
    <input type="text" class="form-control" id="validationCustom06"   name="General_Third_party_name_in_case_of_Tripartite" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>



</div>
<div class="form-row">
 
</div><div class="form-row">
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom07">General_Purpose_of_Agreement</label>

    <input type="text" class="form-control" id="validationCustom07"   name="General_Purpose_of_Agreement" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom08">General_Date_of_signed_copy_received</label>
  
    <input type="date" class="form-control" id="validationCustom08"   name="General_Date_of_signed_copy_received" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom09">General_Date_of_Execution_of_Agreement</label>

    <input type="date" class="form-control" id="validationCustom09"    name="General_Date_of_Execution_of_Agreement" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
</div>

<div class="form-row">
  
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom10">General_Effective_Date</label>
  
    <input type="date" class="form-control" id="validationCustom10"   name="General_Effective_Date" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
 <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom11">General_Validity_period_of</label>

    <input type="date" class="form-control" id="validationCustom11"   name="General_Validity_period_of" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
 
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom12">General_Date_of_Expiry</label>
  
    <input type="date" class="form-control" id="validationCustom12"   name="General_Date_of_Expiry" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
</div>
<div class="form-row">
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom13">General_Exclusive_Non_Exclusive</label>

    <input type="text" class="form-control" id="validationCustom13"   name="General_Exclusive_Non_Exclusive" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom14">General_Territory</label>
  
    <input type="text" class="form-control" id="validationCustom14"   name="General_Territory" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom15">General_Termination_clause_existence</label>

    <input type="text" class="form-control" id="validationCustom15"   name="General_Termination_clause_existence"   required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>



</div>
<div class="form-row">
 
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom16">General_Period_of_notice_for_termination</label>
  
    <input type="text" class="form-control" id="validationCustom16"   name="General_Period_of_notice_for_termination" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
 <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom17">General_Governing_Law</label>

    <input type="text" class="form-control" id="validationCustom17"   name="General_Governing_Law" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
<div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom18">General_Arbitration</label>
  
    <input type="text" class="form-control" id="validationCustom18"   name="General_Arbitration" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

</div>
<div class="form-row">
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom19">General_Who_will_appoint_Arbitrator</label>

    <input type="text" class="form-control" id="validationCustom19"   name="General_Who_will_appoint_Arbitrator" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom20">General_Jurisdiction__for_Courts_Arbitration</label>
  
    <input type="text" class="form-control" id="validationCustom20"   name="General_Jurisdiction__for_Courts_Arbitration" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
</div>
  ';
if($_GET['doc']=='CDA'){
  echo'
  <div class="form-row">
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom21">CDA_Period_of_confidentiality_after_the_expiry_Termination_of_the_Agreement</label>

    <input type="text" class="form-control" id="validationCustom21"   name="CDA_Period_of_confidentiality_after_the_expiry_Termination_of_the_Agreement" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  </div>
  ';
}
if($_GET['doc']=='Lease'){
  echo '
  <div class="form-row">
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom22">Lease_Registered_Unregistered</label>
    
  <input type="text" class="form-control" id="validationCustom22"   name="Lease_Registered_Unregistered" value="" required>
  <div class="valid-feedback">
    Looks good!
  </div>
</div>
<div class="col-md-4 mb-3" style="word-break:break-word">
<label for="validationCustom23">Lease_Security_Deposit</label>

  <input type="text" class="form-control" id="validationCustom23"   name="Lease_Security_Deposit" required>
  <div class="valid-feedback">
    Looks good!
  </div>
</div>
<div class="col-md-4 mb-3" style="word-break:break-word">
<label for="validationCustom24">Lease_Monthly_quarterly_Half_yearly_Yearly</label>

  <input type="text" class="form-control" id="validationCustom24"   name="Lease_Monthly_quarterly_Half_yearly_Yearly" required>
  <div class="valid-feedback">
    Looks good!
  </div>
</div>

</div>
<div class="form-row">

<div class="col-md-4 mb-3" style="word-break:break-word">
<label for="validationCustom25">Lease_Lease_amount</label>

  <input type="text" class="form-control" id="validationCustom25"   name="Lease_Lease_amount" required>
  <div class="valid-feedback">
    Looks good!
  </div>
</div>
<div class="col-md-4 mb-3" style="word-break:break-word">
<label for="validationCustom26">Lease_Pct_increase_at_the_time_of_renewal</label>

  <input type="text" class="form-control" id="validationCustom26"   name="Lease_Pct_increase_at_the_time_of_renewal" required>
  <div class="valid-feedback">
    Looks good!
  </div>
</div>
</div>
  ';


}

if($_GET['doc']=='CTA'){
  echo '
  <div class="form-row">
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom27">CTA_Any_payment_towards_Product__Material__etc</label>
    
      <input type="text" class="form-control" id="validationCustom27"   name="CTA_Any_payment_towards_Product__Material__etc" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
 <div class="col-md-4 mb-3" style="word-break:break-word">
 <label for="validationCustom28">CTA_Budget_per_Subject</label>
  
      <input type="text" class="form-control" id="validationCustom28"   name="CTA_Budget_per_Subject" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4 mb-3" style="word-break:break-word">
 <label for="validationCustom29">CTA_Minimum_Subjects</label>
    
      <input type="text" class="form-control" id="validationCustom29"   name="CTA_Minimum_Subjects" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
  <div class="form-row">
   
 <div class="col-md-4 mb-3" style="word-break:break-word">
 <label for="validationCustom30">CTA_Disbursement_schedule_by_Sponsor_to_Institution</label>
  
      <input type="text" class="form-control" id="validationCustom30"   name="CTA_Disbursement_schedule_by_Sponsor_to_Institution" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
 <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom31">CTA_Amount_by_Sponsor_to_Investigative_Site</label>

    <input type="text" class="form-control" id="validationCustom31"   name="CTA_Amount_by_Sponsor_to_Investigative_Site" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  </div>
  ';

}

if($_GET['doc']=='Medical waste Disposal Agreement'){

  echo '
  <div class="form-row">
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom32">Medical_waste_Disposal_Agreement_Payment_details</label>
    
  <input type="text" class="form-control" id="validationCustom32"   name="Medical_waste_Disposal_Agreement_Payment_details" required>
  <div class="valid-feedback">
    Looks good!
  </div>
</div>
</div>
  
  ';


}
if($_GET['doc']=='C_F'){

  echo '
  <div class="form-row">
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom33">C_F_BG_Amount</label>
    
  <input type="text" class="form-control" id="validationCustom33"   name="C_F_BG_Amount" required>
  <div class="valid-feedback">
    Looks good!
  </div>
</div>
<div class="col-md-4 mb-3" style="word-break:break-word">
<label for="validationCustom34">C_F_BG_Expiry</label>

  <input type="text" class="form-control" id="validationCustom34"   name="C_F_BG_Expiry" required>
  <div class="valid-feedback">
    Looks good!
  </div>
</div>
<div class="col-md-4 mb-3" style="word-break:break-word">
<label for="validationCustom35">C_F_Sales_Limit</label>

  <input type="text" class="form-control" id="validationCustom35"   name="C_F_Sales_Limit" required>
  <div class="valid-feedback">
    Looks good!
  </div>
</div>
</div>
<div class="form-row">


<div class="col-md-4 mb-3" style="word-break:break-word">
<label for="validationCustom36">C_F_Pct_Commission</label>

  <input type="text" class="form-control" id="validationCustom36"   name="C_F_Pct_Commission" required>
  <div class="valid-feedback">
    Looks good!
  </div>
</div>

<div class="col-md-4 mb-3" style="word-break:break-word">
<label for="validationCustom37">C_F_Pct_Performance_Incentive</label>

  <input type="text" class="form-control" id="validationCustom37"   name="C_F_Pct_Performance_Incentive" required>
  <div class="valid-feedback">
    Looks good!
  </div>
</div>

<div class="col-md-4 mb-3" style="word-break:break-word">
<label for="validationCustom38">C_F_Max_Pct_Commission</label>

  <input type="text" class="form-control" id="validationCustom38"   name="C_F_Max_Pct_Commission" required>
  <div class="valid-feedback">
    Looks good!
  </div>
</div>
</div>
<div class="form-row">

</div>
<div class="form-row">

<div class="col-md-4 mb-3" style="word-break:break-word">
<label for="validationCustom39">C_F_Remuneration_for_institutional_Sales</label>

  <input type="text" class="form-control" id="validationCustom39"   name="C_F_Remuneration_for_institutional_Sales" required>
  <div class="valid-feedback">
    Looks good!
  </div>
</div>
</div>';
}
if($_GET['doc']=='Manufacturing(IIL as Manufacturer)'){
  echo '
  <div class="form-row">

  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom40">Manufacturing_IIL_as_Manufacturer_To_sell_to_company_commercialization_in_open_market</label>
    
  <input type="text" class="form-control" id="validationCustom40"    name="Manufacturing_IIL_as_Manufacturer_To_sell_to_company_commercialization_in_open_market" required>
  <div class="valid-feedback">
    Looks good!
  </div>
</div>
<div class="col-md-4 mb-3" style="word-break:break-word">
<label for="validationCustom41">Manufacturing_IIL_as_Manufacturer_One_time_fee</label>

  <input type="text" class="form-control" id="validationCustom41"   name="Manufacturing_IIL_as_Manufacturer_One_time_fee" required>
  <div class="valid-feedback">
    Looks good!
  </div>
</div>
<div class="col-md-4 mb-3" style="word-break:break-word">
<label for="validationCustom42">Manufacturing_IIL_as_Manufacturer_Royalty_Pct_and_the_period</label>

  <input type="text" class="form-control" id="validationCustom42"   name="Manufacturing_IIL_as_Manufacturer_Royalty_Pct_and_the_period" required>
  <div class="valid-feedback">
    Looks good!
  </div>
</div>
</div>
<div class="form-row">


<div class="col-md-4 mb-3" style="word-break:break-word">
<label for="validationCustom43">Manufacturing_IIL_as_Manufacturer_Pct_of_penalty_and_for_what</label>

  <input type="text" class="form-control" id="validationCustom43"   name="Manufacturing_IIL_as_Manufacturer_Pct_of_penalty_and_for_what" required>
  <div class="valid-feedback">
    Looks good!
  </div>
</div>

<div class="col-md-4 mb-3" style="word-break:break-word">
<label for="validationCustom44">Manufacturing_IIL_as_Manufacturer_who_will_fix_MRP</label>

  <input type="text" class="form-control" id="validationCustom44"   name="Manufacturing_IIL_as_Manufacturer_who_will_fix_MRP" required>
  <div class="valid-feedback">
    Looks good!
  </div>
</div>

<div class="col-md-4 mb-3" style="word-break:break-word">
<label for="validationCustom45">Manufacturing_IIL_as_Manufacturer_Passing_info_to_Company_at_what_instances</label>

  <input type="text" class="form-control" id="validationCustom45"   name="Manufacturing_IIL_as_Manufacturer_Passing_info_to_Company_at_what_instances" required>
  <div class="valid-feedback">
    Looks good!
  </div>
</div>
</div> ';
}

if($_GET['doc']=='Manufacturing(IIL as company)'){

  echo '
  <div class="form-row">
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom46">Manufacturing_IIL_as_company_By_back_commercialization_in_open_market</label>
  
    <input type="text" class="form-control" id="validationCustom46"   name="Manufacturing_IIL_as_company_By_back_commercialization_in_open_market" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
   <div class="col-md-4 mb-3" style="word-break:break-word">
   <label for="validationCustom47">Manufacturing_IIL_as_company_One_time_Fee</label>

    <input type="text" class="form-control" id="validationCustom47"   name="Manufacturing_IIL_as_company_One_time_Fee" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom48">Manufacturing_IIL_as_company_Royalty_Pct_and_the_period</label>

    <input type="text" class="form-control" id="validationCustom48"   name="Manufacturing_IIL_as_company_Royalty_Pct_and_the_period" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
</div>
<div class="form-row">
 
<div class="col-md-4 mb-3" style="word-break:break-word">
<label for="validationCustom49">Manufacturing_IIL_as_company_Pct_of_penalty_and_for_what</label>

    <input type="text" class="form-control" id="validationCustom49"   name="Manufacturing_IIL_as_company_Pct_of_penalty_and_for_what" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom50">Manufacturing_IIL_as_company_who_will_fix_MRP</label>
  
    <input type="text" class="form-control" id="validationCustom50"   name="Manufacturing_IIL_as_company_who_will_fix_MRP" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
 <div class="col-md-4 mb-3" style="word-break: break-word;">
  <label for="validationCustom51">Manufacturing_IIL_as_company_Getting_info_from_Manufacturer_at_what_instances</label>

    <input type="text" class="form-control" id="validationCustom51"   name="Manufacturing_IIL_as_company_Getting_info_from_Manufacturer_at_what_instances" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
</div>';

}

if($_GET['doc']=='Distribution'){
  echo'
  <div class="form-row">
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom52">Distribution_In_case_of_award_of_Tender_Pct_Commission </label>

    <input type="text" class="form-control" id="validationCustom52"   name="Distribution_In_case_of_award_of_Tender_Pct_Commission" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  </div>
  ';
}


if($_GET['doc']=='Collection Agent Agreement'){
  echo '<div class="form-row">
  <div class="col-md-4 mb-3" style="word-break:break-word">
  <label for="validationCustom53">Collection_Agent_Agreement_Pct_Service_Charges</label>
  
    <input type="text" class="form-control" id="validationCustom53"   name="Collection_Agent_Agreement_Pct_Service_Charges" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  </div>';
}
echo '<div class="form-row d-flex justify-content-center my-5">
<button class="btn btn-success mr-1" type="submit"  >Submit</button>
<a class="btn btn-warning mr-1" href="home.php" >Cancel</a>
<a class="btn btn-danger mr-1" href="kittu.php" onclick="clear_check()" ">Clear</a>


</div>
</form>';

}
?>


  
 

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
   
  
  </div>




  
  
  
  
  
  </div>
  </div>
  
  
  
  
  
  
  
  
  
  </section>












    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
      
        var c=document.getElementById('check');
        console.log(c);
        console.log(c.innerText);
        c.innerText='<?php  
        if(isset($_GET['doc'])){
         echo  $_GET['doc'];
        }      

        else{
          echo 'Document Type';
        }
        ?>';
        // function clear_check(){
        //   var entry=document.getElementsByTagName('input');
        //   console.log(entry);
        //   // for(let i=1;i<entry.length;i++){
        //   //   entry[i].value=" ";
        //   // }
        // }
</script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>