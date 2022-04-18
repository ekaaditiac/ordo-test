<div class="relative">
    <div class=" relative h-72 lg:h-96 overflow-hidden">
        @foreach($project as $item)
        <picture>
                <source srcset="
                    @foreach($item->image_banner_1 as $key => $img_webp)
                        {{ $img_webp }} {{$key + 1}}x,
                    @endforeach"
                 type="image/webp">
            
            
                <source srcset="
                    @foreach($item->image_banner_2 as $key => $img_webp)
                        {{ $img_webp }} {{$key + 1}}x,
                    @endforeach"
                type="image/jpeg">                
            <img class="block w-full h-full object-cover" src={{ $item->image_banner_2[0] }} alt="project No. 1">
        </picture>
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-white/30 z-10"></div>
        <div class="container mx-auto flex flex-col justify-center absolute top-0 right-0 bottom-0 left-0 z-10">
            <h1 class="text-black text-5xl font-red-hat w-full text-center self-center">
                {{ $item->title }}
            </h1>
            <h2 class="text-gray-700 text-2xl font-red-hat mt-2 text-center">
                {{ $item->category }}
            </h2>
        </div>

        @endforeach
        
    </div>
</div>