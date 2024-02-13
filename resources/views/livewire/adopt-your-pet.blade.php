<div>
    <div class="pt-5">
        <div class="container">
            <div class="row d-flex">
                @foreach ($pets as $pet)
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                            <img alt="image" src="{{ Storage::url($pet->file_name) }}" class="block-20 rounded" style="width: 300px; height:200px; object-fit:cover">
                        <div class="text p-4 text-center">
                            <h3 class="heading"><a href="#"></a>{{ $pet->name }}</h3>
                            <div class="meta mb-2">
                                <div><a href="#">{{ $pet->age }}</a></div>|
                                <div><a href="#">{{ $pet->gender }}</a></div>|
                                <div><a href="#">{{ $pet->species }}</a></div>

                            </div>
                            <a type="button" href="/bookyourpet/{{ $pet->id }}" class="btn btn-primary">Adopt</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
