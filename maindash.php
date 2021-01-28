<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "lead_management";

session_start();

$con = mysqli_connect($host, $username, $password, $dbname);

$result = $con->query("SELECT * FROM `customer_data`, `tbl_leaddata` WHERE `customer_data`.cust_id = `tbl_leaddata`.cust_id ORDER BY `followup_date`");
if ($result->num_rows > 0) {
?>
    <div class="search-fliter-div d-flex justify-content-between align-items-center curve-box text-white">
        <div class="search-div">
            <input type="text" autocomplete="off" id="search" name="search customer-name" class="search" class="border-info col-10 " placeholder="Customer Name" style="width: 350px;" />
        </div>
        <div>Results: 1</div>
        <div class="filter-div d-flex">
            <div class="filter-by-lead">
                <select>

                    <option selected>Lead Type</option>
                    <option value="repair">Repair</option>
                    <option value="rental">Rental</option>
                    <option value="new desktop">New Desktop</option>
                    <option value="new laptop">New Laptop</option>
                    <option value="new projector">New Projector</option>
                    <option value="old desktop">Old Desktop</option>
                    <option value="old laptop">Old Laptop</option>
                    <option value="old projector">Old Projector</option>
                    <option value="networking">Networking</option>
                    <option value="cctv">CCTV</option>
                    <option value="data recovery">Data Recovery</option>
                    <option value="software">Software</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="filter-by-status ml-1">
                <select>
                    <option selected> Status</option>
                    <option value="open">Open</option>
                    <option value="send qut">Send Qut.</option>
                    <option value="qut sent">Qut. sent</option>
                    <option value="contacted">Contacted</option>
                    <option value="pending">Pending</option>
                </select>
            </div>
        </div>
    </div>
    <div class="maindash-table-div text-dark">



    </div>
<?php
}
?>

<script>
    $(document).ready(function(){
        $('.maindash-table-div').load('maindash-data.php');
    })

    $('#search').keyup(function() {
        var searchText = $(this).val();
        
        if (searchText != '') {
            $.ajax({
                url: 'maindash-specific-data.php',
                type: 'POST',
                data: {
                    'query': searchText
                },
                success: function(response) {
                    console.log('sent and respond');
                    $('.maindash-table-div').load('maindash-specific-data.php');
                }
            })
        }else{
            $('.maindash-table-div').load('maindash-data.php');
        } 
    })



    function getrecord(id) {
        $.ajax({
            url: "view.php",
            type: 'POST',
            data: {
                'id': id
            },
            success: function(data) {
                $(".maindash-table-div").html(data);
            }
        });
    }
</script>