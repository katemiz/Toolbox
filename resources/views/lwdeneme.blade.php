<x-layout>

    <section class="section container">


        {{-- <x-attachment-component :item="$requirement" model="requirement" redirect="/requirements/view/{{$requirement->id}}"/> --}}


        @livewire('datatable', ['model' => 'Article'])
        @livewire('attachment-component', ['model' => 'Article','modelId' => '34'])

        {{-- <livewire:attachment-component model="Article" modelId="34" /> --}}



    </section>
</x-layout>

