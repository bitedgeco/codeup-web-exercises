"use strict";
// Check if user did not enter numbers in the left or right field resulting in an output of NaN
function checkNum() {
    if (leftField.value == "NaN"){
            leftField.value ="";
            alert("Please enter a number in the left and right fields");
    } 
};
// Assign each field to a var
var leftField = document.getElementById('leftField');
var centerField = document.getElementById('centerField');
var rightField = document.getElementById('rightField');
// listen for button clicks and enter values into fields
var listenerBtn0 = function (event) {
        if (!centerField.value) {
            leftField.value = leftField.value + "0";
        } else {
            rightField.value = rightField.value + "0";
        }
    }
document.getElementById('btn0').addEventListener('click', listenerBtn0, false);

var listenerBtn1 = function (event) {
        if (!centerField.value) {
            leftField.value = leftField.value + "1";
        } else {
            rightField.value = rightField.value + "1";
        }
    }
document.getElementById('btn1').addEventListener('click', listenerBtn1, false);

var listenerBtn2 = function (event) {
        if (!centerField.value) {
            leftField.value = leftField.value + "2";
        } else {
            rightField.value = rightField.value + "2";
        }
    }
document.getElementById('btn2').addEventListener('click', listenerBtn2, false);

var listenerBtn3 = function (event) {
        if (!centerField.value) {
            leftField.value = leftField.value + "3";
        } else {
            rightField.value = rightField.value + "3";
        }
    }
document.getElementById('btn3').addEventListener('click', listenerBtn3, false);

var listenerBtn4 = function (event) {
        if (!centerField.value) {
            leftField.value = leftField.value + "4";
        } else {
            rightField.value = rightField.value + "4";
        }
    }
document.getElementById('btn4').addEventListener('click', listenerBtn4, false);

var listenerBtn5 = function (event) {
        if (!centerField.value) {
            leftField.value = leftField.value + "5";
        } else {
            rightField.value = rightField.value + "5";
        }
    }
document.getElementById('btn5').addEventListener('click', listenerBtn5, false);

var listenerBtn6 = function (event) {
        if (!centerField.value) {
            leftField.value = leftField.value + "6";
        } else {
            rightField.value = rightField.value + "6";
        }
    }
document.getElementById('btn6').addEventListener('click', listenerBtn6, false);

var listenerBtn7 = function (event) {
        if (!centerField.value) {
            leftField.value = leftField.value + "7";
        } else {
            rightField.value = rightField.value + "7";
        }
    }
document.getElementById('btn7').addEventListener('click', listenerBtn7, false);

var listenerBtn8 = function (event) {
        if (!centerField.value) {
            leftField.value = leftField.value + "8";
        } else {
            rightField.value = rightField.value + "8";
        }
    }
document.getElementById('btn8').addEventListener('click', listenerBtn8, false);

var listenerBtn9 = function (event) {
        if (!centerField.value) {
            leftField.value = leftField.value + "9";
        } else {
            rightField.value = rightField.value + "9";
        }
    }
document.getElementById('btn9').addEventListener('click', listenerBtn9, false);

var listenerBtnDecimal = function (event) {
        if (!centerField.value) {
            leftField.value = leftField.value + ".";
        } else {
            rightField.value = rightField.value + ".";
        }
    }
document.getElementById('btnDecimal').addEventListener('click', listenerBtnDecimal, false);

var listenerBtnPlus = function (event) {
    centerField.value ="+";
}
document.getElementById('btnPlus').addEventListener('click', listenerBtnPlus, false);
// added extra logic to "-" minus click to suppot negtive numbers is calculations
var listenerBtnMinus = function (event) {
    if (!leftField.value) {
        leftField.value = leftField.value + "-";
    } else if (centerField.value){
        rightField.value = rightField.value + "-"
    } else centerField.value = "-"
};
document.getElementById('btnMinus').addEventListener('click', listenerBtnMinus, false);

var listenerBtnTimes = function (event) {
    centerField.value ="*";
}
document.getElementById('btnTimes').addEventListener('click', listenerBtnTimes, false);

var listenerBtnDivide = function (event) {
    centerField.value ="/";
}
document.getElementById('btnDivide').addEventListener('click', listenerBtnDivide, false);
// clears all values if c butto  is pressed
var listenerBtnC = function (event) {
    leftField.value = "";
    centerField.value ="";
    rightField.value ="";
}
document.getElementById('btnC').addEventListener('click', listenerBtnC, false);
// equals button functions runs calculations switching in the operator
var listenerBtnEquals = function (event) {
    switch (centerField.value) {
        case "+":
            leftField.value = parseInt(leftField.value) + parseInt(rightField.value);
            break;
        case "-":
            leftField.value = leftField.value - rightField.value;
            break;
        case "*":
            leftField.value = leftField.value * rightField.value;
            break;
        case "/":
            leftField.value = leftField.value / rightField.value;
            break;
        default:
            alert("Please enter one of + - * / in the center field");
            leftField.value ="";
    }
    // Then runs the checkNum funtion at the top of the page to check if output was NaN 
    checkNum();
    centerField.value ="";
    rightField.value ="";
    // returns the focus to the left field
    document.getElementById("leftField").focus();
}
document.getElementById('btnEquals').addEventListener('click', listenerBtnEquals, false);

// Fire listenerBtnEquals by pressing entre key

window.addEventListener('keyup', function (e) {
    if (e.keyCode === 13) {
        listenerBtnEquals();
    }
}, false);

