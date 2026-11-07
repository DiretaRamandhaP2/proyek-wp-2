@props(['icon', 'tone', 'label', 'value', 'note'])

<article class="app-card app-stat-card d-flex align-items-start gap-2">
    <span class="app-stat-icon app-stat-{{ $tone }}"><i class="bi {{ $icon }}" aria-hidden="true"></i></span>
    <div class="min-w-0">
        <div class="app-stat-label">{{ $label }}</div>
        <div class="app-stat-number fw-bold mt-1">{{ $value }}</div>
        <div class="app-stat-note mt-1">{{ $note }}</div>
    </div>
</article>