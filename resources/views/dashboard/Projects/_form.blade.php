<div class="form-group">
    <x-form.input label="Projects Name" name="project_name"  :value="$projects->project_name"/>
</div>

<div class="form-group">
    <x-form.textarea label="Projects Description " id="my-editor2"
       name="project_description" :value="$projects->project_description"/>
</div>
<div class="form-group">
    <x-form.textarea label="Projects Features " id="my-editor"
       name="project_features" :value="$projects->project_features"/>
</div>
<div class="form-group">
    <x-form.textarea label="Projects URL"
       name="project_url" :value="$projects->project_url"/>
</div>
<div class="form-group">
    <x-form.input label=" Background Image "  name="project_image_1" type="file"  :value="$projects->project_image_1" accept="image/*"/>
    @if($projects->project_image_1)
        <img  src="{{asset($projects->project_image_1)}}" alt="not" height="70">
    @endif
    <br>
</div>
<div class="form-group">
    <x-form.input label="Author Report" name="author_report"  :value="$projects->author_report"/>
</div>
<div class="form-group">
    <x-form.input label="Authors  Image "  name="authors_photo" type="file"  :value="$projects->authors_photo" accept="image/*"/>
    @if($projects->authors_photo)
        <img  src="{{asset($projects->authors_photo)}}" alt="not" height="70">
    @endif
    <br>
</div>
<div class="form-group">
    <x-form.input label="Report File" type="file" name="report_file"  :value="$projects->report_file"/>
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
<script>
    CKEDITOR.replace('my-editor2', options);
</script>
