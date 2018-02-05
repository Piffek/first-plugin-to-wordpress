<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       github.pl/Piffek
 * @since      1.0.0
 *
 * @package    Footer
 * @subpackage Footer/admin/partials
 */
?>

<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

    <form method="post" name="cleanup_options" action="options.php">

        <fieldset>
            <legend class="screen-reader-text"><span>Company Name</span></legend>
            <label for="<?php echo $this->plugin_name; ?>">
                <input type="text" id="<?php echo $this->plugin_name; ?>" name="name" placeholder="your name"/>
            </label>
        </fieldset>

        <fieldset>
            <legend class="screen-reader-text"><span>Email</span></legend>
            <label for="<?php echo $this->plugin_name; ?>">
                <input type="text" id="<?php echo $this->plugin_name; ?>" name="email" placeholder="your email"/>
            </label>
        </fieldset>

        <fieldset>
            <legend class="screen-reader-text"><span>Phone</span></legend>
            <label for="<?php echo $this->plugin_name; ?>">
                <input type="text" id="<?php echo $this->plugin_name; ?>" name="phone" placeholder="your phone"/>
            </label>
        </fieldset>


        <?php submit_button('Save all changes', 'primary','submit', TRUE); ?>

    </form>


