<div>
    @auth

    <div class="bg-secondary p-5">
        <h2 class="mb-4">Leave a message here</h2>
        <form wire:submit.prevent="addComment">
@csrf
                <div class="col-12 pb-4">
                    <textarea wire:model.defer="newComment" class="form-control bg-white border-0" rows="5" placeholder="message"></textarea>
                </div>

            <div class="col-6 mx-auto">
                <button class="btn btn-primary w-100 h-100" type="submit">send the message</button>
            </div>
        </form>
    </div>
    @endauth

    <div class="bg-secondary p-5">
        <h2 class="mb-4">Commentaires </h2>
        @forelse ($comments as $comment)
        <div class="d-flex mb-4">

            <div class="ps-3">
                <h5><a href="">{{ $comment->user->name }}</a> <small><i>{{ $comment->created_at }}</i></small></h5>
                <p>{{ $comment->comment }}</p>

            </div>
        </div>
        @empty
        <p class="text-[#FFFEFE] overflow-hidden text-xs  w-[75%] max-h-[90px] my-6" id="main-text">
            No comments yet.
        </p>
    </div>
@endforelse


    </div>
</div>
S
