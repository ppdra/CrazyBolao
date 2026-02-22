<x-ui.badge variant="outline" :color="$badgeInfos['color']">
    <span class="w-2 h-2 bg-{{ $badgeInfos['color'] }}-500 rounded-full animate-pulse">
    </span>
    <span class="capitalize">
        {{ $badgeInfos['label'] }}
    </span>
</x-ui.badge>
