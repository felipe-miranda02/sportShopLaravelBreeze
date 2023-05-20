<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight dark:bg-gray-700">
            {{ __('Tipos') }}
        </h2>
    </x-slot>
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} Tipo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipos.update', $tipo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tipo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>