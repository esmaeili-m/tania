<!DOCTYPE html>
<html lang="en">
@include('livewire.admin.config.head')
@livewireStyles
<body class="light rtl">
<div class="overlay"></div>
@include('livewire.admin.config.header')
@include('livewire.admin.config.sidebar')
{{$slot}}
@livewireScripts
</body>
@include('livewire.admin.config.foot')
