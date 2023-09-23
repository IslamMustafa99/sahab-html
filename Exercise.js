$(function() {
    // 1. All p tags that have no children
    var selectedP = $("p:not(.ignore):empty");
    
    // 2. Any element with the text "REPLACE_ME" in it.
    var elementsWithTextReplaceMe = $(":contains('REPLACE_ME')");
    
    // 3. All div tags with a child that has a class of special.
    var divsWithSpecialChild = $("div:has(.special)");
    
    // 4. All heading elements (h1, h2, h3, h4, h5, h6).
    var headings = $(":header");
    
    // 5. Every other visible li.
    var visibleLi = $("li:visible:odd");
    
    // Periodically change the position of #square in a random direction.
    function moveSquare() {
        var left = Math.random() * ($(window).width() - 50); // Random horizontal position
        var top = Math.random() * ($(window).height() - 50); // Random vertical position
        $("#square").css({ left: left, top: top });
    }

    // Move the square every 2000 milliseconds 
    setInterval(moveSquare, 2000);
});


