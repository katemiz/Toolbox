<x-layout>
    <div class="section container">

        @if ($ep)


            <header class="mb-6">
                <h1 class="title has-text-weight-light is-size-1">{{ config('endproducts.update.title') }}</h1>

                @if ( config('endproducts.update.subtitle') )
                    <h2 class="subtitle has-text-weight-light">{{ config('endproducts.update.subtitle') }}</h2>
                @endif
            </header>


        @else
            <header class="mb-6">
                <h1 class="title has-text-weight-light is-size-1">{{ config('endproducts.create.title') }}</h1>

                @if ( config('endproducts.create.subtitle') )
                    <h2 class="subtitle has-text-weight-light">{{ config('endproducts.create.subtitle') }}</h2>
                @endif
            </header>
        @endif

        <form action="{{ config('endproducts.cu_route') }}{{ $ep ? $ep->id : '' }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="field">

            <label class="label" for="description">
                Product Name/Description
            </label>
        
            <div class="control has-icons-right">
        
                <input
                    class="input"
                    name="description"
                    id="description"
                    type="text"
                    placeholder="Product name/description" required>
            </div>
        </div>
        
        <div class="buttons is-right">
            @if ($ep)
            <button class="button is-dark">{{ config('endproducts.update.submitText') }}</button>
            @else
            <button class="button is-dark">{{ config('endproducts.create.submitText') }}</button>
            @endif
        </div>
    
        </form>
    </div>
</x-layout>