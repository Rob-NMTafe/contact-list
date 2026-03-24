<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Topics Admin') }}
        </h2>
    </x-slot>

    <section class="py-4 mx-8 space-y-4 ">
        <header>
            <h3 class="text-2xl font-bold text-zinc-700">

            </h3>
        </header>

        <div class="overflow-x-auto rounded border border-gray-300 shadow-sm">
        <table class="table x-full">
            <thead class="min-w-full divide-y-2 divide-gray-200 bg-white">
            <tr class="*:font-medium text-gray-200 ">
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody class="bg-white *:hover:bg-grey-50">

            @foreach($topics as $topic)
            <tr class="bg-white odd:bg-grey-100">
                <td>#</td>
                <td>{{ $topic->name }}</td>
                <td>{{ $topic->description }}</td>
                <td>Show Edit Delete</td>
            </tr>
            @endforeach

            </tbody>
            <tfoot>
            <tr>
                <td colspan="4" class="px-3 py-2 whitespace-nowrap">
                    {{ $topics->links() }}
                </td>
            </tr>
            </tfoot>

        </table>
        </div>

    </section>

</x-admin-layout>
