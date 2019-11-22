function validate(){
  var name = document.getElementById("name").value;
  var phone = document.getElementById("phone").value;
  var regEmail = /[a-z\.]*@ashesi\.edu\.gh/ ;
  var email = document.getElementById("address").value;
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
  if(name.length < 5){
    text = "Enter valid name";
    error_message.innerHTML = text;
    return false;
  }
  
  if(phone.length != 10){
    text = "Enter a 10 digit phone number";
    error_message.innerHTML = text;
    return false;
  }

  if(time == null){
    text = "Select time";
    error_message.innerHTML = text;
    return false;
  }
  
  
  if(message.length <= 5){
    text = "Enter write reason ";
    error_message.innerHTML = text;
    return false;
  }
  else{
  alert("Form Submitted Successfully!");
  return true;
  }
}

function checkDateForm(){

  var regDate = /^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/i;
  var date = document.getElementById("date").value;
  var time = document.getElementById("time").value;

  if(regDate.test(regDate) == false){
    text = "Enter a valid date";
    error_message.innerHTML = text;
    return false;
  }

  if(regEmail.test(email) == false){
    text = "Enter valid email address";
    error_message.innerHTML = text;
    return false;  
  }else{
    window.location.href = 'booking.html';
  }

  }