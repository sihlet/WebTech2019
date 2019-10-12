function validate(){
  var name = document.getElementById("name").value;
  var phone = document.getElementById("phone").value;
  var reg = /[a-z\.]*@ashesi\.edu\.gh/ ;
  var email = document.getElementById("address").value;
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
  if(name.length < 5){
    text = "Please Enter valid Name";
    error_message.innerHTML = text;
    return false;
  }
  
  if(reg.test(email) == false){
	text = "Please Enter valid email address";
	error_message.innerHTML = text;
    return false;
  }
  
  if(phone.length != 10){
    text = "Please Enter atleast ten digits";
    error_message.innerHTML = text;
    return false;
  }
  
  
  if(message.length <= 5){
    text = "Please Enter write reason ";
    error_message.innerHTML = text;
    return false;
  }
  else{
  alert("Form Submitted Successfully!");
  return true;
  }
}