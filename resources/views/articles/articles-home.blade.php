<section class="section container">

    {{-- LISTING --}}
    @if ($isList)
        @include('articles.articles-list')
    @endif

    {{-- FORM --}}
    @if ($isAdd || $isEdit)
        @include('articles.article-form')
    @endif

    {{-- VIEW --}}
    @if ($isView)
        @include('articles.article-view')
    @endif

</section>




