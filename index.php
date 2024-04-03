<?php

Kirby::plugin('simonlou/auto-mailto', [
    'fieldMethods' => [
        'automailto' => function ($field) {
            $pattern = '/([a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})/';
            $replacement = '<a href="mailto:$1">$1</a>';

            $field->value = preg_replace($pattern, $replacement, $field->value);

            return $field;
        },
        'mailto' => function ($field) {
            // Alias for 'automailto'
            return $field->automailto();
        }
    ]
]);