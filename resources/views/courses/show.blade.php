<x-header>
    <h2 class="bg-yellow-500 text-center font-bold text-white text-xl">{{"Reviews For" . $course->departmentCode . "-" . $course->courseNumber}}</h2>
    <div class=" grid grid-cols-3 bg-gray-100">
        <div class="col-start-2">
            @foreach ($course->reviews as $review)
                <div class="bg-white m-2 p-3 shadow-md">
                    <h3 class="text-lg font-bold underline">{{$review->question}}</h3>
                    <p>{{$review->response}}</p>
                    <p class="bg-black text-white">{{$review->professor->firstName . " " . $review->professor->lastName}}</p>
                    @auth
                    <form  class="my-2" method="POST" action="{{ route('reviews.destroy', $review->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="bg-gray-200 hover:bg-red-900 hover:text-white rounded p-1">Delete</button>
                    </form>
                    @endauth
                </div>   
            @endforeach
        </div>
        
    </div>
</x-header>