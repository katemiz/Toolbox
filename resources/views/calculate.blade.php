
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
                                    <input class="input" type="text" placeholder="Outside diameter" wire:model="odia">
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Inside Diameter, ID</label>
                                    <div class="control">
                                    <input class="input" type="text" wire:model="idia" placeholder="Inside diameter">
                                    </div>
                                </div>

                                <nav class="level">
                                    <div class="level-item has-text-centered">
                                        <div class="has-background-success-light p-3">
                                            <p class="heading">mm<sup>4</sup></p>
                                        <p class="title">{{ $ainertia }}</p>
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
                                    <input class="input" type="text" wire:model="rho" placeholder="1.25">
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Wind Speed (m/s)</label>
                                    <div class="control">
                                    <input class="input" type="text" wire:model="wspeed" placeholder="30">
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Drag Coefficient of Payload</label>
                                    <div class="control">
                                    <input class="input" type="text" wire:model="Cd" placeholder="1.28">
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Payload Sail Area</label>
                                    <div class="control">
                                    <input class="input" type="text" wire:model="sail_area" placeholder="0.8">
                                    </div>
                                </div>

                                <nav class="level">
                                    <div class="level-item has-text-centered">
                                    <div class="has-background-success-light p-3">
                                        <p class="heading">Load on Payload (N)</p>
                                        <p class="is-size-1 has-text-weight-bold">{{ $fwind }}</p>
                                    </div>
                                    </div>
                                </nav>

                            </div>
                        </div>
                        @break

                    @case("torsion-deflection")
                        <div class="columns">

                            <div class="column is-half">
                                <figure class="image is-fluid">
                                    <img src="{{ asset('/images/HollowCircle.png') }}">
                                </figure>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <label class="label">Outside Diameter, OD (mm)</label>
                                    <div class="control">
                                    <input class="input" type="text" placeholder="Outside diameter" wire:model="odia">
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Inside Diameter, ID (mm)</label>
                                    <div class="control">
                                    <input class="input" type="text" wire:model="idia" placeholder="Inside diameter">
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Modulus of Elasticity in Shear, G (N/m<sup>2</sup>)</label>
                                    <div class="control">
                                    <input class="input" type="text" wire:model="material_g" placeholder="material_g">
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Torque (Nm)</label>
                                    <div class="control">
                                    <input class="input" type="text" wire:model="torque" placeholder="Torque">
                                    </div>
                                </div>


                                <div class="field">
                                    <label class="label">Beam Length (m)</label>
                                    <div class="control">
                                    <input class="input" type="text" wire:model="length" placeholder="Beam Length">
                                    </div>
                                </div>

                                <nav class="level">
                                    <div class="level-item has-text-centered">
                                        <div class="has-background-success-light p-3">
                                            <p class="heading">Angular Deflection</p>
                                        <p class="title">{{ $adeflection }} &deg;</p>
                                        </div>
                                    </div>
                                </nav>
                            </div>

                        </div>
                        @break





                    @default

                        <figure class="image is-1by1">
                            <img src="{{ asset('/images/eng_utilities.svg') }}" alt="The Process Flow">
                        </figure>

                      @break;

                @endswitch


            </div>

        </div>






    </section>

