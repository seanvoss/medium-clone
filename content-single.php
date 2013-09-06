<?php
/**
 * @package medium-clone
 */
?>
<div class="post-page-wrapper-inner cf">
    <?php if ( 'post' == get_post_type() ) : ?>
        <div class="post-author-card">
          <div class="entry-meta post-author-info">
            <? global $post;
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
            <div class="entry-meta">
                <?php medium_posted_on(); ?>
            </div><!-- .entry-meta -->
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'medium' ),
                    'after'  => '</div>',
                ) );
            ?>

            <?php the_content(); ?>
        </div><!-- .entry-content -->

        <footer class="entry-meta">
            <?php
                /* translators: used between list items, there is a space after the comma */
                $category_list = get_the_category_list( __( ', ', 'medium' ) );

                /* translators: used between list items, there is a space after the comma */
                $tag_list = get_the_tag_list( '', __( ', ', 'medium' ) );

                if ( ! medium_categorized_blog() ) {
                    // This blog only has 1 category so we just need to worry about tags in the meta text
                    if ( '' != $tag_list ) {
                        $meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'medium' );
                    } else {
                        $meta_text = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'medium' );
                    }

                } else {
                    // But this blog has loads of categories so we should probably display them here
                    if ( '' != $tag_list ) {
                        $meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'medium' );
                    } else {
                        $meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'medium' );
                    }

                } // end check for categories on this blog

                printf(
                    $meta_text,
                    $category_list,
                    $tag_list,
                    get_permalink(),
                    the_title_attribute( 'echo=0' )
                );
            ?>

            <?php edit_post_link( __( 'Edit', 'medium' ), '<span class="edit-link">', '</span>' ); ?>
        </footer><!-- .entry-meta -->
    </article><!-- #post-## -->
</div>
