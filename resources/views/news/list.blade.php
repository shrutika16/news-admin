<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News List') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    @if (session()->has('message'))
        <div id="alert" class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500">
            <span class="inline-block align-middle mr-8">
                {{ session('message') }}
            </span>
            <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="document.getElementById('alert').remove();">
                <span>×</span>
            </button>
        </div>
    @endif
    <div class="py-5">
    <a href="{{ route('news.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-10">Create New News</a>
    </div>
    @if (count($news)>0)
        <div class="py-10">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 bg-black text-white border-black  text-center font-semibold uppercase tracking-wider">
                                {{ __('Title') }}
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 bg-black text-white border-black text-centerfont-semibold uppercase tracking-wider">
                                {{ __('Date Time') }}
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 bg-black text-white border-black text-centerfont-semibold uppercase tracking-wider">
                                {{ __('News Portal') }}
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 bg-black text-white border-black text-centerfont-semibold uppercase tracking-wider">
                                {{ __('Category') }}
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 bg-black text-white border-black text-centerfont-semibold uppercase tracking-wider">
                                {{ __('Is Active') }}
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-black bg-black text-white font-semibold uppercase tracking-wider text-center ">
                                {{ __('Action') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($news as $row)
                        <tr>
                            <td class="px-5 py-5 bg-white text-center  text-sm ">
                                {{ $row->title }}
                            </td>
                            <td class="px-5 py-5  bg-white  text-center   text-sm ">
                                {{ $row->date_time }}
                            </td>
                            <td class="px-5 py-5  bg-white  text-center   text-sm ">
                                {{ $row->news_portal->title }}
                            </td>
                            <td class="px-5 py-5  bg-white  text-center   text-sm ">
                                {{ $row->category->title }}
                            </td>
                            <td class="px-5 py-5  bg-white  text-center   text-sm ">
                                {{ $row->is_active }}
                            </td>
                            <td class="px-5 py-5 bg-white text-sm  text-center ">
                                <div class="inline-block whitespace-no-wrap">
                                    <a href="{{ route('news.edit',  $row->id) }}" class="float-left bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                    <form action="{{ route('news.destroy',  $row->id) }}" method="POST" class="float-left">
                                        {{ method_field('DELETE') }}
                                        @csrf
                                        <button
                                            type="submit"
                                            onclick="return confirm('Are you sure you want to delete this item?');"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                        >Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</x-app-layout>

@push('scripts')
@endpush
