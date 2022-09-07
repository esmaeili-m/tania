<!DOCTYPE html>
<html lang="en">
<livewire:home.config.head/>
@livewireStyles
<body class="dark-layout">
<div class="page-wrapper">
<livewire:home.config.header />
{{$slot}}
@livewireScripts
<livewire:home.config.footer />
</div>
</body>
<livewire:home.config.foot />


