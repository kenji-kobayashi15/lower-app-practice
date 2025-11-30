<?php

use function Livewire\Volt\{state, mount};

state(['hello', 'hello_lower']);

mount(function () {
    $this->hello_lower = strtolower($this->hello);
})

?>

<div>
    <h1>{{ $hello_lower }}</h1>


</div>
