<div class="max-w-7xl mx-auto">
    <h2>Links</h2>
    <a href="{{ route('link-manager') }}" class="self-end text-blue-600 hover:underline py-2">New Link</a>
    <table class="min-w-full border-t-gray-200 divide-y divide-gray-200 text-base my-10">
        <thead>
            <tr class="bg-gray-50">
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Link</th>
                <th class="px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
        @forelse($links as $link)
            <tr>
                <td class="px-4 py-2">{{$link->title}}</td>
                <td class="px-4 py-2">{{$link->description }}</td>
                <td class="px-4 py-2">{{{$link->url}}}</td>
                <td class="px-4 py-2"><a href="{{ route('link-manager', ['link' => $link->id]) }}">Edit</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="4"><span class="flex">There are no links <a href="{{ route('link-manager') }}" class="self-end text-blue-600 hover:underline px-6">New Link</a></span></td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
