
///Empty all field


//checking for proper email
$(document).ready(function(){
    $("#stumail").on("keypress blur",function(){
        var stumail=$("#stumail").val();
        $.ajax({
            url:'Student/addstudent.php',
            method: "POST",
            data:{
                checkemail:"checkmail",
                stumail:stumail,
            },
            success:function(data){
                console.log(data);
                if(data !=0){
                    $("#statusMsg2").html('<small style="color:red;">Email ID Already Registered !</small>');

                }
            },
        });
    });
});

function addStu(){
    var reg=/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var stuname=$("#stuname").val();
    var stumail=$("#stumail").val();
    var stupass=$("#stupass").val();
    //checking form field on the foem submission
    if(stuname.trim()==""){
        $("#statusMsg1").html('<small style="color:red;">Please Enter Name !</small>');
        $("#statusMsg2").html('<small style="color:red;"></small>');
        $("#statusMsg3").html('<small style="color:red;"></small>');
       
    }
    else if(stumail.trim()==""){
        $("#statusMsg2").html('<small style="color:red;">Please Enter Email !</small>');
        $("#statusMsg3").html('<small style="color:red;"></small>');
        $("#statusMsg1").html('<small style="color:red;"></small>');
    }
    else if(stumail.trim()!="" && !reg.test(stumail)){
        $("#statusMsg2").html('<small style="color:red;">Please Enter Valid Email e.g. example@mail.com</small>');
        $("#statusMsg3").html('<small style="color:red;"></small>');
        $("#statusMsg1").html('<small style="color:red;"></small>');
    }
    else if(stupass.trim()==""){
        $("#statusMsg3").html('<small style="color:red;">Please Enter Password !</small>');
        $("#statusMsg1").html('<small style="color:red;"></small>');
        $("#statusMsg2").html('<small style="color:red;"></small>');
    }
    
    else
    {
        $("#statusMsg1").html('<small style="color:red;"></small>');
        $("#statusMsg2").html('<small style="color:red;"></small>');
        $("#statusMsg3").html('<small style="color:red;"></small>');
        $.ajax({
        url:'Student/addstudent.php',
        method:'POST',
        data:{
            stuname:stuname,
            stumail:stumail,
            stupass:stupass,
        },
        success:function(data){
            console.log(data)
            clearStuRegField()
            if(data=="connected\"OK\""){
                console.log("hogya");
                
                $("#successMsg").html("<span class='alert alert-success'>Registration Successful !</span>")
            }
            else if(data=="connectedFailed"){
                $("#successMsg").html("<span class='alert alert-danger'>Unable to Register</span>")

            }
        },
        
    });
    }
    
}


function clearStuRegField(){
    $("#stuRegForm").trigger("reset");
    $("#statusMsg1").html('<small style="color:red;"></small>');
    $("#statusMsg2").html('<small style="color:red;"></small>');
    $("#statusMsg3").html('<small style="color:red;"></small>');
        
}


//fucntion check student login verificattion

function checkStuLogin(){
    var stuLogEmail=$("#stuLogmail").val();
    var stuLogPass=$("#stuLogpass").val();
    $.ajax({
        url: "Student/addstudent.php",
        method : "POST",
        data:{
            stuLogEmail: stuLogEmail,
            stuLogPass:stuLogPass,

        },
        success:function(data){
            console.log(data);
            if(data=="connected0")
            {
                $("#statusLogMsg").html("<span class='alert alert-danger'>Invalid Email ID or Password !</span>")
            
            }
            else if(data=="connected1"){
                $("#statusLogMsg").html(
                    '<div class="spinner-border text-success" role="status"></div>'
                );
                    setTimeout(()=>{
                        window.location.href="index.php";
                    },1000);
            }
        },
        
    });

}