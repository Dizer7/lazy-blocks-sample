<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
				
				<img src="<?php echo esc_url( $attributes['foto']['url'] ); ?>">
				
				<ul class="social">
				  
				  <?php if ( $attributes['fb'] ) : ?>
				  <li><a href="<?php echo esc_url( $attributes['fb'] ); ?>" class="fab fa-facebook"></a></li>
				  <?php else: ?>
				  <?php endif; ?>
				  
				  <?php if ( $attributes['google'] ) : ?>
				  <li><a href="<?php echo esc_url( $attributes['google'] ); ?>" class="fab fa-google-plus"></a></li>
				  <?php else: ?>
				  <?php endif; ?>
				  
				  <?php if ( $attributes['insta'] ) : ?>
				  <li><a href="<?php echo esc_url( $attributes['insta'] ); ?>" class="fab fa-instagram"></a></li>
				  <?php else: ?>
				  <?php endif; ?>
				  
				  <?php if ( $attributes['linkedin'] ) : ?>
				  <li><a href="<?php echo esc_url( $attributes['linkedin'] ); ?>" class="fab fa-linkedin"></a></li>
				  <?php else: ?>
				  <?php endif; ?>
				  
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title"><?php echo $attributes['name']; ?></h3>
                    <span class="post"><?php echo $attributes['dolzhnost']; ?></span>
                </div>
            </div>
        </div>
        
    </div>
</div>
