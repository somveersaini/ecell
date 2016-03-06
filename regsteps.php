<?php
include_once('tbs/tbs_class.php');
include_once('tbs/tbs_plugin_html.php');

$TBS = new clsTinyButStrong;
$TBS->LoadTemplate('regsteps.html');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["student_id"])) {
        $nameErr = "Name is required";
    } //empty($_POST["student_id"])
    else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        } //!preg_match("/^[a-zA-Z ]*$/", $name)
    }
    
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } //empty($_POST["email"])
    else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        } //!filter_var($email, FILTER_VALIDATE_EMAIL)
    }
    
    $program_id = $_POST["program_id"];
    $first_name = $_POST["first_name"];
    $campus_id = $_POST["campus_id"];
    $student_type_id = $_POST["student_type_id"];
    $branch_change = $_POST["branch_change"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $hindi_name = $_POST["hindi_name"];
    $enrollment_no = $_POST["enrollment_no"];
    $birth_place = $_POST["birth_place"];
    $category_id = $_POST["category_id"];
    $sub_category = $_POST["sub_category"];
    $religion_id = $_POST["religion_id"];
    $gender = $_POST["gender"];
    $marital_status = $_POST["marital_status"];
    $area = $_POST["area"];
    $blood_group = $_POST["blood_group"];
    $nationality = $_POST["nationality"];
    $communication_addr = $_POST["communication_addr"];
    $comm_city = $_POST["comm_city"];
    $comm_state_id = $_POST["comm_state_id"];
    $comm_pincode = $_POST["comm_pincode"];
    $comm_email = $_POST["comm_email"];
    $father_first_name = $_POST["father_first_name"];
    $father_last_name = $_POST["father_last_name"];
    $father_profession = $_POST["father_profession"];
    $father_office_addr = $_POST["father_office_addr"];
    $city2 = $_POST["city2"];
    $state_id2 = $_POST["state_id2"];
    $pincode2 = $_POST["pincode2"];
    $phone_no2 = $_POST["phone_no2"];
    $email2 = $_POST["email2"];
    $mother_first_name = $_POST["mother_first_name"];
    $mother_last_name = $_POST["mother_last_name"];
    $mother_profession = $_POST["mother_profession"];
    $permanent_addr = $_POST["permanent_addr"];
    $city3 = $_POST["city3"];
    $state_id3 = $_POST["state_id3"];
    $pincode3 = $_POST["pincode3"];
    $phone_no3 = $_POST["phone_no3"];
    $email3 = $_POST["email3"];
    $local_guardian_name = $_POST["local_guardian_name"];
    $loca_guardian_addr = $_POST["loca_guardian_addr"];
    $city4 = $_POST["city4"];
    $phone_no4 = $_POST["phone_no4"];
    $admission_category_id = $_POST["admission_category_id"];
    $admit_card = $_POST["admit_card"];
    $jee_rank_card = $_POST["jee_rank_card"];
    $jee_roll_no = $_POST["jee_roll_no"];
    $jee_rank_pos = $_POST["jee_rank_pos"];
    $jee_seat_allot_letter = $_POST["jee_seat_allot_letter"];
    $marsheek_10 = $_POST["marsheek_10"];
    $cert_10 = $_POST["cert_10"];
    $percentage_10 = $_POST["percentage_10"];
    $board_id_10 = $_POST["board_id_10"];
    $marksheet_12 = $_POST["marksheet_12"];
    $cert_12 = $_POST["cert_12"];
    $percentage_12 = $_POST["percentage_12"];
    $borad_id_12 = $_POST["borad_id_12"];
    $marksheet_grad = $_POST["marksheet_grad"];
    $degree_grad = $_POST["degree_grad"];
    $percentage_grad = $_POST["percentage_grad"];
    $university_grad_id = $_POST["university_grad_id"];
    $marksheet_pg = $_POST["marksheet_pg"];
    $degree_pg = $_POST["degree_pg"];
    $percentage_pg = $_POST["percentage_pg"];
    $university_pg_id = $_POST["university_pg_id"];
    $gate_score_card = $_POST["gate_score_card"];
    $gate_year = $_POST["gate_year"];
    $gate_score = $_POST["gate_score"];
    $cat_score_card = $_POST["cat_score_card"];
    $cat_year = $_POST["cat_year"];
    $cat_score = $_POST["cat_score"];
    $tc = $_POST["tc"];
    $character_cert = $_POST["character_cert"];
    $caste_cert = $_POST["caste_cert"];
    $ph_cert = $_POST["ph_cert"];
    $passport = $_POST["passport"];
    $passport_no = $_POST["passport_no"];
    $validity_period = $_POST["validity_period"];
    $mcaip = $_POST["mcaip"];
    $DASA = $_POST["DASA"];
    $remark = $_POST["remark"];
    $anti_rag_st = $_POST["anti_rag_st"];
    $anti_rag_pr = $_POST["anti_rag_pr"];
    $med_cert = $_POST["med_cert"];
    $muslim_minority = $_POST["muslim_minority"];
    $other_minority = $_POST["other_minority"];
    $admission_letter = $_POST["admission_letter"];
    $dob = $_POST["dob"];
    $comm_phone_no = $_POST["comm_phone_no"];
    
    
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        /*   $sql = "INSERT INTO student (`student_id`, `program_id`, `registration_timestamp`, `campus_id`, `student_type_id`, `branch_change`, `first_name`, `middle_name`, `last_name`, `hindi_name`, `enrollment_no`, `dob`, `birth_place`, `category_id`, `sub_category`, `religion_id`, `gender`, `marital_status`, `area`, `blood_group`, `nationality`, `communication_addr`, `city1`, `state_id1`, `pincode1`, `phone_no1`, `email1`, `father_first_name`, `father_last_name`, `father_profession`, `father_office_addr`, `city2`, `state_id2`, `pincode2`, `phone_no2`, `email2`, `mother_first_name`, `mother_last_name`, `mother_profession`, `permanent_addr`, `city3`, `state_id3`, `pincode3`, `phone_no3`, `email3`, `local_guardian_name`, `loca_guardian_addr`, `city4`, `phone_no4`, `admission_category_id`, `admit_card`, `jee_rank_card`, `jee_roll_no`, `jee_rank_pos`, `jee_seat_allot_letter`, `marsheek_10`, `cert_10`, `percentage_10`, `board_id_10`, `marksheet_12`, `cert_12`, `percentage_12`, `borad_id_12`, `marksheet_grad`, `degree_grad`, `percentage_grad`, `university_grad_id`, `marksheet_pg`, `degree_pg`, `percentage_pg`, `university_pg_id`, `gate_score_card`, `gate_year`, `gate_score`, `cat_score_card`, `cat_year`, `cat_score`, `tc`, `character_cert`, `caste_cert`, `ph_cert`, `passport`, `passport_no`, `validity_period`, `mcaip`, `DASA`, `remark`, `anti_rag_st`, `anti_rag_pr`, `med_cert`, `muslim_minority`, `other_minority`, `admission_letter`) VALUES (NULL, '$program_id', CURRENT_TIMESTAMP, '$campus_id', '$student_type_id', '$branch_change', '$first_name', '$middle_name', '$last_name', '$hindi_name', '$enrollment_no', '$dob', '$birth_place', '$category_id', '$sub_category', '$religion_id', '$gender', '$marital_status', '$area', '$blood_group', '$nationality', '$communication_addr', '$city1', '$state_id1', '$pincode1', '$phone_no1', '$email1', '$father_first_name', '$father_last_name', '$father_profession', '$father_office_addr', '$city2', '$state_id2', '$pincode2', '$phone_no2', '$email2', '$mother_first_name', '$mother_last_name', '$mother_profession', '$permanent_addr', '$city3', '$state_id3', '$pincode3', '$phone_no3', '$email3', '$local_guardian_name', '$loca_guardian_addr', '$city4', '$phone_no4', '$admission_category_id', '$admit_card', '$jee_rank_card', '$jee_roll_no', '$jee_rank_pos', '$jee_seat_allot_letter', '$marsheek_10', '$cert_10', '$percentage_10', '$board_id_10', '$marksheet_12', '$cert_12', '$percentage_12', '$borad_id_12', '$marksheet_grad', '$degree_grad', '$percentage_grad', '$university_grad_id', '$marksheet_pg', '$degree_pg', '$percentage_pg', '$university_pg_id', '$gate_score_card', '$gate_year', '$gate_score', '$cat_score_card', '$cat_year', '$cat_score', '$tc', '$character_cert', '$caste_cert', '$ph_cert', '$passport', '$passport_no', '$validity_period', '$mcaip', '$DASA', '$remark', '$anti_rag_st', '$anti_rag_pr', '$med_cert', '$muslim_minority', '$other_minority', '$admission_letter')";
         */
        
        
        $sql = "INSERT INTO `student` (`student_id`, `program_id`, `registration_timestamp`, `campus_id`, `student_type_id`, `branch_change`, `first_name`, `middle_name`, `last_name`, `hindi_name`, `enrollment_no`, `dob`, `birth_place`, `category_id`, `sub_category`, `religion_id`, `gender`, `marital_status`, `area`, `blood_group`, `nationality`, `communication_addr`, `comm_city`, `comm_state_id`, `comm_pincode`, `comm_phone_no`, `comm_email`, `father_first_name`, `father_last_name`, `father_profession`, `father_office_addr`, `father_city`, `father_state_id`, `father_pincode`, `father_phone_no`, `father_email`, `mother_first_name`, `mother_last_name`, `mother_profession`, `permanent_addr`, `perm_city`, `perm_state_id`, `perm_pincode`, `perm_phone_no`, `perm_email`, `local_guardian_name`, `loca_guardian_addr`, `local_guard_city`, `local_guard_phone_no`, `admission_category_id`, `admit_card`, `jee_rank_card`, `jee_roll_no`, `jee_rank_pos`, `jee_seat_allot_letter`, `marsheek_10`, `cert_10`, `percentage_10`, `board_id_10`, `marksheet_12`, `cert_12`, `percentage_12`, `borad_id_12`, `marksheet_grad`, `degree_grad`, `percentage_grad`, `university_grad_id`, `marksheet_pg`, `degree_pg`, `percentage_pg`, `university_pg_id`, `gate_score_card`, `gate_year`, `gate_score`, `cat_score_card`, `cat_year`, `cat_score`, `tc`, `character_cert`, `caste_cert`, `ph_cert`, `passport`, `passport_no`, `validity_period`, `mcaip`, `DASA`, `remark`, `anti_rag_st`, `anti_rag_pr`, `med_cert`, `muslim_minority`, `other_minority`, `admission_letter`, `status_id`, `log_id`) VALUES (NULL, '$program_id', CURRENT_TIMESTAMP, '$campus_id', '$student_type_id', '$branch_change', '$first_name', '$middle_name', '$last_name', '$hindi_name', '$enrollment_no', '$dob', '$birth_place', '$category_id', '$sub_category', '$religion_id', '$gender', '$marital_status', '$area', '$blood_group', '$nationality', '$communication_addr', '$comm_city', '$comm_state_id', '$comm_pincode', '$comm_phone_no', '$comm_email', '$father_first_name', '$father_last_name', '$father_profession', '$father_office_addr', '$city2', '$state_id2', '$pincode2', '$phone_no2', '$email2', '$mother_first_name', '$mother_last_name', '$mother_profession', '$permanent_addr', '$city3', '$state_id3', '$pincode3', '$phone_no3', '$email3', '$local_guardian_name', '$loca_guardian_addr', '$city4', '$phone_no4', '$admission_category_id', '$admit_card', '$jee_rank_card', '$jee_roll_no', '$jee_rank_pos', '$jee_seat_allot_letter', '$marsheek_10', '$cert_10', '$percentage_10', '$board_id_10', '$marksheet_12', '$cert_12', '$percentage_12', '$borad_id_12', '$marksheet_grad', '$degree_grad', '$percentage_grad', '$university_grad_id', '$marksheet_pg', '$degree_pg', '$percentage_pg', '$university_pg_id', '$gate_score_card', '$gate_year', '$gate_score', '$cat_score_card', '$cat_year', '$cat_score', '$tc', '$character_cert', '$caste_cert', '$ph_cert', '$passport', '$passport_no', '$validity_period', '$mcaip', '$DASA', '$remark', '$anti_rag_st', '$anti_rag_pr', '$med_cert', '$muslim_minority', '$other_minority', '$admission_letter', '', '')";
        
        
        
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New student registered successfully";
    }
    catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
} 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$TBS->MergeBlock('program', $conn, 'SELECT * FROM student_type');
$TBS->MergeBlock('religion', $conn, 'SELECT * FROM religion');
$TBS->MergeBlock('category', $conn, 'SELECT * FROM category');
$TBS->MergeBlock('campus', $conn, 'SELECT * FROM campus');
$TBS->MergeBlock('state, state2, state3', $conn, 'SELECT * FROM state');

$TBS->Show();

?>