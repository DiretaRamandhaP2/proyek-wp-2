@props(['status'])

<span @class(['app-status-badge', 'app-status-done' => $status === 'Selesai', 'app-status-wait' => $status === 'Diproses'])>{{ $status }}</span>