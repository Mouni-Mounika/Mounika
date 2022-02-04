// Fucntions for Calculator.
function Evalute()
{
	var expression = document.getElementById('Result').value;
	var result = eval(expression);
	document.getElementById('Result').value = result;
	// displaybutton(result);
}
function displaybutton(value)
{
	document.getElementById("Result").value += value;
}
window.onload = function()
{
	 createbuttons();
};
function createbuttons()
{
	buttonsList = ["1", "2", "3", "/", "4", "5", "6", "*", "7", "8", "9", "-", ".", "0", "+", "C"];
	for( buttonIterator = 0; buttonIterator < buttonsList.length; buttonIterator++)
	{
		var value = buttonsList[buttonIterator];
		if(buttonIterator > 1 && buttonIterator % 4 == 0)
		{
			br = document.createElement("span");
			br.innerHTML = "<br/>";
			document.body.appendChild(br);
		}
		var button = document.createElement("Button");
		button.setAttribute("value", "button" + buttonsList[buttonIterator])
		if(buttonsList[buttonIterator] == "C")
		{
			button.setAttribute('onclick', "document.getElementById('Result').value = '' ");
		}
		else
		{
			button.setAttribute('onclick', "displaybutton(\'" + value + "\')");
			Evalute();
		}
		button.innerHTML = buttonsList[buttonIterator];
		document.body.appendChild(button);
	}
}




