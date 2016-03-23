"use strict";

var leftField = document.getElementById('leftField');
var middleField = document.getElementById('middleField');
var rightField = document.getElementById('rightField');

var listenerBtn0 = function (event) {
        if (!middleField.value) {
            leftField.value = leftField.value + "0";
        } else {
            rightField.value = rightField.value + "0";
        }
     
    }
document.getElementById('btn0').addEventListener('click', listenerBtn0, false);

var listenerBtn1 = function (event) {
        if (!middleField.value) {
            leftField.value = leftField.value + "1";
        } else {
            rightField.value = rightField.value + "1";
        }
    }
document.getElementById('btn1').addEventListener('click', listenerBtn1, false);

var listenerBtn2 = function (event) {
        if (!middleField.value) {
            leftField.value = leftField.value + "2";
        } else {
            rightField.value = rightField.value + "2";
        }
    }
document.getElementById('btn2').addEventListener('click', listenerBtn2, false);

var listenerBtn3 = function (event) {
        if (!middleField.value) {
            leftField.value = leftField.value + "3";
        } else {
            rightField.value = rightField.value + "3";
        }
    }
document.getElementById('btn3').addEventListener('click', listenerBtn3, false);

var listenerBtn4 = function (event) {
        if (!middleField.value) {
            leftField.value = leftField.value + "4";
        } else {
            rightField.value = rightField.value + "4";
        }
    }
document.getElementById('btn4').addEventListener('click', listenerBtn4, false);

var listenerBtn5 = function (event) {
        if (!middleField.value) {
            leftField.value = leftField.value + "5";
        } else {
            rightField.value = rightField.value + "5";
        }
    }
document.getElementById('btn5').addEventListener('click', listenerBtn5, false);

var listenerBtn6 = function (event) {
        if (!middleField.value) {
            leftField.value = leftField.value + "6";
        } else {
            rightField.value = rightField.value + "6";
        }
    }
document.getElementById('btn6').addEventListener('click', listenerBtn6, false);

var listenerBtn7 = function (event) {
        if (!middleField.value) {
            leftField.value = leftField.value + "7";
        } else {
            rightField.value = rightField.value + "7";
        }
    }
document.getElementById('btn7').addEventListener('click', listenerBtn7, false);

var listenerBtn8 = function (event) {
        if (!middleField.value) {
            leftField.value = leftField.value + "8";
        } else {
            rightField.value = rightField.value + "8";
        }
    }
document.getElementById('btn8').addEventListener('click', listenerBtn8, false);

var listenerBtn9 = function (event) {
        if (!middleField.value) {
            leftField.value = leftField.value + "9";
        } else {
            rightField.value = rightField.value + "9";
        }
    }
document.getElementById('btn9').addEventListener('click', listenerBtn9, false);

var listenerBtnDecimal = function (event) {
        if (!middleField.value) {
            leftField.value = leftField.value + ".";
        } else {
            rightField.value = rightField.value + ".";
        }
    }
document.getElementById('btnDecimal').addEventListener('click', listenerBtnDecimal, false);

var listenerBtnPlus = function (event) {
    middleField.value ="+";
}
document.getElementById('btnPlus').addEventListener('click', listenerBtnPlus, false);

var listenerBtnMinus = function (event) {
    if (!leftField.value) {
        leftField.value = leftField.value + "-";
    } else if (middleField.value){
        rightField.value = rightField.value + "-"
    } else middleField.value = "-"
};
document.getElementById('btnMinus').addEventListener('click', listenerBtnMinus, false);

var listenerBtnTimes = function (event) {
    middleField.value ="*";
}
document.getElementById('btnTimes').addEventListener('click', listenerBtnTimes, false);

var listenerBtnDivide = function (event) {
    middleField.value ="/";
}
document.getElementById('btnDivide').addEventListener('click', listenerBtnDivide, false);

var listenerBtnC = function (event) {
    leftField.value = "";
    middleField.value ="";
    rightField.value ="";
}
document.getElementById('btnC').addEventListener('click', listenerBtnC, false);

var listenerBtnEquals = function (event) {
    switch (middleField.value) {
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
    }
    middleField.value ="";
    rightField.value ="";
}

document.getElementById('btnEquals').addEventListener('click', listenerBtnEquals, false);