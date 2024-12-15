<x-layout>
    <main id="main" class="main h-fit relative w-100 border ">
        <ul>    
            <li>{{$listing['id']}}</li>
            <li>{{$listing['location']}}</li>
            <li>{{$listing['type']}}</li>
            <li>{{$listing['category']}}</li>
        </ul>
    </main>
</x-layout>