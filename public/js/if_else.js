"use strict";
(function() {
	// ignore these lines for now
	// just know that the variable 'color' will end up with a random value from the colors array
	var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
	var color = colors[Math.floor(Math.random()*colors.length)];

	var favorite = 'violet'; // TODO: change this to your favorite color from the list

	// TODO: Create a block of if/else statements to check for every color except indigo and violet.
	// TODO: When a color is encountered log a message that tells the color, and an object of that color.
	//       Example: Blue is the color of the sky.

	// TODO: Have a final else that will catch indigo and violet.
	// TODO: In the else, log: I do not know anything by that color.

	// TODO: Using the ternary operator, conditionally log a statement that
	//       says whether the random color matches your favorite color.

	if (color == "red"){
		console.log("Red the blood of angry men");
	} else if (color == "orange"){
		console.log("Orange rimes with door hinge"); 
	} else if (color == "yellow"){
		console.log("Yellow is the color of happiness"); 
	} else if (color == "green"){
		console.log("The grass is always greener"); 
	} else if (color == "blue"){
		console.log("2 of my eyes are blue"); 
	} else {
		console.log("I do not know anything by that color");
	}

	(color == favorite) ? console.log("Matches") : console.log("No match");

})();