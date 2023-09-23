var plus = 0;
var fontsize = 16;

//var add = document.querySelector('.plus');
//var minus = document.querySelector('.minus');
//var start = document.querySelector('.reset'); 
//var pra = document.querySelector('.pra');

//add.addEventListener('click', increase);
//minus.addEventListener('click', decrease);
//start.addEventListener('click', reset); 

//function increase() {
   // plus++;
    //fontsize += 2;
    //pra.style.fontSize = fontsize + 'px';
    //pra.innerHTML = plus;
//}

//function decrease() {
    
       // plus--;
        //fontsize -= 2;
        //pra.style.fontSize = fontsize + 'px';
        //pra.innerHTML = plus;
    //}


//function reset() { 
    //plus = 0;
    //fontsize = 16;
   // pra.style.fontSize = fontsize + 'px';
   // pra.innerHTML = plus;
//}

var pra = $('.pra');

        $('.plus').click(function() {
            plus++;
            fontsize += 2;
            pra.css('font-size', fontsize + 'px');
            pra.text(plus);
        });

        $('.minus').click(function() {
            plus--;
            fontsize -= 2;
            pra.css('font-size', fontsize + 'px');
            pra.text(plus);
        });

        $('.reset').click(function() {
            plus = 0;
            fontsize = 16;
            pra.css('font-size', fontsize + 'px');
            pra.text(plus);
        });









