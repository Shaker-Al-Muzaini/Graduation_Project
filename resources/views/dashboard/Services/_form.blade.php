<div class="form-group">
    <x-form.input label="Services Name" name="services_name"  :value="$services->services_name"/>
</div>

<div class="form-group">
    <x-form.textarea label="Services Description " id="my-editor"
       name="services_description" :value="$services->services_description"/>
</div>
<div class="form-group">
    <x-form.input label="Services Image"  name="services_image" type="file"  :value="$services->services_image" accept="image/*"/>
    @if($services->services_image)
        <img src="{{asset($services->services_image)}}" alt="not" height="70">
    @endif
    <br>
</div>
<div class="form-group">
    <x-form.input label="Services Owner Name" name="services_owner_name"  :value="$services->services_owner_name"/>
</div>
<div class="form-group">
    <x-form.input label="Services Owner Image"  name="services_owner_image" type="file"  :value="$services->services_owner_image" accept="image/*"/>
    @if($services->services_owner_image)
        <img src="{{asset($services->services_owner_image)}}" alt="not" height="70">
    @endif
    <br>
</div>
<div class="form-group">
    <x-form.input label="Services Price" type="number" name="price"  :value="$services->price"/>
</div>
<br><br>
<div>
    <button type="submit" class="btn btn-outline-info">{{$button_label ??'Save'}}</button>
</div>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
</script>
<script>
    CKEDITOR.replace('my-editor', options);
</script>
