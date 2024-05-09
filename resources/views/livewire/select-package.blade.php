<div class="flex flex-wrap justify-center items-center gap-8 py-10">
    @foreach($packages as $package)
        <x-package-layouts.standard-package :package="$package"/>
    @endforeach
</div>
