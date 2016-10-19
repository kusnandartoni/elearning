<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Kolom :attribute harus accepted.',
    'active_url'           => 'Kolom :attribute is not a valid URL.',
    'after'                => 'Kolom :attribute harus a date after :date.',
    'alpha'                => 'Kolom :attribute may only contain letters.',
    'alpha_dash'           => 'Kolom :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'Kolom :attribute may only contain letters and numbers.',
    'array'                => 'Kolom :attribute harus an array.',
    'before'               => 'Kolom :attribute harus a date before :date.',
    'between'              => [
        'numeric' => 'Kolom :attribute harus between :min and :max.',
        'file'    => 'Kolom :attribute harus between :min and :max kilobytes.',
        'string'  => 'Kolom :attribute harus between :min and :max karakter.',
        'array'   => 'Kolom :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'Kolom :attribute field harus true or false.',
    'confirmed'            => 'Kolom :attribute confirmation does not match.',
    'date'                 => 'Kolom :attribute is not a valid date.',
    'date_format'          => 'Kolom :attribute does not match the format :format.',
    'different'            => 'Kolom :attribute and :other harus different.',
    'digits'               => 'Kolom :attribute harus :digits digits.',
    'digits_between'       => 'Kolom :attribute harus between :min and :max digits.',
    'dimensions'           => 'Kolom :attribute has invalid image dimensions.',
    'distinct'             => 'Kolom :attribute field has a duplicate value.',
    'email'                => 'Kolom :attribute harus a valid email address.',
    'exists'               => 'Kolom selected :attribute is invalid.',
    'file'                 => 'Kolom :attribute harus a file.',
    'filled'               => 'Kolom :attribute harus diisi.',
    'image'                => 'Kolom :attribute harus an image.',
    'in'                   => 'Kolom selected :attribute is invalid.',
    'in_array'             => 'Kolom :attribute field does not exist in :other.',
    'integer'              => 'Kolom :attribute harus an integer.',
    'ip'                   => 'Kolom :attribute harus a valid IP address.',
    'json'                 => 'Kolom :attribute harus a valid JSON string.',
    'max'                  => [
        'numeric' => 'Kolom :attribute tidak boleh lebih dari :max.',
        'file'    => 'Kolom :attribute tidak boleh lebih dari :max kilobytes.',
        'string'  => 'Kolom :attribute tidak boleh lebih dari :max karakter.',
        'array'   => 'Kolom :attribute may not have more than :max items.',
    ],
    'mimes'                => 'Kolom :attribute harus a file of type: :values.',
    'mimetypes'            => 'Kolom :attribute harus a file of type: :values.',
    'min'                  => [
        'numeric' => 'Kolom :attribute harus at least :min.',
        'file'    => 'Kolom :attribute harus at least :min kilobytes.',
        'string'  => 'Kolom :attribute harus at least :min karakter.',
        'array'   => 'Kolom :attribute must have at least :min items.',
    ],
    'not_in'               => 'Kolom selected :attribute is invalid.',
    'numeric'              => 'Kolom :attribute harus a number.',
    'present'              => 'Kolom :attribute field harus present.',
    'regex'                => 'Kolom :attribute format is invalid.',
    'required'             => 'Kolom :attribute harus diisi.',
    'required_if'          => 'Kolom :attribute field is required when :other is :value.',
    'required_unless'      => 'Kolom :attribute field is required unless :other is in :values.',
    'required_with'        => 'Kolom :attribute field is required when :values is present.',
    'required_with_all'    => 'Kolom :attribute field is required when :values is present.',
    'required_without'     => 'Kolom :attribute field is required when :values is not present.',
    'required_without_all' => 'Kolom :attribute field is required when none of :values are present.',
    'same'                 => 'Kolom :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'Kolom :attribute harus :size.',
        'file'    => 'Kolom :attribute harus :size kilobytes.',
        'string'  => 'Kolom :attribute harus :size karakter.',
        'array'   => 'Kolom :attribute must contain :size items.',
    ],
    'string'               => 'Kolom :attribute harus a string.',
    'timezone'             => 'Kolom :attribute harus a valid zone.',
    'unique'               => 'data :attribute sudah dipakai.',
    'uploaded'             => 'Kolom :attribute failed to upload.',
    'url'                  => 'Kolom :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
