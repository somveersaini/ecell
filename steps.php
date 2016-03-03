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
          <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
              <h3> Step 1</h3>
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
            </div>
      </div>
        </div>
    <div class="row setup-content" id="step-2">
          <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
              <h3> Step 2</h3>
              <div class="form-group">
            <label class="control-label">Company Name</label>
            <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Name" />
          </div>
              <div class="form-group">
            <label class="control-label">Company Address</label>
            <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address"  />
          </div>
              <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
      </div>
        </div>
    <div class="row setup-content" id="step-3">
          <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
              <h3> Step 3</h3>
              <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
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
