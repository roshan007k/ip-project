var x= document.getElementByClassName('button1')
var y= document.getElementByClassName('button2')
function validate1() {
	if (x==" ") {
		alert("Please enter valid username")
	}
	if(y==" "||y.length()<=5){
		alert("Enter valid Password")
	}else{
		alert("Welcome")
	}

}