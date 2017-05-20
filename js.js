
function validateForm() {
    var email = document.forms["myForm"]["emailId"].value;
    var password = document.forms["myForm"]["pwd"].value;
    var pass_length = password.length;

//validation for Email
    if (email == null || email == "") {
//        alert("Name must be filled out");
        document.getElementById("emailId").style.borderColor = "red";
//        document.getElementById("checkEmail").innerHTML = "Enter valid Email.";
        return false;
    }
    
    var regixEmail = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
    if (!regixEmail.test(email)){
        alert("enter Valid Email");
        return false;
    }
// end validation for Email


//for Password Validation
    if (password == null || password == "") {
        document.getElementById("pwd").style.borderColor = "red";
        return false;
    }

    var regixPass = /[a-z]+[0-9]+/;
    if (pass_length < 6) {
        document.getElementById("pwd").style.borderColor = "red";
        alert("password Must Be more than 6");
        return false;
    } 
//    else {
//        if (!regixPass.test(password)) {
//            alert("password must contain atleast one character and then digit");
//            return false;
//        }
//    }
//End Password Validation
}

