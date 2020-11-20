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

