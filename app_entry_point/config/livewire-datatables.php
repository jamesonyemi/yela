<?php

return [
    'default_time_format' => 'H:i',
    'default_date_format' => 'd/m/Y',

    'temporary_file_upload' => [
        'rules' => 'file|mimes:png,jpg,pdf|max:102400', // (100MB max, and only pngs, jpegs, and pdfs.)
    ],
];
