    //this jquery function makes elements with the class name "item" draggable
    $( function() {
      $( ".item" ).draggable();
    } );

    //commonly used html2canvas function that allows user to "take a screenshot" of before appending to element of choice. The user is then able to save that image
    function screenshot() {
      window.scrollTo(0,0) //fixes bug where image gets cut off because of scrolling
      html2canvas(document.getElementById('drawing-space')).then(function(canvas){
      document.getElementById('output').appendChild(canvas) //adds image to 'output' div which is then savable
    })
    };
