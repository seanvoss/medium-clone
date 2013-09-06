<?php
/**
 * @package medium-clone
 */
?>
<div class="post-page-wrapper-inner">
    <?php if ( 'post' == get_post_type() ) : ?>
        <div class="post-author-card">
          <div class="entry-meta post-author-info">
             <? 
                 global $post;
                 echo get_avatar($post->post_author);
             ?>
             <a class="post-author-name" href="#"><?php the_author(); ?></a>
             <p><?php the_author_meta('user_description'); ?></p>
             <p><?php the_date(); ?></p>
              
          </div><!-- .entry-meta -->
        </div>
    <?php endif; ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <a class="offscreen" href="<?php the_permalink(); ?>" title="<?php the_subtitle(); ?>"><?php the_title(); ?></a>
            <h2 class="entry-subtitle"><? the_subtitle(); ?></h2>
        </header><!-- .entry-header -->

        <?php if ( is_search() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
        <?php else : ?>
        <div class="entry-content">
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'medium' ) ); ?>
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'medium' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->
        <?php endif; ?>

        <footer class="entry-meta">
            <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
                <?php
                    /* translators: used between list items, there is a space after the comma */
                    $categories_list = get_the_category_list( __( ', ', 'medium' ) );
                    if ( $categories_list && medium_categorized_blog() ) :
                ?>
                <span class="cat-links">
                    <?php printf( __( 'Posted in %1$s', 'medium' ), $categories_list ); ?>
                </span>
                <?php endif; // End if categories ?>

                <?php
                    /* translators: used between list items, there is a space after the comma */
                    $tags_list = get_the_tag_list( '', __( ', ', 'medium' ) );
                    if ( $tags_list ) :
                ?>
                <span class="tags-links">
                    <?php printf( __( 'Tagged %1$s', 'medium' ), $tags_list ); ?>
                </span>
                <?php endif; // End if $tags_list ?>
            <?php endif; // End if 'post' == get_post_type() ?>

            <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
            <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'medium' ), __( '1 Comment', 'medium' ), __( '% Comments', 'medium' ) ); ?></span>
            <?php endif; ?>

            <?php edit_post_link( __( 'Edit', 'medium' ), '<span class="edit-link">', '</span>' ); ?>
        </footer><!-- .entry-meta -->
    </article><!-- #post-## -->
</div>
