var num1 = (math.random()*10+1);
var num2 = (math.random()*5+2);
document.getElementById('capatcha').innerHTML = num1 + ' + ' + num2 + ' = ';
document.getElementsByName('capatcha_solution').value[0] = num1 + num2;

function validate(f)
if (f.email.value == '')
    {
    alert ('You must provide an email address.'); 
    }
else if(f.name.value == '')
{
    alert ('You must provide your name.');
}
else if(f.message.value== '')
{
    alert('You must provide a message.');
}
return false; 
