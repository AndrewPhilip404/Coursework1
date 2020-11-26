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
// to start the game again
function start(){    
    
    move()
}
// to move the player to right
function moveright(element) {

    function frame() {
        left = left + 20
        element.style.left = left + 'px'
        clearInterval(id)
    }
    var id = setInterval(frame, 4)
}
// to move the player to left
function moveleft(element) {
  
    function frame() {
        left = left - 20 
        element.style.left = left + 'px'
        clearInterval(id)
    }
	var id = setInterval(frame, 4) 
}
// initializing the size of the burger
var size = ['45px', '50px', '60px', '70px', '80px', '90px', '100px']

function move(){ 

	var top = 0
    function frame() {
        top++ 
        burger.style.top = top + 'px'
        var burgerImg = burger.getBoundingClientRect(),
            playerImg = player.getBoundingClientRect()
        if (burger.style.top === '460px' && burgerImg.right > playerImg.left && burgerImg.left < playerImg.right) { 
            clearInterval(id) 
            updateScore()
            burger.style.top = 10;
            burger.style.left = Math.floor((Math.random() * 390) + 5); // randomizing the burger size and the place it will fall
            burger.style.width = size[Math.floor(Math.random()*size.length)];

            move()
        }
        if (top == 700) { // if the burger reaches height 700 then game will be over
            clearInterval(id);
            document.getElementById("gameover").innerHTML="GAME OVER";
            score=0
			// score table
		}

		else if (top== 1){
            document.getElementById("gameover").innerHTML="";

            document.getElementById("score").innerHTML=score;		
		}
    }
    var id = setInterval(frame, 2)

}

// update the score 
var score = 0
function updateScore() {
    score++
    document.getElementById("score").innerHTML=score;
}
