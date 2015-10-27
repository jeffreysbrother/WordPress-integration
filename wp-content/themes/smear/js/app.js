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


        //scroll to the error

  });
