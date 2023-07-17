<footer class="footer has-background-dark">
<div class="columns has-text-white">
    <div class="column has-text-centered-mobile">


        <a href="https://kapkara.one" class="icon-text has-color-warning">
            <span class="icon has-text-grey-light">
                <img src="/images/baykus_orange.svg" alt="kapkara logo" width="28px">
            </span>
        </a>
        <br>
        <span class="ml-1 block">kapkara</span>

    </div>
    <div class="column">
        <p class="has-text-weight-light has-text-centered has-text-centered-mobile">

        <span class="icon has-text-link has-text-centered">
            <x-carbon-sigma class="h-6 w-6 text-red-600"/>
        </span>
    </p>

        <p class="has-text-weight-light has-text-centered has-text-centered-mobile">{{ env('APP_NAME') }}</p>
        <p class="has-text-weight-light has-text-centered has-text-centered-mobile is-size-7 has-text-info">{{ env('APP_MOTTO') }}</p>
    </div>
    <div class="column">
        <p class="has-text-weight-light has-text-right has-text-centered-mobile">© 2023</p>
        <p class="has-text-weight-light has-text-right has-text-centered-mobile is-size-7 has-text-warning">Simplicity in Action</p>
    </div>
</div>
</footer>