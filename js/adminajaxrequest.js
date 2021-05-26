
function checkAdminLogin(){
    var adminLogEmail=$("#adminLogmail").val();
    var adminLogPass=$("#adminLogpass").val();
    $.ajax({
        url: "Admin/admin.php",
        method : "POST",
        data:{
            adminLogEmail: adminLogEmail,
            adminLogPass:adminLogPass,

        },
        success:function(data){
            console.log(data);
            if(data=="connected0")
            {
                $("#statusAdminLogMsg").html("<span class='alert alert-danger'>Invalid Email ID or Password !</span>")
            
            }
            else if(data=="connected1"){
                $("#statusAdminLogMsg").html("<span class='alert alert-success'>Admin Page Loading!!!</span>");
                    setTimeout(()=>{
                        window.location.href="Admin/adminDashboard.php";
                    },1000);
            }
        },      
    });
}