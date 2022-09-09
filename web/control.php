<?php
include_once('model.php');
class control extends model
{
    function __construct()
    {
        session_start();
        model::__construct();
        $path = $_SERVER['PATH_INFO'];
        switch ($path) {
            case '/home':
                include_once('index.php');
                break;

            case '/register':
                if (isset($_REQUEST['Register'])) {
                    $name = $_REQUEST['name'];
                    $gender = $_REQUEST['gender'];
                    $mobile = $_REQUEST['mobile'];
                    $email = $_REQUEST['email'];
                    $password = $_REQUEST['password'];
                    $enc_password = md5($password);
                    // image uploading
                    $image = $_FILES['image']['name'];
                    $path = '../upload/user/' . $image;
                    $tmp_img = $_FILES['image']['tmp_name'];
                    move_uploaded_file($tmp_img, $path);

                    date_default_timezone_set('asia/calcutta');
                    $created_dt = date("Y-m-d H:i:s");
                    $updated_dt = date("Y-m-d H:i:s");


                    $arr = array("name" => $name, "gender" => $gender, "mobile" => $mobile, "email" => $email, "password" => $enc_password, "image" => $image, "created_dt" => $created_dt, "updated_dt" => $updated_dt);
                    $res = $this->insert('user', $arr);
                    if ($res) {
                        echo "<script>
						alert('Register Success');
						window.location='home';
						</script>";
                    } else {
                        echo "<script>
						alert('This email is already registered.');
						window.location='home';
						</script>";
                    }
                }
                include_once('index.php');
                break;

            case '/login':
                if (isset($_REQUEST['Login'])) {
                    $email = $_REQUEST['email'];
                    $password = $_REQUEST['password'];
                    $enc_password = md5($password);

                    $where = array("email" => $email, "password" => $enc_password);
                    $res = $this->select_where('user', $where);
                    $chk = $res->num_rows; // check cond by rows and ans in true of false
                    if ($chk == 1) // 1 means true and 0 means false
                    {
                        $fetch = $res->fetch_object();
                        $status = $fetch->status;
                        if ($status == 'Unblock') {
                            $user_id = $fetch->user_id;
                            $_SESSION['user'] = $email;
                            $_SESSION['user_id'] = $user_id;
                            echo "<script>
						alert('Login Success');
						window.location='home';
						</script>";
                        } else {
                        }
                    } else {
                        echo "<script>
						alert('Login Failed due to wrong email or password');
						window.location='login';
						</script>";
                    }
                }
                include_once('index.php');
                break;

            case '/logout':
                unset($_SESSION['user']);
                echo "<script>
				alert('Logout Success');
				window.location='home';
				</script>";
                break;

            case '/appointment':
                $doctor_arr = $this->select('doctor');
                $healthissue_arr = $this->select('health_issue');
                $user_arr = $this->select('user');
                if (isset($_REQUEST['submit'])) {
                    $user_id = $_REQUEST['user_id'];
                    $patient_name = $_REQUEST['patient_name'];
                    $patient_age = $_REQUEST['patient_age'];
                    $doctor_id = $_REQUEST['doctor_id'];
                    $health_id = $_REQUEST['health_id'];
                    $appoint_dt = $_REQUEST['appoint_dt'];

                    date_default_timezone_set('asia/calcutta');
                    $created_dt = date("Y-m-d H:i:s");
                    $updated_dt = date("Y-m-d H:i:s");


                    $arr = array("patient_name" => $patient_name, "patient_age" => $patient_age, "user_id" => $user_id, "health_id" => $health_id, "doctor_id" => $doctor_id, "appoint_dt" => $appoint_dt, "created_dt" => $created_dt, "updated_dt" => $updated_dt);
                    $res = $this->insert('appointment', $arr);
                    if ($res) {
                        echo "<script>
						alert('Your appointment is fixed.');
						window.location='appointment';
						</script>";
                    } else {
                        echo "not success";
                    }
                }
                include_once('appointment.php');
                break;

            case '/contact':
                if (isset($_REQUEST['Submit'])) {
                    $name = $_REQUEST['name'];
                    $email = $_REQUEST['email'];
                    $subject = $_REQUEST['subject'];
                    $message = $_REQUEST['message'];
                    date_default_timezone_set('asia/calcutta');
                    $created_dt = date("Y-m-d H:i:s");
                    $updated_dt = date("Y-m-d H:i:s");


                    $arr = array("name" => $name, "email" => $email, "subject" => $subject, "message" => $message, "created_dt" => $created_dt, "updated_dt" => $updated_dt);
                    $res = $this->insert('contact', $arr);
                    if ($res) {
                        echo "<script>
						alert('Your Message is sent Successfully');
						window.location='contact';
						</script>";
                    } else {
                        echo "<script>
						alert('Your Message is not sent Successfully');
						window.location='contact';
						</script>";
                    }
                }
                include_once('contact.php');
                break;

            case '/profile':
                $email = $_SESSION['user'];
                $where = array("email" => $email);
                $user_arr = $this->select_where('user', $where);
                $fetch = $user_arr->fetch_object();
                include_once('profile.php');
                break;

            case '/edit':
                $email = $_SESSION['user'];
                $where = array("email" => $email);
                $user_arr = $this->select_where('user', $where);
                $fetch = $user_arr->fetch_object();
                $old_image = $fetch->image;

                if (isset($_REQUEST['Submit'])) {
                    $name = $_REQUEST['name'];
                    $gender = $_REQUEST['gender'];
                    $mobile = $_REQUEST['mobile'];
                    $email = $_REQUEST['email'];
                    date_default_timezone_set('asia/calcutta');
                    $updated_dt = date("Y-m-d H:i:s");

                    if ($_FILES['image']['size'] > 0) {
                        $image = $_FILES['image']['name'];
                        $path = '../upload/user/' . $image;
                        $tmp_img = $_FILES['image']['tmp_name'];
                        move_uploaded_file($tmp_img, $path);

                        $arr = array("name" => $name, "gender" => $gender, "mobile" => $mobile, "email" => $email,  "image" => $image, "updated_dt" => $updated_dt);
                        $res = $this->update('user', $arr, $where);
                        if ($res) {

                            unlink('../upload/user/' . $old_image);
                            echo "<script>
                            alert('Your Profile Updated Successfully');
                            window.location='profile';
                            </script>";
                        }
                    } else {
                        $arr = array("name" => $name, "gender" => $gender, "mobile" => $mobile, "email" => $email,  "updated_dt" => $updated_dt);
                        $res = $this->update('user', $arr, $where);
                        if ($res) {
                            echo "<script>
                            alert('Your Profile Updated Successfully');
                            window.location='profile';
                            </script>";
                        }
                    }
                }
                include_once('edit.php');
                break;

            case '/about':
                include_once('about.php');
                break;
        }
    }
}
$obj = new control;
