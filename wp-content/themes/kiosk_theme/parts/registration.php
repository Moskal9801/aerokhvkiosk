<div id="registration" class="contents__content">
    <p class="content__title">Онлайн регистрация</p>
    <div class="content__items">
        <?php if ( have_rows( 'airline' ) ) : ?>
            <?php while ( have_rows( 'airline' ) ) : the_row(); ?>
                <a href="<?php the_sub_field( 'airline-link' ); ?>" class="items__item">
                    <img src="<?php the_sub_field( 'airline-image' ); ?>" />
                </a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>