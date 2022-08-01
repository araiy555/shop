<?php
/**
* Template part for displaying page content in page.php.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package GridMode WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<?php gridmode_before_single_page(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('gridmode-post-singular gridmode-box'); ?>>
<div class="gridmode-box-inside">

    <?php gridmode_before_single_page_title(); ?>

    <?php if ( !(gridmode_get_option('hide_page_header')) ) { ?>
    <header class="entry-header">
    <div class="entry-header-inside gridmode-clearfix">
        <?php if ( !(gridmode_get_option('hide_page_title')) ) { ?>

        <?php if ( gridmode_get_option('remove_page_title_link') ) { ?>
            <?php the_title( '<h1 class="post-title entry-title">', '</h1>' ); ?>
        <?php } else { ?>
            <?php the_title( sprintf( '<h1 class="post-title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
        <?php } ?>

        <?php } ?>

        <?php gridmode_page_postmeta(); ?>
    </div>
    </header><!-- .entry-header -->
    <?php } ?>

    <?php gridmode_after_single_page_title(); ?>

    <div class="entry-content gridmode-clearfix">
            <?php
            the_content( sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="gridmode-sr-only"> "%s"</span> <span class="meta-nav">&rarr;</span>', 'gridmode' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post( get_the_title() )
            ) );

            wp_link_pages( array(
             'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'gridmode' ) . '</span>',
             'after'       => '</div>',
             'link_before' => '<span>',
             'link_after'  => '</span>',
             ) );
             ?>
    </div><!-- .entry-content -->

    <?php gridmode_after_single_page_content(); ?>

    <?php
    if ( !(gridmode_get_option('hide_page_edit')) ) {
        edit_post_link(
            sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Edit <span class="gridmode-sr-only">%s</span>', 'gridmode' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post( get_the_title() )
            ),
            '<footer class="entry-footer gridmode-entry-footer"><div class="gridmode-entry-footer-inside"><span class="edit-link">',
            '</span></div></footer>'
        );
    }
    ?>

</div>
</article>

<?php gridmode_after_single_page(); ?>