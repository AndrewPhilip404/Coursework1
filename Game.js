//initializing objects
var burger    = document.getElementById('burger'),
    player     = document.getElementById('player'),
    background     = document.getElementById('background'),
    gameover  = document.getElementById('gameover')


var left = 10;
player.style.left = 10;
player.style.top = 480;
burger.style.top = 10;
burger.style.left = Math.floor((Math.random() * 390) + 5);
burger.style.width = "70px";
burger.style.height = "70px";
gameover.style.top = 150;
gameover.style.left = 150


//keyboard Keys
document.onkeydown = function() {
    switch (window.event.keyCode) {
        case 37:
            moveleft(player);
            break;
        case 39:
            moveright(player);
			break;

    }
};

//function for movement


function moveright(element) {

    function frame() {
        left = left + 20
        element.style.left = left + 'px'
        clearInterval(id)
    }
    var id = setInterval(frame, 4)
}

function moveleft(element) {
  
    function frame() {
        left = left - 20 
        element.style.left = left + 'px'
        clearInterval(id)
    }
	var id = setInterval(frame, 4) 
}
function move(){ 

	var top = 0

        if (top == 700) {
            clearInterval(id);
            document.getElementById("gameover").innerHTML="GAME OVER";
		}



var score = 0
function updateScore() {
    score++
    document.getElementById("score").innerHTML=score;
}
