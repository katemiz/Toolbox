<x-layout>

    <section class="section container">


        <div class="columns">

            <div class="column is-3">

                <x-side-menu />

            </div>

            <div class="column">

                <x-title :params="config('toolbox.areainertia')" />

                <div class="tabs">
                    <ul>
                      <li class="is-active"><a>Circular</a></li>
                      <li><a>Rectangular</a></li>
                    </ul>
                </div>


                <div class="column card" id="circular">

                    Circular
                </div>

                <div class="column card" id="rectangular">

                    Rectangular
                </div>

            </div>

        </div>




    </section>
</x-layout>
    
    