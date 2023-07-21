
    <section class="section container">


        <div class="columns">

            <div class="column is-3">

                <x-side-menu />

            </div>

            <div class="column">

                <x-title :params="config('toolbox')[$secenek]" />

                @switch($secenek)
                    @case("area-inertia")
                        <div class="columns">

                            <div class="column is-half">
                                <figure class="image is-fluid">
                                    <img src="{{ asset('/images/HollowCircle.png') }}">
                                </figure>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <label class="label">Outside Diameter, OD</label>
                                    <div class="control">
                                    <input class="input" type="text" placeholder="Outside diameter" wire:model="odia" value="{{ $odia }}">
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Inside Diameter, ID</label>
                                    <div class="control">
                                    <input class="input" type="text" wire:model="idia" placeholder="Inside diameter" value="{{ $idia }}">
                                    </div>
                                </div>

                                <nav class="level">
                                    <div class="level-item has-text-centered">
                                        <div class="has-background-success-light p-3">
                                            <p class="heading">mm<sup>4</sup></p>
                                        <p class="title" id="ainertia">{{ $ainertia }}</p>
                                        </div>
                                    </div>
                                </nav>
                            </div>

                        </div>
                        @break
                    @case("wind-load")

                        <div>
                            <div class="column is-4">
                                <figure class="image is-fluid">
                                    <img src="{{ asset('/images/LoadOnPlate.png') }}">
                                </figure>
                            </div>

                            <div class="colum">

                                <div class="field">
                                    <label class="label">Air density kg/m3</label>
                                    <div class="control">
                                    <input class="input" type="text" wire:model="rho" placeholder="1.25" value="{{ $rho }}">
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Wind Speed (m/s)</label>
                                    <div class="control">
                                    <input class="input" type="text" wire:model="wspeed" placeholder="30" value="{{ $wspeed }}">
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Drag Coefficient of Payload</label>
                                    <div class="control">
                                    <input class="input" type="text" wire:model="Cd" placeholder="1.28" value="{{ $Cd }}">
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Payload Sail Area</label>
                                    <div class="control">
                                    <input class="input" type="text" wire:model="sail_area" placeholder="0.8" value="{{ $sail_area }}">
                                    </div>
                                </div>

                                <nav class="level">
                                    <div class="level-item has-text-centered">
                                    <div class="has-background-success-light p-3">
                                        <p class="heading">Load on Payload (N)</p>
                                        <p id="load" class="is-size-1 has-text-weight-bold">{{ $fwind }}</p>
                                    </div>
                                    </div>
                                </nav>

                            </div>
                        </div>
                        @break
                    @default

                        <figure class="image is-1by1">
                            <img src="{{ asset('/images/eng_utilities.svg') }}" alt="The Process Flow" on:click="{showImg}">
                        </figure>

                      @break;

                @endswitch


            </div>

        </div>




    </section>

