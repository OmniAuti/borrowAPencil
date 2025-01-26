<x-layout>
    <main id="main" class="main p-10 w-100 h-[calc(100vh_-_var(--headerHeight))] mx-auto">
        <ul>    
            <li>{{$listing['id']}}</li>
            <li>{{$listing['location']}}</li>
            <li>{{$listing['type']}}</li>
            <li>{{$listing['category']}}</li>
        </ul>
    </main>
</x-layout>