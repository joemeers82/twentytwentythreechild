<?php

/**
 * Tech Icon List Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$fields = get_fields();
$list_heading = get_field('list_heading');
$tech_list = get_field('tech_list');
?>
<div class="flex flex-col  max-w-7xl p-6 md:flex-row justify-center md:my-20">
    <div
      class="justify-center items-center text-3xl flex w-full text-center md:text-left md:w-80 mr-5 md:border-r"
    >
      <p class="w-full"><?php echo $list_heading;?></p>
    </div>
    <div
      class="grid grid-cols-3 md:grid-cols-6 gap-5 px-10 md:px-2 mt-10 md:mt-0 w-full md:pr-8"
    >   
    <?php 
        if( have_rows('tech_list') ):
        while( have_rows('tech_list') ): the_row();
            $tech_name = get_sub_field('tech_name');
            $tech_icon = get_sub_field('tech_icon');
            $tech_icon_url = $tech_icon;
        ?>
            <div class="mx-auto shadow-lg shadow-slate-200 w-20 border border-slate-200 h-20  rounded-full flex justify-center bg-white">
              <img
                src="<?php echo $tech_icon;?>"
                title="<?php echo $tech_name.' Icon';?>"
                alt="<?php echo $tech_name.' Icon';?>"
                class="w-10 cursor-pointer"
              />
            </div>
        <?php 
        endwhile;
        endif;
    ?>
            
       
    </div>
  </div>