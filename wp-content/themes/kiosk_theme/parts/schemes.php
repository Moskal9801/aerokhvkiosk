<div id="schemes" class="contents__content">
    <div class="content__title">
        <div class="title__title">Схемы терминалов</div>
        <a href="#" id="showDescription" class="title__description">
            <p>Условные обозначения</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="19" viewBox="0 0 24 19" fill="none">
                <path d="M22.8029 17.7471H6.75419C6.09274 17.7471 5.55664 17.211 5.55664 16.5496C5.55664 15.8882 6.09274 15.3521 6.75419 15.3521H22.8025C23.4639 15.3521 24 15.8882 24 16.5496C24 17.211 23.4643 17.7471 22.8029 17.7471Z" fill="black"/>
                <path d="M22.8029 10.2303H6.75419C6.09274 10.2303 5.55664 9.69419 5.55664 9.03275C5.55664 8.37131 6.09274 7.83521 6.75419 7.83521H22.8025C23.4639 7.83521 24 8.37131 24 9.03275C24.0004 9.69419 23.4643 10.2303 22.8029 10.2303Z" fill="black"/>
                <path d="M22.8029 2.71321H6.75419C6.09274 2.71321 5.55664 2.1771 5.55664 1.51566C5.55664 0.854216 6.09274 0.318115 6.75419 0.318115H22.8025C23.4639 0.318115 24 0.854216 24 1.51566C24 2.1771 23.4643 2.71321 22.8029 2.71321Z" fill="black"/>
                <path d="M1.6083 3.21661C2.49654 3.21661 3.21661 2.49654 3.21661 1.6083C3.21661 0.720062 2.49654 0 1.6083 0C0.720062 0 0 0.720062 0 1.6083C0 2.49654 0.720062 3.21661 1.6083 3.21661Z" fill="black"/>
                <path d="M1.6083 10.6409C2.49654 10.6409 3.21661 9.92086 3.21661 9.03262C3.21661 8.14438 2.49654 7.42432 1.6083 7.42432C0.720062 7.42432 0 8.14438 0 9.03262C0 9.92086 0.720062 10.6409 1.6083 10.6409Z" fill="black"/>
                <path d="M1.6083 18.0655C2.49654 18.0655 3.21661 17.3454 3.21661 16.4572C3.21661 15.5689 2.49654 14.8489 1.6083 14.8489C0.720062 14.8489 0 15.5689 0 16.4572C0 17.3454 0.720062 18.0655 1.6083 18.0655Z" fill="black"/>
            </svg>
        </a>
    </div>

    <div class="content__schemes">
        <div class="schemes__scheme">
            <?php if ( have_rows( 'terminal' ) ) : ?>
                <?php $terminal = 1; ?>
                <?php while ( have_rows( 'terminal' ) ) : the_row(); ?>
                    <p class="scheme__title <?php if($terminal === 1) { echo 'active'; } ?>" data-terminal="<?php echo $terminal ?>"><?php the_sub_field( 'terminal-scheme' ); ?></p>
                    <?php $terminal++; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if ( have_rows( 'terminal' ) ) : ?>
                <?php $terminal = 1; ?>
                <?php while ( have_rows( 'terminal' ) ) : the_row(); ?>
                    <?php if ( have_rows( 'floor' ) ) : ?>
                        <?php $floor = 1; ?>
                        <?php while ( have_rows( 'floor' ) ) : the_row(); ?>
                            <div class="scheme__floor <?php if($terminal === 1 and $floor === 1) { echo 'active'; } ?>" data-terminal="<?php echo $terminal ?>" data-floor="<?php echo $floor ?>">
                                <img src="<?php the_sub_field( 'floor-scheme' ); ?>" />
                            </div>
                            <?php $floor++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php $terminal++; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="scheme__touch">
                <a href="#" class="touch__plus">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="23.5015" cy="23.5015" r="23.5015" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M23.5012 13.8872C24.5632 13.8872 25.4241 14.7481 25.4241 15.8101V31.1928C25.4241 32.2548 24.5632 33.1157 23.5012 33.1157C22.4393 33.1157 21.5784 32.2548 21.5784 31.1928V15.8101C21.5784 14.7481 22.4393 13.8872 23.5012 13.8872Z" fill="#7497A9"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8872 23.5015C13.8872 22.4395 14.7481 21.5786 15.8101 21.5786H31.1928C32.2548 21.5786 33.1157 22.4395 33.1157 23.5015C33.1157 24.5634 32.2548 25.4243 31.1928 25.4243H15.8101C14.7481 25.4243 13.8872 24.5634 13.8872 23.5015Z" fill="#7497A9"/>
                    </svg>
                </a>
                <a href="#" class="touch__minus">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="23.5015" cy="23.5015" r="23.5015" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8875 23.5015C13.8875 22.4395 14.7483 21.5786 15.8103 21.5786H31.1931C32.2551 21.5786 33.1159 22.4395 33.1159 23.5015C33.1159 24.5634 32.2551 25.4243 31.1931 25.4243H15.8103C14.7483 25.4243 13.8875 24.5634 13.8875 23.5015Z" fill="#7497A9"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="schemes__place">
            <?php if ( have_rows( 'terminal' ) ) : ?>
                <?php $terminal = 1; ?>
                <?php while ( have_rows( 'terminal' ) ) : the_row(); ?>
                    <div class="place__terminal">
                        <p class="terminal__name <?php if($terminal === 1) { echo 'active'; } ?>" data-terminal="<?php echo $terminal ?>"><?php the_sub_field( 'terminal-name' ); ?></p>
                        <div class="terminal__floor">
                            <?php if ( have_rows( 'floor' ) ) : ?>
                                <?php $floor = 1; ?>
                                <?php while ( have_rows( 'floor' ) ) : the_row(); ?>
                                    <a href="#" class="floor__name <?php if($terminal === 1 and $floor === 1) { echo 'active'; } ?>" data-terminal="<?php echo $terminal ?>" data-floor="<?php echo $floor ?>"><?php the_sub_field( 'floor-name' ); ?></a>
                                    <?php $floor++; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php $terminal++; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="schemes__descriptions">
            <?php if ( have_rows( 'terminal' ) ) : ?>
                <?php $terminal = 1; ?>
                <?php while ( have_rows( 'terminal' ) ) : the_row(); ?>
                    <?php if ( have_rows( 'floor' ) ) : ?>
                        <?php $floor = 1; ?>
                        <?php while ( have_rows( 'floor' ) ) : the_row(); ?>
                            <div class="descriptions__description" data-terminal="<?php echo $terminal ?>" data-floor="<?php echo $floor ?>">
                                <p class="description__title">Условные обозначения</p>
                                <div class="description__closed">
                                    <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7089 13.5001L26.3354 3.87356C27.2215 2.98743 27.2215 1.55073 26.3354 0.664725C25.4493 -0.221406 24.0127 -0.221406 23.1266 0.664725L13.5 10.2914L3.87333 0.664598C2.9872 -0.221533 1.55063 -0.221533 0.664503 0.664598C-0.221501 1.55073 -0.221501 2.98743 0.664503 3.87343L10.2911 13.4999L0.664503 23.1266C-0.221501 24.0127 -0.221501 25.4494 0.664503 26.3354C1.55063 27.2215 2.9872 27.2215 3.87333 26.3354L13.5 16.7088L23.1266 26.3354C24.0126 27.2215 25.4493 27.2215 26.3354 26.3354C27.2215 25.4493 27.2215 24.0127 26.3354 23.1266L16.7089 13.5001Z" fill="black"/>
                                    </svg>
                                </div>
                                <div class="description__items">
                                    <?php if ( have_rows( 'floor-description' ) ) : ?>
                                        <?php while ( have_rows( 'floor-description' ) ) : the_row(); ?>
                                            <div class="items__item">
                                                <div class="item__icon">
                                                    <?php echo wp_get_attachment_image(get_sub_field( 'description-icon' ), 'full'); ?>
                                                </div>
                                                <p class="item__text"><?php the_sub_field( 'description-name' ); ?></p>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php $floor++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php $terminal++; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>