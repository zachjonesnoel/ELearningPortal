function validateLogin()
{
	var a=new Array();
	for(var i=0;i<document.login.length;i++)
		if(document.login.elements[i].value.length==0)
			a.push(document.form1.elements[i].name);
	if(a.length!=0)
	window.alert("The following textboxes are empty\n"+a);
}
function validateSignUp()
{
	var a=new Array();
	for(var i=0;i<document.signup.length;i++)
		if(document.signup.elements[i].value.length==0)
			a.push(document.form1.elements[i].name);
	if(a.length!=0)
	window.alert("The following textboxes are empty\n"+a);
}
