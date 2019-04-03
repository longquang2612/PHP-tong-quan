<?php
		if (isset($_POST['submit']))
		{
   			$numberone = $_POST["numberone"];
   			$numbertwo = $_POST["numbertwo"];
   			$numberthree = $_POST["numberthree"];
   			$count = $numberone + ($numberone * $numbertwo * 0.01);
       	}
 		echo "<table>
 			<thead>
 				<tr>
 					<th>Future value computers</th>
 				</tr>
 			</thead>
 			<tbody>
 				<tr>
 					<td><span style='color:red'>Số tiền đầu tư: $numberone</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:red'>Lãi suất hằng năm: $numbertwo %</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:red'>Số năm: $numberthree</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:red'>Giá trị tương lai: $count</span></td>
 				</tr>
 			</tbody>
 		</table>"
?>