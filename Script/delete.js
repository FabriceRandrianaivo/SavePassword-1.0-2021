$('.button').click(function() {
    $.ajax({
      type: "POST",
      url: "some.php",
      data: { id: $_DATA['id'] }
    }).done(function( msg ) {
      alert( "Data Saved: " + msg );
    });
  });