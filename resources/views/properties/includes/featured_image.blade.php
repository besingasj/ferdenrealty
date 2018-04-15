<div class="row">
    <div class="col-md-12">
        @if ($errors->has('featured_image'))
            <p class="text-danger">{{ $errors->first('featured_image') }}</p>
        @endif

        @if (session()->has('featured_image_success_message'))
            <p class="text-success">{{ session()->get('featured_image_success_message') }}</p>
        @endif

        @if (is_null($property->featured_image))
                <img src="http://via.placeholder.com/400x150?text=click%20to%20upload" id="featuredImage" class="img-thumbnail" alt="">
            @else
                <img src="{{ asset('public/storage/' . $property->featured_image) }}" id="featuredImage" class="img-thumbnail" alt="">
            <p class="text-muted"><i>click to change</i></p>
        @endif
    </div>
    <form action="{{ route("image.featured", ['property_id' => $property->id]) }}" method="post" enctype="multipart/form-data" style="display: none">
        @csrf
        <input type="file" name="featured_image" id="clickToUpload" accept="image/*">
    </form>
</div>
@push("properties_scripts")
    <script>
        $(document).ready(function() {
            var featuredImage = $("#featuredImage");
            var clickToUpload = $("#clickToUpload");
            featuredImage.click(function() {
                clickToUpload.click();
            });

            clickToUpload.on("change", function() {
                $(this).parent().submit();
            });
        });
    </script>
@endpush