<?php
/**
 * NatureSpace Theme Customizer.
 * @package NatureSpace
 * @since NatureSpace 2.0.0
*/

/**
 * Default values - backwards compatibility for older NatureSpace versions.
 *  
*/ 
function naturespace_default_options($key) {

$naturespace_theme_options = get_option('naturespace_options');

/* Define the array of defaults */ 
$naturespace_defaults = array(
			'naturespace_css' => 'Green (default)',
			'naturespace_layout_width' => 'Boxed',
			'naturespace_display_breadcrumb' => 'Display',
			'naturespace_display_sidebar' => 'Display',
			'naturespace_display_sidebar_archives' => 'Display',
			'naturespace_header_layout' => 'Wide',
			'naturespace_display_header_image' => 'Everywhere',
			'naturespace_page_title_width' => '50',
			'naturespace_header_menu_width' => '50',
			'naturespace_logo_url' => '',
			'naturespace_header_address' => '',
			'naturespace_header_email' => '',
			'naturespace_header_phone' => '',
			'naturespace_header_skype' => '',
			'naturespace_header_image_headline' => '',
			'naturespace_header_image_link_url' => '',
			'naturespace_header_image_link_text' => '',
			'naturespace_display_image_post' => 'Display',
			'naturespace_display_meta_post' => 'Display',
			'naturespace_next_preview_post' => 'Display',
			'naturespace_display_image_page' => 'Display',
			'naturespace_post_entry_format' => 'One Column',
			'naturespace_display_meta_post_entry' => 'Display',
      'naturespace_featured_image_size' => 'Small',
			'naturespace_content_archives' => 'Excerpt',
			'naturespace_display_site_description' => 'Display',
			'naturespace_body_google_fonts' => 'default',
			'naturespace_headings_google_fonts' => 'default',
			'naturespace_headline_google_fonts' => 'default',
			'naturespace_postentry_google_fonts' => 'default',
			'naturespace_sidebar_google_fonts' => 'default',
			'naturespace_menu_google_fonts' => 'default',
			'naturespace_own_css' => '' );

$naturespace_theme_options = wp_parse_args( $naturespace_theme_options, $naturespace_defaults );

if ( isset($naturespace_theme_options[$key]) ) {
return $naturespace_theme_options[$key]; } else {
return false;
}}

/**
 * Register Customizer sections and options.
 *  
*/
function naturespace_customize_register($wp_customize){

$naturespace_fonts = array(
			'default' => 'default',	
			'Abel' => 'Abel',			
			'Aclonica' => 'Aclonica',
			'Actor' => 'Actor',
			'Adamina' => 'Adamina',
			'Aldrich' => 'Aldrich',
			'Alegreya Sans' => 'Alegreya Sans',
			'Alice' => 'Alice',
			'Alike' => 'Alike',
			'Allan' => 'Allan',
			'Allerta' => 'Allerta',
      'Amarante' => 'Amarante',
			'Amaranth' => 'Amaranth',
      'Andika' => 'Andika',
			'Antic' => 'Antic',
			'Anton' => 'Anton',
			'Arimo' => 'Arimo',	
			'Artifika' => 'Artifika',
			'Arvo' => 'Arvo',
			'Bitter' => 'Bitter',
			'Brawler' => 'Brawler',
			'Buda' => 'Buda',	
      'Butcherman' => 'Butcherman',	
      'Cabin' => 'Cabin',
			'Candal' => 'Candal',
			'Cantarell' => 'Cantarell',	
      'Cherry Swash' => 'Cherry Swash',				
			'Chivo' => 'Chivo',			
			'Coda' => 'Coda',	
      'Concert One' => 'Concert One',		
			'Copse' => 'Copse',
			'Corben' => 'Corben',
			'Cousine' => 'Cousine',			
			'Coustard' => 'Coustard',
			'Covered By Your Grace' => 'Covered By Your Grace',
			'Crafty Girls' => 'Crafty Girls',
			'Crimson Text' => 'Crimson Text',
			'Crushed' => 'Crushed',
			'Cuprum' => 'Cuprum',
			'Damion' => 'Damion',
			'Dancing Script' => 'Dancing Script',
			'Dawning of a New Day' => 'Dawning of a New Day',
			'Days One' => 'Days One',
			'Delius' => 'Delius',
			'Delius Swash Caps' => 'Delius Swash Caps',
			'Delius Unicase' => 'Delius Unicase',
			'Didact Gothic' => 'Didact Gothic',
			'Dorsa' => 'Dorsa',
			'Dosis' => 'Dosis',
			'Droid Sans' => 'Droid Sans',
			'Droid Sans Mono' => 'Droid Sans Mono',
      'Droid Serif' => 'Droid Serif',
			'EB Garamond' => 'EB Garamond',
			'Expletus Sans' => 'Expletus Sans',
			'Fanwood Text' => 'Fanwood Text',
			'Federo' => 'Federo',
			'Fontdiner Swanky' => 'Fontdiner Swanky',
			'Forum' => 'Forum',
			'Francois One' => 'Francois One',
			'Gentium Basic' => 'Gentium Basic',
			'Gentium Book Basic' => 'Gentium Book Basic',
			'Geo' => 'Geo',
			'Geostar' => 'Geostar',
			'Geostar Fill' => 'Geostar Fill',
      'Gilda Display' => 'Gilda Display',
			'Give You Glory' => 'Give You Glory',
			'Gloria Hallelujah' => 'Gloria Hallelujah',
			'Goblin One' => 'Goblin One',
			'Goudy Bookletter 1911' => 'Goudy Bookletter 1911',
			'Gravitas One' => 'Gravitas One',
			'Gruppo' => 'Gruppo',
			'Hammersmith One' => 'Hammersmith One',
			'Hind' => 'Hind',
			'Holtwood One SC' => 'Holtwood One SC',
			'Homemade Apple' => 'Homemade Apple',
			'Inconsolata' => 'Inconsolata',
			'Indie Flower' => 'Indie Flower',
      'IM Fell English' => 'IM Fell English',
			'Irish Grover' => 'Irish Grover',
			'Irish Growler' => 'Irish Growler',
			'Istok Web' => 'Istok Web',
			'Judson' => 'Judson',
			'Julee' => 'Julee',
			'Just Another Hand' => 'Just Another Hand',
			'Just Me Again Down Here' => 'Just Me Again Down Here',
			'Kameron' => 'Kameron',
			'Kelly Slab' => 'Kelly Slab',
			'Kenia' => 'Kenia',
			'Kranky' => 'Kranky',
			'Kreon' => 'Kreon',
			'Kristi' => 'Kristi',
			'La Belle Aurore' => 'La Belle Aurore',
      'Lato' => 'Lato',
			'League Script' => 'League Script',
			'Leckerli One' => 'Leckerli One',
			'Lekton' => 'Lekton',
      'Lily Script One' => 'Lily Script One',
			'Limelight' => 'Limelight',
			'Lobster' => 'Lobster',
			'Lobster Two' => 'Lobster Two',
			'Lora' => 'Lora',
			'Love Ya Like A Sister' => 'Love Ya Like A Sister',
			'Loved by the King' => 'Loved by the King',
      'Lovers Quarrel' => 'Lovers Quarrel',
			'Luckiest Guy' => 'Luckiest Guy',
			'Maiden Orange' => 'Maiden Orange',
			'Mako' => 'Mako',
			'Marvel' => 'Marvel',
			'Maven Pro' => 'Maven Pro',
			'Meddon' => 'Meddon',
			'MedievalSharp' => 'MedievalSharp',
      'Medula One' => 'Medula One',
			'Megrim' => 'Megrim',
			'Merienda One' => 'Merienda One',
			'Merriweather' => 'Merriweather',
			'Metrophobic' => 'Metrophobic',
			'Michroma' => 'Michroma',
			'Miltonian Tattoo' => 'Miltonian Tattoo',
			'Miltonian' => 'Miltonian',
			'Modern Antiqua' => 'Modern Antiqua',
			'Molengo' => 'Molengo',
      'Monofett' => 'Monofett',
			'Monoton' => 'Monoton',
      'Montaga' => 'Montaga',
			'Montez' => 'Montez',
      'Montserrat' => 'Montserrat',
			'Mountains of Christmas' => 'Mountains of Christmas',
			'Muli' => 'Muli',
			'Neucha' => 'Neucha',
			'Neuton' => 'Neuton',
			'News Cycle' => 'News Cycle',
			'Nixie One' => 'Nixie One',
			'Nobile' => 'Nobile',
			'Noto Sans' => 'Noto Sans',
			'Nova Cut' => 'Nova Cut',
			'Nova Flat' => 'Nova Flat',
			'Nova Mono' => 'Nova Mono',
			'Nova Oval' => 'Nova Oval',
			'Nova Round' => 'Nova Round',
			'Nova Script' => 'Nova Script',
			'Nova Slim' => 'Nova Slim',
			'Nova Square' => 'Nova Square',
			'Numans' => 'Numans',
			'Nunito' => 'Nunito',
      'Open Sans' => 'Open Sans',
			'Oswald' => 'Oswald',
			'Over the Rainbow' => 'Over the Rainbow',
			'Ovo' => 'Ovo',
			'Oxygen' => 'Oxygen',
			'Pacifico' => 'Pacifico',
			'Passero One' => 'Passero One',
			'Passion One' => 'Passion One',
			'Patrick Hand' => 'Patrick Hand',
			'Paytone One' => 'Paytone One',
			'Permanent Marker' => 'Permanent Marker',
			'Philosopher' => 'Philosopher',
			'Play' => 'Play',
			'Playfair Display' => 'Playfair Display',
			'Podkova' => 'Podkova',
			'Poller One' => 'Poller One',
			'Pompiere' => 'Pompiere',
			'Prata' => 'Prata',
			'Prociono' => 'Prociono',
			'PT Sans' => 'PT Sans',
			'PT Sans Caption' => 'PT Sans Caption',
			'PT Sans Narrow' => 'PT Sans Narrow',
			'PT Serif' => 'PT Serif',
			'PT Serif Caption' => 'PT Serif Caption',
			'Puritan' => 'Puritan',
			'Quattrocento' => 'Quattrocento',
			'Quattrocento Sans' => 'Quattrocento Sans',
			'Questrial' => 'Questrial',
			'Radley' => 'Radley',
			'Raleway' => 'Raleway', 
      'Rationale' => 'Rationale',
			'Redressed' => 'Redressed',
      'Reenie Beanie' => 'Reenie Beanie', 
      'Roboto' => 'Roboto',
      'Roboto Condensed' => 'Roboto Condensed',
			'Rock Salt' => 'Rock Salt',
			'Rochester' => 'Rochester',
			'Rokkitt' => 'Rokkitt',
			'Rosario' => 'Rosario',
			'Ruslan Display' => 'Ruslan Display',
      'Sancreek' => 'Sancreek',
			'Sansita One' => 'Sansita One',
			'Schoolbell' => 'Schoolbell',
			'Shadows Into Light' => 'Shadows Into Light',
			'Shanti' => 'Shanti',
			'Short Stack' => 'Short Stack',
			'Sigmar One' => 'Sigmar One',
			'Six Caps' => 'Six Caps',
			'Slackey' => 'Slackey',
			'Smokum' => 'Smokum',
			'Smythe' => 'Smythe',
			'Sniglet' => 'Sniglet',
			'Snippet' => 'Snippet',
			'Sorts Mill Goudy' => 'Sorts Mill Goudy',
			'Special Elite' => 'Special Elite',
			'Spinnaker' => 'Spinnaker',
			'Stardos Stencil' => 'Stardos Stencil',
			'Sue Ellen Francisco' => 'Sue Ellen Francisco',
			'Sunshiney' => 'Sunshiney',
			'Swanky and Moo Moo' => 'Swanky and Moo Moo',
			'Syncopate' => 'Syncopate',
			'Tangerine' => 'Tangerine',
			'Tenor Sans' => 'Tenor Sans',
			'Terminal Dosis Light' => 'Terminal Dosis Light',
			'Tinos' => 'Tinos',
			'Titillium Web' => 'Titillium Web',
			'Tulpen One' => 'Tulpen One',
			'Ubuntu' => 'Ubuntu',
			'Ultra' => 'Ultra',
      'UnifrakturCook' => 'UnifrakturCook',
			'UnifrakturMaguntia' => 'UnifrakturMaguntia',
      'Unkempt' => 'Unkempt',
			'Unna' => 'Unna',
			'Varela' => 'Varela',
			'Varela Round' => 'Varela Round',
			'Vibur' => 'Vibur',
			'Vidaloka' => 'Vidaloka',
			'Volkhov' => 'Volkhov',
			'Vollkorn' => 'Vollkorn',
			'Voltaire' => 'Voltaire',
			'VT323' => 'VT323',
			'Waiting for the Sunrise' => 'Waiting for the Sunrise',
			'Wallpoet' => 'Wallpoet',
			'Walter Turncoat' => 'Walter Turncoat',
			'Wire One' => 'Wire One',
			'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
			'Yellowtail' => 'Yellowtail',
			'Yeseva One' => 'Yeseva One',
			'Zeyada' => 'Zeyada');
      
/**
 * Textarea custom control.
 *  
*/ 
class naturespace_customize_textarea_control extends WP_Customize_Control {
    public $type = 'textarea'; 
    public function render_content() { ?>
        <label>
        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
        </label>
<?php }}

/**
 * Sections and Options.
 *  
*/     
    $wp_customize->add_section('naturespace_general_settings', array(
        'title'    => __('NatureSpace General Settings', 'naturespace'),
        'description' => '',
        'priority' => 120,
    ));
    $wp_customize->add_section('naturespace_header_settings', array(
        'title'    => __('NatureSpace Header Settings', 'naturespace'),
        'description' => '',
        'priority' => 130,
    ));
    $wp_customize->add_section('naturespace_posts_settings', array(
        'title'    => __('NatureSpace Posts/Pages Settings', 'naturespace'),
        'description' => '',
        'priority' => 140,
    ));
    $wp_customize->add_section('naturespace_post_entries_settings', array(
        'title'    => __('NatureSpace Post Entries Settings', 'naturespace'),
        'description' => '',
        'priority' => 150,
    ));
    $wp_customize->add_section('naturespace_font_settings', array(
        'title'    => __('NatureSpace Font Settings', 'naturespace'),
        'description' => '',
        'priority' => 160,
    ));
 
    //  =============================
    //  = Color Scheme              =
    //  =============================
    $wp_customize->add_setting('naturespace_css', array(
        'default'        => naturespace_default_options('naturespace_css'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_css_control', array(
        'label'      => __('Color Scheme', 'naturespace'),
        'section'    => 'naturespace_general_settings',
        'settings'   => 'naturespace_css',
        'type'       => 'radio',
        'choices'    => array(
            'Green (default)' => __( 'Green (default)' , 'naturespace' ),
            'Blue' => __( 'Blue' , 'naturespace' ),
            'Pink' => __( 'Pink' , 'naturespace' ),
        ),
    ));
    
    //  =============================
    //  = Layout Style              =
    //  =============================
    $wp_customize->add_setting('naturespace_layout_width', array(
        'default'        => naturespace_default_options('naturespace_layout_width'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_layout_width_control', array(
        'label'      => __('Layout Style', 'naturespace'),
        'section'    => 'naturespace_general_settings',
        'settings'   => 'naturespace_layout_width',
        'type'       => 'radio',
        'choices'    => array(
            'Boxed' => __( 'Boxed' , 'naturespace' ),
            'Wide' => __( 'Wide' , 'naturespace' ),
        ),
    ));
    
    //  =================================
    //  = Display Breadcrumb Navigation =
    //  =================================
    $wp_customize->add_setting('naturespace_display_breadcrumb', array(
        'default'        => naturespace_default_options('naturespace_display_breadcrumb'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_display_breadcrumb_control', array(
        'label'      => __('Display Breadcrumb Navigation', 'naturespace'),
        'section'    => 'naturespace_general_settings',
        'settings'   => 'naturespace_display_breadcrumb',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'naturespace' ),
            'Hide' => __( 'Hide' , 'naturespace' ),
        ),
    ));
    
    //  ==================================
    //  = Display Sidebar on Posts/Pages =
    //  ==================================
    $wp_customize->add_setting('naturespace_display_sidebar', array(
        'default'        => naturespace_default_options('naturespace_display_sidebar'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_display_sidebar_control', array(
        'label'      => __('Display Sidebar on Posts/Pages', 'naturespace'),
        'section'    => 'naturespace_general_settings',
        'settings'   => 'naturespace_display_sidebar',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'naturespace' ),
            'Hide' => __( 'Hide' , 'naturespace' ),
        ),
    ));
    
    //  ==================================
    //  = Display Sidebar on Archives    =
    //  ==================================
    $wp_customize->add_setting('naturespace_display_sidebar_archives', array(
        'default'        => naturespace_default_options('naturespace_display_sidebar_archives'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_display_sidebar_archives_control', array(
        'label'      => __('Display Sidebar on Archives', 'naturespace'),
        'section'    => 'naturespace_general_settings',
        'settings'   => 'naturespace_display_sidebar_archives',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'naturespace' ),
            'Hide' => __( 'Hide' , 'naturespace' ),
        ),
    ));
    
    //  ==================================
    //  = Header Layout                  =
    //  ==================================
    $wp_customize->add_setting('naturespace_header_layout', array(
        'default'        => naturespace_default_options('naturespace_header_layout'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_header_layout_control', array(
        'label'      => __('Header Layout', 'naturespace'),
        'section'    => 'naturespace_header_settings',
        'settings'   => 'naturespace_header_layout',
        'type'       => 'radio',
        'choices'    => array(
            'Wide' => __( 'Wide' , 'naturespace' ),
            'Centered' => __( 'Centered' , 'naturespace' ),
        ),
    ));
    
    //  ==================================
    //  = Display Header Image           =
    //  ==================================
    $wp_customize->add_setting('naturespace_display_header_image', array(
        'default'        => naturespace_default_options('naturespace_display_header_image'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_display_header_image_control', array(
        'label'      => __('Display Header Image', 'naturespace'),
        'section'    => 'naturespace_header_settings',
        'settings'   => 'naturespace_display_header_image',
        'type'       => 'radio',
        'choices'    => array(
            'Everywhere' => __( 'Everywhere' , 'naturespace' ),
            'Only on Homepage' => __( 'Only on Homepage' , 'naturespace' ),
            'Everywhere except Homepage' => __( 'Everywhere except Homepage' , 'naturespace' ),
        ),
    ));
    
    //  =================================
    //  = Title Box/Logo width          =
    //  =================================
    $wp_customize->add_setting('naturespace_page_title_width', array(
        'default'        => naturespace_default_options('naturespace_page_title_width'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_page_title_width_control', array(
        'label'      => __('Title Box/Logo width (in Wide Header Layout)', 'naturespace'),
        'section'    => 'naturespace_header_settings',
        'settings'   => 'naturespace_page_title_width',
        'type'       => 'radio',
        'choices'    => array(
            '100' => '100%',
            '90' => '90%',
            '80' => '80%',
            '70' => '70%',
            '60' => '60%',
            '50' => '50%',
            '40' => '40%',
            '30' => '30%',
            '20' => '20%',
            '10' => '10%',
            '0' => '0%',
        ),
    ));
    
    //  =================================
    //  = Menu Box width                =
    //  =================================
    $wp_customize->add_setting('naturespace_header_menu_width', array(
        'default'        => naturespace_default_options('naturespace_header_menu_width'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_header_menu_width_control', array(
        'label'      => __('Menu Box width (in Wide Header Layout)', 'naturespace'),
        'section'    => 'naturespace_header_settings',
        'settings'   => 'naturespace_header_menu_width',
        'type'       => 'radio',
        'choices'    => array(
            '100' => '100%',
            '90' => '90%',
            '80' => '80%',
            '70' => '70%',
            '60' => '60%',
            '50' => '50%',
            '40' => '40%',
            '30' => '30%',
            '20' => '20%',
            '10' => '10%',
            '0' => '0%',
        ),
    ));
    
    //  =============================
    //  = Header Logo               =
    //  =============================
    $wp_customize->add_setting('naturespace_logo_url', array(
        'default'        => naturespace_default_options('naturespace_logo_url'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_uri',
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'naturespace_logo_url_control', array(
        'label'    => __('Header Logo', 'naturespace'),
        'section'  => 'naturespace_header_settings',
        'settings' => 'naturespace_logo_url',
    )));
    
    //  =============================
    //  = Postal Address            =
    //  =============================
    $wp_customize->add_setting('naturespace_header_address', array(
        'default'        => naturespace_default_options('naturespace_header_address'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_header_address_control', array(
        'label'      => __('Postal Address', 'naturespace'),
        'section'    => 'naturespace_header_settings',
        'settings'   => 'naturespace_header_address',
    ));
    
    //  =============================
    //  = Email Address             =
    //  =============================
    $wp_customize->add_setting('naturespace_header_email', array(
        'default'        => naturespace_default_options('naturespace_header_email'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_header_email_control', array(
        'label'      => __('Email Address', 'naturespace'),
        'section'    => 'naturespace_header_settings',
        'settings'   => 'naturespace_header_email',
    ));
    
    //  =============================
    //  = Phone Number              =
    //  =============================
    $wp_customize->add_setting('naturespace_header_phone', array(
        'default'        => naturespace_default_options('naturespace_header_phone'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_header_phone_control', array(
        'label'      => __('Phone Number', 'naturespace'),
        'section'    => 'naturespace_header_settings',
        'settings'   => 'naturespace_header_phone',
    ));
    
    //  =============================
    //  = Skype Name                =
    //  =============================
    $wp_customize->add_setting('naturespace_header_skype', array(
        'default'        => naturespace_default_options('naturespace_header_skype'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_header_skype_control', array(
        'label'      => __('Skype Name', 'naturespace'),
        'section'    => 'naturespace_header_settings',
        'settings'   => 'naturespace_header_skype',
    ));
    
    //  =============================
    //  = Header Image Headline     =
    //  =============================
    $wp_customize->add_setting('naturespace_header_image_headline', array(
        'default'        => naturespace_default_options('naturespace_header_image_headline'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_header_image_headline_control', array(
        'label'      => __('Homepage Header Image Headline', 'naturespace'),
        'section'    => 'naturespace_header_settings',
        'settings'   => 'naturespace_header_image_headline',
    ));
    
    //  =============================
    //  = Header Image Link URL     =
    //  =============================
    $wp_customize->add_setting('naturespace_header_image_link_url', array(
        'default'        => naturespace_default_options('naturespace_header_image_link_url'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_uri',
    ));
 
    $wp_customize->add_control('naturespace_header_image_link_url_control', array(
        'label'      => __('Homepage Header Image Link URL', 'naturespace'),
        'section'    => 'naturespace_header_settings',
        'settings'   => 'naturespace_header_image_link_url',
    ));
    
    //  =============================
    //  = Header Image Link Text    =
    //  =============================
    $wp_customize->add_setting('naturespace_header_image_link_text', array(
        'default'        => naturespace_default_options('naturespace_header_image_link_text'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_header_image_link_text_control', array(
        'label'      => __('Homepage Header Image Link Text', 'naturespace'),
        'section'    => 'naturespace_header_settings',
        'settings'   => 'naturespace_header_image_link_text',
    ));
    
    //  ==========================================
    //  = Display Featured Image on single posts =
    //  ==========================================
    $wp_customize->add_setting('naturespace_display_image_post', array(
        'default'        => naturespace_default_options('naturespace_display_image_post'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_display_image_post_control', array(
        'label'      => __('Display Featured Image on single posts', 'naturespace'),
        'section'    => 'naturespace_posts_settings',
        'settings'   => 'naturespace_display_image_post',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'naturespace' ),
            'Hide' => __( 'Hide' , 'naturespace' ),
        ),
    ));
    
    //  ====================================
    //  = Display Meta Box on single posts =
    //  ====================================
    $wp_customize->add_setting('naturespace_display_meta_post', array(
        'default'        => naturespace_default_options('naturespace_display_meta_post'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_display_meta_post_control', array(
        'label'      => __('Display Meta Box on single posts', 'naturespace'),
        'section'    => 'naturespace_posts_settings',
        'settings'   => 'naturespace_display_meta_post',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'naturespace' ),
            'Hide' => __( 'Hide' , 'naturespace' ),
        ),
    ));
    
    //  =================================
    //  = Next/Previous Post Navigation =
    //  =================================
    $wp_customize->add_setting('naturespace_next_preview_post', array(
        'default'        => naturespace_default_options('naturespace_next_preview_post'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_next_preview_post_control', array(
        'label'      => __('Display Next/Previous Post Navigation on single posts', 'naturespace'),
        'section'    => 'naturespace_posts_settings',
        'settings'   => 'naturespace_next_preview_post',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'naturespace' ),
            'Hide' => __( 'Hide' , 'naturespace' ),
        ),
    ));
    
    //  ==========================================
    //  = Display Featured Image on pages        =
    //  ==========================================
    $wp_customize->add_setting('naturespace_display_image_page', array(
        'default'        => naturespace_default_options('naturespace_display_image_page'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_display_image_page_control', array(
        'label'      => __('Display Featured Image on pages', 'naturespace'),
        'section'    => 'naturespace_posts_settings',
        'settings'   => 'naturespace_display_image_page',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'naturespace' ),
            'Hide' => __( 'Hide' , 'naturespace' ),
        ),
    ));
    
    //  ==================================
    //  = Post Entries Format            =
    //  ==================================
    $wp_customize->add_setting('naturespace_post_entry_format', array(
        'default'        => naturespace_default_options('naturespace_post_entry_format'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_post_entry_format_control', array(
        'label'      => __('Post Entries Format', 'naturespace'),
        'section'    => 'naturespace_post_entries_settings',
        'settings'   => 'naturespace_post_entry_format',
        'type'       => 'radio',
        'choices'    => array(
            'One Column' => __( 'One Column' , 'naturespace' ),
            'Grid - Masonry' => __( 'Grid - Masonry' , 'naturespace' ),
        ),
    ));
    
    //  ====================================
    //  = Display Meta Box on Post Entries =
    //  ====================================
    $wp_customize->add_setting('naturespace_display_meta_post_entry', array(
        'default'        => naturespace_default_options('naturespace_display_meta_post_entry'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_display_meta_post_entry_control', array(
        'label'      => __('Display Meta Box on Post Entries', 'naturespace'),
        'section'    => 'naturespace_post_entries_settings',
        'settings'   => 'naturespace_display_meta_post_entry',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'naturespace' ),
            'Hide' => __( 'Hide' , 'naturespace' ),
        ),
    ));
    
    //  ====================================
    //  = Featured Images Size             =
    //  ====================================
    $wp_customize->add_setting('naturespace_featured_image_size', array(
        'default'        => naturespace_default_options('naturespace_featured_image_size'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_featured_image_size_control', array(
        'label'      => __('Featured Images Size', 'naturespace'),
        'section'    => 'naturespace_post_entries_settings',
        'settings'   => 'naturespace_featured_image_size',
        'type'       => 'radio',
        'choices'    => array(
            'Small' => __( 'Small' , 'naturespace' ),
            'Large' => __( 'Large' , 'naturespace' ),
        ),
    ));
    
    //  ===============================
    //  = Content/Excerpt Displaying  =
    //  ===============================
    $wp_customize->add_setting('naturespace_content_archives', array(
        'default'        => naturespace_default_options('naturespace_content_archives'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_content_archives_control', array(
        'label'      => __('Content/Excerpt Displaying', 'naturespace'),
        'section'    => 'naturespace_post_entries_settings',
        'settings'   => 'naturespace_content_archives',
        'type'       => 'radio',
        'choices'    => array(
            'Excerpt' => __( 'Excerpt' , 'naturespace' ),
            'Content' => __( 'Content' , 'naturespace' ),
        ),
    ));
    
    //  =============================
    //  = Excerpt Length            =
    //  =============================
    $wp_customize->add_setting('naturespace_excerpt_length', array(
        'default'        => '40',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_excerpt_length_control', array(
        'label'      => __('Excerpt Length (number of words)', 'naturespace'),
        'section'    => 'naturespace_post_entries_settings',
        'settings'   => 'naturespace_excerpt_length',
    ));
    
    //  ====================================
    //  = Display Site Description         =
    //  ====================================
    $wp_customize->add_setting('naturespace_display_site_description', array(
        'default'        => naturespace_default_options('naturespace_display_site_description'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_display_site_description_control', array(
        'label'      => __('Display Site Description on Latest Posts (Blog) page', 'naturespace'),
        'section'    => 'naturespace_post_entries_settings',
        'settings'   => 'naturespace_display_site_description',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'naturespace' ),
            'Hide' => __( 'Hide' , 'naturespace' ),
        ),
    ));
    
    //  ==============================
    //  = Character Set              =
    //  ==============================
    $wp_customize->add_setting('naturespace_character_set', array(
        'default'        => 'latin',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
    ));
 
    $wp_customize->add_control('naturespace_character_set_control', array(
        'label'      => __('Character Set', 'naturespace'),
        'section'    => 'naturespace_font_settings',
        'settings'   => 'naturespace_character_set',
        'type'       => 'radio',
        'choices'    => array(
            'latin' => __( 'Latin' , 'naturespace' ),
            'latin-ext' => __( 'Latin Extended' , 'naturespace' ),
            'cyrillic' => __( 'Cyrillic' , 'naturespace' ),
            'cyrillic-ext' => __( 'Cyrillic Extended' , 'naturespace' ),
            'greek' => __( 'Greek' , 'naturespace' ),
            'greek-ext' => __( 'Greek Extended' , 'naturespace' ),
            'vietnamese' => __( 'Vietnamese' , 'naturespace' ),
        ),
    ));
    
    //  =============================
    //  = Body font                 =
    //  =============================
     $wp_customize->add_setting('naturespace_body_google_fonts', array(
        'default'        => naturespace_default_options('naturespace_body_google_fonts'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
 
    ));
    $wp_customize->add_control( 'naturespace_body_google_fonts_control', array(
        'settings' => 'naturespace_body_google_fonts',
        'label'   => __('Body font', 'naturespace'),
        'section' => 'naturespace_font_settings',
        'type'    => 'select',
        'choices'    => $naturespace_fonts,
    ));
    
    //  =============================
    //  = Site Title font           =
    //  =============================
     $wp_customize->add_setting('naturespace_headings_google_fonts', array(
        'default'        => naturespace_default_options('naturespace_headings_google_fonts'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
 
    ));
    $wp_customize->add_control( 'naturespace_headings_google_fonts_control', array(
        'settings' => 'naturespace_headings_google_fonts',
        'label'   => __('Site Title font', 'naturespace'),
        'section' => 'naturespace_font_settings',
        'type'    => 'select',
        'choices'    => $naturespace_fonts,
    ));
    
    //  =============================
    //  = Page/Post Headlines font  =
    //  =============================
     $wp_customize->add_setting('naturespace_headline_google_fonts', array(
        'default'        => naturespace_default_options('naturespace_headline_google_fonts'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
 
    ));
    $wp_customize->add_control( 'naturespace_headline_google_fonts_control', array(
        'settings' => 'naturespace_headline_google_fonts',
        'label'   => __('Page/Post Headlines (h1 - h6) font', 'naturespace'),
        'section' => 'naturespace_font_settings',
        'type'    => 'select',
        'choices'    => $naturespace_fonts,
    ));
    
    //  =============================
    //  = Post Entry Headline font  =
    //  =============================
     $wp_customize->add_setting('naturespace_postentry_google_fonts', array(
        'default'        => naturespace_default_options('naturespace_postentry_google_fonts'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
 
    ));
    $wp_customize->add_control( 'naturespace_postentry_google_fonts_control', array(
        'settings' => 'naturespace_postentry_google_fonts',
        'label'   => __('Post Entry Headline font', 'naturespace'),
        'section' => 'naturespace_font_settings',
        'type'    => 'select',
        'choices'    => $naturespace_fonts,
    ));
    
    //  ========================================
    //  = Sidebar/Footer Widget Headlines font =
    //  ========================================
     $wp_customize->add_setting('naturespace_sidebar_google_fonts', array(
        'default'        => naturespace_default_options('naturespace_sidebar_google_fonts'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
 
    ));
    $wp_customize->add_control( 'naturespace_sidebar_google_fonts_control', array(
        'settings' => 'naturespace_sidebar_google_fonts',
        'label'   => __('Sidebar/Footer Widget Headlines font', 'naturespace'),
        'section' => 'naturespace_font_settings',
        'type'    => 'select',
        'choices'    => $naturespace_fonts,
    ));
    
    //  =============================
    //  = Main Header Menu font     =
    //  =============================
     $wp_customize->add_setting('naturespace_menu_google_fonts', array(
        'default'        => naturespace_default_options('naturespace_menu_google_fonts'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'naturespace_sanitize_text',
 
    ));
    $wp_customize->add_control( 'naturespace_menu_google_fonts_control', array(
        'settings' => 'naturespace_menu_google_fonts',
        'label'   => __('Main Header Menu font', 'naturespace'),
        'section' => 'naturespace_font_settings',
        'type'    => 'select',
        'choices'    => $naturespace_fonts,
    ));
    
    //  =============================
    //  = Custom CSS                =
    //  =============================
    $wp_customize->add_setting('naturespace_own_css', array(
        'default'        => naturespace_default_options('naturespace_own_css'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));
 
    $wp_customize->add_control( new naturespace_customize_textarea_control($wp_customize, 'naturespace_own_css_control', array(
        'label'    => __('Custom CSS', 'naturespace'),
        'section'  => 'naturespace_general_settings',
        'settings' => 'naturespace_own_css',
    )));
}

add_action('customize_register', 'naturespace_customize_register');

/**
 * Sanitize URIs
*/
function naturespace_sanitize_uri($uri) {
	if('' === $uri){
		return '';
	}
	return esc_url_raw($uri);
}

/**
 * Sanitize Texts
*/
function naturespace_sanitize_text($str) {
	if('' === $str){
		return '';
	}
	return sanitize_text_field( $str);
} ?>