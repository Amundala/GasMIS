<?php require_once '../constant/connect.php'; ?>
<!DOCTYPE html>
<html>

<head>
	<title>GAS MIS Report</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		thead {
			background-color: #0F9D58;
			color: #fff;
		}

		@media print {
			.printBtn {
				display: none;
			}
			thead {
				background-color: #0F9D58 !important;
				color: #fff;
			}
		}

		.printButton {
			background-color: #0F9D58;
			border-color: #0F9D58;
		}
		.printButton:hover {
			background-color: #0F9D58;
			border-color: #0F9D58;
		}
	</style>
</head>

<body>
	<div class="container mt-5">
		<div class="card-header" style="background-color: #fff;">
			<h2 class="text-center mb-0 py-2 text-muted">Merez Gas Management Information System Report</h2>
		</div>

		<?php
		require_once '../constant/connect.php';
		if ($_POST) {
			$startDate = $_POST['startDate'];
			$endDate = $_POST['endDate'];
			$sql = "SELECT * FROM orders WHERE order_date >= '$startDate' AND order_date <= '$endDate' and order_status = 1";
			$query = $connect->query($sql);
			$table = '
				<table class="table">
					<thead>
						<tr>
							<th>Order Date</th>
							<th>Customer Name</th>
							<th>Contact</th>
							<th>Grand Total</th>
						</tr>
					</thead>
					<tbody>
				';
			$totalAmount = 0;
			while ($result = $query->fetch_assoc()) {
				$sql1 = "SELECT * FROM tbl_client WHERE id = '" . $result['client_name'] . "'";
				$result1 = $connect->query($sql1);
				$data1 = $result1->fetch_assoc();
				$table .= '<tr>
						<td>' . $result['order_date'] . '</td>
						<td>' . $data1['name'] . '</td>
						<td>' . $data1['mob_no'] . '</td>
						<td>' . $result['grand_total'] . '</td>
					</tr>';
				$totalAmount += $result['grand_total'];
			}
			$table .= '
						<tr>
							<td colspan="3"><b>Total Amount</b></td>
							<td><b> RWF ' . number_format($totalAmount, 2) . '</b></td>
						</tr>
					</tbody>
				</table>
				';
			echo $table;
		}
		?>
		<div class="printBtn">
			<button class="btn btn-primary printButton" onclick="window.print();">Print</button>
		</div>

	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>