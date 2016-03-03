<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Student Registration</title>
<meta http-equiv="Content name=""-Type" content="text/html; charset=utf-8" />
<link href="css/studentreg2.css" rel="stylesheet" name="" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="./font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' name="" type='text/css'>
    <style type="text/css">
body {
    margin-top:10px;
}
.stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 50%;
    position: relative;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
</style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    </head>
    
    
    <body>

<div class="container">

      <div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
          <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>Step 1</p>
      </div>
          <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>Step 2</p>
      </div>
          <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Step 3</p>
      </div>
        </div>
  </div>
      <form role="form" action="" method="post">
    <div class="row setup-content" id="step-1">
          <div class="col-xs-12">
        <div class="col-md-12">
              <div class="panel panel-primary">
                <div class="panel-heading">Step 2</div>
              <div class="panel-body">
            <div class="col-md-6 form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9"> 
                        <input name="firstName" type="text" id="firstName" placeholder="Full Name" class="form-control" autofocus>
                    </div>
    </div>
    <div class="col-md-6 form-group">
                    <label  for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9"> 
                        <input name="" type="email" id="email" placeholder="Email" class="form-control">
                    </div>
    </div>

            <div class="col-md-6 form-group hidden">
                <label  class="col-sm-3 control-label" for="student_id">ID: </label>
                <div class="col-sm-9">
                <input name="" type="text" class="form-control" id="studentid" size="40">
            </div>
            </div><br>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="program_id">Program  </label>
                <div class="col-sm-9">
                <input name="program_id" type="text" class="form-control" id="program_id" size="40">
            </div>
            </div><br>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="year">Year </label>
                <div class="col-sm-9">
                <input name="" type="text" class="form-control" id="year" size="40">
            </div>
            </div><br>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="campus">Campus </label>
                <div class="col-sm-9">
                <input name="campus_id" type="text" class="form-control" id="campus_id" size="40">
            </div>
            </div><br>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="fnenglish">Full Name (English)</label>
                <div class="col-sm-9">
                <input name="" type="text" class="form-control" id="fnenglish" size="40">
            </div>
            </div><br>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="fnhindi">Full Name (Hindi)</label>
                <div class="col-sm-9">
                <input name="" type="text" class="form-control" id="fnhindi" size="40">
            </div>
            </div><br>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="enrollment">Enrolment No. </label>
                <div class="col-sm-9">
                <input name="" type="text" class="form-control" id="enrollment" size="40">
            </div>
            </div><br>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="studentdob">DOB (DD/MM/YYYY): </label>
                <div class="col-sm-9">
                <input name="" type="text" class="form-control" id="studentdob" size="40">
            </div>
            </div><br>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="birthplace">Place of Birth</label>
                <div class="col-sm-9">
                <input name="" type="text" class="form-control" id="birthplace" size="40">
            </div>
            </div><br>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="category">Category </label>
                <div class="col-sm-9">
                <input name="" type="text" class="form-control" id="category" size="40">
            </div>
            </div><br>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="subcategory">Sub Category </label>
                <div class="col-sm-9">
                <input name="" type="textarea" class="form-control" id="subcategory" size="40">
            </div>
            </div><br>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="religion">Religion </label>
                <div class="col-sm-9">
                <input name="" type="textarea" class="form-control" id="religion" size="40">
            </div>
            </div><br>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="gender">Gender </label>
                <div class="col-sm-9">
                <input name="" type="radio" name="gender" value="male" checked> Male
        <input name="" type="radio" name="gender" value="female"> Female
        <input name="" type="radio" name="gender" value="other"> Other 
            </div>
            </div><br>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="martialstatus">Martial Status </label>
                <div class="col-sm-9">
                <input name="" type="radio" name="martialstatus" value="married" > Married
        <input name="" type="radio" name="martialstaus" value="unmarried" checked> Unmarried
            </div>
            </div><br>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="area">Area</label>
                <div class="col-sm-9">
                <input name="" type="text" class="form-control" id="area" size="40">
            </div>
            </div><br>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="bloodgroup">Blood Group </label>
                <div class="col-sm-9">
                <input name="" type="text" class="form-control" id="bloodgroup" size="40">
            </div>
            </div><br>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="nationality">Nationality </label>
                <div class="col-sm-9">
                <input name="" type="textarea" class="form-control" id="nationality" size="40">
            </div>
            </div><br>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="city">City </label>
                <div class="col-sm-9">
                <input name="" type="textarea" class="form-control" id="city" size="40">
            </div>
            </div><br>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="state">State </label>
                <div class="col-sm-9">
                <input name="" type="text" class="form-control" id="state" size="40">
            </div>
            </div><br>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="pincode">Pin Code </label>
                <div class="col-sm-9">
                <input name="" type="text" class="form-control" id="pincode" size="40">
            </div>
            </div><br>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="cphone">Phone No. (communication)</label>
                <div class="col-sm-9">
                <input name="" type="textarea" class="form-control" id="cphone" size="40">
            </div>
            </div><br>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="cemail">Email </label>
                <div class="col-sm-9">
                <input name="" type="textarea" class="form-control" id="cemail" size="40">
            </div>
            </div><br>
              <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div></div></div>
      </div>
        </div>
    <div class="row setup-content" id="step-2">
          <div class="col-xs-12 col-md-offset-0">
        <div class="col-md-12">

              <div class="panel panel-primary">
                <div class="panel-heading">Step 2</div>
              <div class="panel-body">

                <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="fname">Father First Name </label>
                <div class="col-sm-9">
                <input name="father_first_name" type="text" class="form-control" id="fname" size="40">
            </div>
            </div>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="fname">Father Last Name </label>
                <div class="col-sm-9">
                <input name="father_last_name" type="text" class="form-control" id="fname" size="40">
            </div>
            </div>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="fprofession">Father Profession </label>
                <div class="col-sm-9">
                <input name="father_profession" type="text" class="form-control" id="fprofession" size="40">
            </div>
            </div>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="foffice">Father Office Address </label>
                <div class="col-sm-9">
                <input name="father_office_addr" type="text" class="form-control" id="foffice" size="40">
            </div>
            </div>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="fcity">City </label>
                <div class="col-sm-9">
                <input name="city2" type="textarea" class="form-control" id="fcity" size="40">
            </div>
            </div>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="fstate">State </label>
                <div class="col-sm-9">
                <input name="state_id2" type="text" class="form-control" id="fstate" size="40">
            </div>
            </div>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="fpincode">Pin Code </label>
                <div class="col-sm-9">
                <input name="pincode2" type="text" class="form-control" id="fpincode" size="40">
            </div>
            </div>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="fphone">Phone No. (Father)</label>
                <div class="col-sm-9">
                <input name="phone_no2" type="textarea" class="form-control" id="fphone" size="40">
            </div>
            </div>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="femail">Email </label>
                <div class="col-sm-9">
                <input name="email2" type="textarea" class="form-control" id="femail" size="40">
            </div>
            </div>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="mname">Mother First Name </label>
                <div class="col-sm-9">
                <input name="mother_first_name" type="text" class="form-control" id="mname" size="40">
            </div>
            </div>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="mname">Mother Last Name </label>
                <div class="col-sm-9">
                <input name="mother_last_name" type="text" class="form-control" id="mname" size="40">
            </div>
            </div>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="mprofession">Mother Profession </label>
                <div class="col-sm-9">
                <input name="mother_profession" type="text" class="form-control" id="mprofession" size="40">
            </div>
            </div>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="paddress">Permanent Address </label>
                <div class="col-sm-9">
                <input name="permanent_addr" type="text" class="form-control" id="paddress" size="40">
            </div>
            </div>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="pcity">City </label>
                <div class="col-sm-9">
                <input name="city3" type="textarea" class="form-control" id="pcity" size="40">
            </div>
            </div>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="pstate">State </label>
                <div class="col-sm-9">
                <input name="state_id3" type="text" class="form-control" id="pstate" size="40">
            </div>
            </div>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="ppincode">Pin Code </label>
                <div class="col-sm-9">
                <input name="pincode3" type="text" class="form-control" id="ppincode" size="40">
            </div>
            </div>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="pphone">Phone No. </label>
                <div class="col-sm-9">
                <input name="phone_no3" type="textarea" class="form-control" id="pphone" size="40">
            </div>
            </div>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="pemail">Email </label>
                <div class="col-sm-9">
                <input name="email3" type="textarea" class="form-control" id="pemail" size="40">
            </div>
            </div>
             <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="gname">Local Guardian Name </label>
                <div class="col-sm-9">
                <input name="local_guardian_name" type="text" class="form-control" id="gname" size="40">
            </div>
            </div>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="gaddress">Guardian Address </label>
                <div class="col-sm-9">
                <input name="loca_guardian_addr" type="text" class="form-control" id="gaddress" size="40">
            </div>
            </div>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="gcity">City </label>
                <div class="col-sm-9">
                <input name="city4" type="textarea" class="form-control" id="gcity" size="40">
            </div>
            </div>
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="gphone">Phone No. </label>
                <div class="col-sm-9">
                <input name="phone_no4" type="textarea" class="form-control" id="gphone" size="40">
            </div>
                

              </div>
              <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
            </div></div>
      </div>
        </div>
    <div class="row setup-content" id="step-3">
          <div class="col-xs-12 col-md-offset-0">
        <div class="col-md-12">
              <div class="panel panel-primary">
                <div class="panel-heading">Step 3</div>

            <div class="panel-body">
              <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" for="acatagory">Admission Category</label>
                <div class="col-sm-6">
                <input name="admission_category_id" type="textarea" class="form-control" id="acatagory" size="40">
            </div>
            </div> 
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" for="fstate">Admit Card </label>
                <div class="col-sm-6">
                      <input type="radio" name="admit_card"  value="1"> Yes
                      <input type="radio" name="admit_card"  value="0" checked> No
                </div>
            </div>
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" for="fpincode">JEE Rank Card </label>
                <div class="col-sm-6">
                    <input type="radio" name="jee_rank_card"  value="1"> Yes
                    <input type="radio" name="jee_rank_card"  value="0" checked> No 
            </div>
            </div>
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" for="fphone">JEE Roll NO.</label>
                <div class="col-sm-6">
                <input name="jee_roll_no" type="textarea" class="form-control"  size="40">
            </div>
            </div>
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" >JEE Rank </label>
                <div class="col-sm-6">
                <input name="jee_rank_pos" type="textarea" class="form-control"  size="40">
            </div>
            </div>
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" >JEE Seat Allotment Letter</label>
                <div class="col-sm-6">
                    <input type="radio" name="jee_seat_allot_letter"  value="1"> Yes
                    <input type="radio" name="jee_seat_allot_letter"  value="0" checked> No 
            </div>
            </div>
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" >Markshet 10th </label>
                <div class="col-sm-6">
                    <input type="radio" name="marsheek_10"  value="1"> Yes
                    <input type="radio" name="marsheek_10"  value="0" checked> No
            </div>
                </div>
            
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" >Certificate 10th</label>
                <div class="col-sm-6">
                    <input type="radio" name="cert_10"  value="1"> Yes
                    <input type="radio" name="cert_10"  value="0" checked> No
            </div>
            </div>
            
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" for="gphone">Percentage 10th</label>
                <div class="col-sm-6">
                <input name="percentage_10" type="textarea" class="form-control" id="gphone" size="40">
            </div>
            </div>
            
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" for="gphone">10th Board Id</label>
                <div class="col-sm-6">
                <input name="board_id_10" type="textarea" class="form-control" id="gphone" size="40">
            </div>
            </div>
            
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" for="gphone">12th Marksheet</label>
                <div class="col-sm-6">
                    <input type="radio" name="marksheet_12"  value="1"> Yes
                    <input type="radio" name="marksheet_12"  value="0" checked> No
            </div>
            </div>
            
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" for="gphone">12th Certificate</label>
                <div class="col-sm-6">
                    <input type="radio" name="cert_12"  value="1"> Yes
                    <input type="radio" name="cert_12"  value="0" checked> No
            </div>
            </div>
            
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" for="gphone">12th Percentage </label>
                <div class="col-sm-6">
                <input name="percentage_12" type="textarea" class="form-control" id="gphone" size="40">
            </div>
            </div>
            
            <div class="col-md-12 form-group">
                <label  class="col-sm-3 control-label" for="gphone">Board 12th</label>
                <div class="col-sm-9">
                <input name="borad_id_12" type="textarea" class="form-control" id="gphone" size="40">
            </div>
            </div>
            
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" for="gphone">Graduation Marksheet</label>
                <div class="col-sm-6">
                    <input type="radio" name="marksheet_grad"  value="1"> Yes
                    <input type="radio" name="marksheet_grad"  value="0" checked> No
            </div>
            </div>
            
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" for="gphone">Graduation Certificate</label>
                <div class="col-sm-6">
                    <input type="radio" name="degree_grad"  value="1"> Yes
                    <input type="radio" name="degree_grad"  value="0" checked> No
            </div>
            </div>
            
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" for="gphone">Grad Percentage</label>
                <div class="col-sm-6">
                <input name="percentage_grad" type="textarea" class="form-control" id="gphone" size="40">
            </div>
            </div>
            
            <div class="col-md-12 form-group">
                <label  class="col-sm-3 control-label" >Graduation University </label>
                <div class="col-sm-9">
                <input name="university_grad_id" type="textarea" class="form-control" id="gphone" size="40">
            </div>
            </div>
            
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" >PG Marksheet</label>
                <div class="col-sm-6">
                    <input type="radio" name="marksheet_pg"  value="1"> Yes
                    <input type="radio" name="marksheet_pg"  value="0" checked> No
            </div>
            </div>
            
            
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" >PG Certificate</label>
                <div class="col-sm-6">
                    <input type="radio" name="degree_pg"  value="1"> Yes
                    <input type="radio" name="degree_pg"  value="0" checked> No
            </div>
            </div>
            
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" for="gphone">Percentage PG</label>
                <div class="col-sm-6">
                <input name="percentage_pg" type="textarea" class="form-control" id="gphone" size="40">
            </div>
            </div>
            
            
            <div class="col-md-12 form-group">
                <label  class="col-sm-3 control-label" for="gphone">University PG</label>
                <div class="col-sm-9">
                <input name="university_pg_id" type="textarea" class="form-control" id="gphone" size="40">
            </div>
            </div>
            
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" for="gphone">Gate Score Card</label>
                <div class="col-sm-6">
                    <input type="radio" name="gate_score_card"  value="1"> Yes
                    <input type="radio" name="gate_score_card"  value="0" checked> No
            </div>
            </div>
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" for="gphone">Gate Score</label>
                <div class="col-sm-6">
                <input name="gate_score" type="textarea" class="form-control" id="gphone" size="40">
            </div>
            </div>
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" for="gphone">Gate Year</label>
                <div class="col-sm-6">
                <input name="gate_year" type="textarea" class="form-control" id="gphone" size="40">
            </div>
            </div>
            
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" for="gphone">Cat Score Card</label>
                <div class="col-sm-6">
                    <input type="radio" name="cat_score_card"  value="1"> Yes
                    <input type="radio" name="cat_score_card"  value="0" checked> No
            </div>
            </div>
            
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" for="gphone">Cat year</label>
                <div class="col-sm-6">
                <input name="cat_year" type="textarea" class="form-control" id="gphone" size="40">
            </div>
            </div>
            
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" for="gphone">Cat score</label>
                <div class="col-sm-6">
                <input name="cat_score" type="textarea" class="form-control" id="gphone" size="40">
            </div>
            </div>
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label">Transfer Certificate</label>
                <div class="col-sm-6">
                    <input type="radio" name="tc"  value="1"> Yes
                    <input type="radio" name="tc"  value="0" checked> No
            </div>
            </div>
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label">Character Certificate</label>
                <div class="col-sm-6">
                    <input type="radio" name="character_cert"  value="1"> Yes
                    <input type="radio" name="character_cert"  value="0" checked> No
            </div>
            </div>
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label">Caste Certificate</label>
                <div class="col-sm-6">
                    <input type="radio" name="caste_cert"  value="1"> Yes
                    <input type="radio" name="caste_cert"  value="0" checked> No
            </div>
            </div>
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label">P.H. Certificate</label>
                <div class="col-sm-6">
                    <input type="radio" name="ph_cert"  value="1"> Yes
                    <input type="radio" name="ph_cert"  value="0" checked> No
            </div>
            </div>
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label">Passport</label>
                <div class="col-sm-6">
                    <input type="radio" name="passport"  value="1"> Yes
                    <input type="radio" name="passport"  value="0" checked> No
            </div>
            </div>
            
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" for="gphone">Passport Number</label>
                <div class="col-sm-6">
                <input name="passport_no" type="textarea" class="form-control" id="gphone" size="40">
            </div>
            </div>
            
            
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label" for="gphone">Validity Period</label>
                <div class="col-sm-6">
                <input name="validity_period" type="textarea" class="form-control" id="gphone" size="40">
            </div>
            </div>
            
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label">DASA</label>
                <div class="col-sm-6">
                    <input type="radio" name="DASA"  value="1"> Yes
                    <input type="radio" name="DASA"  value="0" checked> No
            </div>
            </div>
            <div class="col-md-4 form-group">
                <label  class="col-sm-6 control-label">Anti-Rag. Certificate</label>
                <div class="col-sm-6">
                    <input type="radio" name="anti_rag_st"  value="1"> Yes
                    <input type="radio" name="anti_rag_st"  value="0" checked> No
            </div>
            </div>
            
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="gphone">MCAIP</label>
                <div class="col-sm-9">
                <input name="mcaip" type="textarea" class="form-control" id="gphone" size="40">
            </div>
            </div>

            
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="gphone">Anti Ragging Pgremark</label>
                <div class="col-sm-9">
                <input name="anti_rag_pr" type="textarea" class="form-control" id="gphone" size="40">
            </div>
            </div>
            
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="gphone">Medical Certificate</label>
                <div class="col-sm-9">
                <input name="med_cert" type="textarea" class="form-control" id="gphone" size="40">
            </div>
            </div>
            
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="gphone">Muslim Minority</label>
                <div class="col-sm-9">
                <input name="muslim_minority" type="textarea" class="form-control" id="gphone" size="40">
            </div>
            </div>
            
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="gphone">Other Minority</label>
                <div class="col-sm-9">
                <input name="other_minority" type="textarea" class="form-control" id="gphone" size="40">
            </div>
            </div>
            
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="gphone">Admission Letter</label>
                <div class="col-sm-9">
                <input name="admission_letter" type="textarea" class="form-control" id="gphone" size="40">
            </div>
            </div>
            
            <div class="col-md-6 form-group">
                <label  class="col-sm-3 control-label" for="gphone">Remark</label>
                <div class="col-sm-9">
                <input name="remark" type="textarea" class="form-control" id="gphone" size="40">
            </div>
            </div>



              <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
            </div>
            </div>
            </div>
      </div>
        </div>
  </form>
    </div>


<script type="text/javascript">
  $(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url'],textarea[textarea]"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});
  </script>
</body>
</html>
