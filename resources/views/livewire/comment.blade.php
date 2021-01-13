<article class="p-6 m-auto mt-6 bg-white rounded-sm shadow-lg ">

    <h1 class="py-3 font-bold text-gray-800" >Add Comment</h1>


    <div class="h-16 sm:pr-12">
        <form  wire:submit.prevent="addComment" class="relative">
            <input
                wire:model.lazy="newComment"
                type="search"
                name="query"
                placeholder="Add a Comment"
                required="required"
                class="w-full p-4 text-gray-700 bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-gray-400 focus:ring-0"
                emoji
            >
            <button
                type="submit"
                class="absolute top-0 bottom-0 right-0 z-10 px-8 mt-1 mb-1 mr-1 font-semibold text-white bg-green-900 rounded font-lg hover:bg-teal-300 focus:outline-none focus:ring"
            >
                Add Comment
            </button>
        </form>
    </div>
    <section class="mt-6">
        @foreach($comments as $comment)
        <div class="p-4 mb-4 bg-gray-100 shadow-md">
            <p class="flex justify-between mb-1"><strong>
                    {{ $comment['creator'] }}
                </strong> <small> comments {{ $comment['created_at'] }}</small></p>
            <p>
                {{ $comment['body'] }}
            </p>
        </div>

        @endforeach

    </section>

</article>
