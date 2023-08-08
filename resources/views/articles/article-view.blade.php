
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

<x-title :params="config('articles.read')" />

@if (session()->has('message'))
<div class="notification">
    {{ session('message') }}
</div>
@endif

<a wire:click="listAll()">List All</a>


<div class="card">

    {{ $article->id }}

    {{ $article->prop1 }}
    {{ $article->prop2 }}


</div>

<a wire:click="editArticle({{ $article->id }})">Edit</a>
<a wire:click="deleteConfirm({{ $article->id }})">Delete</a>
