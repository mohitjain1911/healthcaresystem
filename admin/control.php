<?php

include_once('model.php'); // step 1 load model page 
class control extends model // step 2 extends model class for use function
{
	function __construct()  // megic function & autocall function 
	{
		session_start();
		model::__construct(); // step 3 load model __construct for connectivity in control

		$url = $_SERVER['PATH_INFO']; //http://localhost/30Nov_php/project/web/control.php

		switch ($url) {
			case '/index':
				if (isset($_REQUEST['Login'])) {
					$email = $_REQUEST['email'];
					$password = $_REQUEST['password'];


					$where = array("email" => $email, "password" => $password);
					$res = $this->select_where('admin', $where);
					$chk = $res->num_rows; // check cond by rows and ans in true of false
					if ($chk == 1) // 1 means true and 0 means false
					{
						$_SESSION['admin'] = $email;

						echo "<script>
						alert('Login Success');
						window.location='dashboard';
						</script>";
					} else {
						echo "<script>
						alert('Admin Login Failed due to wrong username or password');
						window.location='index';
						</script>";
					}
				}
				include_once('index.php');
				break;

			case '/logout':
				unset($_SESSION['admin']);
				echo "<script>
				alert('Logout Success');
				window.location='index';
				</script>";
				break;

			case '/dashboard':
				include_once('dashboard.php');
				break;

			case '/add_country':
				include_once('add_country.php');
				break;


			case '/manage_country':
				include_once('manage_country.php');
				break;

			case '/add_cate':
				include_once('add_cate.php');
				break;


			case '/manage_cate':
				include_once('manage_cate.php');
				break;

			case '/add_emp':
				if (isset($_REQUEST['submit'])) {
					$name = $_REQUEST['name'];
					$mobile = $_REQUEST['mobile'];
					$gender = $_REQUEST['gender'];
					$email = $_REQUEST['email'];
					$password = $_REQUEST['password'];
					$enc_password = md5($password);
					$image = $_FILES['image']['name'];
					$path = '../upload/employee/' . $image;
					$tmp_img = $_FILES['image']['tmp_name'];
					move_uploaded_file($tmp_img, $path);

					date_default_timezone_set('asia/calcutta');
					$created_dt = date("Y-m-d H:i:s");
					$updated_dt = date("Y-m-d H:i:s");

					$arr = array(
						"name" => $name,
						"mobile" => $mobile,
						"gender" => $gender,
						"email" => $email,
						"password" => $enc_password,
						"image" => $image,
						"created_dt" => $created_dt,
						"updated_dt" => $updated_dt
					);
					$res = $this->insert('employee', $arr);
					if ($res) {
						echo "<script>
						alert('Employee Added');
						window.location='add_emp';
						</script>";
					} else {
						echo "<script>
						alert('This email already exists.');
						window.location='add_emp';
						</script>";
					}
				}
				include_once('add_emp.php');
				break;

			case '/add_location':
				if (isset($_REQUEST['submit'])) {
					$name = $_REQUEST['name'];
					date_default_timezone_set('asia/calcutta');
					$created_dt = date("Y-m-d H:i:s");
					$updated_dt = date("Y-m-d H:i:s");

					$arr = array("name" => $name, "created_dt" => $created_dt, "updated_dt" => $updated_dt);
					$res = $this->insert('location', $arr);
					if ($res) {
						echo "<script>
						alert('Location Added');
						window.location='add_location';
						</script>";
					} else {
						echo "<script>
						alert('Location is not added');
						window.location='add_location';
						</script>";
					}
				}
				include_once('add_location.php');
				break;

			case '/add_healthissue':
				if (isset($_REQUEST['submit'])) {
					$name = $_REQUEST['name'];
					$description = $_REQUEST['description'];
					date_default_timezone_set('asia/calcutta');
					$created_dt = date("Y-m-d H:i:s");
					$updated_dt = date("Y-m-d H:i:s");

					$arr = array("health_name" => $name, "health_description" => $description, "created_dt" => $created_dt, "updated_dt" => $updated_dt);
					$res = $this->insert('health_issue', $arr);
					if ($res) {
						echo "<script>
						alert('Disease Added');
						window.location='add_healthissue';
						</script>";
					} else {
						echo "<script>
						alert('Disease is not added');
						window.location='add_healthissue';
						</script>";
					}
				}
				include_once('add_healthissue.php');
				break;

			case '/add_medicines':
				$healthissue_arr = $this->select('health_issue');
				if (isset($_REQUEST['submit'])) {
					$health_id = $_REQUEST['health_id'];
					$category = $_REQUEST['category'];
					$name = $_REQUEST['name'];
					$company = $_REQUEST['company'];
					$price = $_REQUEST['price'];
					$description = $_REQUEST['description'];
					$image = $_FILES['image']['name'];
					$path = '../upload/medicine/' . $image;
					$tmp_img = $_FILES['image']['tmp_name'];
					move_uploaded_file($tmp_img, $path);

					date_default_timezone_set('asia/calcutta');
					$created_dt = date("Y-m-d H:i:s");
					$updated_dt = date("Y-m-d H:i:s");

					$arr = array(
						"health_id" => $health_id,
						"category" => $category,
						"medicine_name" => $name,
						"company" => $company,
						"medicine_description" => $description,
						"medicine_price" => $price,
						"medicine_image" => $image,
						"created_dt" => $created_dt,
						"updated_dt" => $updated_dt
					);
					$res = $this->insert('medicine', $arr);
					if ($res) {
						echo "<script>
						alert('Medicine Added');
						window.location='add_medicines';
						</script>";
					} else {
						echo "<script>
						alert('Medicine Not Added');
						window.location='add_medicines';
						</script>";
					}
				}
				include_once('add_medicines.php');
				break;

			case '/view_emp':
				$employee_arr = $this->select('employee');
				include_once('view_emp.php');
				break;

			case '/view_doctor':
				$doctor_arr = $this->select('doctor');
				include_once('view_doctor.php');
				break;

			case '/add_doctor':
				$location_arr = $this->select('location');
				if (isset($_REQUEST['submit'])) {
					$location_id = $_REQUEST['location_id'];
					$name = $_REQUEST['name'];
					$hospitalname = $_REQUEST['hospitalname'];
					$degree = $_REQUEST['degree'];
					$gender = $_REQUEST['gender'];
					$mobile = $_REQUEST['mobile'];
					$email = $_REQUEST['email'];
					$password = $_REQUEST['password'];
					$enc_password = md5($password);
					$address = $_REQUEST['address'];
					$pincode = $_REQUEST['pincode'];
					$image = $_FILES['image']['name'];
					$path = '../upload/doctor/' . $image;
					$tmp_img = $_FILES['image']['tmp_name'];
					move_uploaded_file($tmp_img, $path);

					date_default_timezone_set('asia/calcutta');
					$created_dt = date("Y-m-d H:i:s");
					$updated_dt = date("Y-m-d H:i:s");

					$arr = array(
						"location_id" => $location_id,
						"doctor_name" => $name,
						"hospital_name" => $hospitalname,
						"degree" => $degree,
						"gender" => $gender,
						"mobile" => $mobile,
						"email" => $email,
						"password" => $enc_password,
						"address" => $address,
						"pincode" => $pincode,
						"image" => $image,
						"created_dt" => $created_dt,
						"updated_dt" => $updated_dt
					);
					$res = $this->insert('doctor', $arr);
					if ($res) {
						echo "<script>
						alert('Doctor Added');
						window.location='add_doctor';
						</script>";
					} else {
						echo "<script>
						alert('This email already exists.');
						window.location='add_doctor';
						</script>";
					}
				}
				include_once('add_doctor.php');
				break;

			case '/view_location':
				$location_arr = $this->select('location');
				include_once('view_location.php');
				break;

			case '/view_healthissue':
				$healthissue_arr = $this->select('health_issue');
				include_once('view_healthissue.php');
				break;

			case '/manage_contact':
				$contact_arr = $this->select('contact');
				include_once('manage_contact.php');
				break;

			case '/manage_feedback':
				include_once('manage_feedback.php');
				break;


			case '/manage_user':
				$user_arr = $this->select('user');
				include_once('manage_user.php');
				break;

			case '/delete':
				if (isset($_REQUEST['contact_id'])) {
					$contact_id = $_REQUEST['contact_id'];
					$where = array("contact_id" => $contact_id);
					$res = $this->delete_where('contact', $where);
					if ($res) {
						echo "<script>
						alert('Contact Deleted');
						window.location='manage_contact';
					</script>";
					}
				}
				if (isset($_REQUEST['location_id'])) {
					$location_id = $_REQUEST['location_id'];
					$where = array("location_id" => $location_id);
					$res = $this->delete_where('location', $where);
					if ($res) {
						echo "<script>
						alert('location Deleted');
						window.location='view_location';
					</script>";
					}
				}
				if (isset($_REQUEST['deleteuser_id'])) {
					$user_id = $_REQUEST['deleteuser_id'];
					$where = array("user_id" => $user_id);

					$res = $this->select_where('user', $where);
					$fetch = $res->fetch_object();
					$image = $fetch->image;
					$status = $fetch->status;
					if ($status == "Block") {
						$res = $this->delete_where('user', $where);
						if ($res) {
							unlink('../upload/user/' . $image);
							echo "<script>
							alert('Delete user Success');
							window.location='manage_user';
						</script>";
						}
					} else {
						echo "<script>
						alert('Delet Not Success due to user Unblocked');
						window.location='manage_user';
					</script>";
					}
				}
				if (isset($_REQUEST['deleteemployee_id'])) {
					$employee_id = $_REQUEST['deleteemployee_id'];
					$where = array("employee_id" => $employee_id);

					$res = $this->select_where('employee', $where);
					$fetch = $res->fetch_object();
					$image = $fetch->image;
					$status = $fetch->status;
					if ($status == "Block") {
						$res = $this->delete_where('employee', $where);
						if ($res) {
							unlink('../upload/employee/' . $image);
							echo
							"<script>
							alert('Delete user Success');
							window.location='view_emp';
						</script>";
						}
					} else {
						echo "<script>
						alert('Delet Not Success due to user Unblocked');
						window.location='view_emp';
					</script>";
					}
				}
				if (isset($_REQUEST['deletedoctor_id'])) {
					$doctor_id = $_REQUEST['deletedoctor_id'];
					$where = array("doctor_id" => $doctor_id);

					$res = $this->select_where('doctor', $where);
					$fetch = $res->fetch_object();
					$image = $fetch->image;
					$status = $fetch->status;
					if ($status == "Block") {
						$res = $this->delete_where('doctor', $where);
						if ($res) {
							unlink('../upload/doctor/' . $image);
							echo "<script>
							alert('Doctor Deleted');
							window.location='view_doctor';
						</script>";
						}
					} else {
						echo "<script>
						alert('Delet Not Success due to doctor Unblocked');
						window.location='view_doctor';
					</script>";
					}
				}
				if (isset($_REQUEST['health_id'])) {
					$health_id = $_REQUEST['health_id'];
					$where = array("health_id" => $health_id);
					$res = $this->delete_where('health_issue', $where);
					if ($res) {
						echo "<script>
						alert('Disease Deleted');
						window.location='view_healthissue';
					</script>";
					}
				}
				break;

			case '/status':
				if (isset($_REQUEST['statususer_id'])) {
					$user_id = $_REQUEST['statususer_id'];
					$where = array("user_id" => $user_id);

					$res = $this->select_where('user', $where);
					$fetch = $res->fetch_object();
					$status = $fetch->status;
					if ($status == "Block") {
						$arr = array("status" => "Unblock");
						$res = $this->update('user', $arr, $where);
						if ($res) {
							echo "<script>
						alert('User Unblocked');
						window.location='manage_user';
						</script>";
						}
					} else {
						$arr = array("status" => "Block");
						$res = $this->update('user', $arr, $where);
						if ($res) {
							unset($_SESSION['user']);
							unset($_SESSION['user_id']);
							echo "<script>
						alert('User Blocked');
						window.location='manage_user';
						</script>";
						}
					}
				}
				if (isset($_REQUEST['statusemployee_id'])) {
					$employee_id = $_REQUEST['statusemployee_id'];
					$where = array("employee_id" => $employee_id);

					$res = $this->select_where('employee', $where);
					$fetch = $res->fetch_object();
					$status = $fetch->status;
					if ($status == "Block") {
						$arr = array("status" => "Unblock");
						$res = $this->update('employee', $arr, $where);
						if ($res) {
							echo "<script>
						alert('Employee Unblocked');
						window.location='view_emp';
						</script>";
						}
					} else {
						$arr = array("status" => "Block");
						$res = $this->update('employee', $arr, $where);
						if ($res) {
							echo "<script>
						alert('Employee Blocked');
						window.location='view_emp';
						</script>";
						}
					}
				}
				if (isset($_REQUEST['statusdoctor_id'])) {
					$doctor_id = $_REQUEST['statusdoctor_id'];
					$where = array("doctor_id" => $doctor_id);

					$res = $this->select_where('doctor', $where);
					$fetch = $res->fetch_object();
					$status = $fetch->status;
					if ($status == "Block") {
						$arr = array("status" => "Unblock");
						$res = $this->update('doctor', $arr, $where);
						if ($res) {
							echo "<script>
						alert('Doctor Unblocked');
						window.location='view_doctor';
						</script>";
						}
					} else {
						$arr = array("status" => "Block");
						$res = $this->update('doctor', $arr, $where);
						if ($res) {
							echo "<script>
						alert('Doctor Blocked');
						window.location='view_doctor';
						</script>";
						}
					}
				}
				break;

			case '/profile':
				$email = $_SESSION['admin'];
				$where = array("email" => $email);
				$admin_arr = $this->select_where('admin', $where);
				$fetch = $admin_arr->fetch_object();
				include_once('profile.php');
				break;

			default:
				include_once('404.php');
				break;
		}
	}
}
$obj = new control;
