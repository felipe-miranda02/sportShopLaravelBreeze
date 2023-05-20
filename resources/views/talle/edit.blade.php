<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight dark:bg-gray-700">
            {{ __('Talles') }}
        </h2>
    </x-slot>
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} Talle</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('talles.update', $talle->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('talle.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>

