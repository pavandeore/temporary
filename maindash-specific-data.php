<?php

include 'config.php';

if (isset($_POST['query'])) {
    $inputText = $_POST['query'];
    
        echo $inputText;

    }
else {
    echo "Search not working";
}


// if(isset($_POST['query'])){
//     $specific_name = $_POST['query'];

//     $sql = "SELECT * FROM `customer_data`, `tbl_leaddata` WHERE `customer_data`.cust_id = `tbl_leaddata`.cust_id AND `customer_name` LIKE 'nilesh' ORDER BY `followup_date` ";

//     $result = $con->query($sql);
//     if($result->num_rows>0){ 
//         echo "<table class='maindash-table table-hover curve-box table-sm'>
//         <thead>
//             <tr>
//                 <th>Lead type</th>
//                 <th>Customer Name</th>
//                 <th>Contact Number</th>
//                 <th>Follow up Date</th>
//                 <th>Last Contacted</th>
//                 <th>Status</th>
//                 <th>Action</th>
//             </tr>
//         </thead>
        
//         <tbody>";

//         while($row=$result->fetch_assoc()){
            
//             echo "
//             <tr>
//                 <td>" . $row['lead_type'] . "</td>
//                 <td>" . $row['customer_name'] . "</td>
//                 <td>" . $row["customer_number"] . "</td>
//                 <td>" . $row['followup_date'] . "</td>
//                 <td>" . $row['last_contacted'] . "</td>
//                 <td>" . $row['status'] . "</td>
//                 <td><button id='live-search-click' onclick='return getrecord(" . $row['cust_id'] . ")' class='btn btn-info btn-sm'>View</button></td>
//             </tr>
//             ";
//         }
//         echo "         </tbody>
         
//             </table>";       
//     }

// }
// else{
//     echo "No Record Found for Specific Search";
// }


?>
