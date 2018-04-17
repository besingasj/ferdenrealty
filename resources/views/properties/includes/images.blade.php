<div class="row">
    <div class="col-md-12">
        @if ($errors->has('sliding_images'))
            <p class="text-danger">{{ $errors->first('sliding_images') }}</p>
        @endif
    </div>

    <form action="{{ route("image.gallery", ['property_id' => $property->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="file" name="sliding_images[]" id="galleryUpload" class="form-control" accept="image/*" multiple>
        </div>
    </form>
    <div class="col-md-12">
        @if(count($property->images) > 0)
            @foreach ($property->images as $image)
                <img src="{{ asset('public/storage/' . $image->path) }}" id="featuredImage" class="img-thumbnail" alt="">
                <a class="btn btn-sm btn-danger" href="{{ route('images.delete', ['image_id' => $image->id]) }}" style="margin-top: 5px">delete</a>
                <hr>
            @endforeach
        @endif
    </div>
</div>
@push("properties_scripts")
    <script>
        $(document).ready(function() {
            var galleryUpload = $("#galleryUpload");

            galleryUpload.on('change', function() {
                $(this).parent().parent().submit();
            });
        });
    </script>
@endpush