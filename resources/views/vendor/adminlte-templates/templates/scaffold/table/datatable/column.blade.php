@if($config->options->localized)
    '{{ $fieldName }}' => new Column(['title' => __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}'), 'data' => '{{ $fieldName }}'])
@else
    Column::make('{{ $fieldName }}')
@endif
