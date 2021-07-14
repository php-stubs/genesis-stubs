<?php
/**
 * Generated stub declarations for Genesis
 * @see https://www.studiopress.com/get-genesis/ to download the Genesis framework (require an email)
 * @see https://github.com/php-stubs/genesis-stubs
 */

namespace StudioPress\Genesis\SEO {
    /**
     * Genesis Open Graph support.
     *
     * @since 3.2.0
     */
    class Open_Graph
    {
        /**
         * Icon size for author and site icon square images.
         *
         * @since 3.2.0
         *
         * @var int
         */
        protected $icon_size;
        /**
         * Constructs the Open_Graph object.
         *
         * @since 3.2.0
         *
         * @param array $config Open Graph configuration.
         */
        public function __construct($config)
        {
        }
        /**
         * Adds WordPress hooks.
         *
         * @since 3.2.0
         */
        public function add_hooks()
        {
        }
        /**
         * Adds default Open Graph image control to the Customizer.
         *
         * Can be moved to `config/customizer-seo-settings.php` when it
         * supports image controls. (Genesis issue #1885.)
         *
         * @since 3.2.0
         *
         * @param WP_Customize_Manager $wp_customize Customizer instance.
         */
        public function add_default_image_control($wp_customize)
        {
        }
        /**
         * Outputs Open Graph meta elements if Open Graph support is enabled.
         *
         * @since 3.2.0
         */
        public function output_open_graph_tags()
        {
        }
        /**
         * Gets the current Open Graph object type.
         *
         * Filterable via `genesis_open_graph_type`.
         *
         * @since 3.2.0
         *
         * @see https://ogp.me/#types Open Graph object types.
         * @return string The Open Graph type.
         */
        protected function get_type()
        {
        }
        /**
         * Gets the current page URL.
         *
         * Filterable via `genesis_open_graph_url`.
         *
         * @since 3.2.0
         *
         * @return string The current page URL.
         */
        protected function get_url()
        {
        }
        /**
         * Gets the image URL.
         *
         * Featured image if present, falling back to the first image attached to
         * the post, then the default set in Customizer Open Graph SEO settings,
         * then the site icon if set.
         *
         * Filterable via `genesis_open_graph_image`.
         *
         * @since 3.2.0
         *
         * @return array The featured or fallback image with 'url', 'height', and 'width' keys.
         */
        protected function get_image()
        {
        }
        /**
         * Gets the author profile image information.
         *
         * @since 3.2.0
         *
         * @return array Image info with 'url', 'height', 'width', and 'alt' keys or empty array.
         */
        protected function get_author_image()
        {
        }
        /**
         * Gets the default Genesis image featured image or first attachment.
         *
         * @since 3.2.0
         *
         * @return array Image info with 'url', 'height', 'width', and 'alt' keys or empty array.
         */
        protected function get_genesis_image()
        {
        }
        /**
         * Gets the default Open Graph image if set in the Customizer.
         *
         * @since 3.2.0
         *
         * @return array Image info with 'url', 'height', 'width', and 'alt' keys or empty array.
         */
        protected function get_open_graph_default_image()
        {
        }
        /**
         * Gets the site icon image info if set.
         *
         * @since 3.2.0
         *
         * @return array Image info with 'url', 'height', 'width', and 'alt' keys or empty array.
         */
        protected function get_site_icon_image()
        {
        }
        /**
         * Gets image info given a URL or attachment ID.
         *
         * @since 3.2.0
         *
         * @param string|int $image URL or attachment ID. Icons assume use of URL.
         * @param bool       $icon If true, gives square value from `icon_size` class property.
         * @return array Image info with 'url', 'height', 'width', and 'alt' keys or empty array.
         */
        protected function get_image_info($image, $icon = false)
        {
        }
        /**
         * Outputs a single Open Graph meta tag.
         *
         * @since 3.2.0
         *
         * @param string $property The Open Graph property without the `og:` prefix.
         * @param string $content The value of the content attribute.
         */
        protected function tag($property, $content)
        {
        }
    }
}
namespace StudioPress\Genesis\Upgrade {
    /**
     * Interface for all database upgraders.
     *
     * @since 3.1.0
     */
    interface Upgrade_DB_Interface
    {
        /**
         * The upgrade method. Required for all implementations of this interface.
         *
         * @since 3.1.0
         */
        public function upgrade();
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 101.
     *
     * @since 3.1.0
     */
    class Upgrade_DB_101 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * Upgrade method.
         *
         * @since 1.0.1
         * @since 3.1.0 Moved to class method.
         */
        public function upgrade()
        {
        }
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 110.
     *
     * @since 3.1.0
     */
    class Upgrade_DB_110 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * Upgrade method.
         *
         * @since 1.1.0
         * @since 3.1.0 Moved to class method.
         */
        public function upgrade()
        {
        }
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 112.
     *
     * @since 3.1.0
     */
    class Upgrade_DB_112 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * Upgrade method.
         *
         * @since 1.1.2
         * @since 3.1.0 Moved to class method.
         */
        public function upgrade()
        {
        }
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 120.
     *
     * @since 3.1.0
     */
    class Upgrade_DB_120 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * Upgrade method.
         *
         * @since 1.2.0
         * @since 3.1.0 Moved to class method.
         */
        public function upgrade()
        {
        }
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 130.
     *
     * @since 3.1.0
     */
    class Upgrade_DB_130 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * Upgrade method.
         *
         * @since 1.3.0
         * @since 3.1.0 Moved to class method.
         */
        public function upgrade()
        {
        }
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 160.
     *
     * @since 3.1.0
     */
    class Upgrade_DB_160 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * Upgrade method.
         *
         * @since 1.6.0
         * @since 3.1.0 Moved to class method.
         */
        public function upgrade()
        {
        }
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 1700.
     *
     * @since 3.1.0
     */
    class Upgrade_DB_1700 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * Upgrade method.
         *
         * @since 1.7.0
         * @since 3.1.0 Moved to class method.
         */
        public function upgrade()
        {
        }
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 1800.
     *
     * @since 3.1.0
     */
    class Upgrade_DB_1800 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * Upgrade method.
         *
         * @since 1.8.0
         * @since 3.1.0 Moved to class method.
         */
        public function upgrade()
        {
        }
        /**
         * Convert term meta for new title/description options.
         *
         * @since 2.6.0
         * @since 3.1.0 Moved to class method.
         */
        public function convert_term_meta()
        {
        }
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 1901.
     *
     * @since 3.1.0
     */
    class Upgrade_DB_1901 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * Upgrade method.
         *
         * @since 1.9.0
         * @since 3.1.0 Moved to class method.
         */
        public function upgrade()
        {
        }
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 2001.
     *
     * @since 3.1.0
     */
    class Upgrade_DB_2001 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * Upgrade method.
         *
         * @since 2.0.0
         * @since 3.1.0 Moved to class method.
         */
        public function upgrade()
        {
        }
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 2003.
     *
     * @since 3.1.0
     */
    class Upgrade_DB_2003 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * Upgrade method.
         *
         * @since 2.0.0
         * @since 3.1.0 Moved to class method.
         */
        public function upgrade()
        {
        }
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 2100.
     *
     * @since 3.1.0
     */
    class Upgrade_DB_2100 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * Upgrade method.
         *
         * @since 2.1.0
         * @since 3.1.0 Moved to class method.
         */
        public function upgrade()
        {
        }
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 2201.
     *
     * @since 3.1.0
     */
    class Upgrade_DB_2201 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * Upgrade method.
         *
         * @since 2.2.0
         * @since 3.1.0 Moved to class method.
         */
        public function upgrade()
        {
        }
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 2207.
     *
     * @since 3.1.0
     */
    class Upgrade_DB_2207 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * Upgrade method.
         *
         * @since 2.2.4
         * @since 3.1.0 Moved to class method.
         */
        public function upgrade()
        {
        }
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 2209.
     *
     * @since 3.1.0
     */
    class Upgrade_DB_2209 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * Upgrade method.
         *
         * @since 2.2.6
         * @since 3.1.0 Moved to class method.
         */
        public function upgrade()
        {
        }
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 2501.
     *
     * @since 3.1.0
     */
    class Upgrade_DB_2501 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * Upgrade method.
         *
         * @since 2.5.0
         * @since 3.1.0 Moved to class method.
         */
        public function upgrade()
        {
        }
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 2603.
     *
     * @since 3.1.0
     */
    class Upgrade_DB_2603 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * Upgrade method.
         *
         * @since 2.6.1
         * @since 3.1.0 Moved to class method.
         */
        public function upgrade()
        {
        }
        /**
         * Strip slashes from header and body scripts saved as post meta.
         *
         * @since 2.6.1
         * @since 3.1.0 Moved to class method.
         */
        public function unslash_post_meta_scripts()
        {
        }
        /**
         * Strip slashes from header and body scripts saved as post meta.
         *
         * @since 2.6.1
         * @since 3.1.0 Moved to class method.
         */
        public function unslash_header_footer_scripts()
        {
        }
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 2700.
     *
     * @since 3.1.0
     */
    class Upgrade_DB_2700 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * Upgrade method.
         *
         * @since 2.7.0
         * @since 3.1.0 Moved to class method.
         */
        public function upgrade()
        {
        }
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 3000.
     *
     * @since 3.1.0
     */
    class Upgrade_DB_3000 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * Upgrade method.
         *
         * @since 2.7.0
         * @since 3.1.0 Moved to class method.
         */
        public function upgrade()
        {
        }
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 3001.
     *
     * @since 3.1.0
     */
    class Upgrade_DB_3001 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * Upgrade method.
         *
         * @since 3.0.0
         * @since 3.1.0 Moved to class method.
         */
        public function upgrade()
        {
        }
        /**
         * Helper method to access (& include/instantiate if necessary) $wp_filesystem global.
         *
         * @since 3.1.0
         *
         * @return object $wp_filesystem global.
         */
        public function filesystem()
        {
        }
        /**
         * Migrate query_args and/or template for pages using page_blog.php template.
         *
         * @since 3.0.0
         * @since 3.1.0 Moved to class method.
         */
        public function migrate_blog_pages()
        {
        }
        /**
         * Generate page_archive.php template file for blogs using default Genesis page_archive.php.
         *
         * @since 3.0.0
         * @since 3.1.0 Moved to class method.
         */
        public function migrate_archive_pages()
        {
        }
        /**
         * Determine if the 'Blog' page template exists.
         *
         * @since 3.0.0
         * @since 3.1.0 Moved to class method.
         *
         * @return bool True if the 'Blog' template theme exists. False if else.
         */
        public function blog_template_exists()
        {
        }
        /**
         * Determine if the 'Archive' page template is available.
         *
         * @since 3.0.0
         * @since 3.1.0 Moved to class method.
         *
         * @return bool True if the 'Archive' template theme exists. False if else.
         */
        public function archive_template_exists()
        {
        }
        /**
         * Create the 'page_blog.php' file within child theme if missing.
         *
         * @since 3.0.0
         * @since 3.1.0 Moved to class method.
         *
         * @return int|bool|void Void if file exists, number of bytes written, or false if error.
         */
        public function create_blog_template()
        {
        }
        /**
         * Create the 'page_archive.php' file within child theme if missing.
         *
         * @since 3.0.0
         * @since 3.1.0 Moved to class method.
         *
         * @return int|bool|void Void if file exists, number of bytes written, or false if error.
         */
        public function create_archive_template()
        {
        }
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 3100.
     *
     * @since 3.1.0
     */
    class Upgrade_DB_3100 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * The Genesis Simple Edits option key constant value.
         *
         * @var string $gse_settings_field
         *
         * @since 3.2.0
         */
        public $gse_settings_field;
        /**
         * Constructor.
         *
         * @since 3.2.0
         */
        public function __construct()
        {
        }
        /**
         * Upgrade method.
         *
         * @since 3.1.0
         */
        public function upgrade()
        {
        }
        /**
         * Create the footer setting with proper default.
         *
         * @since 3.1.0
         */
        public function create_footer_setting()
        {
        }
        /**
         * Unset `noodp` and `noydir` SEO settings. They were removed.
         *
         * @since 3.1.0
         */
        public function unset_noodp_noydir()
        {
        }
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 3101.
     *
     * @since 3.1.2
     */
    class Upgrade_DB_3101 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * Upgrade method.
         *
         * @since 3.1.2
         */
        public function upgrade()
        {
        }
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 3200.
     *
     * @since 3.2.0
     */
    class Upgrade_DB_3200 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * The Genesis Simple Edits option key constant value.
         *
         * @var string $gse_settings_field
         *
         * @since 3.2.0
         */
        public $gse_settings_field;
        /**
         * Constructor.
         *
         * @since 3.2.0
         */
        public function __construct()
        {
        }
        /**
         * Upgrade method.
         *
         * @since 3.2.0
         */
        public function upgrade()
        {
        }
        /**
         * Create the entry meta settings with proper default. Use values from Genesis Simple Edits, if plugin is active.
         *
         * @since 3.2.0
         */
        public function create_entry_meta_settings()
        {
        }
    }
    /**
     * Upgrade class. Called when `db_version` Genesis setting is below 3200.
     *
     * @since 3.3.1
     */
    class Upgrade_DB_3301 implements \StudioPress\Genesis\Upgrade\Upgrade_DB_Interface
    {
        /**
         * Deactivate the Genesis Translations plugin.
         *
         * If left active the plugin prevents the same translation functionality
         * from working in Genesis, because it overrides the translations location.
         *
         * @since 3.3.1
         */
        public function upgrade()
        {
        }
    }
}
namespace {
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Admin
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Abstract base class to create menus and settings pages (with or without sortable meta boxes).
     *
     * This class is extended by subclasses that define specific types of admin pages.
     *
     * @since 1.8.0
     *
     * @package Genesis\Admin
     */
    abstract class Genesis_Admin
    {
        /**
         * Name of the page hook when the menu is registered.
         *
         * @since 1.8.0
         *
         * @var string Page hook
         */
        public $pagehook;
        /**
         * ID of the admin menu and settings page.
         *
         * @since 1.8.0
         *
         * @var string
         */
        public $page_id;
        /**
         * The page to redirect to when menu page is accessed.
         *
         * @since 2.10.0
         *
         * @var string
         */
        public $redirect_to;
        /**
         * The query flag to check for to bypass the redirect setting.
         *
         * @since 2.10.0
         *
         * @var string
         */
        public $redirect_bypass;
        /**
         * Name of the settings field in the options table.
         *
         * @since 1.8.0
         *
         * @var string
         */
        public $settings_field;
        /**
         * Associative array (field name => values) for the default settings on this
         * admin page.
         *
         * @since 1.8.0
         *
         * @var array
         */
        public $default_settings;
        /**
         * Associative array of configuration options for the admin menu(s).
         *
         * @since 1.8.0
         *
         * @var array
         */
        public $menu_ops;
        /**
         * Associative array of configuration options for the settings page.
         *
         * @since 1.8.0
         *
         * @var array
         */
        public $page_ops;
        /**
         * Help view file base.
         *
         * @since 2.5.0
         *
         * @var string
         */
        protected $help_base;
        /**
         * Views path base.
         *
         * @since 2.5.0
         *
         * @var string
         */
        protected $views_base;
        /**
         * Call this method in a subclass constructor to create an admin menu and settings page.
         *
         * @since 1.8.0
         *
         * @param string $page_id          ID of the admin menu and settings page.
         * @param array  $menu_ops         Optional. Config options for admin menu(s). Default is empty array.
         * @param array  $page_ops         Optional. Config options for settings page. Default is empty array.
         * @param string $settings_field   Optional. Name of the settings field. Default is an empty string.
         * @param array  $default_settings Optional. Field name => values for default settings. Default is empty array.
         *
         * @return void Return early if page ID is not set.
         */
        public function create($page_id = '', array $menu_ops = [], array $page_ops = [], $settings_field = '', array $default_settings = [])
        {
        }
        /**
         * Possibly create a new top level admin menu.
         *
         * @since 1.8.0
         */
        public function maybe_add_main_menu()
        {
        }
        /**
         * Possibly create the first submenu item.
         *
         * Because the main menu and first submenu item are usually linked, if you
         * don't create them at the same time, something can sneak in between the
         * two, specifically custom post type menu items that are assigned to the
         * custom top-level menu.
         *
         * Plus, maybe_add_first_submenu takes the guesswork out of creating a
         * submenu of the top-level menu you just created. It's a shortcut of sorts.
         *
         * @since 1.8.0
         */
        public function maybe_add_first_submenu()
        {
        }
        /**
         * Possibly create a submenu item.
         *
         * @since 1.8.0
         */
        public function maybe_add_submenu()
        {
        }
        /**
         * If specified, redirect when accessing this page's menu URL.
         *
         * @since 2.10.0
         *
         * @return void Return early if no redirect destination is set, or if a special query flag is set, or if we're not on this menu page URL.
         */
        public function maybe_redirect()
        {
        }
        /**
         * Register the database settings for storage.
         *
         * @since 1.8.0
         *
         * @return void Return early if admin page doesn't store settings, or user is not on the correct admin page.
         */
        public function register_settings()
        {
        }
        /**
         * Display notices on the save or reset of settings.
         *
         * @since 1.8.0
         *
         * @return void Return early if not on the correct admin page.
         */
        public function notices()
        {
        }
        /**
         * Save method.
         *
         * Override this method to modify form data (for validation, sanitization, etc.) before it gets saved.
         *
         * @since 1.8.0
         *
         * @param mixed $newvalue New value to save.
         * @param mixed $oldvalue Old value.
         * @return mixed Value to save.
         */
        public function save($newvalue, $oldvalue)
        {
        }
        /**
         * Initialize the settings page.
         *
         * This method must be re-defined in the extended classes, to hook in the
         * required components for the page.
         *
         * @since 1.8.0
         */
        public abstract function settings_init();
        /**
         * Load the optional help method, if one exists.
         *
         * @since 2.1.0
         */
        public function load_help()
        {
        }
        /**
         * Add help tab.
         *
         * @since 2.5.0
         *
         * @param string $id    Help tab id.
         * @param string $title Help tab title.
         */
        public function add_help_tab($id, $title)
        {
        }
        /**
         * Display a help view file if it exists.
         *
         * @since 2.5.0
         *
         * @param object $screen Current WP_Screen.
         * @param array  $tab    Help tab.
         */
        public function help_content($screen, $tab)
        {
        }
        /**
         * Set help sidebar for Genesis screens.
         *
         * @since 2.5.0
         */
        public function set_help_sidebar()
        {
        }
        /**
         * Load script and stylesheet assets via scripts() and styles() methods, if they exist.
         *
         * @since 2.1.0
         */
        public function load_assets()
        {
        }
        /**
         * Output the main admin page.
         *
         * This method must be re-defined in the extended class, to output the main
         * admin page content.
         *
         * @since 1.8.0
         */
        public abstract function admin();
        /**
         * Helper function that constructs name attributes for use in form fields.
         *
         * Within Genesis pages, the id attributes of form fields are the same as
         * the name attribute, as since HTML5, [ and ] characters are valid, so this
         * function is also used to construct the id attribute value too.
         *
         * Other page implementation classes may wish to construct and use a
         * get_field_id() method, if the naming format needs to be different.
         *
         * @since 1.8.0
         *
         * @param string $name Field name base.
         * @return string Full field name.
         */
        protected function get_field_name($name)
        {
        }
        /**
         * Echo constructed name attributes in form fields.
         *
         * @since 2.1.0
         *
         * @param string $name Field name base.
         */
        protected function field_name($name)
        {
        }
        /**
         * Helper function that constructs id attributes for use in form fields.
         *
         * @since 1.8.0
         *
         * @param string $id Field id base.
         * @return string Full field id.
         */
        protected function get_field_id($id)
        {
        }
        /**
         * Echo constructed id attributes in form fields.
         *
         * @since 2.1.0
         *
         * @param string $id Field id base.
         */
        protected function field_id($id)
        {
        }
        /**
         * Helper function that returns a setting value from this form's settings
         * field for use in form fields.
         *
         * @since 1.8.0
         *
         * @param string $key Field key.
         * @return string Field value.
         */
        protected function get_field_value($key)
        {
        }
        /**
         * Echo a setting value from this form's settings field for use in form fields.
         *
         * @since 2.1.0
         *
         * @param string $key Field key.
         */
        protected function field_value($key)
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Admin
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Abstract subclass of Genesis_Admin which adds support for creating a basic
     * admin page that does not make use of a Settings API form or meta boxes.
     *
     * This class must be extended when creating a basic admin page and the admin()
     * method must be redefined.
     *
     * @since 1.8.0
     *
     * @package Genesis\Admin
     */
    abstract class Genesis_Admin_Basic extends \Genesis_Admin
    {
        /**
         * Satisfies the abstract requirements of Genesis_Admin.
         *
         * This method can be redefined within the page-specific implementation
         * class if you need to hook something into admin_init.
         *
         * @since 1.8.0
         */
        public function settings_init()
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Admin
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Abstract subclass of Genesis_Admin which adds support for registering and
     * displaying meta boxes.
     *
     * This class must be extended when creating an admin page with meta boxes, and
     * the settings_metaboxes() method must be defined in the subclass.
     *
     * @since 1.8.0
     *
     * @package Genesis\Admin
     */
    abstract class Genesis_Admin_Boxes extends \Genesis_Admin
    {
        /**
         * Register the meta boxes.
         *
         * Must be overridden in a subclass, or it obviously won't work.
         *
         * @since 1.8.0
         */
        public abstract function metaboxes();
        /**
         * Include the necessary sortable meta box scripts.
         *
         * @since 1.8.0
         */
        public function scripts()
        {
        }
        /**
         * Use this as the settings admin callback to create an admin page with sortable meta boxes.
         * Create a 'settings_boxes' method to add meta boxes.
         *
         * @since 1.8.0
         */
        public function admin()
        {
        }
        /**
         * Echo out the do_meta_boxes() and wrapping markup.
         *
         * This method can be overwritten in a child class, to adjust the markup surrounding the meta boxes, and optionally
         * call do_meta_boxes() with other contexts. The overwritten method MUST contain div elements with classes of
         * `metabox-holder` and `postbox-container`.
         *
         * @since 2.0.0
         *
         * @global array $wp_meta_boxes Holds all meta boxes data.
         */
        public function do_metaboxes()
        {
        }
        /**
         * Add meta box to the current admin screen.
         *
         * @since 2.5.0
         *
         * @param string $handle   Meta box handle.
         * @param string $title    Meta box title.
         * @param string $priority Optional. Meta box priority.
         */
        public function add_meta_box($handle, $title, $priority = 'default')
        {
        }
        /**
         * Echo out the content of a meta box.
         *
         * @since 2.5.0
         *
         * @param object $object   Object passed to do_meta_boxes function.
         * @param array  $meta_box Array of parameters passed to add_meta_box function.
         */
        public function do_meta_box($object, $meta_box)
        {
        }
        /**
         * Initialize the settings page.
         *
         * @since 1.8.0
         */
        public function settings_init()
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Admin
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Register a new admin page, providing content and corresponding menu item for the CPT Archive Settings page.
     *
     * @package Genesis\Admin
     */
    class Genesis_Admin_CPT_Archive_Settings extends \Genesis_Admin_Boxes
    {
        /**
         * Post type object.
         *
         * @var \stdClass
         */
        protected $post_type;
        /**
         * Layout selector enabled.
         *
         * @var bool
         */
        protected $layout_enabled;
        /**
         * Create an archive settings admin menu item and settings page for relevant custom post types.
         *
         * @since 2.0.0
         *
         * @param WP_Post_Type $post_type The post type object.
         */
        public function __construct($post_type)
        {
        }
        /**
         * Register each of the settings with a sanitization filter type.
         *
         * @since 2.0.0
         *
         * @see \Genesis_Settings_Sanitizer::add_filter()
         */
        public function sanitizer_filters()
        {
        }
        /**
         * Register meta boxes on the CPT Archive pages.
         *
         * Some of the meta box additions are dependent on certain theme support or user capabilities.
         *
         * The 'genesis_cpt_archives_settings_metaboxes' action hook is called at the end of this function.
         *
         * @since 2.0.0
         */
        public function metaboxes()
        {
        }
        /**
         * Add contextual help content for the archive settings page.
         *
         * @since 2.0.0
         */
        public function help()
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Admin
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Abstract subclass of Genesis_Admin which adds support for displaying a form.
     *
     * This class must be extended when creating an admin page with a form, and the
     * settings_form() method must be defined in the subclass.
     *
     * @since 1.8.0
     *
     * @package Genesis\Admin
     */
    abstract class Genesis_Admin_Form extends \Genesis_Admin
    {
        /**
         * Output settings page form elements.
         *
         * Must be overridden in a subclass, or it obviously won't work.
         *
         * @since 1.8.0
         */
        public abstract function form();
        /**
         * Normal settings page admin.
         *
         * Includes the necessary markup, form elements, etc.
         * Hook to {$this->pagehook}_settings_page_form to insert table and settings form.
         *
         * Can be overridden in a child class to achieve complete control over the settings page output.
         *
         * @since 1.8.0
         */
        public function admin()
        {
        }
        /**
         * Initialize the settings page, by hooking the form into the page.
         *
         * @since 1.8.0
         */
        public function settings_init()
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Admin
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Register a new admin page, providing content and corresponding menu item for the Import / Export page.
     *
     * Although this class was added in 1.8.0, some of the methods were originally standalone functions added in previous
     * versions of Genesis.
     *
     * @package Genesis\Admin
     *
     * @since 1.8.0
     */
    class Genesis_Admin_Import_Export extends \Genesis_Admin_Basic
    {
        /**
         * Create an admin menu item and settings page.
         *
         * Also hook in the handling of file imports and exports.
         *
         * @since 1.8.0
         *
         * @see \Genesis_Admin_Import_Export::export() Handle settings file exports.
         * @see \Genesis_Admin_Import_Export::import() Handle settings file imports.
         */
        public function __construct()
        {
        }
        /**
         * Contextual help content.
         *
         * @since 2.0.0
         */
        public function help()
        {
        }
        /**
         * Callback for displaying the Genesis Import / Export admin page.
         *
         * Call the genesis_import_export_form action after the last default table row.
         *
         * @since 1.4.0
         */
        public function admin()
        {
        }
        /**
         * Add custom notices that display after successfully importing or exporting the settings.
         *
         * @since 1.4.0
         *
         * @return void Return early if not on the correct admin page.
         */
        public function notices()
        {
        }
        /**
         * Return array of export options and their arguments.
         *
         * Plugins and themes can hook into the genesis_export_options filter to add
         * their own settings to the exporter.
         *
         * @since 1.6.0
         *
         * @return array Export options.
         */
        protected function get_export_options()
        {
        }
        /**
         * Echo out the checkboxes for the export options.
         *
         * @since 1.6.0
         *
         * @return void Return early if there are no options to export.
         */
        protected function export_checkboxes()
        {
        }
        /**
         * Generate the export file, if requested, in JSON format.
         *
         * After checking we're on the right page, and trying to export, loop through the list of requested options to
         * export, grabbing the settings from the database, and building up a file name that represents that collection of
         * settings.
         *
         * A .json file is then sent to the browser, named with "genesis" at the start and ending with the current
         * date-time.
         *
         * The genesis_export action is fired after checking we can proceed, but before the array of export options are
         * retrieved.
         *
         * @since 1.4.0
         *
         * @return null Return early if not on the correct page, or we're not exporting settings.
         */
        public function export()
        {
        }
        /**
         * Handle the file uploaded to import settings.
         *
         * Upon upload, the file contents are JSON-decoded. If there were errors, or no options to import, then reload the
         * page to show an error message.
         *
         * Otherwise, loop through the array of option sets, and update the data under those keys in the database.
         * Afterwards, reload the page with a success message.
         *
         * Calls genesis_import action is fired after checking we can proceed, but before attempting to extract the contents
         * from the uploaded file.
         *
         * @since 1.4.0
         *
         * @return null Return early if not on the correct admin page, or we're not importing settings.
         */
        public function import()
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Admin
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Register meta boxes added to WordPress admin screens.
     *
     * @package Genesis\Admin
     */
    class Genesis_Admin_Meta_Boxes extends \Genesis_Admin_Boxes
    {
        /**
         * Create a meta box handler.
         *
         * @since 2.5.0
         */
        public function __construct()
        {
        }
        /**
         * Bypass registering meta boxes.
         *
         * @since 2.5.0
         */
        public function metaboxes()
        {
        }
        /**
         * Echo out the content of a meta box.
         *
         * @since 2.5.0
         *
         * @param string $id     Id of the meta box.
         * @param object $object Object for the meta box. Default null.
         */
        public function show_meta_box($id, $object = \null)
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package StudioPress\Genesis
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Registers a new admin page, providing content and corresponding menu item for the "Getting Started" page.
     *
     * @since 2.8.0
     */
    final class Genesis_Admin_Onboarding extends \Genesis_Admin_Basic
    {
        /**
         * Sets the admin page properties and creates the page.
         */
        public function __construct()
        {
        }
        /**
         * Loads the onboarding admin page.
         */
        public function admin()
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Admin
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Registers a new admin menu item under "Genesis". Redirects to the plugin install screen filtered to return plugins authored by StudioPress.
     *
     * @since 2.10.0
     */
    class Genesis_Admin_Plugins extends \Genesis_Admin_Basic
    {
        /**
         * Create an admin menu item that redirects to the plugin install screen.
         *
         * @since 2.10.0
         */
        public function __construct()
        {
        }
        /**
         * Required to use `Genesis_Admin_Basic`.
         *
         * @since 2.10.0
         */
        public function admin()
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Admin
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Registers a new admin page, providing content and corresponding menu item for the SEO Settings page.
     *
     * Although this class was added in 1.8.0, some of the methods were originally standalone functions added in previous
     * versions of Genesis.
     *
     * @package Genesis\Admin
     *
     * @since 1.8.0
     */
    class Genesis_Admin_SEO_Settings extends \Genesis_Admin_Basic
    {
        /**
         * Create an admin menu item and settings page.
         *
         * @since 1.8.0
         */
        public function __construct()
        {
        }
        /**
         * Required to use `Genesis_Admin_Basic`.
         *
         * @since 3.0
         */
        public function admin()
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Admin
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Registers a new admin page, providing content and corresponding menu item for the Theme Settings page.
     *
     * Although this class was added in 1.8.0, some of the methods were originally* standalone functions added in previous
     * versions of Genesis.
     *
     * @package Genesis\Admin
     *
     * @since 1.8.0
     */
    class Genesis_Admin_Settings extends \Genesis_Admin_Basic
    {
        /**
         * Create an admin menu item and settings page.
         *
         * @since 1.8.0
         */
        public function __construct()
        {
        }
        /**
         * Required to use `Genesis_Admin_Basic`.
         *
         * @since 3.0
         */
        public function admin()
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Admin
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Registers a new admin page, providing content and corresponding menu item for the "What's new" page.
     *
     * @package Genesis\Admin
     *
     * @since 1.9.0
     */
    class Genesis_Admin_Upgraded extends \Genesis_Admin_Basic
    {
        /**
         * Create the page.
         *
         * @since 1.9.0
         */
        public function __construct()
        {
        }
        /**
         * Required to use `Genesis_Admin_Basic`.
         *
         * @since 1.9.0
         */
        public function admin()
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package StudioPress\Genesis
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Genesis AMP Menu Combiner
     *
     * @since 3.0.0
     */
    class Genesis_AMP_Menu_Combiner extends \AMP_Base_Sanitizer
    {
        /**
         * XPath.
         *
         * @var DOMXPath
         */
        protected $xpath;
        /**
         * Main Menu element.
         *
         * @var DOMElement
         */
        protected $main_menu;
        /**
         * Array of menu(s) to combine with the main menu.
         *
         * @var array
         */
        protected $menus_to_combine;
        /**
         * Fix up core themes to do things in the AMP way.
         *
         * @since 3.0.0
         */
        public function sanitize()
        {
        }
        /**
         * Combine the menus.
         *
         * @since 3.0.0
         */
        protected function combine()
        {
        }
        /**
         * Find the main menu.
         *
         * @since 3.0.0
         *
         * @return bool `true` when main menu found; else `false`.
         */
        protected function find_main_menu()
        {
        }
        /**
         * Find and combine the nav menu items to the main menu.
         *
         * @since 3.0.0
         */
        protected function find_and_combine()
        {
        }
        /**
         * Find the nav menu's `<ul>` by it's `id` or `class` attribute.
         *
         * @since 3.0.0
         *
         * @param string $attribute Nav menu's `id` or `class` attribute.
         *
         * @return bool|DOMNode Nav's `<ul>` element upon success; else `false`.
         */
        protected function find_nav_ul($attribute)
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package StudioPress\Genesis
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Genesis AMP Menu.
     *
     * @since 3.0.0
     */
    class Genesis_AMP_Menu
    {
        /**
         * Name of the active theme.
         *
         * @var string
         */
        protected $theme_name;
        /**
         * Array of responsive menu configuration parameters.
         *
         * @var array
         */
        protected $responsive_config = [];
        /**
         * Array of script configurations parameters.
         *
         * @var array
         */
        protected $script_config;
        /**
         * Array of extra configuration parameters.
         *
         * @var array
         */
        protected $extras_config;
        /**
         * Array of configuration parameters for the hamburger menu.
         *
         * @var array
         */
        protected $hamburger_config;
        /**
         * Indexer for the submenu.
         *
         * @var int
         */
        private $submenu_index = 0;
        /**
         * The data for submenu <amp-state> elements.
         *
         * There's only one <amp-state> for each submenu depth in a given menu.
         * For example, all menu items with a depth of 0 will have the same <amp-state>.
         * This allows collapsing another submenu when a submenu is expanded.
         *
         * @var array[][] {
         *     The <amp-state> for a submenu.
         *
         *     @type string $id   The ID of the <amp-state>.
         *     @type string $data The JSON data inside the <amp-state>.
         * }
         */
        private $submenu_states = [];
        /**
         * The <amp-state> value for a submenu that is not expanded.
         *
         * @var int
         */
        private $submenu_not_expanded = 0;
        /**
         * Genesis_Responsive_Menu_Handler constructor.
         *
         * @since 0.1.0
         *
         * @param string $theme_name    Name of the active theme.
         * @param array  $script_config Array of script configurations parameters.
         * @param array  $extras_config Array of extra configuration parameters.
         */
        public function __construct($theme_name, array $script_config, array $extras_config)
        {
        }
        /**
         * Initialize responsive menu configurations to this format:
         *
         *      ID/class attribute => theme_location
         */
        protected function init_responsive_config()
        {
        }
        /**
         * Initialize the AMP menu's configuration parameters.
         */
        protected function init_hamburger_config()
        {
        }
        /**
         * Hook into WordPress.
         *
         * @since 0.1.0
         */
        public function add_hooks()
        {
        }
        /**
         * Adds the menu's custom CSS to the child theme's stylesheet.
         */
        public function add_custom_css()
        {
        }
        /**
         * Add 'genesis-responsive-menu' class attribute to the `<nav>` element.
         *
         * @since 0.1.0
         *
         * @param array $attributes Existing attributes for primary navigation element.
         *
         * @return array Amended attributes for primary navigation element.
         */
        public function add_nav_class_attribute(array $attributes)
        {
        }
        /**
         * Add the hamburger button's HTML to the nav.
         *
         * @since 0.1.0
         *
         * @param string $nav_output Opening container markup, nav, closing container markup.
         *
         * @return string
         */
        public function add_hamburger_button($nav_output)
        {
        }
        /**
         * Add the hamburger attributes.
         *
         * @param array $attributes Array of attributes.
         *
         * @return array Amended array of attributes.
         */
        public function add_hamburger_attributes(array $attributes)
        {
        }
        /**
         * Add attributes for the hamburger button's target navigation menu.
         *
         * @param array $attributes Array of attributes.
         *
         * @return array Amended array of attributes.
         */
        public function add_hamburger_target_menu_attributes(array $attributes)
        {
        }
        /**
         * Add toggle buttons to the submenus that are in the target menu.
         *
         * @since 0.1.0
         *
         * @param string   $item_output The menu item's starting HTML output.
         * @param WP_Post  $item        Menu item data object.
         * @param int      $depth       Depth of menu item. Used for padding.
         * @param stdClass $args        An object of wp_nav_menu() arguments.
         *
         * @return string Amended HTML output when target menu.
         */
        public function add_nav_submenu_toggle($item_output, $item, $depth, $args)
        {
        }
        /**
         * Add attributes to the submenu toggle.
         *
         * @since 0.1.0
         *
         * @param array  $attributes Array of attributes.
         * @param string $context    The given context (not used).
         * @param array  $args       Array of arguments.
         *
         * @return array Amended array of attributes.
         */
        public function add_submenu_toggle_attributes($attributes, $context, $args)
        {
        }
        /**
         * Convert the given string into camelCase, which is used by JavaScript for targeting state controls.
         *
         * @param string $string String to convert.
         *
         * @return string camelCase string.
         */
        protected function convert_to_camel_case($string)
        {
        }
        /**
         * Get the <amp-state> ID for a submenu, given its depth.
         *
         * @param int $depth The depth of the submenu.
         *
         * @return string The <amp-state> ID for the submenu.
         */
        public function get_submenu_state_id($depth)
        {
        }
        /**
         * Output the <amp-state> for each submenu level.
         */
        public function output_submenu_amp_states()
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Breadcrumbs
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Class to control breadcrumbs display.
     *
     * Private properties will be set to private when WordPress requires PHP 5.2.
     * If you change a private property expect that change to break Genesis in the future.
     *
     * @since 1.5.0
     *
     * @package Genesis\Breadcrumbs
     */
    class Genesis_Breadcrumb
    {
        /**
         * Settings array, a merge of provided values and defaults.
         *
         * @since 1.5.0
         *
         * @var array Holds the breadcrumb arguments
         */
        protected $args = [];
        /**
         * Constructor. Set up cacheable values and settings.
         *
         * @since 1.5.0
         */
        public function __construct()
        {
        }
        /**
         * Return the final completed breadcrumb in markup wrapper.
         *
         * @since 1.5.0
         *
         * @param array $args Breadcrumb arguments.
         * @return string HTML markup for final completed markup.
         */
        public function get_output($args = [])
        {
        }
        /**
         * Echo the final completed breadcrumb in markup wrapper.
         *
         * @since 1.5.0
         *
         * @param array $args Breadcrumb arguments.
         */
        public function output($args = [])
        {
        }
        /**
         * Return the correct crumbs for this query, combined together.
         *
         * @since 1.5.0
         *
         * @return string HTML markup for the crumbs, combined together.
         */
        protected function build_crumbs()
        {
        }
        /**
         * Return archive breadcrumb.
         *
         * @since 1.5.0
         *
         * @return string HTML markup for archive breadcrumb.
         */
        protected function get_archive_crumb()
        {
        }
        /**
         * Get single breadcrumb, including any parent crumbs.
         *
         * @since 1.5.0
         *
         * @return string HTML markup for single breadcrumb, including any parent breadcrumbs.
         */
        protected function get_single_crumb()
        {
        }
        /**
         * Return home breadcrumb.
         *
         * Default is Home, linked on all occasions except when is_home() is true.
         *
         * @since 1.5.0
         *
         * @return string HTML markup for home breadcrumb.
         */
        protected function get_home_crumb()
        {
        }
        /**
         * Return blog posts page breadcrumb.
         *
         * Defaults to the home crumb (later removed as a duplicate). If using a
         * static front page, then the title of the Page is returned.
         *
         * @since 1.5.0
         *
         * @return string HTML markup for blog posts page breadcrumb.
         */
        protected function get_blog_crumb()
        {
        }
        /**
         * Return search results page breadcrumb.
         *
         * @since 1.5.0
         *
         * @return string HTML markup for search results page breadcrumb.
         */
        protected function get_search_crumb()
        {
        }
        /**
         * Return 404 (page not found) breadcrumb.
         *
         * @since 1.5.0
         *
         * @return string HTML markup for 404 (page not found) breadcrumb.
         */
        protected function get_404_crumb()
        {
        }
        /**
         * Return content page breadcrumb.
         *
         * @since 1.5.0
         *
         * @global WP_Query $wp_query Query object.
         *
         * @return string HTML markup for a page breadcrumb.
         */
        protected function get_page_crumb()
        {
        }
        /**
         * Get breadcrumb for single attachment, including any parent crumbs.
         *
         * @since 2.0.0
         *
         * @return string HTML markup for a single attachment breadcrumb, including any parent breadcrumbs.
         */
        protected function get_attachment_crumb()
        {
        }
        /**
         * Get breadcrumb for single post, including any parent (category) crumbs.
         *
         * @since 2.0.0
         *
         * @return string HTML markup for a single post breadcrumb, including any parent (category) breadcrumbs.
         */
        protected function get_post_crumb()
        {
        }
        /**
         * Get breadcrumb for single custom post type entry, including any parent (CPT name) crumbs.
         *
         * @since 2.0.0
         *
         * @return string HTML markup for a single custom post type entry breadcrumb, including
         *                any parent (CPT name) breadcrumbs.
         */
        protected function get_cpt_crumb()
        {
        }
        /**
         * Return the category archive crumb.
         *
         * @since 1.9.0
         *
         * @return string HTML markup for a category archive breadcrumb.
         */
        protected function get_category_crumb()
        {
        }
        /**
         * Return the tag archive crumb.
         *
         * @since 1.9.0
         *
         * @return string HTML markup for a tag archive breadcrumb.
         */
        protected function get_tag_crumb()
        {
        }
        /**
         * Return the taxonomy archive crumb.
         *
         * @since 1.9.0
         *
         * @global WP_Query $wp_query Query object.
         *
         * @return string HTML markup for a taxonomy archive breadcrumb.
         */
        protected function get_tax_crumb()
        {
        }
        /**
         * Return the year archive crumb.
         *
         * @since 1.9.0
         *
         * @return string HTML markup for a year archive breadcrumb.
         */
        protected function get_year_crumb()
        {
        }
        /**
         * Return the month archive crumb.
         *
         * @since 1.9.0
         *
         * @return string HTML markup for a month archive breadcrumb.
         */
        protected function get_month_crumb()
        {
        }
        /**
         * Return the day archive crumb.
         *
         * @since 1.9.0
         *
         * @global mixed $wp_locale The locale object, used for getting the
         *                          auto-translated name of the month for month or
         *                          day archives.
         *
         * @return string HTML markup for a day archive breadcrumb.
         */
        protected function get_day_crumb()
        {
        }
        /**
         * Return the author archive crumb.
         *
         * @since 1.9.0
         *
         * @global WP_Query $wp_query Query object.
         *
         * @return string HTML markup for an author archive breadcrumb.
         */
        protected function get_author_crumb()
        {
        }
        /**
         * Return the post type archive crumb.
         *
         * @since 1.9.0
         *
         * @return string HTML markup for a post type archive breadcrumb.
         */
        protected function get_post_type_crumb()
        {
        }
        /**
         * Return recursive linked crumbs of category, tag or custom taxonomy parents.
         *
         * @since 1.5.0
         *
         * @param int    $parent_id Initial ID of object to get parents of.
         * @param string $taxonomy  Name of the taxonomy. May be 'category', 'post_tag' or something custom.
         * @param bool   $link      Whether to link last item in chain. Default false.
         * @param array  $visited   Array of IDs already included in the chain.
         *
         * @return string HTML markup of recursive linked crumbs of category, tag or custom taxonomy parents.
         */
        protected function get_term_parents($parent_id, $taxonomy, $link = \false, array $visited = [])
        {
        }
        /**
         * Return markup for the wrapped link text.
         *
         * @since 2.7.0
         *
         * @param string $content The content to be wrapped.
         * @return string HTML markup for wrapped link text.
         */
        protected function get_breadcrumb_link_text($content)
        {
        }
        /**
         * Return markup for a meta tag for each breadcrumb item.
         *
         * @since 2.7.0
         *
         * @return string HTML markup for meta tag.
         */
        protected function get_breadcrumb_link_meta()
        {
        }
        /**
         * Return markup for a link wrap for each breadcrumb link.
         *
         * @since 2.7.0
         *
         * @param string $content The content to be wrapped.
         * @return string HTML markup for link wrap.
         */
        protected function get_breadcrumb_link_wrap($content)
        {
        }
        /**
         * Return anchor link for a single crumb.
         *
         * @since 1.5.0
         *
         * @param string      $url     URL for href attribute.
         * @param string      $title   Title attribute.
         * @param string      $content Linked content.
         * @param bool|string $sep     Optional. Separator. Default is empty string.
         *
         * @return string HTML markup for anchor link and optional separator.
         */
        protected function get_breadcrumb_link($url, $title, $content, $sep = '')
        {
        }
        /**
         * Determine if static page is shown on front page.
         *
         * @return bool True if page is shown on front, false otherwise.
         */
        protected function page_shown_on_front()
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package StudioPress\Genesis
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Manage Genesis Framework via cli - Backward compatibility.
     */
    class Genesis_Cli_Command
    {
        /**
         * Upgrade the database settings for Genesis, usually after an update.
         *
         * ## EXAMPLES
         *
         *  $ wp genesis upgrade-db
         *  Success: Genesis database upgraded.
         *
         * @subcommand upgrade-db
         * @alias upgrade_db
         *
         * @since 2.2.0
         * @since 2.4.0 Command now invoked with `upgrade-db`, not `upgrade_db`, per WP-CLI standard.
         *
         * @param array $args       Positional arguments.
         * @param array $assoc_args Stores all the arguments defined like --key=value or --flag or --no-flag.
         */
        public function upgrade_db($args, $assoc_args)
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package StudioPress\Genesis
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Manage Genesis Core Framework via cli.
     */
    class Genesis_Cli_Core_Command
    {
        /**
         * Show current Genesis core files version
         *
         * ## CORE
         *
         * ## EXAMPLES
         *
         *  $ wp genesis core version
         *  2.9.1
         *
         * @subcommand version
         *
         * @since 2.10.0
         *
         * @param array $args       Positional arguments.
         * @param array $assoc_args Stores all the arguments defined like --key=value or --flag or --no-flag.
         */
        public function version($args, $assoc_args)
        {
        }
        /**
         * Updates Genesis, upgrades the database.
         *
         * ## EXAMPLES
         *
         *  $ wp genesis core update
         *
         * @since 2.10.0
         *
         * @param array $args       Positional arguments.
         * @param array $assoc_args Stores all the arguments defined like --key=value or --flag or --no-flag.
         */
        public function update($args, $assoc_args)
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package StudioPress\Genesis
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Manage Genesis Framework database via cli.
     */
    class Genesis_Cli_Db_Command
    {
        /**
         * Upgrade the database settings for Genesis, usually after an update.
         *
         * ## DB
         *
         * ## EXAMPLES
         *
         *  $ wp genesis db upgrade
         *  Success: Genesis database upgraded.
         *
         * @subcommand upgrade
         *
         * @since 2.10.0
         *
         * @param array $args       Positional arguments.
         * @param array $assoc_args Stores all the arguments defined like --key=value or --flag or --no-flag.
         */
        public function upgrade($args, $assoc_args)
        {
        }
        /**
         * Show current Genesis database version
         *
         * ## DB
         *
         * ## EXAMPLES
         *
         *  $ wp genesis db version
         *  Success: Version 2.10.0
         *
         * @subcommand version
         *
         * @since 2.10.0
         *
         * @param array $args       Positional arguments.
         * @param array $assoc_args Stores all the arguments defined like --key=value or --flag or --no-flag.
         */
        public function version($args, $assoc_args)
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package StudioPress\Genesis
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Manage Genesis Framework settings via cli.
     */
    class Genesis_Cli_Settings_Command
    {
        /**
         * Outputs the value of a setting.
         *
         * ## SETTING
         *
         * <setting>
         * : The key for the setting you want to get.
         *
         * [--option_key=<key>]
         * : The key for the database field where the settings are stored.
         * ---
         * default: genesis-settings
         * ---
         *
         * ## EXAMPLES
         *
         *  $ wp genesis setting get site_layout
         *
         * @subcommand get
         *
         * @since 2.10.0
         *
         * @param array $args       Positional arguments.
         * @param array $assoc_args Stores all the arguments defined like --key=value or --flag or --no-flag.
         */
        public function get($args, $assoc_args)
        {
        }
        /**
         * Updates a setting value.
         *
         * ## SETTING
         *
         * <setting>
         * : The key for the setting you want to save.
         *
         * <value>
         * : The setting value you want to save
         *
         * [--option_key=<key>]
         * : The key for the database field where the settings are stored.
         * ---
         * default: genesis-settings
         * ---
         *
         * ## EXAMPLES
         *
         *  $ wp genesis setting update site_layout content-sidebar
         *
         * @subcommand update
         *
         * @since 2.10.0
         *
         * @param array $args       Positional arguments.
         * @param array $assoc_args Stores all the arguments defined like --key=value or --flag or --no-flag.
         */
        public function update($args, $assoc_args)
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Contributors
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Value object representing a single contributor to Genesis.
     *
     * @since 2.5.0
     *
     * @package Genesis\Contributors
     */
    final class Genesis_Contributor
    {
        /**
         * Name of contributor.
         *
         * @var string
         */
        private $name;
        /**
         * URL to contributors profile.
         *
         * @var string
         */
        private $profile_url;
        /**
         * URL to contributor's avatar.
         *
         * @var string
         */
        private $avatar_url;
        /**
         * Role in current release.
         *
         * @var string
         */
        private $role;
        /**
         * Initialize fields in Genesis_Contributor instance.
         *
         * @since 2.5.0
         *
         * @param string $name        Name of contributor.
         * @param string $profile_url URL to contributor's profile.
         * @param string $avatar_url  URL to contributor's avatar.
         * @param string $role        Role of contributor in current release.
         */
        public function __construct($name, $profile_url, $avatar_url, $role)
        {
        }
        /**
         * Get contributors name.
         *
         * @since 2.5.0
         *
         * @return string Contributor's name.
         */
        public function get_name()
        {
        }
        /**
         * Get contributors profile URL.
         *
         * @since 2.5.0
         *
         * @return string Contributor's profile URL.
         */
        public function get_profile_url()
        {
        }
        /**
         * Get contributors avatar URL.
         *
         * @since 2.5.0
         *
         * @return string Contributor's avatar URL.
         */
        public function get_avatar_url()
        {
        }
        /**
         * Get contributors role.
         *
         * @since 2.5.0
         *
         * @return string Contributor's role.
         */
        public function get_role()
        {
        }
        /**
         * Get contributors role as translatable name.
         *
         * @since 2.5.0
         *
         * @return string Contributor's role.
         */
        public function get_named_role()
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Contributors
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Repository class for managing contributors to Genesis.
     *
     * @since 2.5.0
     *
     * @package Genesis\Contributors
     */
    class Genesis_Contributors
    {
        /**
         * Cache for all the contributor details.
         *
         * @var Genesis_Contributor[]
         */
        protected $people;
        /**
         * Initialise Genesis_Contributors object.
         *
         * Each person in `$people` should have the following properties:
         *   name
         *   url (full URL)
         *   avatar (full path to image)
         *   role (typically `contributor` or `lead-developer`)
         *
         * There are two shortcut properties:
         *   twitter (just the twitter handle, no `@`, which gets converted into a full URL for the `url` key)
         *   gravatar (just the hash, which gets converted into a full Gravatar URL for the `avatar` key)
         *
         * The shortcut properties are preferred, but if someone does not have Twitter, or a Gravatar URL,
         * different sources can be provided in the `url and `avatar` keys.
         *
         * @param array $people Data set of people who have contributed to Genesis.
         */
        public function __construct(array $people)
        {
        }
        /**
         * Get all people who have contributed.
         *
         * @since 2.5.0
         *
         * @return Genesis_Contributor[]
         */
        public function find_all()
        {
        }
        /**
         * Find all contributors with a specific role.
         *
         * @since 2.5.0
         *
         * @param string $role Role to find contributors by.
         * @return Genesis_Contributor[]
         */
        public function find_by_role($role)
        {
        }
        /**
         * Get all contributors, in a shuffled order.
         *
         * @since 2.5.0
         *
         * @return Genesis_Contributor[]
         */
        public function find_contributors()
        {
        }
        /**
         * Get a single contributor by their ID.
         *
         * The ID is typically the full name, lowercase, no spaces i.e. `nathanrice`.
         *
         * @since 2.5.0
         *
         * @param string $id Contributor ID.
         * @return Genesis_Contributor Person matching ID `$id`.
         */
        public function find_by_id($id)
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Customizer
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Base class for Customizer classes in Genesis.
     *
     * No longer used by Genesis core, this class will eventually be deprecated.
     *
     * @since 2.1.0
     */
    abstract class Genesis_Customizer_Base
    {
        /**
         * Define defaults, call the `register` method, add CSS to head.
         *
         * @since 2.1.0
         */
        public function __construct()
        {
        }
        /**
         * Get field name attribute value.
         *
         * @since 2.1.0
         *
         * @param string $name Option name.
         * @return string Option name as key of settings field.
         */
        protected function get_field_name($name)
        {
        }
        /**
         * Get field ID attribute value.
         *
         * @since 2.1.0
         *
         * @param string $id Option ID.
         * @return string Option ID as key of settings field.
         */
        protected function get_field_id($id)
        {
        }
        /**
         * Get field value.
         *
         * @since 2.1.0
         *
         * @param string $key Option key.
         * @return mixed Field value.
         */
        protected function get_field_value($key)
        {
        }
        /**
         * Takes an array of settings and registers them.
         *
         * @since 2.6.0
         *
         * @param array                $settings     Settings to be registered.
         * @param WP_Customize_Manager $wp_customize WP Customizer Manager object.
         */
        protected function add_settings(array $settings, \WP_Customize_Manager $wp_customize)
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Customizer
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Create panels, sections, and controls in the Customizer.
     *
     * @since 2.1.0
     */
    class Genesis_Customizer
    {
        /**
         * The $wp_customize object.
         *
         * @since 2.6.0
         *
         * @var WP_Customize_Manager
         */
        protected $wp_customize;
        /**
         * Constructor.
         *
         * @since 2.6.0
         *
         * @param WP_Customize_Manager $wp_customize WP Customizer Manager.
         */
        public function __construct(\WP_Customize_Manager $wp_customize)
        {
        }
        /**
         * Initialize registration.
         *
         * By leaving a hook here, it allows other plugins and child themes to also setup and register
         * their own panels, sections, settings, and controls.
         *
         * The Genesis Theme Settings and Theme SEO settings are registered in lib/admin/customizer.php.
         *
         * @since 2.6.0
         */
        public function init()
        {
        }
        /**
         * Register Customizer panel, sections, settings, and controls via a `$config` array.
         *
         * @since 2.6.0
         *
         * @param array $config Customizer configuration.
         */
        public function register(array $config)
        {
        }
        /**
         * Helper alias for $wp_customize->add_panel().
         *
         * @since 2.6.0
         *
         * @param string $panel_name Name of the panel.
         * @param array  $panel      Panel properties.
         */
        public function register_panel($panel_name, array $panel)
        {
        }
        /**
         * Helper alias for $wp_customize->add_section().
         *
         * @since 2.6.0
         *
         * @param string $section_name Section name.
         * @param array  $section      Section properties.
         */
        public function register_section($section_name, array $section)
        {
        }
        /**
         * Helper alias for $wp_customize->add_setting().
         *
         * @since 2.6.0
         *
         * @param string $setting_name Setting name.
         * @param mixed  $setting      Setting default value.
         * @param array  $panel        Panel properties.
         */
        public function register_setting($setting_name, $setting, $panel)
        {
        }
        /**
         * Helper alias for $wp_customize->add_control().
         *
         * @since 2.6.0
         *
         * @param string $control_name Control name.
         * @param array  $control      Control properties.
         * @param array  $panel        Panel properties.
         */
        public function register_control($control_name, array $control, $panel)
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package StudioPress\Genesis
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Genesis Menu Handler - creates a menu component for either a non-AMP or AMP endpoint.
     *
     * @since 3.0.0
     */
    class Genesis_Menu_Handler
    {
        /**
         * Name of the active theme.
         *
         * @var string
         */
        protected $theme_name;
        /**
         * Array of script configurations parameters.
         *
         * @var array
         */
        protected $script_config;
        /**
         * Array of extra configuration parameters.
         *
         * @var array
         */
        protected $extras_config;
        /**
         * Instance of the menu.
         *
         * @var Genesis_Menu|Genesis_AMP_Menu
         */
        protected $menu;
        /**
         * Flag indicating push_single_combine_onto_others method ran.
         *
         * @var bool
         */
        protected $did_push_single_combine_onto_others = \false;
        /**
         * Genesis_Responsive_Menu_Handler constructor.
         *
         * @since 3.0.0
         *
         * @param string $theme_name Name of the active theme.
         * @param array  $config     Array of configurations parameters.
         */
        public function __construct($theme_name, array $config)
        {
        }
        /**
         * Initialize the configuration parameters by merging with defaults.
         *
         * @since 3.0.0
         *
         * @param array $config Array of configurations parameters.
         *
         * @return array
         */
        public static function init_config(array $config)
        {
        }
        /**
         * Hook into WordPress.
         *
         * @since 3.0.0
         */
        public function add_hooks()
        {
        }
        /**
         * Create the AMP or non-AMP menu.
         *
         * @since 3.0.0
         */
        public function create_nonamp_or_amp_menu()
        {
        }
        /**
         * Create an instance of the Genesis_Menu.
         *
         * @since 3.0.0
         */
        private function create_menu()
        {
        }
        /**
         * Create an instance of the Genesis_AMP_Menu.
         *
         * @since 3.0.0
         */
        private function create_amp_menu()
        {
        }
        /**
         * Add the AMP Menu Combiner to the list of content sanitizers.
         *
         * @since 3.0.0
         *
         * @param array $sanitizers Array of content sanitizers.
         *
         * @return array amended array of content sanitizers.
         */
        public function add_amp_menu_combiner($sanitizers)
        {
        }
        /**
         * Push a single 'combine' menu onto the 'others' array.
         */
        protected function push_single_combine_onto_others()
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package StudioPress\Genesis
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Genesis Menu.
     *
     * @since 3.0.0
     */
    class Genesis_Menu
    {
        /**
         * Name of the active theme.
         *
         * @var string
         */
        protected $theme_name;
        /**
         * Array of script configurations parameters.
         *
         * @var array
         */
        protected $config;
        /**
         * Holds script file name suffix.
         *
         * @var string suffix
         */
        private $suffix = '.min';
        /**
         * Responsive menu script version.
         *
         * @var string
         */
        const SCRIPT_VERSION = '1.1.3';
        /**
         * Genesis_Responsive_Menu_Handler constructor.
         *
         * @since 3.0.0
         *
         * @param string $theme_name Name of the active theme.
         * @param array  $config     Array of configurations parameters.
         */
        public function __construct($theme_name, array $config)
        {
        }
        /**
         * Hook into WordPress.
         *
         * @since 3.0.0
         */
        public function add_hooks()
        {
        }
        /**
         * Enqueues scripts.
         */
        public function enqueue_scripts()
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package StudioPress\Genesis
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Class Genesis_Requirements_Views
     *
     * Utility class for handling messaging in various
     * view contexts when system requirements are not met.
     *
     * For internal use only. The existence of public methods
     * does not mean we consider this is a public API. It could
     * change at any time. Developers, do not use this in your code.
     *
     * @private
     * @since 2.7
     */
    final class Genesis_Requirements_Views
    {
        /**
         * Messages to be shown when requirements not met.
         *
         * @var array
         */
        private $messages;
        /**
         * Genesis_Requirements_Views constructor.
         *
         * @param array $messages Messages to show when requirements not met.
         */
        public function __construct(array $messages)
        {
        }
        /**
         * Adds necessary hooks for displaying requirements messaging.
         */
        public function add_hooks()
        {
        }
        /**
         * Displays an admin notice when requirements are not met.
         */
        public function admin_notice()
        {
        }
        /**
         * Formats the messages into paragraphs for display.
         *
         * @return string
         */
        private function messages()
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Sanitizer
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Settings sanitization class. Provides methods for sanitizing data.
     *
     * @since 2.6.0
     *
     * @package Genesis\Sanitizer
     */
    class Genesis_Sanitizer
    {
        /**
         * Returns a 1 or 0, for all truthy / falsy values.
         *
         * Uses double casting. First, we cast to bool, then to integer.
         *
         * @since 2.6.0
         *
         * @param mixed $new_value Should ideally be a 1 or 0 integer passed in.
         * @return int `1` or `0`.
         */
        public static function one_zero($new_value)
        {
        }
        /**
         * Returns a positive integer value.
         *
         * @since 2.6.0
         *
         * @param mixed $new_value Should ideally be a positive integer.
         * @return int Positive integer.
         */
        public static function absint($new_value)
        {
        }
        /**
         * Removes HTML tags from string.
         *
         * @since 2.6.0
         *
         * @param string $new_value String, possibly with HTML in it.
         * @return string String without HTML in it.
         */
        public static function no_html($new_value)
        {
        }
        /**
         * Makes URLs safe
         *
         * @since 2.6.0
         *
         * @param string $new_value String, a URL, possibly unsafe.
         * @return string String a safe URL.
         */
        public static function url($new_value)
        {
        }
        /**
         * Makes Email Addresses safe, via sanitize_email()
         *
         * @since 2.6.0
         *
         * @param string $new_value String, an email address, possibly unsafe.
         * @return string String a safe email address.
         */
        public static function email_address($new_value)
        {
        }
        /**
         * Removes unsafe HTML tags, via wp_kses_post().
         *
         * @since 2.6.0
         *
         * @param string $new_value String with potentially unsafe HTML in it.
         * @return string String with only safe HTML in it.
         */
        public static function safe_html($new_value)
        {
        }
        /**
         * Keeps the option from being updated if the user lacks unfiltered_html
         * capability.
         *
         * @since 2.6.0
         *
         * @param string $new_value New value.
         * @param string $old_value Previous value.
         * @return string New or previous value, depending if user has correct
         *                capability or not.
         */
        public static function requires_unfiltered_html($new_value, $old_value)
        {
        }
        /**
         * Removes unsafe HTML tags when user does not have unfiltered_html
         * capability.
         *
         * @since 2.6.0
         *
         * @param string $new_value New value.
         * @param string $old_value Previous value.
         * @return string New or safe HTML value, depending if user has correct
         *                capability or not.
         */
        public static function unfiltered_or_safe_html($new_value, $old_value)
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Assets
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Script loader class.
     *
     * @since 2.5.0
     *
     * @package Genesis\Assets
     */
    class Genesis_Script_Loader
    {
        /**
         * Holds script file name suffix.
         *
         * @since 2.5.0
         *
         * @var string suffix
         */
        private $suffix = '.min';
        /**
         * Hook into WordPress.
         *
         * @since 2.5.0
         */
        public function add_hooks()
        {
        }
        /**
         * Register front end scripts used by Genesis.
         *
         * @since 2.5.0
         */
        public function register_front_scripts()
        {
        }
        /**
         * Register admin scripts used by Genesis.
         *
         * @since 2.5.0
         */
        public function register_admin_scripts()
        {
        }
        /**
         * Enqueue scripts specific to the Block Editor.
         *
         * @since 3.1.0
         */
        public function enqueue_block_editor_scripts()
        {
        }
        /**
         * Enqueue the scripts used on the front-end of the site.
         *
         * Includes comment-reply, superfish and the superfish arguments.
         *
         * Applies the `genesis_superfish_enabled`, and `genesis_superfish_args_uri`. filter.
         *
         * @since 2.5.0
         */
        public function enqueue_front_scripts()
        {
        }
        /**
         * Conditionally enqueue the scripts used in the admin.
         *
         * Includes Thickbox, theme preview and a Genesis script (actually enqueued in genesis_load_admin_js()).
         *
         * @since 2.5.0
         *
         * @param string $hook_suffix Admin page identifier.
         */
        public function maybe_enqueue_admin_scripts($hook_suffix)
        {
        }
        /**
         * Enqueues the custom script used in the admin, and localizes several strings or values used in the scripts.
         *
         * Applies the `genesis_toggles` filter to toggleable admin settings, so plugin developers can add their own without
         * having to recreate the whole setup.
         *
         * @since 2.5.0
         */
        public function enqueue_and_localize_admin_scripts()
        {
        }
        /**
         * Enable whitelisted attributes on registered scripts by adding `...=true` to the script URL.
         *
         * @since 2.6.0
         *
         * @param string $tag    The script tag, generated by WordPress.
         * @param string $handle The handle for the registered script.
         * @param string $src    The source URL for the script.
         * @return string $tag The (maybe) reformatted script tag.
         */
        public function maybe_enable_attrs($tag, $handle, $src)
        {
        }
        /**
         * Determines which Genesis sidebar panels should be visible for the current post type.
         *
         * Intended for use on WordPress admin pages only.
         *
         * @since 3.1.1
         *
         * @param string $post_type Defaults to current post type if not passed.
         * @return array Genesis editor sidebar panels that should be displayed for the given post type, with key as panel name.
         */
        public function visible_genesis_sidebar_panels($post_type = '')
        {
        }
    }
    /**
     * Genesis Framework
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit
     * this file under any circumstances. Please do all modifications
     * in the form of a child theme.
     *
     * @package  StudioPress\Genesis
     * @author   StudioPress
     * @license  GPL-2.0-or-later
     * @link     https://my.studiopress.com/themes/genesis/
     */
    /**
     * Search form class.
     *
     * @since 2.7.0
     *
     * @link https://gist.github.com/cdils/caa151461a2d494dc85ed860cedcd503
     */
    class Genesis_Search_Form
    {
        /**
         * Unique ID for this search field.
         *
         * @var string
         */
        protected $unique_id;
        /**
         * Holds form strings.
         *
         * @var array
         */
        protected $strings;
        /**
         * Constructor.
         *
         * @since 2.7.0
         *
         * @param array $strings Optional. Array of strings. Default is an empty array.
         */
        public function __construct(array $strings = [])
        {
        }
        /**
         * Return markup.
         *
         * @since 2.7.0
         *
         * @param array $args The args array to pass to `genesis_markup()`.
         */
        protected function markup($args)
        {
        }
        /**
         * Render the search form.
         *
         * @since 2.7.0
         */
        public function render()
        {
        }
        /**
         * Get form markup.
         *
         * @since 1.0.0
         *
         * @return string Form markup.
         */
        public function get_form()
        {
        }
        /**
         * Get label markup.
         *
         * @since 1.0.0
         *
         * @return string Label markup.
         */
        protected function get_label()
        {
        }
        /**
         * Get input markup.
         *
         * @since 1.0.0
         *
         * @return string Input field markup.
         */
        protected function get_input()
        {
        }
        /**
         * Get submit button markup.
         *
         * @since 2.7.0
         *
         * @return string Submit button markup.
         */
        protected function get_submit()
        {
        }
        /**
         * Get a unique ID for the search input.
         *
         * @since 2.7.0
         *
         * @return string Unique ID.
         */
        protected function get_input_id()
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package StudioPress\Genesis
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Generates the SEO Document Title for Genesis.
     *
     * @since 2.6.0
     *
     * @package Genesis\SEO
     */
    class Genesis_SEO_Document_Title_Parts
    {
        /**
         * Key used for title part.
         *
         * @since 2.6.0
         */
        const TITLE = 'title';
        /**
         * Key used for tagline part.
         *
         * @since 2.6.0
         */
        const TAGLINE = 'tagline';
        /**
         * Key used for site name part.
         *
         * @since 2.6.0
         */
        const SITE = 'site';
        /**
         * Document title parts.
         *
         * @since 2.6.0
         *
         * @var array
         */
        protected $parts;
        /**
         * Constructor.
         *
         * @since 2.6.0
         */
        public function __construct()
        {
        }
        /**
         * Get title parts array.
         *
         * Uses context to return document title parts.
         *
         * @since 2.6.0
         *
         * @param array $parts Optional. A default $parts array that can be used as a fallback.
         * @return array Return a contextual array of document title parts.
         */
        public function get_parts(array $parts = [])
        {
        }
        /**
         * Get title parts for root page.
         *
         * @since 2.6.0
         *
         * @return array Document title parts.
         */
        public function get_root_page_title_parts()
        {
        }
        /**
         * Get title parts for home page.
         *
         * @since 2.6.0
         *
         * @return array Document title parts.
         */
        public function get_home_page_title_parts()
        {
        }
        /**
         * Get title parts for singular entries.
         *
         * @since 2.6.0
         *
         * @param int $post_id Optional. Post ID. Default is null.
         * @return array Document title parts.
         */
        public function get_singular_title_parts($post_id = \null)
        {
        }
        /**
         * Get title parts for taxonomy archives.
         *
         * @since 2.6.0
         *
         * @return array Document title parts.
         */
        public function get_tax_archive_title_parts()
        {
        }
        /**
         * Get title parts for author archives.
         *
         * @since 2.6.0
         *
         * @return array Document title parts.
         */
        public function get_author_archive_title_parts()
        {
        }
        /**
         * Get title parts for post type archives.
         *
         * @since 2.6.0
         *
         * @return array Document title parts.
         */
        public function get_post_type_archive_title_parts()
        {
        }
        /**
         * Set default document title parts array.
         *
         * @since 2.6.0
         *
         * @return array Document title parts.
         */
        public function get_default_parts()
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Sanitizer
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Settings sanitization class. Ensures saved values are of the expected type.
     *
     * @since 1.7.0
     *
     * @package Genesis\Sanitizer
     */
    class Genesis_Settings_Sanitizer
    {
        /**
         * Hold instance of self so methods can be accessed statically.
         *
         * @since 1.7.0
         *
         * @var Genesis_Settings_Sanitizer
         */
        public static $instance;
        /**
         * The sanitizer object.
         *
         * @since 2.6.1
         *
         * @var Genesis_Sanitizer Sanitizer object.
         */
        public $sanitizer;
        /**
         * Holds list of all options as array.
         *
         * @since 1.7.0
         *
         * @var array Options
         */
        public $options = [];
        /**
         * Constructor.
         *
         * @since 1.7.0
         *
         * @param Genesis_Sanitizer $sanitizer Sanitizer object.
         */
        public function __construct(\Genesis_Sanitizer $sanitizer)
        {
        }
        /**
         * Add sanitization filters to options.
         *
         * Associates a sanitization filter to each option (or sub options if they
         * exist) before adding a reference to run the option through that
         * sanitizer at the right time.
         *
         * @since 1.7.0
         *
         * @param string       $filter    Sanitization filter type.
         * @param string       $option    Option key.
         * @param array|string $suboption Optional. Sub-option key.
         * @return bool True when complete.
         */
        public function add_filter($filter, $option, $suboption = \null)
        {
        }
        /**
         * Checks sanitization filter exists, and if so, passes the value through it.
         *
         * @since 1.7.0
         *
         * @param string $filter    Sanitization filter type.
         * @param string $new_value New value.
         * @param string $old_value Previous value.
         * @return mixed Filtered value, or submitted value if value is unfiltered.
         */
        public function do_filter($filter, $new_value, $old_value)
        {
        }
        /**
         * Return array of known sanitization filter types.
         *
         * Array can be filtered via 'genesis_available_sanitizer_filters' to let
         * child themes and plugins add their own sanitization filters.
         *
         * @since 1.7.0
         *
         * @return array Keys of sanitization types, and values of the
         *               filter function name as a callback.
         */
        public function get_available_filters()
        {
        }
        /**
         * Sanitize a value, via the sanitization filter type associated with an
         * option.
         *
         * @since 1.7.0
         *
         * @param mixed  $new_value New value.
         * @param string $option    Name of the option.
         *
         * @return mixed Filtered, or unfiltered value.
         */
        public function sanitize($new_value, $option)
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package StudioPress\Genesis
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Silent skin for the WordPress Updater class.
     * Overrides the output functions so that no
     * text is printed to the screen during plugin installation.
     */
    final class Genesis_Silent_Upgrader_Skin extends \WP_Upgrader_Skin
    {
        /**
         * Overrides the parent method to prevent screen output.
         *
         * @param string $string Not used.
         * @param mixed  ...$args Optional text replacements.
         *
         * @return bool
         */
        public function feedback($string, ...$args)
        {
        }
        /**
         * Overrides the parent method to prevent screen output.
         *
         * @return bool
         */
        public function header()
        {
        }
        /**
         * Overrides the parent method to prevent screen output.
         *
         * @return bool
         */
        public function footer()
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package StudioPress\Genesis
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Check and updates server for update information.
     *
     * Uses the WordPress HTTP API to check an external url for update information.
     * Data returned can be saved to a transient to avoid http calls on every page load.
     *
     * @since 2.7.0
     */
    class Genesis_Update_Check
    {
        /**
         * POST URL key.
         *
         * @var string
         *
         * @since 2.7.0
         */
        const POST_URL_KEY = 'post_url';
        /**
         * POST args key.
         *
         * @var string
         *
         * @since 2.7.0
         */
        const POST_ARGS_KEY = 'post_args';
        /**
         * Required data key
         *
         * @var string
         *
         * @since 2.7.0
         */
        const REQ_DATA_KEY = 'req_data_keys';
        /**
         * URL to POST to.
         *
         * @var string
         *
         * @since 2.7.0
         */
        protected $post_url;
        /**
         * Args used to build the POST request.
         *
         * @var array
         *
         * @since 2.7.0
         */
        protected $post_args;
        /**
         * Required data keys.
         *
         * @var array
         *
         * @since 2.7.0
         */
        protected $req_data_keys;
        /**
         * The results of an update check.
         *
         * @var array
         *
         * @since 2.7.0
         */
        protected $update = [];
        /**
         * Constructor.
         *
         * @since 2.7.0
         *
         * @param array $config The configuration array used to build the server request and process the response.
         */
        public function __construct(array $config)
        {
        }
        /**
         * Retrieve and assemble update information and return the array.
         *
         * @since 2.7.0
         *
         * @return array Array of update information.
         */
        public function get_update()
        {
        }
        /**
         * Validate the format and data of the update response.
         *
         * @param array $response The response to validate.
         * @return array Empty array if invalid, otherwise unaltered response.
         */
        protected function validate_response($response)
        {
        }
        /**
         * Get the POST response.
         *
         * @since 2.7.0
         *
         * @return WP_Error|array The response or WP_Error on failure.
         */
        protected function get_response()
        {
        }
        /**
         * Get the body of the response.
         *
         * @since 2.7.0
         *
         * @return string The body of the response. Empty string if no body or incorrect parameter given.
         */
        protected function get_response_body()
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Widgets
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Genesis Featured Page widget class.
     *
     * @since 1.0.0
     *
     * @package Genesis\Widgets
     */
    class Genesis_Featured_Page extends \WP_Widget
    {
        /**
         * Holds widget settings defaults, populated in constructor.
         *
         * @var array
         */
        protected $defaults;
        /**
         * Constructor. Set the default widget options and create widget.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Echo the widget content.
         *
         * @since 1.0.0
         *
         * @global WP_Query $wp_query Query object.
         * @global int      $more
         *
         * @param array $args     Display arguments including `before_title`, `after_title`,
         *                        `before_widget`, and `after_widget`.
         * @param array $instance The settings for the particular instance of the widget.
         */
        public function widget($args, $instance)
        {
        }
        /**
         * Update a particular instance.
         *
         * This function should check that `$new_instance` is set correctly.
         * The newly calculated value of $instance should be returned.
         * If "false" is returned, the instance won't be saved/updated.
         *
         * @since 1.0.0
         *
         * @param array $new_instance New settings for this instance as input by the user via `form()`.
         * @param array $old_instance Old settings for this instance.
         * @return array Settings to save or bool false to cancel saving.
         */
        public function update($new_instance, $old_instance)
        {
        }
        /**
         * Echo the settings update form.
         *
         * @since 1.0.0
         *
         * @param array $instance Current settings.
         * @return void
         */
        public function form($instance)
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Widgets
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Genesis Featured Post widget class.
     *
     * @since 1.0.0
     *
     * @package Genesis\Widgets
     */
    class Genesis_Featured_Post extends \WP_Widget
    {
        /**
         * Holds widget settings defaults, populated in constructor.
         *
         * @var array
         */
        protected $defaults;
        /**
         * Constructor. Set the default widget options and create widget.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Echo the widget content.
         *
         * @since 1.0.0
         *
         * @global WP_Query $wp_query               Query object.
         * @global array    $_genesis_displayed_ids Array of displayed post IDs.
         * @global int      $more
         *
         * @param array $args     Display arguments including `before_title`, `after_title`,
         *                        `before_widget`, and `after_widget`.
         * @param array $instance The settings for the particular instance of the widget.
         */
        public function widget($args, $instance)
        {
        }
        /**
         * Update a particular instance.
         *
         * This function should check that $new_instance is set correctly.
         * The newly calculated value of $instance should be returned.
         * If "false" is returned, the instance won't be saved/updated.
         *
         * @since 1.0.0
         *
         * @param array $new_instance New settings for this instance as input by the user via `form()`.
         * @param array $old_instance Old settings for this instance.
         * @return array Settings to save or bool false to cancel saving.
         */
        public function update($new_instance, $old_instance)
        {
        }
        /**
         * Echo the settings update form.
         *
         * @since 1.0.0
         *
         * @param array $instance Current settings.
         * @return void
         */
        public function form($instance)
        {
        }
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Widgets
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Genesis User Profile widget class.
     *
     * @since 1.0.0
     *
     * @package Genesis\Widgets
     */
    class Genesis_User_Profile_Widget extends \WP_Widget
    {
        /**
         * Holds widget settings defaults, populated in constructor.
         *
         * @var array
         */
        protected $defaults;
        /**
         * Constructor. Set the default widget options and create widget.
         */
        public function __construct()
        {
        }
        /**
         * Echo the widget content.
         *
         * @param array $args     Display arguments including `before_title`, `after_title`,
         *                        `before_widget`, and `after_widget`.
         * @param array $instance The settings for the particular instance of the widget.
         */
        public function widget($args, $instance)
        {
        }
        /**
         * Update a particular instance.
         *
         * This function should check that $new_instance is set correctly.
         * The newly calculated value of $instance should be returned.
         * If "false" is returned, the instance won't be saved/updated.
         *
         * @param array $new_instance New settings for this instance as input by the user via `form()`.
         * @param array $old_instance Old settings for this instance.
         * @return array Settings to save or bool false to cancel saving.
         */
        public function update($new_instance, $old_instance)
        {
        }
        /**
         * Echo the settings update form.
         *
         * @param array $instance Current settings.
         * @return void
         */
        public function form($instance)
        {
        }
    }
}
/**
 * Genesis Framework.
 *
 * Provides update notices to make users aware that Genesis and Genesis child
 * themes do not use the WordPress.org update process.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Admin
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis/
 * @link    https://make.wordpress.org/core/2020/07/15/controlling-plugin-and-theme-auto-updates-ui-in-wordpress-5-5/
 * @link    https://core.trac.wordpress.org/ticket/50663
 */
namespace StudioPress\Genesis\Admin\AutoUpdateNotices {
    /**
     * Alters the update notice shown with theme information.
     *
     * @since 3.3.3
     *
     * @param string $original_template Original update notice template.
     * @return string The new template.
     */
    function setting_template($original_template)
    {
    }
    /**
     * Alters auto-update notice debug text, such as on the Site Health page.
     *
     * @since 3.3.3
     *
     * @param string $notice Current update notice.
     * @param object $theme Theme data.
     * @return string|void New update notice.
     */
    function debug_string($notice, $theme)
    {
    }
    /**
     * Alters auto-update notice text in the theme updates listing,
     * visible on WordPress multisite.
     *
     * @since 3.3.3
     *
     * @param string $html Current update HTML.
     * @param string $stylesheet Stylesheet name.
     * @param object $theme Theme data.
     * @return string|void New update HTML.
     */
    function setting_html($html, $stylesheet, $theme)
    {
    }
}
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package StudioPress\Genesis
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis/
 */
namespace StudioPress\Genesis\Admin\Install {
    /**
     * Inserts the default Genesis settings values into the options table, if they don't already exist.
     *
     * @since 3.0.3
     *
     * @return bool True of setting added, false otherwise.
     */
    function insert_default_settings()
    {
    }
    /**
     * Inserts the default Genesis settings values into the options table, if they don't already exist.
     *
     * @since 3.0.3
     *
     * @return bool True of setting added, false otherwise.
     */
    function insert_default_seo_settings()
    {
    }
}
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this
 * file under any circumstances. Do all modifications via a child theme.
 *
 * @package Genesis\Admin\WidgetImport
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis/
 */
namespace StudioPress\Genesis\Admin\WidgetImport {
    /**
     * Inserts a widget into the named sidebar by updating the `wp_options` table.
     *
     * @since 3.1.0
     *
     * @param string $sidebar The slug of the widget area to add the widget to.
     * @param string $type The type of widget. The value after 'widget_' in the
     *                     `wp_options` table option_name column.
     * @param array  $args The widget's properties. The unserialized content of a
     *                     single widget in the `widget_{$type}` row in `wp_options`.
     */
    function insert_widget($sidebar, $type, $args = [])
    {
    }
    /**
     * Clears widgets from named widget areas, moving widgets they contain
     * to the 'Inactive Widgets' area.
     *
     * @since 3.1.0
     *
     * @param array $areas The widget areas to remove widgets from.
     */
    function clear_widget_areas($areas = [])
    {
    }
    /**
     * Gets the next widget ID for widgets of a given type.
     *
     * This is the ID that would be used to insert a new widget of that type into
     * the `widget_[type]` row in the `wp_options` table.
     *
     * Since 3.1.0
     *
     * @param array $widgets Widgets of one type, typically retrieved via
     *                       `get_option( "widget_[type]" );`.
     * @return int The next ID to use for a new widget.
     */
    function get_next_widget_id($widgets)
    {
    }
    /**
     * Swaps placeholder strings representing an imported post with the post's ID.
     *
     * Strings of the form '$imported_posts_slug' are replaced by the value
     * of `$imported_posts['slug']`.
     *
     * For example, an onboarding config might add a Featured Page widget with the
     * `page_id` of an 'about' page that will be imported during theme setup:
     *
     * [
     *  'type' => 'featured-page',
     *  'args' => [
     *      'title'           => 'A Genesis Featured Page Widget',
     *      'page_id'         => '$imported_posts_about',
     *      'show_image'      => 1,
     *      'image_size'      => 'featured-image',
     *      'image_alignment' => 'aligncenter',
     *      'show_title'      => 1,
     *      'content_limit'   => '',
     *      'more_text'       => '',
     *  ],
     * ],
     *
     * @since 3.1.0
     *
     * @param array $widget_arguments Properties of a single widget.
     * @param array $imported_posts Imported posts with content short name as keys and IDs as values.
     * @return array Widget arguments with placeholder strings replaced with imported IDs.
     */
    function swap_placeholders($widget_arguments, $imported_posts)
    {
    }
}
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Schema
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis/
 */
namespace StudioPress\Genesis\Functions\Rest {
    /**
     * Add `layouts` endpoint to the REST API.
     *
     * Example: `curl https://example.com/wp-json/genesis/v1/layouts/site`
     * Example: `curl https://example.com/wp-json/genesis/v1/layouts/singular,page,24`
     *
     * @since 3.3.0 Accept multiple comma-separated layout types.
     *              Types are checked from right to left, returning the first type
     *              with registered layouts and falling back to 'site' if no passed
     *              types have registered layouts.
     * @since 3.1.0
     */
    function layouts()
    {
    }
    /**
     * Add `singular-images` endpoint to the REST API.
     *
     * Returns an array of post types that have genesis-singular-images support
     * with singular images enabled in the Singular Content panel in the Customizer.
     *
     * Example: `curl https://example.com/wp-json/genesis/v1/singular-images`
     *
     * Example response:
     *
     * [
     *     'post', // Featured Images are enabled on posts.
     *     'page'  // Featured Images are enabled on pages.
     * ]
     *
     * @since 3.1.0
     */
    function get_singular_images()
    {
    }
    /**
     * Update singular image state to turn featured image output on or off for
     * the provided post types.
     *
     * Expects to receive a JSON object with post type as key, then 1 for the value
     * to enable images, and 0 to disable.
     *
     * {
     *    "pages": 0, // Disable featured images on pages.
     *    "posts": 1  // Enable featured images on posts.
     * }
     *
     * Returns an array of all post types that now have featured images enabled
     * after the update is applied. For the above example, assuming no other post
     * types have `genesis-singular-images` support:
     *
     * [ "posts" ]
     *
     * @since 3.1.0
     */
    function set_singular_images()
    {
    }
    /**
     * Add `breadcrumbs` endpoint to the REST API.
     *
     * Returns an array of options that have breadcrumbs enabled.
     *
     * Example: `curl https://example.com/wp-json/genesis/v1/breadcrumbs`
     *
     * Example response: [ "breadcrumb_single", "breadcrumb_page" ]
     *
     * @since 3.1.0
     */
    function get_breadcrumbs()
    {
    }
    /**
     * Update breadcrumbs state to turn breadcrumb output on or off for
     * the provided option type.
     *
     * Expects to receive a JSON object with breadcrumb type as key,
     * then 1 for the value to enable breadcrumbs, and 0 to disable.
     *
     * {
     *    "breadcrumb_front_page": 0, // Disable breadcrumbs on the front page.
     *    "breadcrumb_single": 1      // Enable breadcrumbs on posts.
     *    "breadcrumb_page": 1        // Enable breadcrumbs on pages.
     * }
     *
     * Returns an array of all options that now have breadcrumbs enabled after
     * the update is applied. For the above example, assuming no other breadcrumbs
     * are enabled:
     *
     * [ "breadcrumb_single", "breadcrumb_page" ]
     *
     * @since 3.1.0
     */
    function set_breadcrumbs()
    {
    }
    /**
     * Presents show_on_front, page_on_front, and page_for_posts settings.
     *
     * These settings are not currently offered by the WordPress REST API. We could
     * switch to `wp` endpoints once the settings are exposed there.
     *
     * Example: `curl https://example.com/wp-json/genesis/v1/reading-settings`
     *
     * Example response:
     *
     * {"show_on_front":"page","page_on_front":123,"page_for_posts":456}
     *
     * @since 3.1.0
     */
    function get_reading_settings()
    {
    }
}
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Schema
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis/
 */
namespace StudioPress\Genesis\Functions\Schema {
    /**
     * Add schema markup attributes for head element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for `head` element.
     * @return array Amended attributes for `head` element.
     */
    function head($attributes)
    {
    }
    /**
     * Add schema markup attributes for body element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for `body` element.
     * @return array Amended attributes for `body` element.
     */
    function body($attributes)
    {
    }
    /**
     * Add schema markup attributes for site header element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for site header element.
     * @return array Amended attributes for site header element.
     */
    function site_header($attributes)
    {
    }
    /**
     * Add schema markup attributes for site title element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for site title element.
     * @return array Amended attributes for site title element.
     */
    function site_title($attributes)
    {
    }
    /**
     * Add schema markup attributes for site description element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for site description element.
     * @return array Amended attributes for site description element.
     */
    function site_description($attributes)
    {
    }
    /**
     * Add schema markup attributes for breadcrumbs wrapper.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for breadcrumbs wrapper element.
     * @return array Amended attributes for breadcrumbs wrapper element.
     */
    function breadcrumb($attributes)
    {
    }
    /**
     * Add schema markup attributes for breadcrumb item element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for breadcrumb item element.
     * @return array Amended attributes for breadcrumb item element.
     */
    function breadcrumb_link_wrap($attributes)
    {
    }
    /**
     * Add schema markup attributes for breadcrumb link wrap meta element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for breadcrumb link wrap meta element.
     * @return array Amended attributes for breadcrumb link wrap meta element.
     */
    function breadcrumb_link_wrap_meta($attributes)
    {
    }
    /**
     * Add schema markup attributes for breadcrumb link element.
     *
     * @since 3.1.0
     *
     * @param array  $attributes Existing attributes for breadcrumb link element.
     * @param string $context    Not used. Markup context (ie. `footer-widget-area`).
     * @param array  $args       Markup arguments.
     * @return array Amended attributes for breadcrumb link element.
     */
    function breadcrumb_link($attributes, $context, $args)
    {
    }
    /**
     * Add schema markup attributes for breadcrumb link text wrap.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for breadcrumb link text wrap.
     * @return array Amended attributes for breadcrumb link text wrap.
     */
    function breadcrumb_link_text_wrap($attributes)
    {
    }
    /**
     * Add schema markup attributes for search form.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for search form element.
     * @return array Amended attributes for search form element.
     */
    function search_form($attributes)
    {
    }
    /**
     * Add schema markup attributes for search form meta tag.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for search form meta element.
     * @return array Amended attributes for search form meta element.
     */
    function search_form_meta($attributes)
    {
    }
    /**
     * Add schema markup attributes for search form input element.
     *
     * @since 3.1.0
     *
     * @param array  $attributes Existing attributes for footer widget area wrapper elements.
     * @param string $context    Not used. Markup context (ie. `footer-widget-area`).
     * @param array  $args       Markup arguments.
     * @return array Amended attributes.
     */
    function search_form_input($attributes, $context, $args)
    {
    }
    /**
     * Add schema markup attributes for primary navigation element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for primary navigation element.
     * @return array Amended attributes for navigation elements.
     */
    function nav_primary($attributes)
    {
    }
    /**
     * Add schema markup attributes for secondary navigation element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for secondary navigation element.
     * @return array Amended attributes for navigation elements.
     */
    function nav_secondary($attributes)
    {
    }
    /**
     * Add schema markup attributes for header navigation element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for header navigation element.
     * @return array Amended attributes for navigation elements.
     */
    function nav_header($attributes)
    {
    }
    /**
     * Add schema markup attributes for the span wrap around navigation item links.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for span wrap around navigation item links.
     * @return array Amended attributes for span wrap around navigation item links.
     */
    function nav_link_wrap($attributes)
    {
    }
    /**
     * Add schema markup attributes for the navigation item links.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for navigation item links.
     * @return array Amended attributes for navigation item links.
     */
    function nav_link($attributes)
    {
    }
    /**
     * Add schema markup attributes for entry element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for entry element.
     * @return array Amended attributes for entry element.
     */
    function entry($attributes)
    {
    }
    /**
     * Add schema markup attributes for entry image element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for entry image element.
     * @return array Amended attributes for entry image element.
     */
    function entry_image($attributes)
    {
    }
    /**
     * Add attributes for singular entry image element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for entry image element.
     * @return array Amended attributes for entry image element.
     */
    function singular_entry_image($attributes)
    {
    }
    /**
     * Add schema markup attributes for entry image element shown in a widget.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for entry image element shown in a widget.
     * @return array Amended attributes for entry image element shown in a widget.
     */
    function entry_image_widget($attributes)
    {
    }
    /**
     * Add schema markup attributes for entry image element shown in a grid loop.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for entry image element shown in a grid loop.
     * @return array Amended attributes for entry image element shown in a grid loop.
     */
    function entry_image_grid_loop($attributes)
    {
    }
    /**
     * Add schema markup attributes for author element for an entry.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for author element for an entry.
     * @return array Amended attributes for author element for an entry.
     */
    function entry_author($attributes)
    {
    }
    /**
     * Add schema markup attributes for entry author link element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for entry author link element.
     * @return array Amended attributes for entry author link element.
     */
    function entry_author_link($attributes)
    {
    }
    /**
     * Add schema markup attributes for entry author name element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for entry author name element.
     * @return array Amended attributes for entry author name element.
     */
    function entry_author_name($attributes)
    {
    }
    /**
     * Add schema markup attributes for time element for an entry.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for time element for an entry.
     * @return array Amended attributes for time element for an entry.
     */
    function entry_time($attributes)
    {
    }
    /**
     * Add schema markup attributes for modified time element for an entry.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for modified time element for an entry.
     * @return array Amended attributes for modified time element for an entry.
     */
    function entry_modified_time($attributes)
    {
    }
    /**
     * Add schema markup attributes for entry title element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for entry title element.
     * @return array Amended attributes for entry title element.
     */
    function entry_title($attributes)
    {
    }
    /**
     * Add schema markup attributes for entry content element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for entry content element.
     * @return array Amended attributes for entry content element.
     */
    function entry_content($attributes)
    {
    }
    /**
     * Add schema markup attributes for single comment element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for single comment element.
     * @return array Amended attributes for single comment element.
     */
    function comment($attributes)
    {
    }
    /**
     * Add schema markup attributes for comment author element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for comment author element.
     * @return array Amended attributes for comment author element.
     */
    function comment_author($attributes)
    {
    }
    /**
     * Add schema markup attributes for comment author link element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for comment author link element.
     * @return array Amended attributes for comment author link element.
     */
    function comment_author_link($attributes)
    {
    }
    /**
     * Add schema markup attributes for comment author name element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for comment author name element.
     * @return array Amended attributes for comment author name element.
     */
    function comment_author_name($attributes)
    {
    }
    /**
     * Add schema markup attributes for comment time element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for comment time element.
     * @return array Amended attributes for comment time element.
     */
    function comment_time($attributes)
    {
    }
    /**
     * Add schema markup attributes for comment time link element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for comment time link element.
     * @param array $context Not used. Markup context (ie. `footer-widget-area`).
     * @param array $args Arguments.
     * @return array Amended attributes for comment time link.
     */
    function comment_time_link($attributes, $context, $args)
    {
    }
    /**
     * Add schema markup attributes for comment content container.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for comment content container.
     * @return array Amended attributes for comment content container.
     */
    function comment_content($attributes)
    {
    }
    /**
     * Add schema markup attributes for author box element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for author box element.
     * @return array Amended attributes for author box element.
     */
    function author_box($attributes)
    {
    }
    /**
     * Add schema markup attributes for primary sidebar element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for primary sidebar element.
     * @return array Amended attributes for primary sidebar element.
     */
    function sidebar_primary($attributes)
    {
    }
    /**
     * Add schema markup attributes for secondary sidebar element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for secondary sidebar element.
     * @return array Amended attributes for secondary sidebar element.
     */
    function sidebar_secondary($attributes)
    {
    }
    /**
     * Add schema markup attributes for site footer element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for site footer element.
     * @return array Amended attributes for site footer element.
     */
    function site_footer($attributes)
    {
    }
}
/**
 * Traduttore Registry library.
 *
 * From  https://github.com/wearerequired/traduttore-registry/blob/master/inc/namespace.php.
 *
 * @since 1.0.0
 * @license GPL-2.0-or-later
 * @package Required\Traduttore_Registry
 */
namespace Required\Traduttore_Registry {
    /**
     * Adds a new project to load translations for.
     *
     * @since 1.0.0
     *
     * @param string $type    Project type. Either plugin or theme.
     * @param string $slug    Project directory slug.
     * @param string $api_url Full GlotPress API URL for the project.
     */
    function add_project($type, $slug, $api_url)
    {
    }
    /**
     * Registers actions for clearing translation caches.
     *
     * @since 1.1.0
     */
    function register_clean_translations_cache()
    {
    }
    /**
     * Clears existing translation cache for a given type.
     *
     * @since 1.1.0
     *
     * @param string $type Project type. Either plugin or theme.
     */
    function clean_translations_cache($type)
    {
    }
    /**
     * Gets the translations for a given project.
     *
     * @since 1.0.0
     *
     * @param string $type Project type. Either plugin or theme.
     * @param string $slug Project directory slug.
     * @param string $url  Full GlotPress API URL for the project.
     *
     * @return array Translation data.
     */
    function get_translations($type, $slug, $url)
    {
    }
    /**
     * Sanitizes a date string.
     *
     * DateTime fails to parse date strings that contain brackets, such as
     * “Tue Dec 22 2015 12:52:19 GMT+0100 (West-Europa)”, which appears in
     * PO-Revision-Date headers. Sanitization ensures such date headers are
     * parsed correctly into DateTime instances.
     *
     * @since 2.1.0
     *
     * @param string $date_string The date string to sanitize.
     *
     * @return \DateTime Date from string if parsable, otherwise the Unix epoch.
     */
    function sanitize_date($date_string)
    {
    }
}
namespace {
    /**
     * This function outputs a 404 "Not Found" error message.
     *
     * @since 1.6
     */
    function genesis_404()
    {
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Admin
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Handle for Genesis_Admin_Meta_Boxes class.
     *
     * @since 2.5.0
     *
     * @return Genesis_Admin_Meta_Boxes Instance of class for registering meta boxes added to WordPress admin screens.
     */
    function genesis_meta_boxes()
    {
    }
    /**
     * Include, instantiate, and initialize the Genesis Customizer object.
     *
     * @since 2.6.0
     *
     * @param WP_Customize_Manager $wp_customize WP Customizer Manager object.
     */
    function genesis_customize_register(\WP_Customize_Manager $wp_customize)
    {
    }
    /**
     * Build the Theme Settings Customizer panels, sections, and controls.
     *
     * @since 2.6.0
     *
     * @param Genesis_Customizer $genesis_customizer Genesis Customizer object.
     */
    function genesis_customizer_theme_settings(\Genesis_Customizer $genesis_customizer)
    {
    }
    /**
     * Build the SEO Settings Customizer panels, sections, and controls.
     *
     * @since 2.6.0
     *
     * @param Genesis_Customizer $genesis_customizer Genesis Customizer object.
     */
    function genesis_customizer_seo_settings(\Genesis_Customizer $genesis_customizer)
    {
    }
    /**
     * Return array of color scheme choices for the Customizer.
     *
     * @since 2.6.0
     *
     * @return array Choices of color schemes.
     */
    function genesis_get_color_schemes_for_customizer()
    {
    }
    /**
     * Return true if color schemes are registered.
     *
     * @since 2.6.0
     *
     * @return bool True if color schemes are registered, false otherwise.
     */
    function genesis_has_color_schemes()
    {
    }
    /**
     * Return true if Header section in Customizer -> Theme Settings should be shown.
     *
     * @since 2.6.0
     *
     * @return bool True if Header section should be shown, false otherwise.
     */
    function genesis_show_header_customizer_callback()
    {
    }
    /**
     * Return true if user has chosen to show posts on the front page.
     *
     * @since 2.6.0
     *
     * @return bool True if posts is selected, false otherwise.
     */
    function genesis_posts_show_on_front()
    {
    }
    /**
     * Return true if user has chosen to show a static page on the front page.
     *
     * @since 2.6.0
     *
     * @return bool True if static page is selected, false otherwise.
     */
    function genesis_page_show_on_front()
    {
    }
    /**
     * Return the config that includes the genesis_single controls.
     *
     * @since 3.1.0
     *
     * @param array $config Config array.
     *
     * @return array New config including the genesis_single controls.
     */
    function genesis_add_singular_image_output_customizer_checkboxes($config)
    {
    }
    /**
     * Callback to amend the Right Now text, found in the At A Glance dashboard widget.
     *
     * @since 2.7.0
     *
     * @param string $content Existing Right Now text.
     * @return string Amended Right Now text.
     */
    function genesis_update_right_now_text($content)
    {
    }
    /**
     * Register a new meta box to the post or page edit screen, so that the user can set SEO options on a per-post or
     * per-page basis.
     *
     * If the post type does not support genesis-seo, then the SEO meta box will not be added.
     *
     * @since 1.0.0
     *
     * @see genesis_inpost_seo_box() Generates the content in the meta box.
     */
    function genesis_add_inpost_seo_box()
    {
    }
    /**
     * Callback for in-post SEO meta box.
     *
     * @since 1.0.0
     */
    function genesis_inpost_seo_box()
    {
    }
    /**
     * Callback for in-post SEO meta box contextual help.
     *
     * @since 2.4.0
     */
    function genesis_seo_contextual_help()
    {
    }
    /**
     * Save the SEO settings when we save a post or page.
     *
     * Some values get sanitized, the rest are pulled from identically named sub-keys in the $_POST['genesis_seo'] array.
     *
     * @since 1.0.0
     *
     * @param int     $post_id Post ID.
     * @param WP_Post $post    Post object.
     * @return void Return early if `genesis_seo` is not a key in `POST` data.
     */
    function genesis_inpost_seo_save($post_id, $post)
    {
    }
    /**
     * Register a new meta box to the post or page edit screen, so that the user can apply scripts on a per-post or
     * per-page basis.
     *
     * The scripts field was previously part of the SEO meta box, and was therefore hidden when an SEO plugin was active.
     *
     * @since 2.0.0
     *
     * @see genesis_inpost_scripts_box() Generates the content in the meta box.
     */
    function genesis_add_inpost_scripts_box()
    {
    }
    /**
     * Callback for in-post Scripts meta box.
     *
     * @since 2.0.0
     */
    function genesis_inpost_scripts_box()
    {
    }
    /**
     * Save the Scripts settings when we save a post or page.
     *
     * @since 2.0.0
     *
     * @param int     $post_id Post ID.
     * @param WP_Post $post    Post object.
     * @return void Return early if `genesis_seo` is not a key in `POST` data, or current user doesn't
     *              have `unfiltered_html` capability.
     */
    function genesis_inpost_scripts_save($post_id, $post)
    {
    }
    /**
     * Register a new meta box to the post or page edit screen, so that the user can set layout options on a per-post or
     * per-page basis.
     *
     * @since 1.0.0
     *
     * @see genesis_inpost_layout_box() Generates the content in the boxes
     *
     * @param string  $post_type Post type.
     * @param WP_Post $post      Post object.
     *
     * @return void Return early if Genesis layouts are not supported.
     */
    function genesis_add_inpost_layout_box($post_type, $post)
    {
    }
    /**
     * Callback for in-post layout meta box.
     *
     * @since 1.0.0
     */
    function genesis_inpost_layout_box()
    {
    }
    /**
     * Save the layout options when we save a post or page.
     *
     * Since there's no sanitizing of data, the values are pulled from identically named keys in $_POST.
     *
     * @since 1.0.0
     *
     * @param int     $post_id Post ID.
     * @param WP_Post $post    Post object.
     * @return void Return early if `genesis_layout` is not a key in `POST` data.
     */
    function genesis_inpost_layout_save($post_id, $post)
    {
    }
    /**
     * Add Genesis top-level item in admin menu.
     *
     * Calls the `genesis_admin_menu hook` at the end - all submenu items should be attached to that hook to ensure
     * correct ordering.
     *
     * @since 1.0.0
     *
     * @global \Genesis_Admin_Settings _genesis_admin_settings          Theme Settings page object.
     * @global string                  _genesis_theme_settings_pagehook Old backwards-compatible pagehook.
     *
     * @return void Return early if not viewing WP admin, Genesis menu is disabled, or disabled for current user.
     */
    function genesis_add_admin_menu()
    {
    }
    /**
     * Add submenu items under Genesis item in admin menu.
     *
     * @since 1.0.0
     *
     * @see Genesis_Admin_SEO_Settings SEO Settings class
     * @see Genesis_Admin_Import_export Import / Export class
     *
     * @global string $_genesis_seo_settings_pagehook Old backwards-compatible pagehook.
     * @global string $_genesis_admin_seo_settings
     * @global string $_genesis_admin_import_export
     *
     * @return void Return early if not viewing WP admin, or if Genesis menu is not supported.
     */
    function genesis_add_admin_submenus()
    {
    }
    /**
     * Add archive settings page to relevant custom post type registrations.
     *
     * An instance of `Genesis_Admin_CPT_Archive_Settings` is instantiated for each relevant CPT, assigned to an individual
     * global variable.
     *
     * @since 2.0.0
     */
    function genesis_add_cpt_archive_page()
    {
    }
    /**
     * Processes onboarding tasks in batches.
     *
     * @since 2.8.0
     */
    function genesis_do_onboarding_process()
    {
    }
    /**
     * Set the chosen Starter Pack.
     *
     * Temporarily store the chosen starter pack in a `genesis_onboarding_chosen_pack`
     * option so that onboarding functions can return information specific to that pack.
     *
     * Sends a JSON response that includes tasks to run for the chosen pack, which the
     * calling JavaScript code uses to update and trigger needed onboarding tasks.
     *
     * @since 3.1.0
     */
    function genesis_do_onboarding_pack_selection()
    {
    }
    /**
     * Redirects users to the Getting Started page after theme activation
     * if the theme provides an onboarding configuration in config/onboarding.php.
     *
     * @since 2.8.0
     */
    function genesis_theme_activation_redirect()
    {
    }
    /**
     * Import settings needed by a child theme to look correct and function properly.
     *
     * Search for `child-theme-settings.php` in child theme's config directory. If one exists, use it as the basis for importing custom settings.
     *
     * @since 2.9.0
     *
     * @return bool True if settings saved. False otherwise.
     */
    function genesis_import_child_theme_settings()
    {
    }
    /**
     * Filter the results of the plugin api results.
     *
     * Only sort the results if users are searching for StudioPress plugins.
     *
     * @since 2.10.0
     *
     * @param object $res    Plugins API result object.
     * @param string $action The type of information being requested from the Plugin Installation API.
     * @param object $args   Plugin API arguments.
     *
     * @return object $res The plugin api result.
     */
    function genesis_admin_plugins_api_result($res, $action, $args)
    {
    }
    /**
     * Sort Genesis plugins returned by plugins api by install count.
     *
     * @since 2.10.0
     *
     * @param array|object $a First plugin info to compare.
     * @param array|object $b Second plugin info to compare.
     */
    function genesis_admin_plugins_sort_callback($a, $b)
    {
    }
    /**
     * Registers personal data eraser callbacks.
     *
     * @since 2.7.0
     *
     * @param array $erasers Existing data erasers.
     * @return array Updated data erasers.
     */
    function genesis_privacy_personal_data_erasers(array $erasers)
    {
    }
    /**
     * Erases Author Archive Settings data saved in user meta.
     *
     * @since 2.7.0
     *
     * @param string $email_address The user's email address.
     *
     * @return array
     */
    function genesis_erase_author_archive_info($email_address)
    {
    }
    /**
     * Erases the Update Notification email address if it matches the given email address.
     *
     * @since 2.7.0
     *
     * @param string $email_address The user's email address.
     *
     * @return array
     */
    function genesis_erase_update_notification_email_address($email_address)
    {
    }
    /**
     * Registers personal data exporter callbacks.
     *
     * @since 2.7.0
     *
     * @param array $exporters Existing data exporters.
     *
     * @return array Updated data exporters.
     */
    function genesis_privacy_personal_data_exporters(array $exporters)
    {
    }
    /**
     * Exports Author Archive Settings data saved in user meta.
     *
     * @since 2.7.0
     *
     * @param string $email_address The user's email address.
     *
     * @return array
     */
    function genesis_export_author_archive_info($email_address)
    {
    }
    /**
     * Returns an array of Author Archive fields.
     *
     * @since 2.7.0
     *
     * @return array
     */
    function genesis_get_author_archive_fields()
    {
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Settings Sanitizer
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Registers an option sanitization filter.
     *
     * If the option is an "array" option type with "sub-options", you have to use the third param to specify the
     * sub-option or sub-options you want the filter to apply to. DO NOT call this without the third parameter on an option
     * that is an array option, because in that case it will apply that filter to the array(), not each member.
     *
     * Use the 'genesis_settings_sanitizer_init' action to be notified when this function is safe to use
     *
     * @since 1.7.0
     *
     * @param string       $filter    The filter to call (see Genesis_Settings_Sanitizer::$available_filters for options).
     * @param string       $option    The WordPress option name.
     * @param string|array $suboption Optional. The sub-option or sub-options you want to filter.
     * @return true True when complete.
     */
    function genesis_add_option_filter($filter, $option, $suboption = \null)
    {
    }
    /**
     * Instantiate the Sanitizer.
     *
     * @since 1.7.0
     */
    function genesis_settings_sanitizer_init()
    {
    }
    /**
     * Adds Genesis info to the Tools -> Site Health -> Info tab.
     *
     * @since 3.0.0
     *
     * @param array $info The original debug information.
     * @return array Debug information modified with Genesis information.
     */
    function genesis_site_health_info($info)
    {
    }
    /**
     * Adds child theme recommendations to the Tools -> Site Health -> Info tab
     * under the “Active Theme” panel.
     *
     * @since 3.0.0
     *
     * @param array $info The original debug information.
     * @return array Debug information modified with Genesis recommendations.
     */
    function genesis_child_theme_recommendations($info)
    {
    }
    /**
     * Gets recommendations for the active child theme.
     *
     * Helps surface deprecated Genesis features still being used in themes.
     *
     * @since 3.0.0
     *
     * @return string|void Suggestions for improvement, or void if no suggestions.
     */
    function genesis_get_child_theme_recommendations()
    {
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Admin
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Term meta defaults.
     *
     * @since 2.2.6
     *
     * @return array Default term meta values.
     */
    function genesis_term_meta_defaults()
    {
    }
    /**
     * Add the archive options to each custom taxonomy edit screen.
     *
     * @since 1.6.0
     *
     * @see genesis_taxonomy_archive_options() Callback for headline and introduction fields.
     */
    function genesis_add_taxonomy_archive_options()
    {
    }
    /**
     * Echo headline and introduction fields on the taxonomy term edit form.
     *
     * If populated, the values saved in these fields may display on taxonomy archives.
     *
     * @since 1.6.0
     *
     * @see genesis_add_taxonomy_archive_options() Callback caller.
     *
     * @param \stdClass $tag      Term object.
     * @param string    $taxonomy Name of the taxonomy.
     */
    function genesis_taxonomy_archive_options($tag, $taxonomy)
    {
    }
    /**
     * Add the SEO options to each custom taxonomy edit screen.
     *
     * @since 1.3.0
     *
     * @see genesis_taxonomy_seo_options() Callback for SEO fields.
     */
    function genesis_add_taxonomy_seo_options()
    {
    }
    /**
     * Echo title, description, keywords and robots meta SEO fields on the taxonomy term edit form.
     *
     * If populated, the values saved in these fields may be used on taxonomy archives.
     *
     * @since 1.2.0
     *
     * @see genesis_add-taxonomy_seo_options() Callback caller.
     *
     * @param \stdClass $tag      Term object.
     * @param string    $taxonomy Name of the taxonomy.
     */
    function genesis_taxonomy_seo_options($tag, $taxonomy)
    {
    }
    /**
     * Add the layout options to each custom taxonomy edit screen.
     *
     * @since 1.4.0
     *
     * @see genesis_taxonomy_layout_options() Callback for layout selector.
     */
    function genesis_add_taxonomy_layout_options()
    {
    }
    /**
     * Echo the layout options on the taxonomy term edit form.
     *
     * @since 1.4.0
     *
     * @see genesis_add_taxonomy_layout_options() Callback caller.
     *
     * @param \stdClass $tag      Term object.
     * @param string    $taxonomy Name of the taxonomy.
     */
    function genesis_taxonomy_layout_options($tag, $taxonomy)
    {
    }
    /**
     * For backward compatibility only.
     *
     * Sets $term->meta to empty array. All calls to $term->meta->key will be unset unless force set by `genesis_term_meta` filter.
     *
     * @since 1.2.0
     *
     * @param object $term     Database row object.
     * @param string $taxonomy Taxonomy name that $term is part of.
     * @return object Database row object.
     */
    function genesis_get_term_filter($term, $taxonomy)
    {
    }
    /**
     * Add Genesis term-meta data to functions that return multiple terms.
     *
     * @since 2.0.0
     *
     * @param array  $terms    Database row objects.
     * @param string $taxonomy Taxonomy name that $terms are part of.
     * @return array Database row objects.
     */
    function genesis_get_terms_filter(array $terms, $taxonomy)
    {
    }
    /**
     * Maintain backward compatibility with the older `genesis_term_meta_{$key}` filter so old filter functions will still work.
     *
     * @since 2.3.0
     *
     * @param string|array $value     The term meta value.
     * @param int          $object_id The term ID.
     * @param string       $meta_key  Meta key.
     * @param bool         $single    Whether to return only the first value of the specified $meta_key.
     * @return mixed Filtered term meta value.
     */
    function genesis_term_meta_filter($value, $object_id, $meta_key, $single)
    {
    }
    /**
     * Save term meta data.
     *
     * Fires when a user edits and saves a term.
     *
     * @since 1.2.0
     *
     * @param int $term_id Term ID.
     * @param int $tt_id   Term Taxonomy ID.
     */
    function genesis_term_meta_save($term_id, $tt_id)
    {
    }
    /**
     * Delete term meta data.
     *
     * Fires when a user deletes a term.
     *
     * @since 1.2.0
     *
     * @param int $term_id Term ID.
     * @param int $tt_id   Taxonomy Term ID.
     */
    function genesis_term_meta_delete($term_id, $tt_id)
    {
    }
    /**
     * Create new term meta record for split terms.
     *
     * When WordPress splits terms, ensure that the term meta gets preserved for the newly created term.
     *
     * @since 2.2.0
     *
     * @param int $old_term_id The ID of the term being split.
     * @param int $new_term_id The ID of the newly created term.
     */
    function genesis_split_shared_term($old_term_id, $new_term_id)
    {
    }
    /**
     * Display Warning that Genesis should always be used with a child theme.
     *
     * @since 2.3.0
     */
    function genesis_use_child_theme_notice()
    {
    }
    /**
     * Add fields for user permissions for Genesis features to the user edit screen.
     *
     * Checkbox settings are:
     *
     * * Enable Genesis Admin Menu?
     * * Enable SEO Settings Submenu?
     * * Enable Import/Export Submenu?
     *
     * @since 1.4.0
     *
     * @param \WP_User $user User object.
     * @return void Return early if current user can not edit users.
     */
    function genesis_user_options_fields($user)
    {
    }
    /**
     * Add fields for author archives contents to the user edit screen.
     *
     * Input / Textarea fields are:
     *
     * * Custom Archive Headline
     * * Custom Description Text
     *
     * Checkbox fields are:
     *
     * * Enable Author Box on this User's Posts?
     * * Enable Author Box on this User's Archives?
     *
     * @since 1.6.0
     *
     * @param \WP_User $user User object.
     * @return void Return early if current user can not edit users.
     */
    function genesis_user_archive_fields($user)
    {
    }
    /**
     * Add fields for author archive SEO to the user edit screen.
     *
     * Input / Textarea fields are:
     *
     * * Custom Document Title
     * * Meta Description
     * * Meta Keywords
     *
     * Checkbox fields are:
     *
     * * Apply noindex to this archive?
     * * Apply nofollow to this archive?
     * * Apply noarchive to this archive?
     *
     * @since 1.4.0
     *
     * @param \WP_User $user User object.
     * @return void Return early if current user can not edit users.
     */
    function genesis_user_seo_fields($user)
    {
    }
    /**
     * Add author archive layout selector to the user edit screen.
     *
     * @since 1.4.0
     *
     * @param \WP_User $user User object.
     *
     * @return void Return early if current theme does not support `genesis-archive-layouts`, or Genesis
     *              does not have multiple layouts, or if current user can not edit users.
     */
    function genesis_user_layout_fields($user)
    {
    }
    /**
     * Update user meta when user edit page is saved.
     *
     * @since 1.4.0
     *
     * @param int $user_id User ID.
     * @return void Return early if current user can not edit users, or no meta fields submitted.
     */
    function genesis_user_meta_save($user_id)
    {
    }
    /**
     * Check to see if user data has actually been saved, or if defaults need to be forced.
     *
     * This filter is useful for user options that need to be "on" by default, but keeps us from having to push defaults
     * into the database, which would be a very expensive task.
     *
     * @since 1.4.0
     *
     * @global bool|object authordata User object if successful, false if not.
     *
     * @param string|bool $value   The submitted value.
     * @param int         $user_id User ID.
     * @return mixed|int Submitted value, user field value, or `1`.
     */
    function genesis_user_meta_default_on($value, $user_id)
    {
    }
    /**
     * Conditionally force a default 1 value for each users' author box setting.
     *
     * @since 1.4.0
     *
     * @param string $value   Submitted value.
     * @param int    $user_id User ID.
     * @return mixed Existing user meta value, or `1`.
     */
    function genesis_author_box_single_default_on($value, $user_id)
    {
    }
    /**
     * Echo reference to the style sheet.
     *
     * If a child theme is active, it loads the child theme's stylesheet, otherwise, it loads the Genesis style sheet.
     *
     * @since 1.0.0
     *
     * @see genesis_enqueue_main_stylesheet() Enqueue main style sheet.
     */
    function genesis_load_stylesheet()
    {
    }
    /**
     * Enqueue main style sheet.
     *
     * Properly enqueue the main style sheet.
     *
     * @since 1.9.0
     */
    function genesis_enqueue_main_stylesheet()
    {
    }
    /**
     * Enqueue Genesis admin styles.
     *
     * @since 1.0.0
     */
    function genesis_load_admin_styles()
    {
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Framework
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Used to initialize the framework in the various template files.
     *
     * It pulls in all the necessary components like header and footer, the basic
     * markup structure, and hooks.
     *
     * @since 1.3.0
     */
    function genesis()
    {
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Breadcrumbs
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Helper function for the Genesis Breadcrumb Class.
     *
     * @since 1.0.0
     *
     * @global Genesis_Breadcrumb $_genesis_breadcrumb
     *
     * @param array $args Breadcrumb arguments.
     */
    function genesis_breadcrumb($args = [])
    {
    }
    /**
     * Are breadcrumbs hidden for the current page?
     *
     * Indicates that the “Hide breadcrumbs” checkbox is enabled and checked.
     *
     * @since 3.1.0
     *
     * @return bool True if breadcrumbs are hidden, false otherwise.
     */
    function genesis_breadcrumbs_hidden_on_current_page()
    {
    }
    /**
     * Are breadcrumbs disabled for the current page type?
     *
     * @since 3.1.1
     *
     * @return bool True if breadcrumbs are disabled, false otherwise.
     */
    function genesis_breadcrumbs_disabled_on_current_page()
    {
    }
    /**
     * Display Breadcrumbs above the Loop. Concedes priority to popular breadcrumb
     * plugins.
     *
     * @since 1.0.0
     *
     * @return void Return early if Genesis settings dictate that no breadcrumbs should show in current context.
     */
    function genesis_do_breadcrumbs()
    {
    }
    /**
     * Gets breadcrumb options that are enabled in Genesis settings.
     *
     * @since 3.1.0
     *
     * @return array The breadcrumb options that are enabled.
     */
    function genesis_breadcrumb_options_enabled()
    {
    }
    /**
     * Get unique ID.
     *
     * This is a PHP implementation of Underscore's uniqueId method. A static variable
     * contains an integer that is incremented with each call. This number is returned
     * with the optional prefix. As such the returned value is not universally unique,
     * but it is unique across the life of the PHP process.
     *
     * @staticvar int $id_counter
     *
     * @param string $prefix Prefix for the returned ID.
     * @return string Unique ID.
     */
    function wp_unique_id($prefix = '')
    {
    }
    /**
     * Upgrade the database for changes in db version 3001.
     *
     * @since 3.0.0
     *
     * @deprecated 3.1.0
     */
    function genesis_upgrade_3001()
    {
    }
    /**
     * Migrate query_args and/or template for pages using page_blog.php template in 3.0.0.
     *
     * @since 3.0.0
     *
     * @deprecated 3.1.0
     */
    function genesis_upgrade_3001_page_blog()
    {
    }
    /**
     * Generate page_archive.php template file for blogs using default Genesis page_archive.php.
     *
     * @since 3.0.0
     *
     * @deprecated 3.1.0
     */
    function genesis_upgrade_3001_page_archive()
    {
    }
    /**
     * Determine if the 'Blog' page template is available.
     *
     * @since 3.0.0
     *
     * @deprecated 3.1.0
     *
     * @return bool True if the 'Blog' template theme exists. False if else.
     */
    function genesis_theme_has_page_blog_template()
    {
    }
    /**
     * Determine if the 'Archive' page template is available.
     *
     * @since 3.0.0
     *
     * @deprecated 3.1.0
     *
     * @return bool True if the 'Archive' template theme exists. False if else.
     */
    function genesis_theme_has_page_archive_template()
    {
    }
    /**
     * Create the 'page_blog.php' file within child theme if missing.
     *
     * @since 3.0.0
     *
     * @deprecated 3.1.0
     *
     * @return int|bool|void Void if file exists, number of bytes written, or false if error.
     */
    function genesis_create_page_blog_file()
    {
    }
    /**
     * Create the 'page_archive.php' file within child theme if missing.
     *
     * @since 3.0.0
     *
     * @deprecated 3.1.0
     *
     * @return int|bool|void Void if file exists, number of bytes written, or false if error.
     */
    function genesis_create_page_archive_file()
    {
    }
    /**
     * Upgrade the database for changes in db version 3000.
     *
     * @since 3.0.0
     *
     * @deprecated 3.1.0
     */
    function genesis_upgrade_3000()
    {
    }
    /**
     * Upgrade the database to version 2700.
     *
     * @since 2.7.0
     *
     * @deprecated 3.1.0
     */
    function genesis_upgrade_2700()
    {
    }
    /**
     * Upgrade the database to version 2603.
     *
     * @since 2.6.1
     *
     * @deprecated 3.1.0
     */
    function genesis_upgrade_2603()
    {
    }
    /**
     * Upgrade the database to version 2501.
     *
     * @since 2.5.0
     *
     * @deprecated 3.1.0
     */
    function genesis_upgrade_2501()
    {
    }
    /**
     * Upgrade the database to version 2403.
     *
     * @since 2.4.2
     *
     * @deprecated 3.1.0
     */
    function genesis_upgrade_2403()
    {
    }
    /**
     * Upgrade the database to version 2209.
     *
     * @since 2.2.6
     *
     * @deprecated 3.1.0
     */
    function genesis_upgrade_2209()
    {
    }
    /**
     * Upgrade the database to version 2207.
     *
     * @since 2.2.4
     *
     * @deprecated 3.1.0
     */
    function genesis_upgrade_2207()
    {
    }
    /**
     * Upgrade the database to version 2201.
     *
     * @since 2.2.0
     *
     * @deprecated 3.1.0
     */
    function genesis_upgrade_2201()
    {
    }
    /**
     * Upgrade the database to version 2100.
     *
     * @since 2.1.0
     *
     * @deprecated 3.1.0
     */
    function genesis_upgrade_2100()
    {
    }
    /**
     * Upgrade the database to version 2003.
     *
     * @since 2.0.0
     *
     * @deprecated 3.1.0
     */
    function genesis_upgrade_2003()
    {
    }
    /**
     * Upgrade the database to version 2001.
     *
     * @since 2.0.0
     *
     * @deprecated 3.1.0
     */
    function genesis_upgrade_2001()
    {
    }
    /**
     * Upgrade the database to version 1901.
     *
     * @since 1.9.0
     *
     * @deprecated 3.1.0
     */
    function genesis_upgrade_1901()
    {
    }
    /**
     * Upgrade the database to version 1800.
     *
     * @since 1.8.0
     *
     * @deprecated 3.1.0
     */
    function genesis_upgrade_1800()
    {
    }
    /**
     * Upgrade the database to version 1700.
     *
     * Also removes old user meta box options, as the UI changed.
     *
     * @since 1.7.0
     *
     * @deprecated 3.1.0
     *
     * @global wpdb $wpdb WordPress database object.
     */
    function genesis_upgrade_1700()
    {
    }
    /**
     * Convert term meta for new title/description options.
     *
     * Called in `genesis_upgrade_1800()`.
     *
     * @since 2.6.0
     *
     * @deprecated 3.1.0
     */
    function genesis_convert_term_meta()
    {
    }
    /**
     * Strip slashes from header and body scripts saved as post meta.
     *
     * Called in `genesis_upgrade_2603()`.
     *
     * @since 2.6.1
     *
     * @deprecated 3.1.0
     */
    function genesis_unslash_post_meta_scripts()
    {
    }
    /**
     * Add attributes for site footer element.
     *
     * @since 2.0.0
     *
     * @deprecated 3.1.0 Replaced with namespaced functions in `lib/functions/schema.php`.
     *
     * @param array $attributes Existing attributes for site footer element.
     * @return array Amended attributes for site footer element.
     */
    function genesis_attributes_site_footer($attributes)
    {
    }
    /**
     * Add attributes for author box element.
     *
     * @since 2.1.0
     *
     * @deprecated 3.1.0 Replaced with namespaced functions in `lib/functions/schema.php`.
     *
     * @param array $attributes Existing attributes for author box element.
     * @return array Amended attributes for author box element.
     */
    function genesis_attributes_author_box($attributes)
    {
    }
    /**
     * Add attributes for comment content container.
     *
     * @since 2.1.0
     *
     * @deprecated 3.1.0 Replaced with namespaced functions in `lib/functions/schema.php`.
     *
     * @param array $attributes Existing attributes for comment content container.
     * @return array Amended attributes for comment content container.
     */
    function genesis_attributes_comment_content($attributes)
    {
    }
    /**
     * Add attributes for comment time element.
     *
     * @since 2.1.0
     *
     * @deprecated 3.1.0 Replaced with namespaced functions in `lib/functions/schema.php`.
     *
     * @param array $attributes Existing attributes for comment time element.
     * @return array Amended attributes for comment time element.
     */
    function genesis_attributes_comment_time($attributes)
    {
    }
    /**
     * Add attributes for comment author name element.
     *
     * @since 2.10.0
     *
     * @deprecated 3.1.0 Replaced with namespaced functions in `lib/functions/schema.php`.
     *
     * @param array $attributes Existing attributes for comment author name element.
     * @return array Amended attributes for comment author name element.
     */
    function genesis_attributes_comment_author_name($attributes)
    {
    }
    /**
     * Add attributes for comment author element.
     *
     * @since 2.0.0
     *
     * @deprecated 3.1.0 Replaced with namespaced functions in `lib/functions/schema.php`.
     *
     * @param array $attributes Existing attributes for comment author element.
     * @return array Amended attributes for comment author element.
     */
    function genesis_attributes_comment_author($attributes)
    {
    }
    /**
     * Add attributes for entry content element.
     *
     * @since 2.0.0
     *
     * @deprecated 3.1.0 Replaced with namespaced functions in `lib/functions/schema.php`.
     *
     * @param array $attributes Existing attributes for entry content element.
     * @return array Amended attributes for entry content element.
     */
    function genesis_attributes_entry_content($attributes)
    {
    }
    /**
     * Add attributes for entry title element.
     *
     * @since 2.0.0
     *
     * @deprecated 3.1.0 Replaced with namespaced functions in `lib/functions/schema.php`.
     *
     * @param array $attributes Existing attributes for entry title element.
     * @return array Amended attributes for entry title element.
     */
    function genesis_attributes_entry_title($attributes)
    {
    }
    /**
     * Add attributes for modified time element for an entry.
     *
     * @since 2.1.0
     *
     * @deprecated 3.1.0 Replaced with namespaced functions in `lib/functions/schema.php`.
     *
     * @param array $attributes Existing attributes for modified time element for an entry.
     * @return array Amended attributes for modified time element for an entry.
     */
    function genesis_attributes_entry_modified_time($attributes)
    {
    }
    /**
     * Add attributes for time element for an entry.
     *
     * @since 2.0.0
     *
     * @deprecated 3.1.0 Replaced with namespaced functions in `lib/functions/schema.php`.
     *
     * @param array $attributes Existing attributes for time element for an entry.
     * @return array Amended attributes for time element for an entry.
     */
    function genesis_attributes_entry_time($attributes)
    {
    }
    /**
     * Add attributes for entry author name element.
     *
     * @since 2.0.0
     *
     * @deprecated 3.1.0 Replaced with namespaced functions in `lib/functions/schema.php`.
     *
     * @param array $attributes Existing attributes for entry author name element.
     * @return array Amended attributes for entry author name element.
     */
    function genesis_attributes_entry_author_name($attributes)
    {
    }
    /**
     * Add attributes for author element for an entry.
     *
     * @since 2.0.0
     *
     * @deprecated 3.1.0 Replaced with namespaced functions in `lib/functions/schema.php`.
     *
     * @param array $attributes Existing attributes for author element for an entry.
     * @return array Amended attributes for author element for an entry.
     */
    function genesis_attributes_entry_author($attributes)
    {
    }
    /**
     * Add attributes for entry image element shown in a grid loop.
     *
     * @since 2.0.0
     *
     * @deprecated 3.1.0 Replaced with namespaced functions in `lib/functions/schema.php`.
     *
     * @param array $attributes Existing attributes for entry image element shown in a grid loop.
     * @return array Amended attributes for entry image element shown in a grid loop.
     */
    function genesis_attributes_entry_image_grid_loop($attributes)
    {
    }
    /**
     * Add typical attributes for navigation elements.
     *
     * Used for primary navigation, secondary navigation, and custom menu widgets in the header right widget area.
     *
     * @since 2.0.0
     *
     * @deprecated 3.1.0 Replaced with namespaced functions in `lib/functions/schema.php`.
     *
     * @param array $attributes Existing attributes for navigation elements.
     * @return array Amended attributes for navigation elements.
     */
    function genesis_attributes_nav($attributes)
    {
    }
    /**
     * Add attributes for breadcrumb link text wrap.
     *
     * @since 2.7.0
     *
     * @deprecated 3.1.0 Replaced with namespaced functions in `lib/functions/schema.php`.
     *
     * @param array $attributes Existing attributes for breadcrumb link text wrap.
     * @return array Amended attributes for breadcrumb link text wrap.
     */
    function genesis_attributes_breadcrumb_link_text_wrap($attributes)
    {
    }
    /**
     * Add attributes for breadcrumb item element.
     *
     * @since 2.1.0
     *
     * @deprecated 3.1.0 Replaced with namespaced functions in `lib/functions/schema.php`.
     *
     * @param array $attributes Existing attributes for breadcrumb item element.
     * @return array Amended attributes for breadcrumb item element.
     */
    function genesis_attributes_breadcrumb_link_wrap($attributes)
    {
    }
    /**
     * Add attributes for breadcrumbs wrapper.
     *
     * @since 2.2.0
     *
     * @deprecated 3.1.0 Replaced with namespaced functions in `lib/functions/schema.php`.
     *
     * @param array $attributes Existing attributes for breadcrumbs wrapper element.
     * @return array Amended attributes for breadcrumbs wrapper element.
     */
    function genesis_attributes_breadcrumb($attributes)
    {
    }
    /**
     * Add attributes for site description element.
     *
     * @since 2.0.0
     *
     * @deprecated 3.1.0 Replaced with namespaced functions in `lib/functions/schema.php`.
     *
     * @param array $attributes Existing attributes for site description element.
     * @return array Amended attributes for site description element.
     */
    function genesis_attributes_site_description($attributes)
    {
    }
    /**
     * Add attributes for site title element.
     *
     * @since 2.0.0
     *
     * @deprecated 3.1.0 Replaced with namespaced functions in `lib/functions/schema.php`.
     *
     * @param array $attributes Existing attributes for site title element.
     * @return array Amended attributes for site title element.
     */
    function genesis_attributes_site_title($attributes)
    {
    }
    /**
     * Add attributes for site header element.
     *
     * @since 2.0.0
     *
     * @deprecated 3.1.0 Replaced with namespaced functions in `lib/functions/schema.php`.
     *
     * @param array $attributes Existing attributes for site header element.
     * @return array Amended attributes for site header element.
     */
    function genesis_attributes_header($attributes)
    {
    }
    /**
     * Filter the Primary Navigation menu items, appending either RSS links, search form, twitter link, or today's date.
     *
     * @since 1.0.0
     * @deprecated 3.0.0
     *
     * @param string   $menu HTML string of list items.
     * @param stdClass $args Menu arguments.
     * @return string HTML string of list items with optional nav extras.
     *                Return early unmodified if first Genesis version is higher than 2.0.2.
     */
    function genesis_nav_right($menu, \stdClass $args)
    {
    }
    /**
     * XHTML 1.0 Transitional doctype markup.
     *
     * @since 2.0.0
     * @deprecated 3.0.0
     */
    function genesis_xhtml_doctype()
    {
    }
    /**
     * XHTML loop.
     *
     * This is called by {@link genesis_standard_loop()} if the child theme does not support HTML5.
     *
     * It is a standard loop, and is meant to be executed, without modification, in most circumstances where content needs
     * to be displayed.
     *
     * It outputs basic wrapping HTML, but uses hooks to do most of its content output like title, content, post information
     * and comments.
     *
     * The action hooks called are:
     *
     *  - `genesis_before_post`
     *  - `genesis_before_post_title`
     *  - `genesis_post_title`
     *  - `genesis_after_post_title`
     *  - `genesis_before_post_content`
     *  - `genesis_post_content`
     *  - `genesis_after_post_content`
     *  - `genesis_after_post`
     *  - `genesis_after_endwhile`
     *  - `genesis_loop_else` (only if no posts were found)
     *
     * @since 2.0.0
     * @deprecated 3.0.0
     *
     * @global int $loop_counter Increments on each loop pass.
     */
    function genesis_legacy_loop()
    {
    }
    /**
     * Filter the default comment form arguments, used by `comment_form()`.
     *
     * Applies only to XHTML child themes, since Genesis uses default HTML5 comment form where possible.
     *
     * Applies `genesis_comment_form_args` filter.
     *
     * @since 1.8.0
     * @deprecated 3.0.0
     *
     * @global string $user_identity Display name of the user.
     *
     * @param array $defaults Comment form default arguments.
     * @return array Filtered comment form default arguments.
     */
    function genesis_comment_form_args(array $defaults)
    {
    }
    /**
     * Comment callback for {@link genesis_default_list_comments()} if HTML5 is not active.
     *
     * Does `genesis_before_comment` and `genesis_after_comment` actions.
     *
     * Applies `comment_author_says_text` and `genesis_comment_awaiting_moderation` filters.
     *
     * @since 1.0.0
     * @deprecated 3.0.0
     *
     * @param stdClass $comment Comment object.
     * @param array    $args    Comment args.
     * @param int      $depth   Depth of current comment.
     */
    function genesis_comment_callback($comment, array $args, $depth)
    {
    }
    /**
     * Produces the "Return to Top" link.
     *
     * Supported shortcode attributes are:
     *   after (output after link, default is empty string),
     *   before (output before link, default is empty string),
     *   href (link url, default is fragment identifier '#wrap'),
     *   nofollow (boolean for whether to make the link include the rel="nofollow"
     *     attribute. Default is true),
     *   text (Link text, default is 'Return to top of page').
     *
     * Output passes through `genesis_footer_backtotop_shortcode` filter before returning.
     *
     * @since 1.1.0
     * @deprecated 3.0.0
     *
     * @param array|string $atts Shortcode attributes. Empty string if no attributes.
     * @return string Output for `footer_backtotop` shortcode.
     */
    function genesis_footer_backtotop_shortcode($atts)
    {
    }
    /**
     * Deprecated. Displays the notice that the theme settings were successfully updated to the latest version.
     *
     * Currently only used for pre-release update notices.
     *
     * @since 1.2.0
     * @deprecated 2.10.1
     */
    function genesis_upgraded_notice()
    {
    }
    /**
     * Deprecated. Redirect the user back to the "What's New" page, refreshing the data and notifying the user that they have
     * successfully updated.
     *
     * @since 1.6.0
     * @deprecated 2.10.1
     */
    function genesis_upgrade_redirect()
    {
    }
    /**
     * Deprecated. Replace the default search form with a Genesis-specific form.
     *
     * `get_search_form()` suggested as replacement.
     *
     * In order to avoid an infinite loop if this function is used as a callback for the `get_search_form` filter, we load `searchform.php` directly,
     * rather than use the suggested replacement `get_search_form()`.
     *
     * @since 1.0.0
     * @deprecated 2.7.0
     */
    function genesis_search_form()
    {
    }
    /**
     * Deprecated. Genesis now (as of 2.7.0) uses semantic versioning, and will no longer redirect to different pages based on major/minor version status.
     *
     * Determine if a version string is considered a major release under Genesis rules.
     *
     * For Genesis, a release of something like 2.5.0 is a major release version, as is 2.6.0.
     * 2.5.1 or 2.6.2 is considered a minor release version.
     *
     * All values of `PARENT_THEME_VERSION` are given as 3 digits (5 characters), x.y.z. The major
     * release after 2.9.0 will be 3.0.0, and not 2.10.0 - Genesis does not follow semantic versioning.
     *
     * As such, we can simply check if the 4th and 5th characters until the end, are `.0`. This means
     * that a value of `2.6.0-dev` will NOT be counted as a major version.
     *
     * @since 2.6.0
     *
     * @param string $version Version number.
     * @return bool True if version has `.0` as 4th and 5th character onwards, false otherwise.
     */
    function genesis_is_major_version($version)
    {
    }
    /**
     * Deprecated. Output the title, wrapped in title tags.
     *
     * @since 2.1.0
     * @deprecated 2.6.0
     */
    function genesis_do_title()
    {
    }
    /**
     * Deprecated. Legacy filter function that would return a filtered document title.
     *
     * @since 1.0.0
     * @deprecated 2.6.0
     *
     * @param string $title       Existing page title.
     * @param string $sep         Optional. Separator character(s).
     * @param string $seplocation Optional. Separator location - "left" or "right".
     * @return string Page title.
     */
    function genesis_default_title($title, $sep = '&raquo;', $seplocation = '')
    {
    }
    /**
     * Deprecated. Return registered image sizes.
     *
     * Return a two-dimensional array of just the additionally registered image sizes, with width, height and crop sub-keys.
     *
     * @since 1.0.0
     * @deprecated 2.5.0
     *
     * @global array $_wp_additional_image_sizes Additionally registered image sizes.
     *
     * @return array Two-dimensional, with `width`, `height` and `crop` sub-keys.
     */
    function genesis_get_additional_image_sizes()
    {
    }
    /**
     * Deprecated. A list of Genesis contributors for the current development cycle.
     *
     * @since 2.0.0
     * @deprecated 2.5.0
     *
     * @return array List of contributors.
     */
    function genesis_contributors()
    {
    }
    /**
     * Deprecated. Register the scripts that Genesis will use.
     *
     * @since 2.0.0
     * @deprecated 2.5.0
     */
    function genesis_register_scripts()
    {
    }
    /**
     * Deprecated. Enqueue the scripts used on the front-end of the site.
     *
     * Includes comment-reply, superfish and the superfish arguments.
     *
     * Applies the `genesis_superfish_enabled`, and `genesis_superfish_args_uri`. filter.
     *
     * @since 1.0.0
     * @deprecated 2.5.0
     */
    function genesis_load_scripts()
    {
    }
    /**
     * Deprecated. Conditionally enqueue the scripts used in the admin.
     *
     * Includes Thickbox, theme preview and a Genesis script (actually enqueued in genesis_load_admin_js()).
     *
     * @since 1.0.0
     * @deprecated 2.5.0
     *
     * @param string $hook_suffix Admin page identifier.
     */
    function genesis_load_admin_scripts($hook_suffix)
    {
    }
    /**
     * Deprecated. Enqueues the custom script used in the admin, and localizes several strings or values used in the scripts.
     *
     * Applies the `genesis_toggles` filter to toggleable admin settings, so plugin developers can add their own without
     * having to recreate the whole setup.
     *
     * @since 1.8.0
     * @deprecated 2.5.0
     */
    function genesis_load_admin_js()
    {
    }
    /**
     * Deprecated. Load the html5 shiv for IE8 and below. Can't enqueue with IE conditionals.
     *
     * @since 2.0.0
     * @deprecated 2.3.0
     */
    function genesis_html5_ie_fix()
    {
    }
    /**
     * Deprecated. Echo custom rel="author" link tag.
     *
     * If the appropriate information has been entered, either for the homepage author, or for an individual post/page
     * author, echo a custom rel="author" link.
     *
     * @since 1.9.0
     * @deprecated 2.2.0
     */
    function genesis_rel_author()
    {
    }
    /**
     * Deprecated. Echo custom rel="publisher" link tag.
     *
     * If the appropriate information has been entered and we are viewing the front page, echo a custom rel="publisher" link.
     *
     * @since 2.0.2
     * @deprecated 2.2.0
     */
    function genesis_rel_publisher()
    {
    }
    /**
     * Deprecated. Echo or return a pages or categories menu.
     *
     * The array of menu arguments (and their defaults) are:
     *
     *  - theme_location => ''
     *  - type           => 'pages'
     *  - sort_column    => 'menu_order, post_title'
     *  - menu_id        => false
     *  - menu_class     => 'nav'
     *  - echo           => true
     *  - link_before    => ''
     *  - link_after     => ''
     *
     * Themes can short-circuit the function early by filtering on `genesis_pre_nav` or on the string of list items via
     * `genesis_nav_items`. They can also filter the complete menu markup via `genesis_nav`. The `$args` (merged with
     * defaults) are available for all filters.
     *
     * @since 1.0.0
     * @deprecated 2.2.0
     *
     * @see genesis_do_nav()
     * @see genesis_do_subnav()
     *
     * @param array $args Menu arguments.
     * @return null|string HTML for menu, unless `genesis_pre_nav` filter returns something truthy.
     */
    function genesis_nav($args = [])
    {
    }
    /**
     * Deprecated. Wraps the page title in a `title` element.
     *
     * Only applies, if not currently in admin, or for a feed.
     *
     * @since 1.3.0
     * @deprecated 2.1.0
     *
     * @param string $title Page title.
     *  @return string Plain text title if feed or WP admin, or title in HTML markup.
     */
    function genesis_doctitle_wrap($title)
    {
    }
    /**
     * Deprecated. Push individual setting (or group of setting) into an options db entry stored as an array.
     *
     * @since 1.7.0
     * @deprecated 2.1.0
     *
     * @param string|array $new     New settings. Can be a string, or an array.
     * @param string       $setting Optional. Settings field name. Default is GENESIS_SETTINGS_FIELD.
     */
    function _genesis_update_settings($new, $setting = \null)
    {
    }
    /**
     * Deprecated. Used to output archive pagination in older/newer format.
     *
     * Should now use `genesis_prev_next_posts_nav()` instead.
     *
     * @since 1.0.0
     * @deprecated 2.0.0
     */
    function genesis_older_newer_posts_nav()
    {
    }
    /**
     * Deprecated. Show Parent and Child information in the document head if specified by the user.
     *
     * This can be helpful for diagnosing problems with the theme, because you can easily determine if anything is out of
     * date, needs to be updated.
     *
     * @since 1.0.0
     * @deprecated 2.0.0
     *
     * @return void Return early if `show_info` setting is falsy, or not a child theme.
     */
    function genesis_show_theme_info_in_head()
    {
    }
    /**
     * Deprecated. Helper function for dealing with entities.
     *
     * It passes text through the g_ent filter so that entities can be converted on-the-fly.
     *
     * @since 1.5.0
     * @deprecated 2.0.0
     *
     * @param string $text Optional string containing an entity.
     * @return mixed Return a string by default, but might be filtered to return another type.
     */
    function g_ent($text = '')
    {
    }
    /**
     * Deprecated. Remove the Genesis theme files from the Theme Editor, except when Genesis is the current theme.
     *
     * @since 1.4.0
     * @deprecated 2.0.0
     */
    function genesis_theme_files_to_edit()
    {
    }
    /**
     * Deprecated. Add links to the contents of a tweet.
     *
     * Takes the content of a tweet, detects @replies, #hashtags, and http:// URLs, and links them appropriately.
     *
     * @since 1.1.0
     * @deprecated 2.0.0
     *
     * @link http://www.snipe.net/2009/09/php-twitter-clickable-links/
     *
     * @param string $text A string representing the content of a tweet.
     * @return string Tweet content with added links.
     */
    function genesis_tweet_linkify($text)
    {
    }
    /**
     * Deprecated. Provide a callback function for the custom header admin page.
     *
     * @since 1.6.0
     * @deprecated 2.0.0
     */
    function genesis_custom_header_admin_style()
    {
    }
    /**
     * Filter the feed URI if the user has input a custom feed URI.
     *
     * Applied in the `get_feed_link()` WordPress function.
     *
     * @since 1.3.0
     *
     * @param string $output From the get_feed_link() WordPress function.
     * @param string $feed   Optional. Defaults to default feed. Feed type (rss2, rss, sdf, atom).
     * @return string Amended feed URL.
     */
    function genesis_feed_links_filter($output, $feed)
    {
    }
    /**
     * Redirect the browser to the custom feed URI.
     *
     * Exits PHP after redirect.
     *
     * @since 1.3.0
     *
     * @return void Return early if is feed user agent is set and matches Feedblitz,
     *              Feedburner or Feedvalidator. Redirects and exits on success.
     */
    function genesis_feed_redirect()
    {
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Formatting
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Return a phrase shortened in length to a maximum number of characters.
     *
     * Result will be truncated at the last white space in the original string. In this function the word separator is a
     * single space. Other white space characters (like newlines and tabs) are ignored.
     *
     * If the first `$max_characters` of the string does not contain a space character, an empty string will be returned.
     *
     * @since 1.4.0
     *
     * @param string $text           A string to be shortened.
     * @param int    $max_characters The maximum number of characters to return.
     * @return string Truncated string. Empty string if `$max_characters` is falsy.
     */
    function genesis_truncate_phrase($text, $max_characters)
    {
    }
    // phpcs:disable WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedFunctionFound, WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound -- Some of the earliest Genesis functions. Can't be renamed.
    /**
     * Return content stripped down and limited content.
     *
     * Strips out tags and shortcodes, limits the output to `$max_char` characters, and appends an ellipsis and more link to the end.
     *
     * @since 1.0.0
     *
     * @param int    $max_characters The maximum number of characters to return.
     * @param string $more_link_text Optional. Text of the more link. Default is "(more...)".
     * @param bool   $stripteaser    Optional. Strip teaser content before the more text. Default is false.
     * @return string Limited content.
     */
    function get_the_content_limit($max_characters, $more_link_text = '(more...)', $stripteaser = \false)
    {
    }
    /**
     * Return more link text plus hidden title for screen readers, to improve accessibility.
     *
     * @since 2.2.0
     *
     * @param string $more_link_text Text of the more link.
     * @return string `$more_link_text` with or without the hidden title.
     */
    function genesis_a11y_more_link($more_link_text)
    {
    }
    /**
     * Echo the limited content.
     *
     * @since 1.0.0
     *
     * @param int    $max_characters The maximum number of characters to return.
     * @param string $more_link_text Optional. Text of the more link. Default is "(more...)".
     * @param bool   $stripteaser    Optional. Strip teaser content before the more text. Default is false.
     */
    function the_content_limit($max_characters, $more_link_text = '(more...)', $stripteaser = \false)
    {
    }
    // phpcs:enable WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedFunctionFound, WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound
    /**
     * Add `rel="nofollow"` attribute and value to links within string passed in.
     *
     * @since 1.0.0
     *
     * @param string $text HTML markup.
     * @return string Amended HTML markup with `rel="nofollow"` attribute.
     */
    function genesis_rel_nofollow($text)
    {
    }
    /**
     * Remove attributes from a HTML element.
     *
     * This function accepts a string of HTML, parses it for any elements in the `$elements` array, then parses each element
     * for any attributes in the `$attributes` array, and strips the attribute and its value(s).
     *
     * ~~~
     * // Strip class attribute from an anchor
     * genesis_strip_attr(
     *     '<a class="my-class" href="http://google.com/">Google</a>',
     *     'a',
     *     'class'
     * );
     * // Strips class and id attributes from div and span elements
     * genesis_strip_attr(
     *     '<div class="my-class" id="the-div"><span class="my-class" id="the-span"></span></div>',
     *     array( 'div', 'span' ),
     *     array( 'class', 'id' )
     * );
     * ~~~
     *
     * @since 1.0.0
     *
     * @link http://studiopress.com/support/showthread.php?t=20633
     *
     * @param string       $text       A string of HTML formatted code.
     * @param array|string $elements   Elements that $attributes should be stripped from.
     * @param array|string $attributes Attributes that should be stripped from $elements.
     * @param bool         $two_passes Whether the function should allow two passes.
     * @return string HTML markup with attributes stripped.
     */
    function genesis_strip_attr($text, $elements, $attributes, $two_passes = \true)
    {
    }
    /**
     * Return the special URL of a paged post.
     *
     * Taken from _wp_link_page() in WordPress core, but instead of anchor markup, just return the URL.
     *
     * @since 2.2.0
     *
     * @param int $i       The page number to generate the URL from.
     * @param int $post_id The post ID.
     * @return string Unescaped URL for the a paged post.
     */
    function genesis_paged_post_url($i, $post_id = 0)
    {
    }
    /**
     * Sanitize multiple HTML classes in one pass.
     *
     * Accepts either an array of `$classes`, or a space separated string of classes and sanitizes them using the
     * `sanitize_html_class()` WordPress function.
     *
     * @since 2.0.0
     *
     * @param array|string $classes       Classes to be sanitized.
     * @param string       $return_format Optional. The return format, 'input', 'string', or 'array'. Default is 'input'.
     * @return array|string String of multiple sanitized classes.
     */
    function genesis_sanitize_html_classes($classes, $return_format = 'input')
    {
    }
    /**
     * Return an array of allowed tags for output formatting.
     *
     * Mainly used by `wp_kses()` for sanitizing output.
     *
     * @since 1.6.0
     *
     * @return array Allowed elements and attributes, used with KSES.
     */
    function genesis_formatting_allowedtags()
    {
    }
    /**
     * Wrapper for `wp_kses()` that can be used as a filter function.
     *
     * @since 1.8.0
     *
     * @param string $string Content to filter through KSES.
     * @return string Filtered content with only allowed HTML elements.
     */
    function genesis_formatting_kses($string)
    {
    }
    /**
     * Calculate the time difference - a replacement for `human_time_diff()` until it is improved.
     *
     * Based on BuddyPress function `bp_core_time_since()`, which in turn is based on functions created by
     * Dunstan Orchard - http://1976design.com
     *
     * This function will return an text representation of the time elapsed since a
     * given date, giving the two largest units e.g.:
     *
     *  - 2 hours and 50 minutes
     *  - 4 days
     *  - 4 weeks and 6 days
     *
     * @since 1.7.0
     *
     * @param int      $older_date     Unix timestamp of date you want to calculate the time since for`.
     * @param int|bool $newer_date     Optional. Unix timestamp of date to compare older date to. Default false (current time).
     * @param int      $relative_depth Optional, how many units to include in relative date. Default 2.
     * @return string The time difference between two dates.
     */
    function genesis_human_time_diff($older_date, $newer_date = \false, $relative_depth = 2)
    {
    }
    /**
     * Mark up content with code tags.
     *
     * Escapes all HTML, so `<` gets changed to `&lt;` and displays correctly.
     *
     * Used almost exclusively within labels and text in user interfaces added by Genesis.
     *
     * @since 2.0.0
     *
     * @param string $content Content to be wrapped in code tags.
     * @return string Content wrapped in `code` tags.
     */
    function genesis_code($content)
    {
    }
    /**
     * Remove paragraph tags from content.
     *
     * @since 2.5.0
     *
     * @param string $content Content possibly containing paragraph tags.
     * @return string Content without paragraph tags.
     */
    function genesis_strip_p_tags($content)
    {
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package StudioPress\Genesis
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Enable the author box for ALL users.
     *
     * @since 1.4.1
     *
     * @param array $args Optional. Arguments for enabling author box. Default is empty array.
     */
    function genesis_enable_author_box($args = [])
    {
    }
    /**
     * Redirect the user to an admin page, and add query args to the URL string for alerts, etc.
     *
     * @since 1.6.0
     *
     * @param string $page       Menu slug.
     * @param array  $query_args Optional. Associative array of query string arguments (key => value). Default is an empty array.
     * @return void Return early if first argument, `$page`, is falsy.
     */
    function genesis_admin_redirect($page, array $query_args = [])
    {
    }
    /**
     * Redirect singular page to an alternate URL.
     *
     * @since 2.0.0
     *
     * @return void Return early if not a singular entry.
     */
    function genesis_custom_field_redirect()
    {
    }
    /**
     * Return a specific value from the array passed as the second argument to `add_theme_support()`.
     *
     * Supports associative and index array of theme support arguments.
     *
     * @since 1.9.0
     *
     * @param string $feature The theme feature.
     * @param string $arg     The theme feature argument.
     * @param string $default Optional. Fallback if value is blank or doesn't exist.
     *                        Default is empty string.
     * @return mixed Return value if associative array, true if indexed array, or
     *               `$default` if theme does not support `$feature` or `$arg` does not exist.
     */
    function genesis_get_theme_support_arg($feature, $arg, $default = '')
    {
    }
    /**
     * Check if the environment is in development mode via SCRIPT_DEBUG constant.
     *
     * @since 3.0.0
     *
     * @return bool True when debugging scripts, otherwise false.
     */
    function genesis_is_in_dev_mode()
    {
    }
    /**
     * Gets the theme handle from the CHILD_THEME_VERSION constant (if defined), or 'Theme Name' header in style.css.
     *
     * Uses 'Name' instead of 'Text Domain' because the Theme Name header is more
     * commonly set and maintained.
     *
     * @since 3.0.0
     *
     * @return string The theme's handle.
     */
    function genesis_get_theme_handle()
    {
    }
    /**
     * Gets the active theme version from CHILD_THEME_VERSION constant (if defined), style.css in production, or a timestamp if SCRIPT_DEBUG is true.
     *
     * @since 3.0.0
     *
     * @return string Theme version or current Unix timestamp for use as a cache-busting string.
     */
    function genesis_get_theme_version()
    {
    }
    /**
     * Locate and require a config file.
     *
     * First, search child theme for the config. If config file doesn't exist in the child,
     * search the parent for the config file.
     *
     * @since 2.8.0
     *
     * @param string $config The config file to look for (not including .php file extension).
     * @return array The config data.
     */
    function genesis_get_config($config)
    {
    }
    /**
     * Detect active plugin by constant, class or function existence.
     *
     * @since 1.6.0
     *
     * @param array $plugins Array of array for constants, classes and / or functions to check for plugin existence.
     * @return bool True if plugin exists or false if plugin constant, class or function not detected.
     */
    function genesis_detect_plugin(array $plugins)
    {
    }
    /**
     * Check that we're targeting a specific Genesis admin page.
     *
     * The `$pagehook` argument is expected to be one of 'genesis', 'seo-settings' or 'genesis-import-export' although
     * others can be accepted.
     *
     * @since 1.8.0
     *
     * @global string $page_hook Page hook for current page.
     *
     * @param string $pagehook Page hook string to check.
     * @return bool Return `true` if the global `$page_hook` matches given `$pagehook`, `false` otherwise.
     */
    function genesis_is_menu_page($pagehook = '')
    {
    }
    /**
     * Check whether we are currently viewing the site via the WordPress Customizer.
     *
     * @since 2.0.0
     *
     * @global WP_Customize_Manager $wp_customize Customizer instance.
     *
     * @return bool Return true if viewing page via Customizer, false otherwise.
     */
    function genesis_is_customizer()
    {
    }
    /**
     * Determine if the Blog template is being used.
     *
     * `is_page_template()` is not available within the loop or any loop that
     * modifies $wp_query because it changes all the conditionals therein.
     * Since the conditionals change, is_page() no longer returns true, thus
     * is_page_template() will always return false.
     *
     * @since 2.1.0
     *
     * @link http://codex.wordpress.org/Function_Reference/is_page_template#Cannot_Be_Used_Inside_The_Loop
     *
     * @return bool True if Blog template is being used, false otherwise.
     */
    function genesis_is_blog_template()
    {
    }
    /**
     * Get the `post_type` from the global `$post` if supplied value is empty.
     *
     * @since 2.0.0
     *
     * @global WP_Query $wp_the_query Query object.
     *
     * @param string $post_type_name Post type name.
     * @return string Post type name of global `$post`.
     */
    function genesis_get_global_post_type_name($post_type_name = '')
    {
    }
    /**
     * Get list of custom post type objects which need an archive settings page.
     *
     * Archive settings pages are added for CPTs that:
     *
     * - are public,
     * - are set to show the UI,
     * - are set to show in the admin menu,
     * - have an archive enabled,
     * - not one of the built-in types,
     * - support "genesis-cpt-archives-settings".
     *
     * This last item means that if you're using an archive template and don't want Genesis interfering with it with these
     * archive settings, then don't add the support. This support check is handled in
     * {@link genesis_has_post_type_archive_support()}.
     *
     * Applies the `genesis_cpt_archives_args` filter, to change the conditions for which post types are deemed valid.
     *
     * The results are held in a static variable, since they won't change over the course of a request.
     *
     * @since 2.0.0
     *
     * @return array A list of post type names or objects.
     */
    function genesis_get_cpt_archive_types()
    {
    }
    /**
     * Get list of custom post type names which need an archive settings page.
     *
     * @since 2.0.0
     *
     * @return array Custom post type names.
     */
    function genesis_get_cpt_archive_types_names()
    {
    }
    /**
     * Check if a post type supports an archive setting page.
     *
     * @since 2.0.0
     *
     * @param string $post_type_name Post type name.
     * @return bool `true` if custom post type name has `genesis-cpt-archives-settings` support, `false` otherwise.
     */
    function genesis_has_post_type_archive_support($post_type_name = '')
    {
    }
    /**
     * Determine if HTML5 is activated by the child theme.
     *
     * @since 2.0.0
     *
     * @return bool `true` if current theme supports `html5`, `false` otherwise.
     */
    function genesis_html5()
    {
    }
    /**
     * Determine if theme support genesis-accessibility is activated by the child theme.
     * Assumes the presence of a screen-reader-text class in the stylesheet (required generated class as from WordPress 4.2)
     *
     * Adds screen-reader-text by default.
     * Skip links to primary navigation, main content, sidebars and footer, semantic headings and a keyboard accessible dropdown menu
     * can be added as extra features as: 'skip-links', 'headings', 'drop-down-menu'
     *
     * @since 2.2.0
     *
     * @param string $arg Optional. Specific accessibility feature to check for support. Default is screen-reader-text.
     * @return bool `true` if current theme supports `genesis-accessibility`, or a specific feature of it, `false` otherwise.
     */
    function genesis_a11y($arg = 'screen-reader-text')
    {
    }
    /**
     * Display a HTML sitemap.
     *
     * Used in `page_archive.php` and `404.php`.
     *
     * @see genesis_get_sitemap()
     *
     * @since 2.2.0
     *
     * @param string $heading Optional. Heading element. Default is `h2`.
     */
    function genesis_sitemap($heading = 'h2')
    {
    }
    /**
     * Get markup for a HTML sitemap.
     *
     * Can be filtered with `genesis_sitemap_output`.
     *
     * If the number of published posts is 0, then Categories, Authors,
     * Monthly and Recent Posts headings will not be shown.
     *
     * $heading:  genesis_a11y( 'headings' ) ? 'h2' : 'h4' );
     *
     * @since 2.4.0
     *
     * @param string $heading Optional. Heading element. Default is `h2`.
     * @return string $heading Sitemap content.
     */
    function genesis_get_sitemap($heading = 'h2')
    {
    }
    /**
     * Build links to install plugins.
     *
     * @since 2.0.0
     *
     * @param string $plugin_slug Plugin slug.
     * @param string $text        Plugin name.
     * @return string HTML markup for links.
     */
    function genesis_plugin_install_link($plugin_slug = '', $text = '')
    {
    }
    /**
     * Check if the root page of the site is being viewed.
     *
     * `is_front_page()` returns false for the root page of a website when
     * - the WordPress "Front page displays" setting is set to "A static page"
     * - "Front page" is left undefined
     * - "Posts page" is assigned to an existing page
     *
     * This function checks for is_front_page() or the root page of the website
     * in this edge case.
     *
     * @since 2.2.0
     *
     * @return bool `true` if this is the root page of the site, `false` otherwise.
     */
    function genesis_is_root_page()
    {
    }
    /**
     * Calculate and return the canonical URL.
     *
     * @since 2.2.0
     *
     * @return null|string The canonical URL if one exists, `null` otherwise.
     */
    function genesis_canonical_url()
    {
    }
    /**
     * Checks if this web page is an AMP URL.
     *
     * @since 2.7.0
     *
     * @return bool `true` if AMP URL; else `false`.
     */
    function genesis_is_amp()
    {
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Header
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Determine the meta description based on contextual criteria.
     *
     * @since 2.4.0
     *
     * @return string Meta description.
     */
    function genesis_get_seo_meta_description()
    {
    }
    /**
     * Determine the meta keywords based on contextual criteria.
     *
     * @since 2.4.0
     *
     * @return string Content for keywords meta tag.
     */
    function genesis_get_seo_meta_keywords()
    {
    }
    /**
     * Determine the `noindex`, `nofollow`, `noarchive` robots meta code for the current context.
     *
     * @since 2.4.0
     *
     * @global WP_Query $wp_query Query object.
     *
     * @return string String for `content` attribute of `robots` meta tag.
     */
    function genesis_get_robots_meta_content()
    {
    }
    /**
     * Return favicon URL.
     *
     * Falls back to Genesis theme favicon.
     *
     * URL to favicon is filtered via `genesis_favicon_url` before being echoed.
     *
     * @since 2.4.0
     *
     * @return string Path to favicon.
     */
    function genesis_get_favicon_url()
    {
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Images
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Pull an attachment ID from a post, if one exists.
     *
     * @since 1.0.0
     *
     * @param int $index   Optional. Index of which image to return from a post. Default is 0.
     * @param int $post_id Optional. Post ID. Default is `get_the_ID()`.
     * @return int|bool Image ID, or `false` if image with given index does not exist.
     */
    function genesis_get_image_id($index = 0, $post_id = \null)
    {
    }
    /**
     * Return an image pulled from the media gallery.
     *
     * Supported $args keys are:
     *
     *  - format   - string, default is 'html'
     *  - size     - string, default is 'full'
     *  - num      - integer, default is 0
     *  - attr     - string, default is ''
     *  - fallback - mixed, default is 'first-attached'
     *
     * Applies `genesis_get_image_default_args`, `genesis_pre_get_image` and `genesis_get_image` filters.
     *
     * @since 1.0.0
     *
     * @param array|string $args Optional. Image query arguments. Default is empty array.
     * @return string|bool Return image element HTML, URL of image, or `false`.
     */
    function genesis_get_image($args = [])
    {
    }
    /**
     * Echo an image pulled from the media gallery.
     *
     * Supported $args keys are:
     *
     *  - format - string, default is 'html', may be 'url'
     *  - size   - string, default is 'full'
     *  - num    - integer, default is 0
     *  - attr   - string, default is ''
     *
     * @since 1.0.0
     *
     * @param array|string $args Optional. Image query arguments. Default is empty array.
     * @return null|false Returns `false` if URL is empty.
     */
    function genesis_image($args = [])
    {
    }
    /**
     * Return all registered image sizes arrays, including the standard sizes.
     *
     * Return a two-dimensional array of standard and additionally registered image sizes, with width, height and crop sub-keys.
     *
     * Here, the standard sizes have their sub-keys populated by pulling from the options saved in the database.
     *
     * @since 1.0.2
     *
     * @return array Two-dimensional, with `width`, `height` and `crop` sub-keys.
     */
    function genesis_get_image_sizes()
    {
    }
    /**
     * Callback for Customizer featured image archive size.
     *
     * @since 2.1.0
     *
     * @return array List of image sizes.
     */
    function genesis_get_image_sizes_for_customizer()
    {
    }
    /**
     * Is the singular featured image set to display on the current page?
     *
     * @since 3.1.0
     *
     * @return bool True if the singular featured image is hidden or will not display.
     */
    function genesis_singular_image_hidden_on_current_page()
    {
    }
    /**
     * Which post types have singular images enabled and active?
     *
     * @since 3.1.0
     *
     * @return array The singular images with active 'genesis-singular-images' support.
     */
    function genesis_post_types_with_singular_images_enabled()
    {
    }
    /**
     * Filter the attributes of all images retrieved with `wp_get_attachment_image`, add `loading="lazy"` to enable lazy loading in Chrome.
     *
     * @since 3.2.0
     *
     * @param array $attr Attributes for the image markup.
     *
     * @return array The filtered $attr array.
     */
    function genesis_image_loading($attr)
    {
    }
    /**
     * Register Genesis default layouts.
     *
     * Genesis comes with six layouts registered by default. These are:
     *
     *  - content-sidebar (default)
     *  - sidebar-content
     *  - content-sidebar-sidebar
     *  - sidebar-sidebar-content
     *  - sidebar-content-sidebar
     *  - full-width-content
     *
     * @since 1.4.0
     */
    function genesis_create_initial_layouts()
    {
    }
    /**
     * Register new layouts in Genesis.
     *
     * Modifies the global `$_genesis_layouts` variable.
     *
     * The support `$args` keys are:
     *
     *  - label (Internationalized name of the layout),
     *  - img   (URL path to layout image),
     *  - type  (Layout type).
     *
     * Although the 'default' key is also supported, the correct way to change the default is via the
     * `genesis_set_default_layout()` function to ensure only one layout is set as the default at one time.
     *
     * @since 1.4.0
     *
     * @see genesis_set_default_layout() Set a default layout.
     *
     * @global array $_genesis_layouts Holds all layouts data.
     *
     * @param string $id   ID of layout.
     * @param array  $args Layout data.
     * @return bool|array Return `false` if ID is missing or is already set. Return merged `$args` otherwise.
     */
    function genesis_register_layout($id = '', $args = [])
    {
    }
    /**
     * Add new layout type to a layout without having to directly modify the global variable.
     *
     * @since 2.5.1
     *
     * @param string       $id   ID of layout.
     * @param array|string $type Array (or string of single type) of types to add.
     * @return array Return merged type array.
     */
    function genesis_add_type_to_layout($id, $type = [])
    {
    }
    /**
     * Remove layout type from a layout without having to directly modify the global variable.
     *
     * @since 2.5.1
     *
     * @param string       $id   ID of layout.
     * @param array|string $type Array (or string of single type) of types to remove.
     * @return array Return type array.
     */
    function genesis_remove_type_from_layout($id, $type = [])
    {
    }
    /**
     * Set a default layout.
     *
     * Allow a user to identify a layout as being the default layout on a new install, as well as serve as the fallback layout.
     *
     * @since 1.4.0
     *
     * @global array $_genesis_layouts Holds all layouts data.
     *
     * @param string $id ID of layout to set as default.
     * @return bool|string Return `false` if ID is empty or layout is not registered. Return ID otherwise.
     */
    function genesis_set_default_layout($id = '')
    {
    }
    /**
     * Unregister a layout in Genesis.
     *
     * Modifies the global $_genesis_layouts variable.
     *
     * @since 1.4.0
     *
     * @global array $_genesis_layouts Holds all layout data.
     *
     * @param string $id ID of the layout to unregister.
     * @return bool `false` if ID is empty, or layout is not registered, `true` if unregister is successful.
     */
    function genesis_unregister_layout($id = '')
    {
    }
    /**
     * Return all registered Genesis layouts.
     *
     * @since 1.4.0
     *
     * @global array $_genesis_layouts Holds all layout data.
     *
     * @param array|string $type Layout type to return. Leave empty to return default layouts. For arrays, types are checked
     *                           from right to left, returning the first type with registered layouts and falling back to
     *                           'site' if no passed types have registered layouts. If the final array value is numeric, the
     *                           second value from the end is assumed to be a post type, such as 'post' or 'page' and the
     *                           layout specific to that page or post ID would be registered as 'post-123' or 'page-123'.
     *                           - Example 1, default layouts: `genesis_get_layouts();`
     *                           - Example 2, 'page-123', 'page', 'singular', then 'site':
     *                             `genesis_get_layouts( [ 'singular', get_post_type(), get_the_ID() ] );`.
     * @return array Registered layouts.
     */
    function genesis_get_layouts($type = 'site')
    {
    }
    /**
     * Return registered layouts in a format the WordPress Customizer accepts.
     *
     * @since 2.0.0
     *
     * @global array $_genesis_layouts Holds all layout data.
     *
     * @param string $type Layout type to return. Leave empty to return all types.
     * @return array Registered layouts.
     */
    function genesis_get_layouts_for_customizer($type = 'site')
    {
    }
    /**
     * Return the data from a single layout, specified by the $id passed to it.
     *
     * @since 1.4.0
     *
     * @param string $id   ID of the layout to return data for.
     * @param string $type Optional. Layout type. Default is 'site'.
     * @return null|array `null` if ID is not set, or layout is not registered. Array of layout data
     *                    otherwise, with 'label' and 'image' (and possibly 'default') sub-keys.
     */
    function genesis_get_layout($id, $type = 'site')
    {
    }
    /**
     * Return the layout that is set to default.
     *
     * @since 1.4.0
     *
     * @global array $_genesis_layouts Holds all layout data.
     *
     * @param string $type Optional. Type of layout. Default is 'site'.
     * @return string Return ID of the layout, or `nolayout`.
     */
    function genesis_get_default_layout($type = 'site')
    {
    }
    /**
     * Determine if the site has more than 1 registered layouts.
     *
     * @since 2.3.0
     *
     * @param string $type Optional. Type of layout. Default is 'site'.
     * @return bool `true` if more than one layout, `false` otherwise.
     */
    function genesis_has_multiple_layouts($type = 'site')
    {
    }
    /**
     * Return the site layout for different contexts.
     *
     * Checks both the custom field and the theme option to find the user-selected site layout, and returns it.
     *
     * Applies `genesis_site_layout` filter early to allow shortcutting of function.
     *
     * @since 1.0.0
     *
     * @global WP_Query $wp_query Query object.
     *
     * @param bool $use_cache Conditional to use cache or get fresh.
     * @return string Key of site layout or filtered value of `genesis_site_layout`.
     */
    function genesis_site_layout($use_cache = \true)
    {
    }
    /**
     * Output the form elements necessary to select a layout.
     *
     * You must manually wrap this in an HTML element with the class of `genesis-layout-selector` in order for the CSS and
     * JavaScript to apply properly.
     *
     * Supported `$args` keys are:
     *  - name     (default is ''),
     *  - selected (default is ''),
     *  - echo     (default is true).
     *
     * The Genesis admin script is enqueued to ensure the layout selector behaviour (amending label class to add border on
     * selected layout) works.
     *
     * @since 1.7.0
     *
     * @param array $args Optional. Function arguments. Default is empty array.
     * @return null|string HTML markup of labels, images and radio inputs for layout selector.
     */
    function genesis_layout_selector($args = [])
    {
    }
    /**
     * Return a structural wrap div.
     *
     * A check is made to see if the `$context` is in the `genesis-structural-wraps` theme support data. If so, then the
     * `$output` may be echoed or returned.
     *
     * @since 2.7.0
     *
     * @param string $context The location ID.
     * @param string $output  Optional. The markup to include. Can also be 'open'
     *                        (default) or 'close' to use pre-determined markup for consistency.
     * @return null|string Wrap HTML, or `null` if `genesis-structural-wraps` support is falsy.
     */
    function genesis_get_structural_wrap($context = '', $output = 'open')
    {
    }
    /**
     * Echo a structural wrap div.
     *
     * A check is made to see if the `$context` is in the `genesis-structural-wraps` theme support data. If so, then the
     * `$output` may be echoed or returned.
     *
     * @since 1.6.0
     * @since 2.7.0 Logic moved to `genesis_get_structural_wrap()` and third parameter deprecated.
     *
     * @param string $context    The location ID.
     * @param string $output     Optional. The markup to include. Can also be 'open'
     *                           (default) or 'close' to use pre-determined markup for consistency.
     * @param bool   $deprecated Deprecated.
     * @return null|string Wrap HTML, or `null` if `genesis-structural-wraps` support is falsy.
     */
    function genesis_structural_wrap($context = '', $output = 'open', $deprecated = \null)
    {
    }
    // phpcs:disable PHPCompatibility.FunctionNameRestrictions.ReservedFunctionNames.FunctionDoubleUnderscore, WordPress.NamingConventions.ValidFunctionName.FunctionDoubleUnderscore, WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedFunctionFound -- Highly unlikely PHP will start using __genesis.
    /**
     * Return layout key 'content-sidebar'.
     *
     * Used as shortcut second parameter for `add_filter()`.
     *
     * @since 1.7.0
     *
     * @return string `'content-sidebar'`.
     */
    function __genesis_return_content_sidebar()
    {
    }
    /**
     * Return layout key 'sidebar-content'.
     *
     * Used as shortcut second parameter for `add_filter()`.
     *
     * @since 1.7.0
     *
     * @return string `'sidebar-content'`.
     */
    function __genesis_return_sidebar_content()
    {
    }
    /**
     * Return layout key 'content-sidebar-sidebar'.
     *
     * Used as shortcut second parameter for `add_filter()`.
     *
     * @since 1.7.0
     *
     * @return string `'content-sidebar-sidebar'`.
     */
    function __genesis_return_content_sidebar_sidebar()
    {
    }
    /**
     * Return layout key 'sidebar-sidebar-content'.
     *
     * Used as shortcut second parameter for `add_filter()`.
     *
     * @since 1.7.0
     *
     * @return string `'sidebar-sidebar-content'`.
     */
    function __genesis_return_sidebar_sidebar_content()
    {
    }
    /**
     * Return layout key 'sidebar-content-sidebar'.
     *
     * Used as shortcut second parameter for `add_filter()`.
     *
     * @since 1.7.0
     *
     * @return string `'sidebar-content-sidebar'`.
     */
    function __genesis_return_sidebar_content_sidebar()
    {
    }
    /**
     * Return layout key 'full-width-content'.
     *
     * Used as shortcut second parameter for `add_filter()`.
     *
     * @since 1.7.0
     *
     * @return string `'full-width-content'`.
     */
    function __genesis_return_full_width_content()
    {
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Markup
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Output markup conditionally.
     *
     * Supported keys for `$args` are:
     *
     *  - `html5` (`sprintf()` pattern markup),
     *  - `context` (name of context),
     *  - `echo` (default is true).
     *
     * Applies a `genesis_markup_{context}` filter early to allow shortcutting the function.
     *
     * Applies a `genesis_markup_{context}_output` filter at the end.
     *
     * @since 1.9.0
     * @since 3.0.0 Removed xhtml argument key as xhtml support was removed.
     *
     * @param array $args {
     *     Contains markup arguments.
     *     @type string html5   Legacy HTML5 markup.
     *     @type string context Markup context.
     *     @type string open    Opening HTML markup.
     *     @type string close   Closing HTML markup.
     *     @type array  atts    Initial attributes to apply to `open`, before filters.
     *     @type string content Content to be placed between open and close HTML markup.
     *     @type bool   echo    Flag indicating whether to echo or return the resultant string.
     *     @type array  params  Additional information/data to pass to the various filters.
     * }
     * @return string|null Markup.
     */
    function genesis_markup($args = [])
    {
    }
    /**
     * Merge array of attributes with defaults, and apply contextual filter on array.
     *
     * The contextual filter is of the form `genesis_attr_{context}`.
     *
     * @since 2.0.0
     *
     * @param string $context    The context, to build filter name.
     * @param array  $attributes Optional. Extra attributes to merge with defaults.
     * @param array  $args       Optional. Custom data to pass to filter.
     * @return array Merged and filtered attributes.
     */
    function genesis_parse_attr($context, $attributes = [], $args = [])
    {
    }
    /**
     * Build list of attributes into a string and apply contextual filter on string.
     *
     * The contextual filter is of the form `genesis_attr_{context}_output`.
     *
     * @since 2.0.0
     *
     * @param string $context    The context, to build filter name.
     * @param array  $attributes Optional. Extra attributes to merge with defaults.
     * @param array  $args       Optional. Custom data to pass to filter.
     * @return string String of HTML attributes and values.
     */
    function genesis_attr($context, $attributes = [], $args = [])
    {
    }
    /**
     * Helper function for use as a filter for when you want to prevent a class from being automatically
     * generated and output on an element that is passed through the markup API.
     *
     * @since 2.2.1
     *
     * @param array $attributes Existing attributes.
     * @return array Attributes with `class` set to empty string.
     */
    function genesis_attributes_empty_class($attributes)
    {
    }
    /**
     * Helper function for use as a filter for when you want to add screen-reader-text class to an element.
     *
     * @since 2.2.1
     *
     * @param array $attributes Existing attributes.
     * @return array Attributes with `screen-reader-text` added to classes
     */
    function genesis_attributes_screen_reader_class($attributes)
    {
    }
    /**
     * Add attributes for head element.
     *
     * @since 2.2.0
     * @since 3.1.0 Moved microdata schema to `lib/functions/schema.php`.
     *
     * @param array $attributes Existing attributes for `head` element.
     * @return array Amended attributes for `head` element.
     */
    function genesis_attributes_head($attributes)
    {
    }
    /**
     * Add attributes for body element.
     *
     * @since 2.0.0
     * @since 3.1.0 Moved microdata schema to `lib/functions/schema.php`.
     *
     * @param array $attributes Existing attributes for `body` element.
     * @return array Amended attributes for `body` element.
     */
    function genesis_attributes_body($attributes)
    {
    }
    /**
     * Add attributes for header widget area element.
     *
     * @since 2.0.0
     *
     * @param array $attributes Existing attributes for header widget area element.
     * @return array Amended attributes for header widget area element.
     */
    function genesis_attributes_header_widget_area($attributes)
    {
    }
    /**
     * Add attributes for breadcrumb link wrap meta element.
     *
     * @since 2.7.0
     * @since 3.1.0 Moved microdata schema to lib/functions/schema.php.
     *
     * @param array $attributes Existing attributes for breadcrumb link wrap meta element.
     * @return array Amended attributes for breadcrumb link wrap meta element.
     */
    function genesis_attributes_breadcrumb_link_wrap_meta($attributes)
    {
    }
    /**
     * Add attributes for breadcrumb link element.
     *
     * @since 2.7.0
     * @since 3.1.0 Moved microdata schema to lib/functions/schema.php.
     *
     * @param array  $attributes Existing attributes for breadcrumb link element.
     * @param string $context   Not used. Markup context (ie. `footer-widget-area`).
     * @param array  $args      Markup arguments.
     * @return array Amended attributes for breadcrumb link element.
     */
    function genesis_attributes_breadcrumb_link($attributes, $context, $args)
    {
    }
    /**
     * Add attributes for search form.
     *
     * @since 2.2.0
     * @since 3.1.0 Moved microdata schema to `lib/functions/schema.php`.
     *
     * @param array $attributes Existing attributes for search form element.
     * @return array Amended attributes for search form element.
     */
    function genesis_attributes_search_form($attributes)
    {
    }
    /**
     * Amend the search form content to include a meta tag (for schema).
     *
     * @since 2.7.0
     *
     * @param string $content Existing search form content.
     * @return string Potentially modified search form content.
     */
    function genesis_markup_search_form_content($content)
    {
    }
    /**
     * Add attributes for search form meta tag.
     *
     * @since 2.7.0
     * @since 3.1.0 Moved microdata schema to lib/functions/schema.php.
     *
     * @param array $attributes Existing attributes for search form meta element.
     * @return array Amended attributes for search form meta element.
     */
    function genesis_attributes_search_form_meta($attributes)
    {
    }
    /**
     * Control the open/close tags for the search form label.
     *
     * Ensure that the label open/close tags get disabled if the label has no content.
     *
     * @since 2.7.0
     *
     * @param string $tag  Existing tag for search form label element.
     * @param array  $args Markup arguments.
     * @return string Potentially modified tag for search form label element.
     */
    function genesis_markup_search_form_label_control($tag, $args)
    {
    }
    /**
     * Add attributes for search form label.
     *
     * @since 2.7.0
     *
     * @param array  $attributes Existing attributes for footer widget area wrapper elements.
     * @param string $context    Not used. Markup context (ie. `footer-widget-area`).
     * @param array  $args       Markup arguments.
     * @return array Amended attributes for search form label element.
     */
    function genesis_attributes_search_form_label($attributes, $context, $args)
    {
    }
    /**
     * Add attributes for search form input element.
     *
     * @since 2.7.0
     * @since 3.1.0 Moved microdata schema to lib/functions/schema.php.
     *
     * @param array  $attributes Existing attributes for footer widget area wrapper elements.
     * @param string $context    Not used. Markup context (ie. `footer-widget-area`).
     * @param array  $args       Markup arguments.
     * @return array Amended attributes.
     */
    function genesis_attributes_search_form_input($attributes, $context, $args)
    {
    }
    /**
     * Add attributes for search form submit element.
     *
     * @since 2.7.0
     *
     * @param array  $attributes Existing attributes for footer widget area wrapper elements.
     * @param string $context    Not used. Markup context (ie. `footer-widget-area`).
     * @param array  $args       Markup arguments.
     * @return array Amended attributes.
     */
    function genesis_attributes_search_form_submit($attributes, $context, $args)
    {
    }
    /**
     * Add attributes for primary navigation element.
     *
     * @since 2.6.0
     *
     * @param array $attributes Existing attributes for primary navigation element.
     * @return array Amended attributes for primary navigation element.
     */
    function genesis_attributes_nav_primary($attributes)
    {
    }
    /**
     * Add attributes for secondary navigation element.
     *
     * @since 2.6.0
     *
     * @param array $attributes Existing attributes for secondary navigation element.
     * @return array Amended attributes for secondary navigation element.
     */
    function genesis_attributes_nav_secondary($attributes)
    {
    }
    /**
     * Add attributes for the span wrap around navigation item links.
     *
     * @since 2.2.0
     * @since 3.1.0 Moved microdata schema to lib/functions/schema.php.
     *
     * @param array $attributes Existing attributes for span wrap around navigation item links.
     * @return array Amended attributes for span wrap around navigation item links.
     */
    function genesis_attributes_nav_link_wrap($attributes)
    {
    }
    /**
     * Add attributes for the navigation item links.
     *
     * Since we're utilizing a filter that plugins might also want to filter, don't overwrite class here.
     *
     * @since 2.2.0
     * @since 3.1.0 Moved microdata schema to lib/functions/schema.php.
     *
     * @link https://github.com/studiopress/genesis/issues/1226
     *
     * @param array $attributes Existing attributes for navigation item links.
     * @return array Amended attributes for navigation item links.
     */
    function genesis_attributes_nav_link($attributes)
    {
    }
    /**
     * Add attributes for structural wrap elements.
     *
     * @since 2.0.0
     *
     * @param array $attributes Existing attributes for structural wrap elements.
     * @return array Amended attributes for structural wrap elements.
     */
    function genesis_attributes_structural_wrap($attributes)
    {
    }
    /**
     * Add attributes for main content element.
     *
     * @since 2.0.0
     *
     * @param array $attributes Existing attributes for `main` element.
     * @return array Attributes for `main` element.
     */
    function genesis_attributes_content($attributes)
    {
    }
    /**
     * Add attributes for taxonomy archive description element.
     *
     * @since 2.2.1
     *
     * @param array $attributes Existing attributes for taxonomy archive description element.
     * @return array Amended attributes for taxonomy archive description element.
     */
    function genesis_attributes_taxonomy_archive_description($attributes)
    {
    }
    /**
     * Add attributes for author archive description element.
     *
     * @since 2.2.1
     *
     * @param array $attributes Existing attributes for author archive description element.
     * @return array Amended attributes for author archive description element.
     */
    function genesis_attributes_author_archive_description($attributes)
    {
    }
    /**
     * Add attributes for CPT archive description element.
     *
     * @since 2.2.1
     *
     * @param array $attributes Existing attributes for CPT archive description element.
     * @return array Amended attributes for CPT archive description element.
     */
    function genesis_attributes_cpt_archive_description($attributes)
    {
    }
    /**
     * Add attributes for date archive description element.
     *
     * @since 2.2.1
     *
     * @param array $attributes Existing attributes for date archive description element.
     * @return array Amended attributes for date archive description element.
     */
    function genesis_attributes_date_archive_description($attributes)
    {
    }
    /**
     * Add attributes for blog template description element.
     *
     * @since 2.2.1
     *
     * @param array $attributes Existing attributes for blog template description element.
     * @return array Amended attributes for blog template description element.
     */
    function genesis_attributes_blog_template_description($attributes)
    {
    }
    /**
     * Add attributes for posts page description element.
     *
     * @since 2.2.1
     *
     * @param array $attributes Existing attributes for posts page description element.
     * @return array Amended attributes for posts page description element.
     */
    function genesis_attributes_posts_page_description($attributes)
    {
    }
    /**
     * Add attributes for entry element.
     *
     * @since 2.0.0
     * @since 3.1.0 Moved microdata schema to lib/functions/schema.php.
     *
     * @param array $attributes Existing attributes for entry element.
     * @return array Amended attributes for entry element.
     */
    function genesis_attributes_entry($attributes)
    {
    }
    /**
     * Add attributes for entry image element.
     *
     * @since 2.0.0
     * @since 3.1.0 Moved microdata schema to lib/functions/schema.php.
     *
     * @param array $attributes Existing attributes for entry image element.
     * @return array Amended attributes for entry image element.
     */
    function genesis_attributes_entry_image($attributes)
    {
    }
    /**
     * Add attributes for entry image link element.
     *
     * @since 2.3.0
     *
     * @param array $attributes Existing attributes for entry image link element.
     * @return array Amended attributes for entry image link element.
     */
    function genesis_attributes_entry_image_link($attributes)
    {
    }
    /**
     * Add attributes for singular entry image element.
     *
     * @since 3.1.0
     *
     * @param array $attributes Existing attributes for singular entry image element.
     * @return array Amended attributes for singular entry image element.
     */
    function genesis_attributes_singular_entry_image($attributes)
    {
    }
    /**
     * Add attributes for entry image element shown in a widget.
     *
     * @since 2.0.0
     * @since 3.1.0 Moved microdata schema to lib/functions/schema.php.
     *
     * @param array $attributes Existing attributes for entry image element shown in a widget.
     * @return array Amended attributes for entry image element shown in a widget.
     */
    function genesis_attributes_entry_image_widget($attributes)
    {
    }
    /**
     * Add attributes for entry author link element.
     *
     * @since 2.0.0
     * @since 3.1.0 Moved microdata schema to lib/functions/schema.php.
     *
     * @param array $attributes Existing attributes for entry author link element.
     * @return array Amended attributes for entry author link element.
     */
    function genesis_attributes_entry_author_link($attributes)
    {
    }
    /**
     * Add attributes for entry title link.
     *
     * @since 2.6.0
     *
     * @param array $attributes Existing attributes for entry title element.
     * @return array Amended attributes for entry title element.
     */
    function genesis_attributes_entry_title_link($attributes)
    {
    }
    /**
     * Add attributes for entry meta elements.
     *
     * @since 2.1.0
     *
     * @param array $attributes Existing attributes for entry meta elements.
     * @return array Amended attributes for entry meta elements.
     */
    function genesis_attributes_entry_meta($attributes)
    {
    }
    /**
     * Add attributes for pagination element.
     *
     * @since 2.0.0
     *
     * @param array $attributes Existing attributes for pagination element.
     * @return array Amended attributes for pagination element.
     */
    function genesis_attributes_pagination($attributes)
    {
    }
    /**
     * Add attributes for entry comments element.
     *
     * @since 2.0.0
     *
     * @param array $attributes Existing attributes for entry comments element.
     * @return array Amended attributes for entry comments element.
     */
    function genesis_attributes_entry_comments($attributes)
    {
    }
    /**
     * Add attributes for single comment element.
     *
     * @since 2.0.0
     * @since 3.1.0 Moved microdata schema to lib/functions/schema.php.
     *
     * @param array $attributes Existing attributes for single comment element.
     * @return array Amended attributes for single comment element.
     */
    function genesis_attributes_comment($attributes)
    {
    }
    /**
     * Add attributes for comment author link element.
     *
     * @since 2.1.0
     * @since 3.1.0 Moved microdata schema to lib/functions/schema.php.
     *
     * @param array $attributes Existing attributes for comment author link element.
     * @return array Amended attributes for comment author link element.
     */
    function genesis_attributes_comment_author_link($attributes)
    {
    }
    /**
     * Add attributes for comment time link element.
     *
     * @since 2.1.0
     * @since 3.1.0 Moved microdata schema to lib/functions/schema.php.
     *
     * @param array $attributes Existing attributes for comment time link element.
     * @param array $context Not used. Markup context (ie. `footer-widget-area`).
     * @param array $args Arguments.
     * @return array Amended attributes for comment time link.
     */
    function genesis_attributes_comment_time_link($attributes, $context, $args)
    {
    }
    /**
     * Add attributes for primary sidebar element.
     *
     * @since 2.0.0
     * @since 3.1.0 Moved microdata schema to lib/functions/schema.php.
     *
     * @param array $attributes Existing attributes for primary sidebar element.
     * @return array Amended attributes for primary sidebar element.
     */
    function genesis_attributes_sidebar_primary($attributes)
    {
    }
    /**
     * Add attributes for secondary sidebar element.
     *
     * @since 2.0.0
     * @since 3.1.0 Moved microdata schema to lib/functions/schema.php.
     *
     * @param array $attributes Existing attributes for secondary sidebar element.
     * @return array Amended attributes for secondary sidebar element.
     */
    function genesis_attributes_sidebar_secondary($attributes)
    {
    }
    /**
     * Add attributes for footer widget area wrapper elements.
     *
     * @since 2.5.0
     *
     * @param array  $attributes Existing attributes for footer widget area wrapper elements.
     * @param string $context    Not used. Markup context (ie. `footer-widget-area`).
     * @param array  $args       Markup arguments.
     * @return array Amended attributes for footer widget area wrapper elements.
     */
    function genesis_attributes_footer_widget_area($attributes, $context, $args)
    {
    }
    /**
     * Add ID markup to the elements to jump to.
     *
     * @since 2.2.0
     *
     * @link https://gist.github.com/salcode/7164690
     */
    function genesis_skiplinks_markup()
    {
    }
    /**
     * Add ID markup to primary navigation.
     *
     * @since 2.2.0
     *
     * @param array $attributes Existing attributes for primary navigation element.
     * @return array Amended attributes for primary navigation element.
     */
    function genesis_skiplinks_attr_nav_primary($attributes)
    {
    }
    /**
     * Add ID markup to main content area.
     *
     * @since 2.2.0
     *
     * @param array $attributes Existing attributes for `main` element.
     * @return array Amended attributes for `main` element.
     */
    function genesis_skiplinks_attr_content($attributes)
    {
    }
    /**
     * Add ID markup to primary sidebar.
     *
     * @since 2.2.0
     *
     * @param array $attributes Existing attributes for primary sidebar element.
     * @return array Amended attributes for primary sidebar element.
     */
    function genesis_skiplinks_attr_sidebar_primary($attributes)
    {
    }
    /**
     * Add ID markup to secondary sidebar.
     *
     * @since 2.2.0
     *
     * @param array $attributes Existing attributes for secondary sidebar element.
     * @return array Amended attributes for secondary sidebar element.
     */
    function genesis_skiplinks_attr_sidebar_secondary($attributes)
    {
    }
    /**
     * Add ID markup to footer widget area.
     *
     * @since 2.2.0
     *
     * @param array $attributes Existing attributes for footer widget area element.
     * @return array Amended attributes for footer widget area element.
     */
    function genesis_skiplinks_attr_footer_widgets($attributes)
    {
    }
    /**
     * Add the alignleft class to the previous post link container.
     *
     * @since 2.7.0
     *
     * @param array $attributes Existing attributes for the previous post element.
     * @return array Amended attributes for the previous post element.
     */
    function genesis_adjacent_entry_attr_previous_post($attributes)
    {
    }
    /**
     * Add the alignright class to the next post link container.
     *
     * @since 2.7.0
     *
     * @param array $attributes Existing attributes for the next post element.
     * @return array Amended attributes for the next post element.
     */
    function genesis_adjacent_entry_attr_next_post($attributes)
    {
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Menus
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Determine if a child theme supports a particular Genesis nav menu.
     *
     * @since 1.8.0
     *
     * @param string $menu Name of the menu to check support for.
     * @return bool `true` if menu supported, `false` otherwise.
     */
    function genesis_nav_menu_supported($menu)
    {
    }
    /**
     * Determine if the Superfish script is enabled.
     *
     * If child theme supports HTML5 and the Load Superfish Script theme setting is checked, or if the
     * `genesis_superfish_enabled` filter is true, then this function returns true. False otherwise.
     *
     * @since 1.9.0
     *
     * @return bool `true` if Superfish is enabled, `false` otherwise.
     */
    function genesis_superfish_enabled()
    {
    }
    /**
     * Register the theme's responsive menus' configuration settings.
     *
     * @since 3.0.0
     *
     * @param array $config Optional. Array of configuration parameters for the responsive menus.
     *
     * @return Genesis_Menu_Handler returns an instance of the handler.
     */
    function genesis_register_responsive_menus(array $config = [])
    {
    }
    /**
     * Return the markup to display a menu consistent with the Genesis format.
     *
     * Applies the `genesis_$location_nav` filter e.g. `genesis_header_nav`. For primary and secondary menu locations, it
     * applies the `genesis_do_nav` and `genesis_do_subnav` filters instead for backwards compatibility.
     *
     * @since 2.1.0
     *
     * @param string|array $args Menu arguments.
     * @return string|null Navigation menu markup, or `null` if menu is not assigned to theme location, there is
     *                     no menu, or there are no menu items in the menu.
     */
    function genesis_get_nav_menu($args = [])
    {
    }
    /**
     * Echo the output from `genesis_get_nav_menu()`.
     *
     * @since 2.1.0
     *
     * @param string|array $args Menu arguments.
     */
    function genesis_nav_menu($args)
    {
    }
    /**
     * Checks if the provided menu name is unique and returns a unique version.
     *
     * Useful during one-click theme setup to create menus with unique names based
     * on a starting name.
     *
     * @since 3.1.0
     *
     * @param string $name The name to start with.
     * @return string The original name if unique, or the name appended by a number
     *                that makes it unique.
     */
    function genesis_unique_menu_name($name)
    {
    }
    /**
     * Return a cached onboarding config.
     *
     * @since 2.10.0
     *
     * @return array $config The onboarding config.
     */
    function genesis_onboarding_config()
    {
    }
    /**
     * Determine if the onboarding feature is properly enabled (via config) in a child theme.
     *
     * @since 2.10.0
     *
     * @return bool True if config exists and at least one feature is configured. False otherwise.
     */
    function genesis_onboarding_active()
    {
    }
    /**
     * Returns an array of onboarding plugins provided by Genesis or the child theme.
     *
     * @since 2.8.0
     *
     * @return array
     */
    function genesis_onboarding_plugins()
    {
    }
    /**
     * Returns an array of widgets provided by Genesis or the child theme.
     *
     * @since 3.1.0
     *
     * @return array
     */
    function genesis_onboarding_widgets()
    {
    }
    /**
     * Returns an unordered list of valid onboarding plugins provided by Genesis or the child theme.
     *
     * @since 2.9.0
     *
     * @param string $pack The starter pack slug to return the plugins list for.
     * @return string An unordered list of plugins, or empty string if no valid plugins in list.
     */
    function genesis_onboarding_plugins_list($pack = '')
    {
    }
    /**
     * Build HTML for an unordered list of onboarding content provided the child theme.
     *
     * @since 3.1.0
     *
     * @param string $pack The starter pack slug to return the plugins list for.
     * @return string An unordered list of plugins, or empty string if no valid plugins in list.
     */
    function genesis_onboarding_content_list($pack = '')
    {
    }
    /**
     * Output HTML to show a selection of starter packs if supported by the theme.
     *
     * @since 3.1.0
     */
    function genesis_onboarding_starter_packs_list()
    {
    }
    /**
     * Returns an array of onboarding content provided by Genesis or the child theme.
     *
     * @since 2.8.0
     *
     * @return array
     */
    function genesis_onboarding_content()
    {
    }
    /**
     * Installs plugin language packs during the onboarding process.
     *
     * Hooked to the 'upgrader_process_complete' action.
     *
     * @since 2.8.0
     */
    function genesis_onboarding_install_language_packs()
    {
    }
    /**
     * Returns an array of onboarding navigation menu configuration data
     * provided by Genesis or the child theme.
     *
     * @since 2.9.0
     * @return array
     */
    function genesis_onboarding_navigation_menus()
    {
    }
    /**
     * Returns an array of onboarding starter pack configuration data
     * provided by Genesis or the child theme.
     *
     * @since 3.1.0
     * @return array
     */
    function genesis_onboarding_starter_packs()
    {
    }
    /**
     * Gets onboarding tasks from those declared in the theme's `onboarding.php`.
     *
     * An onboarding task is a step during the theme setup process, such as
     * installing plugins or adding page content.
     *
     * @since 3.1.0
     *
     * @return array The tasks to run.
     */
    function genesis_onboarding_tasks()
    {
    }
    /**
     * Creates the navigation menus based on the configuration
     * provided in the child theme.
     *
     * @since 2.9.0
     * @return array Empty array if successful, an array of error messages if not.
     */
    function genesis_onboarding_create_navigation_menus()
    {
    }
    /**
     * Creates the navigation menu items based on the configuration
     * provided in the child theme.
     *
     * @since 2.9.0
     * @return array Empty array if successful, an array of error messages if not.
     */
    function genesis_onboarding_create_navigation_menu_items()
    {
    }
    /**
     * Installs the plugin dependencies during onboarding.
     *
     * @param array $dependencies The dependencies config array.
     * @param int   $step The current step being processed.
     * @since 2.9.0
     *
     * @return void|WP_Error
     */
    function genesis_onboarding_install_dependencies(array $dependencies, $step = 0)
    {
    }
    /**
     * Imports the demo content during onboarding.
     *
     * @param array $content The content config array.
     * @since 2.9.0
     *
     * @return array
     */
    function genesis_onboarding_import_content(array $content)
    {
    }
    /**
     * Inserts widgets from the onboarding config file.
     *
     * @since 3.1.0
     *
     * @param array $content The content config.
     * @param array $imported_posts Imported posts with content short name as keys and IDs as values.
     */
    function genesis_onboarding_import_widgets($content, $imported_posts)
    {
    }
    /**
     * Detect plugins that emit Open Graph tags.
     *
     * Helps to determine if the Open Graph Customizer panel should be visible when
     * Genesis SEO is active.
     *
     * Excludes plugins tested by `genesis_detect_seo_plugins()`. Genesis Open
     * Graph is already disabled if those are active.
     *
     * @since 3.2.0
     *
     * @return bool True if Open Graph Plugins are detected, false otherwise.
     */
    function genesis_detect_open_graph_plugins()
    {
    }
    /**
     * Determines if Open Graph settings should be visible in the Customizer.
     *
     * @since 3.2.0
     *
     * @return bool True if Genesis Open Graph options should be visible.
     */
    function genesis_open_graph_available()
    {
    }
    /**
     * Initializes Genesis Open Graph support if enabled.
     *
     * @since 3.2.0
     */
    function genesis_open_graph()
    {
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Options
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Return option from the options table and cache result.
     *
     * Applies `genesis_pre_get_option_$key` and `genesis_options` filters.
     *
     * Values pulled from the database are cached on each request, so a second request for the same value won't cause a
     * second DB interaction.
     *
     * @since 1.0.0
     *
     * @param string $key       Option name.
     * @param string $setting   Optional. Settings field name. Eventually defaults to `GENESIS_SETTINGS_FIELD` if not
     *                          passed as an argument.
     * @param bool   $use_cache Optional. Whether to use the Genesis cache value or not. Default is true.
     * @return mixed The value of the `$key` in the database, or the return from
     *               `genesis_pre_get_option_{$key}` short circuit filter if not `null`.
     */
    function genesis_get_option($key, $setting = \null, $use_cache = \true)
    {
    }
    /**
     * Echo options from the options database.
     *
     * @since 1.0.0
     *
     * @param string $key       Option name.
     * @param string $setting   Optional. Settings field name. Eventually defaults to GENESIS_SETTINGS_FIELD.
     * @param bool   $use_cache Optional. Whether to use the Genesis cache value or not. Default is true.
     */
    function genesis_option($key, $setting = \null, $use_cache = \true)
    {
    }
    /**
     * Return SEO options from the SEO options database.
     *
     * @since 1.0.0
     *
     * @param string $key       Option name.
     * @param bool   $use_cache Optional. Whether to use the Genesis cache value or not. Defaults to true.
     * @return mixed The value of the `$key` in the database, or the return from
     *               `genesis_pre_get_option_{$key}` short circuit filter if not `null`.
     */
    function genesis_get_seo_option($key, $use_cache = \true)
    {
    }
    /**
     * Echo an SEO option from the SEO options database.
     *
     * @since 1.0.0
     *
     * @param string $key       Option name.
     * @param bool   $use_cache Optional. Whether to use the Genesis cache value or not. Defaults to true.
     */
    function genesis_seo_option($key, $use_cache = \true)
    {
    }
    /**
     * Return a CPT Archive setting value from the options table.
     *
     * @since 2.0.0
     *
     * @param string $key            Option name.
     * @param string $post_type_name Post type name.
     * @param bool   $use_cache      Optional. Whether to use the Genesis cache value or not. Defaults to true.
     * @return mixed The value of the `$key` in the database, or the return from
     *               `genesis_pre_get_option_{$key}` short circuit filter if not `null`.
     */
    function genesis_get_cpt_option($key, $post_type_name = '', $use_cache = \true)
    {
    }
    /**
     * Echo a CPT Archive option from the options table.
     *
     * @since 2.0.0
     *
     * @param string $key            Option name.
     * @param string $post_type_name Post type name.
     * @param bool   $use_cache      Optional. Whether to use the Genesis cache value or not. Defaults to true.
     */
    function genesis_cpt_option($key, $post_type_name, $use_cache = \true)
    {
    }
    /**
     * Echo data from a post or page custom field.
     *
     * Echo only the first value of custom field.
     *
     * Pass in a `printf()` pattern as the second parameter and have that wrap around the value, if the value is not falsy.
     *
     * @since 1.0.0
     *
     * @param string $field          Custom field key.
     * @param string $output_pattern `printf()` compatible output pattern.
     * @param int    $post_id        Optional. Post ID to use for Post Meta lookup, defaults to `get_the_ID()`.
     */
    function genesis_custom_field($field, $output_pattern = '%s', $post_id = \null)
    {
    }
    /**
     * Return custom field post meta data.
     *
     * Return only the first value of custom field. Return empty string if field is blank or not set.
     *
     * @since 1.0.0
     *
     * @param string $field   Custom field key.
     * @param int    $post_id Optional. Post ID to use for Post Meta lookup, defaults to `get_the_ID()`.
     * @return string|bool Return value or empty string on failure.
     */
    function genesis_get_custom_field($field, $post_id = \null)
    {
    }
    /**
     * Save post meta / custom field data for a post or page.
     *
     * It verifies the nonce, then checks we're not doing autosave, ajax or a future post request. It then checks the
     * current user's permissions, before finally* either updating the post meta, or deleting the field if the value was not
     * truthy.
     *
     * By passing an array of fields => values from the same meta box (and therefore same nonce) into the $data argument,
     * repeated checks against the nonce, request and permissions are avoided.
     *
     * @since 1.9.0
     *
     * @param array       $data         Key/Value pairs of data to save in '_field_name' => 'value' format.
     * @param string      $nonce_action Nonce action for use with wp_verify_nonce().
     * @param string      $nonce_name   Name of the nonce to check for permissions.
     * @param WP_Post|int $post         Post object or ID.
     * @param int         $deprecated   Deprecated (formerly accepted a post ID).
     * @return void Return early if permissions are incorrect, doing autosave, Ajax or future post.
     */
    function genesis_save_custom_fields(array $data, $nonce_action, $nonce_name, $post, $deprecated = \null)
    {
    }
    /**
     * Get an expiring database setting.
     *
     * Checks the associate expiration timestamp before returning the setting value.
     *
     * If the setting has expired, delete the setting and expiration.
     *
     * @since 2.9.0
     *
     * @param string $setting The setting key.
     * @param int    $current_time The current timestamp. `time()` if null.
     * @return mixed The value of the setting, or false if setting is expired.
     */
    function genesis_get_expiring_setting($setting, $current_time = \null)
    {
    }
    /**
     * Set an expiring database setting.
     *
     * Updates the value and expiration timestamp for an expiring setting.
     *
     * @since 2.9.0
     *
     * @param string $setting  The setting key.
     * @param mixed  $value    The value to save.
     * @param int    $duration The duration this setting should remain active.
     * @return mixed The result of `update_option( $setting )`.
     */
    function genesis_set_expiring_setting($setting, $value, $duration)
    {
    }
    /**
     * Delete an expiring database setting.
     *
     * Deletes the database settings for both the $setting and the associated expiration timestamp.
     *
     * @since 2.9.0
     *
     * @param string $setting  The setting key.
     * @return mixed The result of `delete_option( $setting )`.
     */
    function genesis_delete_expiring_setting($setting)
    {
    }
    /**
     * Takes an array of new settings, merges them with the old settings, and pushes them into the database.
     *
     * @since 2.1.0
     *
     * @param string|array $new     New settings. Can be a string, or an array.
     * @param string       $setting Optional. Settings field name. Default is GENESIS_SETTINGS_FIELD.
     * @return bool `true` if option was updated, `false` otherwise.
     */
    function genesis_update_settings($new = '', $setting = \GENESIS_SETTINGS_FIELD)
    {
    }
    /**
     * Register post meta for Genesis Block Editor features, such as the title
     * and breadcrumbs checkbox controls.
     *
     * Meta must be registered to allow getting and setting via the REST API.
     *
     * Protecting fields by prefixing them with an underscore prevents them from
     * appearing in the Custom Fields meta box, where they would override changes
     * to the Block Editor Redux store.
     *
     * Passing '__return_true' for `auth_callback` allows the field to be updated
     * via the REST API even though it is protected.
     *
     * @since 3.1.0
     */
    function genesis_register_post_meta()
    {
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package StudioPress\Genesis
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Handles system requirements checks.
     *
     * @since 2.7
     *
     * @return mixed Boolean true if the requirements are met, an array of messages if not.
     */
    function genesis_check_requirements()
    {
    }
    /**
     * Activates the default theme when requirements are not met.
     *
     * @since 2.7
     *
     * @param string   $stylesheet The previously-activated theme name.
     * @param WP_Theme $old_theme WP_Theme instance of the previously-activated theme.
     */
    function genesis_activate_fallback_theme($stylesheet, \WP_Theme $old_theme)
    {
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\SEO
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Disable the Genesis SEO features.
     *
     * @since 1.6.0
     *
     * @see genesis_default_title()
     * @see genesis_doc_head_control()
     * @see genesis_seo_meta_description()
     * @see genesis_seo_meta_keywords()
     * @see genesis_robots_meta()
     * @see genesis_canonical()
     * @see genesis_add_inpost_seo_box()
     * @see genesis_add_inpost_seo_save()
     * @see genesis_add_taxonomy_seo_options()
     * @see genesis_user_seo_fields()
     */
    function genesis_disable_seo()
    {
    }
    /**
     * Detect whether or not Genesis SEO has been disabled.
     *
     * @since 1.8.0
     *
     * @return bool `true` if Genesis SEO is disabled, `false` otherwise.
     */
    function genesis_seo_disabled()
    {
    }
    /**
     * Detect whether Genesis SEO is active.
     *
     * @since 2.6.0
     *
     * @return bool `true` if Genesis SEO is active, `false` otherwise.
     */
    function genesis_seo_active()
    {
    }
    /**
     * Check for the existence of popular SEO plugins and disable the Genesis SEO features if one or more of the plugins
     * is active.
     *
     * Runs before the menu is built, so we can disable SEO Settings menu, if necessary.
     *
     * @since 1.2.0
     *
     * @see genesis_default_title()
     */
    function genesis_seo_compatibility_check()
    {
    }
    /**
     * Detect some SEO Plugin that add constants, classes or functions.
     *
     * Applies `genesis_detect_seo_plugins` filter to allow third party manipulation of SEO plugin list.
     *
     * @since 1.6.0
     *
     * @return bool `true` if plugin exists, or `false` if plugin constant, class or function not detected.
     */
    function genesis_detect_seo_plugins()
    {
    }
    /**
     * Sets the Primary Title H1 Genesis SEO setting to None if a heading level one
     * is found on a static homepage.
     *
     * @since 3.1.0
     *
     * @param int $post_id The page to check for an h1.
     */
    function genesis_maybe_clear_primary_title_h1($post_id)
    {
    }
    /**
     * Determines if JSON-LD is enabled from 3rd party plugins.
     *
     * @since 3.1.0
     *
     * @return bool True if enabled, false if else.
     */
    function genesis_is_wpseo_outputting_jsonld()
    {
    }
    /**
     * Adds a toolbar link to edit the custom post archive settings
     *
     * @since 2.3.0
     *
     * @global WP_Admin_Bar $wp_admin_bar
     *
     * @param WP_Admin_Bar $wp_admin_bar WP_Admin_Bar instance.
     * @return WP_Admin_Bar Return `$wp_admin_bar` early if in admin, not a CPT archive, not a valid post type,
     *                      or a post type that does not have support for `genesis-cpt-archive-settings`.
     */
    function genesis_cpt_archive_settings_link($wp_admin_bar)
    {
    }
    /**
     * Adds the pencil icon to the CPT archive settings menu link.
     *
     * Add custom CSS to `<head>`.
     *
     * @since 2.3.0
     */
    function genesis_cpt_archive_settings_toolbar_styles()
    {
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Updates
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Ping https://api.genesistheme.com/ asking if a new version of this theme is available.
     *
     * If not, it returns false.
     *
     * If so, the external server passes serialized data back to this function, which gets unserialized and returned for use.
     *
     * Applies `genesis_update_remote_post_options` filter.
     *
     * Ping occurs at a maximum of once every 24 hours.
     *
     * @since 1.1.0
     *
     * @global string $wp_version WordPress version string.
     *
     * @return array Unserialized data, or empty array if updates are disabled or
     *               theme does not support `genesis-auto-updates`.
     */
    function genesis_update_check()
    {
    }
    /**
     * Upgrade the database to latest version.
     *
     * @since 2.6.0
     */
    function genesis_upgrade_db_latest()
    {
    }
    /**
     * Update Genesis to the latest version.
     *
     * This iterative update function will take a Genesis installation, no matter
     * how old, and update its options to the latest version.
     *
     * It used to iterate over theme version, but now uses a database version
     * system, which allows for changes within pre-releases, too.
     *
     * @since 1.0.1
     *
     * @return void Return early if we're already on the latest version.
     */
    function genesis_upgrade()
    {
    }
    /**
     * Run silent upgrade on each site in the network during a network upgrade.
     *
     * Update Genesis database settings for all sites in a network during network upgrade process.
     *
     * @since 2.0.0
     *
     * @param int $blog_id Blog ID.
     */
    function genesis_network_upgrade_site($blog_id)
    {
    }
    /**
     * Genesis settings upgrade. Silent upgrade (no redirect).
     *
     * Meant to be called via ajax request during network upgrade process.
     *
     * @since 2.0.0
     */
    function genesis_silent_upgrade()
    {
    }
    /**
     * Upgrade the Genesis database after an update has completed.
     *
     * After an update has been completed, send a remote GET request to `admin-ajax.php` to trigger a silent upgrade.
     *
     * @since 2.10.0
     *
     * @param object $upgrader   The upgrader object.
     * @param array  $hook_extra Details about the upgrade process.
     * @return null
     */
    function genesis_update_complete($upgrader, $hook_extra)
    {
    }
    /**
     * Filter the action links at the end of an update.
     *
     * This function filters the action links that are presented to the user at the end of a theme update. If the theme
     * being updated is not Genesis, the filter returns the default values. Otherwise, it will provide its own links.
     *
     * @since 1.1.3
     *
     * @param array  $actions Existing array of action links.
     * @param string $theme   Theme name.
     * @return array Replace all existing action links, if Genesis is the theme being updated.
     *               Otherwise, return existing action links.
     */
    function genesis_update_action_links(array $actions, $theme)
    {
    }
    /**
     * Display the update nag at the top of the dashboard if there is a Genesis update available.
     *
     * @since 1.1.0
     *
     * @return void Return early if there is no available update, or user is not a site administrator,
     *              or file modifications have been disabled.
     */
    function genesis_update_nag()
    {
    }
    /**
     * Sends out update notification email.
     *
     * Does several checks before finally sending out a notification email to the
     * specified email address, alerting it to a Genesis update available for that install.
     *
     * @since 1.1.0
     *
     * @return void Return early if email should not be sent.
     */
    function genesis_update_email()
    {
    }
    /**
     * Disable WordPress from giving update notifications on Genesis or Genesis child themes.
     *
     * This function filters the value that is saved after WordPress tries to pull theme update transient data from WordPress.org
     *
     * Its purpose is to disable update notifications for Genesis and Genesis child themes.
     * This prevents WordPress.org repo themes from being installed over one of our themes.
     *
     * @since 2.0.2
     *
     * @param object $value Update check object.
     * @return object Update check object.
     */
    function genesis_disable_wporg_updates($value)
    {
    }
    /**
     * Integrate the Genesis update check into the WordPress update checks.
     *
     * This function filters the value that is returned when WordPress tries to pull theme update transient data.
     *
     * It uses `genesis_update_check()` to check to see if we need to do an update, and if so, adds the proper array to the
     * `$value->response` object. WordPress handles the rest.
     *
     * @since 1.1.0
     *
     * @param object $value Update check object.
     * @return object Modified update check object.
     */
    function genesis_update_push($value)
    {
    }
    /**
     * Delete Genesis update transient after updates or when viewing the themes page.
     *
     * The server will then do a fresh version check.
     *
     * It also disables the update nag on those pages as well.
     *
     * @since 1.1.0
     *
     * @see genesis_update_nag()
     */
    function genesis_clear_update_transient()
    {
    }
    /**
     * Converts array of keys from Genesis options to vestigial options.
     *
     * This is done for backwards compatibility.
     *
     * @since 1.6.0
     *
     * @access private
     *
     * @param array  $keys    Array of keys to convert. Default is an empty array.
     * @param string $setting Optional. The settings field the original keys are found under. Default is GENESIS_SETTINGS_FIELD.
     * @return void Return early if no `$keys` were provided, or no new vestigial options are needed.
     */
    function _genesis_vestige(array $keys = [], $setting = \GENESIS_SETTINGS_FIELD)
    {
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Updates
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Calculate or return the first version of Genesis to run on this site.
     *
     * @since 2.1.0
     *
     * @return string First version of Genesis to run on the site.
     */
    function genesis_first_version()
    {
    }
    /**
     * Helper function for comparing the "first install" version to a user specified version.
     *
     * @since 2.1.0
     *
     * @param string $version  Version number to compare first version against.
     * @param string $operator Relationship between versions.
     * @return bool `true` if the relationship is the one specified by the operator, `false` otherwise.
     */
    function genesis_first_version_compare($version, $operator)
    {
    }
    /**
     * Retrieve and return the database version.
     *
     * Attempt to retrieve the database version setting.
     *
     * If one does not exist, fabricate one using the `theme_version` setting if it exists, or PARENT_DB_VERSION (minus 1).
     *
     * @since 3.1.0
     *
     * @param bool $cache Use cache when retrieving version(s).
     * @return string Database version.
     */
    function genesis_get_db_version($cache = \false)
    {
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\WidgetAreas
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Expedites the widget area registration process by taking common things, before / after_widget, before / after_title,
     * and doing them automatically.
     *
     * See the WP function `register_sidebar()` for the list of supports $args keys.
     *
     * A typical usage is:
     *
     * ~~~
     * genesis_register_widget_area(
     *     array(
     *         'id'          => 'my-sidebar',
     *         'name'        => __( 'My Sidebar', 'my-theme-text-domain' ),
     *         'description' => __( 'A description of the intended purpose or location', 'my-theme-text-domain' ),
     *     )
     * );
     * ~~~
     *
     * @since 2.1.0
     *
     * @param string|array $args Name, ID, description and other widget area arguments.
     * @return string The sidebar ID that was added.
     */
    function genesis_register_widget_area($args)
    {
    }
    /**
     * An alias for `genesis_register_widget_area()`.
     *
     * @since 1.0.1
     *
     * @param string|array $args Name, ID, description and other widget area arguments.
     * @return string The sidebar ID that was added.
     */
    function genesis_register_sidebar($args)
    {
    }
    /**
     * Hook the callback that registers the default Genesis widget areas.
     *
     * @since 1.6.0
     */
    function genesis_register_default_widget_areas()
    {
    }
    /**
     * Register the default Genesis widget areas, if the placeholder widget areas are still registered.
     *
     * @since 2.2.0
     */
    function _genesis_register_default_widget_areas_cb()
    {
    }
    /**
     * Register footer widget areas based on the number of widget areas the user wishes to create with `add_theme_support()`.
     *
     * @since 1.6.0
     *
     * @return void Return early if there is no theme support for `genesis-footer-widgets`
     *              or the number of widgets given is not set or not numeric.
     */
    function genesis_register_footer_widget_areas()
    {
    }
    /**
     * Register after-entry widget area if user specifies in the child theme.
     *
     * @since 2.1.0
     *
     * @return void Return early if there is no theme support for `genesis-after-entry-widget-area`.
     */
    function genesis_register_after_entry_widget_area()
    {
    }
    /**
     * Conditionally display a sidebar, wrapped in a div by default.
     *
     * The $args array accepts the following keys:
     *
     *  - `before` (markup to be displayed before the widget area output),
     *  - `after` (markup to be displayed after the widget area output),
     *  - `default` (fallback text if the sidebar is not found, or has no widgets, default is an empty string),
     *  - `show_inactive` (flag to show inactive sidebars, default is false),
     *  - `before_sidebar_hook` (hook that fires before the widget area output),
     *  - `after_sidebar_hook` (hook that fires after the widget area output).
     *
     * Return false early if the sidebar is not active and the `show_inactive` argument is false.
     *
     * @since 1.8.0
     *
     * @param string $id   Sidebar ID, as per when it was registered.
     * @param array  $args Arguments.
     * @return bool `false` if `$id` is falsy, or `$args['show_inactive']` is falsy and sidebar
     *              is not currently being used. `true` otherwise.
     */
    function genesis_widget_area($id, $args = [])
    {
    }
    /**
     * Widget heading filter, default H4 in Widgets and sidebars modified to an H3 if genesis_a11y( 'headings' ) support
     *
     * For using a semantic heading structure, improves accessibility
     *
     * @since 2.2.0
     *
     * @param array $args Existing sidebar default arguments.
     * @return array Amended sidebar default arguments.
     */
    function genesis_a11y_register_sidebar_defaults($args)
    {
    }
    /**
     * Adds an H2 title to widget areas.
     *
     * For using a semantic heading structure, improves accessibility
     *
     * @since 2.2.0
     *
     * @global array $wp_registered_sidebars
     *
     * @param string $id Sidebar ID, as per when it was registered.
     * @return string|null Widget area heading, or `null` if `headings` are not enabled for
     *                     Genesis accessibility, or `$id` is not registered as a widget area ID.
     */
    function genesis_sidebar_title($id)
    {
    }
    /**
     * Allow Genesis_* class and StudioPress\Genesis namespaced files to be loaded automatically.
     *
     * @since 2.7.0 Allowed autoloading of namespaced classes.
     *
     * @param string $class_name Class name.
     * @return mixed|null|string Null if the classname format is not recognized otherwise the file path.
     */
    function genesis_autoload_register($class_name)
    {
    }
    /**
     * Allow StudioPress\Genesis namespaced files to be loaded automatically.
     *
     * @since 3.1.0
     *
     * @param string $class_name Class name.
     * @return mixed|null|string Null if the classname format is not recognized otherwise the file path.
     */
    function genesis_autoload_register_psr4($class_name)
    {
    }
    /**
     * Load the Genesis textdomain for internationalization.
     *
     * @since 1.9.0
     */
    function genesis_i18n()
    {
    }
    /**
     * Registers Genesis in the Traduttore registry. Translation API requests
     * for Genesis language packs then use the Genesis Translations server.
     *
     * Language packs generated by the Traduttore server plugin are listed at
     * https://translate.studiopress.com/global/api/translations/genesis-framework/genesis/.
     *
     * Genesis GlotPress server: https://translate.studiopress.com/global/projects/genesis-framework/.
     * Contribute translations: https://translate.studiopress.com/.
     *
     * @since 3.3.0
     */
    function genesis_init_traduttore()
    {
    }
    /**
     * Activates default theme features.
     *
     * @since 1.6.0
     */
    function genesis_theme_support()
    {
    }
    /**
     * Initialize post type support for Genesis features (Layout selector, SEO).
     *
     * @since 1.8.0
     */
    function genesis_post_type_support()
    {
    }
    /**
     * Add post type support for post meta to all post types except page.
     *
     * @since 2.2.0
     */
    function genesis_post_type_support_post_meta()
    {
    }
    /**
     * This function defines the Genesis theme constants
     *
     * @since 1.6.0
     */
    function genesis_constants()
    {
    }
    /**
     * Loads all the framework files and features.
     *
     * The function can only be effective once, due to the use of the GENESIS_LOADED FRAMEWORK constant.
     *
     * The genesis_pre_framework action hook is called before any of the files are
     * required().
     *
     * If a child theme defines GENESIS_LOAD_FRAMEWORK as false before requiring
     * this init.php file, then this function will abort before any other framework
     * files are loaded.
     *
     * @since 1.6.0
     *
     * @global array $_genesis_formatting_allowed_tags Array of allowed tags for output formatting.
     */
    function genesis_load_framework()
    {
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Assets
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Retrieve a handle to the script loader.
     *
     * @since 2.5.0
     *
     * @return Genesis_Script_Loader object
     */
    function genesis_scripts()
    {
    }
    /**
     * Adds the visual copyright notice.
     *
     * Supported shortcode attributes are:
     *   after (output after notice, default is empty string),
     *   before (output before notice, default is empty string),
     *   copyright (copyright notice, default is copyright character like (c) ),
     *   first(year copyright first applies, default is empty string).
     *
     * If the 'first' attribute is not empty, and not equal to the current year, then
     * output will be formatted as first-current year (e.g. 1998-2020).
     * Otherwise, output is just given as the current year.
     *
     * Output passes through `genesis_footer_copyright_shortcode` filter before returning.
     *
     * @since 1.1.0
     *
     * @param array|string $atts Shortcode attributes. Empty string if no attributes.
     * @return string Output for `footer_copyright` shortcode.
     */
    function genesis_footer_copyright_shortcode($atts)
    {
    }
    /**
     * Adds the link to the child theme, if the details are defined.
     *
     * Supported shortcode attributes are:
     *   after (output after link, default is empty string),
     *   before (output before link, default is a string with a middot character).
     *
     * Output passes through `genesis_footer_childtheme_link_shortcode` filter before returning.
     *
     * @since 1.1.0
     *
     * @param array|string $atts Shortcode attributes. Empty string if no attributes.
     * @return null|string Return empty string early if not a child theme, or if child theme doesn't have a name or URI.
     *                     Otherwise return output for `footer_childtheme_link` shortcode.
     */
    function genesis_footer_childtheme_link_shortcode($atts)
    {
    }
    /**
     * Adds link to the Genesis page on the StudioPress website.
     *
     * Supported shortcode attributes are:
     *   after (output after link, default is empty string),
     *   before (output before link, default is empty string).
     *
     * Output passes through `genesis_footer_genesis_link_shortcode` filter before returning.
     *
     * @since 1.1.0
     *
     * @param array|string $atts Shortcode attributes. Empty string if no attributes.
     * @return string Output for `footer_genesis_link` shortcode.
     */
    function genesis_footer_genesis_link_shortcode($atts)
    {
    }
    /**
     * Adds link to the StudioPress home page.
     *
     * Supported shortcode attributes are:
     *   after (output after link, default is empty string),
     *   before (output before link, default is 'by ').
     *
     * Output passes through `genesis_footer_studiopress_link_shortcode` filter before returning.
     *
     * @since 1.2.0
     *
     * @param array|string $atts Shortcode attributes. Empty string if no attributes.
     * @return string Output for `footer_studiopress_link` shortcode.
     */
    function genesis_footer_studiopress_link_shortcode($atts)
    {
    }
    /**
     * Adds link to WordPress - https://wordpress.org/ .
     *
     * Supported shortcode attributes are:
     *   after (output after link, default is empty string),
     *   before (output before link, default is empty string).
     *
     * Output passes through `genesis_footer_wordpress_link_shortcode` filter before returning.
     *
     * @since 1.1.0
     *
     * @param array|string $atts Shortcode attributes. Empty string if no attributes.
     * @return string Output for `footer_wordpress_link` shortcode.
     */
    function genesis_footer_wordpress_link_shortcode($atts)
    {
    }
    /**
     * Produces the site title.
     *
     * Supported shortcode attributes are:
     *   after (output after link, default is empty string),
     *   before (output before link, default is empty string).
     *
     * Output passes through `genesis_footer_site_title_shortcode` filter before returning.
     *
     * @since 2.3.0
     *
     * @param array|string $atts Shortcode attributes. Empty string if no attributes.
     * @return string Output for `footer_site_title` shortcode.
     */
    function genesis_footer_site_title_shortcode($atts)
    {
    }
    /**
     * Produces a link to the home URL.
     *
     * Supported shortcode attributes are:
     *   after (output after link, default is empty string),
     *   before (output before link, default is empty string),
     *   text (link text, default is site title).
     *
     * Output passes through `genesis_footer_home_link_shortcode` filter before returning.
     *
     * @since 2.3.0
     *
     * @param array|string $atts Shortcode attributes. Empty string if no attributes.
     * @return string Output for `footer_home_link` shortcode.
     */
    function genesis_footer_home_link_shortcode($atts)
    {
    }
    /**
     * Adds admin login / logout link.
     *
     * Support shortcode attributes are:
     *   after (output after link, default is empty string),
     *   before (output before link, default is empty string),
     *   redirect (path to redirect to on login, default is empty string).
     *
     * Output passes through `genesis_footer_loginout_shortcode` filter before returning.
     *
     * @since 1.1.0
     *
     * @param array|string $atts Shortcode attributes. Empty string if no attributes.
     * @return string Output for `footer_loginout` shortcode.
     */
    function genesis_footer_loginout_shortcode($atts)
    {
    }
    /**
     * Produces the date of post publication.
     *
     * Supported shortcode attributes are:
     *   after (output after link, default is empty string),
     *   before (output before link, default is empty string),
     *   format (date format, default is value in date_format option field),
     *   label (text following 'before' output, but before date).
     *
     * Output passes through `genesis_post_date_shortcode` filter before returning.
     *
     * @since 1.1.0
     *
     * @param array|string $atts Shortcode attributes. Empty string if no attributes.
     * @return string Output for `post_date` shortcode.
     */
    function genesis_post_date_shortcode($atts)
    {
    }
    /**
     * Produces the time of post publication.
     *
     * Supported shortcode attributes are:
     *   after (output after link, default is empty string),
     *   before (output before link, default is empty string),
     *   format (date format, default is value in date_format option field),
     *   label (text following 'before' output, but before date).
     *
     * Output passes through `genesis_post_time_shortcode` filter before returning.
     *
     * @since 1.1.0
     *
     * @param array|string $atts Shortcode attributes. Empty string if no attributes.
     * @return string Output for `post_time` shortcode`.
     */
    function genesis_post_time_shortcode($atts)
    {
    }
    /**
     * Produce the post last modified date.
     *
     * Supported shortcode attributes are:
     *  * after (output after date, default is empty string),
     *  * before (output before date, default is empty string),
     *  * format (date format, default is value in date_format option field),
     *  * label (text following 'before' output, but before date).
     *
     * Output passes through `genesis_post_modified_date_shortcode` filter before returning.
     *
     * @since 2.1.0
     *
     * @param array|string $atts Shortcode attributes. Empty string if no attributes.
     * @return string Output for `post_modified_date` shortcode.
     */
    function genesis_post_modified_date_shortcode($atts)
    {
    }
    /**
     * Produce the post last modified time.
     *
     * Supported shortcode attributes are:
     *  * after (output after time, default is empty string),
     *  * before (output before time, default is empty string),
     *  * format (date format, default is value in date_format option field),
     *  * label (text following 'before' output, but before time).
     *
     * Output passes through `genesis_post_modified_time_shortcode` filter before returning.
     *
     * @since 2.1.0
     *
     * @param array|string $atts Shortcode attributes. Empty string if no attributes.
     * @return string Output for `post_modified_time` shortcode.
     */
    function genesis_post_modified_time_shortcode($atts)
    {
    }
    /**
     * Produces the author of the post (unlinked display name).
     *
     * Supported shortcode attributes are:
     *   after (output after link, default is empty string),
     *   before (output before link, default is empty string).
     *
     * Output passes through `genesis_post_author_shortcode` filter before returning.
     *
     * @since 1.1.0
     *
     * @param array|string $atts Shortcode attributes. Empty string if no attributes.
     * @return string Return empty string if post type does not support `author`, or has no author assigned.
     *                Otherwise, output for `post_author` shortcode.
     */
    function genesis_post_author_shortcode($atts)
    {
    }
    /**
     * Produces the author of the post (link to author URL).
     *
     * Supported shortcode attributes are:
     *   after (output after link, default is empty string),
     *   before (output before link, default is empty string).
     *
     * Output passes through `genesis_post_author_link_shortcode` filter before returning.
     *
     * @since 1.1.0
     *
     * @param array|string $atts Shortcode attributes. Empty string if no attributes.
     * @return string Return empty string if post type does not support `author` or post has no author assigned.
     *                Return `genesis_post_author_shortcode()` if author has no URL.
     *                Otherwise, output for `post_author_link` shortcode.
     */
    function genesis_post_author_link_shortcode($atts)
    {
    }
    /**
     * Produces the author of the post (link to author archive).
     *
     * Supported shortcode attributes are:
     *   after (output after link, default is empty string),
     *   before (output before link, default is empty string).
     *
     * Output passes through `genesis_post_author_posts_link_shortcode` filter before returning.
     *
     * @since 1.1.0
     *
     * @param array|string $atts Shortcode attributes. Empty string if no attributes.
     * @return string Return empty string if post type does not support `author` or post has no author assigned.
     *                Otherwise, output for `post_author_posts_link` shortcode.
     */
    function genesis_post_author_posts_link_shortcode($atts)
    {
    }
    /**
     * Produces the link to the current post comments.
     *
     * Supported shortcode attributes are:
     *   after (output after link, default is empty string),
     *   before (output before link, default is empty string),
     *   hide_if_off (hide link if comments are off, default is 'enabled' (true)),
     *   more (text when there is more than 1 comment, use % character as placeholder
     *     for actual number, default is '% Comments')
     *   one (text when there is exactly one comment, default is '1 Comment'),
     *   zero (text when there are no comments, default is 'Leave a Comment').
     *
     * Output passes through `genesis_post_comments_shortcode` filter before returning.
     *
     * @since 1.1.0
     *
     * @param array|string $atts Shortcode attributes. Empty string if no attributes.
     * @return string Return empty string if post does not support `comments`, or `hide_if_off` is enabled and
     *                comments are closed or disabled in Genesis theme settings.
     *                Otherwise, output for `post_comments` shortcode.
     */
    function genesis_post_comments_shortcode($atts)
    {
    }
    /**
     * Produces the tag links list.
     *
     * Supported shortcode attributes are:
     *   after (output after link, default is empty string),
     *   before (output before link, default is 'Tagged With: '),
     *   sep (separator string between tags, default is ', ').
     *
     * Output passes through `genesis_post_tags_shortcode` filter before returning.
     *
     * @since 1.1.0
     *
     * @param array|string $atts Shortcode attributes. Empty string if no attributes.
     * @return string Return empty string if the `post_tag` taxonomy is not associated with the current post type
     *                or if the post has no tags. Otherwise, output for `post_tags` shortcode.
     */
    function genesis_post_tags_shortcode($atts)
    {
    }
    /**
     * Produces the category links list.
     *
     * Supported shortcode attributes are:
     *   after (output after link, default is empty string),
     *   before (output before link, default is 'Tagged With: '),
     *   sep (separator string between tags, default is ', ').
     *
     * Output passes through 'genesis_post_categories_shortcode' filter before returning.
     *
     * @since 1.1.0
     *
     * @param array|string $atts Shortcode attributes. Empty string if no attributes.
     * @return string Return empty string if the `category` taxonomy is not associated with the current post type
     *                or if the post has no categories. Otherwise, output for `post_categories` shortcode.
     */
    function genesis_post_categories_shortcode($atts)
    {
    }
    /**
     * Produces the linked post taxonomy terms list.
     *
     * Supported shortcode attributes are:
     *   after (output after link, default is empty string),
     *   before (output before link, default is 'Filed Under: '),
     *   sep (separator string between tags, default is ', '),
     *    taxonomy (name of the taxonomy, default is 'category').
     *
     * Output passes through `genesis_post_terms_shortcode` filter before returning.
     *
     * @since 1.6.0
     *
     * @param array|string $atts Shortcode attributes. Empty string if no attributes.
     * @return string Output for `post_terms` shortcode, or empty string on failure to retrieve terms.
     */
    function genesis_post_terms_shortcode($atts)
    {
    }
    /**
     * Produces the edit post link for logged in users.
     *
     * Supported shortcode attributes are:
     *   after (output after link, default is empty string),
     *   before (output before link, default is 'Tagged With: '),
     *   link (link text, default is '(Edit)').
     *
     * Output passes through `genesis_post_edit_shortcode` filter before returning.
     *
     * @since 1.1.0
     *
     * @param array|string $atts Shortcode attributes. Empty string if no attributes.
     * @return string Output for `post_edit` shortcode, or empty string if `genesis_edit_post_link` filter returns `false`.
     */
    function genesis_post_edit_shortcode($atts)
    {
    }
    /**
     * Add custom heading and / or description to category / tag / taxonomy archive pages.
     *
     * If the page is not a category, tag or taxonomy term archive, or there's no term, or
     * no term meta set, then nothing extra is displayed.
     *
     * If there's a title to display, it is marked up as a level 1 heading.
     *
     * If there's a description to display, it runs through `wpautop()`,
     * `do_shortcode()` and `autoembed()` before being added to a div.
     *
     * @since 2.10.0 Filter intro text with `do_shortcode()` and `autoembed()`.
     * @since 1.3.0
     *
     * @global WP_Query $wp_query Query object.
     * @global WP_Embed $wp_embed Embed object.
     *
     * @return void Return early if not the correct archive page, or no term is found.
     */
    function genesis_do_taxonomy_title_description()
    {
    }
    /**
     * Add custom headline and description to author archive pages.
     *
     * If we're not on an author archive page, then nothing extra is displayed.
     *
     * If there's a custom headline to display, it is marked up as a level 1 heading.
     *
     * If there's a description (intro text) to display, it is run through `wpautop()` before being added to a div.
     *
     * @since 1.4.0
     *
     * @return void Return early if not author archive.
     */
    function genesis_do_author_title_description()
    {
    }
    /**
     * Add author box to the top of author archive.
     *
     * If the headline and description are set to display the author box appears underneath them.
     *
     * @since 1.4.0
     *
     * @see genesis_do_author_title_and_description Author title and description.
     *
     * @return void Return early if not author archive or not page one.
     */
    function genesis_do_author_box_archive()
    {
    }
    /**
     * Add custom headline and description to relevant custom post type archive pages.
     *
     * If we're not on a post type archive page, then nothing extra is displayed.
     *
     * If there's a custom headline to display, it is marked up as a level 1 heading.
     *
     * If there's a description (intro text) to display, it is run through wpautop() before being added to a div.
     *
     * @since 2.0.0
     *
     * @return void Return early if not on post type archive or post type does not
     *              have `genesis-cpt-archives-settings` support
     */
    function genesis_do_cpt_archive_title_description()
    {
    }
    /**
     * Add custom heading to date archive pages.
     *
     * If we're not on a date archive page, then nothing extra is displayed.
     *
     * @since 2.2.0
     *
     * @return void Return early if not on date archive.
     */
    function genesis_do_date_archive_title()
    {
    }
    /**
     * Add custom heading and description to blog template pages.
     *
     * If we're not on a blog template page, then nothing extra is displayed.
     *
     * @since 2.2.0
     *
     * @return void Return early if not on blog template archive, or `headings` is not
     *              enabled for Genesis accessibility.
     */
    function genesis_do_blog_template_heading()
    {
    }
    /**
     * Add custom heading to assigned posts page.
     *
     * If we're not on a posts page, then nothing extra is displayed.
     *
     * @since 2.2.1
     *
     * @return void Return early if `headings` is not enabled for Genesis accessibility, there is no
     *              page for posts assigned, this is not the home (posts) page, or this is not the page found at `/`.
     */
    function genesis_do_posts_page_heading()
    {
    }
    /**
     * Add open markup for archive headings to archive pages.
     *
     * @since 2.5.0
     *
     * @param string $heading    Optional. Archive heading, default is empty string.
     * @param string $intro_text Optional. Archive intro text, default is empty string.
     * @param string $context    Optional. Archive context, default is empty string.
     */
    function genesis_do_archive_headings_open($heading = '', $intro_text = '', $context = '')
    {
    }
    /**
     * Add close markup for archive headings to archive pages.
     *
     * @since 2.5.0
     *
     * @param string $heading    Optional. Archive heading, default is empty string.
     * @param string $intro_text Optional. Archive intro text, default is empty string.
     * @param string $context    Optional. Archive context, default is empty string.
     */
    function genesis_do_archive_headings_close($heading = '', $intro_text = '', $context = '')
    {
    }
    /**
     * Add headline for archive headings to archive pages.
     *
     * @since 2.5.0
     *
     * @param string $heading    Optional. Archive heading, default is empty string.
     * @param string $intro_text Optional. Archive intro text, default is empty string.
     * @param string $context    Optional. Archive context, default is empty string.
     */
    function genesis_do_archive_headings_headline($heading = '', $intro_text = '', $context = '')
    {
    }
    /**
     * Add intro text for archive headings to archive pages.
     *
     * @since 2.5.0
     *
     * @param string $heading    Optional. Archive heading, default is empty string.
     * @param string $intro_text Optional. Archive intro text, default is empty string.
     * @param string $context    Optional. Archive context, default is empty string.
     */
    function genesis_do_archive_headings_intro_text($heading = '', $intro_text = '', $context = '')
    {
    }
    /**
     * Output the comments at the end of entries.
     *
     * Load comments only if we are on a post, page, or CPT that supports comments, and only if comments or trackbacks are enabled.
     *
     * @since 1.1.0
     *
     * @return void Return early if post type does not support `comments`.
     */
    function genesis_get_comments_template()
    {
    }
    /**
     * Echo Genesis default comment structure.
     *
     * Does the `genesis_list_comments` action.
     *
     * Applies the `genesis_title_comments`, `genesis_prev_comments_link_text`, `genesis_next_comments_link_text`,
     * `genesis_no_comments_text` and `genesis_comments_closed_text` filters.
     *
     * @since 1.1.2
     *
     * @global WP_Query $wp_query Query object.
     *
     * @return void Return early if on a page with Genesis page comments off, or on a post with Genesis post comments off.
     */
    function genesis_do_comments()
    {
    }
    /**
     * Echo Genesis default trackback structure.
     *
     * Does the `genesis_list_args` action.
     *
     * Applies the `genesis_no_pings_text` filter.
     *
     * @since 1.1.2
     *
     * @global WP_Query $wp_query Query object.
     *
     * @return void Return early if on a page with Genesis page trackbacks off, or on a
     *              post with Genesis post trackbacks off.
     */
    function genesis_do_pings()
    {
    }
    /**
     * Output the list of comments.
     *
     * Applies the `genesis_comment_list_args` filter.
     *
     * @since 1.0.0
     *
     * @see genesis_html5_comment_callback() HTML5 callback.
     * @see genesis_comment_callback()       XHTML callback.
     */
    function genesis_default_list_comments()
    {
    }
    /**
     * Output the list of trackbacks.
     *
     * Applies the `genesis_ping_list_args` filter.
     *
     * @since 1.0.0
     */
    function genesis_default_list_pings()
    {
    }
    /**
     * Comment callback for {@link genesis_default_list_comments()} if HTML5 is active.
     *
     * Does `genesis_before_comment` and `genesis_after_comment` actions.
     *
     * Applies `comment_author_says_text` and `genesis_comment_awaiting_moderation` filters.
     *
     * @since 2.0.0
     *
     * @param stdClass $comment Comment object.
     * @param array    $args    Comment args.
     * @param int      $depth   Depth of current comment.
     */
    function genesis_html5_comment_callback($comment, array $args, $depth)
    {
    }
    /**
     * Optionally show the comment form.
     *
     * Genesis asks WP for the HTML5 version of the comment form - it uses {@link genesis_comment_form_args()} to revert to
     * XHTML form fields when child theme does not support HTML5.
     *
     * @since 1.0.0
     *
     * @return void Return early if comments are closed via Genesis for this page or post.
     */
    function genesis_do_comment_form()
    {
    }
    /**
     * Filter the comments link. If post has comments, link to #comments div. If no, link to #respond div.
     *
     * @since 2.0.1
     *
     * @param string      $link    Post comments permalink with '#comments' appended.
     * @param int|WP_Post $post_id Post ID or WP_Post object.
     * @return string URL to comments if they exist, otherwise URL to the comment form.
     */
    function genesis_comments_link_filter($link, $post_id)
    {
    }
    /**
     * Are comments enabled in Genesis at Theme Settings → Comments and Trackbacks?
     *
     * @since 3.3.0
     *
     * @return bool True if comments are enabled for this post type.
     */
    function genesis_comments_enabled()
    {
    }
    /**
     * Are trackbacks enabled in Genesis at Theme Settings → Comments and Trackbacks?
     *
     * @since 3.3.0
     *
     * @return bool True if trackbacks are enabled for this post type.
     */
    function genesis_trackbacks_enabled()
    {
    }
    /**
     * Are trackbacks or comments appearing on the current post?
     *
     * Used to improve heading level hierarchy in comments.php if comments or
     * trackbacks are visible.
     *
     * @since 3.3.0
     *
     * @return bool True if trackbacks or comments are showing on the current post.
     */
    function genesis_comments_trackbacks_showing()
    {
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Footer
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Are footer widgets hidden for the current page?
     *
     * Indicates that the “Hide Footer Widgets” checkbox is enabled and checked.
     *
     * @since 3.2.0
     *
     * @return bool True if footer widgets are hidden, false otherwise.
     */
    function genesis_footer_widgets_hidden_on_current_page()
    {
    }
    /**
     * Echo the markup necessary to facilitate the footer widget areas.
     *
     * Check for a numerical parameter given when adding theme support - if none is found, then the function returns early.
     *
     * The child theme must style the widget areas.
     *
     * Applies the `genesis_footer_widget_areas` filter.
     *
     * @since 1.6.0
     *
     * @return void Return early if number of widget areas could not be determined,
     *              or nothing is added to the first widget area.
     */
    function genesis_footer_widget_areas()
    {
    }
    /**
     * Echo the opening div tag for the footer.
     *
     * Also optionally adds wrapping div opening tag.
     *
     * @since 1.2.0
     */
    function genesis_footer_markup_open()
    {
    }
    /**
     * Echo the closing div tag for the footer.
     *
     * Also optionally adds wrapping div closing tag.
     *
     * @since 1.2.0
     */
    function genesis_footer_markup_close()
    {
    }
    /**
     * Echo the contents of the footer including processed shortcodes.
     *
     * Applies `genesis_footer_creds_text` and `genesis_footer_output` filters.
     *
     * @since 3.0.0 Removed `[footer_backtotop]` shortcode and `genesis_footer_backtotop_text` filter.
     * @since 1.0.1
     */
    function genesis_do_footer()
    {
    }
    /**
     * Echo the footer scripts, defined in Theme Settings.
     *
     * Applies the `genesis_footer_scripts` filter to the value returns from the footer_scripts option.
     *
     * Also outputs page-specific body scripts if their position is set to 'bottom'.
     *
     * @since 1.1.0
     */
    function genesis_footer_scripts()
    {
    }
    /**
     * Echo the doctype and opening markup.
     *
     * If you are going to replace the doctype with a custom one, you must remember to include the opening <html> and
     * <head> elements too, along with the proper attributes.
     *
     * It would be beneficial to also include the <meta> tag for content type.
     *
     * The default doctype is XHTML v1.0 Transitional, unless HTML support os present in the child theme.
     *
     * @since 1.3.0
     * @since 3.0.0 Removed xhtml logic.
     */
    function genesis_do_doctype()
    {
    }
    /**
     * HTML5 doctype markup.
     *
     * @since 2.0.0
     */
    function genesis_html5_doctype()
    {
    }
    /**
     * Filter Document title parts based on context and SEO settings values.
     *
     * @since 2.6.0
     *
     * @param array $parts The document title parts.
     * @return array Return modified array of title parts.
     */
    function genesis_document_title_parts($parts)
    {
    }
    /**
     * Filter Document title parts separator based on SEO setting value.
     *
     * @since 2.6.0
     *
     * @param string $sep The title parts separator.
     * @return string Return modified title parts separator.
     */
    function genesis_document_title_separator($sep)
    {
    }
    /**
     * Remove unnecessary code that WordPress puts in the `head`.
     *
     * @since 1.3.0
     */
    function genesis_doc_head_control()
    {
    }
    /**
     * Output the meta description based on contextual criteria.
     *
     * Output nothing if description isn't present.
     *
     * @since 1.2.0
     * @since 2.4.0 Logic moved to `genesis_get_seo_meta_description()`
     *
     * @see genesis_get_seo_meta_description()
     */
    function genesis_seo_meta_description()
    {
    }
    /**
     * Output the meta keywords based on contextual criteria.
     *
     * Outputs nothing if keywords are not present.
     *
     * @since 1.2.0
     * @since 2.4.0 Logic moved to `genesis_get_seo_meta_keywords()`
     *
     * @see genesis_get_seo_meta_keywords()
     */
    function genesis_seo_meta_keywords()
    {
    }
    /**
     * Output the robots meta code in the document `head`.
     *
     * @since 1.0.0
     * @since 2.4.0 Logic moved to `genesis_get_robots_meta_content()`
     *
     * @see genesis_get_robots_meta_content()
     *
     * @return void Return early if blog is not public.
     */
    function genesis_robots_meta()
    {
    }
    /**
     * Outputs the responsive CSS viewport tag.
     *
     * Applies `genesis_viewport_value` filter on content attribute.
     *
     * @since 1.9.0
     * @since 2.7.0 Adds `minimum-scale=1` when AMP URL.
     * @since 3.0 Do not check if theme supports `genesis-responsive-viewport`.
     */
    function genesis_responsive_viewport()
    {
    }
    /**
     * Echo favicon link.
     *
     * @since 1.0.0
     * @since 2.4.0 Logic moved to `genesis_get_favicon_url()`.
     *
     * @see genesis_get_favicon_url()
     *
     * @return void Return early if WP Site Icon is used.
     */
    function genesis_load_favicon()
    {
    }
    /**
     * Adds the pingback meta tag to the head so that other sites can know how to send a pingback to our site.
     *
     * @since 1.3.0
     */
    function genesis_do_meta_pingback()
    {
    }
    /**
     * Output rel links in the head to indicate previous and next pages in paginated archives and posts.
     *
     * @link https://webmasters.googleblog.com/2011/09/pagination-with-relnext-and-relprev.html
     *
     * @since 2.2.0
     *
     * @return void Return early if doing a Customizer preview.
     */
    function genesis_paged_rel()
    {
    }
    /**
     * Output meta tag for site name.
     *
     * @since 2.2.0
     *
     * @return void Return early if not HTML5 or not front page.
     */
    function genesis_meta_name()
    {
    }
    /**
     * Output meta tag for site URL.
     *
     * @since 2.2.0
     *
     * @return void Return early if not HTML5 or not front page.
     */
    function genesis_meta_url()
    {
    }
    /**
     * Echo custom canonical link tag.
     *
     * Remove the default WordPress canonical tag, and use our custom
     * one. Gives us more flexibility and effectiveness.
     *
     * @since 1.0.0
     */
    function genesis_canonical()
    {
    }
    /**
     * Echo header scripts in to wp_head().
     *
     * Allows shortcodes.
     *
     * Applies `genesis_header_scripts` filter on value stored in header_scripts setting.
     *
     * Also echoes scripts from the post's custom field.
     *
     * @since 1.0.0
     */
    function genesis_header_scripts()
    {
    }
    /**
     * Output page-specific body scripts if their position is set to 'top'.
     *
     * If the position is 'bottom' or null, output occurs in genesis_footer_scripts() instead.
     *
     * @since 2.5.0
     */
    function genesis_page_specific_body_scripts()
    {
    }
    /**
     * Activate the custom header feature.
     *
     * It gets arguments passed through add_theme_support(), defines the constants, and calls `add_custom_image_header()`.
     *
     * Applies `genesis_custom_header_defaults` filter.
     *
     * @since 1.6.0
     *
     * @return void Return early if `custom-header` or `genesis-custom-header` are not supported in the theme.
     */
    function genesis_custom_header()
    {
    }
    /**
     * Add support for the WordPress custom logo feature.
     *
     * Passes add_theme_support() arguments from `genesis-custom-logo` to `custom-logo`.
     *
     * Applies `genesis_custom_logo_defaults` filter.
     *
     * @since 3.1.0
     *
     * @return void Return early if `custom-logo` is supported or `genesis-custom-logo` is not supported in the theme.
     */
    function genesis_custom_logo()
    {
    }
    /**
     * Custom header callback.
     *
     * It outputs special CSS to the document head, modifying the look of the header based on user input.
     *
     * @since 1.6.0
     *
     * @return void Return early if `custom-header` not supported, user specified own callback, or no options set.
     */
    function genesis_custom_header_style()
    {
    }
    /**
     * Echo the opening structural markup for the header.
     *
     * @since 1.2.0
     */
    function genesis_header_markup_open()
    {
    }
    /**
     * Echo the opening structural markup for the header.
     *
     * @since 1.2.0
     */
    function genesis_header_markup_close()
    {
    }
    /**
     * Echo the default header, including the #title-area div, along with #title and #description, as well as the .widget-area.
     *
     * Does the `genesis_site_title`, `genesis_site_description` and `genesis_header_right` actions.
     *
     * @since 1.0.2
     *
     * @global $wp_registered_sidebars Holds all of the registered sidebars.
     */
    function genesis_do_header()
    {
    }
    /**
     * Adds the WordPress custom logo inside the title area, before the site title hook.
     *
     * @since 3.1.0
     */
    function genesis_output_custom_logo()
    {
    }
    /**
     * Echo the site title into the header.
     *
     * Depending on the SEO option set by the user, this will either be wrapped in an `h1` or `p` element.
     * The Site Title will be wrapped in a link to the homepage, if a custom logo is not in use.
     *
     * Applies the `genesis_seo_title` filter before echoing.
     *
     * @since 1.1.0
     */
    function genesis_seo_site_title()
    {
    }
    /**
     * Echo the site description into the header.
     *
     * Depending on the SEO option set by the user, this will either be wrapped in an `h1` or `p` element.
     *
     * Applies the `genesis_seo_description` filter before echoing.
     *
     * @since 1.1.0
     */
    function genesis_seo_site_description()
    {
    }
    /**
     * Sets attributes for the custom menu widget if used in the Header Right widget area.
     *
     * @since 1.9.0
     *
     * @param array $args Navigation menu arguments.
     * @return array $args Arguments for custom menu widget used in Header Right widget area.
     */
    function genesis_header_menu_args($args)
    {
    }
    /**
     * Wrap the header navigation menu in its own nav tags with markup API.
     *
     * @since 2.0.0
     *
     * @param string $menu Menu output.
     * @return string $menu Modified menu output, or original if not HTML5.
     */
    function genesis_header_menu_wrap($menu)
    {
    }
    /**
     * Add skip links for screen readers and keyboard navigation.
     *
     * @since 2.2.0
     *
     * @return void Return early if skip links are not supported.
     */
    function genesis_skip_links()
    {
    }
    /**
     * Filter the content width based on the user selected layout.
     *
     * @since 1.6.0
     *
     * @param int $default Default width.
     * @param int $small   Small width.
     * @param int $large   Large width.
     * @return int Content width.
     */
    function genesis_content_width($default, $small, $large)
    {
    }
    /**
     * Add custom field body class(es) to the body classes.
     *
     * It accepts values from a per-post or per-page custom field, and only outputs when viewing a singular page.
     *
     * @since 1.4.0
     *
     * @param array $classes Existing body classes.
     * @return array Amended body classes.
     */
    function genesis_custom_body_class(array $classes)
    {
    }
    /**
     * Add header-* classes to the body class.
     *
     * We can use pseudo-variables in our CSS file, which helps us achieve multiple header layouts with minimal code.
     *
     * @since 1.0.0
     *
     * @param array $classes Existing body classes.
     * @return array Amended body classes.
     */
    function genesis_header_body_classes(array $classes)
    {
    }
    /**
     * Add site layout classes to the body classes.
     *
     * We can use pseudo-variables in our CSS file, which helps us achieve multiple site layouts with minimal code.
     *
     * @since 1.0.0
     *
     * @param array $classes Existing body classes.
     * @return array Amended body classes.
     */
    function genesis_layout_body_classes(array $classes)
    {
    }
    /**
     * Adds a `genesis-title-hidden` body class if title output is suppressed on the current page.
     *
     * @since 3.1.0
     *
     * @param array $classes Existing body classes.
     * @return array Amended body classes.
     */
    function genesis_title_hidden_body_class(array $classes)
    {
    }
    /**
     * Adds a `genesis-breadcrumbs-hidden` body class if breadcrumbs are hidden on the current page.
     *
     * @since 3.1.0
     *
     * @param array $classes Existing body classes.
     * @return array Amended body classes.
     */
    function genesis_breadcrumbs_hidden_body_class(array $classes)
    {
    }
    /**
     * Adds a `genesis-singular-image-hidden` body class if “hide featured image” is enabled.
     *
     * @since 3.1.0
     *
     * @param array $classes Existing body classes.
     * @return array Amended body classes.
     */
    function genesis_singular_image_hidden_body_class(array $classes)
    {
    }
    /**
     * Adds a `genesis-singular-image-visible` body class.
     *
     * @since 3.1.1
     *
     * @param array $classes Existing body classes.
     * @return array Amended body classes.
     */
    function genesis_singular_image_visible_body_class(array $classes)
    {
    }
    /**
     * Adds `genesis-footer-widgets-hidden` and genesis-footer-widgets-visible` body classes if footer widgets
     * are supported by the child theme and the Footer Widgets Panel is available in the Genesis Sidebar.
     *
     * @since 3.2.0
     *
     * @param array $classes Existing body classes.
     * @return array Amended body classes.
     */
    function genesis_footer_widgets_hidden_body_class(array $classes)
    {
    }
    /**
     * Add archive-no-results body class on empty archive pages.
     *
     * Allows CSS styling of archive pages that have no results.
     *
     * @since 2.2.0
     *
     * @global WP_Query $wp_query Query object.
     *
     * @param array $classes Existing body classes.
     * @return array Amended body classes.
     */
    function genesis_archive_no_results_body_class(array $classes)
    {
    }
    /**
     * Add style selector classes to the body classes.
     *
     * Enables style selector support in child themes, which helps us achieve multiple site styles with minimal code.
     *
     * @since 1.8.0
     *
     * @param array $classes Existing body classes.
     * @return array Amended body classes.
     */
    function genesis_style_selector_body_classes(array $classes)
    {
    }
    /**
     * Adds a custom class to the custom post type archive body classes.
     *
     * It accepts a value from the archive settings page.
     *
     * @since 2.0.0
     *
     * @param array $classes Existing body classes.
     * @return array Amended body classes.
     */
    function genesis_cpt_archive_body_class(array $classes)
    {
    }
    /**
     * Output the sidebar.php file if layout allows for it.
     *
     * @since 1.0.0
     */
    function genesis_get_sidebar()
    {
    }
    /**
     * Output the sidebar_alt.php file if layout allows for it.
     *
     * @since 1.0.0
     */
    function genesis_get_sidebar_alt()
    {
    }
    /**
     * Attach a loop to the `genesis_loop` output hook so we can get some front-end output.
     *
     * @since 1.1.0
     */
    function genesis_do_loop()
    {
    }
    /**
     * Standard loop, meant to be executed without modification in most circumstances where content needs to be displayed.
     *
     * It outputs basic wrapping HTML, but uses hooks to do most of its content output like title, content, post information
     * and comments.
     *
     * The action hooks called are:
     *
     *  - `genesis_before_entry`
     *  - `genesis_entry_header`
     *  - `genesis_before_entry_content`
     *  - `genesis_entry_content`
     *  - `genesis_after_entry_content`
     *  - `genesis_entry_footer`
     *  - `genesis_after_endwhile`
     *  - `genesis_loop_else` (only if no posts were found)
     *
     * @since 1.1.0
     *
     * @return void Return early after legacy loop if not supporting HTML5.
     */
    function genesis_standard_loop()
    {
    }
    /**
     * Custom loop, meant to be executed when a custom query is needed.
     *
     * It accepts arguments in query_posts style format to modify the custom `WP_Query` object.
     *
     * It outputs basic wrapping HTML, but uses hooks to do most of its content output like title, content, post information,
     * and comments.
     *
     * The arguments can be passed in via the `genesis_custom_loop_args` filter.
     *
     * The action hooks called are the same as {@link genesis_standard_loop()}.
     *
     * @since 1.1.0
     *
     * @global WP_Query $wp_query Query object.
     * @global int      $more
     *
     * @param array $args Loop configuration.
     */
    function genesis_custom_loop($args = [])
    {
    }
    /**
     * The grid loop - a specific implementation of a custom loop.
     *
     * Outputs markup compatible with a Feature + Grid style layout.
     *
     * The arguments can be filtered by the `genesis_grid_loop_args` filter.
     *
     * @since 1.5.0
     *
     * @global array $_genesis_loop_args Associative array for grid loop configuration.
     *
     * @param array $args Associative array for grid loop configuration.
     */
    function genesis_grid_loop($args = [])
    {
    }
    /**
     * Filter the post classes to output custom classes for the feature and grid layout.
     *
     * Based on the grid loop args and the loop counter.
     *
     * Applies the `genesis_grid_loop_post_class` filter.
     *
     * The `&1` is a test to see if it is odd. `2&1 = 0` (even), `3&1 = 1` (odd).
     *
     * @since 1.5.0
     *
     * @global array    $_genesis_loop_args Associative array for grid loop config.
     * @global WP_Query $wp_query           Query object.
     *
     * @param array $classes Existing post classes.
     * @return array Amended post classes.
     */
    function genesis_grid_loop_post_class(array $classes)
    {
    }
    /**
     * Output specially formatted content, based on the grid loop args.
     *
     * @since 1.5.0
     *
     * @global array $_genesis_loop_args Associative array for grid loop configuration.
     */
    function genesis_grid_loop_content()
    {
    }
    /**
     * Modify the global $_genesis_displayed_ids each time a loop iterates.
     *
     * Keep track of what posts have been shown on any given page by adding each ID to a global array, which can be used any
     * time by other loops to prevent posts from being displayed twice on a page.
     *
     * @since 2.0.0
     *
     * @global array $_genesis_displayed_ids Array of displayed post IDs.
     */
    function genesis_add_id_to_global_exclude()
    {
    }
    /**
     * Pass nav menu link attributes through attribute parser.
     *
     * Adds nav menu link attributes via the Genesis markup API.
     *
     * @since 2.2.0
     *
     * @param array $atts {
     *      The HTML attributes applied to the menu item's link element, empty strings are ignored.
     *
     *      @type string $title Title attribute.
     *      @type string $target Target attribute.
     *      @type string $rel The rel attribute.
     *      @type string $href The href attribute.
     * }
     * @return array Maybe modified menu attributes array.
     */
    function genesis_nav_menu_link_attributes($atts)
    {
    }
    /**
     * Register the custom menu locations, if theme has support for them.
     *
     * Does the `genesis_register_nav_menus` action.
     *
     * @since 1.8.0
     *
     * @return void Return early if `genesis-menus` are not supported.
     */
    function genesis_register_nav_menus()
    {
    }
    /**
     * Echo the "Primary Navigation" menu.
     *
     * Applies the `genesis_do_nav` filter.
     *
     * @since 1.0.0
     */
    function genesis_do_nav()
    {
    }
    /**
     * Echo the "Secondary Navigation" menu.
     *
     * Applies the `genesis_do_subnav` filter.
     *
     * @since 1.0.0
     */
    function genesis_do_subnav()
    {
    }
    /**
     * Genesis Framework.
     *
     * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
     * Please do all modifications in the form of a child theme.
     *
     * @package Genesis\Entry
     * @author  StudioPress
     * @license GPL-2.0-or-later
     * @link    https://my.studiopress.com/themes/genesis/
     */
    /**
     * Restore all default post loop output by re-hooking all default functions.
     *
     * Useful in the event that you need to unhook something in a particular context, but don't want to restore it for all
     * subsequent loop instances.
     *
     * Calls `genesis_reset_loops` action after everything has been re-hooked.
     *
     * @since 1.5.0
     *
     * @global array $_genesis_loop_args Associative array for grid loop configuration.
     */
    function genesis_reset_loops()
    {
    }
    /**
     * Add `entry` post class, remove `hentry` post class if HTML5.
     *
     * @since 1.9.0
     *
     * @param array $classes Existing post classes.
     * @return array Amended post classes. Not modified if in WP admin, or doing Ajax request.
     */
    function genesis_entry_post_class($classes)
    {
    }
    /**
     * Add a custom post class, saved as a custom field.
     *
     * @since 1.4.0
     *
     * @param array $classes Existing post classes.
     * @return array Amended post classes. Not modified if in WP admin.
     */
    function genesis_custom_post_class(array $classes)
    {
    }
    /**
     * Featured Image Post Class
     *
     * @since 2.2.0
     *
     * @param array $classes Existing post classes.
     * @return array Amended post classes. Not modified if in WP admin.
     */
    function genesis_featured_image_post_class($classes)
    {
    }
    /**
     * Add a post format icon.
     *
     * Adds an image, corresponding to the post format, before the post title.
     *
     * @since 1.4.0
     *
     * @return void Return early if `post-formats` or `genesis-post-format-images` are not supported.
     */
    function genesis_do_post_format_image()
    {
    }
    /**
     * Is the entry header hidden for the current page?
     *
     * Indicates that the “Hide title” checkbox is enabled and checked.
     *
     * @since 3.1.0
     *
     * @return bool True if title is hidden, false otherwise.
     */
    function genesis_entry_header_hidden_on_current_page()
    {
    }
    /**
     * Echo the opening structural markup for the entry header.
     *
     * @since 3.1.0 Suppress output if “hide title” checkbox is ticked.
     * @since 2.0.0
     */
    function genesis_entry_header_markup_open()
    {
    }
    /**
     * Echo the closing structural markup for the entry header.
     *
     * @since 3.1.0 Suppress output if “hide title” checkbox is ticked.
     * @since 2.0.0
     */
    function genesis_entry_header_markup_close()
    {
    }
    /**
     * Echo the title of a post.
     *
     * The `genesis_post_title_text` filter is applied on the text of the title, while the `genesis_post_title_output`
     * filter is applied on the echoed markup.
     *
     * @since 3.1.0 Suppress output if “hide title” checkbox is ticked.
     * @since 1.1.0
     *
     * @return void Return early if the filtered trimmed title is an empty string.
     */
    function genesis_do_post_title()
    {
    }
    /**
     * Echo the post info (byline) under the post title.
     *
     * By default, only does post info on posts.
     *
     * The post info makes use of several shortcodes by default, and the whole output
     * is filtered via `genesis_post_info` before echoing.
     *
     * @since 1.0.0
     *
     * @return void Return early if post type lacks support for `genesis-entry-meta-before-content`.
     */
    function genesis_post_info()
    {
    }
    /**
     * Echo the post image on archive pages.
     *
     * If this an archive page and the option is set to show thumbnail, then it gets the image size as per the theme
     * setting, wraps it in the post permalink and echoes it.
     *
     * @since 1.1.0
     */
    function genesis_do_post_image()
    {
    }
    /**
     * Gets the singular image for the current post.
     *
     * Applies the `genesis_singular_image_size` filter.
     *
     * @since 3.1.1.
     *
     * @return string|bool Singular image element HTML or `false`.
     */
    function genesis_get_singular_image()
    {
    }
    /**
     * Echoes the post image on singular pages.
     *
     * If this is a singular page and the option is set to show the features image, then it gets the image size
     * as per the post type supports and echoes it.
     *
     * @since 3.1.0
     */
    function genesis_do_singular_image()
    {
    }
    /**
     * Echo the post content.
     *
     * On single posts or pages it echoes the full content, and optionally the trackback string if enabled. On single pages,
     * also adds the edit link after the content.
     *
     * Elsewhere it displays either the excerpt, limited content, or full content.
     *
     * Applies the `genesis_edit_post_link` filter.
     *
     * @since 1.1.0
     */
    function genesis_do_post_content()
    {
    }
    /**
     * Display page links for paginated posts (i.e. includes the <!--nextpage--> Quicktag one or more times).
     *
     * @since 2.0.0
     */
    function genesis_do_post_content_nav()
    {
    }
    /**
     * Show permalink if no title.
     *
     * If the entry has no title, this is a way to display a link to the full post.
     *
     * Applies the `genesis_post_permalink` filter.
     *
     * @since 2.0.0
     */
    function genesis_do_post_permalink()
    {
    }
    /**
     * Echo filterable content when there are no posts to show.
     *
     * The applied filter is `genesis_noposts_text`.
     *
     * @since 1.1.0
     */
    function genesis_do_noposts()
    {
    }
    /**
     * Echo the opening structural markup for the entry footer.
     *
     * @since 2.0.0
     */
    function genesis_entry_footer_markup_open()
    {
    }
    /**
     * Echo the closing structural markup for the entry footer.
     *
     * @since 2.0.0
     */
    function genesis_entry_footer_markup_close()
    {
    }
    /**
     * Echo the post meta after the post content.
     *
     * By default, does post meta on all public post types except page.
     *
     * The post info makes use of a couple of shortcodes by default, and the whole output is filtered via
     * `genesis_post_meta` before echoing.
     *
     * @since 1.0.0
     *
     * @return void Return early if post type lacks support for `genesis-entry-meta-after-content`.
     */
    function genesis_post_meta()
    {
    }
    /**
     * Conditionally add the author box after single posts or pages.
     *
     * @since 1.0.0
     *
     * @return void Return early if not a single post or page, or post type does not support `author`.
     */
    function genesis_do_author_box_single()
    {
    }
    /**
     * Return the author box and its contents.
     *
     * @since 2.7.0
     *
     * @global WP_User $authordata Author (user) object.
     *
     * @param string $context Optional. Allows different author box markup for different contexts, specifically 'single'.
     *                        Default is empty string.
     * @return string HTML for author box.
     */
    function genesis_get_author_box($context = '')
    {
    }
    /**
     * Return the author box and its contents by WP_User ID.
     *
     * The title is filterable via `genesis_author_box_title`,
     *      the description is filterable via `genesis_author_box_description`,
     *      and the gravatar size is filterable via `genesis_author_box_gravatar_size`.
     *
     * The final output is filterable via `genesis_author_box`, which passes many variables through.
     *
     * @since 2.7.0
     *
     * @param  int    $user_id Required. The user ID to get the author box from.
     * @param  string $context Optional. Allows different author box markup for different contexts, specifically 'single'.
     *                         Default is empty string.
     * @return string HTML for author box.
     */
    function genesis_get_author_box_by_user($user_id, $context = '')
    {
    }
    /**
     * Echo the author box and its contents.
     *
     * The title is filterable via `genesis_author_box_title`, and the gravatar size is filterable via
     * `genesis_author_box_gravatar_size`.
     *
     * The final output is filterable via `genesis_author_box`, which passes many variables through.
     *
     * @since 1.3.0
     * @since 2.7.0 Logic moved to `genesis_get_author_box()` and second parameter deprecated.
     *
     * @param string $context    Optional. Allows different author box markup for different contexts, specifically 'single'.
     *                           Default is empty string.
     * @param bool   $deprecated Deprecated.
     * @return string HTML for author box if `$deprecated` param is falsy.
     */
    function genesis_author_box($context = '', $deprecated = \null)
    {
    }
    /**
     * Display after-entry widget area on the genesis_after_entry action hook.
     *
     * @since 2.1.0
     *
     * @return void Return early if not singular, or post type does not support after entry widget area.
     */
    function genesis_after_entry_widget_area()
    {
    }
    /**
     * Conditionally echo archive pagination in a format dependent on chosen setting.
     *
     * This is shown at the end of archives to get to another page of entries.
     *
     * @since 1.0.0
     */
    function genesis_posts_nav()
    {
    }
    /**
     * Echo archive pagination in Previous Posts / Next Posts format.
     *
     * Applies `genesis_prev_link_text` and `genesis_next_link_text` filters.
     *
     * @since 1.0.0
     */
    function genesis_prev_next_posts_nav()
    {
    }
    /**
     * Echo archive pagination in page numbers format.
     *
     * Applies the `genesis_prev_link_text` and `genesis_next_link_text` filters.
     *
     * The links, if needed, are ordered as:
     *
     *  * previous page arrow,
     *  * first page,
     *  * up to two pages before current page,
     *  * current page,
     *  * up to two pages after the current page,
     *  * last page,
     *  * next page arrow.
     *
     * @since 1.0.0
     *
     * @global WP_Query $wp_query Query object.
     *
     * @return void Return early if on a single post or page, or only one page exists.
     */
    function genesis_numeric_posts_nav()
    {
    }
    /**
     * Display links to previous and next entry.
     *
     * @since 2.3.0
     *
     * @return void Return early if not singular or post type doesn't support `genesis-adjacent-entry-nav`.
     */
    function genesis_adjacent_entry_nav()
    {
    }
    /**
     * Helper function to display adjacent entry navigation on single posts. Must be hooked to `genesis_after_entry` at priority 10 or earlier to work properly.
     *
     * @since 1.5.1
     */
    function genesis_prev_next_post_nav()
    {
    }
    /**
     * Echo primary sidebar default content.
     *
     * Only shows if sidebar is empty, and current user has the ability to edit theme options (manage widgets).
     *
     * @since 1.2.0
     */
    function genesis_do_sidebar()
    {
    }
    /**
     * Echo alternate sidebar default content.
     *
     * Only shows if sidebar is empty, and current user has the ability to edit theme options (manage widgets).
     *
     * @since 1.2.0
     */
    function genesis_do_sidebar_alt()
    {
    }
    /**
     * Template for default widget area content.
     *
     * @since 2.0.0
     *
     * @param string $name Name of the widget area e.g. `__( 'Secondary Sidebar Widget Area', 'yourtextdomain' )`.
     */
    function genesis_default_widget_area_content($name)
    {
    }
    /**
     * Register widgets for use in the Genesis theme.
     *
     * @since 1.7.0
     */
    function genesis_load_widgets()
    {
    }
    /**
     * Temporary function to work around the default widgets that get added to
     * Header Right when switching themes.
     *
     * The $defaults array contains a list of the IDs of the widgets that are added
     * to the first sidebar in a new default install. If this exactly matches the
     * widgets in Header Right after switching themes, then they are removed.
     *
     * This works around a perceived WP problem for new installs.
     *
     * If a user amends the list of widgets in the first sidebar before switching to
     * a Genesis child theme, then this function won't do anything.
     *
     * @since 1.8.0
     *
     * @return void Return early if not just switched to a new theme.
     */
    function genesis_remove_default_widgets_from_header_right()
    {
    }
    /**
     * Echo the title with the search term.
     *
     * @since 1.9.0
     */
    function genesis_do_search_title()
    {
    }
}