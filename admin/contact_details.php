<?php
session_start();
include("connection.php");

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/home.css">

	<title>Contacts</title>

</head>

<body>

	<!-- SIDEBAR -->
	<?php
	include("sidebar.php")
	?>
	<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
			<form action="#">
				<div class="form-input">
					<input style="display:none;" type="search" placeholder="Search...">
					<button style="display:none;" type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h2>Contact Messages</h2>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Contacts</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Messages</h3>
					</div>
					<div class="table-container">
						<table>
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Subject</th>
									<th>Message</th>
									<th>Created At</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT id, name, email, phone, subject, message, created_at FROM contacts ORDER BY created_at DESC";
								$result = mysqli_query($conn, $sql);

								while ($data = mysqli_fetch_array($result)) {
								?>
									<tr>
										<td><?php echo $data['id']; ?></td>
										<td><?php echo $data['name']; ?></td>
										<td><?php echo $data['email']; ?></td>
										<td><?php echo ($data['phone']) ? $data['phone'] : 'N/A'; ?></td>
										<td><?php echo ($data['subject']) ? $data['subject'] : 'N/A'; ?></td>
										<td><?php echo $data['message']; ?></td>
										<td><?php echo $data['created_at']; ?></td>
									</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
		</main>

		<!-- MAIN -->
	</section>
	<!-- CONTENT -->

	<script>
		const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');
		allSideMenu.forEach(item => {
			const li = item.parentElement;

			item.addEventListener('click', function() {
				allSideMenu.forEach(i => {
					i.parentElement.classList.remove('active');
				})
				li.classList.add('active');
			})
		});

		// TOGGLE SIDEBAR
		const menuBar = document.querySelector('#content nav .bx.bx-menu');
		const sidebar = document.getElementById('sidebar');

		menuBar.addEventListener('click', function() {
			sidebar.classList.toggle('hide');
		})

		const switchMode = document.getElementById('switch-mode');

		switchMode.addEventListener('change', function() {
			if (this.checked) {
				document.body.classList.add('dark');
			} else {
				document.body.classList.remove('dark');
			}
		})
	</script>

</body>

</html>
