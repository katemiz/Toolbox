
@if ($isAdd)
<x-title :params="config('articles.create')" />
@endif

@if ($isEdit)
<x-title :params="config('articles.update')" />
@endif


<form method="POST" enctype="multipart/form-data">
    @csrf


    <div class="field">

        <label class="label has-text-info has-text-weight-light" for="prop1">
        Prop 1
        </label>

        <div class="control has-icons-right">

            <input wire:model="prop1"
                name="prop1"
                id="prop1"
                type="text" required>
        </div>
    </div>


    <div class="field">

        <label class="label has-text-info has-text-weight-light" for="prop1">
        Prop 2
        </label>

        <div class="control has-icons-right">

            <input wire:model="prop2"
                name="prop2"
                id="prop2"
                type="text" required>
        </div>
    </div>




    <div class="buttons is-right">

        @if ($isAdd)
        <button wire:click.prevent="storeArticle()" class="button is-dark">Add New</button>
        @endif

        @if ($isEdit)
        <button wire:click.prevent="updateArticle()" class="button is-dark">Update</button>
        @endif
    </div>

</form>
