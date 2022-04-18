<div class="bg-gray-200">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-0">
        @foreach ($works as $data)
            
            <div class="group relative flex flex-col justify-center overflow-hidden">
                <div class="group-hover:opacity-100 opacity-0 transition-opacity duration-300 absolute top-0 right-0 left-0 bottom-0 bg-gray-200/70 z-10"></div>
                <h3 class="group-hover:translate-y-0 group-hover:opacity-100 opacity-0 translate-y-20 transition-opacity transition-transform duration-300 z-10 absolute inset-y-1/2 right-0 left-0 text-center text-color-base self-center m-auto text-5xl capitalize">{{ $data["title"] }}</h3>
                <picture>
                    <source 
                        srcset=" {{ $data['img_2'][0] }} 1x, 
                        {{ $data['img_2'][1] }} 2x, 
                        {{ $data['img_2'][2] }} 3x, 
                        {{ $data['img_2'][3] }} 4x, 
                        {{ $data['img_2'][4] }} 5x" 
                        type="image/webp">
                    @if($data['type'] === 'gif')
                        <source 
                        srcset=" {{ $data['img_1'][0] }} 1x, 
                        {{ $data['img_1'][1] }} 2x, 
                        {{ $data['img_1'][2] }} 3x, 
                        {{ $data['img_1'][3] }} 4x, 
                        {{ $data['img_1'][4] }} 5x" 
                        type="image/jpeg">
                    @else
                        <source 
                            srcset=" {{ $data['img_1'][0] }} 1x, 
                            {{ $data['img_1'][1] }} 2x, 
                            {{ $data['img_1'][2] }} 3x, 
                            {{ $data['img_1'][3] }} 4x, 
                            {{ $data['img_1'][4] }} 5x" 
                            type="image/jpeg">
                    @endif
                    
                    <img class="group-hover:scale-110 scale-100 transition-transform duration-300" 
                        src="{{ $data['img_1'][0] }}" 
                        alt="{{ $data['title'] }}" >
                </picture>
            </div>
        @endforeach
  
    </div>
</div>