<?php
/*************************************************************************
 Generated via "php artisan localization:missing" at 2015/12/09 15:50:54
*************************************************************************/

return [
  'App\\Models\\Business' => [
    'appointment_annulation_pre_hs' => [
      'format' => 'Number of hours',
      'help'   => 'Number of hours in advance for which an appointment can be annullated',
      'label'  => 'Appointment Annulation Anticipation',
    ],
    'appointment_code_length' => [
      'format' => 'Number of characters',
      'help'   => 'Number of characters an appointment code is identified with',
      'label'  => 'Appointment Code Length',
    ],
    'appointment_take_today' => [
      'format' => 'Number of hours',
      'help'   => 'Permit booking on the same day the reservation takes place',
      'label'  => 'Permit booking on same day',
    ],
    'appointment_flexible_arrival' => [
      'format' => 'Yes/No',
      'help'   => 'Let clients arrive between opening and closing hours',
      'label'  => 'Flexible Arrival Time',
    ],
    'show_map' => [
      'format' => 'Yes/No',
      'help'   => 'Publish the map of your location (city level)',
      'label'  => 'Publish Map',
    ],
    'show_phone' => [
      'format' => 'Yes/No',
      'help'   => 'Publish your phone in business profile',
      'label'  => 'Publish Phone',
    ],
    'show_postal_address' => [
      'format' => 'Yes/no',
      'help'   => 'Publish full postal address',
      'label'  => 'Publish Postal Address',
    ],
    'start_at' => [
      'format' => 'hh:mm:ss',
      'help'   => 'The time your business opens for receiving appointments',
      'label'  => 'Opening Hour',
    ],
    'finish_at' => [
      'format' => 'hh:mm:ss',
      'help'   => 'The time your business closes for receiving appointments',
      'label'  => 'Closing Hour',
    ],
    'service_default_duration' => [
      'format' => 'example: 30',
      'help'   => 'The default duration of any service you provide',
      'label'  => 'Default service duration (minutes)',
    ],
    'annulation_policy_advice' => [
      'format' => 'example: You may annulate this appointment charge-free until %s',
      'help'   => 'Write an advice text your clients will see about your appointment annulation policy',
      'label'  => 'Annulation Policy Advice Text',
    ],
  ],
  'controls' => [
    'select' => [
      'no'  => 'No',
      'yes' => 'Yes',
    ],
  ],
];
