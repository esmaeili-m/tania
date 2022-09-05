<!DOCTYPE html>
<html lang="en">
<livewire:home.config.head />

@livewireStyles
<body class="dark-layout">
<livewire:home.config.header />

{{$slot}}
@livewireScripts
<livewire:home.config.footer />
</body>
<livewire:home.config.foot />

