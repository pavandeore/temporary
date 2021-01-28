<head>
<link rel="stylesheet" href="entry.css" />
</head>
<?PHP
$con = new mysqli("localhost", "root", "", "lead_management");
if(isset($_POST['id'])){
    @$specific_id = $_POST['id'];

    echo "Got id here from maindash".$specific_id;
}

?>

<!-- <script>

$(document).ready(function(){
    
    $('#cutomer_form_update').css('opacity','0');
    $("#updateCustomerForm :input").prop("disabled", true);

    $(".edit-icon-click").click(function(){
        $("#updateCustomerForm :input").prop("disabled", false);
        $('#cutomer_form_update').css('opacity','1');
    })

    $("#cutomer_form_update").click(function(){
        var data = $("#updateCustomerForm :input").serializeArray();
        console.log(data);  
        $.post($("#updateCustomerForm").attr("action"), data, function(info){ $("#result-status").html(info); });
        $('.preview-div').delay('1200').fadeOut('2000');
        $('.alert-success').delay('1000').fadeOut('1500');
        $('.alert-danger').delay('1000').fadeOut('1500');
        $("#updateCustomerForm").addClass("blurdiv");
        setTimeout(()=>{
            $("#updateCustomerForm").removeClass("blurdiv");
        },1500)
    })

    $("#updateCustomerForm").submit(function(){
        return false;
    })

    $('.alert-success').delay('1000').fadeOut('2000');
    $('.alert-danger').delay('1000').fadeOut('2000');
})

</script> -->