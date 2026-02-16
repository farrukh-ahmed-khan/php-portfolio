<?php

function load_project_content(): array
{
    static $cache = null;
    if ($cache !== null) {
        return $cache;
    }

    $path = __DIR__ . '/../data/projects.json';
    if (!file_exists($path)) {
        return $cache = ['domains' => [], 'stacks' => [], 'projects' => []];
    }

    $raw = file_get_contents($path);
    $decoded = json_decode($raw, true);
    if (!is_array($decoded)) {
        return $cache = ['domains' => [], 'stacks' => [], 'projects' => []];
    }

    $decoded['domains'] = $decoded['domains'] ?? [];
    $decoded['stacks'] = $decoded['stacks'] ?? [];
    $decoded['projects'] = $decoded['projects'] ?? [];

    return $cache = $decoded;
}

function get_projects(): array
{
    $content = load_project_content();
    return $content['projects'];
}

function get_project_by_slug(string $slug): ?array
{
    foreach (get_projects() as $project) {
        if (($project['slug'] ?? '') === $slug) {
            return $project;
        }
    }
    return null;
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

