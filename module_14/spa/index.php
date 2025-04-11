<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
	<div class="menu">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<a id="all" class="btn btn-primary btn-sm" href="">All Students</a>
					<a id="add_student" class="btn btn-primary btn-sm" href="">Add new student</a>
					<a id="profile" class="btn btn-primary btn-sm" href="">Profile</a>
				</div>
			</div>
		</div>
	</div>

	<div id="app">

	</div>

	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>
		$("#add_student").click(() => {
			$.ajax({
				url: "create.php",
				success: (data) => {
					$("#app").html(data);
				}
			})

			return false;
		})

		$("#profile").click(() => {
			$.ajax({
				url: "profile.php",
				success: (data) => {
					$("#app").html(data);
				}
			})

			return false;
		})

		$("#all").click(() => {
			$.ajax({
				url: "all.php",
				success: (data) => {
					$("#app").html(data);

					// load data
					allData();
				}
			})

			return false;
		})

		const load = () => {
			$.ajax({
				url: "all.php",
				success: (data) => {
					$("#app").html(data);
				}
			})
		}

		// initially load data
		load();

		// submit form handling
		$(document).on("submit", "#student_form", () => {
			const name = $("#name").val();
			const email = $("#email").val();
			const cell = $("#cell").val();
			const username = $("#username").val();

			if(name == '' || email == '' || cell == '' || username == '') {
				// swal("Warning", "All fields are required", "warning");

				swal({
					title: 'Oops',
					text: 'All fields are required',
					icon: 'warning',
					button: 'Try Again'
				})
			} else {
				$.ajax({
					url: "ajax_template/create.php",
					method: "POST",
					data: {
						name,
						email,
						cell,
						username
					},
					success: (data) => {
						swal("Student added successfully!");

						// clear input field
						$("#name").val("");
						$("#email").val("");
						$("#cell").val("");
						$("#username").val("");
					}
				})
			}

			return false;
		})

		// all student data
		const allData = () => {
			$.ajax({
				url: 'ajax_template/all_student.php',
				success: (data) => {
					$("#all_student_data").html(data);
				}
			})
		}

		allData();

		$(document).on("click", "a.delete_btn", function() {

			const deleteId = $(this).attr("delete_id");

			swal({
				title: "Are you sure?",
				text: "You want to delete this student?",
				icon: "warning",
				buttons: true,
				dangerMode: true,
				})
				.then((willDelete) => {
					if (willDelete) {
						$.ajax({
							url: 'ajax_template/delete.php',
							method: "POST",
							data: {
								deleteId
							},
							success: () => {
								swal("Done", "Student deleted successfully", "success");
								allData();
							}
						})

					} else {
						swal("Done", "Data safe now", "success");
					}
				});

			return false;
		})
	</script>
</body>

</html>