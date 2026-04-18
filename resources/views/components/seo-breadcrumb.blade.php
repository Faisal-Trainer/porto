@props(['items' => []])

@php
    $listElements = collect($items)->map(function ($item, $index) {
        $element = [
            '@type' => 'ListItem',
            'position' => $index + 1,
            'name' => $item['name'],
        ];

        if (isset($item['url'])) {
            $element['item'] = $item['url'];
        }

        return $element;
    })->values()->all();

    $breadcrumbSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $listElements,
    ];
@endphp

<script type="application/ld+json">{!! json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
