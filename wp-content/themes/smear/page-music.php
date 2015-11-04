<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-4 center last-paragraph">

          <h1 class="originals">original music</h1>

          <!-- <p id="music-intro">
            This is a small collection of my music. I've decided to include only those compositions that I consider to be somewhat palatable. Click on the title to see more information about the track.
          </p> -->


          <h5 type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="OP. 1 NO. 1" data-information="This piece was created using REAPER. This is not saying much because everything I've done in the last three years has been produced with this software. In 2011, the laptop I was using to run a Pro Tools rig finally gave out on me and so, not having a firewire port on my replacement machine, I started using REAPER. This situation caused me to start using synthesizers more frequently (ReaSynth exclusively) because I was no longer able to interface my microphones with my computer.">OP. 1 NO. 1</h5>
          <audio src="/wp-content/themes/smear/audio/Op1_No1.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <h5 type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="ERRONEOUS COMPUTATION" data-information="After switching over to REAPER, my brother was kind enough to send me a drum synth he created. I've used it quite a lot in my music. I'm not exactly sure what I sampled to create the main synth part. I left some extraneous noise in the trailing end of the sample---you can hear a banging in the distance that undergoes a freqency modification depending on how many semitones the original sample is shifted.">ERRONEOUS COMPUTATION</h5>
          <audio src="/wp-content/themes/smear/audio/erroneous_computation.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <h5 type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="PARKWINE" data-information="My brother an I made a short film about a guy who discovers that he is able---using some old electronic devices---to generate a mysterious package containing some mysterious liquid. It's a pointless story, really. He ends up drinking the liquid like a dumbass and then hallucinates a bit. I wrote this little piano part and then recorded my performace using my phone.">PARKWINE</h5>
          <audio src="/wp-content/themes/smear/audio/parkwine.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <h5 type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="VISITING THE MILK CURTAIN" data-information="I can't exactly remember how I created this one. I hear pitch shifters, a cassette tape winding up, a lot of frequency modulation, and the same drum synth mentioned earlier. There was a period of time where I was putting pitch shifters on everything. The original name of this track was Visiting The Milk Curtain in an 81 Buick Regal (before noon).">VISITING THE MILK CURTAIN</h5>
          <audio src="/wp-content/themes/smear/audio/Milk_Curtain.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <h5 type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="SANDWICH DREAM" data-information="The switch to REAPER caused me to start using my aftermarket webcam microphone for all my recording needs. The result was always pretty noisy so I had to get creative with EQ. I typically balanced the webcam on one of the drawers of a small, plastic dresser and then moved the instrument (usually a guitar) as close to it as possible. Every track on this song was recorded this way. Imagine having no gain control for two years.">SANDWICH DREAM</h5>
          <audio src="/wp-content/themes/smear/audio/sandwich_dream.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <h5 type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="SOMETHING MINOR" data-information="This was recorded at my mother's house in Lakewood. I actually used a real microphone here (an SM57) but I ended up just balancing it on the desk the way I always did in Berkeley. This is generally not a good idea; the frequency response is altered because of the reflections and resonances of the desk, and the noise produced by nearby electronics is exaggerated.">SOMETHING MINOR</h5>
          <audio src="/wp-content/themes/smear/audio/SOMETHING_MINOR.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <h5 type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="THEORETICAL FLIM-FLAM" data-information="Hitler used the phrase THEORETICAL FLIM FLAM in his autobiography. I decided to erect a nerdy, little tune to commemorate this excellent phrase. I probably decreased the bitrate of the track using a delay plugin and tossed a slow-reacting pitch shifter on the drums to add that clanky kind of sound to the hi-hat; this would account for the fuzzy disintegration of the reverb tail.">THEORETICAL FLIM-FLAM</h5>
          <audio src="/wp-content/themes/smear/audio/theoretical_flim-flam.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <h5 type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="WHITE GUILT" data-information="There is really nothing to say about this one. It's not even that good. Probably sampled a goofy, little flute I got at the farmer's market with Dan Kerpen. The most interesting thing is the fact that I was contemplating guilt, privilege, and affirmative action almost incessantly my last year at Berkeley. It took me a very long time to grasp the stupidity of the Democratic party.">WHITE GUILT</h5>
          <audio src="/wp-content/themes/smear/audio/white_guilt.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>


<!-- button -->
<br>
<button type="button" class="btn btn-default aes-button" id="music-button" data-toggle="modal" data-target="#Modal2" data-whatever="Why I don't trust aestheticians">Why I don't trust aestheticians</button>


<!-- modal for each individual track -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel"></h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- modal for bottom aesthetics button -->
<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Why I don't trust aestheticians</h4>
      </div>
      <div class="modal-body">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

        <?php endwhile; else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



    </div>

    <div class="spacer"></div>

  </div>
</div>

<?php get_footer(); ?>
