<?php

/**
 * Project Details Project Hero Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.

$title = get_field('project_title');
$image = get_field('project_image');
$github = get_field('github_url');
$project_link  = get_field('project_url');
$details = get_field('project_about');
$project_tools = get_field('project_tools');
?>


<article class="w-full max-w-7xl mx-auto p-6 bg-gray-100 shadow-lg rounded-md my-10">
    <div class="flex flex-col md:flex-row space-y-5 md:space-y-0 md:space-x-5">
        <section class="w-full md:w-1/2 p-3">
            <figure>
                <img class="w-full rounded-lg shadow-md object-contain h-86 hover:shadow-lg transition-shadow duration-300 ease-in-out" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" />
            </figure>
            <nav class="flex items-center gap-5 justify-center">
                <div class="mt-3 flex items-center space-x-2">
                    <a target="_blank" href="<?php echo $github; ?>" class="text-blue-500 hover:underline">
                        <img class="w-6 h-6" src="<?php echo get_stylesheet_directory_uri().'/dist/assets/github-icon.svg'; ?>" title="View code on Github" alt="View code on Github"/> 
                    </a>
                </div>
                <div class="mt-3">
                    <a target="_blank" href="<?php echo $project_link; ?>" class="text-blue-500 hover:underline">
                        <img class="w-6 h-6" src="<?php echo get_stylesheet_directory_uri().'/dist/assets/open-icon.svg'; ?>" title="Open project in new tab" alt="Open project in a new tab"/>
                    </a>
                </div>
            </nav>
        </section>

        <section class="w-full md:w-1/2 p-3">
            <h1 class="py-5 text-4xl text-left border-b mb-5"><?php echo $title; ?></h1>
            <p><?php echo $details; ?></p>
            <div class="mt-6 flex justify-center md:justify-start gap-3">
                <?php foreach($project_tools as $project_tool) {
                    echo '<div class="flex items-center justify-center cursor-pointer p-2 h-[60px] w-[60px] bg-white rounded-full shadow bg-no-repeat"><img class="rounded-full h-[40px] w-[40px]" title="'.$project_tool.'" src="'.get_stylesheet_directory_uri().'/dist/assets/'.$project_tool.'-icon.svg" alt="'.$project_tool.' Icon" /> </div>';
                } ?>
            </div>
        </section>
    </div>
</article>


