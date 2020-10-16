function validate()  
{  
var x=document.myform.email.value; 
var num=document.myform.num.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
  }  
 /* if(isNaN(num) || num!=10)
  {
  	alert("Please enter valide number");
  	return false;
  }
  else
  {
  	return true;
  } */
}