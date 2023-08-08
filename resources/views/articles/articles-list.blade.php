
{{-- LISTING HEADER --}}
<x-title :params="config('articles.list')" />

@if (session()->has('message'))
<div class="notification">
    {{ session('message') }}
</div>
@endif



<x-table-action :params="config('articles')" />

@if ($articles->count() > 0)

    <x-table :params="config('articles')" :records="$articles" />
    {{ $articles->links('pagination.bulma') }}

@else
    <x-notification type="is-warning is-light" message="{{ config('articles.list.noitem') }}" />
@endif

