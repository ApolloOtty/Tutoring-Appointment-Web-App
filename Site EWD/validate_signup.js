function validate(){
    let mailwrong=0;
    let passwrong=0;
    let verifpasswrong=0;
    const emailregex = /[a-z]+\.[a-z]+[0-9]{0,2}@e-uvt\.ro/;
    let email = document.getElementsByClassName("username_input")[0].value;
    let parola = document.getElementsByClassName("login_input")[0].value;
    let parola_verif = document.getElementsByClassName("login_input_verify")[0].value;
    document.getElementById("ifempty").innerHTML="";
        if(email==""){
            mailwrong=0;
            document.getElementById("ifempty").innerHTML="There cannot be empty fields!";
            document.getElementById("password_img").style.color="red";
            document.getElementsByClassName("username_input")[0].style.transition = "all 0s";
            document.getElementsByClassName("username_input")[0].style.border="2px solid red";
            document.getElementsByClassName("username_input")[0].style.boxShadow="1px 2px 2px red";
        }
        if(parola==""){
            passwrong=0;
            document.getElementById("ifempty").innerHTML="There cannot be empty fields!";
            document.getElementsByClassName("login_input")[0].style.transition = "all 0s";
            document.getElementsByClassName("login_input")[0].style.border="2px solid red";
            document.getElementsByClassName("login_input")[0].style.boxShadow="1px 2px 2px red";
            }
        if(parola!=""){
            document.getElementsByClassName("login_input")[0].style.border="0px solid red";
            document.getElementsByClassName("login_input")[0].style.boxShadow="0px 0px 0px red";
        }
        if(parola_verif==""){
            verifpasswordwrong=0;
            document.getElementById("ifempty").innerHTML="There cannot be empty fields!";
            document.getElementsByClassName("login_input_verify")[0].style.transition = "all 0s";
            document.getElementsByClassName("login_input_verify")[0].style.border="2px solid red";
            document.getElementsByClassName("login_input_verify")[0].style.boxShadow="1px 2px 2px red";
        }
        if(parola!=parola_verif){
            passwrong=0;
            verifpasswrong=0;
            document.getElementById("ifverifywrong").innerHTML="Password is not the same!";
            document.getElementsByClassName("login_input_verify")[0].style.transition = "all 0s";
            document.getElementsByClassName("login_input_verify")[0].style.border="2px solid red";
            document.getElementsByClassName("login_input_verify")[0].style.boxShadow="1px 2px 2px red";
        }
        if(parola==parola_verif && parola!=""){
            passwrong=1;
            verifpasswrong=1;
            document.getElementById("ifverifywrong").innerHTML="";
            document.getElementsByClassName("login_input")[0].style.border="0px solid black";
            document.getElementsByClassName("login_input")[0].style.borderBottom="2px solid black";
            document.getElementsByClassName("login_input")[0].style.boxShadow="0px 0px 0px red";
            document.getElementsByClassName("login_input_verify")[0].style.border="0px solid black";
            document.getElementsByClassName("login_input_verify")[0].style.borderBottom="2px solid black";
            document.getElementsByClassName("login_input_verify")[0].style.boxShadow="0px 0px 0px red";
        }
        if(emailregex.test(email)){
            mailwrong=1;
            document.getElementById("ifmailwrong").innerHTML="";
            document.getElementsByClassName("username_input")[0].style.border="0px solid black";
            document.getElementsByClassName("username_input")[0].style.borderBottom="2px solid black";
            document.getElementsByClassName("username_input")[0].style.boxShadow="0px 0px 0px red";
        }
        if(!emailregex.test(email) && email!=""){
            mailwrong=0;
            document.getElementById("ifmailwrong").innerHTML="Email is not an UVT student adress";
            document.getElementsByClassName("username_input")[0].style.transition = "all 0s";
            document.getElementsByClassName("username_input")[0].style.border="2px solid red";
            document.getElementsByClassName("username_input")[0].style.boxShadow="1px 2px 2px red";
        }

    if (mailwrong==1 && passwrong==1 && verifpasswrong==1){
        document.getElementsByClassName("login__submit")[0].style.opacity="1";
        document.getElementsByClassName("login__submit")[0].disabled=false;
    }else{
        document.getElementsByClassName("login__submit")[0].style.opacity="0.5";
        document.getElementsByClassName("login__submit")[0].disabled=true;
    }
}