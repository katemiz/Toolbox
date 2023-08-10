
<x-title :params="config('articles.release.start')" />



@if (session()->has('release-start'))
<div class="notification">
    {{ session('release-start') }}
</div>
@endif

<form method="POST" enctype="multipart/form-data">
    @csrf


    <x-select :params="config('requirements.form.rtype')" value="{{ $requirement ? $requirement->rtype : '' }}"/>


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

        <button wire:click.prevent="storeArticle()" class="button is-dark">Start Release</button>

    </div>

</form>
