@props(['icon', 'label', 'active' => false])

<a {{ $attributes->class(['app-sidebar-link', 'active' => $active]) }} href="#">
    <i class="bi {{ $icon }}" aria-hidden="true"></i>
    <span>{{ $label }}</span>
</a>