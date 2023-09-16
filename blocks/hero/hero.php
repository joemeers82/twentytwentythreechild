<?php

/**
 * Hero Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$heading = get_field('hero_heading');
$about = get_field('hero_about');
$image = get_field('hero_image');
$github= get_field('github_url');
$linkedin= get_field('linkedin_url');

?>

<section class="w-full max-w-7xl mx-auto p-6">
    <div class="flex flex-col-reverse md:flex-row my-10">
        
        <div class="w-full md:w-1/2 mb-8 md:mb-5 flex flex-col items-center md:items-start">
            <h1 class="font-semibold text-5xl text-center md:text-left mb-4 md:text-6xl">
                <?php echo $heading; ?>
            </h1>
            <p class="mt-4 text-xl text-center md:text-left mb-6">
                <?php echo $about; ?>
            </p>
            
            <div class="flex justify-center md:justify-start mt-8 items-center gap-4">
                <a target="_blank" href="<?php echo $github; ?>" class="text-blue-500 hover:underline mr-4">
                    <img class="w-6 h-6" src="<?php echo get_stylesheet_directory_uri().'/dist/assets/github-icon.svg'; ?>" title="View code on Github" alt="View code on Github" />
                </a>
                <a target="_blank" href="<?php echo $linkedin; ?>" class="text-blue-500 hover:underline mr-4">
                    <img class="w-6 h-6" src="<?php echo get_stylesheet_directory_uri().'/dist/assets/linkedin-icon.svg'; ?>" title="Open LinkedIn in new tab" alt="Open LinkedIn in a new tab" />
                </a>
                <a href="<?php echo "/projects"; ?>" class="inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-300">View Projects</a>
            </div>
        </div>

        <div class="w-full md:w-1/2 flex justify-center mb-6 md:mb-0">
            <figure>
                <img class="rounded-wacky border h-[350px] w-[350px] object-cover" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </figure>
        </div>
    </div>
</section>

