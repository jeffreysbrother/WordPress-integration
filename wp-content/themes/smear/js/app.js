//noconflict wrapper:

  jQuery(document).ready(function($) {
      // the script below generates the Treehouse report card
        // $('.report-card.treehouse').reportCard({
        //     userName: 'jamescool',
        //     site: 'treehouse',
        //     badgesAmount: 7
        // });


      // the script below allows only one audio track to play at a given time
        $("audio").on("play", function() {
          $("audio").not(this).each(function(index, audio) {
              audio.pause();
          });
        });


        //this controls the bootstrap modal on the music page
        $('#exampleModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget); // Button that triggered the modal
          var recipient = button.data('whatever');
          var body = button.data('information');
          // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this);
          modal.find('.modal-title').text(recipient);
          modal.find('.modal-body').text(body);
        });

  });
