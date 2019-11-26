var timerID = null; //keep the timeout 
function begin(){
   var level_game = document.getElementById('begin').value;

   window.location.href = 'game.html?'+level_game;
}


function beginGame(){
   var url = window.location.search;

   var level_game = url.replace("?", "");

   var time_sec = 0;

   if(level_game == 1){ // level 1> 120 sec
      time_sec= 120;
   }

   if(level_game == 2){ // level 2> 60 sec
      time_sec= 60;
   }
   
   if(level_game == 3){ // level 3> 30 sec
      time_sec= 30;
   }
   
   //Insert seconds into span

   document.getElementById('cronometer').innerHTML = time_sec;

   //Balloons

   var qtd_balloons=80;

   Balloons(qtd_balloons);

   //print balloons quantity
   document.getElementById('qtballoon').innerHTML = qtd_balloons;
   document.getElementById('popballoons').innerHTML = 0;

   //cronometer

   time_count(/*time_sec*/5 + 1)

}

function time_count(seconds){

   seconds = seconds - 1;
   if (seconds <= -1){
      clearTimeout(timerID); // stop the count function setTimeout
      game_over();
      return false
   }

   document.getElementById('cronometer').innerHTML = seconds;

   timerID = setTimeout("time_count("+seconds+")", 1000);
}

// fazer uma function fim de jogo dando display block em uma animação
function game_over(){
   // remove_balloons_events();
   alert('Game Over!');
}


function Balloons(qtd_balloons){

   for(var i = 1; i <= qtd_balloons; i++){
       
      var baloon = document.createElement("img");
      baloon.src = 'assets/imagens/balao_azul_pequeno.png';

      baloon.onclick = function() {popping (this)};
      baloon.id = 'b' + i;
      baloon.style.margin = '10px';

      document.getElementById('scenario').appendChild(baloon)
   }

}

function popping(e){

   var id_baloon = e.id;

   document.getElementById(id_baloon).src = 'assets/imagens/balao_azul_pequeno_estourado.png'
   document.getElementById(id_baloon).setAttribute("onclick", "");
   points( -1)
}

function points(action){
   var qtballoon = document.getElementById('qtballoon').innerHTML;
   var popballoons = document.getElementById('popballoons').innerHTML;

   qtballoon = parseInt(qtballoon);
   popballoons = parseInt(popballoons);
   

   qtballoon = qtballoon + action;
   popballoons = popballoons - action;

   document.getElementById('qtballoon').innerHTML = qtballoon;
   document.getElementById('popballoons').innerHTML = popballoons;

   game_inner(qtballoon, popballoons);

}

function game_inner(qtballoon, popballoons){

   if(qtballoon == 0){
      alert('You Win!');
      stop_game();
   }

}

function stop_game(){
   clearTimeout(timerID);
}

// function remove_balloons_events(){
//    var i = 1;

//    while(document.getElementById('b' + 1)){
//       document.getElementById('b + i').onclick = '';
//    i++;
//    }
// }