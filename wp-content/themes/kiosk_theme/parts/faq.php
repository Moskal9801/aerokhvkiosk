<div id="faq" class="contents__content">
    <div class="content__items">
        <?php if ( have_rows( 'questions' ) ) : ?>
            <?php while ( have_rows( 'questions' ) ) : the_row(); ?>
                <div class="items__item">
                    <p class="item__name"><?php the_sub_field( 'questions-name' ); ?></p>
                    <p class="item__text"><?php the_sub_field( 'questions-text' ); ?></p>
                    <a href="#" class="item__more">
                        <span>Развернуть</span>
                        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7071 0.292894C12.0976 0.683419 12.0976 1.31659 11.7071 1.70711L6.70709 6.70712C6.31657 7.09765 5.6834 7.09765 5.29288 6.70712L0.292864 1.70711C-0.097662 1.31659 -0.097662 0.683419 0.292864 0.292893C0.683389 -0.0976318 1.31656 -0.0976318 1.70708 0.292894L5.99998 4.5858L10.2929 0.292894C10.6834 -0.0976314 11.3166 -0.0976314 11.7071 0.292894Z" fill="#7497A9"/>
                        </svg>
                    </a>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>