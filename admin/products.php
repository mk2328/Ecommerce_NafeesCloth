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

	<title></title>

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
					<h2>Products</h2>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Products</a>
						</li>
					</ul>
				</div>

			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Nafees Cloth</h3>

					</div>
					<div class="table-container">
						<table>
							<thead>
								<tr>
									<th>Image</th>
									<th>Product Name</th>
									<th>Description</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Update</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT product_id, product_name, unit_price,description,qty, image FROM product ORDER BY product_id DESC";

								$result = mysqli_query($conn, $sql);

								while ($data = mysqli_fetch_array($result)) {
								?>
									<tr>
										<td>
											<img class="img" src="../<?php echo $data['image']; ?>">
										</td>
										<td><?php echo $data['product_name']; ?></td>
										<td><?php echo $data['description']; ?></td>
										<td><?php echo $data['unit_price']; ?></td>
										<td>0<?php echo $data['qty']; ?></td>
										<td><a href="update_prod.php?product_id=<?php echo $data['product_id']; ?>" style="color: #86A8E7;">Update</a></td>
										<td><a href="delete_prod.php?product_id=<?php echo $data['product_id']; ?>" style="color: red;">Delete</a></td>
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







		const searchButton = document.querySelector('#content nav form .form-input button');
		const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
		const searchForm = document.querySelector('#content nav form');

		searchButton.addEventListener('click', function(e) {
			if (window.innerWidth < 576) {
				e.preventDefault();
				searchForm.classList.toggle('show');
				if (searchForm.classList.contains('show')) {
					searchButtonIcon.classList.replace('bx-search', 'bx-x');
				} else {
					searchButtonIcon.classList.replace('bx-x', 'bx-search');
				}
			}
		})





		if (window.innerWidth < 768) {
			sidebar.classList.add('hide');
		} else if (window.innerWidth > 576) {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
			searchForm.classList.remove('show');
		}


		window.addEventListener('resize', function() {
			if (this.innerWidth > 576) {
				searchButtonIcon.classList.replace('bx-x', 'bx-search');
				searchForm.classList.remove('show');
			}
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

	<!-- <script src="script.js"></script> -->
</body>

</html>