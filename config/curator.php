<?php

return [
    'accepted_file_types' => [
        'image/jpeg',
        'image/png',
        'image/webp',
        'image/svg+xml',
        'application/pdf',
    ],

    // Add 'do' here so Curator returns direct CDN URLs instead of
    // routing images through Glide (which only works for local disks).
    'cloud_disks' => [
        's3',
        'do',
        'cloudinary',
        'imgix',
    ],

    'cropper' => [
        'check_cross_origin' => true,
    ],

    'curation_formats' => ['jpg', 'jpeg', 'webp', 'png', 'avif'],

    'curation_presets' => [
        \Awcodes\Curator\Curations\ThumbnailPreset::class,
    ],

    'directory'  => 'media',
    'disk'       => env('FILAMENT_FILESYSTEM_DISK', 'do'),

    'glide' => [
        'server'     => \Awcodes\Curator\Glide\DefaultServerFactory::class,
        'fallbacks'  => [],
        'route_path' => 'curator',
    ],

    'image_crop_aspect_ratio'    => null,
    'image_resize_mode'          => null,
    'image_resize_target_height' => null,
    'image_resize_target_width'  => null,

    'is_limited_to_directory'           => false,
    'is_tenant_aware'                   => false,
    'tenant_ownership_relationship_name' => 'tenant',

    'max_size' => 10000,
    'min_size' => 0,

    'model'          => \Awcodes\Curator\Models\Media::class,
    'path_generator' => null,

    'resources' => [
        'label'                  => 'Media',
        'plural_label'           => 'Media',
        'navigation_group'       => 'Settings',
        'cluster'                => null,
        'navigation_label'       => 'Media Library',
        'navigation_icon'        => 'heroicon-o-photo',
        'navigation_sort'        => null,
        'navigation_count_badge' => false,
        'resource'               => \Awcodes\Curator\Resources\MediaResource::class,
    ],

    'should_preserve_filenames' => false,
    'should_register_navigation' => true,
    'should_check_exists'        => true,
    'visibility'                 => 'public',

    'tabs' => [
        'display_curation'  => true,
        'display_upload_new' => true,
    ],

    'multi_select_key' => 'metaKey',

    'table' => [
        'layout' => 'grid',
    ],
];
