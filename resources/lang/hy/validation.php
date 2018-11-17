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

    'accepted' => 'Պետք է ընդունվի',
    'active_url' => 'Անվավեր հասցե',
    'after' => 'Պետք է լինի :date -ից հետո',
    'after_or_equal' => 'Պետք է լինի :date -ից հետո կամ հավասար',
    'alpha' => 'կարող է պարունակել միայն տառեր',
    'alpha_dash' => 'Կարող է պարունակել միայն տառեր, թվեր և գծիկ',
    'alpha_num' => 'Կարող է պարունակել միայն տառեր և թվեր',
    'array' => 'Պետք է լինի զանգված',
    'before' => 'Պետք է լինի :date -ից առաջ',
    'before_or_equal' => 'Պետք է լինի :date -ից առաջ կամ հավասար',
    'between' => [
        'numeric' => 'Պետք է լինի ։min և :max արժեքների միջև',
        'file' => 'Պետք է լինի ։min և :max արժեքների միջև',
        'string' => 'Պետք է լինի ։min և :max արժեքների միջև',
        'array' => 'Պետք է լինի ։min և :max արժեքների միջև',
    ],
    'boolean' => 'Անհամապատասխան արժեք',
    'confirmed' => 'Անհամապատասխան հաստատում',
    'date' => 'Անվավեր ամսաթիվը',
    'date_format' => 'Պետք է համապատասխանոի :format ձեւաչափին',
    'different' => 'Պետք է տարբեր լինեն :other -ից',
    'digits' => 'Անվավեր թվանշան',
    'digits_between' => 'Պետք է լինի ։min և :max թվանշանների միջեւ',
    'dimensions' => 'Անվավեր չափանիշներ',
    'distinct' => 'Դաշտը ունի կրկնօրինակ արժեք',
    'email' => 'Անվավեր էլ-փոստի հասցե',
    'exists' => 'Անվավեր դաշտ',
    'file' => 'Պետք է լինի ֆայլ տիպի',
    'filled' => 'Դաշտը պետք է ունենա արժեք',
    'image' => 'Պետք է լինի պատկեր',
    'in' => 'Անվավեր դաշտ',
    'in_array' => 'Դաշտը գոյություն չունի :other -ում',
    'integer' => 'Պետք է լինի ամբողջ թիվ',
    'ip' => 'Անվավեր IP հասցե',
    'ipv4' => 'Անվավեր IPv4 հասցե',
    'ipv6' => 'Անվավեր IPv6 հասցե',
    'json' => 'Անվավեր JSON տող',
    'max' => [
        'numeric' => 'Առավելագույն արժեքը ։max',
        'file' => 'Առավելագույն արժեքը ։max կիլոբայթ',
        'string' => 'Առավելագույն նիշերի քանակը ։max',
        'array' => 'Առավելագույն տարրերի քանակը ։max',
    ],
    'mimes' => 'Պետք է լինի :values տիպի ֆայլ',
    'mimetypes' => 'Պետք է լինի :values տիպի ֆայլ',
    'min' => [
        'numeric' => 'Նվազագույն արժեքը ։min',
        'file' => 'Նվազագույն արժեքը ։min կիլոբայթ',
        'string' => 'Պետք է պարունակի առնվազն :min նիշ',
        'array' => 'Պետք է պարունակի առնվազն ։min տարրեր',
    ],
    'not_in' => 'Անվավեր արժեք',
    'numeric' => 'Թվային դաշտ',
    'present' => 'Դաշտը պետք է առկա լինի',
    'regex' => 'Ձեւաչափը անվավեր է',
    'required' => 'Պարտադիր Դաշտ',
    'required_if' => 'Դաշտը պարտադիր է, երբ :other դաշտի արժեքը :value է',
    'required_unless' => 'Դաշտը պարտադիր է, քանի դեռ :other դաշտի արժեքը :value է',
    'required_with' => 'Դաշտը պարտադիր է, երբ :values առկա են',
    'required_with_all' => 'Դաշտը պարտադիր է, երբ :values առկա են',
    'required_without' => 'Դաշտը պարտադիր է, երբ :values առկա չեն',
    'required_without_all' => 'Դաշտը պարտադիր է, երբ ոչ մի :values առկա չէ',
    'same' => 'Անհամապատասխանություն',
    'size' => [
        'numeric' => 'Պետք է լինի ։size',
        'file' => 'Պետք է լինի ։size կիլոբայթ',
        'string' => 'Պետք է պարունակի ։size նիշ',
        'array' => 'Պետք է պարունակի ։size տարրեր',
    ],
    'string' => 'Պետք է լինի տեքստ',
    'timezone' => 'Անվավեր ժամանակային գոտի',
    'unique' => 'Այս անուն արդեն գոյություն ունի',
    'uploaded' => 'Չհաջողվեց վերբեռնել',
    'url' => 'Ձևաչափը անվավեր է',
    'is_assigned' => 'Աշխատանքն արդեն կցվել է',
    'incompatible'  => ':attributeը և :otherն անհամատեղելի են',


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
        'service_id' => [
            'required' => 'Ծառայությունը ընտրված չէ',
            'exists' => 'Գոյություն չունեցող ծառայություն'
        ],
        'location_a' => [
            'required' => 'Սկսման հասցեն նշված չէ'
        ],
        'location_b' => [
            'required' => 'Ավարտի հասցեն նշված չէ'
        ],
        'vehicle_type_id' => [
            'required' => 'Փոխադրամիջոցի տեսակը նշված չէ',
            'exists' =>  'Գոյություն չունեցող փոխադրամիջոցի տեսակ'
        ],
        'password' => [
            'regex' => 'Գաղտնաբառի ձևաչափը անվավեր է'
        ],
        'phone_number' => [
            'exists' => 'Գոյություն չունեցող հեռախոսահամար'
        ],
        'fields.one_way_return' => [
            'incompatible' => 'Միակողմանի/հետադարձով տեղակայումը և տաքսիով հետադարձն անհամատեղելի են'
        ]
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

    'attributes' => [
        'phone_number' => 'Հեռախոսահամար',
        'password' => 'Գաղտնաբառ',
        'fields.one_way_return' => 'Միակողմանի/հետադարձով տեղակայում',
        'bck_taxi' => 'տաքսիով հետադարձ'
    ],

    'others' => [
        'bck_taxi' => 'տաքսիով հետադարձ'
    ]

];
