<?php

declare(strict_types=1);

if (function_exists('acf_add_options_page')) {
	acf_add_options_page([
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
  ]);
}

if (function_exists('acf_add_local_field_group')) {

  acf_add_local_field_group([
    'key' => 'footer_fields',
    'title' => 'Footer',
    'fields' => [
      [
        'key' => 'footer_email',
        'name' => 'footer_email',
        'label' => 'Footer email',
        'type' => 'email',
        'wrapper' => [
          'width' => 50,
        ],
      ],
      [
        'key' => 'footer_contact_label',
        'name' => 'footer_contact_label',
        'label' => 'Footer contact Label',
        'type' => 'text',
        'wrapper' => [
          'width' => 50,
        ],
      ],
      [
        'key' => 'footer_copyright',
        'name' => 'footer_copyright',
        'label' => 'Footer copyright text',
        'type' => 'text',
        'wrapper' => [
          'width' => 50,
        ],
      ],
    ],
    'location' => [
      [
        [
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'theme-general-settings',
        ],
      ],
    ],
  ]);
}

