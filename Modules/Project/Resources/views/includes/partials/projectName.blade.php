<div class="container mx-auto relative my-10 mb-4 px-4 lg:px-0">
    <div class="w-full max-w-screen-lg mx-auto">
        <ul class="flex flex-col">
            @foreach($project as $item)
                <li class="flex flex-col md:flex-row w-full my-1">
                    <span class="font-red-hat text-base font-semibold text-gray-700 block w-4/12">
                        Client Name
                    </span>
                    <h3 class="font-red-hat text-base text-gray-900 block w-8/12">
                       {{ $item->client }}
                    </h3>
                </li>
                <li class="flex flex-col md:flex-row w-full my-1">
                    <span class="font-red-hat text-base font-semibold text-gray-700 block w-4/12">
                        Project Overview
                    </span>
                    <h3 class="font-red-hat text-base text-gray-900 block w-8/12">
                        {{ $item->overview }}
                    </h3>
                </li>
            @endforeach
        </ul>
    </div>
</div>