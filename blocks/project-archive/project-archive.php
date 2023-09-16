<?php

/**
 * Project Archive Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
?>
<main class="p-6 mx-6 pt-0">
<h1 class="py-5 text-4xl text-center mb-5">Projects</h1>
<?php 
$args = array(
    'post_type' => 'project', 
    'posts_per_page' => -1   
);
$project_query = new WP_Query($args);
if ($project_query->have_posts()) {
    while ($project_query->have_posts()) {
        $project_query->the_post();
        the_content();
    }
} else {
    echo 'No projects found.';
}
wp_reset_postdata();
?>
</main>