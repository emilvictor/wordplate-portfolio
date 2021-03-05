<?php

declare(strict_types=1);

if (function_exists('acf_add_local_field_group')) {

  acf_add_local_field_group([
    'key' => 'project_info',
    'title' => 'Project info',
    'fields' => [
      [
        'key' => 'project_client',
        'name' => 'project_client',
        'label' => 'Client',
        'type' => 'text',
        'instructions' => 'Fill out the client for this project',
      ],
      [
        'key' => 'client_website',
        'name' => 'client_website',
        'label' => 'Website',
        'type' => 'url',
        'instructions' => 'Fill out the clients website',
    ],
    ],
    
    'location' => [
      [
        [
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'project',
        ],
      ],
    ],
  ]);
}