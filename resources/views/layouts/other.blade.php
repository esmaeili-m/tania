<!DOCTYPE html>
<html lang="en">
<livewire:home.config.head/>
@livewireStyles
<body>
<div class="page-wrapper">
<livewire:home.config.other-header/>
{{$slot}}
@livewireScripts
<livewire:home.config.footer />
</div>
</body>
<livewire:home.config.foot />


