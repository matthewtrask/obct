<?php

if (!function_exists('cdn_url')) {
    function cdn_url($path)
    {
        if (!$path) return null;

        // If already full URL, return as-is
        if (str_starts_with($path, 'http')) {
            return $path;
        }

        // Otherwise prepend your DO Spaces URL
        $baseUrl = env('DO_SPACES_URL', 'https://obct.nyc3.digitaloceanspaces.com');
        return $baseUrl . '/' . ltrim($path, '/');
    }
}
