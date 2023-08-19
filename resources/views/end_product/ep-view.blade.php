<x-layout>


    <script>
        window.addEventListener('runConfirmDialog',function(e) {
            Swal.fire({
            title: e.detail.title,
            text: e.detail.text,
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete',
            cancelButtonText: 'Ooops ...',

            }).then((result) => {
                if (result.isConfirmed) {
                    this.Livewire.emit('runDelete',e.detail.id)
                } else {
                    return false
                }
            })
        });
    </script>

    <div class="section container">

        <header class="mb-6">
            <h1 class="title has-text-weight-light is-size-1">{{ config('endproducts.list.title') }}</h1>

            @if ( config('endproducts.list.title') )
                <h2 class="subtitle has-text-weight-light">{{ config('endproducts.list.title') }}</h2>
            @endif
        </header>

        @if (session()->has('message'))
            <div class="notification">
                {{ session('message') }}
            </div>
        @endif



        <div class="card">

            <div class="card-content">
        
                <div class="content">
        
                    <div class="columns">
        
                        <div class="column is-half">
                            <div class="field has-addons">
        
                                <p class="control">
                                  <button class="button is-info is-light is-small" wire:click="listAll()">
                                    <span class="icon is-small"><x-carbon-list /></span>
                                  </button>
                                </p>
                                <p class="control ml-5">
                                  <button class="button is-link is-light is-small" wire:click="addArticle()">
                                    <span class="icon is-small"><x-carbon-add /></span>
                                    <span>Add New</span>
                                  </button>
                                </p>
        
                                <p class="control ml-1">
                                    <button class="button is-link is-light is-small" wire:click="editArticle({{ $ep->id }})">
                                      <span class="icon is-small"><x-carbon-edit /></span>
                                      <span>Edit</span>
                                    </button>
                                </p>
        
                            </div>
        
                        </div>
                        <div class="column has-text-right">
                            <div class="field has-addons is-pulled-right">
        
                                <p class="control ml-1">
                                <button class="button is-dark is-light is-small" wire:click="startRelease({{ $ep->id }})">
                                    <span class="icon has-text-warning is-small"><x-carbon-stamp /></span>
                                    <span>Release</span>
                                </button>
                                </p>
        
                                <p class="control ml-1">
                                <button class="button is-dark is-light is-small" wire:click="addArticle()">
                                    <span class="icon is-small"><x-carbon-change-catalog /></span>
                                    <span>Revise</span>
                                </button>
                                </p>
        
                            </div>
                        </div>
        
                    </div>
        
        
        
                </div>
        
                <div class="media">
                    <div class="media-left">
                      <figure class="image is-48x48">
                        <x-carbon-globe />
                      </figure>
                    </div>
                    <div class="media-content">
                      <p class="title is-4"> {{ $ep->product_no }}</p>
                      <p class="subtitle is-6">{{ $ep->description}}</p>
                    </div>
                </div>
        
        
        
                HU-{{ $ep->id }}
                {{ $ep->prop1 }}
                {{ $ep->prop2 }}
        
        
                <div class="content has-text-right">
        
                    <button class="button is-danger is-light is-small" wire:click="deleteConfirm({{ $ep->id }})">
                    <span class="icon is-small"><x-carbon-trash-can /></span>
                    <span>Delete</span>
                    </button>
        
                </div>
        
            </div>
        
        
        
        
        
        </div>











</div>

</x-layout>













