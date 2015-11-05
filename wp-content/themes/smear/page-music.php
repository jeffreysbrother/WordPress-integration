<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-4 center last-paragraph">

          <h1 class="originals">original music</h1>

          <h5>OP. 1 NO. 1</h5>
          <audio src="/wp-content/themes/smear/audio/Op1_No1.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <h5>ERRONEOUS COMPUTATION</h5>
          <audio src="/wp-content/themes/smear/audio/erroneous_computation.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <h5>PARKWINE</h5>
          <audio src="/wp-content/themes/smear/audio/parkwine.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <h5>VISITING THE MILK CURTAIN</h5>
          <audio src="/wp-content/themes/smear/audio/Milk_Curtain.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <h5>SANDWICH DREAM</h5>
          <audio src="/wp-content/themes/smear/audio/sandwich_dream.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <h5>SOMETHING MINOR</h5>
          <audio src="/wp-content/themes/smear/audio/SOMETHING_MINOR.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <h5>THEORETICAL FLIM-FLAM</h5>
          <audio src="/wp-content/themes/smear/audio/theoretical_flim-flam.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <h5>WHITE GUILT</h5>
          <audio src="/wp-content/themes/smear/audio/white_guilt.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>


<!-- button -->
<br>
<button type="button" class="btn btn-default aes-button" data-toggle="modal" data-target="#Modal2" data-whatever="Why I don't trust aestheticians">Why I don't trust aestheticians</button>



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
